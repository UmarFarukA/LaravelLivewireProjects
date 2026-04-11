<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Inertia\Inertia;

class ClassRoomsController extends Controller
{
    public function index()
    {
        return Inertia::render('ClassRooms/Index');
    }
}
