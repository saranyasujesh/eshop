<?php

namespace App\Http\Controllers;
use Illuminate\Database\Eloquent\Builder;
use Illuminate\Http\Request;

use App\Models\User;
class Users extends Controller
{
    public function login(){
        return view('login');
    }

    
    
    public function logout(){
        return view('home');
    }

}
