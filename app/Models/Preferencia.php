<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Preferencia extends Model
{
    use HasFactory;

    protected function setKeysForSaveQuery($query) 
    { 

        $query 

            ->where('partner', '=', $this->getAttribute('partner')) 

            ->where('tipus_id', '=', $this->getAttribute('tipus_id'))
            
            ->where('telepules_id', '=', $this->getAttribute('telepules_id')); 


        return $query; 

    } 

    protected $fillable = [
        'partner',
        'tipus_id',
        'telepules_id',
        'hirlevel'
    ];
}
