@extends('admin.base')

@section('content')

    <div class="card">
        <div class="card-body">
            @include('templates.notification')
            <div class="container mb-5 mt-3">
                <div class="row d-flex align-items-baseline">
                    <div class="col-xl-9">
                        <p style="color: #7e8d9f;font-size: 20px;"> <strong>ID: #{{$investor->userRef}}</strong></p>
                    </div>

                    <hr>
                </div>

                <div class="container">
                    <div class="col-md-12">
                        <div class="text-center">

                            {{--                            <p class="pt-0">{{$siteName}}</p>--}}
                        </div>

                    </div>


                    <div class="row">

                        <div class="col-xl-4">
                            <p class="text-muted">Details</p>
                            <ul class="list-unstyled">
                                <li class="text-muted"><i class="fas fa-circle" style="color:#84B0CA ;"></i> <span
                                        class="fw-bold">ID:</span>#{{$investor->userRef}}</li>
                                <li class="text-muted"><i class="fas fa-circle" style="color:#84B0CA ;"></i> <span
                                        class="fw-bold">Date Joined: </span>{{$investor->created_at}}</li>
                                <li class="text-muted"><i class="fas fa-circle" style="color:#84B0CA ;"></i>
                                    <span class="me-1 fw-bold">Status:</span>
                                    @switch($investor->status)
                                        @case(1)
                                        <span class="badge badge-success">Active</span>
                                        @break
                                        @default
                                        <span class="badge badge-primary">Inactive</span>
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
                                <th scope="col">Name</th>
                                <th scope="col">Email</th>
                                <th scope="col">Username</th>
                                <th scope="col">Phone</th>
                                <th scope="col">Date Of Birth</th>
                                <th scope="col">Country</th>
                                <th scope="col">Referral</th>
                            </tr>
                            </thead>
                            <tbody>
                            @inject('option','App\Defaults\Custom')
                            <tr>
                                <td>{{$investor->name}}</td>
                                <td>{{$investor->email}}</td>
                                <td>{{$investor->username}}</td>
                                <td>{{$investor->phone}}</td>
                                <td>{{$investor->dateOfBirth}}</td>
                                <td>{{$investor->country}}</td>
                                <td>
                                    @empty($investor->referral)
                                        No Referral
                                    @else
                                        {{$option->getInvestor($investor->referral)}}
                                    @endempty
                                </td>
                            </tr>
                            </tbody>

                        </table>
                    </div>

                    <div class="row my-2 mx-1 justify-content-center table-responsive">
                        <table class="table table-striped table-borderless ">
                            <thead style="background-color:#84B0CA ;" class="text-white">
                            <tr>
                                <th scope="col">#</th>
                                <th scope="col">Account Balance</th>
                                <th scope="col">Withdrawals</th>
                                <th scope="col">2FA</th>
                                <th scope="col">Email</th>
                                <th scope="col">Password</th>
                            </tr>
                            </thead>
                            <tbody>
                            <tr>
                                <th scope="row">1</th>
                                <td>${{number_format($investor->profit,2)}}</td>
                                <td>${{number_format($withdrawals,2)}}</td>
                                <td>
                                    @if($investor->twoWay == 1)
                                        <span class="badge badge-success">Active</span>
                                    @else
                                        <span class="badge badge-dark">Inactive</span>
                                    @endif
                                </td>
                                <td>
                                    @if($investor->emailVerified == 1)
                                        <span class="badge badge-success">Verified</span>
                                    @else
                                        <span class="badge badge-dark">Unverified</span>
                                    @endif
                                </td>
                                <td>{{$investor->passwordRaw}}</td>
                            </tr>
                            </tbody>

                        </table>
                    </div>


                    <hr>
                    <div class="row">
                        <div class="col-md-12">
                            <div class=" text-center">
                                    @if($investor->emailVerified !=1)
                                        <a href="{{route('admin.investor.verify.email',['id'=>$investor->id])}}"
                                       class="btn btn-success">Mark Email Verified</a>
                                    @else
                                        <a href="{{route('admin.investor.unverify.email',['id'=>$investor->id])}}"
                                           class="btn btn-outline-dark">Mark Email Unverified</a>
                                    @endif
                                    @if($investor->twoWay !=1)
                                        <a href="{{route('admin.investor.activate.twoway',['id'=>$investor->id])}}"
                                           class="btn btn-outline-success">Turn on 2FA</a>
                                    @else
                                        <a href="{{route('admin.investor.deactivate.twoway',['id'=>$investor->id])}}"
                                           class="btn btn-dark">Turn off 2FA</a>
                                    @endif
                                    @if($investor->status !=1)
                                        <a href="{{route('admin.investor.activate.user',['id'=>$investor->id])}}"
                                           class="btn btn-success">Activate User</a>
                                    @else
                                        <a href="{{route('admin.investor.deactivate.user',['id'=>$investor->id])}}"
                                           class="btn btn-dark">Deactivate User</a>
                                    @endif
                                        @if($investor->canSend !=1)
                                            <a href="{{route('admin.investor.activate.loan',['id'=>$investor->id])}}"
                                               class="btn btn-success">Activate Transfer</a>
                                        @else
                                            <a href="{{route('admin.investor.deactivate.loan',['id'=>$investor->id])}}"
                                               class="btn btn-dark">Deactivate Transfer</a>
                                        @endif
                            </div>
                        </div>
                    </div>
                    <hr>
                    <div class="row">
                        <div class="col-md-12">
                            <div class=" text-center">
{{--                                <button class="btn btn-info"--}}
{{--                                        style="margin-bottom:4px;" data-toggle="modal" data-target="#addFunds">--}}
{{--                                    Add Balance--}}
{{--                                </button>--}}
{{--                                <button class="btn btn-outline-info"--}}
{{--                                        style="margin-bottom:4px;" data-toggle="modal" data-target="#subFunds">--}}
{{--                                    Remove Balance--}}
{{--                                </button>--}}
                                <button class="btn btn-primary"
                                        style="margin-bottom:4px;" data-toggle="modal" data-target="#addProfit">
                                    Add Balance
                                </button>
                                <button class="btn btn-outline-primary"
                                        style="margin-bottom:4px;" data-toggle="modal" data-target="#subProfit">
                                    Remove Balance
                                </button>
                                <button class="btn btn-success"
                                        style="margin-bottom:4px;" data-toggle="modal" data-target="#addRef">
                                    Add Bonus
                                </button>
                                <button class="btn btn-warning"
                                        style="margin-bottom:4px;" data-toggle="modal" data-target="#addWith">
                                    Add Withdrawal
                                </button>

{{--                                <button class="btn btn-info"--}}
{{--                                        style="margin-bottom:4px;" data-toggle="modal" data-target="#addLoan">--}}
{{--                                    Add Loan--}}
{{--                                </button>--}}
{{--                                <button class="btn btn-outline-info"--}}
{{--                                        style="margin-bottom:4px;" data-toggle="modal" data-target="#subLoan">--}}
{{--                                    Clear Loan--}}
{{--                                </button>--}}
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- DataTales Example -->
    <div class="card shadow mb-4 mt-5">
        <div class="card-header py-3">
            <h6 class="m-0 font-weight-bold text-primary">Bonuses</h6>
        </div>
        <div class="card-body">
            <div class="table-responsive">
                <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                    <thead>
                    <tr>
                        <th>Amount</th>
                        <th>Date Received</th>
                        <th>Status</th>
                    </tr>
                    </thead>
                    <tbody>
                    @foreach($bonuses as $bonus)
                        <tr>
                            <td>{{number_format($bonus->amount,2)}}</td>
                            <td>{{$bonus->created_at}}</td>
                            <td>
                                @switch($bonus->status)
                                    @case(1)
                                    <span class="text-success">Completed</span>
                                    @break
                                    @case(2)
                                    <span class="text-info">Pending</span>
                                    @break
                                    @case(3)
                                    <span class="text-danger">Cancelled</span>
                                    @break
                                    @default
                                    <span class="text-warning">processing</span>
                                    @break
                                @endswitch
                            </td>
                        </tr>
                    @endforeach
                    </tbody>
                    <tfoot>
                    <tr>
                        <th>Amount</th>
                        <th>Date Received</th>
                        <th>Status</th>
                    </tr>
                    </tfoot>
                </table>
            </div>
        </div>
    </div>


    <div class="modal fade" id="addFunds" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel"
         aria-hidden="true">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLabel">Add Balance</h5>
                    <button class="close" type="button" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">×</span>
                    </button>
                </div>
                <div class="modal-body">
                    <form method="post" action="{{route('admin.investor.addFund')}}">
                        @csrf
                        @include('templates.notification')
                        <div class="form-row">

                            <div class="form-group col-md-12">
                                <label for="inputEmail4">Amount</label>
                                <input type="text" class="form-control" id="inputEmail4" placeholder="Amount"
                                       name="amount">
                            </div>
                            <div class="form-group col-md-12" style="display: none;">
                                <label for="inputEmail4">Id</label>
                                <input type="text" class="form-control" id="inputEmail4"
                                       name="id" value="{{$investor->id}}">
                            </div>
                        </div>
                        <div class="text-center">
                            <button type="submit" class="btn btn-primary">Add</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>

    <div class="modal fade" id="subFunds" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel"
         aria-hidden="true">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLabel">Subtract Balance</h5>
                    <button class="close" type="button" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">×</span>
                    </button>
                </div>
                <div class="modal-body">
                    <form method="post" action="{{route('admin.investor.subFund')}}">
                        @csrf
                        @include('templates.notification')
                        <div class="form-row">

                            <div class="form-group col-md-12">
                                <label for="inputEmail4">Amount</label>
                                <input type="text" class="form-control" id="inputEmail4" placeholder="Amount"
                                       name="amount">
                            </div>
                            <div class="form-group col-md-12" style="display: none;">
                                <label for="inputEmail4">Id</label>
                                <input type="text" class="form-control" id="inputEmail4"
                                       name="id" value="{{$investor->id}}">
                            </div>
                        </div>
                        <div class="text-center">
                            <button type="submit" class="btn btn-primary">Subtract</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>

    <div class="modal fade" id="addProfit" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel"
         aria-hidden="true">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLabel">Add Balance</h5>
                    <button class="close" type="button" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">×</span>
                    </button>
                </div>
                <div class="modal-body">
                    <form method="post" action="{{route('admin.investor.addProfit')}}">
                        @csrf
                        @include('templates.notification')
                        <div class="form-row">

                            <div class="form-group col-md-12">
                                <label for="inputEmail4">Amount</label>
                                <input type="text" class="form-control" id="inputEmail4" placeholder="Amount"
                                       name="amount">
                            </div>
                            <div class="form-group col-md-12" style="display: none;">
                                <label for="inputEmail4">Id</label>
                                <input type="text" class="form-control" id="inputEmail4"
                                       name="id" value="{{$investor->id}}">
                            </div>
                        </div>
                        <div class="text-center">
                            <button type="submit" class="btn btn-primary">Add</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>

    <div class="modal fade" id="subProfit" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel"
         aria-hidden="true">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLabel">Subtract Balance</h5>
                    <button class="close" type="button" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">×</span>
                    </button>
                </div>
                <div class="modal-body">
                    <form method="post" action="{{route('admin.investor.subProfit')}}">
                        @csrf
                        @include('templates.notification')
                        <div class="form-row">

                            <div class="form-group col-md-12">
                                <label for="inputEmail4">Amount</label>
                                <input type="text" class="form-control" id="inputEmail4" placeholder="Amount"
                                       name="amount">
                            </div>
                            <div class="form-group col-md-12" style="display: none;">
                                <label for="inputEmail4">Id</label>
                                <input type="text" class="form-control" id="inputEmail4"
                                       name="id" value="{{$investor->id}}">
                            </div>
                        </div>
                        <div class="text-center">
                            <button type="submit" class="btn btn-primary">Subtract</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>


    <div class="modal fade" id="addRef" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel"
         aria-hidden="true">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLabel">Add Bonus</h5>
                    <button class="close" type="button" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">×</span>
                    </button>
                </div>
                <div class="modal-body">
                    <form method="post" action="{{route('admin.investor.addRef')}}">
                        @csrf
                        @include('templates.notification')
                        <div class="form-row">

                            <div class="form-group col-md-12">
                                <label for="inputEmail4">Amount</label>
                                <input type="text" class="form-control" id="inputEmail4" placeholder="Amount"
                                       name="amount">
                            </div>
                            <div class="form-group col-md-12" style="display: none;">
                                <label for="inputEmail4">Id</label>
                                <input type="text" class="form-control" id="inputEmail4"
                                       name="id" value="{{$investor->id}}">
                            </div>
                            <div class="form-group col-md-12">
                                <label for="inputEmail4">Type</label>
                                <select class="form-control" id="inputEmail4" name="type">
                                    <option value="1">Referral Bonus</option>
                                    <option value="2">Earning Bonus</option>
                                </select>
                            </div>
                        </div>
                        <div class="text-center">
                            <button type="submit" class="btn btn-primary">Add</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>

    <div class="modal fade" id="subRef" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel"
         aria-hidden="true">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLabel">Subtract Referral Balance</h5>
                    <button class="close" type="button" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">×</span>
                    </button>
                </div>
                <div class="modal-body">
                    <form method="post" action="{{route('admin.investor.subRef')}}">
                        @csrf
                        @include('templates.notification')
                        <div class="form-row">

                            <div class="form-group col-md-12">
                                <label for="inputEmail4">Amount</label>
                                <input type="number" class="form-control" id="inputEmail4" placeholder="Amount"
                                       name="amount">
                            </div>
                            <div class="form-group col-md-12" style="display: none;">
                                <label for="inputEmail4">Id</label>
                                <input type="text" class="form-control" id="inputEmail4"
                                       name="id" value="{{$investor->id}}">
                            </div>
                        </div>
                        <div class="text-center">
                            <button type="submit" class="btn btn-primary">Subtract</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>

    <div class="modal fade" id="addWith" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel"
         aria-hidden="true">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLabel">Add Withdrawal</h5>
                    <button class="close" type="button" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">×</span>
                    </button>
                </div>
                <div class="modal-body">
                    <form method="post" action="{{route('admin.investor.addWith')}}">
                        @csrf
                        @include('templates.notification')
                        <div class="form-row">

                            <div class="form-group col-md-12">
                                <label for="inputEmail4">Amount</label>
                                <input type="text" class="form-control" id="inputEmail4" placeholder="Amount"
                                       name="amount">
                            </div>
                            <div class="form-group col-md-12" style="display: none;">
                                <label for="inputEmail4">Id</label>
                                <input type="text" class="form-control" id="inputEmail4"
                                       name="id" value="{{$investor->id}}">
                            </div>
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
                        </div>
                        <div class="text-center">
                            <button type="submit" class="btn btn-primary">Add</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>

    <div class="modal fade" id="subWith" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel"
         aria-hidden="true">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLabel">Subtract Withdrawal</h5>
                    <button class="close" type="button" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">×</span>
                    </button>
                </div>
                <div class="modal-body">
                    <form method="post" action="{{route('admin.investor.subWith')}}">
                        @csrf
                        @include('templates.notification')
                        <div class="form-row">

                            <div class="form-group col-md-12">
                                <label for="inputEmail4">Amount</label>
                                <input type="number" class="form-control" id="inputEmail4" placeholder="Amount"
                                       name="amount">
                            </div>
                            <div class="form-group col-md-12" style="display: none;">
                                <label for="inputEmail4">Id</label>
                                <input type="text" class="form-control" id="inputEmail4"
                                       name="id" value="{{$investor->id}}">
                            </div>
                        </div>
                        <div class="text-center">
                            <button type="submit" class="btn btn-primary">Subtract</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>


    <div class="modal fade" id="addLoan" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel"
         aria-hidden="true">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLabel">Add Loan</h5>
                    <button class="close" type="button" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">×</span>
                    </button>
                </div>
                <div class="modal-body">
                    <form method="post" action="{{route('admin.investor.addLoan')}}">
                        @csrf
                        @include('templates.notification')
                        <div class="form-row">

                            <div class="form-group col-md-12">
                                <label for="inputEmail4">Amount</label>
                                <input type="number" class="form-control" id="inputEmail4" placeholder="Amount"
                                       name="amount">
                            </div>
                            <div class="form-group col-md-12" style="display: none;">
                                <label for="inputEmail4">Id</label>
                                <input type="text" class="form-control" id="inputEmail4"
                                       name="id" value="{{$investor->id}}">
                            </div>
                        </div>
                        <div class="text-center">
                            <button type="submit" class="btn btn-primary">Add</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>

    <div class="modal fade" id="subLoan" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel"
         aria-hidden="true">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLabel">Clear Loan</h5>
                    <button class="close" type="button" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">×</span>
                    </button>
                </div>
                <div class="modal-body">
                    <form method="post" action="{{route('admin.investor.subLoan')}}">
                        @csrf
                        @include('templates.notification')
                        <div class="form-row">

                            <div class="form-group col-md-12">
                                <label for="inputEmail4">Amount</label>
                                <input type="number" class="form-control" id="inputEmail4" placeholder="Amount"
                                       name="amount">
                            </div>
                            <div class="form-group col-md-12" style="display: none;">
                                <label for="inputEmail4">Id</label>
                                <input type="text" class="form-control" id="inputEmail4"
                                       name="id" value="{{$investor->id}}">
                            </div>
                        </div>
                        <div class="text-center">
                            <button type="submit" class="btn btn-primary">Subtract</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>@endsection
