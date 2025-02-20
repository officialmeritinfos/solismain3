@extends('user.base')

@section('content')
    <!-- Content Row -->
    <div class="row">
        @if($user->accountType==1)
            <!-- Earnings (Monthly) Card Example -->
                <div class="col-xl-3 col-md-6 mb-4 mx-auto" >
                    <div class="card border-left-primary shadow h-100 py-2" style="background-color:#28282B;color: #ffffff;">
                        <div class="card-body" >
                            <div class="row no-gutters align-items-center">
                                <div class="col mr-2" >
                                    <div class="text-xs font-weight-bold text-primary text-uppercase mb-1">
                                        Total Referral Earning</div>
                                    <div class="h5 mb-0 font-weight-bold text-gray-800">
                                        ${{number_format($bonus,2)}}
                                    </div>
                                </div>
                                <div class="col-auto">
                                    <i class="fa fa-calendar fa-2x text-gray-300"></i>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
        @else
            <!-- Earnings (Monthly) Card Example -->
                <div class="col-xl-3 col-md-6 mb-4 mx-auto">
                    <div class="card border-left-primary shadow h-100 py-2">
                        <div class="card-body">
                            <div class="row no-gutters align-items-center">
                                <div class="col mr-2">
                                    <div class="text-xs font-weight-bold text-primary text-uppercase mb-1">
                                        Affiliate Balance</div>
                                    <div class="h5 mb-0 font-weight-bold text-gray-800">
                                        ${{number_format($user->refBal,2)}}
                                    </div>
                                </div>
                                <div class="col-auto">
                                    <i class="fa fa-calendar fa-2x text-gray-300"></i>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
        @endif
    </div>

    <!-- DataTales Example -->
    <div class="card" style="background-color:#28282B;color: #ffffff;">
        <div class="card-header py-3">
            <h6 class="m-0 font-weight-bold text-primary">
                Link
            </h6>
        </div>
        <div class="card-body row">
            @if($user->accountType==1)
                <div class="col-md-12 mx-auto" >

                    <div class="form-row">
                        <div class="form-group col-md-6 mx-auto">
                            <label for="inputEmail4">Referral Link</label>
                            <input type="text" class="form-control" id="inputEmail4"
                                   value="{{route('register',['referral'=>$user->username])}}" readonly>
                        </div>
                    </div>
                    <div class="text-center mt-4">
                        <button  class="btn btn-primary btn-clipboard"
                                 data-clipboard-target="#inputEmail4">copy</button>
                    </div>
                </div>
            @else
                <div class="col-md-12 mx-auto">

                    <div class="form-row">
                        <div class="form-group col-md-6 mx-auto">
                            <label for="inputEmail4">Affiliate Link</label>
                            <input type="text" class="form-control" id="inputEmail4"
                                   value="{{route('register',['referral'=>$user->username])}}" readonly>
                        </div>
                    </div>
                    <div class="text-center">
                        <button  class="btn btn-primary copy"
                                 data-clipboard-target="#inputEmail4">copy</button>
                    </div>
                </div>
            @endif
        </div>
    </div>
    <br><br>
    <!-- DataTales Example -->
    <div class="card shadow mb-4" style="background-color:#28282B;color: #ffffff;">
        <div class="card-header py-3">
            <h6 class="m-0 font-weight-bold text-primary">{{$pageName}}</h6>
        </div>
        <div class="card-body" >
            @include('templates.notification')
            <div class="table-responsive">
                <table class="table table-bordered text-white" id="dataTable" width="100%" cellspacing="0">
                    <thead>
                    <tr>
                        <th>Reference</th>
                        <th>Name</th>
                        <th>Email</th>
                        <th>Status</th>
                    </tr>
                    </thead>
                    <tbody>
                    @foreach($referrals as $referral)
                        <tr>
                            <td>{{$referral->userRef}}</td>
                            <td>{{$referral->name}}</td>
                            <td>{{$referral->email}}</td>
                            <td>
                                @switch($referral->status)
                                    @case(1)
                                    <span class="badge badge-success">Active</span>
                                    @break
                                    @default
                                    <span class="badge badge-primary">Inactive</span>
                                    @break
                                @endswitch
                            </td>
                        </tr>
                    @endforeach
                    </tbody>
                    <tfoot>
                    <tr>
                        <th>Reference</th>
                        <th>Name</th>
                        <th>Email</th>
                        <th>Status</th>
                    </tr>
                    </tfoot>
                </table>
            </div>
        </div>
    </div>
@endsection
