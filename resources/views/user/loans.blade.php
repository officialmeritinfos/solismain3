@extends('user.base')

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
                        <th>Reference</th>
                        <th>Amount</th>
                        <th>Purpose</th>
                        <th>Date Requested</th>
                        <th>Status</th>
                    </tr>
                    </thead>
                    <tbody>
                    @foreach($loans as $loan)
                        <tr>
                            <td>{{$loan->reference}}</td>
                            <td>${{number_format($loan->amount,2)}}</td>
                            <td>{{$loan->purpose}}</td>
                            <td>{{$loan->created_at}}</td>
                            <td>
                                @switch($loan->status)
                                    @case(1)
                                    <span class="text-success">Paid Back</span>
                                    @break
                                    @case(2)
                                    <span class="text-info">Pending</span>
                                    @break
                                    @case(3)
                                    <span class="text-danger">Cancelled</span>
                                    @break
                                    @default
                                    <span class="text-dark">Approved</span>
                                    @break
                                @endswitch
                            </td>
                        </tr>
                    @endforeach
                    </tbody>
                    <tfoot>
                    <tr>
                        <th>Reference</th>
                        <th>Amount</th>
                        <th>Purpose</th>
                        <th>Date Requested</th>
                        <th>Status</th>
                    </tr>
                    </tfoot>
                </table>

                {{$loans->links()}}
            </div>
        </div>
    </div>

@endsection
