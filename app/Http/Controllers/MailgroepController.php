<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class MailgroepController extends Controller
{
    public function show($id){
        $mailgroep = \App\Models\Mailgroep::find($id);
        return $mailgroep;
    }

    public function emailadressen($id){
        $emailadressen = \App\Models\Mailgroep::find($id)->mijnEmailadressen;
        return $emailadressen;
    }
}
