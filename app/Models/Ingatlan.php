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
        'cim'
    ];
    //Az ingatlan_futes_tipus tábla több eleme is kapcsolódhat a típushoz
    //elérés: $tipus->Ingatlan_futes_tipus::find(1)->tipus;
   /*  public function tipus()
    {
        return $this->hasMany(Ingatlan_futes_tipus::class,'tipus_id', 'tipus_id');
    }
 */
}

