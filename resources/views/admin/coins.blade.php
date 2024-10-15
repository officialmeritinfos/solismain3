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
                    <a href="{{route('admin.coin.create')}}" class="btn btn-primary">Add New</a>
                </div>
                <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                    <thead>
                    <tr>
                        <th>Name</th>
                        <th>Asset</th>
                        <th>Address</th>
                        <th>Status</th>
                        <th>Action</th>
                    </tr>
                    </thead>
                    <tbody>
                    @foreach($coins as $coin)
                        @inject('option','App\Defaults\Custom')
                        <tr>
                            <td>{{$coin->name}}</td>
                            <td>{{$coin->asset}}</td>
                            <td>{{$coin->address}}</td>
                            <td>
                                @switch($coin->status)
                                    @case(1)
                                    <span class="badge badge-success">Active</span>
                                    @break
                                    @default
                                    <span class="badge badge-danger">Inactive</span>
                                    @break
                                @endswitch
                            </td>
                            <td>
                                <a href="{{route('admin.coin.edit',['id'=>$coin->id])}}"
                                   class="btn btn-primary" style="margin-bottom: 5px;">
                                    <i class="fa fa-pencil"></i> Edit
                                </a>
                                <a href="{{route('admin.coin.delete',['id'=>$coin->id])}}"
                                   class="btn btn-danger">
                                    <i class="fa fa-pencil"></i> Delete
                                </a>
                            </td>
                        </tr>
                    @endforeach
                    </tbody>
                    <tfoot>
                    <tr>
                        <th>Name</th>
                        <th>Asset</th>
                        <th>Address</th>
                        <th>Status</th>
                        <th>Action</th>
                    </tr>
                    </tfoot>
                </table>
            </div>
        </div>
    </div>

@endsection
