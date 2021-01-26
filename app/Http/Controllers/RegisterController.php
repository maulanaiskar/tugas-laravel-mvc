<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class RegisterController extends Controller
{
    public function getNama(Request $request)
    {
        $fname = $request["fname"];
        $lname = $request["lname"];
        return view('welcome', compact('fname', 'lname'));
    }
}
