<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class UserController extends Controller
{
    public function show($id){
        $user = \App\Models\User::find($id);
        return $user;
    }

    public function vragenlijsten($id){
        $vragenlijsten = \App\Models\User::find($id)->mijnVragenlijsten;
        return $vragenlijsten;
    }

    public function categorieen($id){
        $categorie = \App\Models\User::find($id)->mijnCategorie;
        return $categorie;
    }

    public function mailgroepen($id){
        $mailgroepen = \App\Models\User::find($id)->mijnMailgroepen;
        return $mailgroepen;
    }
}
