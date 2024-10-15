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
                    <a href="{{route('admin.package.create')}}" class="btn btn-primary">Add New</a>
                </div>
                <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                    <thead>
                    <tr>
                        <th>Name</th>
                        <th>Minimum Amount</th>
                        <th>Maximum Amount</th>
                        <th>Roi</th>
                        <th>Duration</th>
                        <th>Return Type</th>
                        <th>Number of Returns</th>
                        <th>Status</th>
                        <th>Action</th>
                    </tr>
                    </thead>
                    <tbody>
                    @foreach($packages as $package)
                        @inject('option','App\Defaults\Custom')
                        <tr>
                            <td>{{$package->name}}</td>
                            <td>{{number_format($package->minAmount,2)}}</td>
                            <td>
                                @if($package->isUnlimited !=1)
                                    {{number_format($package->maxAmount,2)}}
                                @else
                                    Unlimited
                                @endif
                            </td>
                            <td>{{number_format($package->roi,2)}}</td>
                            <td>{{$package->Duration}}</td>
                            <td>{{$option->getReturnType($package->returnType)}}</td>
                            <td>{{$package->numberOfReturns}}</td>
                            <td>
                                @switch($package->status)
                                    @case(1)
                                    <span class="badge badge-success">Active</span>
                                    @break
                                    @default
                                        <span class="badge badge-danger">Inactive</span>
                                    @break
                                @endswitch
                            </td>
                            <td>
                                <a href="{{route('admin.package.edit',['id'=>$package->id])}}"
                                   class="btn btn-primary" style="margin-bottom: 5px;">
                                    <i class="fa fa-pencil"></i> Edit
                                </a>
                                <a href="{{route('admin.package.delete',['id'=>$package->id])}}"
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
                        <th>Minimum Amount</th>
                        <th>Maximum Amount</th>
                        <th>Roi</th>
                        <th>Duration</th>
                        <th>Return Type</th>
                        <th>Number of Returns</th>
                        <th>Status</th>
                        <th>Action</th>
                    </tr>
                    </tfoot>
                </table>
            </div>
        </div>
    </div>

@endsection
