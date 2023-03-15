<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Partenaire;
use App\Models\Niveau;
use Illuminate\Support\Facades\Storage;

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
    // public function ajouter(Request $request): \Illuminate\Http\RedirectResponse
    // {
    //     //$lesPartenaires = Partenaire::all();
    //     //$niveau = Niveau::all();
    //     //return view('admin/ajouter-partenaire')->with('lesPartenaires', $lesPartenaires)
    //     //                                        ->with('niveau', $niveau);

    //     /*$this->validate($request, [*/
    //     $request->validate([
    //         'nom' => ['required', 'string', 'min:3', 'max:50' ],
    //         'niveau' => ['required', 'integer' ],
    //         'lien' => ['required', 'string', 'min:10', 'max:250' ],
    //         'imagePath' => ['required', 'string', 'min:3', 'max:250' ],
    //     ]);

    //     $nouveauPartenaire = new Partenaire();
    //     $nouveauPartenaire->nom = $request->input('nom');
    //     $nouveauPartenaire->niveau_id = $request->input('niveau');
    //     $nouveauPartenaire->lien = $request->input('lien');
    //     $nouveauPartenaire->imagePath = $request->input('imagePath');
    //     $nouveauPartenaire->save();

    //     if ($request->hasFile('imagePath')) {
    //         $image = $request->file('imagePath');
    //         $imageName = time().'.'.$image->getClientOriginalExtension();//genere le nom de l'image
    //         $path = public_path('/public/storage/partenaires/');
    //         $image->move($path, $imageName);
    //         $nouveauPartenaire->imagePath = '/public/storage/partenaires/'.$imageName;
    //         //imagename devra etre le nom du partenaire
    //     }

    //     return redirect()->route('admin.partenaire.lister')->with('message', 'Le partenaire a été ajouté avec succès.');


    // }
    public function ajouter(Request $request): \Illuminate\Http\RedirectResponse
    {
        $request->validate([
            'nom' => ['required', 'string', 'min:3', 'max:50'],
            'niveau' => ['required', 'integer'],
            'lien' => ['required', 'string', 'min:10', 'max:250'],
            'imagePath' => ['required', 'image', 'max:2048'],//'nullable','string', 'min:3', 'max:250' ]
        ]);

        $nouveauPartenaire = new Partenaire();
        $nouveauPartenaire->nom = $request->input('nom');
        $nouveauPartenaire->niveau_id = $request->input('niveau');
        $nouveauPartenaire->lien = $request->input('lien');
        //$nouveauPartenaire->imagePath = $request->input('imagePath');

        if ($request->hasFile('imagePath')) {
            $image = $request->file('imagePath');
            $imageName = time().'.'.$image->getClientOriginalExtension(); // récupère le nom de l'image
            $path = public_path('/images/partenaires/');
            $image->move($path, $imageName);
            $nouveauPartenaire->imagePath = 'images/partenaires/' . $imageName; //ajoute le chemin au nom de l'image

        }

        $nouveauPartenaire->save();

        return redirect()->route('admin.partenaire.lister')
            ->with('message', 'Le partenaire a été ajouté avec succès.');
    }


    //test pour l'upload

    // View File To Upload Image
    public function index()
    {
        return view('image-form');
    }

    // Store Image
    public function storeImage(Request $request)
    {
        $request->validate([
            'image' => 'required|image|mimes:png,jpg,jpeg|max:2048'
        ]);

        $imageName = time().'.'.$request->image->extension();

        // Public Folder
        $request->image->move(public_path('images'), $imageName);

        // //Store in Storage Folder
        // $request->image->storeAs('images', $imageName);

        // // Store in S3
        // $request->image->storeAs('images', $imageName, 's3');

        //Store IMage in DB


        return back()->with('success', 'Image uploaded Successfully!')
            ->with('image', $imageName);
    }

    //ajout fonction de Modifier partenaire
}
