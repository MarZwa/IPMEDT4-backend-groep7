<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Imports\EmailadresImport;
use App\Models\Emailadres;
use App\Http\Controllers\Excel;


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
            'mailgroepId' => 'required|numeric',
            'email' => 'required|email'
        ));
        $email = Emailadres::create([
            'mailgroep-id' => $request->mailgroepId,
            'email' => $request->email,
        ]);
    }

    // public function importCsv() {
    //     Excel::import(new EmailadresImport, request()->file('file'));
    // }
}
