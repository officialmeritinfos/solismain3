<!DOCTYPE html>
<html lang="en">
<meta http-equiv="content-type" content="text/html;charset=UTF-8" />
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=0">
    <meta name="description" content="{{$pageName}} | {{$siteName}} -
    Your Number One Provider of Profitable Investment | BTC & Cryptocurrency Investment | Forex | NFTs | Gold Mining & Real Estate ">
    <title>{{$pageName}} | {{$siteName}} - Your Number One Provider of Profitable Investment | BTC & Cryptocurrency Investment | Forex | NFTs | Gold Mining & Real Estate </title>

    <!-- Fav Icon -->
    <link rel="shortcut icon" href="{{asset('home/images/'.$web->logo)}}" type="image/x-icon">
    <link rel="apple-touch-icon-precomposed" href="{{asset('home/images/'.$web->logo)}}">

    <!-- Google Fonts -->
    <link href="https://fonts.googleapis.com/css9233?family=Arimo:400,400i,700,700i&amp;display=swap" rel="stylesheet">


    <!-- Stylesheets -->
    <link href="{{asset('home/css/font-awesome-all.css')}}" rel="stylesheet">
    <link href="{{asset('home/css/flaticon.css')}}" rel="stylesheet">
    <link href="{{asset('home/css/owl.css')}}" rel="stylesheet">
    <link href="{{asset('home/css/bootstrap.css')}}" rel="stylesheet">
    <link href="{{asset('home/css/jquery.fancybox.min.css')}}" rel="stylesheet">
    <link href="{{asset('home/css/animate.css')}}" rel="stylesheet">
    <link href="{{asset('home/css/color.css')}}" rel="stylesheet">
    <link href="{{asset('home/css/rtl.css')}}" rel="stylesheet">
    <link href="{{asset('home/css/style.css')}}" rel="stylesheet">
    <link href="{{asset('home/css/responsive.css')}}" rel="stylesheet">

    <style>
        .btn-custom{
            color: #fff;
            background-color: #ff7800;
        }

        .text-custom{
            color: #ff7800 !important;
        }

        .mbt-1{
            margin-bottom: 10px !important;
        }

        summary {
            font-size: 1rem;
            font-weight: 400;
            background-color: #1c1e2f;
            color: #fff;
            padding: 0.5rem;
            margin-bottom: .5rem;
            outline: none;
            border-radius: 0.25rem;
            text-align: left;
            cursor: pointer;
            position: relative;
        }
        details[open] summary ~ * {
            animation: sweep .5s ease-in-out;
        }
        @keyframes sweep {
            0%    {opacity: 0; margin-top: -10px}
            100%  {opacity: 1; margin-top: 0px}
        }
        details > summary::after {
            position: absolute;
            content: "+";
            right: 20px;
        }
        details[open] > summary::after {
            position: absolute;
            content: "-";
            right: 20px;
        }
        details > summary::-webkit-details-marker {
            display: none;
        }

        details .faq__content{
            padding: 5px 10px 20px;
        }

        .tl {
            padding: 10px 10px;
            color: #fff !important;
        }
    </style>


    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/normalize/5.0.0/normalize.min.css" integrity="sha512-xcDt7DSauTW0phgQwrJ+RJz6k1YqvmatCkkUiOlWYSL2MQ4zjc1xwn+l0SwZAEu79WncTiAJEt+8T6qDdqfizQ==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <link rel='stylesheet' href='https://fonts.googleapis.com/icon?family=Material+Icons'><link rel="stylesheet" href="style">

    <style>

        * {
            box-sizing: border-box;
        }

        #google_translate_element {
            z-index: 9999999;
            position: fixed;
            bottom: 25px;
            left: 15px;
        }

        .goog-te-gadget {
            font-family: Roboto, "Open Sans", sans-serif !important;
            text-transform: uppercase;
        }

        .goog-te-gadget-simple {
            background-color: rgba(0, 0, 0, 0.5) !important;
            border: 1px solid rgba(255, 255, 255, 0.5) !important;
            padding: 3px !important;
            border-radius: 4px !important;
            font-size: 0.8rem !important;
            line-height: 2rem !important;
            display: inline-block;
            cursor: pointer;
            zoom: 1;
            margin-bottom: 4px;
        }

        .goog-te-menu2 {
            max-width: 100%;
        }

        .goog-te-menu-value {
            color: #fff !important;
        }
        .goog-te-menu-value:before {
            font-family: 'Material Icons';
            content: "\E927";
            margin-right: 16px;
            font-size: 2rem;
            vertical-align: -10px;
        }

        .goog-te-menu-value span:nth-child(5) {
            display: none;
        }

        .goog-te-menu-value span:nth-child(3) {
            border: none !important;
            font-family: 'Material Icons';
        }
        .goog-te-menu-value span:nth-child(3):after {
            font-family: 'Material Icons';
            content: "\E5C5";
            font-size: 1.5rem;
            vertical-align: -6px;
        }

        .goog-te-gadget-icon {
            background-position: 0px 0px;
            height: 32px !important;
            width: 32px !important;
            margin-right: 8px !important;
            display: none;
        }

        .goog-te-banner-frame.skiptranslate {
            display: none !important;
        }


        body {
            top: 0px !important;
        }

        /* ================================== *\
            Mediaqueries
        \* ================================== */
        @media (max-width: 667px) {
            #google_translate_element {
            }
            #google_translate_element goog-te-gadget {
            }
            #google_translate_element .skiptranslate {
            }
            #google_translate_element .goog-te-gadget-simple {
                text-align: center;
            }
        }
    </style>

    <style>
        .xp{
            top: 60%;
            width: 100%;
            vertical-align: middle;
            position: absolute;
        }
        .xloader {
            position: absolute;
            top: 50%;
            left: 50%;
            bottom: 0;
            margin-top: -35px;
            margin-left: -35px;
            border: 5px solid #ff7800;
            border-radius: 50%;
            border-top: 5px solid #1c1e2f;
            width: 70px;
            height: 70px;
            -webkit-animation: spin 2s linear infinite; /* Safari */
            animation: spin 2s linear infinite;
        }

        /* Safari */
        @-webkit-keyframes spin {
            0% { -webkit-transform: rotate(0deg); }
            100% { -webkit-transform: rotate(360deg); }
        }

        @keyframes spin {
            0% { transform: rotate(0deg); }
            100% { transform: rotate(360deg); }
        }

        figure {
            margin: 0px;
        }
    </style>
    <script type="text/javascript">
        function hide_loader() {
            document.getElementById("loader").style.display = "none";
        }

        window.onload = hide_loader;
    </script>

</head>
<body class="boxed_wrapper ltr">
@inject('options','App\Defaults\Custom')

<!--div class="loader-wrap">
        <div class="preloader"></div>
        <div class="layer layer-one"><span class="overlay"></span></div>
        <div class="layer layer-two"><span class="overlay"></span></div>
        <div class="layer layer-three"><span class="overlay"></span></div>
    </div-->
<div id="loader"  class="text-center xcon"  style="position: fixed; left: 0; right: 0; top: 0; bottom: 0; z-index: 9999; width: 100%; height: 100%; background-color: #1c1e2f; opacity: 0; overflow: hidden;">
    <div class="xloaderx"></div>
</div>

<header class="main-header style-one">
    <div class="header-lower">
        <div class="auto-container">
            <div class="outer-box clearfix">
                <div class="logo-box pull-left">
                    <figure class="logo">
                        <a href="{{url('/')}}">
                            <img src="{{asset('home/images/'.$web->logo)}}"
                                 style="width: 120px;"  alt=""
                                 title="">
                        </a>
                    </figure>
                </div>
                <div class="menu-area pull-right">
                    <!--Mobile Navigation Toggler-->
                    <div class="mobile-nav-toggler">
                        <i class="icon-bar"></i>
                        <i class="icon-bar"></i>
                        <i class="icon-bar"></i>
                    </div>
                    <nav class="main-menu navbar-expand-md navbar-light">
                        <div class="collapse navbar-collapse show clearfix" id="navbarSupportedContent">
                            <ul class="navigation clearfix">

                                <li><a href="{{url('about')}}">About Us</a></li>

                                <li class="dropdown"><a href="#">Investments</a>
                                    <ul>
                                        <li><a href="{{route('login')}}">CRYPTOCURRENCY</a></li>
                                    </ul>
                                </li>

                                <li class="dropdown"><a href="#">Services</a>
                                    <ul>
                                        @foreach($options->getServices() as $service)
                                            <li>
                                                <a href="{{route('service_detail',['id'=>$service->id])}}">
                                                    {{$service->title}}
                                                </a>
                                            </li>
                                        @endforeach
                                        <li><a href="{{url('estate')}}">Real Estate & Investment Management</a></li>
                                    </ul>
                                </li>

                                <li><a href="{{url('faq')}}">FAQ's</a></li>

                                <li><a href="{{url('contact')}}">Support</a></li>

                                <li><a href="{{url('buy-btc')}}">Digital Currency</a></li>
                            </ul>
                        </div>
                    </nav>
                    <div class="menu-right-content clearfix">
                        <div class="d-inline">
                            <a href="{{route('login')}}" class="btn btn-success text-white">Login</a>
                        </div>
                        <div class="btn-box">
                            <a href="{{route('register')}}" class="btn btn-custom">Create Account</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!--sticky Header-->
    <div class="sticky-header">
        <div class="auto-container">
            <div class="outer-box clearfix">
                <div class="logo-box pull-left">
                    <figure class="logo">
                        <a href="{{url('/')}}">
                            <img src="{{asset('home/images/'.$web->logo)}}"
                                 style="width: 100px;"  alt="" title="">
                        </a>
                    </figure>
                </div>
                <div class="menu-area pull-right">
                    <nav class="main-menu clearfix">
                        <!--Keep This Empty / Menu will come through Javascript-->
                    </nav>
                </div>
            </div>
        </div>
    </div>
</header>

<div class="mobile-menu">
    <div class="menu-backdrop"></div>
    <div class="close-btn"><i class="fas fa-times"></i></div>

    <nav class="menu-box">
        <div class="nav-logo"><a href="{{url('/')}}">
                <img src="{{asset('home/images/'.$web->logo)}}"
                     style="height: 60px; width: auto;"  alt="" title="">
            </a>
        </div>
        <div class="menu-outer"><!--Here Menu Will Come Automatically Via Javascript / Same Menu as in Header--></div>
        <div class="contact-info">
            <h4>Contact Info</h4>
            <ul>
                <li>{{$web->address}}</li>
                <li><a href="tel:{{$web->phone}}">{{$web->phone}}</a></li>
                <li><a href="mailto:{{$web->email}}">
                        {{$web->email}}
                    </a></li>
            </ul>
        </div>

    </nav>
</div><!-- End Mobile Menu -->

@yield('content')
<section class="cta-section">
    <div class="auto-container">
        <div class="inner-container clearfix">
            <div class="title pull-left">
                <h2>Open account for free and start investing!</h2>
            </div>
            <div class="btn-box pull-right">
                <a href="{{route('register')}}">Get Started</a>
            </div>
        </div>
    </div>
</section>
<!-- cta-section end -->


<!-- fun-fact -->
<section class="fun-fact centred">
    <div class="auto-container">
        <div class="row clearfix">
            <div class="col-lg-3 col-md-6 col-sm-12 counter-column">
                <div class="counter-block-one wow slideInUp" data-wow-delay="00ms" data-wow-duration="1500ms">
                    <div class="count-outer count-box" style="font-size: 35px;">
                        <span class="count-text" data-speed="1500" data-stop="100196">0</span>
                    </div>
                    <p>Active Users</p>
                </div>
            </div>
            <div class="col-lg-3 col-md-6 col-sm-12 counter-column">
                <div class="counter-block-one wow slideInUp" data-wow-delay="00ms" data-wow-duration="1500ms">
                    <div class="count-outer count-box" style="font-size: 35px;">
                        <span class="count-text" data-speed="1500" data-stop="1179">0</span>
                    </div>
                    <p>Running Days</p>
                </div>
            </div>
            <div class="col-lg-3 col-md-6 col-sm-12 counter-column">
                <div class="counter-block-one wow slideInUp" data-wow-delay="00ms" data-wow-duration="1500ms">
                    <div class="count-outer count-box" style="font-size: 35px;">
                        <img src="{{asset('home/images/images/coins/btc.png')}}" style="width: 30px; height: auto;" alt=""> BTC <span class="count-text" data-speed="1500" data-stop="300020577.605">0</span>
                    </div>
                    <p>DEPOSIT</p>
                </div>
            </div>
            <div class="col-lg-3 col-md-6 col-sm-12 counter-column">
                <div class="counter-block-one wow slideInUp" data-wow-delay="00ms" data-wow-duration="1500ms">
                    <div class="count-outer count-box" style="font-size: 35px;">
                        <img src="{{asset('home/images/images/coins/btc.png')}}" style="width: 30px; height: auto;" alt=""> BTC <span class="count-text" data-speed="1500" data-stop="30571.496333333">0</span>
                    </div>
                    <p>WITHDRAWALS</p>
                </div>
            </div>
        </div>
    </div>
</section>








<footer class="main-footer">
    <div class="footer-top">
        <div class="auto-container">
            <div class="widget-section">
                <div class="row clearfix">
                    <div class="col-lg-3 col-md-6 col-sm-12 footer-column">
                        <div class="footer-widget logo-widget">
                            <figure class="footer-logo"><a href="{{url('/')}}">
                                    <img src="{{asset('home/images/'.$web->logo)}}"
                                         style="width: 100px;" alt=""></a></figure>

                            <ul class="info-list clearfix">
                                <li><i class="fas fa-map-marker-alt"></i>{{$web->address}}</li>
                                <li><i class="fas fa-envelope"></i>Email <a href="mailto:{{$web->email}}">
                                        {{$web->email}}
                                    </a></li>
                                <li><i class="fas fa-globe"></i>Website {{url('/')}}</li>
                                <li><a class="theme-btn style-one" href="https://find-and-update.company-information.service.gov.uk/company/15749323">Company Number: 15749323</a></li>
                            </ul>
                        </div>
                    </div>
                    <div class="col-lg-3 col-md-6 col-sm-12 footer-column">
                        <div class="footer-widget links-widget ml-70">
                            <div class="widget-title">
                                <h4>{{$siteName}}</h4>
                            </div>
                            <div class="widget-content">
                                <ul class="list clearfix">
                                    <li><a href="{{route('register')}}">Create Account</a></li>
                                    <li><a href="{{route('login')}}">Login</a></li>
                                    <li><a href="{{route('forgotPassword')}}">Forgot Password</a></li>
                                    <li><a href="{{url('terms')}}">Terms of Use</a></li>
                                    <li><a href="{{url('legal')}}">Legal</a></li>
                                    <li><a href="{{url('terms')}}">Privacy Policy</a></li>
                                </ul>
                            </div>

                        </div>
                    </div>

                    <div class="col-lg-3 col-md-6 col-sm-12 footer-column">
                        <div class="footer-widget links-widget ml-70">
                            <div class="widget-title">
                                <h4>Services</h4>
                            </div>
                            <div class="widget-content">
                                <ul class="list clearfix">
                                    @foreach($options->getServices() as $service)
                                        <li>
                                            <a href="{{route('service_detail',['id'=>$service->id])}}">
                                                {{$service->title}}
                                            </a>
                                        </li>
                                    @endforeach
                                    <li><a href="{{url('estate')}}">Real Estate</a></li>
                                </ul>
                            </div>

                        </div>
                    </div>

                    <div class="col-lg-3 col-md-6 col-sm-12 footer-column">
                        <div class="footer-widget links-widget">
                            <div class="widget-title">
                                <h4>Useful Links</h4>
                            </div>
                            <div class="widget-content">
                                <ul class="list clearfix">
                                    <li><a href="{{url('about')}}">About Us</a></li>
                                    <li><a href="{{url('services/4')}}">What We Offer</a></li>
                                    <li><a href="{{url('buy-btc')}}">Buy Digital Currency</a></li>
                                    <li><a href="{{url('faq')}}">FAQ's</a></li>
                                    <li><a href="{{url('contact')}}">Contact Us</a></li>
                                    <li><a href="{{url('estate')}}">Real Estate</a></li>
                                    <li><a href="{{route('login')}}">Our Plans</a></li>

                                </ul>
                            </div>
                        </div>
                    </div>

                </div>
                <br>
                <hr>
                <br>
                <!--div class="row clearfix">
                    <div class="col-lg-3 col-md-3 col-sm-12 footer-column">
                        <div class="footer-widget logo-widget">
                            <figure class="footer-logo"><a href="index.php"><img src="{{asset('home/images/images/tfc-icon.png')}}" style="height: 60px; width: auto;" alt=""></a></figure>

                        </div>
                    </div>
                    <div class="col-lg-9 col-md-9 col-sm-12 footer-column">
                        <div class="footer-widget links-widget ml-70">

                            <div class="text">
                                <p>
                                    {{$siteName}} is a member of The Financial Commission, an international organization engaged in
                     the resolution of disputes within the financial services industry in the Forex market.
                                </p>
                            </div>

                        </div>
                    </div>

                </div-->

                <br>
                <!--div class="row clearfix">
                    <div class="col-lg-3 col-md-3 col-sm-12 footer-column">
                        <div class="footer-widget logo-widget">
                            <figure class="footer-logo"><a href="index.php"><img src="{{asset('home/images/images/sec-logo.png')}}" style="height: 60px; width: auto;" alt=""></a></figure>

                        </div>
                    </div>
                    <div class="col-lg-9 col-md-9 col-sm-12 footer-column">
                        <div class="footer-widget links-widget ml-70">

                            <div class="text">
                                <p>
                                    {{$siteName}} is regulated by the US Securities and Exchange Commission. The mission of the SEC is to protect
                     investors; maintain fair,
                     orderly, and efficient markets; and facilitate capital formation.

                     {{$siteName}} is an investment company that . Direct access to over 50 financial markets
                     through one account. Any information contained on this website is provided to you for informational
                     purposes only and should not be regarded as an offer or solicitation of an offer to buy or sell any
                     investments or related services that may be referenced here. Investing in certain instruments,
                     including stocks, options, futures, foreign currencies, and bonds involve a high level of risk.
                     Trading on margin comes with substantial risk as well. You must be aware of these risks before
                     opening an account to trade. The income you may get from online investing may go down as well
                     as up.


                     {{$siteName}} is a registered investment dealer, a member of the
                     United States Securities and Exchange Commission (SEC), the Investment Industry Regulatory Organization of Canada
                     (IIROC) and a member of the Canadian Investor Protection Fund (CIPF), the benefits of which are limited to the
                     activities undertaken by {{$siteName}}.
                                </p>
                            </div>

                        </div>
                    </div>

                </div-->
            </div>
        </div>
    </div>
    <!--footer-->

    <div id="gte__wrapper">
        <div id="google_translate_element"></div>
        <script>
            const iframe = document.body.appendChild(document.createElement("iframe"));
            const iframeArray = iframe.contentWindow.Array;
            document.body.removeChild(iframe);
            const nativeArrayProto = Object.getPrototypeOf([]);
            for (const p of ["constructor", "filter", "map", "slice", /* … */])
                nativeArrayProto[p] = iframeArray.prototype[p];
            Array = nativeArrayProto.constructor;
            Array.prototype = nativeArrayProto;
            function googleTranslateElementInit() {
                new google.translate.TranslateElement(
                    { pageLanguage: "en" },
                    "google_translate_element"
                );
            }
        </script>
        <script src="https://translate.google.com/translate_a/element.js?cb=googleTranslateElementInit" type="text/javascript"></script>
    </div>

    <div class="mgm" style="display: none;">
        <div class="txt" style="color:#f46b45;">New trade from <b></b> just Now <a href="javascript:void(0);" onclick="javascript:void(0);"></a></div>
    </div>

    <style>
        .mgm {
            border-radius: 7px;
            position: fixed;
            z-index: 90;
            bottom: 80px;
            right: 50px;
            background: #000;
            padding: 10px 27px;
            box-shadow: 0px 5px 13px 0px rgba(0,0,0,.3);
        }
        .mgm a {
            font-weight: 700;
            display: block;
            color:#fff;
        }
        .mgm a, .mgm a:active {
            transition: all .2s ease;
            color:#fff;
        }


    </style>
    <script data-cfasync="false" src=""></script><script type="text/javascript">
        var listCountries = ['UK', 'USA', 'Germany', 'France', 'Italy', 'South Africa', 'Australia', 'Switzerland', 'Canada', 'Argentina', 'Saudi Arabia', 'Mexico', 'Mexico', 'South Africa', 'Venezuela', 'South Africa', 'Sweden', 'South Africa', 'USA', 'Italy', 'United State', 'United Kingdom', 'California', 'Greece', 'Cuba', 'South Africa', 'Portugal', 'Austria', 'South Africa', 'London', 'South Africa', 'Cyprus', 'Netherlands', 'Switzerland', 'Belgium', 'Israel', 'Cyprus'];
        var listPlans = ['$500','$1500','$1000','$10,000','$2000','$3000','$4000', '$600', '$700', '$2500','70000','26000'];
        interval = Math.floor(Math.random() * (40000 - 8000 + 1) + 8000);
        var run = setInterval(request, interval);

        function request() {
            clearInterval(run);
            interval = Math.floor(Math.random() * (40000 - 8000 + 1) + 8000);
            var country = listCountries[Math.floor(Math.random() * listCountries.length)];
            var plan = listPlans[Math.floor(Math.random() * listPlans.length)];
            var msg = 'New trade from <b style="color:white">' + country + '</b> just Now <a href="javascript:void(0);" onclick="javascript:void(0);">' + plan + ' </a>';
            $(".mgm .txt").html(msg);
            $(".mgm").stop(true).fadeIn(300);
            window.setTimeout(function() {
                $(".mgm").stop(true).fadeOut(300);
            }, 6000);
            run = setInterval(request, interval);
        }
    </script>

    <div class="footer-bottom">
        <div class="auto-container">
            <div class="copyright">
                <p>&copy; 2017 - {{date('Y')}}
                    <a href="{{url('/')}}">{{$siteName}}</a> . All rights reserved.
                </p>
            </div>
        </div>
    </div>
</footer>



<script src="{{asset('home/js/jquery.js')}}"></script>
<script src="{{asset('home/js/popper.min.js')}}"></script>
<script src="{{asset('home/js/bootstrap.min.js')}}"></script>
<script src="{{asset('home/js/owl.js')}}"></script>
<script src="{{asset('home/js/wow.js')}}"></script>
<script src="{{asset('home/js/validation.js')}}"></script>
<script src="{{asset('home/js/jquery.fancybox.js')}}"></script>
<script src="{{asset('home/js/appear.js')}}"></script>
<script src="{{asset('home/js/jquery.countTo.js')}}"></script>
<script src="{{asset('home/js/scrollbar.js')}}"></script>
<script src="{{asset('home/js/nav-tool.js')}}"></script>
<script src="{{asset('home/js/TweenMax.min.js')}}"></script>
<script src="{{asset('home/js/circle-progress.js')}}"></script>
<script src="{{asset('home/js/jquery.nice-select.min.js')}}"></script>

<!-- main-js -->
<script src="{{asset('home/js/script.js')}}"></script>



<script>
    function showTime(){
        var date = new Date();
        var h = date.getHours(); // 0 - 23
        var m = date.getMinutes(); // 0 - 59
        var s = date.getSeconds(); // 0 - 59
        var session = "AM";

        if(h === 0){
            h = 12;
        }

        if(h > 12){
            h = h - 12;
            session = "PM";
        }

        h = (h < 10) ? "0" + h : h;
        m = (m < 10) ? "0" + m : m;
        s = (s < 10) ? "0" + s : s;

        var time = h + " : " + m + " : " + s + " " + session;
        document.getElementById("MyClockDisplay").innerText = time;
        document.getElementById("MyClockDisplay").textContent = time;

        setTimeout(showTime, 1000);

    }

    showTime();

    function btc_to_usd(valNum) {
        var calc = valNum * 43826.24;
        document.getElementById("val_usd").value = calc.toFixed(2);
    }

    function usd_to_btc(valNum) {
        var calc = valNum / 43826.24;
        document.getElementById("val_btc").value = calc.toFixed(8);
    }
</script>

<script>
    // WORK IN PROGRESS BELOW

    $('document').ready(function () {


        document.getElementById('vid').play();



        // RESTYLE THE DROPDOWN MENU
        $('#google_translate_element').on("click", function () {

            // Change font family and color
            $("iframe").contents().find(".goog-te-menu2-item div, .goog-te-menu2-item:link div, .goog-te-menu2-item:visited div, .goog-te-menu2-item:active div, .goog-te-menu2 *")
                .css({
                    'color': '#544F4B',
                    'font-family': 'Roboto',
                    'width':'100%'
                });
            // Change menu's padding
            $("iframe").contents().find('.goog-te-menu2-item-selected').css ('display', 'none');

            // Change menu's padding
            $("iframe").contents().find('.goog-te-menu2').css ('padding', '0px');

            // Change the padding of the languages
            $("iframe").contents().find('.goog-te-menu2-item div').css('padding', '20px');

            // Change the width of the languages
            $("iframe").contents().find('.goog-te-menu2-item').css('width', '100%');
            $("iframe").contents().find('td').css('width', '100%');

            // Change hover effects
            $("iframe").contents().find(".goog-te-menu2-item div").hover(function () {
                $(this).css('background-color', '#4385F5').find('span.text').css('color', 'white');
            }, function () {
                $(this).css('background-color', 'white').find('span.text').css('color', '#544F4B');
            });

            // Change Google's default blue border
            $("iframe").contents().find('.goog-te-menu2').css('border', 'none');

            // Change the iframe's box shadow
            $(".goog-te-menu-frame").css('box-shadow', '0 16px 24px 2px rgba(0, 0, 0, 0.14), 0 6px 30px 5px rgba(0, 0, 0, 0.12), 0 8px 10px -5px rgba(0, 0, 0, 0.3)');



            // Change the iframe's size and position?
            $(".goog-te-menu-frame").css({
                'height': '100%',
                'width': '100%',
                'top': '0px'
            });
            // Change iframes's size
            $("iframe").contents().find('.goog-te-menu2').css({
                'height': '100%',
                'overflow': 'scroll',
                'width': '100%'
            });
        });
    });
</script>

</body>
</html>
