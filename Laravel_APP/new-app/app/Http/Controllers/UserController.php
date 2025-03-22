<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;
use Illuminate\Support\Facades\Auth;
class UserController extends Controller
{
   public function Register(Request $request){
    $request->validate([
      'name' => 'required|string|max:255',
       'email' =>'required|email',
       'password' =>'required|string|min:6'
    ]);

    $user  = User::create([
      'name'=> $request->name,
      'email' =>$request->email,
      'password' =>bcrypt($request->password)
      
    ]);
    // Create a Sanctum token for the user
    $token = $user->createToken('auth_token')->plainTextToken;

    return response()->json(['message' => 'User registered successfully' ,'token' => $token]);

   }
   public function login(Request $request)
{
    $request->validate([
        'email' => 'required|email',
        'password' => 'required'
    ]);

    $credentials = $request->only('email', 'password');
    if (Auth::attempt($credentials)) {
      
      $user = Auth::user();
      // Create a Sanctum token for the authenticated user
      $token = $user->createToken('auth_token')->plainTextToken;

        return response()->json(['message' => "Login Successfully",'token'=>$token], 200);
    }

    return response()->json(['message' => "Login failed"], 401);
}


public function logout(Request $request){
  // Revoke the authenticated user's token
$request->user()->currentAccessToken()->delete();

  return response()->json(['message' => "Logout successfully"], 200);
}

}
