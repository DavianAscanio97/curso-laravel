<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class UserController extends Controller
{
    public function index() {
        $user = DB::table('users')->get();
        return $user;
    }

    public function show($name) {
        $user = DB::table('users')->select('id', 'name')->where('name', $name)->get();
        return $user;
    }

    public function update($id, Request $request) {
        $user = DB::table('users')->where('id', $id)->update([
            'name'  => $request->name
        ]);

        return [
            'message' => 'Usuario actualizado correctamente'
        ];
    }
}
