<?php

namespace App\Http\Controllers;

use App\Client;

class HomeController extends Controller
{

    public function index()
    {
        $featuredClients = Client::where('is_verified', 1)->get();

        return view('home', compact('featuredClients'));
    }

}
