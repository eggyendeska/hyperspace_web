<?php

namespace App\Http\Controllers;

use App\Project;
use App\ProjectCategory;
use App\Team;
use App\Testimonial;
use Illuminate\Http\Request;

class PublicController extends Controller
{
    public function __invoke()
    {
        $teams = Team::with('skills')->orderBy('order', 'asc')->get();
        $projectCategories = ProjectCategory::all();
        $projects = Project::all();
        $testimonials = Testimonial::all();
        return view('insta', compact('teams','projectCategories','projects','testimonials'));
    }
}
