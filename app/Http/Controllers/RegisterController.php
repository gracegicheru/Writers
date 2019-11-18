<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\User;
use Hash;

class RegisterController extends Controller
{
    public function store(Request $request){
        $validatedData= $this->validate($request,[
            'name'=>'required',
            'email'=>'required|email',
            'password'=>'required'
            ]);
        $user= new User;
        $user->name=$validatedData['name'];
        $user->email=$validatedData['email'];
        $user->password=Hash::make($validatedData['password']);

        $user->save();

    }

}
