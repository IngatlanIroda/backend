<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Foto extends Model
{
    use HasFactory;

    protected $primaryKey = "foto_id";

    protected $fillable = [
        'foto_id',
        'ingatlan',
    
    ];
}
