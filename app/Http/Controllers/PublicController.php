<?php

namespace App\Http\Controllers;

use App\Project;
use App\ProjectCategory;
use App\Team;
use Illuminate\Http\Request;

class PublicController extends Controller
{
    public function __invoke()
    {
        $teams = Team::with('skills')->get();
        $projectCategories = ProjectCategory::all();
        $projects = Project::all();
        return view('insta', compact('teams','projectCategories','projects'));
    }
}
