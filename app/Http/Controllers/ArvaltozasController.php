<?php

namespace App\Http\Controllers;

use App\Models\Arvaltozas;
use Illuminate\Http\Request;

class ArvaltozasController extends Controller
{
    public function index(){ 

        return response()->json(Arvaltozas::all()); 

    } 

 

    public function show($ing_id, $meddig){ 

        $pricechange =  Arvaltozas::where('ing_id', $ing_id) 

                        ->where('meddig',"=", $meddig) 

                        ->get(); 

        return $pricechange[0]; 

    } 



 


    public function store(Request $request){ 

        $pricechange = new Arvaltozas(); 

        $pricechange->ing_id = $request->ing_id; 

        $pricechange->meddig = $request->meddig; 

        $pricechange->regi_ar = $request->regi_ar; 

        
        $pricechange->save(); 

    } 

 

    public function update(Request $request,$ing_id, $meddig){ 

        $pricechange = $this->show($ing_id, $meddig); 

        $pricechange->ing_id = $request->ing_id; 

        $pricechange->meddig = $request->meddig; 

        $pricechange->regi_ar = $request->regi_ar; 

         
        $pricechange->save(); 

    } 

 

    public function destroy($ing_id, $meddig){ 

        $this->show($ing_id, $meddig)->delete(); 

    } 
}
