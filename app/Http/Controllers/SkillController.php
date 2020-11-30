<?php

namespace App\Http\Controllers;

use App\Models\Skill;
use Illuminate\Contracts\View\View;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;

class SkillController extends Controller
{
    public function index(): view
    {
        $skills = auth()->user()->skills;

        return view('skill.index', compact('skills'));
    }

    public function create(): view
    {
        return view('skill.create');
    }

    public function store(Request $request): RedirectResponse
    {
        $request->validate([
            'description' => 'required',
            'type' => 'required',
        ]);

        auth()->user()->skill()->create($request->all());

        return redirect()->route('skill.index');
    }


    public function show(Skill $skill)
    {
        //
    }

    public function edit(Skill $skill): view
    {
        return view('skill.edit', compact('skill'));
    }

    public function update(Request $request, Skill $skill): RedirectResponse
    {
        $request->validate([
            'description' => 'required',
            'type' => 'required',
        ]);

        $skill->update($request->all());

        return redirect()->route('skill.index');
    }

    public function destroy(Skill $skill): RedirectResponse
    {
        $skill->delete();
        return back();
    }
}
