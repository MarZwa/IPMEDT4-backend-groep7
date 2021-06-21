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

    public function store(Request $request) {
        $this->validate($request, array(
            'mailgroep-id' => 'required|numeric',
            'email' => 'required|email'
        ));
        $email = new emailadressen;
        $email->{mailgroep-id} = $request->{mailgroep-id};
        $email->email = $request->email;
        $email->save();
    }
}
