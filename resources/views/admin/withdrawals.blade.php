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
                        <th>User</th>
                        <th>Reference</th>
                        <th>Amount</th>
                        <th>Address</th>
                        <th>Asset</th>
                        <th>Date Requested</th>
                        <th>Status</th>
                        <th>Action</th>
                    </tr>
                    </thead>
                    <tbody>
                    @foreach($withdrawals as $withdrawal)
                        @inject('option','App\Defaults\Custom')
                        <tr>
                            <td>{{$option->getInvestor($withdrawal->user)}}</td>
                            <td>{{$withdrawal->reference}}</td>
                            <td>{{number_format($withdrawal->amount,2)}}</td>
                            <td>{{$withdrawal->details}}</td>
                            <td>{{$withdrawal->asset}}</td>
                            <td>{{$withdrawal->created_at}}</td>
                            <td>
                                @switch($withdrawal->status)
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
                                    <span class="badge badge-warning">processing</span>
                                    @break
                                @endswitch
                            </td>
                            <td>
                                <a href="{{route('admin.withdraw.approve',['id'=>$withdrawal->id])}}"
                                   class="btn btn-success btn-sm" style="margin-bottom:5px;">Approve</a>
                                <a href="{{route('admin.withdraw.cancel',['id'=>$withdrawal->id])}}"
                                   class="btn btn-danger btn-sm">Cancel</a>
                            </td>
                        </tr>
                    @endforeach
                    </tbody>
                    <tfoot>
                    <tr>
                        <th>User</th>
                        <th>Reference</th>
                        <th>Amount</th>
                        <th>Address</th>
                        <th>Asset</th>
                        <th>Date Requested</th>
                        <th>Status</th>
                        <th>Action</th>
                    </tr>
                    </tfoot>
                </table>
            </div>
        </div>
    </div>

@endsection
