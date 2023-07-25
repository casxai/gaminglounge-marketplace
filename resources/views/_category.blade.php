<div class="pl-200 pr-200 overflow clearfix">

    <div class="categori-menu-slider-wrapper clearfix">
        <div class="categories-menu">
            <div class="category-heading">
                <h3> All categories <i class="pe-7s-angle-down"></i></h3>
            </div>
            <div class="category-menu-list">
                <ul>

                    @foreach ($categories as $category)
                        <li>
                            <a href="{{ route('listings.index', ['category_id' => $category->id]) }}">
                                {{ $category->name }}<i class="pe-7s-angle-right"></i></a>
                            @php

                                $children = $category->children
                            @endphp

                            @if ($children->isNotEmpty())
                                <div class="category-menu-dropdown">

                                    @foreach ($children as $child)
                                        <div class="category-dropdown-style category-common3">
                                            <h4 class="categories-subtitle">
                                                <a
                                                    href="{{ route('listings.index', ['category_id' => $child->id]) }}">{{ $child->name }}</a>
                                            </h4>
                                            @php
                                                $grandChild = $child->children
                                            @endphp
                                            @if ($grandChild->isNotEmpty())
                                                <ul>
                                                    @foreach ($grandChild as $c)
                                                        <li><a
                                                                href="{{ route('listings.index', ['category_id' => $c->id]) }}">{{ $c->name }}</a>
                                                        </li>
                                                    @endforeach
                                                </ul>
                                            @endif
                                        </div>
                                    @endforeach

                                </div>
                            @endif
                        </li>
                    @endforeach
                </ul>

            </div>
        </div>
        <div class="menu-slider-wrapper">



                    <div class="single-slider single-slider-hm3 bg-img pt-0 pb-0"
                    >
                                        <video autoplay muted loop style="width: 100%; height: 500px; object-fit: cover;">
                                            <source src="/assets/video/landin-page-video.mp4" type="video/mp4">
                                        </video>
                        <div class="slider-animation slider-content-style-3 fadeinup-animated" style="position: absolute; top:40%; ">

                            <h2 class="animated" style="color:aliceblue">Power up<br>your gameplay</h2>
                            <h4 style="color:aliceblue"class="animated">Ready-to-Play Accounts </h4>
                            <a class="electro-slider-btn btn-hover" href="{!! route('listings.search') !!}">CHECK ACCOUNTS</a>

                    </div>
                </div>
            </div>

    </div>
</div>
