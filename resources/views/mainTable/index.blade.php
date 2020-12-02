@extends('layouts.mainTable')

@section('content')

<!--===============================
=            Hero Area            =
================================-->

<section class="hero-area py-5 ">
    <!-- Container Start -->
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <!-- Advance Search -->
                <div class="advance-search">
                    <form action="{{ route('search') }}" method="GET">

                        <div class="form-row">
                            <div class="form-group col-md-4">
                                <input type="text" name="search" value="{{ old('search') }}" class="form-control"
                                    placeholder="Search company" />
                                <p class="help-block"></p>
                                @if($errors->has('name'))
                                <p class="help-block">
                                    {{ $errors->first('name') }}
                                </p>
                                @endif
                            </div>
                            <div class="form-group col-md-3">
                                <select name="categories" class="form-control form-control-lg" placeholder="Category">
                                    @foreach ($search_categories as $category)
                                    <option value="{{ $category->id }}">{{ $category->name }}</option>
                                    @endforeach
                                </select>
                                <p class="help-block"></p>
                                @if($errors->has('categories'))
                                <p class="help-block">
                                    {{ $errors->first('categories') }}
                                </p>
                                @endif
                            </div>
                            <div class="form-group col-md-3">
                                <select name="city_id" class="form-control form-control-lg" placeholder="City">
                                    @foreach ($search_cities as $city)
                                    <option value="{{ $city->id }}">{{ $city->name }}</option>
                                    @endforeach
                                </select>
                                <p class="help-block"></p>
                                @if($errors->has('city_id'))
                                <p class="help-block">
                                    {{ $errors->first('city_id') }}
                                </p>
                                @endif
                            </div>

                            <div class="form-group col-md-2">
                                <button type="submit" class="btn btn-main">
                                    Search Now
                                </button>
                            </div>
                        </div>

                    </form>

                </div>

            </div>
        </div>
    </div>
    <!-- Container End -->
</section>

@stop