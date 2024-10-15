@extends('user.base')

@section('content')
    <div class="row">
        <div class="col-12">
            <div class="card">
                <div class="card-body px-2">
                    <h4 class="card-title"></h4>
                    @include('templates.notification')
                    <div class="modal fade" id="trns" tabindex="-1" role="dialog" aria-labelledby="trns" aria-hidden="true">
                        <div class="modal-dialog" role="document">
                            <div class="modal-content">
                                <div class="modal-body text-center">
                                    <form  method="post" action="{{route('wallet.add')}}">
                                        @csrf
                                        <div class="form-group">
                                            <label for="recipient-name" class="col-form-label">Choose Wallet Type <span class="text-danger">*</span></label>
                                            <select name="coin" class="form-control">
                                                <option label="Choose Wallet Type"></option>
                                                @foreach($coins as $coin)
                                                    <option value="{{$coin->asset}}">{{$coin->name}}</option>
                                                @endforeach
                                            </select>

                                        </div>
                                        <div class="form-group">
                                            <label for="message-text" class="col-form-label">Enter Your Wallet Address <span class="text-danger">*</span></label>
                                            <input type="text" placeholder="Wallet Address" name="address"
                                                   class="form-control" >
                                        </div>
                                        <div class="text-center">
                                            <button class="btn btn-success" type="submit"
                                                    name="add_wallet">Add Wallet</button>
                                            <button type="button" class="btn btn-outline-warning"
                                                    data-dismiss="modal" aria-label="Close">Cancel</button>

                                        </div>
                                    </form>

                                </div>

                            </div>
                        </div>
                    </div>

                    <div class="form-group text-center">
                        <label class="form-control-label"><span class="tx-warning">Please add a wallet address where to receive your withdrawal </span></label>
                        <br><a href="#" class="btn btn-outline-primary" data-toggle="modal" data-target="#trns"><i class="fa fa-plus mg-r-5"></i> Add Wallet</a>
                    </div>

                    <table class="table table-striped">
                        <tbody>
                        @foreach($wallets as $wallet)
                            <tr>
                                <td >
                                    <h5 class="text-dark">
                                        <b>
                                            {{$wallet->coin}}
                                        </b>
                                    </h5>
                                    <p class="mt-minus-5">
                                        {{$wallet->address}}
                                    </p>

                                </td>

                                <div id="w{{$wallet->id}}" class="modal fade">
                                    <div class="modal-dialog modal-md" role="document">
                                        <div class="modal-content bd-0 rounded overflow-hidden">
                                            <div class="modal-body pd-0">
                                                <div class="">
                                                    <!-- col-6 -->
                                                    <div class=" bg-gray-900">
                                                        <div class="pd-y-30 pd-xl-x-30">

                                                            <div class="pd-x-30 pd-y-10">
                                                                <h3 class="tx-gray-300 tx-normal mg-b-5">Delete?</h3>
                                                                <p>Are you sure to delete <b class="tx-danger">
                                                                        {{$wallet->name}} - {{$wallet->address}}
                                                                    </b> Wallet?</p>
                                                                <br>
                                                                <form method="post" action="{{route('wallet.delete')}}">
                                                                    @csrf
                                                                    <input type="hidden" value="{{$wallet->id}}" name="id">
                                                                    <button class="btn btn-danger btn-block"
                                                                            type="submit" name="del_wallet">Delete</button>
                                                                </form>
                                                                <div class="form-group mt-4">
                                                                    <button type="button"
                                                                            class="btn btn-outline-warning btn-block"
                                                                            data-dismiss="modal"
                                                                            aria-label="Close">Cancel</button>
                                                                </div><!-- form-group -->
                                                            </div>

                                                        </div><!-- pd-20 -->
                                                    </div><!-- col-6 -->
                                                </div><!-- row -->
                                            </div><!-- modal-body -->
                                        </div><!-- modal-content -->
                                    </div><!-- modal-dialog -->
                                </div>

                                <td class="text-right">
                                    <button type="button" class="btn btn-outline-danger btn-xs" data-toggle="modal"
                                            data-target="#w{{$wallet->id}}"><i class="fa fa-trash" aria-hidden="true"></i> Delete</button></td>
                            </tr>
                        @endforeach
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>

@endsection
