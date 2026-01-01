<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Experience;
use App\Models\Education;
use App\Models\Skill;
use App\Models\Project;

class HomeController extends Controller
{
    public function index()
    {
        $experiences = Experience::orderBy('id', 'desc')->get();
        $educations = Education::all();
        $skills = Skill::all();
        $projects = Project::all();

        return view('portfolio', compact('experiences', 'educations', 'skills', 'projects'));
    }
}