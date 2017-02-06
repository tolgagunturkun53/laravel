<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\Movie;

class MovieController extends Controller
{
    public function index()
    {
    	$movies = Movie::all();
    	return view("movie.index", [
    		"movies" => $movies
    	]);
    }

    public function show($movie_id)
    {
    	$movie = Movie::findOrFail($movie_id);
    	return view("movie.show", [
    		"movie" => $movie
    	]);
    }
}
