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

            ->where('hirdetes_id', '=', $this->getAttribute('hirdetes_id')) 

            ->where('meddig', '=', $this->getAttribute('meddig')); 


        return $query; 

    } 

    protected $fillable = [
        'hirdetes_id',
        'meddig',
        'regi_ar'
    ];
}
