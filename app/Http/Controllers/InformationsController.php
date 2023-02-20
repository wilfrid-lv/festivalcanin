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
        dd(PHP_OS_FAMILY);
        $information = Information::first();
        $niveaux = Niveau::all();
        //order by dateHeure
        $activites = Activite::orderBy('dateHeure', 'asc')->get();
        $questionsReponses = QuestionsReponse::all();
        $fichiers = Storage::disk('public')->files('gallerie');
        return view('accueil', ['information' => $information,
                                     'niveaux' => $niveaux,
                                     'activites' => $activites,
                                     'fichiers' => $fichiers,
                                     'questionsReponses' => $questionsReponses]);
    }

}
