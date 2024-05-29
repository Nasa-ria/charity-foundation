<?php

namespace App\Http\Controllers;

use Exception;
use App\Models\User;
use App\Models\Image;
use Illuminate\Support\Str;
use Illuminate\Http\Request;
use App\Http\Requests\UserRequest;
use App\Services\polymorphicClass;
use Laravel\Passport\HasApiTokens;
use Illuminate\Support\Facades\Log;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use Illuminate\Notifications\Notifiable;
use Illuminate\Support\Facades\Password;
use Laravel\Socialite\Facades\Socialite;
use Illuminate\Auth\Events\PasswordReset;
use Illuminate\Support\Facades\Validator;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class UserController extends Controller
{
    use HasApiTokens, HasFactory, Notifiable;
    
 
    
    public function signIn(UserRequest $request)
    {
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

    public function register(UserRequest $request)
    {
        
    try{
        $data = $request->validated();
        $data['password'] = Hash::make($data['password']);
        $user = User::create($data);
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


    public function loginWithgoogle()
    {
        try{
            return Socialite::driver('google')->redirect();
         
        } catch (\Exception $e) {
            return response()->json(['message' => ' authentication failed: ' . $e->getMessage()]);
        }
      
    }
    public function loginWithfacebook()
    {
        try{
           $facebook= Socialite::driver('facebook')->stateless()->redirect();
         
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

    
    public function loginWithfaceCallback(){
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
        return view('dashboard.user.pages.forgetPassword');
    }

    public function forgetpassword (UserRequest $request) {
     
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
