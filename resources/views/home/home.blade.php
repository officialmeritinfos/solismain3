@extends('home.base')
@section('content')

    @inject('options','App\Defaults\Custom')

    <section class="banner-section" >
        <div class="banner-carousel owl-theme owl-carousel owl-dots-none">

            <div class="slide-item">
                <div class="image-layer" style="background-image:url({{asset('home/images/banner/banner-12.jpg')}})"></div>
                <div class="auto-container">
                    <div class="content-box">
                        <h5 class="text-custom">{{$siteName}}</h5>
                        <h4 class="text-white" style="margin-bottom: 0px;">Celebrates</h4>
                        <h1 class="text-custom" style="margin-top: 0px; margin-bottom: 0px;">100,000</h1>
                        <h1 class="text-white" style="margin-bottom: 0px; margin-top: 0px;">Members Globally</h1>
                        <br>
                        <div class="btn-box">
                            <a href="{{route('register')}}" class="theme-btn style-one mr-10">Create An Account</a>
                        </div>

                    </div>
                </div>
            </div>



            <div class="slide-item">
                <div class="image-layer" style="background-image:url({{asset('home/images/banner/banner-2.jpg')}})"></div>
                <div class="auto-container">
                    <div class="content-box">
                        <h5 class="text-custom">Take A Bold Step</h5>
                        <h1 class="mbt-1">To Change Your World</h1>
                        <h6 class="text-white mbt-1">You have dreams. We have a culturally diverse, forward thinking team ready to help you achieve your dreams.</h6>
                        <div class="btn-box">
                            <a href="{{route('register')}}" class="theme-btn style-one mr-10">Create An Account</a>
                            <a href="about" class="banner-btn-two">Explore</a>
                        </div>
                    </div>
                </div>
            </div>

            <div class="slide-item">
                <div class="image-layer" style="background-image:url({{asset('home/images/banner/banner-12.jpg')}})"></div>
                <div class="auto-container">
                    <div class="content-box">
                        <h5 class="text-custom">{{$siteName}}</h5>
                        <h4 class="text-white" style="margin-bottom: 0px;">Celebrates</h4>
                        <h1 class="text-custom" style="margin-top: 0px; margin-bottom: 0px;">100,000</h1>
                        <h1 class="text-white" style="margin-bottom: 0px; margin-top: 0px;">Members Globally</h1>
                        <br>
                        <div class="btn-box">
                            <a href="{{route('register')}}" class="theme-btn style-one mr-10">Create An Account</a>
                        </div>

                    </div>
                </div>
            </div>

            <div class="slide-item">
                <div class="image-layer" style="background-image:url({{asset('home/images/banner/banner-3.jpg')}})"></div>
                <div class="auto-container">
                    <div class="content-box">
                        <h5 class="text-custom">We are the Leaders</h5>
                        <h1 class="mbt-1">In Crytocurrency Trade</h1>
                        <h6 class="text-white mbt-1">We help our investors make the best out of cryptocurrency innovation through our team of expert traders.</h6>
                        <div class="btn-box">
                            <a href="{{route('register')}}" class="theme-btn style-one">Create An Account</a>
                        </div>
                    </div>
                </div>
            </div>
            <div class="slide-item">
                <div class="image-layer" style="background-image:url({{asset('home/images/banner/banner-1.jpg')}})"></div>
                <div class="auto-container">
                    <div class="content-box">
                        <h5 class="text-custom">We are experts</h5>
                        <h1 class="mbt-1">In Real Estate</h1>
                        <h6 class="text-white mbt-1">Our vast experience in real estate over the years makes us one of the best if not the best real estate agents to invest with.</h6>
                        <div class="btn-box">
                            <a href="{{route('register')}}" class="theme-btn style-one">Create An Account</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>



    <section class="about-style-two about-section about-page-1 bg-color-1">
        <div class="auto-container">
            <div class="row clearfix">
                <div class="col-lg-12 col-md-12 col-sm-12 content-column">
                    <div class="alert alert-info">
                        <h3><i class="fa fa-info-circle"></i></h3>
                        The coronavirus shock is accelerating structural trends in inequality, globalization, macro policy and sustainability. This is fundamentally reshaping the investment landscape and will key to investor outcomes.
                    </div>
                </div>
                <div class="col-lg-7 col-md-5 col-sm-12 content-column">
                    <div id="content_block_three">
                        <div class="content-box">
                            <div class="sec-title right">
                                <h5>About {{$siteName}}</h5>
                                <h2>We have been known to give investors the better choice</h2>
                            </div>
                            <div class="text">
                                <p>
                                    With over 153,000 investments under our management, $5 billion+ in assets under our administration, over 11 industry awards,
                                    we have made {{$siteName}} the safe haven for investors who want to trust their financial partner to be capable of
                                    helping them reach their financial goals, and in due time, without the fear of disappointments.
                                </p>
                            </div>
                            <div class="tabs-box">

                                <div class="tabs-content">
                                    <div class="tab active-tab" id="tab-2">
                                        <div class="content-inner">
                                            <p>Our investors are confident in our ability to make a promise and fulfill that promise. We go beyond our promise
                                                to put smiles on the faces of our clients.
                                                We have investors from all over the world, who have been with us for over seven years now and counting.</p>
                                            <a href="about"><i class="fas fa-arrow-right"></i><span>Read More</span></a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-5 col-md-5 col-sm-12 video-column">
                    <div class="video-inner">
                        <figure class="image-box"><img src="{{asset('home/images/resource/about-1.jpg')}}" alt=""></figure>
                        <div class="video-btn">
                            <a href="https://www.youtube.com/watch?v=nfP5N9Yc72A&amp;t=28s" class="lightbox-image" data-caption="" style="background-image: url({{asset('home/images/resource/btn-bg.png')}});"><i class="fas fa-play"></i></a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section class="about-style-three">
        <div class="auto-container">
            <div class="row clearfix">

                <div class="col-lg-6 col-md-6 col-sm-12 image-column">
                    <div class="image-box">
                        <figure class="image"><img src="{{asset('home/images/images/cov.png')}}" alt=""></figure>
                    </div>
                </div>
                <div class="col-lg-6 col-md-6 col-sm-12 content-column">
                    <div class="content-box">
                        <div class="sec-title-two">
                            <h5>{{$siteName}}</h5>
                            <h2>Our Response to COVID-19</h2>
                        </div>
                        <div class="text">
                            <p>During this unprecedented crisis, our conviction in our purpose – to help more and more people
                                experience financial well-being – is stronger than ever. {{$siteName}} has taken action to continue
                                delivering for our clients, stay connected with our shareholders,
                                support employee well-being, and provide relief for the communities in which we operate.
                            </p>

                            <a href="covid-19" class="mt-3 btn btn-custom">Read More <i class="fas fa-arrow-right text-white"></i></a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section class="about-style-two p-t-10">
        <div class="pattern-layer" style="background-image: url({{asset('home/images/shape/shape-4.png')}});"></div>
        <div class="auto-container">
            <div class="row clearfix">
                <div class="col-lg-7 col-md-12 col-sm-12 content-column">
                    <div id="content_block_three">
                        <div class="content-box">
                            <div class="sec-title style-two">
                                <h5>{{$siteName}}</h5>
                                <h2>How you can join us</h2>
                            </div>
                            <div class="text">
                                <p>Here are few easy steps on how you can create an account with us and start investing right away!</p>
                            </div>
                            <div class="inner-box">
                                <div class="row clearfix">
                                    <div class="col-lg-6 col-md-6 col-sm-12 single-column">
                                        <div class="single-item">
                                            <div class="icon-box"><i class="fas fa-user-plus"></i></div>
                                            <h5><a href="{{route('register')}}">CREATE AN ACCOUNT</a></h5>
                                            <p>Hit the 'OPEN ACCOUNT' button at the top of the page, fill in your details on the page that follows</p>
                                        </div>
                                    </div>
                                    <div class="col-lg-6 col-md-6 col-sm-12 single-column">
                                        <div class="single-item">
                                            <div class="icon-box"><i class="fas fa-database"></i></div>
                                            <h5><a href="index">SELECT A PLAN</a></h5>
                                            <p>From your Dashboard, select the Deposit button to choose an investment plan that suits your financial goal</p>
                                        </div>
                                    </div>
                                    <div class="col-lg-6 col-md-6 col-sm-12 single-column">
                                        <div class="single-item">
                                            <div class="icon-box"><i class="fab fa-bitcoin"></i></div>
                                            <h5><a href="index">FUND YOUR ACCOUNT</a></h5>
                                            <p>Fund your investment account quickly and easily, using our Bitcoin payment system directly from your wallet</p>
                                        </div>
                                    </div>
                                    <div class="col-lg-6 col-md-6 col-sm-12 single-column">
                                        <div class="single-item">
                                            <div class="icon-box"><i class="fas fa-share-alt"></i></div>
                                            <h5><a href="index">INVITE OTHERS</a></h5>
                                            <p>While experiencing the amazing benefits of investing with us, you can also earn bonuses when you refer us to others</p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-5 col-md-12 col-sm-12 image-column">
                    <div id="image_block_two">
                        <div class="image-box">
                            <figure class="image"><img src="{{asset('home/images/resource/state-1.jpg')}}" alt=""></figure>

                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>


    <section class="project-style-four">
        <div class="auto-container">
            <div class="title-inner clearfix">
                <div class="sec-title style-four right pull-left">
                    <h5>REAL ESTATE</h5>
                    <h2>Hot Deals From Real Estate</h2>
                </div>
                <div class="btn-box pull-right"><a href="estate">View More</a></div>
            </div>
            <div class="two-column-carousel owl-carousel owl-theme owl-nav-none">

                <div class="project-block-three">
                    <div class="inner-box">
                        <figure class="image-box"><img src="{{asset('home/images/images/hs/2.jpg')}}" alt=""></figure>
                        <div class="lower-content">
                            <div class="inner">
                                <h3>$620,000</h3>
                                <p>Zak Hale 9 | Offered for $620,000 | 4 BR/ 4.5 BA | 2,460 sq. ft. Interior.</p>
                                <a href="{{url('estate_house')}}" style="background:none"><a class="btn btn-warning" style="margin-bottom: 5px;"> View Details</a></a>
                                <br>
                                <a class="btn btn-primary" href="mailto:{{$web->email}}"> Make An Offer</a>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="project-block-three">
                    <div class="inner-box">
                        <figure class="image-box"><img src="{{asset('home/images/images/hs/3.jpg')}}" alt=""></figure>
                        <div class="lower-content">
                            <div class="inner">
                                <h3>$1,450,000</h3>
                                <p>This stunning modern-styled townhome located within the private
                                    golf and ocean club community of Kohanaiki is a 4 BR/ 4.5 BA dream with a lounge pool,
                                    spa, and detached guest ohana</p>
                                <a href="{{url('estate_house')}}" style="background:none"><a class="btn btn-warning" style="margin-bottom: 5px;"> View Details</a></a>
                                <br>
                                <a class="btn btn-primary" href="mailto:{{$web->email}}"> Make An Offer</a>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="project-block-three">
                    <div class="inner-box">
                        <figure class="image-box"><img src="{{asset('home/images/images/hs/1.jpg')}}" alt=""></figure>
                        <div class="lower-content">
                            <div class="inner">
                                <h3>$350,000</h3>
                                <p>4/5.5/2 |5,472 sqft |8,060 sqft lot Location:Afton oaks</p>
                                <a href="{{url('estate_house')}}" style="background:none"><a class="btn btn-warning" style="margin-bottom: 5px;"> View Details</a></a>
                                <br>
                                <a class="btn btn-primary" href="mailto:{{$web->email}}"> Make An Offer</a>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="project-block-three">
                    <div class="inner-box">
                        <figure class="image-box"><img src="{{asset('home/images/images/hs/4.jpg')}}" alt=""></figure>
                        <div class="lower-content">
                            <div class="inner">
                                <h3>$26,430</h3>
                                <p> Bds | 1 Ba | 360 SQFT Location: 225 East 4th Street, Apt 18, New York. </p>
                                <a href="{{url('estate_house')}}" style="background:none"><a class="btn btn-warning" style="margin-bottom: 5px;"> View Details</a></a>
                                <br>
                                <a class="btn btn-primary" href="mailto:{{$web->email}}"> Make An Offer</a>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="project-block-three">
                    <div class="inner-box">
                        <figure class="image-box"><img src="{{asset('home/images/images/hs/8.jpg')}}" alt=""></figure>
                        <div class="lower-content">
                            <div class="inner">
                                <h3>$1,669,000</h3>
                                <p>5 Bedrooms 3 Full Baths 1344 Sq Ft Built in 1955 Electric Heat 2.56 Acres Lot, W Pleasant Run Rd, Dallas County, tx, USA.</p>
                                <a href="{{url('estate_house')}}" style="background:none"><a class="btn btn-warning" style="margin-bottom: 5px;"> View Details</a></a>
                                <br>
                                <a class="btn btn-primary" href="mailto:{{$web->email}}"> Make An Offer</a>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="project-block-three">
                    <div class="inner-box">
                        <figure class="image-box"><img src="{{asset('home/images/images/hs/10.jpg')}}" alt=""></figure>
                        <div class="lower-content">
                            <div class="inner">
                                <h3>$850,000</h3>
                                <p> 4 Bedrooms 3 Full Baths 1 Half Baths 2984 Sq Ft Built in 1991 2 Car Garage 12197 Sq Ft Lot, Antonio Arias, Calle de, Madrid, Madrid, 28009, Spain.</p>
                                <a href="{{url('estate_house')}}" style="background:none"><a class="btn btn-warning" style="margin-bottom: 5px;"> View Details</a></a>
                                <br>
                                <a class="btn btn-primary" href="mailto:{{$web->email}}"> Make An Offer</a>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="project-block-three">
                    <div class="inner-box">
                        <figure class="image-box"><img src="{{asset('home/images/images/hs/5.jpg')}}" alt=""></figure>
                        <div class="lower-content">
                            <div class="inner">
                                <h3>$580,000</h3>
                                <p>4 Bedrooms 2 Full Baths 2129 Sq Ft Built in 1996 FirePlace Gas Heat 2.87 Acre Lot, Truman St, Texas City, tx, USA.</p>
                                <a href="{{url('estate_house')}}" style="background:none"><a class="btn btn-warning" style="margin-bottom: 5px;"> View Details</a></a>
                                <br>
                                <a class="btn btn-primary" href="mailto:{{$web->email}}"> Make An Offer</a>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="project-block-three">
                    <div class="inner-box">
                        <figure class="image-box"><img src="{{asset('home/images/images/hs/6.jpg')}}" alt=""></figure>
                        <div class="lower-content">
                            <div class="inner">
                                <h3>$76,930</h3>
                                <p> 3 Bedrooms 1 Full Baths 1344 Sq Ft Built in 1955 Electric Heat 2.56 Acres Lot, 10th Ave N, Texas City, tx, USA. </p>
                                <a href="{{url('estate_house')}}" style="background:none"><a class="btn btn-warning" style="margin-bottom: 5px;"> View Details</a></a>
                                <br>
                                <a class="btn btn-primary" href="mailto:{{$web->email}}"> Make An Offer</a></div>
                        </div>
                    </div>
                </div>

                <div class="project-block-three">
                    <div class="inner-box">
                        <figure class="image-box"><img src="{{asset('home/images/images/hs/7.jpg')}}" alt=""></figure>
                        <div class="lower-content">
                            <div class="inner">
                                <h3>$2,600,000</h3>
                                <p>6 Bedrooms 7 Full Baths Basement: Unknown 2094 Sq Ft Built in 2018 3 Car Garage FirePlace Electric Heat 8363.0 SqFt Lot, Wayside Dr, Texas City, tx, USA.</p>
                                <a href="{{url('estate_house')}}" style="background:none"><a class="btn btn-warning" style="margin-bottom: 5px;"> View Details</a></a>
                                <br>
                                <a class="btn btn-primary" href="mailto:{{$web->email}}"> Make An Offer</a>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="project-block-three">
                    <div class="inner-box">
                        <figure class="image-box"><img src="{{asset('home/images/images/hs/9.jpg')}}" alt=""></figure>
                        <div class="lower-content">
                            <div class="inner">
                                <h3>$450,000</h3>
                                <p>3 Bedrooms 2 Full Baths 1730 Sq Ft Built in 1972 2 Car Garage FirePlace Gas Heat 8880 Sq Ft Lot, Shark Cir, Texas City, tx, USA.</p>
                                <a href="{{url('estate_house')}}" style="background:none"><a class="btn btn-warning" style="margin-bottom: 5px;"> View Details</a></a>
                                <br>
                                <a class="btn btn-primary" href="mailto:{{$web->email}}"> Make An Offer</a>
                            </div>
                        </div>
                    </div>
                </div>

            </div>
        </div>
    </section>


    <section class="info-section">
        <div class="auto-container">
            <div class="row clearfix">
                <div class="col-lg-7 col-md-12 col-sm-12 title-column">
                    <div class="title-inner">
                        <div class="year-box">
                            <figure class="image-box"><img src="{{asset('home/images/icons/year-icon.png')}}" alt=""></figure>
                            <h2 style="font-size: 85px;">1179</h2>
                            <h3>DAYS</h3>
                        </div>
                        <div class="title">
                            <h2>Access <span>—</span> analytical market & price data</h2>
                        </div>
                    </div>
                </div>
                <div class="col-lg-5 col-md-12 col-sm-12 text-column">
                    <div class="text">
                        <p>

                            Our trading systems are setup with the best hands to take trade calls in investments, and we combine this with analytics from our trading robots.
                            With over 140 trading setups and over 300 trading experts working together with our AI-powered software,
                            analyses come in handy, and are doubly checked for accuracy and market timeliness before trades are made.
                        </p>
                        <a href="{{route('register')}}" class="btn btn-custom"><i class="fas fa-arrow-right text-white"></i>Get Started</a>
                    </div>
                </div>
            </div>
        </div>
    </section>


    <section class="project-style-two">
        <div class="auto-container">
            <div class="sec-title style-three centred">
                <h5>SUCCEED WITH US</h5>
                <h2>Why Choose {{$siteName}}</h2>
                <p>Here’s why thousands of investors trust and invest with {{$siteName}}, and why you should, too</p>
            </div>
            <div class="project-carousel-2 owl-carousel owl-theme owl-nav-none">
                <div class="project-inner">
                    <div class="inner-box">
                        <figure class="image-box"><img src="{{asset('home/images/images/simple.jpg')}}" alt=""></figure>
                        <div class="content-box">
                            <h3>Investing With Us Is Simple</h3>
                            <p>
                                Our investment solutions are so simple. Our platform is also simple and easy to use.
                            </p>
                            <a href="{{route('register')}}" class="btn btn-custom">Start Investing</a>
                        </div>
                    </div>
                </div>
                <div class="project-inner">
                    <div class="inner-box">
                        <figure class="image-box"><img src="{{asset('home/images/images/innovation.png')}}" alt=""></figure>
                        <div class="content-box">
                            <h3>We are Innovative</h3>
                            <p>{{$siteName}} has been at the forefront of the digital fintech revolution since her inception.</p>
                            <a href="{{route('register')}}" class="btn btn-custom">Start Investing</a>
                        </div>
                    </div>
                </div>
                <div class="project-inner">
                    <div class="inner-box">
                        <figure class="image-box"><img src="{{asset('home/images/images/safe-02.jpg')}}" alt=""></figure>
                        <div class="content-box">
                            <h3>We Take Responsibility</h3>
                            <p>
                                All trading involves risks, and {{$siteName}} helps its clients to make smart investment decisions.
                            </p>
                            <a href="{{route('register')}}" class="btn btn-custom">Start Investing</a>
                        </div>
                    </div>
                </div>

                <div class="project-inner">
                    <div class="inner-box">
                        <figure class="image-box"><img src="{{asset('home/images/images/secure-1.jpg')}}" alt=""></figure>
                        <div class="content-box">
                            <h3>We Are Secure</h3>
                            <p>{{$siteName}} takes necessary precaution to keep its clients’ personal information and funds safe and secure.</p>
                            <a href="{{route('register')}}" class="btn btn-custom">Start Investing</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <section class="pricing-section" style="background-image: url({{asset('home/images/background/pricing-bg.jpg')}});">
        <div class="auto-container">
            <div class="tabs-box">
                <div class="upper-box">
                    <div class="title-inner clearfix">
                        <div class="sec-title style-three left pull-left">
                            <h5>{{$siteName}}</h5>
                            <h2>Plans</h2>
                        </div>
                        <div class="text pull-left">
                            <p>
                                Choose between individual assets and portfolios to invest and start profiting.

                                See more plans in our <a href="{{route('login')}}">Investment Plans</a>
                            </p>
                        </div>
                    </div>
                    <div class="tab-btn-box">
                        <ul class="tab-btns tab-buttons clearfix">
                            <li class="tab-btn active-btn" data-tab="#tab-6">CRYPTOCURRENCY</li>
                        </ul>
                    </div>
                </div>
                <div class="tabs-content">
                    <div class="tab active-tab" id="tab-6">
                        <div class="row clearfix">


                            @foreach($packages as $package)

                                <div class="col-lg-4 col-md-6 col-sm-12 pricing-block mx-auto mt-5">
                                    <div class="pricing-block-one active-block">
                                        <div class="pricing-table">
                                            <div class="table-header" style="padding: 12px 0px 5px 0px; border: none;">
                                                <h3>{{$package->name}}</h3>
                                                <div class="price-box" style="margin-bottom: 0px;">
                                                    <span>From CRYPTOCURRENCY</span>
                                                    <h2>{{$package->roi*$package->numberOfReturns}}%</h2>
                                                    <p>AFTER {{$package->Duration}}</p>
                                                </div>
                                            </div>
                                            <div class="table-content">
                                                <ul class="clearfix">
                                                    <li>Minimum Deposit <b class="text-primary">${{number_format($package->minAmount,2)}}</b></li>
                                                    <li>Maximum Deposit <b class="text-primary">
                                                            @if($package->isUnlimited==1)
                                                                Unlimited
                                                            @else
                                                                ${{number_format($package->maxAmount,2)}}
                                                            @endif
                                                        </b></li>
                                                    <li> {{$options->getReturnType($package->returnType)}} Profit
                                                        <b class="text-primary">{{$package->roi}} %</b></li>
                                                    <li>Referral Bonus <b class="text-primary">{{$package->referral}} %</b></li>
                                                    <li>Duration <b class="text-primary">{{$package->Duration}}</b></li>
                                                </ul>
                                            </div>
                                            <div class="table-footer">
                                                <a href="{{route('register')}}" class="theme-btn style-one border-0">get started</a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            @endforeach


                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- project-section end -->

    <!--section class="project-section">
   <div class="fluid-container">
       <div class="project-carousel theme-carousel owl-theme owl-carousel owl-dots-none owl-nav-none">
           <div class="project-block-one">
               <div class="inner-box">
                   <figure class="image-box"><img src="{{asset('home/images/gallery/project-1.jpg')}}" alt=""></figure>
                   <div class="lower-content">
                       <p>Corporate Management</p>
                       <h2><a href="./">Global Management Apps</a></h2>
                   </div>
               </div>
           </div>
           <div class="project-block-one">
               <div class="inner-box">
                   <figure class="image-box"><img src="{{asset('home/images/gallery/project-2.jpg')}}" alt=""></figure>
                   <div class="lower-content">
                       <p>Financial Initiatives</p>
                       <h2><a href="./">Planning & Task Completion</a></h2>
                   </div>
               </div>
           </div>
           <div class="project-block-one">
               <div class="inner-box">
                   <figure class="image-box"><img src="{{asset('home/images/gallery/project-3.jpg')}}" alt=""></figure>
                   <div class="lower-content">
                       <p>Corporate Management</p>
                       <h2><a href="./">Private Workshop Assistant</a></h2>
                   </div>
               </div>
           </div>
       </div>
   </div>
</section-->

    <!-- Section Team -->


    <!-- Section Features -->

    <section class="service-style-two bg-color-2" id="service">
        <div class="pattern-layer" style="background-image: url({{asset('home/images/shape/shape-5.png')}});"></div>
        <div class="auto-container">
            <div class="sec-title light centred">
                <h5>our PRODUCTS</h5>
                <h2>Access more investment options than ever before, not seen anywhere else</h2>
                <p>We are the new world of investing where you come first and the options are more.
                    Choose among a variety of investment products, and whether to pick a product only or a portfolio.
                    Trade a single asset or invest in a portfolio of assets.</p>
            </div>
            <div class="row clearfix">
                <div class="col-lg-6 col-md-6 col-sm-12 service-block">
                    <div class="service-block-two wow fadeInUp animated" data-wow-delay="00ms" data-wow-duration="1500ms" style="visibility: visible; animation-duration: 1500ms; animation-delay: 0ms; animation-name: fadeInUp;">
                        <div class="inner-box">
                            <div class="icon-box"><i class="flaticon-company"></i></div>
                            <h4><a href="{{route('register')}}">Trade An Asset</a></h4>
                            <p>We offer various assets ranging from Cryptocurrencies, Real Estate, Cannabis and Forex</p>
                            <div class="link">
                                <a class="btn btn-custom p-2" href="{{route('register')}}">
                                    Get Started
                                </a>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-6 col-md-6 col-sm-12 service-block">
                    <div class="service-block-two wow fadeInUp animated" data-wow-delay="300ms" data-wow-duration="1500ms" style="visibility: visible; animation-duration: 1500ms; animation-delay: 300ms; animation-name: fadeInUp;">
                        <div class="inner-box">
                            <div class="icon-box"><i class="flaticon-line-chart"></i></div>
                            <h4><a href="{{route('register')}}">Build A Portfolio</a></h4>
                            <p>We also offer portfolios which allow you to invest in more than one asset class at a time.
                                Portfolios are a great options if you want more.</p>
                            <div class="link">
                                <a class="btn btn-custom p-2" href="{{route('register')}}">
                                    Get Started
                                </a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section class="chart-section bg-color-3">
        <div class="auto-container">
            <div class="row clearfix">
                <div class="col-lg-6 col-md-12 col-sm-12 content-column">
                    <div id="content_block_eight">
                        <div class="content-box">
                            <div class="sec-title style-three left light">
                                <h5>Invest With Us</h5>
                                <h2>We combine strategy and insight with technology.</h2>
                            </div>
                            <div class="text">
                                <p>
                                    Our trading system combines proven strategy with modern technology to deliver best results for investors.
                                </p>
                            </div>
                            <div class="btn-box">
                                <a href="{{route('register')}}">Get Started</a>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-6 col-md-12 col-sm-12 chart-column" style='text-align: center; height: 400px;'>
                    <!-- TradingView Widget BEGIN -->
                    <div class="tradingview-widget-container">
                        <div class="tradingview-widget-container__widget"></div>
                        <div class="tradingview-widget-copyright"><a href="https://www.tradingview.com/" rel="noopener nofollow" target="_blank"><span class="blue-text">Track all markets on TradingView</span></a></div>
                        <script type="text/javascript" src="https://s3.tradingview.com/external-embedding/embed-widget-screener.js" async>
                            {
                                "width": "100%",
                                "height": 523,
                                "defaultColumn": "overview",
                                "defaultScreen": "general",
                                "market": "forex",
                                "showToolbar": true,
                                "colorTheme": "light",
                                "locale": "en"
                            }
                        </script>
                    </div>
                    <!-- TradingView Widget END -->
                </div>
            </div>
        </div>
    </section>

    <section class="testimonial-style-two">
        <div class="auto-container">
            <div class="sec-title centred">
                <h5>testimonials</h5>
                <h2>What Client’s Saying</h2>
            </div>
            <div class="three-item-carousel owl-carousel owl-theme owl-nav-none owl-dot-style-one">
                <div class="testimonial-content">
                    <div class="inner-box">
                        <div class="text">
                            <i class="fas fa-quote-right"></i>
                            <p>{{$siteName}} is one of the best platform ever, if you are looking for the best company to invest, {{$siteName}} is the best platform to invest</p>
                        </div>
                        <div class="author-info">
                            <figure class="image-box"><img src="{{asset('home/images/images/ZFGD1QX6ixJBu2M1614685412136.jpg')}}" alt=""></figure>
                            <h5>Osman</h5>
                            <span class="designation">Investor</span>
                        </div>
                    </div>
                </div>
                <div class="testimonial-content">
                    <div class="inner-box">
                        <div class="text">
                            <i class="fas fa-quote-right"></i>
                            <p>I keep recommending to my friends and family because of their overwhelmingly impressive financial services</p>
                        </div>
                        <div class="author-info">
                            <figure class="image-box"><img src="{{asset('home/images/images/ReYcirPHu3vhNI01614685871546.jpg')}}" alt=""></figure>
                            <h5>Nora Woodward</h5>
                            <span class="designation">Investor</span>
                        </div>
                    </div>
                </div>
                <div class="testimonial-content">
                    <div class="inner-box">
                        <div class="text">
                            <i class="fas fa-quote-right"></i>
                            <p>So happy about the truthfulness of the company, my withdrawal was approved and my btc sent to my wallet under just few minutes after I requested for a withdrawal, I think you all should invest with {{$siteName}}</p>
                        </div>
                        <div class="author-info">
                            <figure class="image-box"><img src="{{asset('home/images/images/1gB4kVWZLbHyQxF1614696122840.jpg')}}" alt=""></figure>
                            <h5>Temara</h5>
                            <span class="designation">Investor</span>
                        </div>
                    </div>
                </div>
                <div class="testimonial-content">
                    <div class="inner-box">
                        <div class="text">
                            <i class="fas fa-quote-right"></i>
                            <p>Thank you so much {{$siteName}}, I don't know how to express my gratitude to you, now I can pay my debt thank you joy Patrick for introducing me to this platform....</p>
                        </div>
                        <div class="author-info">
                            <figure class="image-box"><img src="{{asset('home/images/images/oUc2zKlgi9PuVb71614686152703.jpg')}}" alt=""></figure>
                            <h5>James Anderson</h5>
                            <span class="designation">Investor</span>
                        </div>
                    </div>
                </div>
                <div class="testimonial-content">
                    <div class="inner-box">
                        <div class="text">
                            <i class="fas fa-quote-right"></i>
                            <p>We have been with GBA now for three years. His team have made an effort to get to know us and so the service we receive feels very personal. They helped us to focus on what we want out of life and is helping us realise our plans. The peace of mind we have from knowing our finances are being so well managed is priceless.</p>
                        </div>
                        <div class="author-info">
                            <figure class="image-box"><img src="{{asset('home/images/images/Cr1Jwyhdoc1D8kz1614766389810.jpg')}}" alt=""></figure>
                            <h5>Mark</h5>
                            <span class="designation">Investor</span>
                        </div>
                    </div>
                </div>
                <div class="testimonial-content">
                    <div class="inner-box">
                        <div class="text">
                            <i class="fas fa-quote-right"></i>
                            <p>I won't stop recommending this company to every investor out there,paying securely...</p>
                        </div>
                        <div class="author-info">
                            <figure class="image-box"><img src="{{asset('home/images/images/M1EFGuaHDtwpd2N1614696167493.jpg')}}" alt=""></figure>
                            <h5>Bruce</h5>
                            <span class="designation">Investor</span>
                        </div>
                    </div>
                </div>
                <div class="testimonial-content">
                    <div class="inner-box">
                        <div class="text">
                            <i class="fas fa-quote-right"></i>
                            <p>Like many people, I spend the majority of my time planning for my business, but pay little or no attention to my own finances.{{$siteName}} (GBA) has developed a personal plan for me that allows me to take much greater control of my financial affairs, and plan for the future. Everything now makes much more sense, and I only wish I had got in touch with GBA sooner!</p>
                        </div>
                        <div class="author-info">
                            <figure class="image-box"><img src="{{asset('home/images/images/eIyQYP3jH78wuFU1614695859816.jpg')}}" alt=""></figure>
                            <h5>Rodney wickman</h5>
                            <span class="designation">Investor</span>
                        </div>
                    </div>
                </div>
                <div class="testimonial-content">
                    <div class="inner-box">
                        <div class="text">
                            <i class="fas fa-quote-right"></i>
                            <p>At first, I doubted it but to my surprise {{$siteName}} started paying me at the due date</p>
                        </div>
                        <div class="author-info">
                            <figure class="image-box"><img src="{{asset('home/images/images/lWy7b3na5i6X1Nv1614696001686.jpg')}}" alt=""></figure>
                            <h5>Cynthia carl</h5>
                            <span class="designation">Investor</span>
                        </div>
                    </div>
                </div>
                <div class="testimonial-content">
                    <div class="inner-box">
                        <div class="text">
                            <i class="fas fa-quote-right"></i>
                            <p>Finding a good and efficient company as {{$siteName}} is the best investment platform ever</p>
                        </div>
                        <div class="author-info">
                            <figure class="image-box"><img src="{{asset('home/images/images/nA0hBpvim4TQEoD1614786892854.jpg')}}" alt=""></figure>
                            <h5>Dr Taylor</h5>
                            <span class="designation">Investor</span>
                        </div>
                    </div>
                </div>
                <div class="testimonial-content">
                    <div class="inner-box">
                        <div class="text">
                            <i class="fas fa-quote-right"></i>
                            <p>{{$siteName}} is our third financial adviser, and a huge improvement on the others in terms of advice and commitment. They are pro-active where the others were not, and has made us focus on our plans for retirement - a huge achievement!</p>
                        </div>
                        <div class="author-info">
                            <figure class="image-box"><img src="{{asset('home/images/images/19sCyhlwSXpAacu1614765949638.jpg')}}" alt=""></figure>
                            <h5>Nicolas</h5>
                            <span class="designation">Investor</span>
                        </div>
                    </div>
                </div>
                <div class="testimonial-content">
                    <div class="inner-box">
                        <div class="text">
                            <i class="fas fa-quote-right"></i>
                            <p>I feel like I got a new home.
                                Thanks to {{$siteName}} and also to the administration.</p>
                        </div>
                        <div class="author-info">
                            <figure class="image-box"><img src="{{asset('home/images/images/BeJZ4LzIiQnXPhp1633981448208.jpg')}}" alt=""></figure>
                            <h5>Jennifer</h5>
                            <span class="designation">Investor</span>
                        </div>
                    </div>
                </div>
                <div class="testimonial-content">
                    <div class="inner-box">
                        <div class="text">
                            <i class="fas fa-quote-right"></i>
                            <p>I recommend every investors to join {{$siteName}}, it has been working and I have being  making profits weekly....</p>
                        </div>
                        <div class="author-info">
                            <figure class="image-box"><img src="{{asset('home/images/images/0sTpnUAHGZN8yQB1614765974733.jpg')}}" alt=""></figure>
                            <h5>Beverly</h5>
                            <span class="designation">Investor</span>
                        </div>
                    </div>
                </div>
                <div class="testimonial-content">
                    <div class="inner-box">
                        <div class="text">
                            <i class="fas fa-quote-right"></i>
                            <p>Really...
                                I'm excited already 😄😄😄a very big thanks to {{$siteName}}</p>
                        </div>
                        <div class="author-info">
                            <figure class="image-box"><img src="{{asset('home/images/images/xVl3J7SnoCTUMti1614696078778.jpg')}}" alt=""></figure>
                            <h5>Monica</h5>
                            <span class="designation">Investor</span>
                        </div>
                    </div>
                </div>
                <div class="testimonial-content">
                    <div class="inner-box">
                        <div class="text">
                            <i class="fas fa-quote-right"></i>
                            <p>GBA provides an excellent service be it on a business or on a personal level I have found the company's advice regarding investment opportunities particularly helpful - everything is explained fully no matter how complex the subject. I am pleased to see the results in comparison to the experiences one reads or hears about  I get the feeling that {{$siteName}} are ahead of the game.</p>
                        </div>
                        <div class="author-info">
                            <figure class="image-box"><img src="{{asset('home/images/images/GaNLeqO85WMcJ4m1614691346138.jpg')}}" alt=""></figure>
                            <h5>Michael former property loch of Scotland</h5>
                            <span class="designation">Investor</span>
                        </div>
                    </div>
                </div>
                <div class="testimonial-content">
                    <div class="inner-box">
                        <div class="text">
                            <i class="fas fa-quote-right"></i>
                            <p>This is remarkably one of the best Investment company I have meet this year</p>
                        </div>
                        <div class="author-info">
                            <figure class="image-box"><img src="{{asset('home/images/images/VX9pAgkDrt1q8hu1614695934840.jpg')}}" alt=""></figure>
                            <h5>Alexandra lukas</h5>
                            <span class="designation">Investor</span>
                        </div>
                    </div>
                </div>
                <div class="testimonial-content">
                    <div class="inner-box">
                        <div class="text">
                            <i class="fas fa-quote-right"></i>
                            <p>A big thank you to {{$siteName}}, I have been receiving my payout every week, thanks once more</p>
                        </div>
                        <div class="author-info">
                            <figure class="image-box"><img src="{{asset('home/images/images/T1PV3oYzB20MvNg1614685705649.jpg')}}" alt=""></figure>
                            <h5>Mark bill</h5>
                            <span class="designation">Investor</span>
                        </div>
                    </div>
                </div>
                <div class="testimonial-content">
                    <div class="inner-box">
                        <div class="text">
                            <i class="fas fa-quote-right"></i>
                            <p>Just to say many thanks for a very positive client satisfaction,me and my wife came away feeling well satisfied that we are able to continue enjoying life without too much stress on the old finances and should be able to carry on with our present lifestyles for some time to come. Very satisfied with the way {{$siteName}} are managing affairs and hope this will continue into the future,</p>
                        </div>
                        <div class="author-info">
                            <figure class="image-box"><img src="{{asset('home/images/images/6Xer174i2GS8owP1614690302946.jpg')}}" alt=""></figure>
                            <h5>Mr and Mrs kelmo</h5>
                            <span class="designation">Investor</span>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>


    <section class="info-section">
        <div class="auto-container">
            <div class="sec-title centred">
                <h5>{{$siteName}}</h5>
                <h2>Our Happy Clients</h2>
            </div>
            <div class="row clearfix">
                <div class="col-lg-4 col-md-6 col-sm-4 col-4 title-column">

                    <video id="vid" controls style="width: inherit;">
                        <source src="{{asset('home/cert/1.mp4')}}" type="video/mp4">
                    </video>
                    <script>
                        document.getElementById('vid').play();
                    </script>




                </div>
                <div class="col-lg-4 col-md-6 col-sm-4  col-4 title-column">

                    <video  controls style="width: inherit;" >
                        <source src="{{asset('home/cert/2.mp4')}}" type="video/mp4">
                    </video>

                </div>
                <div class="col-lg-4 col-md-6 col-sm-4 col-4 title-column">

                    <video  controls style="width: inherit;" >
                        <source src="{{asset('home/cert/3.mp4')}}" type="video/mp4">
                    </video>

                </div>
                <div class="col-lg-4 col-md-6 col-sm-4 col-4 title-column">

                    <video  controls  style="width: inherit;" >
                        <source src="{{asset('home/cert/4.mp4')}}" type="video/mp4">
                    </video>
                </div>

                <div class="col-lg-4 col-md-6 col-sm-4 col-4 title-column">

                    <video  controls style="width: inherit;"  >
                        <source src="{{asset('home/cert/5.mp4')}}" type="video/mp4">
                    </video>

                </div>
                <div class="col-lg-4 col-md-6 col-sm-4 col-4 title-column">

                    <video  controls style="width: inherit;"  >
                        <source src="{{asset('home/cert/6.mp4')}}" type="video/mp4">
                    </video>

                </div>
            </div>
        </div>
    </section><!-- Section Blog -->

    <!-- Section FAQ -->
    <section class="skills-section">
        <div class="auto-container">
            <div class="row align-items-center clearfix">
                <div class="col-lg-6 col-md-12 col-sm-12 image-column">
                    <div class="image-box">
                        <div class="anim-icon">
                            <div class="icon icon-1" style="background-image: url({{asset('home/images/icons/anim-icon-2.png')}});"></div>
                        </div>
                        <figure class="image wow slideInLeft animated" data-wow-delay="00ms" data-wow-duration="1500ms" style="visibility: visible; animation-duration: 1500ms; animation-delay: 0ms; animation-name: slideInLeft;">
                            <img src="{{asset('home/images/images/faq.jpg')}}" alt="">
                        </figure>
                    </div>
                </div>
                <div class="col-lg-6 col-md-12 col-sm-12 content-column">
                    <div id="content_block_13">
                        <div class="content-box">
                            <div class="anim-icon">
                                <div class="icon icon-1 rotate-me" style="background-image: url({{asset('home/images/icons/anim-icon-1.png')}});"></div>
                                <div class="icon icon-2 float-bob-y" style="background-image: url({{asset('home/images/icons/anim-icon-3.png')}});"></div>
                            </div>
                            <div class="sec-title-two">
                                <h5>{{$siteName}}</h5>
                                <h2>Frequently Asked Questions</h2>
                            </div>
                            <div class="">
                                <details open>
                                    <summary>How do I create my account?</summary>
                                    <div class="faq__content">
                                        <p>Registration process is very easy and will take a few moments to complete Simply click CREATE ACCOUNT button  and fill in all the required fields and also upload KYC  for verification</p>
                                    </div>
                                </details>
                                <details >
                                    <summary>How long does my deposit take before it can reflect on my Bluegate Investments account dashboard?</summary>
                                    <div class="faq__content">
                                        <p>Your deposit will be reflected immediately once it is confirmed on the blockchain network</p>
                                    </div>
                                </details>
                                <details >
                                    <summary>how many times can i make a deposit?</summary>
                                    <div class="faq__content">
                                        <p>Yes you can make as many deposit as you want on any of our investment plans except the starter plan where you can only invest 3 times after which you make a choice to continue investing with us or not</p>
                                    </div>
                                </details>
                                <details >
                                    <summary>How do I make a deposit?</summary>
                                    <div class="faq__content">
                                        <p>To deposit funds in your trading account is quick and simple For your convenience you may choose one of the several available deposit methods To make a successful deposit please follow the steps below Login to your account Click on the DEPOSITS button in the DASHBOARD section Choose the deposit option And follow the steps to complete your transaction</p>
                                    </div>
                                </details>
                                <details >
                                    <summary>How many years has it been functional?</summary>
                                    <div class="faq__content">
                                        <p>In September 2014  {{$siteName}} was opened to public It has been operating since then and had it first IPO in 2018 where they earned USD76million on GDP They started trading for investors on Real estate Cannabis cryptocurrency oil and gas in 2017 Key traders were working since Administration was hired in the early months of the year 2017 to prepare to start accepting investments from individuals</p>
                                    </div>
                                </details>
                                <details >
                                    <summary>How long does it take to process my withdrawal?</summary>
                                    <div class="faq__content">
                                        <p>Once we receive your withdrawal request we process immediately and send to your bitcoin wallet</p>
                                    </div>
                                </details>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section><section class="contact-information centred">
        <div class="auto-container">
            <div class="sec-title right">
                <h5>Contact Us</h5>
                <h2>We’re Ever Ready <br>To Help You</h2>
            </div>
            <div class="row clearfix">
                <div class="col-lg-6 col-md-6 col-sm-12 single-column">
                    <div class="single-item wow fadeInUp animated" data-wow-delay="00ms" data-wow-duration="1500ms" style="visibility: visible; animation-duration: 1500ms; animation-delay: 0ms; animation-name: fadeInUp;">
                        <div class="inner-box">
                            <div class="icon-box"><i class="far fa-map"></i></div>
                            <h3>Visit Us</h3>
                            <p>{{$web->address}}</p>
                        </div>
                    </div>
                </div>
                <div class="col-lg-6 col-md-6 col-sm-12 single-column">
                    <div class="single-item wow fadeInUp animated" data-wow-delay="400ms" data-wow-duration="1500ms" style="visibility: visible; animation-duration: 1500ms; animation-delay: 400ms; animation-name: fadeInUp;">
                        <div class="inner-box">
                            <div class="icon-box"><i class="far fa-envelope-open"></i></div>
                            <h3>Email Us</h3>
                            <p><a href="mailto:{{$web->email}}">
                                    {{$web->email}}
                                </a></p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section class="contact-style-two" style="background-image: url({{asset('home/images/background/contact-3.jpg')}});">
        <div class="auto-container">
            <div class="col-xl-8 col-lg-12 col-md-12 inner-column">
                <div class="sec-title left light">
                    <h5>need assistance?</h5>
                    <h2>Drop Us a Line</h2>
                    <p>Our customer care agents are ever ready to guide you. Drop us a message</p>
                </div>
                <form method="get" action="#" class="default-form" novalidate="novalidate">
                    <div class="row clearfix">
                        <div class="col-lg-6 col-md-6 col-sm-12 form-group">
                            <input type="text" name="username" placeholder="Your Name" required="" aria-required="true">
                        </div>
                        <div class="col-lg-6 col-md-6 col-sm-12 form-group">
                            <input type="email" name="email" placeholder="Email address" required="" aria-required="true">
                        </div>
                        <div class="col-lg-6 col-md-6 col-sm-12 form-group">
                            <input type="text" name="phone" placeholder="Phone" required="" aria-required="true">
                        </div>
                        <div class="col-lg-6 col-md-6 col-sm-12 form-group">
                            <input type="text" name="subject" placeholder="Subject" required="" aria-required="true">
                        </div>
                        <div class="col-lg-12 col-md-12 col-sm-12 form-group">
                            <textarea name="msg" placeholder="Message"></textarea>
                        </div>
                        <div class="col-lg-12 col-md-12 col-sm-12 form-group message-btn">
                            <button class="theme-btn style-one" type="submit" name="send">Send Message</button>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </section>
    <!--section class="clients-section">
        <div class="auto-container">
            <div class="clients-carousel owl-carousel owl-theme owl-dots-none owl-nav-none">
                <figure class="client-logo"><a href="./"><img src="{{asset('home/images/clients/clients-1.png')}}" alt=""></a></figure>
                <figure class="client-logo"><a href="./"><img src="{{asset('home/images/clients/clients-2.png')}}" alt=""></a></figure>
                <figure class="client-logo"><a href="./"><img src="{{asset('home/images/clients/clients-3.png')}}" alt=""></a></figure>
                <figure class="client-logo"><a href="./"><img src="{{asset('home/images/clients/clients-4.png')}}" alt=""></a></figure>
                <figure class="client-logo"><a href="./"><img src="{{asset('home/images/clients/clients-5.png')}}" alt=""></a></figure>
            </div>
        </div>
    </section-->

@endsection
