<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\Auth;

use Illuminate\Http\Request;

class ControllerAuth extends Controller
{
   public function login(){
      return view("auth.login");
   }
   public function register(){
      return view("auth.register");
   }
}
