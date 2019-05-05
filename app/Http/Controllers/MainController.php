<?php

namespace App\Http\Controllers;
use Illuminate\Http\Request;
use App;

class MainController extends Controller{

  public function start(Request $request) {
    return view("welcome");
  }

}


?>
