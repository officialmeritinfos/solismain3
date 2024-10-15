@extends('user.base')

@section('content')

    <div class="row">
        <div class="col-xl-7 mx-auto">
            {{--            <h6 class="mb-0 text-uppercase">{{$pageName}}</h6>--}}
            <hr/>
            <div class="card border-top border-0 border-4 border-primary" style="background-color:#28282B;">
                <div class="card-body p-5">
                    <div class="text-center">
                        <img src="{{asset('dashboard/user/images/withdraw.png')}}" style="width: 80px; height: auto;"/>
                    </div>
                    <div class="card-title d-flex align-items-center">
                        <div><i class="bx bxs-user me-1 font-22 text-primary"></i>
                        </div>
                        <h5 class="mb-0 text-primary">{{$pageName}}</h5>
                    </div>
                    <hr>
                    <form class="row g-3" method="post" action="{{route('withdraw.new')}}">
                        @csrf
                        @include('templates.notification')
                        <div class="form-group col-md-12">
                            <label for="inputAddress2">Enter Amount: *</label>
                            <input type="number" class="form-control form-control-lg" id="inputAddress2"
                                   placeholder="Enter Amount to Withdraw" name="amount">
                        </div>
                        @if($wallets->count()<1)
                            <a href="{{url('account/wallets')}}" class="btn btn-block btn-warning text-white">Add Wallet</a>
                        @else
                            <div class="form-group col-md-12">
                                <label for="inputAddress2">Select Wallet</label>
                                <select type="number" class="form-control form-control-lg" id="inputAddress2"
                                        name="wallet">
                                    <option value="">Choose wallet</option>
                                    @foreach($wallets as $wallet)
                                        <option value="{{$wallet->id}}">{{$wallet->coin .'-'.$wallet->address}}</option>
                                    @endforeach
                                </select>
                            </div>
                            <div class="form-group col-md-12">
                                <button class="btn btn-warning btn-block text-white" type="submit">Make Withdraw</button>
                            </div>
                        @endif
                    </form>
                </div>
            </div>
        </div>
    </div>

@endsection
