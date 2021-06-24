<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Imports\EmailadresImport;
use App\Models\Mailgroep;
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

    public function create(Request $request) {
        $this->validate($request, array(
            'eigenaarId' => 'required|numeric',
            'name' => 'required|string'
        ));
        $mailgroep = Mailgroep::create([
            'eigenaar-id' => $request->eigenaarId,
            'name' => $request->name,
        ]);
    }

    // public function importCsv() {
    //     Excel::import(new EmailadresImport, request()->file('file'));
    // }
}
