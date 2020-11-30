<?php

namespace App\Http\Controllers;

use App\Models\UserData;
use Illuminate\Contracts\View\View;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;

class UserDataController extends Controller
{
    public function index(): view
    {
        $user = auth()->user()->data;

        return view('userinfo.index', compact('user'));
    }


    public function create(): view
    {
        return view('userinfo.create');
    }

    public function store(Request $request): RedirectResponse
    {
        $request->validate([
            'name' => 'required',
            'surname' => 'required',
            'email' => 'required|email',
            'phone' => 'required'
        ]);

        $details = new UserData();

        $details->name = $request->input('name');
        $details->surname = $request->input('surname');
        $details->email = $request->input('email');
        $details->phone = $request->input('phone');
        $details->address = $request->input('address');
        $details->summary = $request->input('summary');

        $details->user_id = auth()->id();
        $details->save();

        return redirect()->route('userinfo.index');
    }

    public function show(UserData $userData)
    {
        //
    }

    public function edit($id = null): view
    {
        $user = UserData::find($id);
        return view('userinfo.edit')->withUser($user);
    }

    public function update(Request $request, $id): RedirectResponse
    {
        $user = UserData::find($id);

        $request->validate([
            'name' => 'required',
            'surname' => 'required',
            'email' => 'required|email',
            'phone' => 'required',
        ]);

        $user->update($request->all());

        return redirect()->route('userinfo.index');
    }

    public function destroy($id): RedirectResponse
    {
        $user = UserData::find($id);

        $user->delete();
        return back();
    }
}
