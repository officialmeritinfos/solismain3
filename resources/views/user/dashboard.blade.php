@extends('user.base')

@section('content')


    <div class="row mb-4">
        <div class="col-md-12 col-lg-7 stretch-card">
            <div class="card">
                <div class="card-header header-sm flex-md-row d-none d-md-flex justify-content-between align-items-center" style='background-color: #1b1b1c;'>
                    <h4 class="card-title text-white">Account Summary</h4>
                    <a class="btn btn-primary btn-sm" href="{{url('account/deposits')}}">
                        <i class="fa fa-file-text"></i> History</a>
                </div>
                <div class="card-header header-sm flex-md-row d-flex d-md-none
                            justify-content-between align-items-center" style='background-color: #1b1b1c;'>
                    <h4 class="card-title text-white">
                        <p>{{$user->username}}</p>
                        <!--<span style="display: block; font-size: 9px; color: #fff;">-->
                        <!--                <b>LAST LOGIN:</b>{{date('d M Y h:i:s a',$user->lastLogin)}}-->
                        <!--            </span>-->
                    </h4>
                    <a class="btn btn-inverse-primary btn-sm"
                       href="{{url('account/deposits')}}">
                        <span id="userID">{{$user->userRef}}</span>
                    </a>
                </div>
                <div class="row pl-3">
                    <div class="card-body">
                        <p class="text-muted">Available Balance</p>
                        <h2 class="font-weight-bold mb-0"  id="ab">
                            ${{number_format($user->profit,2)}}
                        </h2>
                        <div class="row mt-3">
                            <div class="col-md-3">
                                <p class="text-muted">Book Balance</p>
                                <h5 class="font-weight-bold">
                                    ${{number_format($potentialProfit,2)}}
                                </h5>
                            </div>
                            <div class="col-md-3 border-left">
                                <p class="text-muted">Live Balance</p>
                                <h5 class="font-weight-bold">
                                    ${{number_format($liveProfit,2)}}
                                </h5>
                            </div>
                        </div>
                        <div class=" flex-md-row mb-3 mt-2 d-none d-md-flex">

                            <a href="{{url('account/new_deposit')}}"
                               class="btn btn-sm btn-success mr-1">
                                <i class="fa fa-upload"></i> Deposit
                            </a>
                            <a href="{{url('account/withdrawals')}}" class="btn btn-sm btn-outline-warning mr-1">
                                <i class="fa fa-download"></i> Withdraw
                            </a>
                            <a href="transfer" class="btn btn-sm btn-outline-primary d-none d-md-block">
                                <i class="fa fa-exchange"></i> Transfer
                            </a>
                        </div>
                        <div class="flex-md-row d-none d-md-flex">
                            <p>
                                <small class="text-muted mt-5">
                                    Your Available balance is the real balance you can withdraw
                                    from while your book balance is your potential balance
                                    that will become available when your deposit plan is completed.
                                </small>
                            </p>
                        </div>
                    </div>
                </div>

            </div>
        </div>
        <div class="col-md-12 col-lg-5 stretch-card  d-md-flex mt-2">
            <div class="card">
                <div class="card-header header-sm flex-md-row  justify-content-between align-items-center" style='background-color: #1b1b1c;'>
                    <h4 class="card-title text-white text-center">Invite Your Friends</h4>
                </div>
                <div class="row pl-3">
                    <div class="card-body">
                        <p>
                            <small class="text-muted">Earn more when you refer your friends to invest with us.
                                The reward on our referral program is dependent on the deposit plans.</small>
                        </p>
                    </div>
                    <div class="col-6 col-md-12 mb-2">
                        <a target="_blank" href="mailto:?subject=Invitation&body=Hello+dear%2C+I+am+happy+to+invite+you+to+join+{{$siteName}}%2C+a+reliable+investment+website+that+helps+you+to+trade+and+return+your+profit.+Use+my+link+to+register+{{route('register',['referral'=>$user->username])}}" class="btn btn-sm btn-warning btn-block">
                            <i class='fa fa-envelope'></i> Email</a>
                    </div>

                    <div class="col-6 col-md-12 mb-2">
                        <a target="_blank" href="https://facebook.com/sharer/sharer.php?u={{route('register',['referral'=>$user->username])}}" class="btn btn-sm btn-primary btn-block">
                            <i class='fa fa-facebook'></i> Facebook</a>
                    </div>

                    <div class="col-6 col-md-12 mb-2">
                        <a target="_blank" href="https://wa.me/?text=Hello+dear%2C+I+am+happy+to+invite+you+to+{{$siteName}}%2C+a+reliable+investment+website+that+helps+you+to+trade+and+return+your+profit.+Use+my+link+to+register+{{route('register',['referral'=>$user->username])}}" class="btn btn-sm btn-success btn-block">
                            <i class='fa fa-whatsapp'></i> Whatsapp</a>
                    </div>

                    <div class="col-6 col-md-12 mb-2">
                        <a target="_blank" href="https://t.me/share/?text=Hello+dear%2C+I+am+happy+to+invite+you+to+{{$siteName}}%2C+a+reliable+investment+website+that+helps+you+to+trade+and+return+your+profit.+Use+my+link+to+register+{{route('register',['referral'=>$user->username])}}" class="btn btn-sm btn-outline-primary btn-block">
                            <i class='fa fa-paper-plane'></i> Telegram</a>
                    </div>
                    <div class="col-6 col-md-12 mb-2">
                        <form class="forms-sample mt-3">
                            <div class="form-group">
                                <input type="text"
                                       style="background-color: #000000; border-color: #eee;"
                                       readonly id='referral' class="form-control"
                                       value="{{route('register',['referral'=>$user->username])}}">
                            </div>
                            <button  type="button"
                                     data-clipboard-action="copy"
                                     data-clipboard-target="#referral"
                                     class="btn btn-primary btn-block btn-clipboard">
                                <i class='fa fa-copy'></i> Copy Referral Link</button>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div class="mb-5 mt-5">

        <script src="https://crypto.com/price/static/widget/index.js"></script>
        <div
            id="crypto-widget-CoinBlocks"
            data-transparent="true"
            data-theme="dark"
            data-design="modern"
            data-coin-ids="166,1,136,382,1694,20,29,440,2,379"></div>
    </div>

    <div class="row">
        <div class="col-md-12 grid-margin stretch-card">
            <div class="card">
                <div class="card-body">
                    <p class="card-title">Recent Transaction</p>
                    <div class="table-responsive">
                        <table class="table  table-striped">
                            <tbody>
                            @foreach($investments as $investment)
                                <tr data-url="{{route('invest_detail',['id'=>$investment->id])}}"
                                    class="clickable">
                                    <td>
                                        <h6 class="preview-subject font-weight-bold mb-1 text-white">${{number_format($investment->amount,2)}}</h6>
                                        <p class="font-weight-light small-text text-white">
                                            Deposit
                                        </p>
                                        <p class="font-weight-light text-muted mb-0"
                                           style="font-size: 9px;">
                                            {{date('d M Y h:i:s a',strtotime($investment->created_at))}}
                                        </p>
                                    </td>
                                    <td class="text-right">
                                        @switch($investment->status)
                                            @case(1)
                                            <label class='badge badge-success'>Completed</label>
                                            @break
                                            @case(2)
                                            <label class='badge badge-dark'>Pending Deposit</label>
                                            @break
                                            @case(4)
                                            <label class='badge badge-primary'>Ongoing</label>
                                            @break
                                        @endswitch

                                    </td>
                                </tr>
                            @endforeach

                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </div>

@endsection
