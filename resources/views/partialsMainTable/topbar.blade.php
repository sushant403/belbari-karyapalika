<div class="top_sec">
    <!-- header -->
    <header>
        <div class="container">
            <div class="row">
                <div class="col-lg-6 col-md-6 col-sm-6">
                    <a href="{{ url('/') }}" class="logo_sec">
                        <div class="row">
                            <div class="col-lg-2 col-md-3 pad-right-0">
                                <img src="/images/setting/nepal-logo.png" alt="Main Logo" height="90" width="90" />
                            </div>
                            <div class="col-lg-10 col-md-9 text-left logo_text">
                                <span>Government of Nepal</span>
                                <span>Belbari Nagarpalika, Morang</span>
                                <b>Belbari Nagar Karyapalika</b>
                            </div>
                            <div class="clearfix"></div>
                        </div>
                    </a>
                </div>
                <div class="col-lg-6 col-md-6 col-sm-6 text-right">
                    <div class="right-box text-right">
                        <ul>
                            @guest
                            <li style="margin-right: 5px">
                                <a class="btn btn-primary text-white" href="{{ route('login') }}">
                                    Officials Portal Login</a>
                            </li>
                            @else
                            <li style="margin-right: 5px">
                                <a class="btn btn-primary text-white" href="{{ url('home') }}">
                                    Logged in as {{ Auth::user()->name }}</a>
                            </li>
                            @endguest
                            <li>
                                <a href=""><img src="/images/language/engflag.png" alt="">
                                    &nbsp; English</a>
                            </li>
                            <li>
                                <a href=""><img src="/images/language/npflag.png" alt="">
                                    &nbsp; Nepali</a>
                            </li>
                        </ul>
                        <div class="clearfix"></div>
                    </div>
                </div>
                <div class="clearfix"></div>
            </div>
        </div>
    </header>
    <!-- /header -->
    <div class="mid_part py-2">
        <div class="container">
            <div class="row">
                <div class="col-lg-12 col-md-8">
                    @auth
                    <div class="main-link card">
                        <div class="card-header">
                            <h4>eServices</h4>
                        </div>
                        <div class="card-body">
                            <ul class="useful-link">
                                <li>
                                    <a href="/admin"><i class="fa fa-adjust"></i>&nbsp;Advanced Search</a>
                                </li>
                                <li>
                                    <a href="/admin/companies"><i class="fa fa-anchor"></i>&nbsp;Add New
                                        Registration</a>
                                </li>
                                <li>
                                    <a href="{{ route('login') }}"><i class="fa fa-archive"></i>&nbsp;Admin
                                        Login</a>
                                </li>
                            </ul>
                            <div class="col">
                                <p> Authorized Personell Only. Please Login First.
                                </p>
                            </div>
                            <div class="clearfix"></div>
                        </div>
                    </div>
                    @endauth
                </div>
            </div>
        </div>
    </div>
</div>