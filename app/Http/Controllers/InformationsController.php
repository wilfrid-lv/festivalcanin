<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Information;
use App\Models\Partenaire;
use App\Models\Niveau;
use App\Models\Activite;

class InformationsController extends Controller
{
    public function accueil(){
        $information = Information::first();
        $niveaux = Niveau::all();
        //order by dateHeure
        $activites = Activite::orderBy('dateHeure', 'asc')->get();
        return view('accueil', ['information' => $information, 'niveaux' => $niveaux, 'activites' => $activites]);
    }
    //
}
