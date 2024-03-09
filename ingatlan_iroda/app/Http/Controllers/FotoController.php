<?php

namespace App\Http\Controllers;

use App\Models\Foto;
use Illuminate\Http\Request;

class FotoController extends Controller
{
    public function index(){ 

        $fotos = response()->json(Foto::all()); 

        return $fotos; 

    } 

 

    public function show($id){ 

        $foto = response()->json(Foto::find($id)); 

        return $foto; 

    } 

 

    public function store(Request $request){ 

        $foto = new Foto(); 

        $foto->ingatlan = $request->ingatlan; 


        $foto->save(); 

    } 

 

    public function update(Request $request, $id){ 

        $foto = Foto::find($id); 

        $foto->ingatlan = $request->ingatlan; 


        $foto->save(); 

    } 

 

    public function destroy($id){ 

        Foto::find($id)->delete(); 

    } 

 
}
