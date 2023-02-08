<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Informations;

class InformationsController extends Controller
{
    public function accueil(){
        $information = Informations::first();
        dd($information);
    }
    //
}
