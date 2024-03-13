<?php

namespace App\Http\Controllers;

use App\Models\Arvaltozas;
use Illuminate\Http\Request;

class ArvaltozasController extends Controller
{
    public function index(){ 

        return response()->json(Arvaltozas::all()); 

    } 

 

    public function show($hirdetes_id, $meddig){ 

        $pricechange =  Arvaltozas::where('hirdetes_id', $hirdetes_id) 

                        ->where('meddig',"=", $meddig) 

                        ->get(); 

        return $pricechange[0]; 

    } 



 


    public function store(Request $request){ 

        $pricechange = new Arvaltozas(); 

        $pricechange->hirdetes_id = $request->hirdetes_id; 

        $pricechange->meddig = $request->meddig; 

        $pricechange->regi_ar = $request->regi_ar; 

        
        $pricechange->save(); 

    } 

 

    public function update(Request $request,$hirdetes_id, $meddig){ 

        $pricechange = $this->show($hirdetes_id, $meddig); 

        $pricechange->hirdetes_id = $request->hirdetes_id; 

        $pricechange->meddig = $request->meddig; 

        $pricechange->regi_ar = $request->regi_ar; 

         
        $pricechange->save(); 

    } 

 

    public function destroy($hirdetes_id, $meddig){ 

        $this->show($hirdetes_id, $meddig)->delete(); 

    } 
}
