<?php

namespace App\Http\Controllers;

use App\Models\Bemutatas;
use Illuminate\Http\Request;

class BemutatasController extends Controller
{
    public function index(){ 

        return response()->json(Bemutatas::all()); 

    } 

 

    public function show($ing_id, $bemutatas_datuma){ 

        $bemutat =  Bemutatas::where('ing_id', $ing_id) 

                        ->where('bemutatas_datuma',"=", $bemutatas_datuma) 

                        ->get(); 

        return $bemutat[0]; 

    } 



 


    public function store(Request $request){ 

        $bemutat = new Bemutatas(); 

        $bemutat->ing_id = $request->ing_id; 

        $bemutat->bemutatas_datuma = $request->bemutatas_datuma; 

        $bemutat->partner = $request->partner; 

        $bemutat->dolgozo = $request->dolgozo; 

        
        $bemutat->save(); 

    } 

 

    public function update(Request $request,$ing_id, $bemutatas_datuma){ 

        $bemutat = $this->show($ing_id, $bemutatas_datuma); 

        $bemutat->ing_id = $request->ing_id; 

        $bemutat->bemutatas_datuma = $request->bemutatas_datuma; 

        $bemutat->partner = $request->partner; 

        $bemutat->dolgozo = $request->dolgozo; 

         
        $bemutat->save(); 

    } 

 

    public function destroy($ing_id, $bemutatas_datuma){ 

        $this->show($ing_id, $bemutatas_datuma)->delete(); 

    }
}
