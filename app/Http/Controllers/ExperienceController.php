<?php

namespace App\Http\Controllers;

use App\Models\Experience;
use Illuminate\Http\Request;

class ExperienceController extends Controller
{
    public function index()
    {
        $experiences = auth()->user()->experiences;

        return view('experience.index', compact('experiences'));
    }

    public function create()
    {
        return view('experience.create');
    }

    public function store(Request $request)
    {
        $request->validate([
            'name' => 'required',
            'job_title' => 'required',
            'type' => 'required',
            'start_date' => 'required',
            'end_date' => 'required',
        ]);

        auth()->user()->experiences()->create($request->all());

        return redirect()->route('experience.index');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Experience  $experience
     * @return \Illuminate\Http\Response
     */
    public function show(Experience $experience)
    {
        //
    }

    public function edit(Experience $experience)
    {
        dd($experience);

        return view('experience.edit', compact('experience'));
    }

    public function update(Request $request, Experience $experience)
    {
        $request->validate([
            'name' => 'required',
            'job_title' => 'required',
            'type' => 'required',
            'start_date' => 'required',
            'end_date' => 'required',
        ]);

        $experience->update($request->all());

        return redirect()->route('experience.index');
    }

    public function destroy(Experience $experience)
    {
        $experience->delete();

        return back();
    }
}
