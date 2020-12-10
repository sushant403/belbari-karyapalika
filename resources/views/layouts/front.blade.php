<!DOCTYPE HTML>
<html lang="">

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <meta name="author" content="Belbari Nagar Karyapalika">
    <title>Belbari Nagar Karyapalika</title>
    <meta name="keywords" content="Belbari Nagar Karyapalika">
    <meta name="author" content="Belbari Nagar Karyapalika">
    <meta name="description" content="&lt;p&gt;Belbari Nagar Karyapalika&lt;/p&gt;">

    <link rel="icon" type="image/png" sizes="32x32" href="/images/setting/nepal-logo.ico">
    <!-- Bootstrap -->
    <link href="/css/bootstrap.min.css" rel="stylesheet">
    <!-- Font Awesome -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <!--Custom CSS -->
    <link href="/css/sec.css" rel="stylesheet">
    <link href="/css/resize.css" rel="stylesheet">

    <!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/html5shiv/3.7.3/html5shiv.min.js"></script>
      <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <![endif]-->
</head>

<body>
    <div class="top_sec">
        <!-- header -->
        <header>
            <div class="container">
                <div class="row">
                    <div class="col-lg-6 col-md-6 col-sm-6">
                        <a href="" class="logo_sec">
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
                    <div class="col-lg-6 col-md-6 col-sm-6 text-right mt-4">
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
                                    <a href="/swap/language/1"><img src="/images/language/engflag.png" alt="">
                                        &nbsp; English</a>
                                </li>
                                <li>
                                    <a href="/swap/language/2"><img src="/images/language/npflag.png" alt="">
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
    </div>
    <div class="clearfix"></div>

    @yield('content')

    <!-- footer -->
    <footer>
        <!-- main footer -->

        <div class="footer-top">
            <div class="container">
                <div class="row">
                    <div class="col-lg-4 col-md-6 col-sm-6 contact_person">
                        <h4>Contact Person</h4>
                        <div class="row">
                            <div class="col-lg-4 col-md-12 pad-right-0">
                                <p><img alt="" class="img-fluid" src="/images/thumbnail.jpg"
                                        style="height:100px; width:100px" /></p>
                            </div>

                            <div class="col-lg-8 col-md-12">
                                <ul style="color: black">
                                    <li>श्री Rajesh Hamal </li>
                                    <li>सूचना अधिकारी</li>
                                    <li>info.belbari@gov.np</li>
                                    <li>सम्पर्क नम्बरः 9842424242</li>
                                </ul>
                            </div>

                            <div class="clearfix">&nbsp;</div>
                        </div>
                        <div class="clearfix"></div>
                    </div>
                    <div class="col-lg-4 col-md-6 col-sm-6">
                        <h4>Address</h4>
                        <div class="col-lg-12 col-md-12">
                            <ul>
                                <li>नेपाल सरकार</li>
                                <li>Belbari Nagar Karyapalika</li>
                                <li>Belbari, Morang, नेपाल</li>
                            </ul>
                        </div>

                        <div class="col-lg-12 col-md-12">
                            <ul>
                                <li>फोन :977-1-4259948</li>
                                <li>फ्याक्स : 977-1-4259961</li>
                                <li>4267256 (सोधपुछ / help-desk)</li>
                                <li>ई-मेल : support@gov.np</li>
                            </ul>
                        </div>
                        <div class="clearfix"></div>
                    </div>
                    <div class="col-lg-4 col-md-6 col-sm-6">
                        <div class=mapouter">
                            <div class="gmap_canvas"><iframe frameborder="0" height="280" id="gmap_canvas"
                                    src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d114129.73622146335!2d87.3616367015854!3d26.6307308535377!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x39ef65ca2e795c05%3A0xae018d58e323458a!2sBelbari%2056600!5e0!3m2!1sen!2snp!4v1606914843114!5m2!1sen!2snp"
                                    style="border:0;" width="100%"></iframe></div>
                        </div>

                        <div class="clearfix"></div>
                    </div>
                    <div class="col-lg-12 col-md-12 col-sm-12"> </div>
                    <div class="clearfix"></div>
                </div>
            </div>
        </div>

        <div class="footer-bottom">
            <div class="container">
                <div class="row">
                    <div class="col-md-7"> <span>Copyright © 2020 Belbari Nagar Karyapalika. All Rights Reserved.</span>
                    </div>

                    <div class="clearfix"></div>
                </div>
            </div>
        </div>

    </footer>
    <!-- /footer -->
    <script src="/js/bootstrap.min.js"></script>
    @yield('javascript')

</body>

</html>