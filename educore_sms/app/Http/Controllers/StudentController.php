<?php

namespace App\Http\Controllers;

use App\Models\Student;
use Illuminate\Http\Request;
use Inertia\Inertia;

class StudentController extends Controller
{
    //
    public function index(Request $request)
    {
        return Inertia::render('Students/Index', [
            'students' => Student::with('application')
                ->when($request->search, function ($query, $search) {
                    $query->whereHas('application', function ($q) use ($search) {
                        $q->where('first_name', 'like', "%{$search}%")
                            ->orWhere('last_name', 'like', "%{$search}%")
                            ->orWhere('admission_number', 'like', "%{$search}%")
                            ->orWhere('current_class', 'like', "%{$search}%");
                    });
                })->paginate(3)
                ->withQueryString()
                ->through(fn($student) => [
                    'id' => $student->id,
                    'name' => $student->application->first_name . ' ' . $student->application->last_name,
                    'admission_number' => $student->admission_number,
                    'current_class' => $student->application->classroom->name ?? 'N/A',
                    'accepted' => $student->created_at->format('d M Y'),
                ]),
            'searchTerm' => $request->search ?? ''
        ]);
    }

    public function create()
    {
        return Inertia::render('Students/Create');
    }
}
