<?php

namespace App\Http\Controllers;

use App\Client;

class SearchController extends Controller
{

    public function index()
    {
        $clients = Client::with('event_types')
            ->when(request('event_type'), function($query) {
                return $query->whereHas('event_types', function($q) {
                    $q->where('event_types.id', request('event_type'));
                });
            })
            ->when(request('people_amount'), function($query) {
                return $query->where('clients.people_minimum', '<=', request('people_amount'))
                    ->where('clients.people_maximum', '>=', request('people_amount'));
            })
            ->when(request('location'), function($query) {
                return $query->where('clients.location_id', request('location'));
            })
            ->latest()
            ->paginate(3);

        return view('search', compact('clients', 'eventType'));
    }

}
