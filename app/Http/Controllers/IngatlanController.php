<?php

namespace App\Http\Controllers;

use App\Models\Ingatlan;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class IngatlanController extends Controller
{
    public function index()
    {
        return response()->json(Ingatlan::all());
    }
    
    public function store(Request $request)
    {
      (new Ingatlan())->fill($request->all())->save();
    }

    public function show($ing_id, $tipus_id, $telepules_id)
    {
        $ingatlan = Ingatlan::where('ing_id', $ing_id)
        ->where('ing_tipus_id', $tipus_id)
        ->where('futes_tipus_id', $tipus_id)
        ->where('telepules', $telepules_id)
        ->get();
        return $ingatlan[0];
    }
    public function destroy($ing_id, $tipus_id, $telepules_id)
    {
       Ingatlan::where('ing_id', $ing_id)
        ->where('ing_tipus_id', $tipus_id)
        ->where('futes_tipus_id', $tipus_id)
        ->where('telepules', $telepules_id)
        ->delete();
    }
   
    public function update(Request $request, $ing_id, $ing_tipus_id, $futes_tipus_id, $telepules_id)
    {
        $ingatlan=Ingatlan::find($ing_id);
        $ingatlan->$this->show($ing_id, $ing_tipus_id, $futes_tipus_id, $telepules_id);
        $ingatlan->fill($request->all());
        $ingatlan->save();
    }

    public function ingatlanKartya()
{
    $kartyaList = DB::table('ingatlans' )
    ->select ('ing_id','telepules_megnevezes', 'kategoria','tipus_megnevezes', 'nagysag','szobaszam', 'leiras', 'cim','erkely','terasz','kert')
    ->join('ingatlan_futes_tipuses', 'ing_tipus', '=','tipus_id')
    ->join ('telepules', 'telepules','=','telepules_id')
    ->get();
    return $kartyaList;
}
}
