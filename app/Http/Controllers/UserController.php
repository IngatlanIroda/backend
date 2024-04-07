<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;
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
        $user->name = $request->name;
        if ($request->szul_ido < now() && $request->szul_ido > '1900-01-01') {
            $user->szul_ido = $request->szul_ido;
        } else {
            return response()->json(['error' => 'Érvénytelen születési idő'], 400);
        }
        if ($request->jogosultsag == 'user' || $request->jogosultsag == 'admin') {
            $user->jogosultsag = $request->jogosultsag;
        } else {
            return response()->json(['error' => 'Érvénytelen jogosultság'], 400);
        }

        if ($request->aktiv == 0 || $request->aktiv == 1) {
            $user->aktiv = $request->aktiv;
        } else {
         
            return response()->json(['error' => 'Érvénytelen aktiv érték'], 400);
        }
        $user->email = $request->email;
        $user->password = Hash::make($request->password);
        $user->save();
        return response()->json(['message' => 'Sikeres művelet'], 201);
    }

    public function show($user_id)
    {

        $user = response()->json(User::find($user_id));
        return $user;
    }
    public function destroy($user_id)
    {
        $user = User::find($user_id);
        if (!$user->aktiv) {
            $user->delete();
            return response()->json(['success' => true, 'message' => 'Felhasználó sikeresen törölve!']);
        } else {
            return response()->json(['success' => false, 'message' => 'Aktív felhasználót lehet törölni!']);
        }
    }

    public function update(Request $request, $user_id)
    {
        $user = User::find($user_id);
        $user->user_id = $request->user_id;
        $user->name = $request->name;
        if ($request->szul_ido < now() && $request->szul_ido > '1900-01-01') {
            $user->szul_ido = $request->szul_ido;
        } else {
            return response()->json(['error' => 'Érvénytelen születési idő'], 400);
        }
        $user->szul_ido = $request->szul_ido;
        if ($request->jogosultsag == 'user' || $request->jogosultsag == 'admin') {
            $user->jogosultsag = $request->jogosultsag;
        } else {
            return response()->json(['error' => 'Érvénytelen jogosultság'], 400);
        }
        if ($request->aktiv == 0 || $request->aktiv == 1) {
            $user->aktiv = $request->aktiv;
        } else {
            return response()->json(['error' => 'Érvénytelen aktiv érték'], 400);
        }
        $user->email = $request->email;
        $user->password = Hash::make($request->password);
        $user->save();
    }
    public function userTable()
    {
        $userList = DB::table('users')
            ->select('user_id', 'name', 'szul_ido', 'jogosultsag', 'aktiv', 'email', 'password')

            ->get();
        return $userList;
    }

    public function me()
    {
        return Auth::user();
    }
}
