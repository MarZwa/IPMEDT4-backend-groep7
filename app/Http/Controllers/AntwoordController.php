<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Antwoord;
use Illuminate\Http\Response;

class AntwoordController extends Controller
{
    public function submit(Request $req) {
        $input = $req->validate([
            'questionId' => 'required|integer',
            'answer' => 'required|string'
        ]);

        $answer = Antwoord::create([
            'vraag-id' => $input['questionId'],
            'antwoord' => $input['answer']
        ]);

        return response($answer, 201);
    }
}
