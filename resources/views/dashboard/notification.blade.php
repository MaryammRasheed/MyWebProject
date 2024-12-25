@extends('dashboard.layouts.main')

@section('main-container')
	<body>
	
		<!-- Main Wrapper -->
		<div class="main-wrapper">
		
			<!-- Header -->
			<div class="header">
				<div class="header-left">
					<a href="{{ url('/index')}}" class="logo">
						<img src="assets/img/logo.png" width="35" height="35" alt=""> <span>Hotel</span>
					</a>
				</div>
				<div class="menubar">
					<a id="toggle_btn" href="javascript:void(0);"><i class="fas fa-bars"></i></a>
				</div>
				
				<div class="searchbar">
					<form class="form-inline my-1 w-25 float-left">
						<input class="form-control mr-sm-2 search-input" type="search" placeholder="Search..." >
					</form>
				</div>		
				<a id="mobile_btn" class="mobile_btn float-left" href="#sidebar"><i class="fas fa-bars"></i></a>
				<ul class="nav user-menu float-right">
					<li class="nav-item dropdown d-none d-sm-block">
						<a href="#" class="dropdown-toggle nav-link" data-toggle="dropdown"><i class="far fa-bell"></i> <span class="badge badge-pill bg-primary float-right">3</span></a>
						<div class="dropdown-menu notifications">
							<div class="topnav-dropdown-header">
								<span>Notifications</span>
							</div>
							<div class="drop-scroll">
								<ul class="notification-list">
									<li class="notification-message">
										<a href="{{ url('/activities')}}">
											<div class="media">
												<span class="avatar">
													<img alt="John Doe" src="assets/img/user.jpg" class="img-fluid rounded-circle">
												</span>
												<div class="media-body">
													<p class="noti-details"><span class="noti-title">John Doe</span> booking a new room<span class="noti-title"></span></p>
													<p class="noti-time"><span class="notification-time">4 mins ago</span></p>
												</div>
											</div>
										</a>
									</li>
									<li class="notification-message">
										<a href="{{ url('/activities')}}">
											<div class="media">
												<span class="avatar">V</span>
												<div class="media-body">
													<p class="noti-details"><span class="noti-title">Tarah Shropshire</span> check-in   <span class="noti-title"> with payment gateway</span></p>
													<p class="noti-time"><span class="notification-time">6 mins ago</span></p>
												</div>
											</div>
										</a>
									</li>
									<li class="notification-message">
										<a href="{{ url('/activities')}}">
											<div class="media">
												<span class="avatar">L</span>
												<div class="media-body">
													<p class="noti-details"><span class="noti-title">Misty Tison</span> check-out <span class="noti-title">Today</span> </p>
													<p class="noti-time"><span class="notification-time">8 mins ago</span></p>
												</div>
											</div>
										</a>
									</li>
									<li class="notification-message">
										<a href="{{ url('/activities')}}">
											<div class="media">
												<span class="avatar">G</span>
												<div class="media-body">
													<p class="noti-details"><span class="noti-title">Rolland Webber</span> Extended another  <span class="noti-title">two days</span></p>
													<p class="noti-time"><span class="notification-time">12 mins ago</span></p>
												</div>
											</div>
										</a>
									</li>
									<li class="notification-message">
										<a href="{{ url('/activities')}}">
											<div class="media">
												<span class="avatar">V</span>
												<div class="media-body">
													<p class="noti-details"><span class="noti-title">Bernardo Galaviz</span> added new booking <span class="noti-title">for couple of days</span></p>
													<p class="noti-time"><span class="notification-time">2 days ago</span></p>
												</div>
											</div>
										</a>
									</li>
								</ul>
							</div>
							<div class="topnav-dropdown-footer">
								<a href="{{ url('/activities')}}">View all Notifications</a>
							</div>
						</div>
					</li>
					<li class="nav-item dropdown d-none d-sm-block">
						<a href="javascript:void(0);" id="open_msg_box" class="hasnotifications nav-link"><i class="far fa-comment"></i> <span class="badge badge-pill bg-primary float-right">8</span></a>
					</li>
					<li class="nav-item dropdown has-arrow">
						<a href="#" class="dropdown-toggle nav-link user-link" data-toggle="dropdown">
							<span class="user-img"><img class="rounded-circle" src="assets/img/user.jpg" width="40" alt="Admin">
								<span class="status online"></span></span>
							<span>Admin</span>
						</a>
						<div class="dropdown-menu">
							<a class="dropdown-item" href="{{ url('/profile')}}">My Profile</a>
							<a class="dropdown-item" href="edit-{{ url('/profile')}}">Edit Profile</a>
							<a class="dropdown-item" href="{{ url('/settings')}}">Settings</a>
							<a class="dropdown-item" href="{{ url('/login')}}">Logout</a>
						</div>
					</li>
				</ul>
				<div class="dropdown mobile-user-menu float-right">
					<a href="#" class="nav-link dropdown-toggle" data-toggle="dropdown" aria-expanded="false"><i class="fas fa-ellipsis-v"></i></a>
					<div class="dropdown-menu dropdown-menu-right">
						<a class="dropdown-item" href="{{ url('/profile')}}">My Profile</a>
						<a class="dropdown-item" href="edit-{{ url('/profile')}}">Edit Profile</a>
						<a class="dropdown-item" href="{{ url('/settings')}}">Settings</a>
						<a class="dropdown-item" href="{{ url('/login')}}">Logout</a>
					</div>
				</div>
			</div>
			<!-- /Header -->
			
			<!-- Sidebar -->
			<div class="sidebar" id="sidebar">
			
				<div class="sidebar-inner slimscroll">
					<div id="sidebar-menu" class="sidebar-menu">
						<ul>
							<li class="menu-title">Main</li>
							<li>
								<a href="{{ url('/index')}}"><i class="fas fa-tachometer-alt"></i> <span>Dashboard</span></a>
							</li>
							<li class="submenu">
								<a href="#"><i class="fas fa-suitcase" aria-hidden="true"></i><span> Booking</span> <span class="menu-arrow"></span></a>
								<ul style="display: none;">
									<li><a href="{{ url('/all-booking')}}">All Booking</a></li>
									<li><a href="{{ url('/edit-booking')}}">Edit Booking</a></li>
									<li><a href="{{ url('/add-booking')}}">Add Booking</a></li>
								</ul>
							</li>
							<li class="submenu">
								<a href="#"><i class="fas fa-users" aria-hidden="true"></i> <span> Customers </span> <span class="menu-arrow"></span></a>
								<ul style="display: none;">
									<li><a href="{{ url('/all-customers')}}">All customers</a></li>
									<li><a href="{{ url('/edit-customer')}}">Edit Customer</a></li>
									<li><a href="{{ url('/add-customer')}}">Add Customer</a></li>
								</ul>
							</li>
							<li class="submenu">
								<a href="#"><i class="fas fa-key" aria-hidden="true"></i> <span> Rooms </span> <span class="menu-arrow"></span></a>
								<ul style="display: none;">
									<li><a href="{{ url('/all-rooms')}}">All Rooms</a></li>
									<li><a href="{{ url('/edit-room')}}">Edit Room</a></li>
									<li><a href="{{ url('/add-room')}}">Add Room</a></li>
								</ul>
							</li>
							
							<li>
								<a href="{{ url('/pricing ')}}"><i class="far fa-money-bill-alt" aria-hidden="true"></i> <span>Pricing</span></a>
							</li>
							<li class="submenu">
								<a href="#"><i class="fas fa-share-alt" aria-hidden="true"></i> <span> Apps </span> <span class="menu-arrow"></span></a>
								<ul style="display: none;">
									<li>
										<a href="{{ url('/chat')}}"><i class="fas fa-comments"></i> <span>Chat</span> <span class="badge badge-pill text-white bg-primary float-right">5</span></a>
									</li>
									
							</li>
							
							<li class="submenu">
								<a href="#"><i class="far fa-money-bill-alt"></i> <span> Accounts </span> <span class="menu-arrow"></span></a>
								<ul style="display: none;">
									<li><a href="{{ url('/payments ')}}">Payments</a></li>
									<li><a href="{{ url('/expenses ')}}">Expenses</a></li>
								</ul>
							</li>
						
						
							<li>
								<a href="{{ url('/activities')}}"><i class="far fa-bell"></i> <span>Activities</span></a>
							</li>
							
							<li>
								<a href="{{ url('/settings')}}"><i class="fas fa-cog"></i> <span>Settings</span></a>
							</li>

							
							
							
							
							<li class="menu-title">Extras</li>
							<li class="submenu">
								<a href="#"><i class="fas fa-columns"></i> <span>Pages</span> <span class="menu-arrow"></span></a>
								<ul style="display: none;">
									<li><a href="{{ url('/login')}}"> Login </a></li>
									<li><a href="{{ url('/register ')}}"> Register </a></li>
									<li><a href="{{ url('/forgot-password ')}}"> Forgot Password </a></li>
									<li><a href="{{ url('/change-password2 ')}}"> Change Password </a></li>
									<li><a href="{{ url('/profile')}}"> Profile </a></li>
									
								</ul>
							</li>
							
						</ul>
					</div>
				</div>
			</div>
			<!-- /Sidebar -->
			
			<!-- Page Wrapper -->
			<div class="page-wrapper">
				<div class="content">
					<div class="row">
						<div class="col-sm-12">
							<h4 class="page-title">Notification</h4>
						</div>
					</div>
					
					<div class="row">
					
						<!-- Alert -->
						<div class="col-md-4">	
							<div class="card">
								<div class="card-header">
									<div class="card-title mb-0">Alert</div>
								</div>
								<div class="card-body">
									 <a href="javascript: void(0);"  id="alert" class="btn btn-primary waves-effect waves-light">Click me</a>
								</div>
							</div>
						</div>
						<!-- /Alert -->
						
						<!-- Alert -->
						<div class="col-md-4">	
							<div class="card">
								<div class="card-header">
									<div class="card-title mb-0">Confirm</div>
								</div>
								<div class="card-body">
									  <a href="javascript: void(0);"  id="alert-confirm" class="btn btn-primary waves-effect waves-light">Click me</a>
								</div>
							</div>
						</div>
						<!-- /Alert -->
						
						<!-- Alert -->
						<div class="col-md-4">	
							<div class="card">
								<div class="card-header">
									<div class="card-title mb-0">Prompt</div>
								</div>
								<div class="card-body">
									 <a href="javascript: void(0);"  id="alert-prompt" class="btn btn-primary waves-effect waves-light">Click me</a>
								</div>
							</div>
						</div>
						<!-- /Alert -->
						
						<!-- Alert -->
						<div class="col-md-4">	
							<div class="card">
								<div class="card-header">
									<div class="card-title mb-0">Success Alert</div>
								</div>
								<div class="card-body">
									 <a href="javascript: void(0);"  id="alert-success" class="btn btn-primary btn-sm waves-effect waves-light">Click me</a>
								</div>
							</div>
						</div>
						<!-- /Alert -->
						
						<!-- Alert -->
						<div class="col-md-4">	
							<div class="card">
								<div class="card-header">
									<div class="card-title mb-0">Error Alert</div>
								</div>
								<div class="card-body">
									 <a href="javascript: void(0);"  id="alert-error" class="btn btn-primary btn-sm waves-effect waves-light">Click me</a>
								</div>
							</div>
						</div>
						<!-- /Alert -->
						
						<!-- Alert -->
						<div class="col-md-4">	
							<div class="card">
								<div class="card-header">
									<div class="card-title mb-0">Warnng Alert</div>
								</div>
								<div class="card-body">
									 <a href="javascript: void(0);"  id="alert-warning" class="btn btn-primary btn-sm waves-effect waves-light">Click me</a>
								</div>
							</div>
						</div>
						<!-- /Alert -->
						
					</div>	
				</div>
				
				<!-- Notifications -->
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
												<span class="message-author">Richard Miles </span>
												<span class="message-time">12:28 AM</span>
												<div class="clearfix"></div>
												<span class="message-content">Lorem ipsum dolor sit amet, consectetur adipiscing</span>
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
												<span class="message-author">John Doe</span>
												<span class="message-time">1 Aug</span>
												<div class="clearfix"></div>
												<span class="message-content">Lorem ipsum dolor sit amet, consectetur adipiscing</span>
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
												<span class="message-author"> Tarah Shropshire </span>
												<span class="message-time">12:28 AM</span>
												<div class="clearfix"></div>
												<span class="message-content">Lorem ipsum dolor sit amet, consectetur adipiscing</span>
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
												<span class="message-author">Mike Litorus</span>
												<span class="message-time">12:28 AM</span>
												<div class="clearfix"></div>
												<span class="message-content">Lorem ipsum dolor sit amet, consectetur adipiscing</span>
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
												<span class="message-author"> Catherine Manseau </span>
												<span class="message-time">12:28 AM</span>
												<div class="clearfix"></div>
												<span class="message-content">Lorem ipsum dolor sit amet, consectetur adipiscing</span>
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
												<span class="message-author"> Domenic Houston </span>
												<span class="message-time">12:28 AM</span>
												<div class="clearfix"></div>
												<span class="message-content">Lorem ipsum dolor sit amet, consectetur adipiscing</span>
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
												<span class="message-author"> Buster Wigton </span>
												<span class="message-time">12:28 AM</span>
												<div class="clearfix"></div>
												<span class="message-content">Lorem ipsum dolor sit amet, consectetur adipiscing</span>
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
												<span class="message-author"> Rolland Webber </span>
												<span class="message-time">12:28 AM</span>
												<div class="clearfix"></div>
												<span class="message-content">Lorem ipsum dolor sit amet, consectetur adipiscing</span>
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
												<span class="message-author"> Claire Mapes </span>
												<span class="message-time">12:28 AM</span>
												<div class="clearfix"></div>
												<span class="message-content">Lorem ipsum dolor sit amet, consectetur adipiscing</span>
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
												<span class="message-author">Melita Faucher</span>
												<span class="message-time">12:28 AM</span>
												<div class="clearfix"></div>
												<span class="message-content">Lorem ipsum dolor sit amet, consectetur adipiscing</span>
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
												<span class="message-author">Jeffery Lalor</span>
												<span class="message-time">12:28 AM</span>
												<div class="clearfix"></div>
												<span class="message-content">Lorem ipsum dolor sit amet, consectetur adipiscing</span>
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
												<span class="message-author">Loren Gatlin</span>
												<span class="message-time">12:28 AM</span>
												<div class="clearfix"></div>
												<span class="message-content">Lorem ipsum dolor sit amet, consectetur adipiscing</span>
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
												<span class="message-author">Tarah Shropshire</span>
												<span class="message-time">12:28 AM</span>
												<div class="clearfix"></div>
												<span class="message-content">Lorem ipsum dolor sit amet, consectetur adipiscing</span>
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
				<!-- /Notification -->
					
			</div>
			<!-- /Page Wrapper -->
				
		</div>
		<!-- /Main Wrapper -->
		
		<div class="sidebar-overlay" data-reff=""></div>
		
		
@endsection