<?php

namespace App\Http\Controllers;

use App\Client;

class ClientController extends Controller
{

    public function show($slug, $id) {

        return view('client');
    }

}
