<?php

namespace App\Http\Controllers;

use App\Team;
use Illuminate\Http\Request;

class PublicController extends Controller
{
    public function __invoke()
    {
        $teams = Team::with('skills')->get();
        return view('insta', compact('teams'));
    }
}
