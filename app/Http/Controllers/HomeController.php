<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Service; // Import the Service Model
use App\Models\Project;
use App\Models\Blog;
use App\Models\Team;

class HomeController extends Controller
{
    public function index()
    {
        // 1. Fetch all services from the database
        $services = Service::all();
        $projects = Project::all();
        $blogs = Blog::all();

        // Send both variables to the view
        return view('home', compact('services', 'projects', 'blogs'));
    }

    public function about()
    {
    $team = Team::all();
    return view('about', compact('team'));
    }
}