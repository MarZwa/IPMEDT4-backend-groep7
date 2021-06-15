<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Vragenlijst;
use App\Models\Mailgroep;
use App\Models\Code;
use Illuminate\Support\Facades\Mail;
use App\Mail\InviteMail;

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


    function generateRandomString($length = 6) {
        $characters = '0123456789abcdefghijklmnopqrstuvwxyzABCDEFGHIJKLMNOPQRSTUVWXYZ';
        $charactersLength = strlen($characters);
        $randomString = '';
        for ($i = 0; $i < $length; $i++) {
            $randomString .= $characters[rand(0, $charactersLength - 1)];
        }
        return $randomString;
    }


    public function sendInviteMail(Request $request){

        $fields = $request->validate([
            'mailgroep' => 'required',
            'vragenlijst' => 'required'
        ]);

        $receivers  = Mailgroep::find($fields['mailgroep'])->mijnEmailAdressen;
        $vragenlijst = Vragenlijst::find($fields['vragenlijst']);


        foreach($receivers as $receiver){
            $newcode = $this->generateRandomString();

            $code = Code::create([
                'code' => $newcode,
                'vragenlijst-id' => $vragenlijst->id,
                'used' => 0,
                'questions_answered' => 0
            ]);

            $details = [
                'title' => $vragenlijst->name,
                'body' => $newcode, 
            ];
    
            Mail::to($receiver->email)->send(new InviteMail($details));
        }
    }
}
