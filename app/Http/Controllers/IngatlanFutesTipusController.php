<?php

namespace App\Http\Controllers;

use App\Models\Ingatlan_futes_tipus;


use Illuminate\Http\Request;

class IngatlanFutesTipusController extends Controller
{
    public function index()
    {
        return response()->json(Ingatlan_futes_tipus::all());
    }
    public function store(Request $request)
    {
      (new Ingatlan_futes_tipus())->fill($request->all())->save();
    }

    public function show($id)
    {
        return response()->json(Ingatlan_futes_tipus::find($id));
    }

    public function update(Request $request, $id)
    {
        $this->show($id)->fill($request->all())->save();
    }

    public function destroy($id)
    {
        $this->show($id)->delete();
    }
}
