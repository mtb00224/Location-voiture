<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class LoginController extends Controller
{
    //

    public function inscription(){
        return view("login.inscription");
    }

    public function connexion(){
        return view("login.connexion");
    }
}
