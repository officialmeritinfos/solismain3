<!DOCTYPE html>
<html lang="en">
<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <title>{{$pageName}} - {{$siteName}}</title>
    <!-- plugins:css -->
    <link rel="stylesheet" href="{{asset('dashboard/user/vendors/font-awesome/css/all.min.css')}}">
    <link rel="stylesheet" href="{{asset('dashboard/user/vendors/css/vendor.bundle.base.css')}}">
    <!-- endinject -->
    <!-- End plugin css for this page -->
    <!-- inject:css -->
    <link rel="stylesheet" href="{{asset('dashboard/user/css/horizontal-layout-dark/style.css')}}">
    <link rel="stylesheet" href="{{asset('dashboard/vendor/fontawesome-free/css/fontawesome.min.css')}}">
    <!-- endinject -->
    <link rel="shortcut icon" href="{{asset('home/images/'.$web->logo)}}" />
    <link rel="stylesheet" href="{{asset('dashboard/user/vendors/datatables.net-bs4/dataTables.bootstrap4.css')}}">


    <script src="https://kit.fontawesome.com/a076d05399.js"></script>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <style>

        * {
            box-sizing: border-box;
        }


        .input-group-append .input-group-text, .input-group-prepend .input-group-text, .asColorPicker-trigger .input-group-text {
            background: transparent;
            border-color: #232324;
        }

        .chat-bubble.outgoing-chat .chat-message {
            background: #ffaf00 !important;
            margin-left: auto !important;
            max-width: 80% !important;
            margin-right: 0px !important;
        }

        .chat-bubble.incoming-chat .chat-message {
            background: #1b1b1c !important;
            margin-right: auto !important;
            max-width: 80% !important;
            margin-left: 0px !important;
        }

        .myChat{
            overflow: hidden;
            top: -25px;
            padding-bottom: 60px;
            bottom: 0;
            height: 550px !important;
        }

        .myChat .chat-container-wrapper{
            overflow: scroll;
            padding-bottom: 300px;
        }

        .myChat .chat-text-field{
            position: fixed;
            bottom: 55px;
            z-index: 9999;
        }

        .xcoin{
            width: 110px;
            height: auto;
        }

        .mt-minus-5{
            margin-top: -3px;
        }

        .fs-1{
            font-size: 10px;
        }

        #google_translate_element {
            bottom: 25px;
            left: 15px;
        }

        .goog-te-gadget {
            font-family: Roboto, "Open Sans", sans-serif !important;
            text-transform: uppercase;
        }

        .goog-te-gadget-simple {
            background-color: rgba(0, 0, 0, 0) !important;
            border: 1px solid rgba(0, 0, 0, 0.5) !important;
            padding: 1px !important;
            border-radius: 4px !important;
            font-size: 0.6rem !important;
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
            color: #999999 !important;
        }
        .goog-te-menu-value:before {
            font-family: 'Material Icons';
            content: "\E927";
            margin-right: 16px;
            font-size: 1.2rem;
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


        .input-group-append, .input-group-prepend, .asColorPicker-trigger {
            background: #4184dd;
            border-radius: 50px 0px 0px 50px !important;
        }

        .auth.theme-two .auto-form-wrapper form .form-group .input-group .form-control, .auth.theme-two .auto-form-wrapper form .form-group .asColorPicker-wrap .form-control, .auth.theme-two .auto-form-wrapper form .form-group .input-group .asColorPicker-input, .auth.theme-two .auto-form-wrapper form .form-group .asColorPicker-wrap .asColorPicker-input, .auth.theme-two .auto-form-wrapper form .form-group .input-group .dataTables_wrapper select, .dataTables_wrapper .auth.theme-two .auto-form-wrapper form .form-group .input-group select, .auth.theme-two .auto-form-wrapper form .form-group .asColorPicker-wrap .dataTables_wrapper select, .dataTables_wrapper .auth.theme-two .auto-form-wrapper form .form-group .asColorPicker-wrap select, .auth.theme-two .auto-form-wrapper form .form-group .input-group .jsgrid .jsgrid-table .jsgrid-filter-row input[type=text], .jsgrid .jsgrid-table .jsgrid-filter-row .auth.theme-two .auto-form-wrapper form .form-group .input-group input[type=text], .auth.theme-two .auto-form-wrapper form .form-group .asColorPicker-wrap .jsgrid .jsgrid-table .jsgrid-filter-row input[type=text], .jsgrid .jsgrid-table .jsgrid-filter-row .auth.theme-two .auto-form-wrapper form .form-group .asColorPicker-wrap input[type=text], .auth.theme-two .auto-form-wrapper form .form-group .input-group .jsgrid .jsgrid-table .jsgrid-filter-row select, .jsgrid .jsgrid-table .jsgrid-filter-row .auth.theme-two .auto-form-wrapper form .form-group .input-group select, .auth.theme-two .auto-form-wrapper form .form-group .asColorPicker-wrap .jsgrid .jsgrid-table .jsgrid-filter-row select, .jsgrid .jsgrid-table .jsgrid-filter-row .auth.theme-two .auto-form-wrapper form .form-group .asColorPicker-wrap select, .auth.theme-two .auto-form-wrapper form .form-group .input-group .jsgrid .jsgrid-table .jsgrid-filter-row input[type=number], .jsgrid .jsgrid-table .jsgrid-filter-row .auth.theme-two .auto-form-wrapper form .form-group .input-group input[type=number], .auth.theme-two .auto-form-wrapper form .form-group .asColorPicker-wrap .jsgrid .jsgrid-table .jsgrid-filter-row input[type=number], .jsgrid .jsgrid-table .jsgrid-filter-row .auth.theme-two .auto-form-wrapper form .form-group .asColorPicker-wrap input[type=number], .auth.theme-two .auto-form-wrapper form .form-group .input-group .select2-container--default .select2-selection--single, .select2-container--default .auth.theme-two .auto-form-wrapper form .form-group .input-group .select2-selection--single, .auth.theme-two .auto-form-wrapper form .form-group .asColorPicker-wrap .select2-container--default .select2-selection--single, .select2-container--default .auth.theme-two .auto-form-wrapper form .form-group .asColorPicker-wrap .select2-selection--single, .auth.theme-two .auto-form-wrapper form .form-group .input-group .select2-container--default .select2-selection--single .select2-search__field, .select2-container--default .select2-selection--single .auth.theme-two .auto-form-wrapper form .form-group .input-group .select2-search__field, .auth.theme-two .auto-form-wrapper form .form-group .asColorPicker-wrap .select2-container--default .select2-selection--single .select2-search__field, .select2-container--default .select2-selection--single .auth.theme-two .auto-form-wrapper form .form-group .asColorPicker-wrap .select2-search__field, .auth.theme-two .auto-form-wrapper form .form-group .input-group .tt-hint, .auth.theme-two .auto-form-wrapper form .form-group .asColorPicker-wrap .tt-hint, .auth.theme-two .auto-form-wrapper form .form-group .input-group .tt-query, .auth.theme-two .auto-form-wrapper form .form-group .asColorPicker-wrap .tt-query, .auth.theme-two .auto-form-wrapper form .form-group .input-group .typeahead, .auth.theme-two .auto-form-wrapper form .form-group .asColorPicker-wrap .typeahead {
            border: 1px solid #2e334d;
            border-left: none;
            border-radius: 0 50px 50px 0px;
        }

        .myBtn-custom{
            color : #fff;
            background-color: #4184dd;
            font-size: 18px;
            font-weight: 600;

        }

        .auth.theme-two .auto-form-wrapper .nav-get-started .get-started-btn {
            border: 1px solid #fff;
            color: #fff !important;
        }


        .auth.theme-two .auto-form-wrapper form .form-group .input-group .input-group-prepend .input-group-text, .auth.theme-two .auto-form-wrapper form .form-group .asColorPicker-wrap .input-group-prepend .input-group-text, .auth.theme-two .auto-form-wrapper form .form-group .input-group .asColorPicker-trigger .input-group-text, .auth.theme-two .auto-form-wrapper form .form-group .asColorPicker-wrap .asColorPicker-trigger .input-group-text {
            border-radius: 50px 0 0 50px;
            border-color: #999999;
            border-right: none;
            color: #dfdfdf;
        }


        input[type="radio"][class="myRadio"] {
            display: none;
        }

        .myLabel {
            border: 0.5px solid #c7c7c7;
            padding: 10px;
            display: block;
            position: relative;
            margin: 10px;
            cursor: pointer;
            border-radius: 8px;
        }

        .myBorder{
            border: 0.5px solid #c7c7c7 !important;
            border-radius: 8px;
        }

        .myUl li b{
            float: right;
        }

        .myLabel:before {
            background-color: #19d895;
            color: white;
            content: " ";
            display: block;
            border-radius: 50%;
            border: 1px solid #19d895;
            position: absolute;
            top: -5px;
            left: -5px;
            width: 25px;
            height: 25px;
            text-align: center;
            line-height: 28px;
            transition-duration: 0.4s;
            transform: scale(0);
        }

        .myLabel img {
            height: auto;
            width: 100%;
            transition-duration: 0.2s;
            transform-origin: 50% 50%;
        }

        .myRadio:checked + label {
            border-color: #19d895;
        }

        .myRadio:checked + label:before {
            content: "✓";
            background-color: #19d895;
            transform: scale(1);
        }

        .myRadio:checked + label img {
            transform: scale(0.9);
            /* box-shadow: 0 0 5px #333; */
            z-index: -1;
        }
    </style>


    <style>

        .content-wrapper {
            background: #252526;
            padding-top: 0px;
        }

        .g-login {
            border: 1px solid #383e5d;
            padding: 13px;
            font-size: 12px;
            font-weight: 600;
            background: transparent;
        }

        .soc{
            width: 20px;
        }

        .bg-1 {
            background-image: url(../img/bg-2.png);
            background-repeat: no-repeat;
            background-size: contain;
            background-position: 50% 50%;
        }

        .card{
            background-color: #252526;
        }

        body{
            background-color: #252526;
            color: #999999;
        }

        p{
            color: #999999;
        }

        .dropdown-menu .dropdown-item {
            color: #999999;
            background: #252526;
        }

        .dropdown-menu .dropdown-item:hover {
            color: #999999;
            background: #252526;
        }

        .modal .modal-dialog .modal-content {
            background: #252526;
        }

        .card-title{
            color: #999999 !important;
        }

        .big-title{
            font-size: 25px !important;
        }

        .content-wrapper {
            background: #252526;
        }

        .card .card-header {
            border-bottom: 1px solid #ddd;
        }

        .text-muted{
            color: #999 !important;
        }

        .card-statistics .card-col {
            border-right: 1px solid #1b1b1c !important;
        }

        @media (max-width: 767.98px){
            .card-statistics .card-col:first-child:after, .card-statistics .card-col:first-child:before, .card-statistics .card-col:nth-child(2):after, .card-statistics .card-col:nth-child(2):before, .card-statistics .card-col:nth-child(3):after, .card-statistics .card-col:nth-child(3):before {
                background: #1b1b1c ;
            }
        }

        @media (max-width: 767.98px){
            .card-statistics .card-col:first-child:after, .card-statistics .card-col:first-child:before, .card-statistics .card-col:nth-child(2):after, .card-statistics .card-col:nth-child(2):before, .card-statistics .card-col:nth-child(3):after, .card-statistics .card-col:nth-child(3):before {
                background: #1b1b1c;
            }
        }

        @media (max-width: 767.98px){
            .card-statistics .card-col {
                border: none;
            }
        }

        .active-p{
            color: #4184dd !important;
        }

        .sidebar {
            background: -webkit-gradient(linear, left bottom, left top, from(#252526), to(#1b1b1c));
            background: linear-gradient(to top, #252526, #1b1b1c);
        }

        .sidebar > .nav .nav-item.nav-profile .nav-link {
            border: 1px solid rgba(0, 0, 0, 0.11);
            color: #999999 !important;
        }

        .sidebar > .nav .nav-item.nav-profile .nav-link .profile-name {
            color: #999999 !important;
        }

        .sidebar > .nav .nav-item .nav-link {
            color: #999999 !important;
        }

        .sidebar > .nav .nav-item.nav-profile .nav-link .designation {
            color: #999999;
        }

        .clickable:hover{
            cursor: pointer ;
        }

        .table tbody td, .jsgrid .jsgrid-table tbody td {
            border-top-color: #1b1b1c ;
        }

        input, select, textarea{
            background-color: #1b1b1c !important;
            color: #999999 !important;
            padding: 12px 7px !important;
            height: auto !important;
            border: 1px #999 solid !important;
            font-size: 14px !important;
        }

        .auth.theme-two .auto-form-wrapper form .form-group .submit-btn {
            font-size: 15px;
            padding: 12px 33px;
            background-image: linear-gradient(
                90deg, #2a2c44, #fd7e42, #fd7e42);
            border-color: #fd7e42 !important;
        }
    </style>

    <style>

        .bottom-menu{
            overflow: hidden;
            position: fixed;
            bottom: 0;
            width: 100%;
            background-color: #1b1b1c;
            border-top: 1px solid #252526;
            z-index:  1;
        }

        .bottom-menu a{
            width: 20%;
            float: left;
            display: block;
            color: inherit;
            text-align: center;
            padding: 10px 12px;
            text-decoration: none;
            font-size: 10px;
        }

        .bottom-menu .active{
            color: #1eaae7;
        }

        .bottom-menu a i{
            font-size: 20px;
            display: block;
            margin-bottom: 3px;
        }

        .bottom-menu a span{

        }

        .screenMenu{
            width: 100%;
        }

        .screenMenu a{
            width: 32%;
            float: left;
            display: block;
            color: inherit;
            text-align: center;
            padding: 9px 20px;
            border-radius: 6px;
            margin: 6px 3px 0px 0px;
            text-decoration: none;
            font-size: 12px;
            background-color: #1b1b1c;
        }

        .screenMenu a i{
            font-size: 25px;
            display: block;
            text-align: center;
            margin-bottom: 3px;
        }



        .icon-menu-3 a{
            width: 33.3%;
            float: left;
            display: block;
            color: inherit;
            text-align: center;
            padding: 10px 12px;
            text-decoration: none;
            font-size: 10px;
        }

        .icon-menu-3 .active{
            color: #fb8c00;
        }

        .icon-menu-3 a i{
            font-size: 20px;
            display: block;
            margin-bottom: 3px;
        }
    </style>
</head>

<body>
<div class="container-scroller">
    @inject('option','App\Defaults\Custom')
    <!-- partial:partials/_horizontal-navbar -->
    <div class="horizontal-menu">
        <nav class="navbar top-navbar col-lg-12 col-12 p-0">
            <div class="container">
                <div class="text-center navbar-brand-wrapper d-flex align-items-center justify-content-center">
                    <a class="navbar-brand brand-logo" href="{{url('account/dashboard')}}">
                        <img src="{{asset('home/images/'.$web->logo)}}" alt="logo"/></a>
                    <a class="navbar-brand brand-logo-mini" href="{{url('account/dashboard')}}">
                        <img src="{{asset('home/images/'.$web->logo)}}" alt="logo"/></a>
                </div>
                <div class="navbar-menu-wrapper d-flex align-items-center justify-content-end">

                    <ul class="navbar-nav navbar-nav-right">
                        <li class="nav-item dropdown mr-2">
                            <a href="{{url('account/wallets')}}" class="btn btn-sm btn-inverse-primary mr-1"><i class="fa fa-briefcase"></i></a>
                            <a href="{{url('contact')}}" target="_blank" class="btn btn-sm btn-success mr-1">
                                <i class="fa fa-comments"></i>
                            </a>
                            <a href="{{url('account/settings')}}" class="btn btn-sm btn-outline-primary">
                                <i class="fa fa-gear"></i>
                            </a>
                        </li>
                        <li class="nav-item dropdown mr-4">
                            <a class="nav-link count-indicator dropdown-toggle d-flex align-items-center justify-content-center"
                               id="notificationDropdown" href="#" data-toggle="dropdown">
                                <i class="fa fa-bell mx-0"></i>
                                <span class="count"></span>
                            </a>
                            <div class="dropdown-menu dropdown-menu-right navbar-dropdown preview-list" aria-labelledby="notificationDropdown">
                                <p class="mb-0 font-weight-normal float-left dropdown-header">Notifications</p>
                                @foreach($option->getUserNotificationsUnread($user->id) as $notify)
                                    <a class="dropdown-item preview-item"
                                       href="{{route('notification.read',['id'=>$notify->id])}}">
                                        <div class="preview-thumbnail">
                                            <div class="preview-icon bg-info">
                                                <i class="fa fa-info-circle mx-0"></i>
                                            </div>
                                        </div>
                                        <div class="preview-item-content text-light">
                                            <h6 class="preview-subject font-weight-normal">{{$notify->title}}</h6>
                                            <p class="font-weight-light small-text mb-0">
                                                {{$notify->content}}
                                            </p>
                                            <p class="font-weight-light small-text mb-0 ">
                                                {{$notify->created_at}}
                                            </p>
                                        </div>
                                    </a>
                                @endforeach
                            </div>
                        </li>
                    </ul>
                    <button class="navbar-toggler navbar-toggler-right d-lg-none align-self-center" type="button" data-toggle="horizontal-menu-toggle">
                        <span class="fa fa-bars"></span>
                    </button>
                </div>
            </div>
        </nav>
        <nav class="bottom-navbar">
            <div class="container">
                <ul class="nav page-navigation">
                    <li class="nav-item">
                        <a class="nav-link" href="{{url('account/dashboard')}}">
                            <i class="fa fa-dashboard menu-icon"></i>
                            <span class="menu-title">Dashboard</span>
                        </a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="{{url('account/new_deposit')}}">
                            <i class="fa fa-upload menu-icon"></i>
                            <span class="menu-title">Deposit</span>
                        </a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="{{url('account/new_withdrawals')}}">
                            <i class="fa fa-download menu-icon"></i>
                            <span class="menu-title">Withdraw</span>
                        </a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="{{url('account/transfer')}}">
                            <i class="fa fa-exchange menu-icon"></i>
                            <span class="menu-title">Transfer</span>
                        </a>
                    </li>
{{--                    <li class="nav-item">--}}
{{--                        <a class="nav-link" href="{{url('account/escrow')}}">--}}
{{--                            <i class="fa fa-recycle menu-icon"></i>--}}
{{--                            <span class="menu-title">Escrow</span>--}}
{{--                        </a>--}}
{{--                    </li>--}}
                    <li class="nav-item">
                        <a class="nav-link" href="{{url('account/wallets')}}">
                            <i class="fa fa-briefcase menu-icon"></i>
                            <span class="menu-title">Wallet</span>
                        </a>
                    </li>

                    <li class="nav-item">
                        <a href="#" class="nav-link">
                            <i class="fa fa-file-alt menu-icon"></i>
                            <span class="menu-title">Transaction History</span>
                            <i class="menu-arrow"></i></a>
                        <div class="submenu">
                            <ul class="submenu-item">
                                <li class="nav-item">
                                    <a class="nav-link" href="{{url('account/investments')}}">Deposits</a>
                                    <a class="nav-link" href="{{url('account/withdrawals')}}">Withdrawals</a>
                                    <a class="nav-link" href="{{url('account/bonus')}}">Bonuses</a>
                                    <a class="nav-link" href="{{url('account/transfers')}}">Transfers</a>
                                </li>
                             </ul>
                        </div>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="{{url('account/new_investment')}}">
                            <i class="fa fa-database menu-icon"></i>
                            <span class="menu-title">Investment</span>
                        </a>
                    </li>

                    <li class="nav-item">
                        <a href="#" class="nav-link">
                            <i class="fa fa-anchor menu-icon"></i>
                            <span class="menu-title">Others</span>
                            <i class="fa fa-chevron-up menu-arrow"></i></a>
                            <div class="submenu">
                                <ul class="submenu-item">
                                    <li class="nav-item">
                                        <a class="nav-link" href="{{url('account/settings')}}">My profile</a>
                                        <a class="nav-link" href="{{url('account/referrals')}}">My Referral</a>
                                    </li>
                                </ul>
                            </div>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="{{url('account/logout')}}">
                            <i class="fa fa-sign-out menu-icon"></i>
                            <span class="menu-title">Logout</span>
                        </a>
                    </li>

                </ul>
            </div>
        </nav>
    </div>

    <!-- partial -->
    <div class="container-fluid page-body-wrapper">
        <div class="main-panel">
            <div class="content-wrapper">

                <div class="row">
                    <div class="col-md-12 grid-margin">
                        <div class="d-flex align-items-baseline flex-wrap mt-3">
                            <h2 class="mr-4 mb-0">{{$pageName}}</h2>
                        </div>
                    </div>
                </div>

                @yield('content')

            </div>
            <!-- content-wrapper ends -->

            <!-- partial:partials/_footer -->
            <footer class="footer">
                <div class="w-100 clearfix">
                    <span class="text-muted d-block text-center text-sm-left d-sm-inline-block">
                        Copyright © {{date('Y')}} {{$siteName}} . All rights reserved.</span>
                </div>
            </footer>
            <!-- partial -->
            <div style="margin-bottom: 20px;"></div>
            <div class='bottom-menu d-block d-md-none'>
                <a href="{{url('account/referral')}}" class=''><i class="fa fa-users"></i> Referral</a>
                <a href="{{url('account/bonus')}}" class=''><i class="fa fa-gift"></i> Bonus</a>
                <a href="{{url('account/dashboard')}}" class=''><i class="fa fa-home"></i> Account</a>
                <a href="{{url('account/transfers')}}" class=''><i class="fa fa-exchange"></i> Transfer</a>
                <a href="{{url('account/new_investment')}}" class=''><i class="fa fa-database"></i> Farms/Projects</a>
            </div>
        </div>
        <!-- main-panel ends -->
    </div>
    <!-- page-body-wrapper ends -->
</div>
<!-- container-scroller -->

<!-- plugins:js -->
<script src="{{asset('dashboard/user/vendors/js/vendor.bundle.base.js')}}"></script>
<!-- endinject -->
<!-- Plugin js for this page -->
<script src="{{asset('dashboard/user/vendors/chart.js/Chart.min.js')}}"></script>
<script src="{{asset('dashboard/user/vendors/datatables.net/jquery.dataTables.js')}}"></script>
<script src="{{asset('dashboard/user/vendors/datatables.net-bs4/dataTables.bootstrap4.js')}}"></script>
<!-- End plugin js for this page -->
<!-- inject:js -->
<script src="{{asset('dashboard/user/js/off-canvas.js')}}"></script>
<script src="{{asset('dashboard/user/js/hoverable-collapse.js')}}"></script>
<script src="{{asset('dashboard/user/js/template.js')}}"></script>
<script src="{{asset('dashboard/user/js/settings.js')}}"></script>
<script src="{{asset('dashboard/user/js/todolist.js')}}"></script>
<!-- endinject -->
<!-- Custom js for this page -->
<script src="{{asset('dashboard/user/js/dashboard.js')}}"></script>
<script src="{{asset('dashboard/user/js/todolist.js')}}"></script>
<script src="{{asset('dashboard/user/vendors/clipboard/clipboard.min.js')}}"></script>
<script src="{{asset('dashboard/user/js/clipboard.js')}}"></script>
<!-- End custom js for this page -->
<script>

    function clickableRow(url){
        window.location.href = url;
    }
    $(function () {
        $('.clickable').click(function () {
            window.location.href = $(this).data('url');
        });
    })
</script>
<!-- Custom js for this page -->
<script src="{{asset('dashboard/user/js/data-table.js')}}"></script>
<script src="{{asset('dashboard/user/js/investment.js')}}"></script>
<!-- Plugin js for this page-->
<script src="{{asset('dashboard/user/vendors/datatables.net/jquery.dataTables.js')}}"></script>
<script src="{{asset('dashboard/user/vendors/datatables.net-bs4/dataTables.bootstrap4.js')}}"></script>

<!-- Google language start -->
<style>

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
    .goog-te-gadget-simple
    {
        padding: 0px !important;
        line-height: 1.428571429;
        color: white;
        vertical-align: middle;
        background-color: black;
        border: 1px solid #a5a5a599;
        border-radius: 4px;
        float: right;
        margin-top: -4px;
        z-index: 999999;
    }
    .goog-te-banner-frame.skiptranslate
    {
        display: none !important;
        color: white;
    }
    .goog-te-gadget-icon
    {
        background: none !important;
        display: none;
        color: white;
    }
    .goog-te-gadget-simple .goog-te-menu-value
    {
        font-size: 12px;
        color: white;
        font-family: 'Open Sans' , sans-serif;
    }
</style>
<!--<div id="google_translate_element"></div>-->
<script type="text/javascript">
    window.onload = function googleTranslateElementInit() {
        new google.translate.TranslateElement({ pageLanguage: 'en' }, 'google_translate_element');
    }
</script>
<script type="text/javascript" src="//translate.google.com/translate_a/element.js?cb=googleTranslateElementInit"></script>

</body>
</html>
