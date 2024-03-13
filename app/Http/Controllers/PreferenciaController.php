<?php

namespace App\Http\Controllers;

use App\Models\Preferencia;
use Illuminate\Http\Request;

class PreferenciaController extends Controller
{
    public function index(){ 

        return response()->json(Preferencia::all()); 

    } 

 

    public function show($partner, $tipus_id, $telepules_id){ 

        $pref =  Preferencia::where('partner', $partner) 

                        ->where('tipus_id',"=", $tipus_id) 

                        ->where('telepules_id',"=", $telepules_id) 

                        ->get(); 

        return $pref[0]; 

    } 



 


    public function store(Request $request){ 

        $pref = new Preferencia(); 

        $pref->partner = $request->partner; 

        $pref->tipus_id = $request->tipus_id; 

        $pref->telepules_id = $request->telepules_id; 

        $pref->hirlevel = $request->hirlevel; 

        
        $pref->save(); 

    } 

 

    public function update(Request $request,$partner, $tipus_id, $telepules_id){ 

        $pref = $this->show($partner, $tipus_id, $telepules_id); 

        $pref->partner = $request->partner; 

        $pref->tipus_id = $request->tipus_id; 

        $pref->telepules_id = $request->telepules_id; 

        $pref->hirlevel = $request->hirlevel; 

         
        $pref->save(); 

    } 

 

    public function destroy($partner, $tipus_id, $telepules_id){ 

        $this->show($partner, $tipus_id, $telepules_id)->delete(); 

    }
}
