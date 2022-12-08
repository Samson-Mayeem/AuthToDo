<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ControllerAuth extends Controller
{
   public function login(){
      return view("Login");
   }
   public function register(){
      return view("Register");
   }
}
