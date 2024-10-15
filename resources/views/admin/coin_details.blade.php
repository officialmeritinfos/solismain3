@extends('admin.base')

@section('content')

    <!-- DataTales Example -->
    <div class="card">
        <div class="card-header py-3">
            <h6 class="m-0 font-weight-bold text-primary">
                {{$pageName}}
            </h6>
        </div>
        <div class="card-body row">
            <div class="col-md-12 mx-auto">
                <form method="post" action="{{route('admin.coin.update')}}">
                    @csrf
                    @include('templates.notification')
                    <div class="form-row">
                        <div class="form-group col-md-6" style="display: none;">
                            <label for="inputEmail4">Id</label>
                            <input type="text" class="form-control" id="inputEmail4" placeholder="Name"
                                   value="{{$coin->id}}" name="id">
                        </div>
                        <div class="form-group col-md-6">
                            <label for="inputEmail4">Name</label>
                            <input type="text" class="form-control" id="inputEmail4" placeholder="Name"
                                   value="{{$coin->name}}" name="name">
                        </div>
                        <div class="form-group col-md-6">
                            <label for="inputEmail4">Asset</label>
                            <input type="text" class="form-control" id="inputEmail4" placeholder="Name"
                                   value="{{$coin->asset}}" name="asset">
                        </div>
                        <div class="form-group col-md-6">
                            <label for="inputEmail4">Address</label>
                            <input type="text" class="form-control" id="inputEmail4" placeholder="Address"
                                   value="{{$coin->address}}" name="address">
                        </div>
                        <div class="form-group col-md-6">
                            <label for="inputAddress">Status</label>
                            <select type="text" class="form-control" id="inputAddress"
                                    name="status">
                                <option value="">Select Status</option>
                                @if($coin->status ==1)
                                    <option value="1" selected>Active</option>
                                    <option value="2" >Inactive</option>
                                @else
                                    <option value="1" >Active</option>
                                    <option value="2" selected>Inactive</option>
                                @endif
                            </select>
                        </div>
                    </div>
                    <div class="text-center">
                        <button type="submit" class="btn btn-primary">Update</button>
                    </div>
                </form>
            </div>
        </div>
    </div>

@endsection
