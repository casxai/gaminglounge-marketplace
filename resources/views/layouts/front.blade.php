<!doctype html>
<html class="no-js" lang="en">

<head>
    <meta charset="utf-8">
    <meta http-equiv="x-ua-compatible" content="ie=edge">
    <title>Gaming Lounge | Marketplace</title>
    <meta name="description" content="">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- Favicon -->
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
    .product-thumbnail img {
        width: 300px; /* Set the desired width for the image */
        height: auto; /* Set the desired height for the image */
        object-fit: cover; /* Maintain the aspect ratio while resizing */
    }
    .logo2 {
        width: 200px;
        height: auto;
        ;
    }

    .submit {
        height: 40px;
    }

    .electronics-login-register>ul>li {
        display: inline-block;
        margin-left: 66px;
        position: relative;
        padding: 0 0 0px;
    }

    .header-contact-info li a:hover,
    .electronics-login-register ul li a:hover {
        color: #f18d8d;
    }

    .header-contact-info {
        padding-top: 8px;
    }

    .header-top-wrapper-2 {
        padding: 8px 0 8px;
        background-color: #111;

    }

    /* .border-bottom-2 {
        border-bottom: 1px solid #ededed;
    } */
    .categories-search-wrapper {
        background-color: transparent;
        border: 1px solid #c8c8c8;
        padding: 10px 30px 10px 15px;
        display: flex;
        border-radius: 5px;
    }

    .categories-wrapper button {
        -moz-border-bottom-colors: none;
        -moz-border-left-colors: none;
        -moz-border-right-colors: none;
        -moz-border-top-colors: none;
        background-color: transparent;
        border-color: currentcolor currentcolor currentcolor #a7a7a7;
        border-image: none;
        border-style: none none none solid;
        border-width: medium medium medium 1px;
        color: #666666;
        cursor: pointer;
        font-size: 14px;
        height: 50px;
        letter-spacing: 1px;
        padding-left: 30px;
        padding-right: 0;
        position: absolute;
        right: 0;
        text-transform: uppercase;
        top: 0;
    }

    .categories-wrapper form input {
        background: transparent none repeat scroll 0 0;
        border: medium none;
        box-shadow: none;
        color: #666666;
        font-size: 14px;
        height: 50px;
        letter-spacing: 1px;
        padding-left: 30px;
        width: 530px;
        padding-right: 100px;
    }

    .electronics-login-register ul li i {
        color: white;
        position: relative;
    }

    .electronics-login-register ul li i {
        color: white;
        position: relative;
    }

    .electronics-login-register ul li a {
        color: white;
        position: relative;
    }

    .electronics-login-register ul li a i {
        color: white;
        position: relative;
    }

    .HomeHero-module--video--Owdmu {
    height: 49rem;
    max-height: 100%;
    width: 100%
    }

    .Video-module--video--eeT76 video {
    height: 100%;
    -o-object-fit: cover;
    object-fit: cover;
    -o-object-position: center;
    object-position: center;
    width: 100%
    }

</style>

<body>

    <header>
        @include('partials._message')

        <div class="header-top-wrapper-2 border-bottom-2"
            style="height:75px;
            width:100%;
            overflow:hidden;
            cursor:pointer">
            <div class="header-info-wrapper pl-200 pr-200 pt-10">

                <div class="header-contact-info">
                    <ul>
                        <li><i class="pe-7s-call"></i> +011 2231 4545</li>
                        <li><i class="pe-7s-mail"></i>gaminglounge@glounge.com</li>
                    </ul>
                </div>
                <div class="electronics-login-register">

                    <ul>
                            @auth
                            <li>
                                @if (auth()->user()->hasRole('seller'))
                                <a href="{{ url('/admin/listings/create') }}"><i class="pe-7s-shopbag" style="color: white"></i>Manage Shop</a>
                                @else
                                <a href="{{ route('shops.create') }}"><i class="pe-7s-shopbag" style="color: white"></i>Become a Seller!</a>
                                @endif

                            </li>
                            @endauth
                            @auth
                            <li>
                                <form action=" {{ route('logout') }} " method="POST">
                                    @csrf
                                    <input class="submit" style="background-color:transparent; border:0px; color:white;"
                                        type="submit" value="Logout" />
                                </form>
                            </li>
                            @else
                            <li>
                                <a href="{{ route('login') }}">Login</a>
                            </li>
                            <li>
                                <a href="{{ route('register') }}">Register</a>
                            </li>
                            @endauth

                        <li><a href="#"><i class="pe-7s-flag"></i>PH</a></li>
                        <li><a class="border-none" href="#"><span style="color: white;">$</span>USD</a></li>
                    </ul>
                </div>
            </div>
        </div>
        <div class="header-bottom pt-40 pb-30 clearfix">
            <div class="header-bottom-wrapper pr-200 pl-200">
                <a href="{{ route('home') }}">
                    <img class="logo2" src="/assets/img/logo/logo-2.png" alt="">
                </a>

                <div class="categories-search-wrapper">
                    <div class="categories-wrapper">
                        <form action="{!! route('listings.search') !!}" method="GET">
                            <input name="query" placeholder="Enter Your key word" type="text">
                            <button type="submit"> Search </button>
                        </form>
                    </div>
                </div>
                <div class="categories-cart same-style">
                    <div class="same-style-icon">
                        <a href="{{ route('favorite.index') }}"><i class="pe-7s-like"></i></a>
                    </div>
                    <div class="same-style-text">

                        <a href="{{ route('favorite.index') }}">
                            @auth
                                {{ Cart::session(auth()->id())->getContent()->count() }}
                            @else
                                0
                            @endauth
                            Favorite<br>
                            Listing</a>
                    </div>
                </div>

                <div class="mobile-menu-area electro-menu d-md-block col-md-12 col-lg-12 col-12 d-lg-none d-xl-none">
                    <div class="mobile-menu">
                        <nav id="mobile-menu-active">
                            <ul class="menu-overflow">
                                <li><a href="{{ url('/') }}">HOME</a>

                                </li>
                                <li><a href="#">BLOG</a>

                                </li>
                                <li><a href="contact.html"> Contact </a></li>
                            </ul>
                        </nav>
                    </div>
                </div>
            </div>
        </div>
    </header>



    @yield('content')

    <footer class="footer-area">
        <div class="footer-top-area bg-img pt-65 pb-20"  data-overlay="9">
            <div class="container">
                <div class="row">
                    <div class="col-xl-4 col-md-3">
                        <div class="footer-widget mb-40">
                            <h3 class="footer-widget-title">my account</h3>
                            <div class="footer-widget-content">
                                <ul>
                                    @auth
                                    <li><a href="{{ route('favorite.index')}}">favorites</a></li>
                                    <li><a href="profile.html">profile</a></li>

                                    <li><a href="{{ route('logout') }}">Logout</a></li>
                                    <li><a href="{{ route('register') }}">Order History</a></li>
                                    @else
                                    <li><a href="{{ route('login') }}">favorites</a></li>
                                    <li><a href="{{ route('login') }}">profile</a></li>

                                    <li><a href="{{ route('login') }}">Login</a></li>
                                    <li><a href="{{ route('login') }}">Order History</a></li>
                                    @endauth

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
                                    <li><a href="{{route('listings.search')}}">role play</a></li>
                                    <li><a href="{{route('listings.search')}}l">adventure</a></li>
                                    <li><a href="{{route('listings.search')}}">first person shooter</a></li>
                                    <li><a href="{{route('listings.search')}}">strategy</a></li>
                                    <li><a href="{{route('listings.search')}}">puzzle</a></li>
                                </ul>
                            </div>
                        </div>
                    </div>
                    <div class="col-xl-4 col-md-6">s
                        <div class="footer-widget mb-40">
                            <h3 class="footer-widget-title">Contact</h3>
                            <div class="footer-newsletter">
                                <p>Stay connected with us to explore the best gaming accounts and make your gaming experience even more enjoyable!</p>
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
                                    <p><span><i class=" ti-headphone-alt "></i></span> +63 961 222 0402</p>
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
                                <a href="">GLounge</a> 2023 . All Right Reserved.
                            </p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </footer>
    <!-- modal -->
    <div class="modal fade" id="exampleCompare" tabindex="-1" role="dialog" aria-hidden="true">
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
            <span class="pe-7s-close" aria-hidden="true"></span>
        </button>

    </div>


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
