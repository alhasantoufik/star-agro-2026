<?php

namespace App\Http\Controllers\Frontend;

use App\Http\Controllers\Controller;
use App\Models\About;
use App\Models\Achievement;
use App\Models\Chairman;
use App\Models\MissionAndVission;
use App\Models\Review;
use App\Models\Team;
use App\Models\WhyChoseUs;
use Illuminate\Http\Request;

class AboutPageController extends Controller
{
    public function aboutPage(){
        $pageTitle = 'About Us';
        $chairman = Chairman::first();
        $about = About::first();
        $missionVission = MissionAndVission::first();
        $whychoseuses = WhyChoseUs::Where('is_active', 1)->latest()->get();
        $reviews = Review::latest()->get();
        $achievements = Achievement::where('is_active', 1)
            ->latest()
            ->get(['id', 'title', 'count_number', 'image']);
        $teams = Team::where('is_active',1)
        ->latest()
        ->get(['id', 'name','position','image']);
        return view('website.layouts.pages.about.about', compact([
            'pageTitle',
            'chairman',
            'about',
             'missionVission',
             'reviews',
             'whychoseuses',
             'achievements',
             'teams'
        ]));
    }
}

