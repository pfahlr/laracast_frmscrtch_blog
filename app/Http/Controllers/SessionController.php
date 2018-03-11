<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class SessionController extends Controller
{

  public function __construct()
  {
    $this->middleware('guest')->except(['destroy']);
  }

  public function create()
  {
    return view('sessions.create');
  }

  public function store()
  {
    /*
    $this->validate(request(),[
      'email'=>'required',
      'password'=>'required'
      ]
    );
    */
//dd(request(['email','password']));
    if(!auth()->attempt(request(['email','password'])))
      return back()->withErrors(['message'=>'username or password incorrect']);

    return redirect()->route('home_page');
  }

  public function destroy()
  {
    auth()->logout();
    return redirect()->route('home_page');
  }

}
