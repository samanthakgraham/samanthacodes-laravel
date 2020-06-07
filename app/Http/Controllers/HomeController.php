<?php

namespace App\Http\Controllers;

use Models\Education;
use Models\PersonalInfo;
use Models\Position;

class HomeController extends Controller
{
    public function index()
    {
        $viewData = [
            'personalInfo' => PersonalInfo::findOrFail(1),
            'education' => Education::orderBy('year_completed', 'desc')->get(),
            'positions' => Position::orderBy('date_started', 'desc')->get()
        ];

        return view('home.home', $viewData);
    }
}
