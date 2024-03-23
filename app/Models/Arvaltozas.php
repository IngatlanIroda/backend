<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Arvaltozas extends Model
{
    use HasFactory;

    protected function setKeysForSaveQuery($query) 
    { 

        $query 

            ->where('ing_id', '=', $this->getAttribute('ing_id')) 

            ->where('meddig', '=', $this->getAttribute('meddig')); 


        return $query; 

    } 

    protected $fillable = [
        'ing_id',
        'meddig',
        'regi_ar'
    ];
}
