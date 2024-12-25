@extends('dashboard.layouts.main')

@section('main-container')

        <div class="page-wrapper">
                        <div class="content container-fluid">
                <div class="row">
                    <div class="col-sm-8 col-4">
                        <h4 class="page-title">Pricing</h4>
                    </div>
                    <div class="col-sm-4 col-8 text-right m-b-30">
                        <a href="{{ url('/add-pricing')}}" class="btn btn-primary btn-rounded pull-right"><i class="fas fa-plus"></i> Add Pricing</a>
                    </div>
                </div>
                <div class="row">
                    <div class="col-sm-6 col-md-4 col-lg-4 col-xl-3">
                        <div class="pricing-box">
                            <h3 class="pricing-title">Single</h3>
                            <h1 class="pricing-rate"><sup>$</sup>15</h1>
                            <p>Single room with air conditioning system</p>
                            <ul>
                                <li><i class="fas fa-check" aria-hidden="true"></i> <b>Free Breakfast</b></li>
                                <li><i class="fas fa-check" aria-hidden="true"></i> Free Wifi</li>
                                <li><i class="fas fa-check" aria-hidden="true"></i> Air Conditioning</li>
								<li><i class="fas fa-check" aria-hidden="true"></i> Laundry</li>
								<li><i class="fas fa-check" aria-hidden="true"></i> Parking</li>
                                <li>&nbsp;</li>
                            </ul>
                            <a href="{{ url('/edit-pricing')}}" class="btn btn-primary btn-rounded w-md">Edit</a>
                        </div>
                    </div>
                    <div class="col-sm-6 col-md-4 col-lg-4 col-xl-3">
                        <div class="pricing-box">
                            <h3 class="pricing-title">Double</h3>
                            <h1 class="pricing-rate"><sup>$</sup>25</h1>
                            <p>Quad room with double beds</p>
                            <ul>
                                <li><i class="fas fa-check" aria-hidden="true"></i> <b>Free Breakfast & Dinner</b></li>
                                <li><i class="fas fa-check" aria-hidden="true"></i> Free Wifi</li>
                                <li><i class="fas fa-check" aria-hidden="true"></i> Fitness center</li>
                                <li><i class="fas fa-check" aria-hidden="true"></i> Air Conditioning</li>
                                <li><i class="fas fa-check" aria-hidden="true"></i> Parking</li>
                                <li><i class="fas fa-check" aria-hidden="true"></i> Laundry</li>
                            </ul>
                            <a href="{{ url('/edit-pricing')}}" class="btn btn-primary btn-rounded w-md">Edit</a>
                        </div>
                    </div>
                    <div class="col-sm-6 col-md-4 col-lg-4 col-xl-3">
                        <div class="pricing-box">
                            <h3 class="pricing-title">Family</h3>
                            <h1 class="pricing-rate"><sup>$</sup>35</h1>
                            <p>Delux room with luxurious facilities</p>
                            <ul>
                                <li><i class="fas fa-check" aria-hidden="true"></i> <b>Free Wifi</b></li>
                                <li><i class="fas fa-check" aria-hidden="true"></i> Fitness center</li>
                                <li><i class="fas fa-check" aria-hidden="true"></i> Air Conditioning</li>
                                <li><i class="fas fa-check" aria-hidden="true"></i> Parking</li>
                                <li><i class="fas fa-check" aria-hidden="true"></i> Connecting Door</li>
                                <li><i class="fas fa-check" aria-hidden="true"></i> Confirance Hall</li>
                            </ul>
                            <a href="{{ url('/edit-pricing')}}" class="btn btn-primary btn-rounded w-md">Edit</a>
                        </div>
                    </div>
                    <div class="col-sm-6 col-md-4 col-lg-4 col-xl-3">
                        <div class="pricing-box add-pricing">
                            <div class="display-table">
                                <div class="table-cell">
                                    <a href="{{ url('/add-pricing')}}" class="btn add-price-btn btn-rounded"><i class="fas fa-plus" aria-hidden="true"></i></a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="notification-box">
                <div class="msg-sidebar notifications msg-noti">
                    <div class="topnav-dropdown-header">
                        <span>Messages</span>
                    </div>
                    <div class="drop-scroll msg-list-scroll" id="msg_list">
                        <ul class="list-box">
                            <li>
                                <a href="{{ url('/chat')}}">
                                    <div class="list-item">
                                        <div class="list-left">
                                            <span class="avatar">R</span>
                                        </div>
                                        <div class="list-body">
                                            <span class="message-author">Zoha Kamran </span>
                                            <span class="message-time">12:28 AM</span>
                                            <div class="clearfix"></div>
                                            <span class="message-content">Is swimming pool available ?</span>
                                        </div>
                                    </div>
                                </a>
                            </li>
                            <li>
                                <a href="{{ url('/chat')}}">
                                    <div class="list-item new-message">
                                        <div class="list-left">
                                            <span class="avatar">J</span>
                                        </div>
                                        <div class="list-body">
                                            <span class="message-author">Sahil Ghafoor</span>
                                            <span class="message-time">1 Aug</span>
                                            <div class="clearfix"></div>
                                            <span class="message-content">Do you give discounts on quad bedroom?</span>
                                        </div>
                                    </div>
                                </a>
                            </li>
                            <li>
                                <a href="{{ url('/chat')}}">
                                    <div class="list-item">
                                        <div class="list-left">
                                            <span class="avatar">T</span>
                                        </div>
                                        <div class="list-body">
                                            <span class="message-author">Tara Khan </span>
                                            <span class="message-time">12:28 AM</span>
                                            <div class="clearfix"></div>
                                            <span class="message-content">I want to organize party in your hotel..</span>
                                        </div>
                                    </div>
                                </a>
                            </li>
                            <li>
                                <a href="{{ url('/chat')}}">
                                    <div class="list-item">
                                        <div class="list-left">
                                            <span class="avatar">M</span>
                                        </div>
                                        <div class="list-body">
                                            <span class="message-author">Minahil Saad</span>
                                            <span class="message-time">12:28 AM</span>
                                            <div class="clearfix"></div>
                                            <span class="message-content">Do you provide free golf area in your room package?</span>
                                        </div>
                                    </div>
                                </a>
                            </li>
                            <li>
                                <a href="{{ url('/chat')}}">
                                    <div class="list-item">
                                        <div class="list-left">
                                            <span class="avatar">C</span>
                                        </div>
                                        <div class="list-body">
                                            <span class="message-author">Huma Akram </span>
                                            <span class="message-time">12:28 AM</span>
                                            <div class="clearfix"></div>
                                            <span class="message-content">I want to book 8 rooms for my team urgently..</span>
                                        </div>
                                    </div>
                                </a>
                            </li>
                            <li>
                                <a href="{{ url('/chat')}}">
                                    <div class="list-item">
                                        <div class="list-left">
                                            <span class="avatar">D</span>
                                        </div>
                                        <div class="list-body">
                                            <span class="message-author">Mohid Zafar </span>
                                            <span class="message-time">12:28 AM</span>
                                            <div class="clearfix"></div>
                                            <span class="message-content">Do you provide free WiFi?</span>
                                        </div>
                                    </div>
                                </a>
                            </li>
                            <li>
                                <a href="{{ url('/chat')}}">
                                    <div class="list-item">
                                        <div class="list-left">
                                            <span class="avatar">B</span>
                                        </div>
                                        <div class="list-body">
                                            <span class="message-author"> Bushra Anum </span>
                                            <span class="message-time">12:28 AM</span>
                                            <div class="clearfix"></div>
                                            <span class="message-content">I want to book my room in 4th floor.</span>
                                        </div>
                                    </div>
                                </a>
                            </li>
                            <li>
                                <a href="{{ url('/chat')}}">
                                    <div class="list-item">
                                        <div class="list-left">
                                            <span class="avatar">R</span>
                                        </div>
                                        <div class="list-body">
                                            <span class="message-author"> Rabia Khan </span>
                                            <span class="message-time">12:28 AM</span>
                                            <div class="clearfix"></div>
                                            <span class="message-content">Do you provide coffee machine in this delux package ?</span>
                                        </div>
                                    </div>
                                </a>
                            </li>
                            
                            <li>
                                <a href="{{ url('/chat')}}">
                                    <div class="list-item">
                                        <div class="list-left">
                                            <span class="avatar">M</span>
                                        </div>
                                        <div class="list-body">
                                            <span class="message-author">Meliha </span>
                                            <span class="message-time">12:28 AM</span>
                                            <div class="clearfix"></div>
                                            <span class="message-content">Is any room available for one month?</span>
                                        </div>
                                    </div>
                                </a>
                            </li>
                            <li>
                                <a href="{{ url('/chat')}}">
                                    <div class="list-item">
                                        <div class="list-left">
                                            <span class="avatar">J</span>
                                        </div>
                                        <div class="list-body">
                                            <span class="message-author">Hamza Ayyub</span>
                                            <span class="message-time">12:28 AM</span>
                                            <div class="clearfix"></div>
                                            <span class="message-content">I want to organize birthday party</span>
                                        </div>
                                    </div>
                                </a>
                            </li>
                            <li>
                                <a href="{{ url('/chat')}}">
                                    <div class="list-item">
                                        <div class="list-left">
                                            <span class="avatar">L</span>
                                        </div>
                                        <div class="list-body">
                                            <span class="message-author">Abdul Raheem</span>
                                            <span class="message-time">12:28 AM</span>
                                            <div class="clearfix"></div>
                                            <span class="message-content">Is there any parking area ?</span>
                                        </div>
                                    </div>
                                </a>
                            </li>
                            <li>
                                <a href="{{ url('/chat')}}">
                                    <div class="list-item">
                                        <div class="list-left">
                                            <span class="avatar">T</span>
                                        </div>
                                        <div class="list-body">
                                            <span class="message-author">Shahid Khan</span>
                                            <span class="message-time">12:28 AM</span>
                                            <div class="clearfix"></div>
                                            <span class="message-content">I want to book swimming area for 2 days.</span>
                                        </div>
                                    </div>
                                </a>
                            </li>
                        </ul>
                    </div>
                    <div class="topnav-dropdown-footer">
                        <a href="{{ url('/chat')}}">See all messages</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
    

@endsection