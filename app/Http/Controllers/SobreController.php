<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class SobreController extends Controller
{
    //
    public function __invoke(Request $request)
    {
        return view('sobre');
    }
}
