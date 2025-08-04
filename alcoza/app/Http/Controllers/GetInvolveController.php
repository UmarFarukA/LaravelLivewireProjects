<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Inertia\Inertia;

class GetInvolveController extends Controller
{
    public function index()
    {
        return Inertia::render("GetInvolve/Index");
    }
}
