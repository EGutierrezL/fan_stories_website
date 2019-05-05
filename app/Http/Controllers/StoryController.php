<?php

namespace App\Http\Controllers;
use Illuminate\Http\Request;
use App;
use DB;

class StoryController extends Controller{

  public function addstory(){

    return view("addstory");
  }

  public function savestory(Request $request){

    DB::table('story')->insert(
      ['person' => $_POST["firstname"] . " " . $_POST["lastname"],
       'story' => $_POST["content"]]
    );

    return view("addstory");
  }

  public function showstories(Request $request){

    $stories = DB::table('story')->get( );

    return view('showstory', ['stories' => $stories]);
  }

}


?>
