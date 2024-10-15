@extends('admin.base')

@section('content')

    <!-- DataTales Example -->
    <div class="card shadow mb-4">
        <div class="card-header py-3">
            <h6 class="m-0 font-weight-bold text-primary">List</h6>
        </div>
        <div class="card-body">
            @include('templates.notification')
            <div class="table-responsive">
                <div class="text-center">
                    <a href="{{route('admin.investor.inactive')}}" class="btn btn-outline-warning">View Deactivated Users</a>
                    <a href="{{route('admin.investor.index')}}" class="btn btn-success">View Active Users</a>
                </div>
                <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                    <thead>
                    <tr>
                        <th>Name</th>
                        <th>Username</th>
                        <th>Email</th>
                        <th>Balance</th>
                        <th>Profit</th>
                        <th>Withdrawals</th>
                        <th>Date Registered</th>
                        <th>Status</th>
                        <th>Action</th>
                    </tr>
                    </thead>
                    <tbody>
                    @foreach($investors as $investor)
                        @inject('option','App\Defaults\Custom')
                        <tr>
                            <td>{{$option->getInvestor($investor->id)}}</td>
                            <td>{{$investor->username}}</td>
                            <td>{{$investor->email}}</td>
                            <td>{{number_format($investor->balance,2)}}</td>
                            <td>{{number_format($investor->profit,2)}}</td>
                            <td>{{number_format($investor->withdrawals,2)}}</td>
                            <td>{{$investor->created_at}}</td>
                            <td>
                                @switch($investor->status)
                                    @case(1)
                                    <span class="badge badge-success">Active</span>
                                    @break
                                    @default
                                    <span class="badge badge-danger">Inactive</span>
                                    @break
                                @endswitch
                            </td>
                            <td>
                                <a href="{{route('admin.investor.detail',['id'=>$investor->id])}}" class="btn btn-primary">
                                    <i class="fa fa-eye"></i> View
                                </a>
                            </td>
                        </tr>
                    @endforeach
                    </tbody>
                    <tfoot>
                    <tr>
                        <th>Name</th>
                        <th>Username</th>
                        <th>Email</th>
                        <th>Balance</th>
                        <th>Profit</th>
                        <th>Withdrawals</th>
                        <th>Date Registered</th>
                        <th>Status</th>
                        <th>Action</th>
                    </tr>
                    </tfoot>
                </table>
            </div>
        </div>
    </div>

@endsection
