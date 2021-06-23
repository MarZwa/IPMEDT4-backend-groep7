<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Vraag extends Model
{
    use HasFactory;

    protected $table = 'vraag';

    protected $fillable = [
        'vraag',
        'opties',
        'vraagsoort',
        'categorie',
        'vragenlijst-id',
    ];


    public function mijnAntwoorden()
    {
        return $this->hasMany(\App\Models\Antwoord::class, "vraag-id");
    }

    public function mijnVraagsoort()
    {
        return $this->hasOne(\App\Models\Vraagsoort::class, "id", "vraagsoort");
    }

    public function mijnCategorie()
    {
        return $this->hasOne(\App\Models\Categorie::class, "id", "categorie");
    }
}
