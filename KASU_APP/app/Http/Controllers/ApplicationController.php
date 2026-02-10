<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Inertia\Inertia;

class ApplicationController extends Controller
{
    public function programme_selection()
    {
        return Inertia::render('Application/ProgrammeSelection');
    }

    public function bio_data()
    {
        return Inertia::render('Application/BioData');
    }

    public function guardian()
    {
        return Inertia::render('Application/Guardian');
    }


    public function olevel()
    {
        return Inertia::render('Application/OLevel');
    }

    public function alevel()
    {
        return Inertia::render('Application/ALevel');
    }

    public function attestation()
    {
        return Inertia::render('Application/Attestation');
    }

    public function referee()
    {
        return Inertia::render('Application/Referee');
    }
}
