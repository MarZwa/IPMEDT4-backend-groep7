<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Http\Response;
use Illuminate\Support\Facades\Hash;

class UserController extends Controller
{
    public function show($id){
        $user = \App\Models\User::find($id);
        return $user;
    }

    public function vragenlijsten($id){
        $vragenlijsten = \App\Models\User::find($id)->mijnVragenlijsten;
        return $vragenlijsten;
    }

    public function categorieen($id){
        $categorie = \App\Models\User::find($id)->mijnCategorie;
        return $categorie;
    }

    public function mailgroepen($id){
        $mailgroepen = \App\Models\User::find($id)->mijnMailgroepen;
        return $mailgroepen;
    }


    public function register(Request $request){
        $fields = $request->validate([
            'name' => 'required|string',
            'email' => 'required|string|unique:users,email',
            'password' => 'required|string|confirmed',
            'organisatie' => 'string',
        ]);

        $user = User::create([
            'name' => $fields['name'],
            'email' => $fields['email'],
            'password' => bcrypt($fields['password']),
            'organisatie' => $fields['organisatie']
        ]);

        $token = $user->createToken('myapptoken')->plainTextToken;

        $response = [
            'user' => $user,
            'token' => $token
        ];

        return response($response, 201);
    }
}
