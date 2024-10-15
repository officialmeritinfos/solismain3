@extends('home.base')

@section('content')
    <section class="page-title centred" style="background-image: url(assets/images/background/page-title);">
        <div class="auto-container">
            <div class="content-box clearfix">
                <ul class="bread-crumb clearfix">
                    <li><a href="index">{{$siteName}}</a></li>
                </ul>
                <h1>Where to Buy Bitcoin</h1>
            </div>
        </div>
    </section>

    <section class="team-section about-page-1">
        <div class="auto-container">
            <div class="title-box">
                <div class="row clearfix">
                    <div class="col-lg-12 col-md-12 col-sm-12 title-column">
                        <div class="sec-title right">
                            <h5>Our Trusted Partners</h5>
                            <h2>Buy Digital Currency</h2>
                        </div>
                    </div>
                </div>
            </div>
            <div class="row clearfix">
                <div class="col-lg-3 col-md-6 col-sm-6 col-6 news-block">
                    <div class="news-block-one wow fadeInUp animated animated animated" data-wow-delay="00ms" data-wow-duration="1500ms" style="visibility: visible; animation-duration: 1500ms; animation-delay: 0ms; animation-name: fadeInUp;">
                        <div class="inner-box">
                            <a href="https://binance.com/" target="_blank">
                                <figure class="image-box"><img src="{{asset('home/images/images/exchenger-5.png')}}" alt=""></figure>
                            </a>

                        </div>
                    </div>
                </div>

                <div class="col-lg-3 col-md-6 col-sm-6 col-6 news-block">
                    <div class="news-block-one wow fadeInUp animated animated animated" data-wow-delay="00ms" data-wow-duration="1500ms" style="visibility: visible; animation-duration: 1500ms; animation-delay: 0ms; animation-name: fadeInUp;">
                        <div class="inner-box">
                            <a href="https://coinbase.com/" target="_blank">
                                <figure class="image-box"><img src="{{asset('home/images/images/exchenger-6.png')}}" alt=""></figure>
                            </a>

                        </div>
                    </div>
                </div>

                <div class="col-lg-3 col-md-6 col-sm-6 col-6 news-block">
                    <div class="news-block-one wow fadeInUp animated animated animated" data-wow-delay="00ms" data-wow-duration="1500ms" style="visibility: visible; animation-duration: 1500ms; animation-delay: 0ms; animation-name: fadeInUp;">
                        <div class="inner-box">
                            <a href="https://paxful.com/roots/buy-bitcoin" target="_blank">
                                <figure class="image-box"><img src="{{asset('home/images/images/exchenger-1.png')}}" alt=""></figure>
                            </a>

                        </div>
                    </div>
                </div>

                <div class="col-lg-3 col-md-6 col-sm-6 col-6 news-block">
                    <div class="news-block-one wow fadeInUp animated animated animated" data-wow-delay="00ms" data-wow-duration="1500ms" style="visibility: visible; animation-duration: 1500ms; animation-delay: 0ms; animation-name: fadeInUp;">
                        <div class="inner-box">
                            <a href="https://www.coinmama.com/" target="_blank">
                                <figure class="image-box"><img src="{{asset('home/images/images/exchenger-2.png')}}" alt=""></figure>
                            </a>

                        </div>
                    </div>
                </div>

            </div>
        </div>
    </section>

@endsection
