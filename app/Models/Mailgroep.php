<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Mailgroep extends Model
{
    use HasFactory;

    protected $table = 'mailgroep';


    public function mijnEmailadressen(){
        return $this->hasMany(\App\Models\Emailadres::class, "mailgroep-id");
    }
}
