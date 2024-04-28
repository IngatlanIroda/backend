<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Ingatlan extends Model
{
    use HasFactory;
    protected $primaryKey = 'ing_id';
    protected $fillable = [
        'ing_tipus',
        'futes_tipus',
        'nagysag',
        'telepules',
        'cim',
        'ugytipus',
        'user',
        'hird_feladas_datuma',
        'ar'
    ];
    
}

