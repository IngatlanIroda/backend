<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;

class UserController extends Controller
{
    public function index()
    {
        return response()->json(User::all());
    }
    public function store(Request $request)
    {
      $user = new User();
      $user ->user_id=$request->user_id;
      $user->name = $request->name;
      $user->szul_ido = $request->szul_ido;
      $user->jogosultsag =$request->jogosultsag;
      $user->felhaszn_nev = $request->felhaszn_nev;
      $user->aktiv = $request->aktiv;
      $user->email = $request->email;
      $user->password = Hash::make($request->password);
      $user->save();
    }

    public function show($user_id, $j_id)
    {
        $user = User::where('user_id', $user_id)
        ->where('j_id',$j_id)->get();
        return $user[0];
    }
    public function destroy($user_id, $j_id)
    {
       User::where('user_id', $user_id)
        ->where('j_id',$j_id)
        
        ->delete();
    }
   
    public function update(Request $request, $user_id, $j_id)
    {
        $user=User::find($user_id);
        $user->$this->show($user_id, $j_id);
        $user ->user_id=$request->user_id;
        $user->name = $request->name;
        $user->szul_ido = $request->szul_ido;
        $user->jogosultsag =$request->jogosultsag;
        $user->aktiv = $request->aktiv;
        $user->email = $request->email;
        $user->password = Hash::make($request->password);
        $user->save();
    }
}

