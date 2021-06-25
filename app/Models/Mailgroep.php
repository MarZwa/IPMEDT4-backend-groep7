<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Mailgroep extends Model
{
    use HasFactory;

    public $timestamps = false;

    protected $table = 'mailgroep';

    protected $fillable = [
        'eigenaar-id',
        'name'
    ];

    public function mijnEmailadressen(){
        return $this->hasMany(\App\Models\Emailadres::class, "mailgroep-id");
    }
}
