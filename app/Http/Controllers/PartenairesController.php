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
        $lesPartenaires = Partenaire::all();
        $niveau = Niveau::all();
        return view('admin/liste-partenaires')->with('lesPartenaires', $lesPartenaires)
                                      ->with('niveau', $niveau);
    
    }

    public function ajouter(Request $request)
    {
        $request->validate([
            'nom' => ['required', 'string', 'min:3', 'max:50' ],
            'niveau' => ['required', 'integer' ],
            'lien' => ['required', 'string', 'min:10', 'max:250' ],
            'imagePath' => ['required', 'string', 'min:3', 'max:250' ],
        ]);
        
        $nouveauPartenaire = new Partenaire();
        $nouveauPartenaire->nom = $request->input('nom');
        $nouveauPartenaire->niveau_id = $request->input('niveau');
        $nouveauPartenaire->lien = $request->input('lien');
        $nouveauPartenaire->imagePath = $request->input('imagePath');
        // $lesNiveaux = Niveau::all();
        $nouveauPartenaire->save();
        return view('admin/ajouter-partenaire')/*->with('lesNiveaux', $lesNiveaux)*/;
        //redirect()->route('admin.partenaire.ajouter')/*->with('message', ' ajouté.')*/;
    
    }
    
}
