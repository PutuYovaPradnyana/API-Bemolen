<?php

namespace App\Http\Controllers\API;

use App\Models\User;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Hash;

class AuthController extends Controller
{
    public function login(Request $request){
        $request->validate([
            'email' => 'required|email',
            'password' => 'required',
            
        ]);
        $user = User::where('email',$request->email)->first();
        if (! $user || ! Hash::check($request->password, $user->password)) {
            return response()->json([
                'success'=>false,
                'message'=>'Unauthorized',
            ],401);
        }
        $user->tokens()->delete();
        $token=$user->createToken;
        return response()->json([
            'success'=>true,
            'message'=>'success',
            'user'=>$user,
            'token'=>$token
        ],200);
    }
    
}
