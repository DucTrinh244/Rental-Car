<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class AdminController extends Controller
{
    public function ShowDashboard()
    {
        return view('admin.dashboard');
    }
}
