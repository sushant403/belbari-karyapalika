@extends('layouts.front')

@section('content')
<div class="mid_part">
    <div class="container">
        <div class="row">
            <div class="col-lg-12 col-md-8">
                <div class="main-link card">
                    <div class="card-header">
                        <h4>eServices</h4>
                    </div>
                    <div class="card-body">
                        <ul class="useful-link">
                            <li>
                                <a href="/admin/clients"><i class="fa fa-adjust"></i>&nbsp;Advanced Search</a>
                            </li>
                            <li>
                                <a href="/admin/clients/create"><i class="fa fa-anchor"></i>&nbsp;Add New
                                    Registration</a>
                            </li>
                            <li>
                                <a href="{{ route('login') }}"><i class="fa fa-archive"></i>&nbsp;Admin
                                    Login</a>
                            </li>
                        </ul>
                        <div class="clearfix"></div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection