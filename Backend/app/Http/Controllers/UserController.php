<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use App\Models\User;
class UserController extends Controller
{
    //
    function register(Request $post)
    {
      // User::create($post);
        $obj = new User;        
        $obj->name=$post->input('name');
        $obj->email=$post->input('email');
        $obj->password=Hash::make($post->input('password'));
        $obj->remember_token=$post->input('remember_token');
        $obj->save();
        return $obj;
    }
}
