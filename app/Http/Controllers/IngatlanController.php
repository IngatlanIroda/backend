<?php

namespace App\Http\Controllers;

use App\Models\Ingatlan;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class IngatlanController extends Controller
{
public function index(){ 
    $ingatlans = response()->json(Ingatlan::all()); 
    return $ingatlans; 
} 

public function show($id){ 
    $ingatlan = response()->json(Ingatlan::find($id)); 
    return $ingatlan; 
} 

public function store(Request $request){ 
    $ingatlan = new Ingatlan(); 
    $ingatlan->ing_tipus = $request->ing_tipus; 
    $ingatlan->futes_tipus = $request->futes_tipus; 
    $ingatlan->nagysag = $request->nagysag; 
    $ingatlan->szobaszam = $request->szobaszam; 
    $ingatlan->erkely = $request->erkely; 
    $ingatlan->terasz = $request->terasz; 
    $ingatlan->kert = $request->kert; 
    $ingatlan->telepules = $request->telepules; 
    $ingatlan->cim = $request->cim; 
    $ingatlan->leiras = $request->leiras; 
    $ingatlan->ugytipus = $request->ugytipus; 
    $ingatlan->user = $request->user; 
    $ingatlan->hird_feladas_datuma = $request->hird_feladas_datuma; 
    $ingatlan->hird_lejarata = $request->hird_lejarata;
    $ingatlan->utolso_modositas_datuma = $request->utolso_modositas_datuma;
    $ingatlan->ar = $request->ar; 
    $ingatlan->save(); 
} 


public function update(Request $request, $id){ 
    $ingatlan = Ingatlan::find($id); 
    $ingatlan->ing_tipus = $request->ing_tipus; 
    $ingatlan->futes_tipus = $request->futes_tipus; 
    $ingatlan->nagysag = $request->nagysag; 
    $ingatlan->szobaszam = $request->szobaszam; 
    $ingatlan->erkely = $request->erkely; 
    $ingatlan->terasz = $request->terasz; 
    $ingatlan->kert = $request->kert; 
    $ingatlan->telepules = $request->telepules; 
    $ingatlan->cim = $request->cim; 
    $ingatlan->leiras = $request->leiras; 
    $ingatlan->ugytipus = $request->ugytipus; 
    $ingatlan->user = $request->user; 
    $ingatlan->hird_feladas_datuma = $request->hird_feladas_datuma; 
    $ingatlan->hird_lejarata = $request->hird_lejarata;
    $ingatlan->utolso_modositas_datuma = $request->utolso_modositas_datuma;
    $ingatlan->ar = $request->ar; 
    $ingatlan->save(); 
} 

public function destroy($id){ 
    Ingatlan::find($id)->delete(); 
} 


public function ingatlanKartya()
{
    $kartyaList = DB::table('ingatlans' )
    ->select ('ing_id','telepules_megnevezes', 'kategoria','tipus_megnevezes', 'nagysag','szobaszam', 
        'leiras', 'cim','erkely','terasz','kert')
    ->join('ingatlan_futes_tipuses', 'ing_tipus', '=','tipus_id')
    ->join ('telepules', 'telepules','=','telepules_id')
    ->get();
    return $kartyaList;
}
public function ingatlanFutesTipusok(){
    $tipusTabla =DB::select(
        "SELECT 
        ingatlans.ing_id, 
        ing_tipus.tipus_megnevezes AS ing_tipus_megnevezes, 
        ing_tipus.kategoria AS ing_tipus_kategoria, 
        futes_tipus.tipus_megnevezes AS futes_tipus_megnevezes, 
        futes_tipus.kategoria AS futes_tipus_kategoria 
    FROM 
        ingatlans 
    LEFT JOIN 
        ingatlan_futes_tipuses AS ing_tipus 
        ON ingatlans.ing_tipus = ing_tipus.tipus_id 
    LEFT JOIN 
        ingatlan_futes_tipuses AS futes_tipus 
        ON ingatlans.futes_tipus = futes_tipus.tipus_id;"
    );
    return $tipusTabla;
}

}
