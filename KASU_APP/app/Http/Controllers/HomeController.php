<?php

namespace App\Http\Controllers;

use App\Models\ApplicationForm;
use Illuminate\Http\Request;
use Inertia\Inertia;

class HomeController extends Controller
{
    public function home()
    {
        return Inertia::render('Public/Home', [
                'forms' => ApplicationForm::where('is_active', true)->get()
        ]);
    }
}
