@extends('layouts.app')

@section('content')
<!-- <script src="https://cdnjs.cloudflare.com/ajax/libs/Chart.js/2.5.0/Chart.min.js"></script> -->
<div class="app-main">

    <div class="app-main__outer">

        <table class="mb-0 table table-bordered">
            <thead>
                <tr>
                    <th>S.N</th>
                    <th>Owner ID <i class="fa-solid fa-user"></i></th>
                    <th>Title <i class="fa-solid fa-heading"></i></th>
                    <th>Phone number <i class="fa-solid fa-phone"></i></th>
                    <th>Email <i class="fa-solid fa-envelope"></i></th>
                    <th>Rating <i class="fa-regular fa-star"></i></th>
                    <th>Status <i class="fa-regular fa-flag"></i></th>
                    <th>Action</th>
                </tr>
            </thead>
            <tbody>
                @php
                $counterVar = 1;
                @endphp
                @foreach ($hotelownerData as $hotelownerData)
                <tr>
                    <th>
                        @php
                        echo $counterVar;
                        @endphp
                    </th>
                    <th><img src="/images/hotel/{{$hotelownerData->photos }}" style="width: 110px; object-fit: cover; height: 100px;"></th>
                    <td>{{ $hotelownerData->user_id }}</td>
                    <td>{{ $hotelownerData->title }}</td>
                    <td>{{ $hotelownerData->phone_number }}</td>
                    <td>{{ $hotelownerData->email }}</td>
                    <td>{{ $hotelownerData->rating }}</td>


                    <td>
                        <a href="" class="btn btn-primary btn-lg" style="font-size: 1.1rem;">
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