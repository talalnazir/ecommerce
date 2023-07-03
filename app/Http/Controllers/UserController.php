<?php

namespace App\Http\Controllers;
use Illuminate\Support\Facades\Hash;
use Illuminate\Http\Request;
use App\Models\User;

class UserController extends Controller
{
    function login(Request $req){
       $user= User::where(['email'=>$req->email])->first();
       if(!$user || !Hash::check($req->password,$user->password))
       {
        return "username and password not matched";
       }
       else{
        $req->session()->put('user',$user);
        return redirect('/');
       }
    }
    function registraion(Request $req){
        $data=new user;
        $data->name=$req->name;
        $data->email=$req->email;
        $data->password=Hash::make($req->password);
        $data->save();
        return redirect('/login');


    }
}
