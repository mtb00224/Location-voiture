<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class VoitureController extends Controller
{
    //definition des fonctions qui vont controler tous ceuw qui est en relation avec les voitures

    public function index(){
        return view('voitures.index');
    }

    public function detail(){
        return view('voitures.detail');
    }

    public function location(){
        return view("voitures.location");
    }

}
