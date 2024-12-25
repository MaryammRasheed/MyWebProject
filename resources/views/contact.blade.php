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
                    <h2>Contact</h2>
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
                      <h4>Contact</h4>
                    </div>
                    <div class="last-contact">
                      <ul>
                        <li>
                          <a href="{{url('/index')}}">Home</a>
                        </li>
                        <li>Contact</li>
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

    <section class="section-contact padding-t-50 padding-b-100">
      <div class="container">
        <h2 class="d-none">Contact</h2>
        <div class="row">
          <div class="col-12" data-aos="fade-up" data-aos-duration="1000">
            <div class="rx-contact-form">
              <div class="row mb-minus-24">
                <div class="col-lg-6 col-12 mb-24">
                  <div class="rx-contact-touch-ifrem">
                    <iframe
                      src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d109823.37708206289!2d73.0947367!3d30.662676649999995!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x3922b62cd8405a6d%3A0x6cce79c0f78cbfb7!2sSahiwal%2C%20Sahiwal%20District%2C%20Punjab!5e0!3m2!1sen!2s!4v1734170103612!5m2!1sen!2s">
                    </iframe>
                    
                  </div>
                </div>
                <div class="col-lg-6 col-12 mb-24">
                  <div class="rx-inner-form">

                    <form action="#" method="post">
                      @csrf
                      <div class="row">
                        <div class="col-lg-6 col-12 mb-24">
                          <div class="rx-input-box">
                            <label for="firstname">Your Name*</label>
                            <input
                              type="text"
                              id="firstname"
                              name="name"
                              class="rx-form-control"
                              required
                            />
                          </div>
                        </div>
                        <div class="col-lg-6 col-12 mb-24">
                          <div class="rx-input-box">
                            <label for="email">Your Email*</label>
                            <input
                              type="email"
                              id="email"
                              name="number"
                              class="rx-form-control"
                              required
                            />
                          </div>
                        </div>
                        <div class="col-12 mb-24">
                          <div class="rx-input-box">
                            <label for="subject">Your Subject*</label>
                            <input
                              type="text"
                              id="subject"
                               name="text"
                              class="rx-form-control"
                              required
                            />
                          </div>
                        </div>
                        <div class="col-12 mb-24">
                          <div class="rx-input-box">
                            <label for="message">Message*</label>
                            <textarea
                              class="rx-form-control"
                              id="message"
                               name="text"
                            ></textarea>
                          </div>
                        </div>
                        <div class="col-12">
                          <div class="rx-inner-button">
                            <button type="button" class="rx-btn-two">
                              Send Message
                            </button>
                          </div>
                        </div>
                        @if ($message = Session::get('success'))
                        <div class="alert alert-success alert-block p-4 border-left-success">
                            <strong>
                                {{ $message }}
                            </strong>
                        </div>
                    @endif
                    <form class="contact-two__form" method="post">
                        @csrf
                        <div class="row">
                            <div class="col-xl-6 col-lg-6">
                                <div class="contact-two__input-box">
                                    <input type="text" name="first_name" placeholder="First Name">
                                </div>
                                @if ($errors->has('first_name'))
                                    <span class="text-danger">
                                        {{ $errors->first('first_name') }}
                                    </span>
                                @endif
                            </div>
                            <div class="col-xl-6 col-lg-6">
                                <div class="contact-two__input-box">
                                    <input type="text" name="last_name" placeholder="Last Name">
                                </div>
                                @if ($errors->has('last_name'))
                                    <span class="text-danger">
                                        {{ $errors->first('last_name') }}
                                    </span>
                                @endif
                            </div>
                            <div class="col-xl-6 col-lg-6">
                                <div class="contact-two__input-box">
                                    <input type="email" name="email" placeholder="Email Address">
                                </div>
                                @if ($errors->has('email'))
                                    <span class="text-danger">
                                        {{ $errors->first('email') }}
                                    </span>
                                @endif
                            </div>
                            
                            <div class="col-xl-12">
                                <div class="contact-page__input-box text-message-box">
                                    <textarea name="message" placeholder="Write Message"></textarea>
                                    @if ($errors->has('message'))
                                        <span class="text-danger">
                                            {{ $errors->first('message') }}
                                        </span>
                                    @endif
                                </div>
                                <div class="contact-two__btn-box">
                                    <button type="submit" class="thm-btn contact-two__btn">Submit
                                        Message</button>
                                </div>
                            </div>
                        </div>
                    </form>
                    <div class="result"></div>
                </div>
            </div>
        </div>
    </div>
</div>
</section>
@endsection
