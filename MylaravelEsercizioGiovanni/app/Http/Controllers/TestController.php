<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Match;

class TestController extends Controller
{
  public function home(){
    $matches = Match::all();

    return view('pages.home', compact('matches'));
  }

  public function show($id) {
    $match = Match::findOrFail($id);
     // dd($id);
    // dd($match);
    return view('pages.match', compact('match'));
  }

  public function create(){

    return view('pages.create');
  }

  public function store(Request $request) {
   //dd($request -> all());
   $validate = $request -> validate([
     'team1' => 'required|max:255',
     'team2' => 'required|max:255',
     'point1' => 'required|max:11',
     'point2' => 'required|max:11',
     'result' => 'required|boolean',
   ]);
   //dd($validate);
   $match = Match::create($validate);
   //dd($match);
   return redirect() -> route('home');
 }

 public function edit($id) {
   $match = Match::findOrFail($id);
   return view('pages.edit', compact('match'));
 }

  public function update(Request $request, $id) {
    //dd($request -> all() ,  $id);
    $validate = $request -> validate([
      'team1' => 'required|max:255',
      'team2' => 'required|max:255',
      'point1' => 'required|max:11',
      'point2' => 'required|max:11',
      'result' => 'required|boolean',
    ]);
    //dd($validate, $id);
    $match = Match::findOrFail($id);
    $match -> update($validate);
    return redirect() -> route('home');
  }


  public function destroy($id) {
    //dd($id);
    $match = Match::findOrFail($id);
    $match -> delete();
    return redirect() -> route('home');
  }



}
