@extends('user.base')

@section('content')

    <div class="row">
        <div class="col-xl-7 mx-auto">
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
                    <form class="row g-3" method="post" action="{{route('transfers.new')}}">
                        @csrf
                        @include('templates.notification')
                        <div class="form-group col-md-12">
                            <label for="inputAddress2">Enter Receiver Username: *</label>
                            <input type="text" class="form-control form-control-lg" id="inputAddress2"
                                   placeholder="Enter Receiver Username" name="receiver">
                        </div>
                        <div class="form-group col-md-12">
                            <label for="inputAddress2">Amount ($)</label>
                            <input type="number" class="form-control form-control-lg" id="inputAddress2"
                                   placeholder="Enter Amount" name="amount">
                        </div>
                        <div class="form-group col-md-12">
                            <button type="submit" class="btn btn-primary btn-block">Transfer</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>

@endsection
