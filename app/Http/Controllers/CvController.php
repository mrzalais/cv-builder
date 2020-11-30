<?php

namespace App\Http\Controllers;

use Illuminate\Contracts\View\View;
use Illuminate\Http\Request;

class CvController extends Controller
{
    public function index(): view
    {
        return view('cvlist');
    }

    public function show(): view
    {
        $user = auth()->user();
        return view('cv', compact('user'));
    }
}
