<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Support\Str;
use Illuminate\Http\Request;
use Laravel\Passport\HasApiTokens;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use Illuminate\Notifications\Notifiable;
use Laravel\Socialite\Facades\Socialite;
use Illuminate\Database\Eloquent\Factories\HasFactory;

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

            return response()->json([
                'data' => $user->refresh(),
                'token' => $token,
            ]);
        } else {
            return "fail";
        }
    }

    public function register(Request $request)
    {
        $validated = $request->validate([
            'name' => 'required|string',
            'email' => 'required',
            'password' => 'required',
        ]);
       
        $profileImagePath = null;
        if ($request->hasFile('profile')) {
            $profileImagePath = $request->file('profile')->store('profile');
        }
        $user = User::create([
            'name' => $validated['name'],
            'email' => $validated['email'],
            'password' => Hash::make($validated['password']),
            'profile' => $profileImagePath,
        ]);
        return response()->json([
            'data' => $user->refresh()
        ]);
    }

    public function loginWithGoogle()
    {
        try{
           $google= Socialite::driver('google')->stateless()->redirect();
         
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


    public function loginWithFacebookCallback(){
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
}
