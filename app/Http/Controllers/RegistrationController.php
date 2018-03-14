<?php

namespace App\Http\Controllers;

use App\Http\Requests\RegistrationForm;

class RegistrationController extends Controller
{
  public function create()
  {
    return view('registrations.create');
  }

  public function store(RegistrationForm $form)
  {
    $form->persist();
    return redirect()->route('home_page');
  }
}
