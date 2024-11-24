<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class HomeController extends Controller
{
    // invoke solo se usa cuando solo tiene un metodo en el controller
    public function __invoke()
    {    
        return view('home');
    }
}
