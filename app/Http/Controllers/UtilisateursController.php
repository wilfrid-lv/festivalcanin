<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Utilisateur;
use App\Models\Role;

class UtilisateursController extends Controller
{
    //
    public function lister()
    {
        $lesUtilisateurs = Utilisateur::all();
        $role = Role::all();
        return view('admin/lister-utilisateurs')->with('lesUtilisateurs', $lesUtilisateurs)
                                            ->with('role', $role);
    }
}
