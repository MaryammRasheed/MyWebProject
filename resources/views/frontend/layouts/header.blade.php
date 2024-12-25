<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="The Royalx - Luxury Hotel & Restaurant HTML Template.">
    <meta name="keywords"
        content="hotel, booking, restaurant, spa, resort, hotel landing, corporate, start up, site design, professional template, classic, modern">
    <title>The Royalx - Luxury Hotel & Restaurant</title>

    <link rel="icon" href="frontend/img/favicon/favicon.png" type="image/x-icon">

    <link rel="stylesheet" href="frontend/css/vendor/bootstrap.min.css">
    <link rel="stylesheet" href="frontend/css/vendor/remixicon.css">
    <link rel="stylesheet" href="frontend/css/vendor/aos.css">
    <link rel="stylesheet" href="frontend/css/vendor/animate.min.css">
    <link rel="stylesheet" href="frontend/css/vendor/jquery.fancybox.min.css">
    <link rel="stylesheet" href="frontend/css/vendor/jquery-ui.min.css">
    <link rel="stylesheet" href="frontend/css/vendor/slick.min.css">
    <link rel="stylesheet" href="frontend/css/vendor/owl.carousel.min.css">
    <link rel="stylesheet" href="frontend/css/vendor/swiper-bundle.min.css">

    <link rel="stylesheet" href="frontend/css/style.css">

</head>

<body>

    <div class="rx-loader">
        <span class="loader"></span>
    </div>

    <header>
        <div class="rx-header">
            <div class="container">
                <div class="row">
                    <div class="col-12">
                        <div class="rx-inner-menu-desk">
                            <a href="{{ url('/index')}}" class="rx-header-btn">
                                <img src="frontend/img/logo/logo.png" alt="logo">
                            </a>
                            <button class="navbar-toggler shadow-none rx-toggle-menu" type="button"
                                data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent"
                                aria-controls="navbarSupportedContent" aria-expanded="false"
                                aria-label="Toggle navigation">
                                <i class="ri-menu-2-line"></i>
                            </button>
                            <div class="rx-main-menu" id="navbarSupportedContent">
                                <ul class="navbar-nav">
                                    <li class="nav-item">
                                        <a class="nav-link" href="{{url('/')}}">Home</a>
                                    </li>
                                    <li class="nav-item">
                                        <a class="nav-link" href="{{url('/facilities')}}">Facilities</a>
                                    </li>
                                    <li class="nav-item rx-dropdown">
                                        <a class="nav-link rx-dropdown-item" href="javascript:void(0)">Rooms</a>
                                        <ul class="rx-dropdown-menu">
                                           <li><a class="dropdown-item" href="{{url('/all-rooms')}}">All Rooms </a></li>
                                            <li><a class="dropdown-item" href="{{url('/room-details')}}">Room Booking</a></li>
                                        </ul>
                                    </li>
                                    <li class="nav-item rx-dropdown">
                                        <a class="nav-link rx-dropdown-item" href="javascript:void(0)">Services</a>
                                        <ul class="rx-dropdown-menu">
                                            <li><a class="dropdown-item" href="{{url('/about')}}">About Us</a></li>
                                            <li><a class="dropdown-item" href="{{url('/gallery')}}">Gallery</a></li>
                                            <li><a class="dropdown-item" href="{{url('/team')}}">Team</a></li>
                                            <li><a class="dropdown-item" href="{{url('/contact')}}">Contact</a></li>
                                            <li><a class="dropdown-item" href="{{url('/faq')}}">Faq</a></li>
                                            <li><a class="dropdown-item" href="{{url('/spa')}}">Spa</a></li>
                                            <li><a class="dropdown-item" href="{{url('/blog')}}">Blog</a></li>
                                            <li><a class="dropdown-item" href="{{url('/signin')}}">Login</a></li>
                                        </ul>
                                    </li>
                                    <li class="nav-item">
                                        <a class="nav-link" href="{{url('/food')}}">Food</a>
                                    </li>
                                    <li class="nav-item">
                                        <a class="nav-link" href="{{url('/checkout')}}">Checkout</a>
                                    </li>
                                   
                                </ul>
                                <div class="header-button">
                                    <a href="javascript:void(0)" class="rx-btn-one" data-bs-toggle="modal"
                                        data-bs-target="#rx_booking_from">Book Now</a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="rx-mobile-menu-overlay"></div>
        <div id="rx-mobile-menu" class="rx-mobile-menu">
            <div class="rx-menu-title">
                <span class="menu_title">My Menu</span>
                <button type="button" class="rx-close-menu">×</button>
            </div>
            <div class="rx-menu-inner">
                <div class="rx-menu-contact">
                    <ul>
                        <li>
                            <a href="{{url('/index')}}">Home</a>
                        </li>
                        <li>
                            <a href="{{url('/gallery')}}">Restaurant</a>
                        </li>
                        <li>
                            <a href="javascript:void(0)">Room</a>
                            <ul class="sub-menu">
                               
                                <li><a href="{{url('/all-rooms')}}">All Rooms </a></li>
                                <li><a href="{{url('/room-details')}}">Room Booking</a></li>
                            </ul>
                        </li>
                        <li>
                            <a href="javascript:void(0)">Services</a>
                            <ul class="sub-menu">
                                <li><a href="{{url('/about')}}">About Us</a></li>
                                <li><a href="{{url('/services')}}">Services</a></li>
                                <li><a href="{{url('/facilities')}}">Facilities</a></li>
                                <li><a href="{{url('/team')}}">Team</a></li>
                                <li><a href="{{url('/contact')}}">Contact</a></li>
                                <li><a href="{{url('/faq')}}">Faq</a></li>
                                <li><a href="{{url('/spa')}}">Spa</a></li>
                                <li><a href="{{url('/checkout')}}">Checkout</a></li>
                                <li><a href="{{url('/signin')}}">Login</a></li>
                                <li><a href="{{url('/gallery')}}">Gallery</a></li>

                            </ul>
                        </li>
                        <li>
                            <a href="javascript:void(0)">Blog</a>
                            <ul class="sub-menu">
                                <li><a href="{{url('/blog')}}">Blog</a></li>
                                <li><a href="{{url('/blog-details')}}">Blog Details</a></li>
                            </ul>
                        </li>
                        <li>
                            <a href="{{url('/food')}}">Food</a>
                        </li>
                    </ul>
                </div>
                <div class="header-res-lan-curr">
                    <div class="header-res-social">
                        <div class="header-top-social">
                            <ul class="mb-0">
                                <li class="list-inline-item">
                                    <a href="javascript:void(0)"><i class="ri-facebook-fill"></i></a>
                                </li>
                                <li class="list-inline-item">
                                    <a href="javascript:void(0)"><i class="ri-twitter-fill"></i></a>
                                </li>
                                <li class="list-inline-item">
                                    <a href="javascript:void(0)"><i class="ri-instagram-line"></i></a>
                                </li>
                                <li class="list-inline-item">
                                    <a href="javascript:void(0)"><i class="ri-linkedin-fill"></i></a>
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </header>