<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Inertia\Inertia;

class SchoolController extends Controller
{
    //

    public function index()
    {
        return Inertia::render('Schools/Index');
    }

    public function create()
    {
        return Inertia::render('Schools/Create');
    }
}
