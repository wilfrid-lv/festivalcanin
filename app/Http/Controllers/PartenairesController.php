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


    public function afficher()
    {
        $lesPartenaires = Partenaire::all();
        $niveau = Niveau::all();
        return view('admin/ajouter-partenaire')->with('lesPartenaires', $lesPartenaires)
                                                    ->with('niveau', $niveau);

    }
    public function ajouter(Request $request): \Illuminate\Http\RedirectResponse
    {
        //$lesPartenaires = Partenaire::all();
        //$niveau = Niveau::all();
        //return view('admin/ajouter-partenaire')->with('lesPartenaires', $lesPartenaires)
        //                                        ->with('niveau', $niveau);

        /*$this->validate($request, [*/
        $request->validate([
            'nom' => ['required', 'string', 'min:3', 'max:50' ],
            'niveau' => ['required', 'integer' ],/* le mettre en string plus tard*/
            'lien' => ['required', 'string', 'min:10', 'max:250' ],
            'imagePath' => ['required', 'string', 'min:3', 'max:250' ],
        ]);

        $nouveauPartenaire = new Partenaire();
        $nouveauPartenaire->nom = $request->input('nom');
        $nouveauPartenaire->niveau_id = $request->input('niveau');
        $nouveauPartenaire->lien = $request->input('lien');
        $nouveauPartenaire->imagePath = $request->input('imagePath');
        dd($nouveauPartenaire);
        $nouveauPartenaire->save();
        if (!empty($request->nom) && !empty($request->niveau) && !empty($request->lien) && !empty($request->imagePath)) {
            return redirect()->route('admin.partenaire.ajouter')->with('message', 'Le partenaire a été ajouté avec succès.');
        }
        else {
            return back()->withInput()->with('error', 'Tous les champs sont obligatoires.');
        }
        /*return view('admin/ajouter-partenaire')/*->with('lesNiveaux', $lesNiveaux)*/;
        //return redirect()->route('admin.partenaire.ajouter')/*->with('message', ' ajouté.')*/;

    }

    //ajout fonction de Modifier partenaire
}
