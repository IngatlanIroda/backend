<?php

namespace App\Http\Controllers;

use App\Models\Telepules;
use Illuminate\Http\Request;

class TelepulesController extends Controller
{
    public function index()
    {
        return response()->json(Telepules::all());
    }
    public function store(Request $request)
    {
      (new Telepules())->fill($request->all())->save();
    }

    public function show($id)
    {
        return response()->json(Telepules::find($id));
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
