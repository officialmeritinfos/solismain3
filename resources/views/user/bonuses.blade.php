@extends('user.base')

@section('content')

    <!-- DataTales Example -->
    <div class="card shadow mb-4">
        <div class="card-header py-3">
            <h6 class="m-0 font-weight-bold text-primary">List</h6>
        </div>
        <div class="card-body">
            @include('templates.notification')
            <div class="table-responsive">
                <table class="table table-bordered text-white" id="dataTable" width="100%" cellspacing="0">
                    <thead>
                    <tr>
                        <th>Amount</th>
                        <th>Type</th>
                        <th>Date Received</th>
                        <th>Status</th>
                    </tr>
                    </thead>
                    <tbody>
                    @foreach($bonuses as $bonus)
                        <tr>
                            <td>{{number_format($bonus->amount,2)}}</td>
                            <td>
                                @switch($bonus->type)
                                    @case(1)
                                    <span class="text-success">Referral Bonus</span>
                                    @break
                                    @default
                                    <span class="text-warning">Platform Bonus</span>
                                    @break
                                @endswitch
                            </td>
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
                {{$bonuses->links()}}
            </div>
        </div>
    </div>

@endsection
