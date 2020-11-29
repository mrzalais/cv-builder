<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class CvController extends Controller
{
    public function index()
    {
        $user = auth()->user();
        return view('cv', compact('user'));
    }
}
