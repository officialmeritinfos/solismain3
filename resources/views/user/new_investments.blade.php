@extends('user.base')

@section('content')

    <div class="row">
        @foreach($services as $service)
            @inject('option','App\Defaults\Custom')
            @if($option->getPlanNumberService($service->id)->count() >0)
                <div class="col-12">
                    <div class="card">
                        <div class="card-body px-2">
                            <h4 class="card-title big-title">{{$service->title}}</h4>
                            <div class="row pricing-table">
                                @foreach($option->getPackagesByService($service->id) as $package)
                                    <div class="col-md-4 grid-margin stretch-card pricing-card px-2 py-1">
                                        <div class="card border myBorder pricing-card-body py-1 px-3">
                                            <div class="text-center pricing-card-head">
                                                <h3 class="font-weight-bold pt-3">{{$package->name}}</h3>

                                            </div>
                                            <ul class="list-unstyled plan-features myUl">
                                                <li>Min Deposit <b class=''>${{number_format($package->minAmount,2)}}</b></li>
                                                <li>Max Deposit <b class=''>${{number_format($package->maxAmount,2)}}</b></li>
                                                <li>Daily Profit <b class=''>{{number_format($package->roi,2)}}%</b></li>
                                                <li>Weekly Profit <b class=''>{{number_format($package->roi*7,2)}}%</b></li>
                                                <li>Monthly Profit <b class=''>{{number_format($package->roi*30,2)}}%</b></li>
                                                <li>Referral Bonus <b class=''>{{number_format($package->referral,2)}}%</b></li>
                                                <li>Duration <b class=''>{{$package->Duration}}</b></li>
                                                <!--li>Withdrawal <b class='text-success'>Weekly</b></li-->
                                            </ul>
                                            <form class="g-3" method="post" action="{{route('investment.new')}}">
                                                @csrf
                                                <div class="form-group">
                                                    <label class="form-control-label">Enter Amount: <span class="text-danger">*</span></label>
                                                    <input type="number" name='amount'
                                                           placeholder="0000.00"
                                                           class="form-control">
                                                </div>
                                                <input type="hidden" name='package' value="{{$package->id}}">
                                                <input type="hidden" name='service' value="{{$service->id}}">

                                                <div class="form-group">
                                                    <label class="form-control-label">Choose Payment Method: <span class="text-danger">*</span></label>
                                                    <div class="row">
                                                        @foreach($coins as $coin)
                                                            <div class="col-6">
                                                                <input type="radio" class="myRadio" id='myRadio{{$package->id}}{{$coin->id}}'
                                                                       name="asset"
                                                                       value='{{$coin->asset}}' >
                                                                <label for="myRadio{{$package->id}}{{$coin->id}}" class='myLabel'>
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
                                            </form>
                                        </div>
                                    </div>
                                @endforeach
                            </div>
                        </div>
                    </div>
                </div>
            @endif
        @endforeach

    </div>

@endsection
