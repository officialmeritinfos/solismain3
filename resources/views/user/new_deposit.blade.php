@extends('user.base')

@section('content')

    <div class="row">
        <div class="col-xl-8 mx-auto">
            {{--            <h6 class="mb-0 text-uppercase">{{$pageName}}</h6>--}}
            <hr/>
            <div class="card border-top border-0 border-4 border-primary"
                 style="background-color:#28282B;">
                <div class="card-body p-5">
                    <div class="card-title d-flex align-items-center">
                        <div><i class="bx bxs-user me-1 font-22 text-primary"></i>
                        </div>
                        <h5 class="mb-0 text-primary">{{$pageName}}</h5>
                    </div>
                    <hr>
                    <form class="g-3" method="post" action="{{route('investment.new')}}">
                        @csrf
                        @include('templates.notification')
                        <div class="row">
{{--                            <div class="form-group col-md-12">--}}
{{--                                <label for="inputAddress2">Choose type of Deposit:</label>--}}
{{--                                <select type="number" class="form-control form-control-lg" id="inputAddress2"--}}
{{--                                        name="service">--}}
{{--                                    <option value="">Choose type of Deposit:</option>--}}
{{--                                    @foreach($services as $service)--}}
{{--                                        @inject('option','App\Defaults\Custom')--}}
{{--                                        @if($option->getPlanNumberService($service->id)->count() >0)--}}
{{--                                            <option value="{{$service->id}}">--}}
{{--                                                {{$service->title}}--}}
{{--                                                ({{$option->getPlanNumberService($service->id)->count()}} Plans)--}}
{{--                                            </option>--}}
{{--                                        @endif--}}
{{--                                    @endforeach--}}
{{--                                </select>--}}
{{--                                <small class="text-danger" style="display: none;" id="bankDanger">Please select a service</small>--}}
{{--                                <small class="text-danger" style="display: none;" id="accountDanger"></small>--}}
{{--                            </div>--}}
                            <div class="form-group col-md-12">
                                <label for="inputAddress2">Choose Plans from <span id="service"></span></label>
                                <select type="number" class="form-control form-control-lg" id="inputAddress2"
                                        name="package">
                                    <option value="">Choose a Plan</option>
                                    @foreach($packages as $package)
                                        <option value="{{$package->id}}">{{$package->name}}</option>
                                    @endforeach

                                </select>
                            </div>
                        </div>
                        <div class='row  pricing-table' id='price_tabi' style="display: none;">
                            <div class="col-md-12 grid-margin pricing-card">
                                <div class="card border myBorder pricing-card-body py-1 px-3">
                                    <div class="text-center pricing-card-head">
                                        <h3 class="font-weight-bold pt-3" id="planName"></h3>
                                        <p id="services"></p>

                                    </div>
                                    <ul class="list-unstyled plan-features myUl">
                                        <li>Min Deposit <b id='minDep'></b></li>
                                        <li>Max Deposit <b id='maxDep'></b></li>
                                        <li>Daily Profit <b id='daily'></b></li>
                                        <li>Weekly Profit <b id='weekly'></b></li>
                                        <li>Monthly Profit <b id='monthly'></b></li>
                                        <li>Referral Bonus <b id='ref'></b></li>
                                        <li>Duration <b id='duration'></b></li>
                                        <!--li>Withdrawal <b class='textsuccess'>Weekly</b></li-->
                                    </ul>

                                    <div class="form-group">
                                        <label class="form-control-label">Enter Amount: <span class="text-danger">*</span></label>
                                        <input type="number" name='amount' placeholder="0000.00"  class="form-control">
                                    </div>

                                    <div class="form-group">
                                        <label class="form-control-label">Choose Payment Method: <span class="text-danger">*</span></label>
                                        <div class="row">
                                            @foreach($coins as $coin)
                                                <div class="col-6">
                                                    <input type="radio" class="myRadio" id='myRadio{{$coin->id}}'
                                                           name="asset"
                                                           value='{{$coin->asset}}' >
                                                    <label for="myRadio{{$coin->id}}" class='myLabel'>
                                                        <img  style="width:40px;"
                                                            src="{{asset('dashboard/user/images/coins/'.strtolower($coin->image).'.svg')}}">
                                                    </label>
                                                </div>
                                            @endforeach
                                        </div>

                                    </div>
                                    <div class="form-group col-md-12 mx-auto">
                                        <label for="inputAddress2">Account</label>
                                        <select type="number" class="form-control form-control-lg" id="inputAddress2"
                                                name="account">
                                            <option value="">Select </option>
                                            <option value="1" selected> New Deposit</option>
                                            <option value="2"> Account Balance</option>
                                        </select>
                                    </div>

                                    <button class="btn btn-success btn-block mb-3" name="invest" type="submit">Make Deposit</button>
                                </div>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>

        <div class="col-md-8 mx-auto mt-5">
            <div class="card">
                <div class="card-body px-0">
                    <h4 class="card-title text-center">Recent Deposits</h4>
                    <table class="table table-striped">
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
                    <a class="float-right btn btn-success mt-3 px-3" href="{{url('account/investments')}}">Show all deposits</a>
                </div>
            </div>
        </div>

    </div>

@endsection
