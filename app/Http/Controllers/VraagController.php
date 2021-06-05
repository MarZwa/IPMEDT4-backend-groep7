<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class VraagController extends Controller
{
    public function show($id){
        $vraag = \App\Models\Vraag::find($id);
        return $vraag;
    }

    public function antwoorden($id){
        $antwoorden = \App\Models\Vraag::find($id)->mijnAntwoorden;
        return $antwoorden;
    }

    public function vraagsoort($id){
        $vraagsoort = \App\Models\Vraag::find($id)->mijnVraagsoort;
        return $vraagsoort;
    }

    public function categorie($id){
        $vraagsoort = \App\Models\Vraag::find($id)->mijnCategorie;
        return $vraagsoort;
    }
}
