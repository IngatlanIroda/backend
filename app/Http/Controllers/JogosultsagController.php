<?php

namespace App\Http\Controllers;

use App\Models\Jogosultsag;
use Illuminate\Http\Request;

class JogosultsagController extends Controller
{
    public function index()
    {
        return response()->json(Jogosultsag::all());
    }
    public function store(Request $request)
    {
      (new Jogosultsag())->fill($request->all())->save();
    }

    public function show($id)
    {
        return response()->json(Jogosultsag::find($id));
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
