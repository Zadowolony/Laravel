<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ProfileController extends Controller
{
    public function index() {

        return view ('profile', [
            'user' => "Rafal",
            'current_year' => 2015,
        ]);

    }

    public function show($username) {

        $year = date("Y");
        return view ('profile', [
            'user' => $username,
            'current_year' => $year,
        ]);

    }
}
