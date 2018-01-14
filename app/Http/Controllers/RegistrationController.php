<?php

namespace App\Http\Controllers;

use App\Http\Requests\RegistrationForm;

class RegistrationController extends Controller
{
    public function create()
    {
        return view('registration.create');
    }

    public function store(RegistrationForm $form)
    {

        // Create and save the user
        $form->persist();

        // Redirect to the home page
        return redirect()->home();
    }
}
