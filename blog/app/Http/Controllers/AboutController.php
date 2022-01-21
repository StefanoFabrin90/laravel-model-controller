<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Movie;

class AboutController extends Controller
{
    //aboutpage
    public function index()
    {
        $movies = Movie::all();
        //dump($movies);


        return view('about', compact('movies'));
    }
}
