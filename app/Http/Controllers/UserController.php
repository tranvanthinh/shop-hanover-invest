<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class UserController extends Controller
{
    public function getData(Request $request)
    {
        $request->validator([
            'name' => 'required',
            'password' => 'required',
        ]);
        return $request->input();
    }
}
