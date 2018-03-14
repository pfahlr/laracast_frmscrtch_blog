<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\User;
use App\Mail\Welcome;


class RegistrationController extends Controller
{
    //
  public function create()
  {
    return view('registrations.create');
  }

  public function store()
  {
    //validate
    $this->validate(request(), [
      'name'=>'required|min:2',
      'email'=>'required|email',
      'password'=>'required|confirmed'
    ]);

    //create
    $arr = request(['name','email','password']);
    $arr['password'] = bcrypt($arr['password']);
    $user = User::create($arr);

    //login
    auth()->login($user);
    \Mail::to($user)->send(new Welcome($user));

    return redirect()->route('home_page');

  }
}
