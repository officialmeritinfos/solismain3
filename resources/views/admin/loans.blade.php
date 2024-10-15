@extends('admin.base')

@section('content')

    <!-- DataTales Example -->
    <div class="card shadow mb-4">
        <div class="card-header py-3">
            <h6 class="m-0 font-weight-bold text-primary">List</h6>
        </div>
        <div class="card-body">
            <div class="table-responsive">
                <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                    <thead>
                    <tr>
                        <th>User</th>
                        <th>Reference</th>
                        <th>Amount</th>
                        <th>Purpose</th>
                        <th>Date Initiated</th>
                        <th>Status</th>
                        <th>Action</th>
                    </tr>
                    </thead>
                    <tbody>
                    @foreach($loans as $loan)
                        @inject('option','App\Defaults\Custom')
                        <tr>
                            <td>{{$option->getInvestor($loan->user)}}</td>
                            <td>{{$loan->reference}}</td>
                            <td>{{number_format($loan->amount,2)}}</td>
                            <td>{{$loan->purpose}}</td>
                            <td>{{$loan->created_at}}</td>
                            <td>
                                @switch($loan->status)
                                    @case(1)
                                    <span class="badge badge-success">Paid Back</span>
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
                            </td>
                            <td>
                                <a href="{{route('admin.loan_detail',['id'=>$loan->id])}}" class="btn btn-primary">
                                    <i class="fa fa-eye"></i> View Details
                                </a>
                            </td>
                        </tr>
                    @endforeach
                    </tbody>
                    <tfoot>
                    <tr>
                        <th>User</th>
                        <th>Reference</th>
                        <th>Amount</th>
                        <th>Purpose</th>
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
