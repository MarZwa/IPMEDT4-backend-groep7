<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Vragenlijst extends Model
{
    use HasFactory;

    protected $table = 'vragenlijst';

    protected $fillable = [
        'eigenaar-id',
        'name',
        'link',
    ];

    public function mijnVragen(){
        return $this->hasMany(\App\Models\Vraag::class, "vragenlijst-id");
    }

    public function mijnCodes(){
        return $this->hasMany(\App\Models\Code::class, "vragenlijst-id");
    }
}
