<?php

namespace App\Http\Controllers;

use App\Models\Hirdetes;
use Illuminate\Http\Request;

class HirdetesController extends Controller
{
    public function index(){ 

        $ads = response()->json(Hirdetes::all()); 

        return $ads; 

    } 



    public function show($id){ 

        $ad = response()->json(Hirdetes::find($id)); 

        return $ad; 

    } 

 

    public function store(Request $request){ 

        $ad = new Hirdetes(); 

        $ad->ingatlan = $request->ingatlan; 

        $ad->ugytipus = $request->ugytipus; 

        $ad->user = $request->user; 

        $ad->hird_feladas_datuma = $request->hird_feladas_datuma; 

        $ad->hird_lejarata = $request->hird_lejarata; 

        $ad->utolso_modositas_datuma = $request->utolso_modositas_datuma; 

        $ad->ar = $request->ar; 

 

        $ad->save(); 

    } 

 

    public function update(Request $request, $id){ 

        $ad = Hirdetes::find($id); 

        $ad->ingatlan = $request->ingatlan; 

        $ad->ugytipus = $request->ugytipus; 

        $ad->user = $request->user; 

        $ad->hird_feladas_datuma = $request->hird_feladas_datuma; 

        $ad->hird_lejarata = $request->hird_lejarata; 

        $ad->utolso_modositas_datuma = $request->utolso_modositas_datuma; 

        $ad->ar = $request->ar; 

 

        $ad->save(); 

    } 

 

    public function destroy($id){ 

        Hirdetes::find($id)->delete(); 

    } 
}
