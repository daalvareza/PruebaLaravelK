<?php

namespace App\Http\Controllers;

use App\User;
use Illuminate\Http\Request;

class UserController extends Controller
{
    public function index(Request $request)
    {
        $request->validate([
            'name' => 'required|string',
            'password' => 'required',
            'email' => 'required|email',
            'role' => 'required',
        ]);

        $user = new User();
        $user->name = $request->input('name');
        $user->email = $request->input('email');
        $user->password = $request->input('password');
        $user->role = $request->input('role');
        $user->save();
        return response()->json($user);
    }

    public function show()
    {
        $user = User::all();
        return response()->json($user);
    }

    public function showbyId($id)
    {
        $user = User::find($id);
        return response()->json($user);
    }

    public function update(Request $request, $id)
    {
        $request->validate([
            'name' => 'required|string',
            'email' => 'required|email',
            'role' => 'required',
        ]);

        $user = User::find($id);
        $user->name = $request->input('name');
        $user->email = $request->input('email');
        $user->role = $request->input('role');

        $user->save();
        return response()->json($user);
    }

    public function destroy($id)
    {
        $user = User::find(id);
        $user->delete();

        return response()->json($user);
    }
}
