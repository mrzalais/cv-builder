<?php

namespace App\Http\Controllers;

use App\Models\UserData;
use Illuminate\Http\Request;

class UserDataController extends Controller
{
    public function index()
    {
        $user = auth()->user()->data;

        return view('userinfo.index', compact('user'));
    }


    public function create()
    {
        return view('userinfo.create');
    }

    public function store(Request $request)
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

    public function edit($id = null)
    {
        $user = UserData::find($id);
        return view('userinfo.edit')->withUser($user);
    }

    public function update(Request $request, $id)
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

    public function destroy($id)
    {
        $user = UserData::find($id);

        $user->delete();
        return back();
    }
}
