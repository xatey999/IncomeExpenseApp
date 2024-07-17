@extends('layouts.app')

@section('content')
<!-- <script src="https://cdnjs.cloudflare.com/ajax/libs/Chart.js/2.5.0/Chart.min.js"></script> -->
<div class="app-main row">

    <div class="app-main__outer col-md-10">

        <table class="mb-1 table table-bordered">
            <thead>
                <tr>
                    <th>S.N</th>
                    <th>Description<i class="fa-solid fa-heading"></i></th>
                    <th>Amount<i class="fa-solid fa-phone"></i></th>
                    <th>Type<i class="fa-solid fa-envelope"></i></th>
                    <th>Date<i class="fa-regular fa-star"></i></th>
                    <th>Action</th>
                </tr>
            </thead>
            <tbody>
                @php
                $counterVar = 1;
                @endphp
                @foreach ($userData as $userData)
                <tr>
                    <th>
                        @php
                        echo $counterVar;
                        @endphp
                    </th>
                    <!-- <td>{{ $userData->id }}</td> -->
                    <td>{{ $userData->description }}</td>
                    <td>{{ $userData->amount }}</td>
                    <td>{{ $userData->type }}</td>
                    <td>{{ $userData->transaction_date }}</td>


                    <td>
                        <a href="{{ route('transaction.edit', ['id' => $userData->id]) }}" class="btn btn-primary btn-lg" style="font-size: 1.1rem;">
                            <i class="fa-solid fa-pen"></i> Edit</a>
                        <a href="" class="btn btn-danger btn-lg show_confirm " onclick="return confirm('Are you sure you want to delete this?');" style="font-size: 1.1rem;">

                            <i class="fa-solid fa-trash"></i> Remove</a>
                    </td>
                </tr>
                @php
                $counterVar++;
                @endphp
                @endforeach
            </tbody>
        </table>
    </div>

    @endsection