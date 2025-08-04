<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Inertia\Inertia;

class AlumniController extends Controller
{
    public function index()
    {
        return Inertia::render("Alumni/Index");
    }
}
