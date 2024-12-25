@extends('dashboard.layouts.main')

@section('main-container')

        <div class="page-wrapper">
            <div class="content">
                <div class="row">
                    <div class="col-sm-4 col-4">
                        <h4 class="page-title">All Rooms</h4>
                    </div>
                    <div class="col-sm-8 col-8 text-right m-b-20">
                        <a href="{{ url('/add-room')}}" class="btn btn btn-primary btn-rounded float-right"><i class="fas fa-plus"></i> Add Room</a>
                    </div>
                </div>
				<div class="row">
					<div class="col-md-12">
						<div class="table-responsive">
							<table class="table table-striped custom-table">
								<thead>
									<tr>
										<th style="width:10%;">Room number</th>
										<th style="width:10%;">Img</th>
										<th>Room type</th>
										<th>AC/Non-AC</th>
										<th style="width:10%;">Food</th>
										<th>Bed Count</th>
										<th style="width:10%;">Phone</th>
										<th style="width:10%;">Rent</th>
										<th class="text-right">Action</th>
									</tr>
								</thead>
								<tbody>
									<tr>
										<td>201</td>
										<td><img width="28" height="28" src="dashboard/assets/img/user.jpg" class="rounded-circle m-r-5" alt=""></td>
										<td>Single</td>
										<td>AC</td>
										<td>Free Breakfast & Dinner</td>
										<td>1</td>
										<td>987654321</td>
										<td>$ 25</td>
										<td class="text-right">
											<div class="dropdown dropdown-action">
												<a href="#" class="action-icon dropdown-toggle" data-toggle="dropdown" aria-expanded="false"><i class="fas fa-ellipsis-v"></i></a>
												<div class="dropdown-menu dropdown-menu-right">
													<a class="dropdown-item" href="{{ url('/edit-room')}}"><i class="fas fa-pencil-alt m-r-5"></i> Edit</a>
													<a class="dropdown-item" href="#" data-toggle="modal" data-target="#delete_room"><i class="fas fa-trash-alt m-r-5"></i> Delete</a>
												</div>
											</div>
										</td>
									</tr>
									<tr>
										<td>202</td>
										<td><img width="28" height="28" src="dashboard/assets/img/user.jpg" class="rounded-circle m-r-5" alt=""></td>
										<td>Double</td>
										<td>Non-AC</td>
										<td>Free Breakfast</td>
										<td>2</td>
										<td>978563421</td>
										<td>$ 15</td>
										<td class="text-right">
											<div class="dropdown dropdown-action">
												<a href="#" class="action-icon dropdown-toggle" data-toggle="dropdown" aria-expanded="false"><i class="fas fa-ellipsis-v"></i></a>
												<div class="dropdown-menu dropdown-menu-right">
													<a class="dropdown-item" href="{{ url('/edit-room')}}"><i class="fas fa-pencil-alt m-r-5"></i> Edit</a>
													<a class="dropdown-item" href="#" data-toggle="modal" data-target="#delete_room"><i class="fas fa-trash-alt m-r-5"></i> Delete</a>
												</div>
											</div>
										</td>
									</tr>
									<tr>
										<td>203</td>
										<td><img width="28" height="28" src="dashboard/assets/img/user.jpg" class="rounded-circle m-r-5" alt=""></td>
										<td>Single</td>
										<td>Non-AC</td>
										<td>Free Lunch</td>
										<td>1</td>
										<td>978563421</td>
										<td>$ 20</td>
										<td class="text-right">
											<div class="dropdown dropdown-action">
												<a href="#" class="action-icon dropdown-toggle" data-toggle="dropdown" aria-expanded="false"><i class="fas fa-ellipsis-v"></i></a>
												<div class="dropdown-menu dropdown-menu-right">
													<a class="dropdown-item" href="{{ url('/edit-room')}}"><i class="fas fa-pencil-alt m-r-5"></i> Edit</a>
													<a class="dropdown-item" href="#" data-toggle="modal" data-target="#delete_room"><i class="fas fa-trash-alt m-r-5"></i> Delete</a>
												</div>
											</div>
										</td>
									</tr>
									<tr>
										<td>204</td>
										<td><img width="28" height="28" src="dashboard/assets/img/user.jpg" class="rounded-circle m-r-5" alt=""></td>
										<td>Quad</td>
										<td>AC</td>
										<td>Free Breakfast</td>
										<td>4</td>
										<td>978563421</td>
										<td>$ 30</td>
										<td class="text-right">
											<div class="dropdown dropdown-action">
												<a href="#" class="action-icon dropdown-toggle" data-toggle="dropdown" aria-expanded="false"><i class="fas fa-ellipsis-v"></i></a>
												<div class="dropdown-menu dropdown-menu-right">
													<a class="dropdown-item" href="{{ url('/edit-room')}}"><i class="fas fa-pencil-alt m-r-5"></i> Edit</a>
													<a class="dropdown-item" href="#" data-toggle="modal" data-target="#delete_room"><i class="fas fa-trash-alt m-r-5"></i> Delete</a>
												</div>
											</div>
										</td>
									</tr>
									<tr>
										<td>205</td>
										<td><img width="28" height="28" src="dashboard/assets/img/user.jpg" class="rounded-circle m-r-5" alt=""></td>
										<td>Double</td>
										<td>Non-AC</td>
										<td>Free Breakfast</td>
										<td>2</td>
										<td>978563421</td>
										<td>$ 15</td>
										<td class="text-right">
											<div class="dropdown dropdown-action">
												<a href="#" class="action-icon dropdown-toggle" data-toggle="dropdown" aria-expanded="false"><i class="fas fa-ellipsis-v"></i></a>
												<div class="dropdown-menu dropdown-menu-right">
													<a class="dropdown-item" href="{{ url('/edit-room')}}"><i class="fas fa-pencil-alt m-r-5"></i> Edit</a>
													<a class="dropdown-item" href="#" data-toggle="modal" data-target="#delete_room"><i class="fas fa-trash-alt m-r-5"></i> Delete</a>
												</div>
											</div>
										</td>
									</tr>
									<tr>
										<td>206</td>
										<td><img width="28" height="28" src="dashboard/assets/img/user.jpg" class="rounded-circle m-r-5" alt=""></td>
										<td>Double</td>
										<td>AC</td>
										<td>Free Breakfast</td>
										<td>2</td>
										<td>978563421</td>
										<td>$ 30</td>
										<td class="text-right">
											<div class="dropdown dropdown-action">
												<a href="#" class="action-icon dropdown-toggle" data-toggle="dropdown" aria-expanded="false"><i class="fas fa-ellipsis-v"></i></a>
												<div class="dropdown-menu dropdown-menu-right">
													<a class="dropdown-item" href="{{ url('/edit-room')}}"><i class="fas fa-pencil-alt m-r-5"></i> Edit</a>
													<a class="dropdown-item" href="#" data-toggle="modal" data-target="#delete_room"><i class="fas fa-trash-alt m-r-5"></i> Delete</a>
												</div>
											</div>
										</td>
									</tr><tr>
										<td>207</td>
										<td><img width="28" height="28" src="dashboard/assets/img/user.jpg" class="rounded-circle m-r-5" alt=""></td>
										<td>Double</td>
										<td>Non-AC</td>
										<td>Free Breakfast</td>
										<td>4</td>
										<td>978563421</td>
										<td>$ 15</td>
										<td class="text-right">
											<div class="dropdown dropdown-action">
												<a href="#" class="action-icon dropdown-toggle" data-toggle="dropdown" aria-expanded="false"><i class="fas fa-ellipsis-v"></i></a>
												<div class="dropdown-menu dropdown-menu-right">
													<a class="dropdown-item" href="{{ url('/edit-room')}}"><i class="fas fa-pencil-alt m-r-5"></i> Edit</a>
													<a class="dropdown-item" href="#" data-toggle="modal" data-target="#delete_room"><i class="fas fa-trash-alt m-r-5"></i> Delete</a>
												</div>
											</div>
										</td>
									</tr><tr>
										<td>208</td>
										<td><img width="28" height="28" src="dashboard/assets/img/user.jpg" class="rounded-circle m-r-5" alt=""></td>
										<td>Double</td>
										<td>Non-AC</td>
										<td>Free Dinner</td>
										<td>2</td>
										<td>978563421</td>
										<td>$ 15</td>
										<td class="text-right">
											<div class="dropdown dropdown-action">
												<a href="#" class="action-icon dropdown-toggle" data-toggle="dropdown" aria-expanded="false"><i class="fas fa-ellipsis-v"></i></a>
												<div class="dropdown-menu dropdown-menu-right">
													<a class="dropdown-item" href="{{ url('/edit-room')}}"><i class="fas fa-pencil-alt m-r-5"></i> Edit</a>
													<a class="dropdown-item" href="#" data-toggle="modal" data-target="#delete_room"><i class="fas fa-trash-alt m-r-5"></i> Delete</a>
												</div>
											</div>
										</td>
									</tr><tr>
										<td>209</td>
										<td><img width="28" height="28" src="dashboard/assets/img/user.jpg" class="rounded-circle m-r-5" alt=""></td>
										<td>Double</td>
										<td>AC</td>
										<td>Free Breakfast</td>
										<td>2</td>
										<td>978563421</td>
										<td>$ 20</td>
										<td class="text-right">
											<div class="dropdown dropdown-action">
												<a href="#" class="action-icon dropdown-toggle" data-toggle="dropdown" aria-expanded="false"><i class="fas fa-ellipsis-v"></i></a>
												<div class="dropdown-menu dropdown-menu-right">
													<a class="dropdown-item" href="{{ url('/edit-room')}}"><i class="fas fa-pencil-alt m-r-5"></i> Edit</a>
													<a class="dropdown-item" href="#" data-toggle="modal" data-target="#delete_room"><i class="fas fa-trash-alt m-r-5"></i> Delete</a>
												</div>
											</div>
										</td>
									</tr>
									<tr>
										<td>210</td>
										<td><img width="28" height="28" src="dashboard/assets/img/user.jpg" class="rounded-circle m-r-5" alt=""></td>
										<td>Double</td>
										<td>Non-AC</td>
										<td>Free Breakfast</td>
										<td>2</td>
										<td>978563421</td>
										<td>$ 15</td>
										<td class="text-right">
											<div class="dropdown dropdown-action">
												<a href="#" class="action-icon dropdown-toggle" data-toggle="dropdown" aria-expanded="false"><i class="fas fa-ellipsis-v"></i></a>
												<div class="dropdown-menu dropdown-menu-right">
													<a class="dropdown-item" href="{{ url('/edit-room')}}"><i class="fas fa-pencil-alt m-r-5"></i> Edit</a>
													<a class="dropdown-item" href="#" data-toggle="modal" data-target="#delete_room"><i class="fas fa-trash-alt m-r-5"></i> Delete</a>
												</div>
											</div>
										</td>
									</tr>
								</tbody>
							</table>
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
		<div id="delete_room" class="modal fade delete-modal" role="dialog">
				<div class="modal-dialog modal-dialog-centered">
					<div class="modal-content">
						<div class="modal-body text-center">
							<img src="assets/img/sent.png" alt="" width="50" height="46">
							<h3>Are you sure want to delete this Appointment?</h3>
							<div class="m-t-20"> <a href="#" class="btn btn-white" data-dismiss="modal">Close</a>
								<button type="submit" class="btn btn-danger">Delete</button>
							</div>
						</div>
					</div>
				</div>
			</div>
    </div>
  

@endsection