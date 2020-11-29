<?php

namespace App\Http\Controllers;

use App\Models\Skill;
use Illuminate\Http\Request;

class SkillController extends Controller
{
    public function index()
    {
        $skills = auth()->user()->skills;

        return view('skill.index', compact('skills'));
    }

    public function create()
    {
        return view('skill.create');
    }

    public function store(Request $request)
    {
        $request->validate([
            'description' => 'required',
            'type' => 'required',
        ]);

        auth()->user()->skill()->create($request->all());

        return redirect()->route('skill.index');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Skill  $skill
     * @return \Illuminate\Http\Response
     */
    public function show(Skill $skill)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Skill  $skill
     * @return \Illuminate\Http\Response
     */
    public function edit(Skill $skill)
    {
        return view('skill.edit', compact('skill'));
    }

    public function update(Request $request, Skill $skill)
    {
        $request->validate([
            'description' => 'required',
            'type' => 'required',
        ]);

        $skill->update($request->all());

        return redirect()->route('skill.index');
    }

    public function destroy(Skill $skill)
    {
        $skill->delete();
        return back();
    }
}
