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
                    <h2>Team</h2>
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
                      <h4>Team</h4>
                    </div>
                    <div class="last-contact">
                      <ul>
                        <li>
                          <a href="index.html">Home</a>
                        </li>
                        <li>Team</li>
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

    <section class="section-team padding-t-50 padding-b-100">
      <div class="container">
        <div class="row">
          <div class="col-12" data-aos="fade-up" data-aos-duration="1000">
            <div class="rx-banner text-center rx-banner-effects">
              <p>
                <img
                  src="frontend/img/banner/left-shape.svg"
                  alt="banner-left-shape"
                  class="svg-img left-side"
                />Our Team<img
                  src="frontend/img/banner/right-shape.svg"
                  alt="banner-right-shape"
                  class="svg-img right-side"
                />
              </p>
              <h4>Exceptional <span>Experts</span></h4>
            </div>
          </div>
          <div
            class="col-12"
            data-aos="fade-up"
            data-aos-duration="1000"
            data-aos-delay="200"
          >
            <div class="owl-carousel rx-team-slider">
              <div class="rx-team-card">
                <div class="rx-team-img">
                  <img src="frontend/img/team/1.jpg" alt="team-1" />
                  <div class="rx-team-social-media">
                    <div class="social-media-item">
                      <a href="javascript:void(0)"
                        ><i class="ri-facebook-line"></i
                      ></a>
                    </div>
                    <div class="social-media-item">
                      <a href="javascript:void(0)"
                        ><i class="ri-instagram-line"></i
                      ></a>
                    </div>
                    <div class="social-media-item">
                      <a href="javascript:void(0)"
                        ><i class="ri-linkedin-line"></i
                      ></a>
                    </div>
                    <div class="social-media-item">
                      <a href="javascript:void(0)"
                        ><i class="ri-twitter-x-line"></i
                      ></a>
                    </div>
                  </div>
                </div>
                <div class="rx-team-contact">
                  <h5>Mr. Shahnawaz</h5>
                  <p>(CEO)</p>
                </div>
              </div>
              <div class="rx-team-card">
                <div class="rx-team-img">
                  <img src="frontend/img/team/2.jpg" alt="team-2" />
                  <div class="rx-team-social-media">
                    <div class="social-media-item">
                      <a href="javascript:void(0)"
                        ><i class="ri-facebook-line"></i
                      ></a>
                    </div>
                    <div class="social-media-item">
                      <a href="javascript:void(0)"
                        ><i class="ri-instagram-line"></i
                      ></a>
                    </div>
                    <div class="social-media-item">
                      <a href="javascript:void(0)"
                        ><i class="ri-linkedin-line"></i
                      ></a>
                    </div>
                    <div class="social-media-item">
                      <a href="javascript:void(0)"
                        ><i class="ri-twitter-x-line"></i
                      ></a>
                    </div>
                  </div>
                </div>
                <div class="rx-team-contact">
                  <h5>Maria Shahid</h5>
                  <p>(Manager)</p>
                </div>
              </div>
              <div class="rx-team-card">
                <div class="rx-team-img">
                  <img src="frontend/img/team/3.jpg" alt="team-3" />
                  <div class="rx-team-social-media">
                    <div class="social-media-item">
                      <a href="javascript:void(0)"
                        ><i class="ri-facebook-line"></i
                      ></a>
                    </div>
                    <div class="social-media-item">
                      <a href="javascript:void(0)"
                        ><i class="ri-instagram-line"></i
                      ></a>
                    </div>
                    <div class="social-media-item">
                      <a href="javascript:void(0)"
                        ><i class="ri-linkedin-line"></i
                      ></a>
                    </div>
                    <div class="social-media-item">
                      <a href="javascript:void(0)"
                        ><i class="ri-twitter-x-line"></i
                      ></a>
                    </div>
                  </div>
                </div>
                <div class="rx-team-contact">
                  <h5>Ayeza Javaid</h5>
                  <p>(Receptionist)</p>
                </div>
              </div>
              <div class="rx-team-card">
                <div class="rx-team-img">
                  <img src="frontend/img/team/4.jpg" alt="team-4" />
                  <div class="rx-team-social-media">
                    <div class="social-media-item">
                      <a href="javascript:void(0)"
                        ><i class="ri-facebook-line"></i
                      ></a>
                    </div>
                    <div class="social-media-item">
                      <a href="javascript:void(0)"
                        ><i class="ri-instagram-line"></i
                      ></a>
                    </div>
                    <div class="social-media-item">
                      <a href="javascript:void(0)"
                        ><i class="ri-linkedin-line"></i
                      ></a>
                    </div>
                    <div class="social-media-item">
                      <a href="javascript:void(0)"
                        ><i class="ri-twitter-x-line"></i
                      ></a>
                    </div>
                  </div>
                </div>
                <div class="rx-team-contact">
                  <h5>Shahzaib Khan</h5>
                  <p>(Team Leader)</p>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </section>

    @endsection