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
                <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                    <thead>
                    <tr>
                        <th>Investor</th>
                        <th>Reference</th>
                        <th>Amount</th>
                        <th>Asset</th>
                        <th>Address</th>
                        <th>Source</th>
                        <th>Roi</th>
                        <th>Current profit</th>
                        <th>Date Initiated</th>
                        <th>Status</th>
                        <th>Action</th>
                    </tr>
                    </thead>
                    <tbody>
                    @foreach($investments as $investment)
                        @inject('option','App\Defaults\Custom')
                        <tr>
                            <td>{{$option->getInvestor($investment->user)}}</td>
                            <td>{{$investment->reference}}</td>
                            <td>{{number_format($investment->amount,2)}}</td>
                            <td>{{$investment->asset}}</td>
                            <td>{{$investment->wallet}}</td>
                            <td>
                                @switch($investment->source)
                                    @case('profit')
                                        <span class="badge badge-info">Reinvestment From Profit Balance</span>
                                    @break
                                    @default
                                        <span class="badge badge-primary">New Deposit</span>
                                    @break
                                @endswitch
                            </td>
                            <td>{{$investment->roi}}%</td>
                            <td>{{$investment->currentProfit}}</td>
                            <td>{{$investment->created_at}}</td>
                            <td>
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
                            </td>
                            <td>
                                <a href="{{route('admin.invest_detail',['id'=>$investment->id])}}" class="btn btn-primary">
                                    <i class="fa fa-eye"></i> View Details
                                </a>
                            </td>
                        </tr>
                    @endforeach
                    </tbody>
                    <tfoot>
                    <tr>
                        <th>Investor</th>
                        <th>Reference</th>
                        <th>Amount</th>
                        <th>Asset</th>
                        <th>Address</th>
                        <th>Source</th>
                        <th>Roi</th>
                        <th>Current profit</th>
                        <th>Date Initiated</th>
                        <th>Status</th>
                        <th>Action</th>
                    </tr>
                    </tfoot>
                </table>
            </div>
        </div>
    </div>

@endsection
