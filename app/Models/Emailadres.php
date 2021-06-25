<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Emailadres extends Model
{
    use HasFactory;

    public $timestamps = false;

    protected $table = 'emailadressen';
    
    protected $fillable = [
        'email',
        'mailgroep-id'
    ];
}
