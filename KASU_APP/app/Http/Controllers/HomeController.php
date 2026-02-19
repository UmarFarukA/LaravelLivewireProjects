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

        $available_programmes = $form->availableProgrammes()
            ->with('programme:id,name,code')
            ->when(request('search'), function ($query, $search) {
                $query->whereHas('programme', function ($q) use ($search) {
                    $q->where('name', 'like', "%{$search}%")
                    ->orWhere('code', 'like', "%{$search}%");
                });
            })
            ->latest()
            ->paginate(12)
            ->withQueryString();

        return Inertia::render('Public/AvailableProgrammes', [
            'form' => $form,
            'available_programmes' => $available_programmes
        ]);
    }
}
