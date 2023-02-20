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
}
