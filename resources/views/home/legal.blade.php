@extends('home.base')
@section('content')

    <!-- START SECTION BANNER -->
    <section class="page-title centred" style="background-image: url(assets/images/background/page-title);">
        <div class="auto-container">
            <div class="content-box clearfix">
                <ul class="bread-crumb clearfix">
                    <li><a href="index">{{$siteName}}</a></li>
                </ul>
                <h1>Legal Information</h1>
            </div>
        </div>
    </section>

    <section class="about-style-four">
        <div class="auto-container">
            <div class="row clearfix">
                <div class="col-lg-6 col-md-12 col-sm-12 content-column">
                    <div id="content_block_13">
                        <div class="content-box">
                            <div class="sec-title style-four right">
                                <h5>Legal Information</h5>
                            </div>


                        </div>
                    </div>
                </div>
                <div class="col-lg-6 col-md-12 col-sm-12 image-column">
                    <div id="image_block_four">
                        <div class="image-box">
                            <div class="pattern-layer" style="background-image: url(assets/images/shape/shape-23);"></div>
                            <figure class="image wow slideInRight animated animated animated" data-wow-delay="00ms" data-wow-duration="1500ms" style="visibility: visible; animation-duration: 1500ms; animation-delay: 0ms; animation-name: slideInRight;">
                                <img src="{{asset('home/images/images/cert.jpg')}}" alt="">
                            </figure>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section class="feature-style-four about-page-2">
        <div class="inner-content clearfix">
            <div class="feature-block-four">
                <div class="inner-box">
                    <div class="hidden-icon"><i class="flaticon-search"></i></div>
                    <div class="inner">
                        <div class="icon-box"><i class="flaticon-search"></i></div>
                        <h3>Connecting Opportunities</h3>
                        <p>Opportunities arise daily and are numerous, and we provide you with the means to connect from one to the other</p>
                    </div>
                </div>
            </div>
            <div class="feature-block-four">
                <div class="inner-box">
                    <div class="hidden-icon"><i class="flaticon-claim"></i></div>
                    <div class="inner">
                        <div class="icon-box"><i class="flaticon-claim"></i></div>
                        <h3>Maintain Control</h3>
                        <p>Maintaining control is the ability to drive your success however – and whichever – way you want.</p>
                    </div>
                </div>
            </div>
            <div class="feature-block-four">
                <div class="inner-box">
                    <div class="hidden-icon"><i class="flaticon-presentation"></i></div>
                    <div class="inner">
                        <div class="icon-box"><i class="flaticon-presentation"></i></div>
                        <h3>Freedom of Choice</h3>
                        <p>Benefit from tailored solutions that meet your needs. Over 100 tradable assets and unlimited market access</p>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section class="team-style-three mt-5">
        <div class="auto-container">
            <div class="row clearfix">
                <div class="col-lg-3 col-md-3 col-sm-12 team-block">
                    <div class="team-block-three">
                        <div class="inner-box">
                            <figure class="image-box">
                                <img src="team/john.png" alt="">
                            </figure>
                            <div class="lower-content">
                                <h3>John Champagne</h3>
                                <span class="designation">MANAGING DIRECTOR</span>
                                <p>JOHN M. CHAMPAGNE II, CAIA serves as Managing Director at {{$siteName}}.
                                    John’s daily job functions include fund manager due diligence, risk analysis and working
                                    to support the Investment Committee.  Before joining {{$siteName}}, John
                                    worked as a Senior Hedge Fund Research Associate at Cambridge Associates, LLC in Washington,
                                    D.C.

                                    John holds the Chartered Alternative Investment Analyst (CAIA) designation.
                                    He earned a BS in Economics from the University of Georgia and is currently a Level
                                    1 CFA Candidate.
                                </p>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-3 col-md-3 col-sm-12 team-block">
                    <div class="team-block-three">
                        <div class="inner-box">
                            <figure class="image-box">
                                <img src="team/josh.png" alt="">
                            </figure>
                            <div class="lower-content">
                                <h3>Josh Phillips</h3>
                                <span class="designation">SENIOR ANALYST</span>
                                <p>
                                    Josh Phillips serves as a Senior Analyst at {{$siteName}}.
                                    Josh’s focus it to support the investment team through his due diligence, research and
                                    analytical efforts. Josh is a graduate of Mercer University where he received a BBA
                                    in International Business and a minor in Spanish. He graduated top of his major and was
                                    a member of the Men’s Varsity Lacrosse team and the Student Managed Investment Fund.
                                </p>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-3 col-md-3 col-sm-12 team-block">
                    <div class="team-block-three">
                        <div class="inner-box">
                            <figure class="image-box">
                                <img src="team/ian-greenstreet.png" alt="">
                            </figure>
                            <div class="lower-content">
                                <h3>Ian Greenstreet</h3>
                                <span class="designation">MANAGER</span>
                                <p>Ian Greenstreet is an Investment Banker and international expert in Financial Risk.
                                    He is one of the managers of {{$siteName}}, a London-based Corporate
                                    Finance firm, approved and regulated by the Financial Conduct Authority.
                                    With over 35 years of experience and insight within the banking and financial
                                    services sector, Ian is a very well networked business executive who leverages
                                    his relationships and expertise to assist companies in finding cutting technological
                                    solutions that improve their operations and help provide their clients with
                                    exceptional service.</p>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="col-lg-3 col-md-3 col-sm-12 team-block">
                    <div class="team-block-three">
                        <div class="inner-box">
                            <figure class="image-box">
                                <img src="team/jonathan.png" alt="">
                            </figure>
                            <div class="lower-content">
                                <h3>Jonathan Cheng</h3>
                                <span class="designation">SENIOR ANALYST</span>
                                <p>
                                    Jonathan is a Chartered Accountant having trained with Deloitte Touche in London.
                                    His executive career has spanned 35 years and he has worked in senior roles at
                                    leading financial institutions such as HSBC, Lloyds bank.  Ian was CEO of Henderson
                                    Portfolio Managers in Luxembourg a group that now has $130bn under management and
                                    Head of Risk ABN AMRO La Salle bank responsible for a £72 billion trading portfolio
                                    and a £39 billion portfolio. A man of foresight, he was able to predict the downfall
                                    of Long Term Capital Management saving ABN AMRO bank € 4 billion while being able to
                                    implement a system of including risk experts on City trading floors to maximize
                                    profitability and mitigate risk on transactions.
                                </p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

@endsection
