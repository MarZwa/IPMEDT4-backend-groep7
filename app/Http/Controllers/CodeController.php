<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;
use App\Mail\InviteMail;

class CodeController extends Controller
{

    public function show($code){
        $code = \App\Models\Code::where('code','=', $code)->first();
        return $code;
    }

    public function vragenlijst($code){
        $vragenlijst = \App\Models\Code::where('code','=',$code)->first()->mijnVragenlijst;
        return $vragenlijst;
    }

    
}
