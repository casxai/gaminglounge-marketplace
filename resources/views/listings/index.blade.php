@extends('layouts.front')

@section('content')

    <div class="container">
        {{-- clicking category button --}}

        <h2> {{ $categoryName ?? null}} Accounts </h2>

        <div class="custom-row-2">

            @foreach ($listings as $listing)
                @include('listings._single_listings')
            @endforeach

        </div>
    </div>

@endsection
