<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Information;
use App\Models\Partenaire;

class InformationsController extends Controller
{
    public function accueil(){
        $information = Information::first();
        $partenaires = Partenaire::all();
        return view('accueil', ['information' => $information, 'partenaires' => $partenaires]);
    }
    //
}
