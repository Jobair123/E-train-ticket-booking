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
    return response()->json(['message' => 'User registered successfully']);
   }
   public function login(Request $request)
{
    $request->validate([
        'email' => 'required|email',
        'password' => 'required'
    ]);

    $credentials = $request->only('email', 'password');

    if (Auth::attempt($credentials)) {
        return response()->json(['message' => "Login Successfully"], 200);
    }

    return response()->json(['message' => "Login failed"], 401);
}


}
