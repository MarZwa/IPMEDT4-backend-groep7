<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class VragenlijstController extends Controller
{

    public function show($id){
        $vragenlijst = \App\Models\Vragenlijst::find($id);
        return $vragenlijst;
    }

    public function vragen($id){
        $vragen = \App\Models\Vragenlijst::find($id)->mijnVragen;
        return $vragen;
    }

    public function codes($id){
        $codes = \App\Models\Vragenlijst::find($id)->mijnCodes;
        return $codes;
    }
}
