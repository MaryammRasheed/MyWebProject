@extends('frontend.layouts.main')

@section('main-container')

    <section class="section-breadcrumb padding-b-50">
        <div class="rx-breadcrumb-image">
            <div class="rx-breadcrumb-overlay"></div>
            <div class="inner-breadcrumb-contact">
                <div class="main-breadcrumb-contact">
                    <div class="container">
                        <div class="row">
                            <div class="col-12">
                                <div class="rx-banner-contact">
                                    <h2>Room</h2>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="rx-banner-breadcrumb">
                    <div class="container">
                        <div class="row">
                            <div class="col-12">
                                <div class="breadcrumb-contact">
                                    <div class="main-heading">
                                        <h4>Room</h4>
                                    </div>
                                    <div class="last-contact">
                                        <ul>
                                            <li>
                                                <a href="index.html">Home</a>
                                            </li>
                                            <li>Room</li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section class="section-room padding-tb-50">
        <div class="container">
            <div class="row mb-minus-24 room-popup">
                <div class="col-12" data-aos="fade-up" data-aos-duration="1000">
                    <div class="rx-banner text-center rx-banner-effects">
                        <p><img src="frontend/img/banner/left-shape.svg" alt="banner-left-shape"
                                class="svg-img left-side">Luxury Suites<img src="frontend/img/banner/right-shape.svg"
                                alt="banner-right-shape" class="svg-img right-side"></p>
                        <h4>Our Best <span>Rooms</span></h4>
                    </div>
                </div>
                <div class="col-lg-4 col-sm-6 col-12 mb-24" data-aos="fade-up" data-aos-duration="1000">
                    <div class="rx-rooms-main-box">
                        <div class="rooms-box-front">
                            <img src="frontend/img/rooms/1.jpg" alt="room-1">
                            <div class="content-wrap">
                                <div class="inner-contact">
                                    <h4>Junior Suite</h4>
                                </div>
                            </div>
                        </div>
                        <div class="rooms-box-back">
                            <img src="frontend/img/rooms/1.jpg" alt="rooms-1">
                            <div class="content-wrap">
                                <div class="box-overlay"></div>
                                <div class="inner-back-side">
                                    <div class="rx-price">
                                        <span>250$ / N</span>
                                    </div>
                                    <div class="sub-inner-contact">
                                        <h5>Junior Suite</h5>
                                        <ul>
                                            <li>Daily cleaning</li>
                                            <li>Room Service</li>
                                            <li>Housekeeping</li>
                                            <li>Wi-Fi & Parking</li>
                                        </ul>
                                    </div>
                                    <div class="last-contact">
                                        <a href="javascript:void(0)" class="inner-button" data-bs-toggle="modal"
                                            data-bs-target="#rx_booking_from">Book Now</a>
                                        <a href="room-details.html" class="inner-button"><i
                                                class="ri-arrow-right-up-line"></i></a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-sm-6 col-12 mb-24" data-aos="fade-up" data-aos-duration="1000" data-aos-delay="200">
                    <div class="rx-rooms-main-box">
                        <div class="rooms-box-front">
                            <img src="frontend/img/rooms/2.jpg" alt="room-2">
                            <div class="content-wrap">
                                <div class="inner-contact">
                                    <h4>Twin Room</h4>
                                </div>
                            </div>
                        </div>
                        <div class="rooms-box-back">
                            <img src="frontend/img/rooms/2.jpg" alt="rooms-2">
                            <div class="content-wrap">
                                <div class="box-overlay"></div>
                                <div class="inner-back-side">
                                    <div class="rx-price">
                                        <span>300$ / N</span>
                                    </div>
                                    <div class="sub-inner-contact">
                                        <h5>Twin Room</h5>
                                        <ul>
                                            <li>Daily cleaning</li>
                                            <li>Room Service</li>
                                            <li>Complimentary Toiletries</li>
                                            <li>Wi-Fi & Parking</li>
                                        </ul>
                                    </div>
                                    <div class="last-contact">
                                        <a href="javascript:void(0)" class="inner-button" data-bs-toggle="modal"
                                            data-bs-target="#rx_booking_from">Book Now</a>
                                        <a href="room-details.html" class="inner-button"><i
                                                class="ri-arrow-right-up-line"></i></a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-sm-6 col-12 mb-24" data-aos="fade-up" data-aos-duration="1000" data-aos-delay="400">
                    <div class="rx-rooms-main-box">
                        <div class="rooms-box-front">
                            <img src="frontend/img/rooms/3.jpg" alt="room-3">
                            <div class="content-wrap">
                                <div class="inner-contact">
                                    <h4>Quad Room</h4>
                                </div>
                            </div>
                        </div>
                        <div class="rooms-box-back">
                            <img src="frontend/img/rooms/3.jpg" alt="rooms-3">
                            <div class="content-wrap">
                                <div class="box-overlay"></div>
                                <div class="inner-back-side">
                                    <div class="rx-price">
                                        <span>350$ / N</span>
                                    </div>
                                    <div class="sub-inner-contact">
                                        <h5>Quad Room</h5>
                                        <ul>
                                            <li>Daily cleaning</li>
                                            <li>Mini Bar</li>
                                            <li>Premium Bedding</li>
                                            <li>Wi-Fi & Parking</li>
                                        </ul>
                                    </div>
                                    <div class="last-contact">
                                        <a href="javascript:void(0)" class="inner-button" data-bs-toggle="modal"
                                            data-bs-target="#rx_booking_from">Book Now</a>
                                        <a href="room-details.html" class="inner-button"><i
                                                class="ri-arrow-right-up-line"></i></a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-sm-6 col-12 mb-24" data-aos="fade-up" data-aos-duration="1000"="200">
                    <div class="rx-rooms-main-box">
                        <div class="rooms-box-front">
                            <img src="frontend/img/rooms/4.jpg" alt="room-4">
                            <div class="content-wrap">
                                <div class="inner-contact">
                                    <h4>Deluxe Room</h4>
                                </div>
                            </div>
                        </div>
                        <div class="rooms-box-back">
                            <img src="frontend/img/rooms/4.jpg" alt="rooms-4">
                            <div class="content-wrap">
                                <div class="box-overlay"></div>
                                <div class="inner-back-side">
                                    <div class="rx-price">
                                        <span>400$ / N</span>
                                    </div>
                                    <div class="sub-inner-contact">
                                        <h5>Deluxe Room</h5>
                                        <ul>
                                            <li>Daily cleaning</li>
                                            <li>Private Lounge Area</li>
                                            <li>Housekeeping</li>
                                            <li>Wi-Fi & Parking</li>
                                        </ul>
                                    </div>
                                    <div class="last-contact">
                                        <a href="javascript:void(0)" class="inner-button" data-bs-toggle="modal"
                                            data-bs-target="#rx_booking_from">Book Now</a>
                                        <a href="room-details.html" class="inner-button"><i
                                                class="ri-arrow-right-up-line"></i></a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-sm-6 col-12 mb-24" data-aos="fade-up" data-aos-duration="1000" data-aos-delay="200">
                    <div class="rx-rooms-main-box">
                        <div class="rooms-box-front">
                            <img src="frontend/img/rooms/5.jpg" alt="room-5">
                            <div class="content-wrap">
                                <div class="inner-contact">
                                    <h4>Executive Room</h4>
                                </div>
                            </div>
                        </div>
                        <div class="rooms-box-back">
                            <img src="frontend/img/rooms/5.jpg" alt="rooms-5">
                            <div class="content-wrap">
                                <div class="box-overlay"></div>
                                <div class="inner-back-side">
                                    <div class="rx-price">
                                        <span>450$ / N</span>
                                    </div>
                                    <div class="sub-inner-contact">
                                        <h5>Executive Room</h5>
                                        <ul>
                                            <li>Daily cleaning</li>
                                            <li>Room Service</li>
                                            <li>Coffee Maker</li>
                                            <li>Wi-Fi & Parking</li>
                                        </ul>
                                    </div>
                                    <div class="last-contact">
                                        <a href="javascript:void(0)" class="inner-button" data-bs-toggle="modal"
                                            data-bs-target="#rx_booking_from">Book Now</a>
                                        <a href="room-details.html" class="inner-button"><i
                                                class="ri-arrow-right-up-line"></i></a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-sm-6 col-12 mb-24" data-aos="fade-up" data-aos-duration="1000" data-aos-delay="400">
                    <div class="rx-rooms-main-box">
                        <div class="rooms-box-front">
                            <img src="frontend/img/rooms/6.jpg" alt="room-6">
                            <div class="content-wrap">
                                <div class="inner-contact">
                                    <h4>Presidential Room</h4>
                                </div>
                            </div>
                        </div>
                        <div class="rooms-box-back">
                            <img src="frontend/img/rooms/6.jpg" alt="rooms-6">
                            <div class="content-wrap">
                                <div class="box-overlay"></div>
                                <div class="inner-back-side">
                                    <div class="rx-price">
                                        <span>500$ / N</span>
                                    </div>
                                    <div class="sub-inner-contact">
                                        <h5>Presidential Room</h5>
                                        <ul>
                                            <li>Mini Bar</li>
                                            <li>Room Service</li>
                                            <li>Complimentary Breakfast</li>
                                            <li>Wi-Fi & Parking</li>
                                        </ul>
                                    </div>
                                    <div class="last-contact">
                                        <a href="javascript:void(0)" class="inner-button" data-bs-toggle="modal"
                                            data-bs-target="#rx_booking_from">Book Now</a>
                                        <a href="room-details.html" class="inner-button"><i
                                                class="ri-arrow-right-up-line"></i></a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

  @endsection