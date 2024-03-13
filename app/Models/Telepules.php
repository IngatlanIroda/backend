<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Telepules extends Model
{
    use HasFactory;
    protected $primaryKey = "telepules_id";

    protected $fillable = [
       
        'telepules_megnevezes'
    
    ];
}
