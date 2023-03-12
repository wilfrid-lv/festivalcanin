<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Information;
use App\Models\Partenaire;
use App\Models\Niveau;
use App\Models\Activite;
use App\Models\QuestionsReponse;
use Illuminate\Support\Facades\Storage;
use Carbon\Carbon;

class InformationsController extends Controller
{
    public function accueil(){
        Carbon::setLocale('fr');
        $information = Information::first();
        $niveaux = Niveau::all();
        //order by dateHeure
        $activites = Activite::orderBy('dateHeure', 'asc')->get();
        $questionsReponses = QuestionsReponse::all();
        $fichiers = Storage::disk('public')->files('galerie');
        return view('accueil', ['information' => $information,
                                     'niveaux' => $niveaux,
                                     'activites' => $activites,
                                     'fichiers' => $fichiers,
                                     'questionsReponses' => $questionsReponses]);
    }

}
