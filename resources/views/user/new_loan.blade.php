@extends('user.base')

@section('content')

    <div class="row">
        <div class="col-xl-7 mx-auto">
            {{--            <h6 class="mb-0 text-uppercase">{{$pageName}}</h6>--}}
            <hr/>
            <div class="card border-top border-0 border-4 border-primary">
                <div class="card-body p-5">
                    <div class="card-title d-flex align-items-center">
                        <div><i class="bx bxs-user me-1 font-22 text-primary"></i>
                        </div>
                        <h5 class="mb-0 text-primary">
                            Loan Application Form
                        </h5>
                    </div>
                    <hr>
                    <form class="row g-3" method="post" action="{{route('loan.new')}}" enctype="multipart/form-data">
                        @csrf
                        @include('templates.notification')
                        <div class="form-group col-md-12">
                            <label for="inputAddress2">Name</label>
                            <input type="text" class="form-control form-control-lg" id="inputAddress2"
                                   placeholder="Enter Name" name="name" value="{{$user->name}}" disabled>
                        </div>

                        <div class="form-group col-md-12">
                            <label for="inputAddress2">Email</label>
                            <input type="text" class="form-control form-control-lg" id="inputAddress2"
                                   placeholder="Enter email" name="email" value="{{$user->email}}" disabled>
                        </div>

                        <div class="form-group col-md-12">
                            <label for="inputAddress2">phone</label>
                            <input type="text" class="form-control form-control-lg" id="inputAddress2"
                                   placeholder="Enter phone" name="phone" value="{{$user->phone}}" disabled>
                        </div>

                        <div class="form-group col-md-12">
                            <label for="inputAddress2">Address</label>
                            <input type="text" class="form-control form-control-lg" id="inputAddress2"
                                   placeholder="Enter Address" name="address" value="{{$user->address}}">
                        </div>

                        <div class="form-group col-md-12">
                            <label for="inputAddress2">Amount Requested ($)</label>
                            <input type="number" class="form-control form-control-lg" id="inputAddress2"
                                   placeholder="Enter Amount" name="amount">
                        </div>
                        <div class="form-group col-md-12">
                            <label for="inputAddress2">Request Date of Fund</label>
                            <input type="date" class="form-control form-control-lg" id="inputAddress2"
                                    name="dateRequest">
                        </div>
                        <div class="form-group col-md-12">
                            <label for="inputAddress2">Expected Date to collect Loan</label>
                            <input type="date" class="form-control form-control-lg" id="inputAddress2"
                                   name="collectionDate">
                        </div>
                        <div class="form-group col-md-12">
                            <label for="inputAddress2">Purpose of Fund</label>
                            <textarea class="form-control form-control-lg" id="inputAddress2"
                                      name="purpose" rows="2"></textarea>
                        </div>

                        <div class="form-group col-md-12">
                            <label for="inputAddress2">Signature</label>
                            <input type="file" class="form-control form-control-lg" id="inputAddress2"
                                      name="signature"/>
                            <small>Sign your signature on a clean paper and upload.</small>
                        </div>

                        <div class="text-center">
                            <button type="submit" class="btn btn-primary">Apply Now</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>

@endsection
