<?php

namespace App\Http\Controllers;

use App\Project;
use App\ProjectCategory;
use App\Team;
use App\Testimonial;
use SEOMeta;
use OpenGraph;
use SEOTools;
use Illuminate\Http\Request;

class PublicController extends Controller
{
    public function __invoke()
    {

        SEOMeta::addMeta('robots', 'index, follow');
        SEOMeta::addMeta('googlebot', 'index, follow');
        SEOMeta::addMeta('og:type', 'business.business');
        SEOMeta::addMeta('business:contact_data:street_address', 'Condongcatur, Yogyakarta');
        SEOMeta::addMeta('business:contact_data:locality', 'Indonesia');
        SEOMeta::addMeta('business:contact_data:postal_code', '55281');
        SEOMeta::addMeta('business:contact_data:country_name', 'Indonesia');
        SEOMeta::addMeta('place:location:latitude', '34.885931');
        SEOMeta::addMeta('place:location:longitude', '9.84375');
        $teams = Team::with('skills')->orderBy('order', 'asc')->get();
        $projectCategories = ProjectCategory::all();
        $projects = Project::all();
        $testimonials = Testimonial::all();
        return view('insta', compact('teams','projectCategories','projects','testimonials'));
    }
}
