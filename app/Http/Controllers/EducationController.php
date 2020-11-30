<?php

namespace App\Http\Controllers;

use App\Models\Education;
use Illuminate\Contracts\View\View;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;

class EducationController extends Controller
{
    public function index(): view
    {
        $education = auth()->user()->education;

        return view('education.index', compact('education'));
    }

    public function create(): view
    {
        return view('education.create');
    }

    public function store(Request $request): RedirectResponse
    {
        $request->validate([
            'school_name' => 'required',
            'school_location' => 'required',
            'degree' => 'required',
            'field_of_study' => 'required',
            'graduation_start_date' => 'required',
            'graduation_end_date' => 'required',
        ]);

        auth()->user()->education()->create($request->all());

        return redirect()->route('education.index');
    }


    public function edit(Education $education): view
    {
        return view('education.edit', compact('education'));
    }

    public function update(Request $request, Education $education): RedirectResponse
    {
        $request->validate([
            'school_name' => 'required',
            'school_location' => 'required',
            'degree' => 'required',
            'field_of_study' => 'required',
            'graduation_start_date' => 'required',
            'graduation_end_date' => 'required',
        ]);

        $education->update($request->all());

        return redirect()->route('education.index');
    }

    public function destroy(Education $education): RedirectResponse
    {
        $education->delete();

        return back();
    }
}
