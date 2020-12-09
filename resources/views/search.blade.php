@extends('layouts.front')

@section('content')
    <div class="site-section site-section-sm bg-light">
        <div class="container">
            <div class="row mb-5">
                <div class="col-12">
                    <div class="site-section-title">
                        <h2>Search results</h2>
                    </div>
                </div>
            </div>
            <div class="row mb-5">
                @foreach ($clients as $client)
                <div class="col-md-6 col-lg-4 mb-4">
                    <a href="{{ route('clients.show', [$client->slug, $client->id]) }}" class="prop-entry d-block">
                        <figure>
                            <img src="{{ $client->getFirstMediaUrl('main_photo', 'big_thumb') }}" alt="{{ $client->name }}" class="img-fluid">
                        </figure>
                        <div class="prop-text">
                            <div class="inner">
                                <span class="price rounded">${{ $client->price_per_hour }}</span>
                                <h3 class="title">{{ $client->name }}</h3>
                                <p class="location">{{ $client->address }}</p>
                            </div>
                            <div class="prop-more-info">
                                <div class="inner d-flex">
                                    <div class="col">
                                        <span>Event Types:</span>
                                        <strong>{{ implode(', ', $client->event_types->pluck('name')->toArray()) }}</strong>
                                    </div>
                                    <div class="col">
                                        <span>Number of people:</span>
                                        <strong>{{ $client->people_minimum }} - {{ $client->people_maximum }}</strong>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </a>
                </div>
                @endforeach

            </div>

            {{ $clients->appends(request()->except('page'))->links() }}
        </div>
    </div>

@endsection