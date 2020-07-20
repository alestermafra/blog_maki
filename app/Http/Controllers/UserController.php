<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\User;

class UserController extends Controller
{
    public function register(Request $request) {
        $user = new User();
        $user->fill($request->all());
        $user->save();

        return view('cadastrado');
    }
}
