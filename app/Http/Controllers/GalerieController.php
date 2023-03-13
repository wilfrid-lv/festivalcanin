<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class GalerieController extends Controller
{
    function Galerie(){
        $fichiers = Storage::disk('public')->files('images/galerie');
        return view('galerie', ['fichiers' => $fichiers]);
    }
    //
}
