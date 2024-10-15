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
                <form method="post" action="{{route('admin.coin.new')}}">
                    @csrf
                    @include('templates.notification')
                    <div class="form-row">

                        <div class="form-group col-md-6">
                            <label for="inputEmail4">Name</label>
                            <input type="text" class="form-control" id="inputEmail4" placeholder="Name"
                                   name="name">
                        </div>
                        <div class="form-group col-md-6">
                            <label for="inputEmail4">Asset</label>
                            <input type="text" class="form-control" id="inputEmail4" placeholder="Asset"
                                   name="asset">
                        </div>
                        <div class="form-group col-md-6">
                            <label for="inputEmail4">Wallet Address</label>
                            <input type="text" class="form-control" id="inputEmail4" placeholder="Address"
                                   name="address">
                        </div>

                        <div class="form-group col-md-6">
                            <label for="inputAddress">Status</label>
                            <select type="text" class="form-control" id="inputAddress"
                                    name="status">
                                <option value="">Select Status</option>
                                <option value="1" >Active</option>
                                <option value="2" >Inactive</option>
                            </select>
                        </div>
                    </div>
                    <div class="text-center">
                        <button type="submit" class="btn btn-primary">Add</button>
                    </div>
                </form>
            </div>
        </div>
    </div>

@endsection
