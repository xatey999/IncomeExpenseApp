@extends('layouts.app')

@section('content')
<div class="app-main">

    <style>
        label {
            font-size: 1.1rem;
            font-weight: 600;
        }
    </style>
    <div class="app-main__outer">
        <div class="row">
            <div class="col-md-12">
                <div class="main-card mb-3 card">
                    <div class="card-body">
                        <div class="card-title">Edit Users details</div>
                        <hr />
                        <form class="" method="post" action="/update/{{$userData->id}}}" enctype="multipart/form-data">
                            @csrf
                            <div class="row">

                                <div class="position-relative form-group col-6"><label for="description" class="">Description</label><input name="description" id="description" value="{{$userData->description}}" placeholder="full-name" type="text" class="form-control" value="{{ $userData->description}}" wfd-id="id4">
                                </div>



                                <div class="position-relative form-group col-6"><label for="amount" class="">Amount</label><input name="amount" id="amount" value="{{$userData->amount}}" placeholder="Email" type="text" class="form-control" value="{{ $userData->amount}}" wfd-id="id4">
                                </div>

                                <div class="position-relative form-group col-6"><label for="type" class="">Type</label><input name="type" id="type" value="{{$userData->type}}" placeholder="type" type="type" class="form-control" value="{{ $userData->type}}" wfd-id="id4">
                                </div>

                                <div class="position-relative form-group col-6"><label for="transaction_date" class="">Transaction Date</label><input name="transaction_date" id="transaction_date" value="{{$userData->transaction_date}}" placeholder="Transaction Date" type="date" class="form-control" value="{{ $userData->transaction_date}}" wfd-id="id4">
                                </div>
                            </div>
                            <br>
                            <br>

                            <div class="col-md-8">
                                <button class="btn btn-primary col-6">Submit</button>
                            </div>
                        </form>
                    </div>
                </div>

            </div>
        </div>

        @endsection