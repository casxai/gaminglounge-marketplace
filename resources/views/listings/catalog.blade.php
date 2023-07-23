@extends('layouts.front')

@section('content')



        <div class="shop-page-wrapper shop-page-padding ptb-100">
            <div class="container-fluid">
                <div class="row">
                    <div class="col-lg-3">
                        <div class="shop-sidebar mr-50">
                            <div class="sidebar-widget mb-50">
                                <h3 class="sidebar-title">Search Products</h3>
                                <div class="sidebar-search">
                                    <form action="{!! route('listings.search') !!}" method="GET">
                                        <input name="query" placeholder="Search Products..." type="text">
                                        <button type=submit><i class="ti-search"></i></button>
                                    </form>
                                </div>
                            </div>


                            <div class="sidebar-widget mb-45">
                                <h3 class="sidebar-title">Categories</h3>
                                <div class="sidebar-categories">
                                    <ul>
                                        <li><a href="{{route('listings.search')}}">Third Person Shooter <span>4</span></a></li>
                                        <li><a href="{{route('listings.search')}}">Strategy <span>9</span></a></li>
                                        <li><a href="{{route('listings.search')}}">Battle Royale <span>5</span> </a></li>
                                        <li><a href="{{route('listings.search')}}">Moba<span>3</span></a></li>
                                        <li><a href="{{route('listings.search')}}">Tower Defense<span>4</span></a></li>
                                    </ul>
                                </div>
                            </div>


                        </div>
                    </div>
                    <div class="col-lg-9">
                        <div class="shop-product-wrapper res-xl">
                            <div class="shop-bar-area">
                                <div class="shop-bar pb-60">
                                    <div class="shop-found-selector">
                                        <div class="shop-found">
                                            <p><span>{{$listings->total()}}</span> Listings Found</p>
                                        </div>

                                    </div>
                                </div>
                                <div class="shop-product-content tab-content">

                                    <div id="grid-sidebar3" class="tab-pane fade active show">
                                        <div class="row">

                                            @foreach ($listings as $listing)
                                                @include('listings._single_listings')
                                            @endforeach

                                        </div>
                                    </div>

                                    {{-- <div id="grid-sidebar4" class="tab-pane fade">

                                            @foreach ($listings as $listing)

                                                <div class="col-lg-12 col-xl-6">
                                                    <div class="product-wrapper mb-30 single-product-list product-list-right-pr mb-60">
                                                        <div class="product-img list-img-width">
                                                            <a href="#">
                                                                <img src="/assets/img/product/fashion-colorful/1.jpg" alt="">
                                                            </a>
                                                            <span>hot</span>
                                                            <div class="product-action-list-style">
                                                                <a class="animate-right" title="Quick View" data-toggle="modal" data-target="#exampleModal" href="#">
                                                                    <i class="pe-7s-look"></i>
                                                                </a>
                                                            </div>
                                                        </div>
                                                        <div class="product-content-list">
                                                            <div class="product-list-info">
                                                                <h4><a href="#"> Dagger Smart Trousers </a></h4>
                                                                <span>$150.00</span>
                                                                <p>Lorem ipsum dolor sit amet, mana consectetur adipisicing elit, sed do eiusmod tempor labore. </p>
                                                            </div>
                                                            <div class="product-list-cart-wishlist">
                                                                <div class="product-list-cart">
                                                                    <a class="btn-hover list-btn-style" href="#">add to cart</a>
                                                                </div>
                                                                <div class="product-list-wishlist">
                                                                    <a class="btn-hover list-btn-wishlist" href="#">
                                                                        <i class="pe-7s-like"></i>
                                                                    </a>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>

                                                </div>

                                            @endforeach

                                    </div> --}}
                                </div>
                            </div>

                        </div>
                        {{$listings->appends(['query'=>request('query')])->render()}}
                </div>
            </div>
        </div>
    </div>
@endsection
