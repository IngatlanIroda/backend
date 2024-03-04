<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Hirdetes extends Model
{
    use HasFactory;

    protected $primaryKey = "hirdetes_id";

    protected $fillable = [
       
        'ingatlan',
        'ugytipus',
        'user',
        'hird_feladas_datuma',
        'hird_lejarata',
        'utolso_modositas_datuma',
        'ar'
    
    ];
}
