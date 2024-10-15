@extends('admin.base')

@section('content')

    <div class="card">
        <div class="card-body">
            @include('templates.notification')
            <div class="container mb-5 mt-3">
                <div class="row d-flex align-items-baseline">
                    <div class="col-xl-9">
                        <p style="color: #7e8d9f;font-size: 20px;"> <strong>ID: #{{$investment->reference}}</strong></p>
                    </div>

                    <hr>
                </div>

                <div class="container">
                    <div class="col-md-12">
                        <div class="text-center">
                            <i style="color:#5d9fc5 ;">{{$siteName}}</i>
                            {{--                            <p class="pt-0">{{$siteName}}</p>--}}
                        </div>

                    </div>


                    <div class="row">

                        <div class="col-xl-4">
                            <p class="text-muted">Details</p>
                            <ul class="list-unstyled">
                                <li class="text-muted"><i class="fas fa-circle" style="color:#84B0CA ;"></i> <span
                                        class="fw-bold">ID:</span>#{{$investment->reference}}</li>
                                <li class="text-muted"><i class="fas fa-circle" style="color:#84B0CA ;"></i> <span
                                        class="fw-bold">Date Started: </span>{{$investment->created_at}}</li>
                                <li class="text-muted"><i class="fas fa-circle" style="color:#84B0CA ;"></i>
                                    <span class="me-1 fw-bold">Status:</span>
                                    @switch($investment->status)
                                        @case(1)
                                        <span class="badge badge-success">Completed</span>
                                        @break
                                        @case(2)
                                        <span class="badge badge-info">Pending</span>
                                        @break
                                        @case(3)
                                        <span class="badge badge-danger">Cancelled</span>
                                        @break
                                        @default
                                        <span class="badge badge-primary">Ongoing</span>
                                        @break
                                    @endswitch
                                </li>
                            </ul>
                        </div>
                    </div>

                    <div class="row my-2 mx-1 justify-content-center table-responsive">
                        <table class="table table-striped table-borderless ">
                            <thead style="background-color:#84B0CA ;" class="text-white">
                            <tr>
                                <th scope="col">#</th>
                                <th scope="col">Amount</th>
                                <th scope="col">Current Profit</th>
                                <th scope="col">Roi</th>
                                <th scope="col">Expected Profit</th>
                            </tr>
                            </thead>
                            <tbody>
                            <tr>
                                <th scope="row">1</th>
                                <td>${{number_format($investment->amount,2)}}</td>
                                <td>${{number_format($investment->currentProfit,2)}}</td>
                                <td>{{number_format($investment->roi)}}%</td>
                                <td>${{number_format($investment->profitPerReturn*$investment->numberOfReturns,2)}}</td>
                            </tr>
                            </tbody>

                        </table>
                    </div>

                    <div class="row my-2 mx-1 justify-content-center table-responsive">
                        <table class="table table-striped table-borderless ">
                            <thead style="background-color:#84B0CA ;" class="text-white">
                            <tr>
                                <th scope="col">Duration</th>
                                <th scope="col">Current Number of Return</th>
                                <th scope="col">Number of Return</th>
                                <th scope="col">Next Date of Return</th>
                                <th scope="col">Profit Per Return</th>
                            </tr>
                            </thead>
                            <tbody>
                            <tr>
                                <td>{{$investment->duration}}</td>
                                <td>{{number_format($investment->currentReturn)}}</td>
                                <td>{{number_format($investment->numberOfReturns)}}</td>
                                <td>{{date('d M Y h:i:s a',$investment->nextReturn)}}</td>
                                <td>${{number_format($investment->profitPerReturn,2)}}</td>
                            </tr>
                            </tbody>

                        </table>
                    </div>
                    <hr>
                    <div class="row">
                        <div class="col-xl-12 text-center text-info alert alert-primary">
                            <p>
                                You are to send <b>{{number_format($investment->amount,2)}} of {{$investment->asset}}</b>
                                to the address <b style="font-size:20px;" id="address">{{$investment->wallet}}</b>.<br>
                                After making payment, contact support for instant crediting.
                            </p>
                            <button class="btn btn-primary copy" data-clipboard-target="#address">Copy</button>
                        </div>
                    </div>
                    <hr>
                    <div class="row">
                        <div class="col-md-12">
                            <div class=" text-center">
                                <a href="{{route('admin.invest.complete',['id'=>$investment->id])}}"
                                   class="btn btn-success">Complete Investment</a>
                                <a href="{{route('admin.invest.start',['id'=>$investment->id])}}"
                                   class="btn btn-primary">Start Investment</a>
                                <a href="{{route('admin.invest.cancel',['id'=>$investment->id])}}"
                                   class="btn btn-danger">Cancel</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

@endsection
