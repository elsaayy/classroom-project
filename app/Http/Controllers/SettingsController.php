<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class SettingsController extends Controller
{
    public function index()
    {
        return view('settings.index');
    }

    public function editprofile()
    {
        return view('settings.ubahprofile');
    }

    public function editpass()
    {
        return view('settings.ubahpass');
    }
}
