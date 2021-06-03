<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class SettingsController extends Controller
{
    public function settings()
    {
        return view('settings');
    }

    public function settings_create()
    {
        return view('create_form.settings');
    }
}
