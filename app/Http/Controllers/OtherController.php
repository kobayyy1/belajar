<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class OtherController extends Controller
{
    public function other()
    {
        return view('other');
    }

    public function sosmed()
    {
        return view('sosmed');
    }
}
