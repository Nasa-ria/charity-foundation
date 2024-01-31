<?php

namespace App\Http\Controllers;

use Exception;
use App\Models\User;
use App\Models\Image;
use Illuminate\Support\Str;
use Illuminate\Http\Request;
use Laravel\Passport\HasApiTokens;
use Illuminate\Support\Facades\Log;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use Illuminate\Notifications\Notifiable;
use Illuminate\Support\Facades\Password;
use Laravel\Socialite\Facades\Socialite;
use Illuminate\Auth\Events\PasswordReset;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Support\Facades\Validator;

class UserController extends Controller
{
    use HasApiTokens, HasFactory, Notifiable;
    
    public function signIn(Request $request)
    {
        
        $request->validate([
            'email' => 'required',
            'password' => 'required',
        ]);
        $credentials = $request->only('email', 'password');
        if (auth('web')->attempt($credentials)) {
            $user = auth('web')->user();

            $token = $user->createToken("User")->accessToken;

            // return response()->json([
            //     'data' => $user->refresh(),
            //     'token' => $token,
            // ]);
            return redirect()->route('home')->with('success', 'User Login successfully');
        } else {
            return "fail";
        }
      
    }

    public function register(Request $request)
    {
        // dd($request->all());
        try {
            $validatedData = $request->validate([
                'name' => 'required|string',
                'email' => 'required|email|unique:users,email',
                'password' => 'required|confirmed|min:8', // Example password validation
                'profile' => 'nullable|image', // Optional profile image validation
            ]);

            $user = User::create([
                'name' => $validatedData['name'],
                'email' => $validatedData['email'],
                'password' => Hash::make($validatedData['password']),
            ]);

            // Handle profile image upload
            if ($request->hasFile('profile')) {
                $profileImage = $request->file('profile');
                $profileImagePath = $profileImage->store('profiles', 'public');

                $image = new Image(['url' => $profileImagePath]);
                $user->images()->save($image);
            }

            // return response()->json([
            //     'message' => 'User registered successfully',
            //     'user' => $user,
            // ], 201);
            return redirect()->route('home')->with('success', 'User registered successfully');
        } catch (\Exception $e) {
            // Log the exception for debugging purposes
            Log::error('User registration failed: ' . $e->getMessage());

            // Return an error response
            // return response()->json([
            //     'error' => 'User registration failed. Please try again later.',
            // ], 500);
            return redirect()->back()->with('error', 'User registration failed. Please try again later.');
        }
    }


    public function redirectToGoogle()
    {
        try{
            return Socialite::driver('google')->redirect();
         
        } catch (\Exception $e) {
            return response()->json(['message' => ' authentication failed: ' . $e->getMessage()]);
        }
      
    }
    public function loginWithFacebook()
    {
        try{
           $facebook= Socialite::driver('google')->stateless()->redirect();
         
        } catch (\Exception $e) {
            return response()->json(['message' => ' authentication failed: ' . $e->getMessage()]);
        }
      
    }


    public function handleGoogleCallback(){
        try {
        $socialUser = Socialite::driver('google')->user();
    
        $user = User::where('email', $socialUser->email)->first();
    
        if ($user) {
            Auth::login($user);
            return redirect('/');
        } else {
            // Create a new user and log them in
            $newUser = new User();
            $newUser->name = $socialUser->name;
            $newUser->email = $socialUser->email;
            $newUser->password = Hash::make(Str::random(16));
            $newUser->save();
    
            Auth::login($newUser);
            return redirect('/');
        }
        } catch (\Exception $e) {
            Log::error('failed: ' . $e->getMessage());
            // Handle other exceptions
            return redirect()->route('login')->with('error', 'Google authentication failed: ' . $e->getMessage());
        }
        }

    
    public function loginWithGoogleCallback(){
        $socialUser = Socialite::driver('facebook')->user();
    
        $user = User::where('email', $socialUser->email)->first();
    
        if ($user) {
            Auth::login($user);
            return redirect('/');
        } else {
            // Create a new user and log them in
            $newUser = new User();
            $newUser->name = $socialUser->name;
            $newUser->email = $socialUser->email;
            $newUser->password = Hash::make(Str::random(16));
            $newUser->save();
    
            Auth::login($newUser);
            return redirect('/');
        }

    }
    public function changePassword(Request $request)
    {
        $request->validate([
            'current_password' => 'required',
            'new_password' => 'required|string|min:8|confirmed',
        ]);
    
        $user = Auth::user();
    
        if (!Hash::check($request->current_password, $user->password)) {
            return redirect()->back()->with('error', 'Current password is incorrect.');
        }
    
        $user->password = Hash::make($request->new_password);
        $user->save();
    
        return redirect()->back()->with('success', 'Password changed successfully.');
    }
   
    
    
    
    
    
   
    

    

    public function logout(Request $request)
    {
        Auth::logout();
        return "loged out ";
    }

    public function forget_password (Request $request) {
      return view('pages.admin.auth.forgot-password');
    }

    public function forgetpassword (Request $request) {
        $request->validate(['email' => 'required|email']);
     
        $status = Password::sendResetLink(
            $request->only('email')
        );
     
        return $status === Password::RESET_LINK_SENT
                    ? back()->with(['status' => __($status)])
                    : back()->withErrors(['email' => __($status)]);
    }


    public function password_reset (Request $request, string $token) {
            return view('auth.reset-password', ['token' => $token]);
      }

    public function passwordreset (Request $request) {
        $request->validate([
            'token' => 'required',
            'email' => 'required|email',
            'password' => 'required|min:8|confirmed',
        ]);
     
        $status = Password::reset(
            $request->only('email', 'password', 'password_confirmation', 'token'),
            function (User $user, string $password) {
                $user->forceFill([
                    'password' => Hash::make($password)
                ])->setRememberToken(Str::random(60));
     
                $user->save();
     
                event(new PasswordReset($user));
            }
        );
     
        return $status === Password::PASSWORD_RESET
                    ? redirect()->route('login')->with('status', __($status))
                    : back()->withErrors(['email' => [__($status)]]);
    }
}
