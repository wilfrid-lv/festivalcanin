<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Information;

class InformationsController extends Controller
{
    public function accueil(){
        $information = Information::first();
        return view('accueil', ['information' => $information]);
    }
    //
}
