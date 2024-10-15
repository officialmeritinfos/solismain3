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
                                        {{$pageName}}</h1>

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
                <div class="uk-grid">
                    <div class="uk-width-1-1 uk-text-center">
                        <h1 class="uk-margin-remove">Our <span class="in-highlight">Packages</span></h1>
                    </div>
                </div>
                <div class="uk-grid uk-flex uk-flex-center">
                    <div class="uk-width-3-5@m">
                        <div class="uk-grid-small uk-child-width-1-2@s uk-child-width-1-1@m in-content-11 uk-grid uk-grid-stack" data-uk-grid="">
                            @foreach($services as $service)
                                @inject('option','App\Defaults\Custom')
                                @if($option->getPlanNumberService($service->id)->count() >0)
                                <div class="uk-grid-margin uk-first-column">
                                    <a href="{{route('plan_details',['id'=>$service->id])}}" class="uk-card uk-card-small uk-card-default uk-card-body uk-border-rounded uk-display-block">
                                        <div class="uk-grid" data-uk-grid="">
                                            <div class="uk-width-auto@m uk-flex uk-flex-middle uk-first-column">
                                                <i class="uk-text-primary fas fa-database fa-lg in-icon-wrap in-margin-remove-left@s uk-margin-left"></i>
                                            </div>
                                            <div class="uk-width-expand@m in-margin-top-10@s">
                                                <h3 class="uk-margin-small-bottom">{{$service->title}}</h3>
                                                <p class="uk-text-small uk-margin-remove-bottom">
                                                    <span class="uk-text-primary">{{$option->getPlanNumberService($service->id)->count()}} </span> plans in  {{$service->title}}</p>
                                                <p class="uk-text-small uk-text-muted uk-margin-remove-top"
                                                   style="font-size: 14px;">Click to view plans in <span class="uk-text-primary">
                                                        {{$service->title}}
                                                    </span></p>
                                            </div>
                                        </div>
                                    </a>
                                </div>
                                @endif
                            @endforeach

                        </div>
                    </div>
                </div>
            </div>
        </div>

            <div class="uk-section in-equity-8">
                <div class="uk-container uk-margin-medium-top uk-margin-medium-bottom">
                    <div class="uk-grid uk-flex uk-flex-center">
                        <div class="uk-text-center">
                            <h1>Invest on <span class="in-highlight">most popular</span> Market</h1>
                            <p class="uk-text-lead uk-margin-medium-bottom">Invest on our extensive range of CFDs on FX, Commodities, Cryptocurrencies, Shares, ETFs and more. Low costs, fast execution and 24/7 support.</p>
                            <div class="uk-card uk-card-secondary uk-card-body uk-border-rounded uk-box-shadow-large widget-card">
                                <!-- TradingView Widget BEGIN -->
                                <div class="tradingview-widget-container">
                                    <div id="tradingview_72dda"></div>
                                    <div class="tradingview-widget-copyright"><a href="https://www.tradingview.com/symbols/AAPL/" rel="noopener" target="_blank"><span class="blue-text">Apple</span></a> by TradingView</div>
                                    <script type="text/javascript" src="https://s3.tradingview.com/tv.js"></script>
                                    <script type="text/javascript">
                                        new TradingView.MediumWidget(
                                            {
                                                "symbols": [
                                                    [
                                                        "Apple",
                                                        "AAPL|1D"
                                                    ],
                                                    [
                                                        "Google",
                                                        "GOOGL|1D"
                                                    ],
                                                    [
                                                        "Microsoft",
                                                        "MSFT|1D"
                                                    ]
                                                ],
                                                "chartOnly": false,
                                                "width": "100%",
                                                "height": "100%",
                                                "locale": "en",
                                                "colorTheme": "dark",
                                                "autosize": false,
                                                "showVolume": false,
                                                "hideDateRanges": false,
                                                "scalePosition": "right",
                                                "scaleMode": "Normal",
                                                "fontFamily": "-apple-system, BlinkMacSystemFont, Trebuchet MS, Roboto, Ubuntu, sans-serif",
                                                "noTimeScale": false,
                                                "valuesTracking": "1",
                                                "chartType": "line",
                                                "fontColor": "#6a6d78",
                                                "gridLineColor": "rgba(240, 243, 250, 0.06)",
                                                "backgroundColor": "#131722",
                                                "container_id": "tradingview_72dda"
                                            }
                                        );
                                    </script>
                                </div>
                                <!-- TradingView Widget END -->
                            </div>
                        </div>
                        <div class="">
                            <div class="uk-child-width-1-2@s uk-child-width-1-3@m uk-margin-large-top in-current-stats uk-grid" data-uk-grid="">
                                <div class="uk-first-column">
                                    <div class="uk-flex uk-flex-left uk-flex-middle">
                                        <div class="uk-margin-right">
                                            <h2 class="uk-heading-small uk-margin-remove-bottom uk-text-primary">$91+</h2>
                                        </div>
                                        <div>
                                            <h3 class="uk-margin-small-bottom">Million</h3>
                                            <p class="uk-margin-remove uk-text-small uk-text-uppercase">Transactions</p>
                                        </div>
                                    </div>
                                </div>
                                <div>
                                    <div class="uk-flex uk-flex-left uk-flex-middle">
                                        <div class="uk-margin-right">
                                            <h2 class="uk-heading-small uk-margin-remove-bottom uk-text-primary">49.6+</h2>
                                        </div>
                                        <div>
                                            <h3 class="uk-margin-small-bottom">Thousand</h3>
                                            <p class="uk-margin-remove uk-text-small uk-text-uppercase">Active accounts</p>
                                        </div>
                                    </div>
                                </div>
                                <div class="uk-visible@m">
                                    <div class="uk-flex uk-flex-left uk-flex-middle">
                                        <div class="uk-margin-right">
                                            <h2 class="uk-heading-small uk-margin-remove-bottom uk-text-primary">1.2+</h2>
                                        </div>
                                        <div>
                                            <h3 class="uk-margin-small-bottom">Thousand</h3>
                                            <p class="uk-margin-remove uk-text-small uk-text-uppercase">Running Days</p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>


    </main>


@endsection
