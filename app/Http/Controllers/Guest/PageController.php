<?php

namespace App\Http\Controllers\Guest;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Movie;

class PageController extends Controller
{
    public function getPage(){
        $movies = Movie::All();
        $films = config('arrayImgFilm.imgFilm');
        return view('welcome', compact('movies','films'));
    }
}
