<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Code extends Model
{
    use HasFactory;

    protected $table = 'codes';

    public function mijnVragenlijst(){
        return $this->belongsTo(\App\Models\Vragenlijst::class, "vragenlijst-id");
    }
}
