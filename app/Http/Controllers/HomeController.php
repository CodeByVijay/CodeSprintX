<?php

namespace App\Http\Controllers;

use App\Models\Course;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function index()
    {
        $data['programs'] = Course::query()
            ->get();

        return view('home.pages.home', $data);
    }
}
