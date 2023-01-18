<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Auth;

class HomeController extends Controller
{
    public function dashboard()
    {
        switch (Auth::user()->role) {
            case 'admin':
                return redirect(route('admin.dashboard'));
                break;

            case 'mentor':
                return redirect(route('mentor.dashboard'));
                break;

            default:
                return redirect(route('user.dashboard'));
                break;
        }
    }
}
