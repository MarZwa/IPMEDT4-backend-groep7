<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Emailadres;

class EmailController extends Controller
{
    public function create(Request $request) {
        $this->validate($request, array(
            'mailgroepId' => 'required|numeric',
            'email' => 'required|email'
        ));
        $email = Emailadres::create([
            'mailgroep-id' => $request->mailgroepId,
            'email' => $request->email,
        ]);
    }
}
