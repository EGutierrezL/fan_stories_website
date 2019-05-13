<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PresentationController extends Controller
{
    public function start(Request $request) {
        return view("Presentation");
    }
}
