<?php

namespace App\Http\Controllers;

use Illuminate\Contracts\View\View;
use Illuminate\Http\Request;

class RegisterController extends Controller
{
    //
    public function create(): View
    {
        return view("register.create");
    }

    public function store() {}
}
