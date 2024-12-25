@extends('dashboard.layouts.main')

@section('main-container')

        <div class="page-wrapper">
            <div class="content">
                <div class="row">
                    <div class="col-md-6 col-sm-6 col-lg-6 col-xl-3">
                        <div class="dash-widget">
							<div class="row no-gutters">
								<div class="col-5">
									<div class="circle1"></div>
								</div>
								<div class="col-7">
									<div class="dash-widget-info text-right">
										<h3>75</h3>
										<span class="widget-title1">Total Booking </span>
									</div>
								</div>
							</div>
						</div>
					</div>
					 <div class="col-md-6 col-sm-6 col-lg-6 col-xl-3">
                        <div class="dash-widget">
							<div class="row no-gutters">
								<div class="col-5">
									<div class="circle2"></div>
								</div>
								<div class="col-7">
									<div class="dash-widget-info text-right">
										<h3>25</h3>
										<span class="widget-title2">Availble Rooms </span>
									</div>
								</div>
							</div>
						</div>
					</div>
					 <div class="col-md-6 col-sm-6 col-lg-6 col-xl-3">
                        <div class="dash-widget">
							<div class="row no-gutters">
								<div class="col-5">
									<div class="circle3"></div>
								</div>
								<div class="col-7">
									<div class="dash-widget-info text-right">
										<h3>20</h3>
										 <span class="widget-title3">Inquiry </span>
									</div>
								</div>
							</div>
						</div>
					</div>
                   <div class="col-md-6 col-sm-6 col-lg-6 col-xl-3">
                        <div class="dash-widget">
							<div class="row no-gutters">
								<div class="col-5">
									<div class="circle4"></div>
								</div>
								<div class="col-7">
									<div class="dash-widget-info text-right">
										<h3>$ 6000</h3>
										  <span class="widget-title4">Collections </span>
									</div>
								</div>
							</div>
						</div>
					</div>
                </div>
				<div class="row">
					<div class="col-12 col-md-12 col-lg-12 col-xl-6">
						<div class="card">
							<div class="card-header">
								<h4 class="card-title d-inline-block">Income and Expenses</h4>
							</div>
							<div style="position: relative; height: 300px;">
								<canvas id="myChart" style="display: none;"></canvas>
								<img src="dashboard/assets/img/graph3.png" alt="Image not found" 
									class="img-fluid" 
									style="width: 100%; height: 100%; object-fit: cover;">
							</div>
						</div>
					</div>
				
					<div class="col-12 col-md-12 col-lg-12 col-xl-6">
						<div class="card">
							<div class="card-header">
								<h4 class="card-title d-inline-block">Visitors</h4>
							</div>
							<div style="position: relative; height: 300px;">
								<div id="visit-area" style="display: none;"></div>
								<img src="dashboard/assets/img/graph2.png" alt="Image not found" 
									class="img-fluid" 
									style="width: 100%; height: 100%; object-fit: cover;">
							</div>
						</div>
					</div>
				</div>
				
				<div class="row">
					<div class="col-12 col-md-12 col-lg-12 col-xl-6">
						<div class="card">
							<div class="card-header">
								<h4 class="card-title d-inline-block">Booking</h4> <a href="{{ url('/all-booking')}}" class="btn btn-primary float-right">View all</a>
							</div>
							<div class="card-body p-0">
							<div class="table-responsive">
							<table class="table table-striped custom-table">
								<thead>
									<tr>
										<th>Booking ID</th>
										<th>Name</th>
										<th>Room type</th>
										<th>Number</th>
										<th>Status</th>
									</tr>
								</thead>
								<tbody>
									<tr>
										<td>BKG-0001</td>
										<td><img width="28" height="28" src="dashboard/assets/img/user.jpg" class="rounded-circle m-r-5" alt=""> Zainab</td>
										<td >Single</td>
										<td>987654321 </td>
										<td><span class="custom-badge status-red">Inactive</span></td>
									</tr>
									<tr>
										<td>BKG-0002</td>
										<td><img width="28" height="28" src="dashboard/assets/img/user.jpg" class="rounded-circle m-r-5" alt=""> Hadii</td>
										<td>Double</td>
										<td>987654321 </td>
										<td><span class="custom-badge status-green">active</span></td>
									</tr>
									<tr>
										<td>BKG-0003</td>
										<td><img width="28" height="28" src="dashboard/assets/img/user.jpg" class="rounded-circle m-r-5" alt=""> Danish</td>
										<td>Single</td>
										<td>987654321 </td>
										<td><span class="custom-badge status-green">active</span></td>
									</tr>
									<tr>
										<td>BKG-0004</td>
										<td><img width="28" height="28" src="dashboard/assets/img/user.jpg" class="rounded-circle m-r-5" alt=""> Rauf</td>
										<td>Double</td>
										<td>987654321 </td>
										<td><span class="custom-badge status-green">active</span></td>
									</tr>
									
									
								</tbody>
							</table>
						</div>
							</div>
						</div>
					</div>
                    <div class="col-12 col-md-12 col-lg-12 col-xl-6">
                        <div class="card member-panel">
							<div class="card-header">
								<h4 class="card-title d-inline-block">Pricing </h4> <a href="{{ url('/pricing ')}}" class="btn btn-primary float-right">View all</a>
							</div>
                            <div class="card-body">
                                <div class="table-responsive">
							<table class="table table-striped custom-table">
								<thead>
									<tr>
										<th>Room Type</th>
										<th>Rate</th>
										<th>Action</th>
										
									</tr>
								</thead>
								<tbody>
									<tr>
										<td class="text-success text-uppercase">Single </td>
										<td>$ 15</td>
										<td><a href="{{ url('/pricing ')}}">View</a></td>
										
									</tr>
									<tr>
										<td class="text-primary text-uppercase">Double</td>
										<td>$ 25</td>
										<td><a href="{{ url('/pricing ')}}">View</a></td>
									</tr>
									<tr>
										<td class="text-warning text-uppercase">Quad</td>
										<td>$ 35</td>
										<td><a href="{{ url('/pricing ')}}">View</a></td>
									</tr>
									<tr>
										<td class="text-success text-uppercase">Family</td>
										<td>$ 45</td>
										<td><a href="{{ url('/pricing ')}}">View</a></td>
									</tr>
																		
								</tbody>
							</table>
						</div>
                            </div>
                           
                        </div>
                    </div>
				</div>
				<div class="row">
					<div class="col-12 col-md-12 col-lg-12 col-xl-6">
						<div class="card">
							<div class="card-header">
								<h4 class="card-title d-inline-block">Rooms </h4> <a href="{{ url('/admin-rooms')}}" class="btn btn-primary float-right">View all</a>
							</div>
							<div class="card-block">
								<div class="table-responsive">
							<table class="table table-striped custom-table">
								<thead>
									<tr>
										<th >Room number</th>
										<th>Img</th>
										<th>Room type</th>
										<th>AC/Non-AC</th>
										<th>Food</th>
									</tr>
								</thead>
								<tbody>
									<tr>
										<td>201</td>
										<td><img width="28" height="28" src="dashboard/assets/img/user.jpg" class="rounded-circle m-r-5" alt=""></td>
										<td>Single</td>
										<td>AC</td>
										<td>Free Breakfast & Dinner</td>
									</tr>
									<tr>
										<td>202</td>
										<td><img width="28" height="28" src="dashboard/assets/img/user.jpg" class="rounded-circle m-r-5" alt=""></td>
										<td>Double</td>
										<td>Non-AC</td>
										<td>Free Breakfast</td>
									</tr>
									<tr>
										<td>203</td>
										<td><img width="28" height="28" src="dashboard/assets/img/user.jpg" class="rounded-circle m-r-5" alt=""></td>
										<td>Single</td>
										<td>Non-AC</td>
										<td>Free Lunch</td>
									</tr>
									<tr>
										<td>204</td>
										<td><img width="28" height="28" src="dashboard/assets/img/user.jpg" class="rounded-circle m-r-5" alt=""></td>
										<td>Quad</td>
										<td>AC</td>
										<td>Free Breakfast</td>
									</tr>
								</tbody>
							</table>
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