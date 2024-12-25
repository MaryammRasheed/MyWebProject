@extends('dashboard.layouts.main')

@section('main-container')

        <div class="page-wrapper">
             <div class="content">
                <div class="row">
                    <div class="col-sm-12">
                        <h4 class="page-title">Activities</h4>
                    </div>
                </div>
                <div class="row">
                    <div class="col-md-12">
                        <div class="activity">
                            <div class="activity-box">
                                <ul class="activity-list">
                                    <li>
                                        <div class="activity-user">
                                            <a href="{{ url('/profile')}}" title="Lesley Grauer" data-toggle="tooltip" class="avatar">
                                                <img alt="Lesley Grauer" src="dashboard/assets/img/user.jpg" class="img-fluid rounded-circle">
                                            </a>
                                        </div>
                                        <div class="activity-content">
                                            <div class="timeline-content">
                                                <a href="{{ url('/profile')}}" class="name">Kiran Naz</a> added new work <a href="#">For Staff</a>
                                                <span class="time">4 mins ago</span>
                                            </div>
                                        </div>
										<a class="activity-delete" href="#" title="Delete">&times;</a>
                                    </li>
                                    <li>
                                        <div class="activity-user">
                                            <a href="{{ url('/profile')}}" class="avatar" title="Jeffery Lalor" data-toggle="tooltip">L</a>
                                        </div>
                                        <div class="activity-content">
                                            <div class="timeline-content">
                                                <a href="{{ url('/profile')}}" class="name">Junaid Ahmad</a> added <a href="{{ url('/profile')}}" class="name">Hussain Sohail</a> and <a href="{{ url('/profile')}}" class="name">Faria Kamaal</a> to Double <a href="#">Room booking</a>
                                                <span class="time">6 mins ago</span>
                                            </div>
                                        </div>
										<a class="activity-delete" href="#" title="Delete">&times;</a>
                                    </li>
                                    <li>
                                        <div class="activity-user">
                                            <a href="{{ url('/profile')}}" title="Catherine Manseau" data-toggle="tooltip" class="avatar">
                                                <img alt="Catherine Manseau" src="dashboard/assets/img/user.jpg" class="img-fluid rounded-circle">
                                            </a>
                                        </div>
                                        <div class="activity-content">
                                            <div class="timeline-content">
                                                <a href="{{ url('/profile')}}" class="name">Shahid Khan</a> completed <a href="#">Room booking with payment gateway</a>
                                                <span class="time">12 mins ago</span>
                                            </div>
                                        </div>
										<a class="activity-delete" href="#" title="Delete">&times;</a>
                                    </li>
                                    <li>
                                        <div class="activity-user">
                                            <a href="#" title="Bernardo Galaviz" data-toggle="tooltip" class="avatar">
                                                <img alt="Bernardo Galaviz" src="dashboard/assets/img/user.jpg" class="img-fluid rounded-circle">
                                            </a>
                                        </div>
                                        <div class="activity-content">
                                            <div class="timeline-content">
                                                <a href="{{ url('/profile')}}" class="name">Bushra Ali</a> changed the Room<a href="#">For available </a>
                                                <span class="time">1 day ago</span>
                                            </div>
                                        </div>
										<a class="activity-delete" href="#" title="Delete">&times;</a>
                                    </li>
                                    <li>
                                        <div class="activity-user">
                                            <a href="{{ url('/profile')}}" title="Mike Litorus" data-toggle="tooltip" class="avatar">
                                                <img alt="Mike Litorus" src="dashboard/assets/img/user.jpg" class="img-fluid rounded-circle">
                                            </a>
                                        </div>
                                        <div class="activity-content">
                                            <div class="timeline-content">
                                                <a href="{{ url('/profile')}}" class="name">Malaika Akram</a> booking new room for <a href="#"> video conferencing</a>
                                                <span class="time">2 days ago</span>
                                            </div>
                                        </div>
										<a class="activity-delete" href="#" title="Delete">&times;</a>
                                    </li>
                                    <li>
                                        <div class="activity-user">
                                            <a href="{{ url('/profile')}}" title="Jeffery Lalor" data-toggle="tooltip" class="avatar">
                                                <img alt="Jeffery Lalor" src="dashboard/assets/img/user.jpg" class="img-fluid rounded-circle">
                                            </a>
                                        </div>
                                        <div class="activity-content">
                                            <div class="timeline-content">
                                                <a href="{{ url('/profile')}}" class="name">Hamza Rana</a> added <a href="{{ url('/profile')}}" class="name">Warda Akmal</a> and <a href="{{ url('/profile')}}" class="name">Ayesha Asghar</a> to the villa <a href="#">Private </a>
                                                <span class="time">7 days ago</span>
                                            </div>
                                        </div>
										<a class="activity-delete" href="#" title="Delete">&times;</a>
                                    </li>
                                </ul>
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
                                <a href="{{ url('/chat')}}>
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