@extends('home.base')

@section('content')

    <!-- START SECTION BANNER -->
    <section class="page-title centred" style="background-image: url(assets/images/background/page-title.html);">
        <div class="auto-container">
            <div class="content-box clearfix">
                <ul class="bread-crumb clearfix">
                    <li><a href="index">{{$siteName}}</a></li>
                </ul>
                <h1>Real Estate</h1>
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
            </div>
            <div class="two-column-carousel owl-carousel owl-theme owl-nav-none">

                <div class="project-block-three">
                    <div class="inner-box">
                        <figure class="image-box"><img src="{{asset('home/images/images/hs/2.jpg')}}" alt=""></figure>
                        <div class="lower-content">
                            <div class="inner">
                                <h3>$620,000</h3>
                                <p>Zak Hale 9 | Offered for $620,000 | 4 BR/ 4.5 BA | 2,460 sq. ft. Interior.</p>

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

                                <a class="btn btn-primary" href="mailto:{{$web->email}}"> Make An Offer</a>
                            </div>
                        </div>
                    </div>
                </div>


            </div>
        </div>
    </section>

@endsection
