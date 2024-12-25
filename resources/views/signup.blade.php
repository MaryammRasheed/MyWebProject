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
                                    <h2>SignUp</h2>
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
                                        <h4>SignUp</h4>
                                    </div>
                                    <div class="last-contact">
                                        <ul>
                                            <li>
                                                <a href="{{url('/')}}">Home</a>
                                            </li>
                                            <li>SignUp</li>
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

    <section class="section-login padding-t-50 padding-b-100">
        <div class="container">
            <h2 class="d-none">Register</h2>
            <div class="row">
                <div class="col-12">
                    <div class="rx-login-form">
                        <div class="row mb-minus-24" data-aos="fade-up" data-aos-duration="1000">
                            <div class="col-lg-6 col-12 mb-24">
                                <div class="rx-login-img">
                                    <img src="frontend/img/about/about-one.png" alt="">
                                </div>
                            </div>
                            <div class="col-lg-6 col-12 mb-24" data-aos="fade-up" data-aos-duration="1000" data-aos-delay="200">
                                <div class="rx-inner-form">
                                    <form action="#">
                                        <div class="row">
                                            <div class="col-12">
                                                <div class="rx-banner text-center rx-banner-effects">
                                                    <p><img src="frontend/img/banner/left-shape.svg" alt="banner-left-shape" class="svg-img left-side">Registration<img src="frontend/img/banner/right-shape.svg" alt="banner-right-shape" class="svg-img right-side"></p>
                                                    <h4>Sign <span>Up</span></h4>
                                                </div>
                                            </div>
                                            <div class="col-lg-6 col-12 mb-24">
                                                <div class="rx-input-box">
                                                    <label for="firstname">Your Name*</label>
                                                    <input type="text" id="firstname" class="rx-form-control" required>
                                                </div>
                                            </div>
                                            <div class="col-lg-6 col-12 mb-24">
                                                <div class="rx-input-box">
                                                    <label for="email">Your Email*</label>
                                                    <input type="email" id="email" class="rx-form-control" required>
                                                </div>
                                            </div>
                                            <div class="col-lg-6 col-12 mb-24">
                                                <div class="rx-input-box">
                                                    <label for="password-field">Password*</label>
                                                    <input type="password" id="password-field" class="rx-form-control" required>
                                                    <i toggle="#password-field" class="toggle-password ri-eye-line"></i>
                                                </div>
                                            </div>
                                            <div class="col-lg-6 col-12 mb-24">
                                                <div class="rx-input-box">
                                                    <label for="confirm-password">Confirm Password*</label>
                                                    <input type="password" id="confirm-password" class="rx-form-control" required>
                                                    <i toggle="#confirm-password" class="toggle-password ri-eye-line"></i>
                                                </div>
                                            </div>
                                            <div class="rx-inline-block direct">
                                                <a href="{{url('/signin')}}" class="direct-to">You have an account?</a>
                                            </div>
                                            <div class="col-12">
                                                <div class="rx-inner-button">
                                                    <a href="{{url('/')}}" class="back-to"><i class="ri-arrow-left-s-line"></i>Back to Home</a>
                                                    <button type="button" class="rx-btn-two">Sign Up</button>
                                                </div>
                                            </div>
                                        </div>
                                    </form>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

  @endsection