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
        $validatedData = $request->validate([
            'name' => 'required|string',
            'szul_ido' => 'required|date_format:Y-m-d',
            'jogosultsag' => 'required|in:user,admin',
            'aktiv' => 'required|boolean',
            'email' => 'required|email|unique:users',
            'password' => 'required|string|min:8',
        ]);
        $user = new User();
        $user->name = $validatedData['name'];
        $user->szul_ido = $validatedData['szul_ido'];
        $user->jogosultsag = $validatedData['jogosultsag'];
        $user->aktiv = $validatedData['aktiv'];
        $user->email = $validatedData['email'];
        $user->password = Hash::make($validatedData['password']);
        $user->save();
        return response()->json(['message' => 'Sikeres regisztráció'], 201);
    }

    public function show($user_id){

        $user = response()->json(User::find($user_id));
        return $user;
    }
    public function destroy($user_id)
    {
        $user=User::find($user_id);
        if(!$user->aktiv){
            $user->delete();
            return response()->json(['success' => true, 'message' => 'Felhasználó sikeresen törölve!']);
        }else {
            return response()->json(['success' => false, 'message' => 'Csak nem aktív felhasználót lehet törölni!']); 
        }
       
    }

    public function update(Request $request, $user_id)
    {
        $user = User::find($user_id);

        $user->user_id = $request->user_id;
        $user->name = $request->name;
        $user->szul_ido = $request->szul_ido;
        $user->jogosultsag = $request->jogosultsag;
        $user->aktiv = $request->aktiv;
        $user->email = $request->email;
        $user->password = Hash::make($request->password);
        $user->save();
    }
    public function userTable()
    {
        $userList = DB::table('users')
            ->select('user_id', 'name', 'szul_ido', 'jogosultsag', 'aktiv', 'email','password')

            ->get();
        return $userList;
    }

    public function me()
    {
        return Auth::user();
    }
}
