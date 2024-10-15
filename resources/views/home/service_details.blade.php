@extends('home.base')

@section('content')
    @inject('options','App\Defaults\Custom')
    <!-- START SECTION BANNER -->
    <section class="page-title centred" style="background-image: url({{asset('home/images/background/page-title')}});">
        <div class="auto-container">
            <div class="content-box clearfix">
                <ul class="bread-crumb clearfix">
                    <li><a href="index">{{$siteName}}</a></li>
                </ul>
                <h1>{{$pageName}}</h1>
            </div>
        </div>
    </section>
    @if($service->id!=8)
    <section class="service-details">
        <div class="auto-container">
            <div class="row clearfix">






                    <div class="col-lg-8 col-md-12 col-sm-12 content-side">
                        <div class="service-details-content">
                            <div class="content-style-one">
                                <figure class="image-box"><img src="serv/2" alt=""></figure>
                                <div class="sec-title left">
                                    <h5>{{$siteName}}</h5>
                                    <h2>{{$service->title}}</h2>
                                </div>
                                {!! str_replace('siteName',$web->name,$service->content) !!}
                            </div>
                        </div>
                    </div>













                    <div class="col-lg-4 col-md-12 col-sm-12 sidebar-side">
                        <div class="service-sidebar">
                            <div class="sidebar-categories">
                                <ul class="categories-list clearfix">
                                    @foreach($options->getServices() as $service)
                                        <li>
                                            <a href="{{route('service_detail',['id'=>$service->id])}}"
                                               @if(url()->current()==route('service_detail',['id'=>$service->id])) class="active"  @endif>
                                                {{$service->title}}
                                            </a>
                                        </li>
                                    @endforeach
                                        <li><a href="{{url('estate')}}">Real Estate</a></li>
                                </ul>
                            </div>
                            <div class="sidebar-testimonial">
                                <div class="quote-box"><i class="fas fa-quote-right"></i></div>
                                <div class="sidebar-carousel owl-carousel owl-theme owl-nav-none">
                                    <div class="content-box">
                                        <div class="text">
                                            <p>I won't stop recommending this company to every investor out there,paying securely...</p>
                                        </div>
                                        <div class="author-info">
                                            <figure class="image-box"><img src="{{asset('home/images/images/M1EFGuaHDtwpd2N1614696167493.jpg')}}" alt=""></figure>
                                            <h6>Bruce</h6>
                                            <span class="designation">Investor</span>
                                        </div>
                                    </div>

                                    <div class="content-box">
                                        <div class="text">
                                            <p>{{$siteName}} is our third financial adviser, and a huge improvement on the others in terms of advice and commitment. They are pro-active where the others were not, and has made us focus on our plans for retirement - a huge achievement!</p>
                                        </div>
                                        <div class="author-info">
                                            <figure class="image-box"><img src="{{asset('home/images/images/19sCyhlwSXpAacu1614765949638.jpg')}}" alt=""></figure>
                                            <h6>Nicolas</h6>
                                            <span class="designation">Investor</span>
                                        </div>
                                    </div>

                                    <div class="content-box">
                                        <div class="text">
                                            <p>We have been with GBA now for three years. His team have made an effort to get to know us and so the service we receive feels very personal. They helped us to focus on what we want out of life and is helping us realise our plans. The peace of mind we have from knowing our finances are being so well managed is priceless.</p>
                                        </div>
                                        <div class="author-info">
                                            <figure class="image-box"><img src="{{asset('home/images/images/Cr1Jwyhdoc1D8kz1614766389810.jpg')}}" alt=""></figure>
                                            <h6>Mark</h6>
                                            <span class="designation">Investor</span>
                                        </div>
                                    </div>

                                    <div class="content-box">
                                        <div class="text">
                                            <p>I keep recommending to my friends and family because of their overwhelmingly impressive financial services</p>
                                        </div>
                                        <div class="author-info">
                                            <figure class="image-box"><img src="{{asset('home/images/images/ReYcirPHu3vhNI01614685871546.jpg')}}" alt=""></figure>
                                            <h6>Nora Woodward</h6>
                                            <span class="designation">Investor</span>
                                        </div>
                                    </div>

                                    <div class="content-box">
                                        <div class="text">
                                            <p>So happy about the truthfulness of the company, my withdrawal was approved and my btc sent to my wallet under just few minutes after I requested for a withdrawal, I think you all should invest with {{$siteName}}</p>
                                        </div>
                                        <div class="author-info">
                                            <figure class="image-box"><img src="{{asset('home/images/images/1gB4kVWZLbHyQxF1614696122840.jpg')}}" alt=""></figure>
                                            <h6>Temara</h6>
                                            <span class="designation">Investor</span>
                                        </div>
                                    </div>

                                    <div class="content-box">
                                        <div class="text">
                                            <p>At first, I doubted it but to my surprise {{$siteName}} started paying me at the due date</p>
                                        </div>
                                        <div class="author-info">
                                            <figure class="image-box"><img src="{{asset('home/images/images/lWy7b3na5i6X1Nv1614696001686.jpg')}}" alt=""></figure>
                                            <h6>Cynthia carl</h6>
                                            <span class="designation">Investor</span>
                                        </div>
                                    </div>


                                </div>
                            </div>
                        </div>
                    </div>

            </div>
        </div>
    </section>
    @else
        {!! str_replace('siteName',$web->name,$service->content) !!}
    @endif

@endsection
