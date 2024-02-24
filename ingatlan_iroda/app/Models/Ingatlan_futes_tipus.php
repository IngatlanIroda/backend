<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class Ingatlan_futes_tipus extends Model
{
    use HasFactory;
    protected $primaryKey = "tipus_id";

    protected $fillable = [
       
        'tipus_megnevezes'
    
    ];
   /*  public function Ingatlan(): BelongsTo
    {
        return $this->belongsTo(Ingatlan::class);
    } */
}
