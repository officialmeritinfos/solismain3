@extends('admin.base')

@section('content')

    <div class="card">
        <div class="card-body">
            @include('templates.notification')
            <div class="container mb-5 mt-3">
                <div class="row d-flex align-items-baseline">
                    <div class="col-xl-9">
                        <p style="color: #7e8d9f;font-size: 20px;">Loan <strong>ID: #{{$loan->reference}}</strong></p>
                    </div>
                    <div class="col-xl-3 float-end">
                        <a class="btn btn-light text-capitalize border-0" data-mdb-ripple-color="dark"
                           onclick="window.print()"><i
                                class="fas fa-print text-primary"></i> Print</a>
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
                        <div class="col-xl-8">
                            <ul class="list-unstyled">
                                <li class="text-muted">User: <span style="color:#5d9fc5 ;">{{$investor->name}}</span></li>
                                <li class="text-muted">User Address:{{$loan->address}}</li>
                                <li class="text-muted">User Phone: <i class="fas fa-phone"></i> {{$loan->phoneNumber}}</li>
                                <li class="text-muted">Request Date of Fund: {{$loan->fundDate}}</li>
                                <li class="text-muted">Expected Date to Collect Fund {{$loan->collectionDate}}</li>
                            </ul>
                        </div>
                        <div class="col-xl-4">
                            <p class="text-muted">Invoice</p>
                            <ul class="list-unstyled">
                                <li class="text-muted"><i class="fas fa-circle" style="color:#84B0CA ;"></i> <span
                                        class="fw-bold">ID:</span>#{{$loan->reference}}</li>
                                <li class="text-muted"><i class="fas fa-circle" style="color:#84B0CA ;"></i> <span
                                        class="fw-bold">Creation Date: </span>{{$loan->created_at}}</li>
                                <li class="text-muted"><i class="fas fa-circle" style="color:#84B0CA ;"></i>
                                    <span class="me-1 fw-bold">Status:</span>
                                    @switch($loan->status)
                                        @case(1)
                                        <span class="badge badge-success">Paid</span>
                                        @break
                                        @case(2)
                                        <span class="badge badge-info">Pending</span>
                                        @break
                                        @case(3)
                                        <span class="badge badge-danger">Cancelled</span>
                                        @break
                                        @default
                                        <span class="badge badge-dark">Approved</span>
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
                                <th scope="col">Purpose</th>
                                <th scope="col">Amount</th>
                                <th scope="col">Signature</th>
                                <th scope="col">User Address</th>
                            </tr>
                            </thead>
                            <tbody>
                            <tr>
                                <th scope="row">1</th>
                                <td>{{$loan->purpose}}</td>
                                <td>${{number_format($loan->amount,2)}}</td>
                                <td><img src="{{asset('dashboard/uploads/'.$loan->signature)}}"
                                    style="width:150px;"/></td>
                                <td>{{$loan->address}}</td>
                            </tr>
                            </tbody>

                        </table>
                    </div>

                    <hr>
                    <div class="row">
                        <div class="col-md-12">
                            <div class=" text-center">
                                <a href="{{route('admin.loan.cancel',['id'=>$loan->id])}}"
                                   class="btn btn-danger">Cancel</a>
                                <a href="{{route('admin.loan.approve',['id'=>$loan->id])}}"
                                   class="btn btn-primary">Approve</a>
                                <a href="{{route('admin.loan.paid',['id'=>$loan->id])}}"
                                   class="btn btn-success">Mark as Paid</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

@endsection
