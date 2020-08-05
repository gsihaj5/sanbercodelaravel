<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class WelcomeController extends Controller
{
    function index(Request $request)
    {
        $first_name = $request["first_name"];
        $last_name = $request["last_name"];

        return view('welcome', [
            'first_name' => $first_name,
            'last_name' => $last_name
        ]);
    }
}
