@extends('layouts.front')

@section('content')

@include('_category')

        <div class="electro-product-wrapper wrapper-padding pb-45">
            <div class="container-fluid">
                <div class="section-title-4 text-center mb-40">
                    <h2>Listings</h2>
                </div>
                <div class="top-product-style">
                    {{-- planning to make this "top seller" --}}
                    {{-- <div class="product-tab-list3 text-center mb-80 nav product-menu-mrg" role="tablist">
                        <a class="active" href="#electro1" data-toggle="tab" role="tab">
                            <h4>Fiction </h4>
                        </a>
                        <a href="#electro2" data-toggle="tab" role="tab">
                            <h4>Satire </h4>
                        </a>
                        <a href="#electro3" data-toggle="tab" role="tab">
                            <h4>Anthologies</h4>
                        </a>
                    </div>  --}}
                    {{-- <div class="tab-content"> --}}
                    <div>
                        <div id="electro1">
                            <div class="custom-row-2">

                                {{-- landing page --}}

                                @foreach ($listings as $listing)
                                    @include('listings._single_listings')
                                @endforeach

                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

@endsection
