@extends('layouts.front')


@section('content')
    <div class="product-details pt-50">
        <div class="container">
            <div class="row">
                <div class="col-md-12 col-lg-7 col-12">
                    <div class="product-details-img-content">
                        <div class="product-details-tab mr-25">
                            <div class="product-details-large tab-content">
                                @foreach (json_decode($listing->images, true) as $index => $image)
                                    <div class="tab-pane {{ $index === 0 ? 'active show' : 'fade' }}"
                                        id="pro-details{{ $index + 1 }}" role="tabpanel">
                                        <div class="easyzoom easyzoom--overlay">
                                            <a href="{{ asset('storage/' . $image) }}">
                                                <img src="{{ asset('storage/' . $image) }}" alt="Image">
                                            </a>
                                        </div>
                                    </div>
                                @endforeach
                            </div>
                            <div class="product-details-small nav mt-12"
                                role="tablist"style="
                                flex-wrap: nowrap;">
                                @foreach (json_decode($listing->images, true) as $index => $image)
                                    <a class="{{ $index === 0 ? 'active' : '' }} mr-12"
                                        href="#pro-details{{ $index + 1 }}" data-toggle="tab" role="tab"
                                        aria-selected="true">
                                        <img src="{{ asset('storage/' . $image) }}" alt="Image">
                                    </a>
                                @endforeach
                            </div>

                            <div class="product-details-cati-tag mt-35">
                                <ul>
                                    <li class="categories-title">Categories :</li>
                                    <li><a href="{{ route('listings.search') }}">action</a></li>
                                    <li><a href="{{ route('listings.search') }}">real time strategy</a></li>
                                    <li><a href="{{ route('listings.search') }}">adventure</a></li>
                                    <li><a href="{{ route('listings.search') }}">fPS</a></li>

                                </ul>
                            </div>
                            <div class="product-details-cati-tag mtb-10">
                                <ul>
                                    <li class="categories-title">Tags :</li>
                                    <li><a href="{{ route('listings.search') }}">valorant</a></li>
                                    <li><a href="{{ route('listings.search') }}">apex legends</a></li>
                                    <li><a href="{{ route('listings.search') }}">genshin impact</a></li>
                                    <li><a href="{{ route('listings.search') }}">call of duty</a></li>

                                </ul>
                            </div>
                        </div>
                    </div>

                </div>

                <div class="col-md-12 col-lg-5 col-12">
                    <div class="your-order">
                        <h3>{{ $listing->game_name }}</h3>

                        <div class="details-price">
                            <span>${{ number_format(($listing->price) - ($listing->price * 0.05), 2) }}</span><br>
                            <span style="font-size:15px;">Platform fee: ${{ $listing->price * 0.05 }}</span>
                            <p>{!! $listing->description !!}</p>
                        </div>

                        <div class="quickview-plus-minus">

                            <div class="quickview-btn-cart">
                                <a class="btn-hover-black" href="{{ route('favorite.checkout', ['listing' => $listing->id]) }}">buy now</a>
                            </div>
                            <div class="quickview-btn-wishlist">
                                <a class="btn-hover" href="{{ route('favorite.add', $listing->id) }}"><i
                                        class="pe-7s-like"></i></a>
                            </div>
                        </div>

                    </div>
                </div>
            </div>
        </div>
    </div>

    {{-- reviews section --}}


    @include('listings._reviews')

    <!-- related product area start -->

    @include('listings._related-listing', ['relatedProducts' => $relatedProducts])


@endsection
