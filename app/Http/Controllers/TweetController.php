<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class TweetController extends Controller
{
    public function index()
    {
        return view('tweets/index');

        // Get Data from the DB


        //
    }

    public function create()
    {
        return view('tweets/create');
    }

    public function show()
    {
        return view('tweets/show');

        // Get Data from the DB
        $results = DB::select('select * from tweets', array(1));
    }

    public function massage()
    {
        return view('tweets/easterEgg/succulent_massage');
    }
}
