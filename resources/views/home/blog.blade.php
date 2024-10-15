@extends('home.base')

@section('content')

    <div class="uk-section uk-section-small"> <div class="uk-container">
            <div class="uk-grid in-breadcrumb">
                <div class="uk-width-1-1">
                    <ul class="uk-breadcrumb">
                    </ul>
                </div>
            </div>
        </div>
    </div>


    <div class="uk-section uk-section-small">
        <div class="uk-container">
            <div class="uk-grid">
                <div class="uk-width-1-1 in-help-center">
                    <div class="uk-card uk-card-primary uk-background-bottom-left uk-background-contain" style="background-image: url(img/in-help-center.png);">
                        <div class="uk-card-body">
                            <div class="uk-grid uk-flex uk-flex-center">
                                <div class="uk-width-3-5@m uk-text-center">
                                    <h1 class="uk-margin-small-top">
                                        {{$pageName}}</h1></h1>

                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <main>





        <div class="uk-section">
            <div class="uk-container">
                <div class="uk-grid" data-uk-grid="">
                    <div class="uk-width-3-5@m uk-first-column">
                        <h1 class="uk-margin-remove"><span class="in-highlight">Knowledge</span> is a wise investment</h1>
                        <p class="uk-text-lead uk-text-muted">By combining easy-to-understand information with actionable insights, Our company helps make the market seem less daunting—and more approachable.</p>

                    </div>
                    <div class="uk-width-2-5@m">
                        <div class="uk-card uk-card-default uk-card-body uk-border-rounded">
                            <div class="uk-grid uk-grid-small">
                                <div class="uk-width-expand@m">
                                    <h3 class="uk-margin-remove-bottom">Investors #1 Choice</h3>
                                    <p class="uk-margin-small-top">We pride ourself as the prime of finance management and investment.</p>
                                    <a class="uk-button uk-button-primary uk-border-rounded" href="{{route('register')}}">Start Investing<i class="fas fa-arrow-circle-right uk-margin-small-left"></i></a>
                                </div>
                                <div class="uk-width-auto@m uk-visible@m">
                                    <div class="in-icon-wrapper transparent uk-margin-top">
                                        <i class="fas fa-user-database fa-5x"></i>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <div class="uk-section uk-padding-remove-vertical uk-margin-medium-bottom">
            <div class="uk-container">
                <div class="uk-grid">
                    <div class="uk-width-1-1">
                        <div class="uk-card uk-card-default uk-border-rounded uk-background-center uk-background-contain uk-background-image@m" style="background-image: url(_img/blockit/in-team-background-1.html')}}); background-position-y: calc(50% + -22.08px);" data-uk-parallax="bgy: -100">
                            <div class="uk-card-body">
                                <div class="uk-grid uk-flex uk-flex-center">
                                    <div class="uk-width-3-4@m uk-text-center">
                                        <h1 class="uk-margin-remove">Our <span class="in-highlight">Blog</span></h1>
                                    </div>
                                </div>
                                <div class="uk-child-width-1-1 uk-text-center uk-margin-small-bottom uk-grid" data-uk-grid="">

                                    <rssapp-wall id="38kEBNRCi1vuK60z"></rssapp-wall><script src="https://widget.rss.app/v1/wall.js" type="text/javascript" async></script>

                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>


    </main>

@endsection
