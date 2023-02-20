<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Partenaire;
use App\Models\Niveau;

class PartenairesController extends Controller
{
    //
    public function lister()
    {
        $partenaire = Partenaire::all();
        $niveau = Niveau::all();
        return view('listepartenaire', ['lesPartenaires' => $partenaire,
                                     'niveau' => $niveau]);
    
    }
}
