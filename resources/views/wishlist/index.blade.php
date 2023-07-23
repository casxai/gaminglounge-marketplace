
<!doctype html>
<html class="no-js" lang="zxx">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="x-ua-compatible" content="ie=edge">
        <title>Gaming Lounge | Marketplace</title>
        <meta name="description" content="">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <!-- Favicon -->
        {{-- <link rel="apple-touch-icon" sizes="180x180" href="/assets/img/apple-touch-icon.png">
        <link rel="icon" type="image/png" sizes="32x32" href="/assets/img/favicon-32x32.png">
        <link rel="icon" type="image/png" sizes="16x16" href="/assets/img/favicon-16x16.png">
        <link rel="manifest" href="/site.webmanifest"> --}}

        <link rel="apple-touch-icon" sizes="180x180" href="/assets/img/apple-touch-icon.png">
        <link rel="icon" type="image/png" sizes="32x32" href="/assets/img/favicon-32x32.png">
        <link rel="icon" type="image/png" sizes="16x16" href="/assets/img/favicon-16x16.png">
        <link rel="manifest" href="/site.webmanifest">
		<!-- all css here -->
        <link rel="stylesheet" href="/assets/css/bootstrap.min.css">
        <link rel="stylesheet" href="/assets/css/magnific-popup.css">
        <link rel="stylesheet" href="/assets/css/animate.css">
        <link rel="stylesheet" href="/assets/css/owl.carousel.min.css">
        <link rel="stylesheet" href="/assets/css/themify-icons.css">
        <link rel="stylesheet" href="/assets/css/pe-icon-7-stroke.css">
        <link rel="stylesheet" href="/assets/css/icofont.css">
        <link rel="stylesheet" href="/assets/css/meanmenu.min.css">
        <link rel="stylesheet" href="/assets/css/bundle.css">
        <link rel="stylesheet" href="/assets/css/style.css">
        <link rel="stylesheet" href="/assets/css/responsive.css">
        <script src="/assets/js/vendor/modernizr-2.8.3.min.js"></script>
    </head>
<style>
    .logo21 {
        width: 200px;
        height: auto;
    }

    .order-button-payment a {
                background: #464646 none repeat scroll 0 0;
                border: medium none;
                color: #fff;
                font-size: 17px;
                font-weight: 600;
                height: 50px;
                margin: 20px 0 0;
                padding: 0;
                text-transform: uppercase;
                transition: all 0.3s ease 0s;
                width: 100%;
                border: 1px solid transparent;
                cursor: pointer;
            }
</style>
    <body>
        <!--[if lt IE 8]>
        <p class="browserupgrade">You are using an <strong>outdated</strong> browser. Please <a href="http://browsehappy.com/">upgrade your browser</a> to improve your experience.</p>
        <![endif]-->
        <!-- header start -->
        <header>
            <div class="header-top-furniture wrapper-padding-2 res-header-sm">
                <div class="container-fluid">
                    <div class="header-bottom-wrapper pr-200 pl-100">
                        <div class="logo-2 furniture-logo ptb-15">
                            <a href="{{url('/')}}">
                                <img class="logo21"src="/assets/img/logo/logo-pink.png" alt="">
                            </a>
                        </div>
                        <div class="menu-style-2 furniture-menu menu-hover">
                            <nav>
                                <ul>
                                    <li><a href="{{ url('/') }}">home</a>

                                    </li>
                                    <li><a href="#">pages</a>
                                        <ul class="single-dropdown">
                                            <li><a href="about-us.html">about us</a></li>
                                            <li><a href="{{ route('logout') }}">logout</a></li>
                                            <li><a href="wishlist.html">wishlist</a></li>
                                            <li><a href="contact.html">contact</a></li>
                                        </ul>
                                    </li>
                                    <li><a href="shop.html">shop</a>

                                    </li>

                                    <li><a href="contact.html">contact</a></li>
                                </ul>
                            </nav>
                        </div>
                        {{-- <div class="header-cart">
                            <a class="icon-cart-furniture" href="#">
                                <i class="ti-shopping-cart"></i>
                                <span class="shop-count-furniture green">02</span>
                            </a>
                            <ul class="cart-dropdown">
                                @php
                                $cartItems = \Cart::session(auth()->id())->getContent();
                                @endphp
                                @foreach ($cartItems as $item)
                                    <li class="single-product-cart">
                                        <div class="cart-img">
                                            <a href="#"><img src="/assets/img/cart/1.jpg" alt=""></a>
                                        </div>
                                        <div class="cart-title">
                                            <h5><a href="{{$item->game_name}}"></a></h5>
                                            <h6><a href="${{number_format($item->price / 1.05, 2)}}"></a></h6>
                                            <span>{{number_format($item->price / 1.05, 2)}}</span>
                                        </div>
                                        <div class="cart-delete">
                                            <a href="{{ route('cart.destroy', $item->id) }}"><i class="ti-trash"></i></a>
                                        </div>
                                    </li>
                                @endforeach

                                <li class="cart-btn-wrapper">
                                    <a class="cart-btn btn-hover" href="{{ route('cart.index') }}">view favorites</a>

                                </li>
                            </ul>
                        </div> --}}
                    </div>

                </div>
            </div>
            <div class="header-bottom-furniture wrapper-padding-2 border-top-3">
                <div class="container-fluid">

                </div>
            </div>
        </header>
        <!-- header end -->
		<div class="breadcrumb-area pt-70 pb-150" >
            <div class="container">
                <div class="breadcrumb-content text-center">
                    @yield('content')
                </div>
            </div>
        </div>


		<footer class="footer-area">
            <div class="footer-top-area bg-img pt-105 pb-65" style="background-image: url(assets/img/bg/1.jpg)" data-overlay="9">
                <div class="container">
                    <div class="row">
                        <div class="col-xl-4 col-md-3">
                            <div class="footer-widget mb-40">
                                <h3 class="footer-widget-title">Custom Service</h3>
                                <div class="footer-widget-content">
                                    <ul>
                                        {{-- <li><a href="register.html">My Account</a></li>
                                        <li><a href="{{ route('logout') }}">Logout</a></li> --}}
                                        <li><a href="#">Support</a></li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                        <div class="col-xl-4 col-md-3">
                            <div class="footer-widget mb-40">
                                <h3 class="footer-widget-title">Categories</h3>
                                <div class="footer-widget-content">
                                    <ul>
                                        <li><a href="{{route('listings.search')}}">Action</a></li>
                                        <li><a href="{{route('listings.search')}}">Strategy</a></li>
                                        <li><a href="{{route('listings.search')}}">Role Playing</a></li>
                                        <li><a href="{{route('listings.search')}}">Battle Royale</a></li>
                                        <li><a href="{{route('listings.search')}}">Open World</a></li>
                                        <li><a href="{{route('listings.search')}}">Adventure</a></li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                        <div class="col-xl-4 col-md-6">
                            <div class="footer-widget mb-40">
                                <h3 class="footer-widget-title">Contact</h3>
                                <div class="footer-newsletter">
                                    <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum is dummy.</p>
                                    <div id="mc_embed_signup" class="subscribe-form pr-40">
                                        <form action="http://devitems.us11.list-manage.com/subscribe/post?u=6bbb9b6f5827bd842d9640c82&amp;id=05d85f18ef" method="post" id="mc-embedded-subscribe-form" name="mc-embedded-subscribe-form" class="validate" target="_blank" novalidate>
                                            <div id="mc_embed_signup_scroll" class="mc-form">
                                                <input type="email" value="" name="EMAIL" class="email" placeholder="Enter Your E-mail" required>
                                                <!-- real people should not fill this in and expect good things - do not remove this or risk form bot signups-->
                                                <div class="mc-news" aria-hidden="true">
                                                    <input type="text" name="b_6bbb9b6f5827bd842d9640c82_05d85f18ef" tabindex="-1" value="">
                                                </div>
                                                <div class="clear">
                                                    <input type="submit" value="Subscribe" name="subscribe" id="mc-embedded-subscribe" class="button">
                                                </div>
                                            </div>
                                        </form>
                                    </div>
                                    <div class="footer-contact">
                                        <p><span><i class="ti-location-pin"></i></span> Quezon City, Philippines </p>
                                        <p><span><i class=" ti-headphone-alt "></i></span> +88 (015) 609735 or +88 (012) 112266</p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="footer-bottom black-bg ptb-20">
                <div class="container">
                    <div class="row">
                        <div class="col-12 text-center">
                            <div class="copyright">
                                <p>
                                    Copyright ©
                                    <a href="https://hastech.company/">GLTech</a> 2023 . All Right Reserved.
                                </p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </footer>
		<!-- modal -->






		<!-- all js here -->

        <script src="/assets/js/vendor/jquery-1.12.0.min.js"></script>
        <script src="/assets/js/popper.js"></script>
        <script src="/assets/js/bootstrap.min.js"></script>
        <script src="/assets/js/jquery.magnific-popup.min.js"></script>
        <script src="/assets/js/isotope.pkgd.min.js"></script>
        <script src="/assets/js/imagesloaded.pkgd.min.js"></script>
        <script src="/assets/js/jquery.counterup.min.js"></script>
        <script src="/assets/js/waypoints.min.js"></script>
        <script src="/assets/js/ajax-mail.js"></script>
        <script src="/assets/js/owl.carousel.min.js"></script>
        <script src="/assets/js/plugins.js"></script>
        <script src="/assets/js/main.js"></script>
    </body>
</html>

