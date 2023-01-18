<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class DashboardController extends Controller
{
    public function index()
    {
        return view('mentor.dashboard');
    }

    // public function inputnilai()
    // {
    //     return view('mentor.inputnilai');
    // }
}
