<?php

namespace App\Http\Controllers;

use App\Models\Ingatlan;
use Illuminate\Http\Request;

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
        $ingatlan = Ingatlan::where('ing_id', $ing_id)->where('ing_tipus_id', $tipus_id)->where('futes_tipus_id', $tipus_id)->where('telepules_id', $telepules_id)->get();
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

    
}
