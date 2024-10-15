@extends('home.base')

@section('content')

    <section class="page-title centred" style="background-image: url(assets/images/background/page-title);">
        <div class="auto-container">
            <div class="content-box clearfix">
                <ul class="bread-crumb clearfix">
                    <li><a href="index">Send Us A Message</a></li>
                </ul>
                <h1>Get Support</h1>
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

    <section class="contact-style-two" style="background-image: url(assets/images/background/contact-3.jpg);">
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
                            <input type="text" name="name" placeholder="Your Name" required="" aria-required="true">
                        </div>
                        <div class="col-lg-6 col-md-6 col-sm-12 form-group">
                            <input type="email" name="email" placeholder="Email address" required="" aria-required="true">
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

@endsection
