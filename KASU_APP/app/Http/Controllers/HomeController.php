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

    public function available_programmes($application_form_id)
    {
        $form = ApplicationForm::findOrFail($application_form_id);
        $available_programmes = $form->availableProgrammes()->with('programme')->get();

        return Inertia::render('Public/AvailableProgrammes', [
            'form' => $form,
            'available_programmes' => $available_programmes
        ]);
    }
}
