<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Bemutatas extends Model
{
    use HasFactory;

    protected function setKeysForSaveQuery($query) 
    { 

        $query 

            ->where('ing_id', '=', $this->getAttribute('ing_id')) 

            ->where('bemutatas_datuma', '=', $this->getAttribute('bemutatas_datuma'));
            

        return $query; 

    } 

    protected $fillable= [
        'ing_id',
        'bemutatas_datuma',
        'partner',
        'dolgozo'


    ];

    
}
