<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Learning;

class UserLearnController extends Controller
{
    public function index(){
        $learnings = Learning::all();
        return view ('user.learning');
    }
}
