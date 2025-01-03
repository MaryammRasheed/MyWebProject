@extends('dashboard.layouts.main')

@section('main-container')

        <div class="page-wrapper">
                       <div class="chat-main-row">
                <div class="chat-main-wrapper">
                    <div class="col-lg-9 message-view chat-view">
                        <div class="chat-window">
                            <div class="fixed-header">
                                <div class="navbar">
                                    <div class="user-details mr-auto">
                                        <div class="float-left user-img m-r-10">
                                            <a href="{{ url('/profile')}}" title="Jennifer Robinson"><img src="assets/img/patient-thumb-02.jpg" alt="" class="w-40 rounded-circle"><span class="status online"></span></a>
                                        </div>
                                        <div class="user-info float-left">
                                            <a href="{{ url('/profile')}}"><span class="font-bold">Jennifer Robinson</span> <i class="typing-text">Typing...</i></a>
                                            <span class="last-seen">Last seen today at 7:50 AM</span>
                                        </div>
                                    </div>
                                    <div class="search-box">
                                        <div class="input-group input-group-sm">
                                            <input type="text" class="form-control" placeholder="Search">
                                            <span class="input-group-append">
													<button class="btn" type="button"><i class="fas fa-search"></i></button>
												</span>
                                        </div>
                                    </div>
                                    <ul class="nav custom-menu">
                                        <li class="nav-item">
                                            <a href="#chat_sidebar" class="nav-link task-chat profile-rightbar float-right" id="task_chat"><i class="fas fa-user"></i></a>
                                        </li>
                                        <li class="nav-item">
                                            <a class="nav-link" href="voice-call.html"><i class="fas fa-phone"></i></a>
                                        </li>
                                        <li class="nav-item">
                                            <a class="nav-link" href="video-call.html"><i class="fas fa-video"></i></a>
                                        </li>
                                        <li class="nav-item dropdown dropdown-action">
                                            <a href="#" class="nav-link dropdown-toggle" data-toggle="dropdown" aria-expanded="false"><i class="fas fa-cog"></i></a>
                                            <div class="dropdown-menu dropdown-menu-right">
                                                <a class="dropdown-item" href="javascript:void(0)">Delete Conversations</a>
                                                <a class="dropdown-item" href="javascript:void(0)">Settings</a>
                                            </div>
                                        </li>
                                    </ul>
                                </div>
                            </div>
                            <div class="chat-contents">
                                <div class="chat-content-wrap">
                                    <div class="chat-wrap-inner">
                                        <div class="chat-box">
                                            <div class="chats">
                                                <div class="chat chat-right">
                                                    <div class="chat-body">
                                                        <div class="chat-bubble">
                                                            <div class="chat-content">
                                                                <p>Hello. What can I do for you?</p>
                                                                <span class="chat-time">8:30 am</span>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="chat-line">
                                                    <span class="chat-date">October 8th, 2015</span>
                                                </div>
                                                <div class="chat chat-left">
                                                    <div class="chat-avatar">
                                                        <a href="{{ url('/profile')}}" class="avatar">
                                                            <img alt="Jennifer Robinson" src="assets/img/patient-thumb-02.jpg" class="img-fluid rounded-circle">
                                                        </a>
                                                    </div>
                                                    <div class="chat-body">
                                                        <div class="chat-bubble">
                                                            <div class="chat-content">
                                                                <p>I'm just looking around.</p>
                                                                <p>Will you tell me something about yourself? </p>
                                                                <span class="chat-time">8:35 am</span>
                                                            </div>
                                                        </div>
                                                        <div class="chat-bubble">
                                                            <div class="chat-content">
                                                                <p>Are you there? That time!</p>
                                                                <span class="chat-time">8:40 am</span>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="chat chat-right">
                                                    <div class="chat-body">
                                                        <div class="chat-bubble">
                                                            <div class="chat-content">
                                                                <p>Where?</p>
                                                                <span class="chat-time">8:35 am</span>
                                                            </div>
                                                        </div>
                                                        <div class="chat-bubble">
                                                            <div class="chat-content">
                                                                <p>OK, my name is Limingqiang. I like singing, playing basketballand so on.</p>
                                                                <span class="chat-time">8:42 am</span>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="chat chat-left">
                                                    <div class="chat-avatar">
                                                        <a href="{{ url('/profile')}}" class="avatar">
                                                            <img alt="Jennifer Robinson" src="assets/img/patient-thumb-02.jpg" class="img-fluid rounded-circle">
                                                        </a>
                                                    </div>
                                                    <div class="chat-body">
                                                        <div class="chat-bubble">
                                                            <div class="chat-content">
                                                                <p>You wait for notice.</p>
                                                                <span class="chat-time">8:30 am</span>
                                                            </div>
                                                        </div>
                                                        <div class="chat-bubble">
                                                            <div class="chat-content">
                                                                <p>Consectetuorem ipsum dolor sit?</p>
                                                                <span class="chat-time">8:50 am</span>
                                                            </div>
                                                        </div>
                                                        <div class="chat-bubble">
                                                            <div class="chat-content">
                                                                <p>OK?</p>
                                                                <span class="chat-time">8:55 am</span>
                                                            </div>
                                                        </div>
                                                        <div class="chat-bubble">
                                                            <div class="chat-content img-content">
                                                                <div class="chat-img-group clearfix">
                                                                    <p>Uploaded 3 Images</p>
                                                                    <a class="chat-img-attach" href="#">
                                                                        <img width="182" height="137" alt="" src="assets/img/placeholder.jpg">
                                                                        <div class="chat-placeholder">
                                                                            <div class="chat-img-name">placeholder.jpg</div>
                                                                            <div class="chat-file-desc">842 KB</div>
                                                                        </div>
                                                                    </a>
                                                                    <a class="chat-img-attach" href="#">
                                                                        <img width="182" height="137" alt="" src="assets/img/placeholder.jpg">
                                                                        <div class="chat-placeholder">
                                                                            <div class="chat-img-name">842 KB</div>
                                                                        </div>
                                                                    </a>
                                                                    <a class="chat-img-attach" href="#">
                                                                        <img width="182" height="137" alt="" src="assets/img/placeholder.jpg">
                                                                        <div class="chat-placeholder">
                                                                            <div class="chat-img-name">placeholder.jpg</div>
                                                                            <div class="chat-file-desc">842 KB</div>
                                                                        </div>
                                                                    </a>
                                                                </div>
                                                                <span class="chat-time">9:00 am</span>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="chat chat-right">
                                                    <div class="chat-body">
                                                        <div class="chat-bubble">
                                                            <div class="chat-content">
                                                                <p>OK!</p>
                                                                <span class="chat-time">9:00 am</span>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="chat chat-left">
                                                    <div class="chat-avatar">
                                                        <a href="{{ url('/profile')}}" class="avatar">
                                                            <img alt="Jennifer Robinson" src="assets/img/patient-thumb-02.jpg" class="img-fluid rounded-circle">
                                                        </a>
                                                    </div>
                                                    <div class="chat-body">
                                                        <div class="chat-bubble">
                                                            <div class="chat-content">
                                                                <p>Uploaded 3 files</p>
                                                                <ul class="attach-list">
                                                                    <li><i class="fas fa-file-alt"></i> <a href="#">example.avi</a></li>
                                                                    <li><i class="fas fa-file-alt"></i> <a href="#">activity.psd</a></li>
                                                                    <li><i class="fas fa-file-alt"></i> <a href="#">example.psd</a></li>
                                                                </ul>
                                                            </div>
                                                        </div>
                                                        <div class="chat-bubble">
                                                            <div class="chat-content">
                                                                <p>Consectetuorem ipsum dolor sit?</p>
                                                                <span class="chat-time">8:50 am</span>
                                                            </div>
                                                        </div>
                                                        <div class="chat-bubble">
                                                            <div class="chat-content">
                                                                <p>OK?</p>
                                                                <span class="chat-time">8:55 am</span>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="chat chat-right">
                                                    <div class="chat-body">
                                                        <div class="chat-bubble">
                                                            <div class="chat-content img-content">
                                                                <div class="chat-img-group clearfix">
                                                                    <p>Uploaded 6 Images</p>
                                                                    <a class="chat-img-attach" href="#">
                                                                        <img width="182" height="137" alt="" src="assets/img/placeholder.jpg">
                                                                        <div class="chat-placeholder">
                                                                            <div class="chat-img-name">placeholder.jpg</div>
                                                                            <div class="chat-file-desc">842 KB</div>
                                                                        </div>
                                                                    </a>
                                                                    <a class="chat-img-attach" href="#">
                                                                        <img width="182" height="137" alt="" src="assets/img/placeholder.jpg">
                                                                        <div class="chat-placeholder">
                                                                            <div class="chat-img-name">842 KB</div>
                                                                        </div>
                                                                    </a>
                                                                    <a class="chat-img-attach" href="#">
                                                                        <img width="182" height="137" alt="" src="assets/img/placeholder.jpg">
                                                                        <div class="chat-placeholder">
                                                                            <div class="chat-img-name">placeholder.jpg</div>
                                                                            <div class="chat-file-desc">842 KB</div>
                                                                        </div>
                                                                    </a>
                                                                    <a class="chat-img-attach" href="#">
                                                                        <img width="182" height="137" alt="" src="assets/img/placeholder.jpg">
                                                                        <div class="chat-placeholder">
                                                                            <div class="chat-img-name">placeholder.jpg</div>
                                                                            <div class="chat-file-desc">842 KB</div>
                                                                        </div>
                                                                    </a>
                                                                    <a class="chat-img-attach" href="#">
                                                                        <img width="182" height="137" alt="" src="assets/img/placeholder.jpg">
                                                                        <div class="chat-placeholder">
                                                                            <div class="chat-img-name">placeholder.jpg</div>
                                                                            <div class="chat-file-desc">842 KB</div>
                                                                        </div>
                                                                    </a>
                                                                    <a class="chat-img-attach" href="#">
                                                                        <img width="182" height="137" alt="" src="assets/img/placeholder.jpg">
                                                                        <div class="chat-placeholder">
                                                                            <div class="chat-img-name">placeholder.jpg</div>
                                                                            <div class="chat-file-desc">842 KB</div>
                                                                        </div>
                                                                    </a>
                                                                </div>
                                                                <span class="chat-time">9:00 am</span>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="chat chat-left">
                                                    <div class="chat-avatar">
                                                        <a href="{{ url('/profile')}}" class="avatar">
                                                            <img alt="Jennifer Robinson" src="assets/img/patient-thumb-02.jpg" class="img-fluid rounded-circle">
                                                        </a>
                                                    </div>
                                                    <div class="chat-body">
                                                        <div class="chat-bubble">
                                                            <div class="chat-content">
                                                                <ul class="attach-list">
                                                                    <li class="pdf-file"><i class="fas fa-file-alt"></i> <a href="#">Document_2016.pdf</a></li>
                                                                </ul>
                                                                <span class="chat-time">9:00 am</span>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="chat chat-right">
                                                    <div class="chat-body">
                                                        <div class="chat-bubble">
                                                            <div class="chat-content">
                                                                <ul class="attach-list">
                                                                    <li class="pdf-file"><i class="fas fa-file-alt"></i> <a href="#">Document_2016.pdf</a></li>
                                                                </ul>
                                                                <span class="chat-time">9:00 am</span>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="chat chat-left">
                                                    <div class="chat-avatar">
                                                        <a href="{{ url('/profile')}}" class="avatar">
                                                            <img alt="Jennifer Robinson" src="assets/img/patient-thumb-02.jpg" class="img-fluid rounded-circle">
                                                        </a>
                                                    </div>
                                                    <div class="chat-body">
                                                        <div class="chat-bubble">
                                                            <div class="chat-content">
                                                                <p>Typing ...</p>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="chat-footer">
                                <div class="message-bar">
                                    <div class="message-inner">
                                        <a class="link attach-icon" href="#" data-toggle="modal" data-target="#drag_files"><img src="assets/img/attachment.png" alt=""></a>
                                        <div class="message-area">
                                            <div class="input-group">
                                                <textarea class="form-control" placeholder="Type message..."></textarea>
                                                <span class="input-group-append">
													<button class="btn btn-primary" type="button"><i class="fas fa-paper-plane"></i></button>
												</span>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-3 message-view chat-profile-view chat-sidebar" id="chat_sidebar">
                        <div class="chat-window video-window">
                            <div class="fixed-header">
                                <ul class="nav nav-tabs nav-tabs-bottom">
                                    <li class="nav-item"><a class="nav-link" href="#calls_tab" data-toggle="tab">Calls</a></li>
                                    <li class="nav-item"><a class="nav-link active" href="#profile_tab" data-toggle="tab">Profile</a></li>
                                </ul>
                            </div>
                            <div class="tab-content chat-contents">
                                <div class="content-full tab-pane" id="calls_tab">
                                    <div class="chat-wrap-inner">
                                        <div class="chat-box">
                                            <div class="chats">
                                                <div class="chat chat-left">
                                                    <div class="chat-avatar">
                                                        <a href="{{ url('/profile')}}" class="avatar">
                                                            <img alt="Cristina Groves" src="assets/img/doctor-thumb-03.jpg" class="img-fluid rounded-circle">
                                                        </a>
                                                    </div>
                                                    <div class="chat-body">
                                                        <div class="chat-bubble">
                                                            <div class="chat-content">
                                                                <span class="chat-user">You</span> <span class="chat-time">8:35 am</span>
                                                                <div class="call-details">
                                                                    <i class="material-icons">phone_missed</i>
                                                                    <div class="call-info">
                                                                        <div class="call-user-details">
                                                                            <span class="call-description">Jeffrey Warden missed the call</span>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="chat chat-left">
                                                    <div class="chat-avatar">
                                                        <a href="{{ url('/profile')}}" class="avatar">
                                                            <img alt="Jennifer Robinson" src="assets/img/patient-thumb-02.jpg" class="img-fluid rounded-circle">
                                                        </a>
                                                    </div>
                                                    <div class="chat-body">
                                                        <div class="chat-bubble">
                                                            <div class="chat-content">
                                                                <span class="chat-user">Jennifer Robinson</span> <span class="chat-time">8:35 am</span>
                                                                <div class="call-details">
                                                                    <i class="material-icons">call_end</i>
                                                                    <div class="call-info">
                                                                        <div class="call-user-details"><span class="call-description">This call has ended</span></div>
                                                                        <div class="call-timing">Duration: <strong>5 min 57 sec</strong></div>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="chat-line">
                                                    <span class="chat-date">January 29th, 2015</span>
                                                </div>
                                                <div class="chat chat-left">
                                                    <div class="chat-avatar">
                                                        <a href="{{ url('/profile')}}" class="avatar">
                                                            <img alt="Cristina Groves" src="assets/img/doctor-thumb-03.jpg" class="img-fluid rounded-circle">
                                                        </a>
                                                    </div>
                                                    <div class="chat-body">
                                                        <div class="chat-bubble">
                                                            <div class="chat-content">
                                                                <span class="chat-user">You</span> <span class="chat-time">8:35 am</span>
                                                                <div class="call-details">
                                                                    <i class="material-icons">ring_volume</i>
                                                                    <div class="call-info">
                                                                        <div class="call-user-details">
                                                                            <a href="#" class="call-description call-description--linked" data-qa="call_attachment_link">Calling Jennifer ...</a>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="content-full tab-pane show active" id="profile_tab">
                                    <div class="display-table">
                                        <div class="table-row">
                                            <div class="table-body">
                                                <div class="table-content">
                                                    <div class="chat-profile-img">
                                                        <div class="edit-profile-img">
                                                            <img src="assets/img/doctor-03.jpg" alt="">
                                                            <span class="change-img">Change Image</span>
                                                        </div>
                                                        <h3 class="user-name m-t-10 mb-0">Cristina Groves</h3>
                                                        <small class="text-muted">Manager</small>
                                                        <a href="{{ url('/edit-profile')}}" class="btn btn-primary edit-btn"><i class="fas fa-pencil-alt"></i></a>
                                                    </div>
                                                    <div class="chat-profile-info">
                                                        <ul class="user-det-list">
                                                            <li>
                                                                <span>Username:</span>
                                                                <span class="float-right text-muted">@cristina_groves</span>
                                                            </li>
                                                            <li>
                                                                <span>DOB:</span>
                                                                <span class="float-right text-muted">3rd March</span>
                                                            </li>
                                                            <li>
                                                                <span>Email:</span>
                                                                <span class="float-right text-muted"><a href="https://preadmin.dreamstechnologies.com/cdn-cgi/l/email-protection" class="__cf_email__" data-cfemail="8deeffe4fef9e4e3eceaffe2fbe8fecde8f5ece0fde1e8a3eee2e0">[email&#160;protected]</a></span>
                                                            </li>
                                                            <li>
                                                                <span>Phone:</span>
                                                                <span class="float-right text-muted"> 770-889-6484</span>
                                                            </li>
                                                        </ul>
                                                    </div>
                                                    <div class="transfer-files">
                                                        <ul class="nav nav-tabs nav-tabs-solid nav-justified mb-0">
                                                            <li class="nav-item"><a class="nav-link active" href="#all_files" data-toggle="tab">All Files</a></li>
                                                            <li class="nav-item"><a class="nav-link" href="#my_files" data-toggle="tab">My Files</a></li>
                                                        </ul>
                                                        <div class="tab-content">
                                                            <div class="tab-pane show active" id="all_files">
                                                                <ul class="files-list">
                                                                    <li>
                                                                        <div class="files-cont">
                                                                            <div class="file-type">
                                                                                <span class="files-icon"><i class="fas fa-file-alt"></i></span>
                                                                            </div>
                                                                            <div class="files-info">
                                                                                <span class="file-name text-ellipsis">Lorem ipsum.xls</span>
                                                                                <span class="file-author"><a href="#">Loren Gatlin</a></span> <span class="file-date">May 31st at 6:53 PM</span>
                                                                            </div>
                                                                            <ul class="files-action">
                                                                                <li class="dropdown dropdown-action">
                                                                                    <a href="#" class="dropdown-toggle" data-toggle="dropdown" aria-expanded="false"><i class="fas fa-ellipsis-h"></i></a>
                                                                                    <div class="dropdown-menu">
                                                                                        <a class="dropdown-item" href="javascript:void(0)">Download</a>
                                                                                        <a class="dropdown-item" href="#" data-toggle="modal" data-target="#share_files">Share</a>
                                                                                    </div>
                                                                                </li>
                                                                            </ul>
                                                                        </div>
                                                                    </li>
                                                                </ul>
                                                            </div>
                                                            <div class="tab-pane" id="my_files">
                                                                <ul class="files-list">
                                                                    <li>
                                                                        <div class="files-cont">
                                                                            <div class="file-type">
                                                                                <span class="files-icon"><i class="fas fa-file-alt"></i></span>
                                                                            </div>
                                                                            <div class="files-info">
                                                                                <span class="file-name text-ellipsis">Lorem ipsum.xls</span>
                                                                                <span class="file-author"><a href="#">John Doe</a></span> <span class="file-date">May 31st at 6:53 PM</span>
                                                                            </div>
                                                                            <ul class="files-action">
                                                                                <li class="dropdown dropdown-action">
                                                                                    <a href="#" class="dropdown-toggle" data-toggle="dropdown" aria-expanded="false"><i class="fas fa-ellipsis-h"></i></a>
                                                                                    <div class="dropdown-menu">
                                                                                        <a class="dropdown-item" href="javascript:void(0)">Download</a>
                                                                                        <a class="dropdown-item" href="#" data-toggle="modal" data-target="#share_files">Share</a>
                                                                                    </div>
                                                                                </li>
                                                                            </ul>
                                                                        </div>
                                                                    </li>
                                                                </ul>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div id="drag_files" class="modal fade" role="dialog">
                <div class="modal-dialog modal-lg modal-dialog-centered">
                    <div class="modal-content">
                        <div class="modal-header">
                            <h3 class="modal-title">Drag and drop files upload</h3>
							<button type="button" class="close" data-dismiss="modal">&times;</button>
                        </div>
                        <div class="modal-body">
                            <form id="js-upload-form">
                                <div class="upload-drop-zone" id="drop-zone">
                                    <i class="fas fa-cloud-upload-alt fa-2x"></i> <span class="upload-text">Just drag and drop files here</span>
                                </div>
                                <h4>Uploading</h4>
                                <ul class="upload-list">
                                    <li class="file-list">
                                        <div class="upload-wrap">
                                            <div class="file-name">
                                                <i class="fas fa-image"></i> photo.png
                                            </div>
                                            <div class="file-size">1.07 gb</div>
                                            <button type="button" class="file-close">
                                                <i class="fas fa-times"></i>
                                            </button>
                                        </div>
                                        <div class="progress progress-xs progress-striped">
                                            <div class="progress-bar bg-success" role="progressbar" style="width: 65%"></div>
                                        </div>
                                        <div class="upload-process">37% done</div>
                                    </li>
                                    <li class="file-list">
                                        <div class="upload-wrap">
                                            <div class="file-name">
                                                <i class="fas fa-file-alt"></i> task.doc
                                            </div>
                                            <div class="file-size">5.8 kb</div>
                                            <button type="button" class="file-close">
                                                <i class="fas fa-times"></i>
                                            </button>
                                        </div>
                                        <div class="progress progress-xs progress-striped">
                                            <div class="progress-bar bg-success" role="progressbar" style="width: 65%"></div>
                                        </div>
                                        <div class="upload-process">37% done</div>
                                    </li>
                                    <li class="file-list">
                                        <div class="upload-wrap">
                                            <div class="file-name">
                                                <i class="fas fa-image"></i> dashboard.png
                                            </div>
                                            <div class="file-size">2.1 mb</div>
                                            <button type="button" class="file-close">
                                                <i class="fas fa-times"></i>
                                            </button>
                                        </div>
                                        <div class="progress progress-xs progress-striped">
                                            <div class="progress-bar bg-success" role="progressbar" style="width: 65%"></div>
                                        </div>
                                        <div class="upload-process">Completed</div>
                                    </li>
                                </ul>
                            </form>
                            <div class="m-t-30 text-center">
                                <button class="btn btn-primary submit-btn">Add to upload</button>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div id="add_group" class="modal fade">
                <div class="modal-dialog modal-dialog-centered">
                    <div class="modal-content">
                        <div class="modal-header">
                            <h3 class="modal-title">Create a group</h3>
							<button type="button" class="close" data-dismiss="modal">&times;</button>
                        </div>
                        <div class="modal-body">
                            <p>Groups are where your team communicates. They’re best when organized around a topic — #leads, for example.</p>
                            <form>
                                <div class="form-group">
                                    <label>Group Name <span class="text-danger">*</span></label>
                                    <input class="form-control" type="text">
                                </div>
                                <div class="form-group">
                                    <label>Send invites to: <span class="text-muted-light">(optional)</span></label>
                                    <input class="form-control" type="text">
                                </div>
                                <div class="m-t-50 text-center">
                                    <button class="btn btn-primary submit-btn">Create Group</button>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
            <div id="add_chat_user" class="modal fade " role="dialog">
                <div class="modal-dialog modal-dialog-centered">
                    <div class="modal-content">
                        <div class="modal-header">
                            <h3 class="modal-title">Create Chat Group</h3>
							<button type="button" class="close" data-dismiss="modal">&times;</button>
                        </div>
                        <div class="modal-body">
                            <div class="input-group m-b-30">
                                <input placeholder="Search to start a chat" class="form-control search-input" id="btn-input" type="text">
                                <span class="input-group-append">
									<button class="btn btn-primary">Search</button>
								</span>
                            </div>
                            <div>
                                <h5>Recent Conversations</h5>
                                <ul class="chat-user-list">
                                    <li>
                                        <a href="#">
                                            <div class="media">
												<span class="avatar align-self-center">J</span>
                                            <div class="media-body align-self-center text-nowrap">
                                                <div class="user-name">Javeria</div>
                                                <span class="designation">Team Leader</span>
                                            </div>
                                            <div class="text-nowrap align-self-center">
                                                <div class="online-date">1 day ago</div>
                                            </div>
                                            </div>
                                        </a>
                                    </li>
                                    <li>
                                        <a href="#">
                                            <div class="media ">
												<span class="avatar align-self-center">B</span>
												<div class="media-body align-self-center text-nowrap">
													<div class="user-name">Zaheer Shah</div>
													<span class="designation">Web Developer</span>
												</div>
												<div class="align-self-center text-nowrap">
													<div class="online-date">3 days ago</div>
												</div>
                                            </div>
                                        </a>
                                    </li>
                                    <li>
                                        <a href="#">
                                            <div class="media">
												<span class="avatar align-self-center">
													<img src="assets/img/user.jpg" alt="John Doe">
												</span>
												<div class="media-body text-nowrap align-self-center">
													<div class="user-name">Ahmad Shaaf</div>
													<span class="designation">Manager</span>
												</div>
												<div class="align-self-center text-nowrap">
													<div class="online-date">7 months ago</div>
												</div>
                                            </div>
                                        </a>
                                    </li>
                                </ul>
                            </div>
                            <div class="m-t-50 text-center">
                                <button class="btn btn-primary submit-btn">Create Group</button>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div id="share_files" class="modal fade" role="dialog">
                <div class="modal-dialog modal-dialog-centered modal-lg">
                    <div class="modal-content">
                        <div class="modal-header">
                            <h3 class="modal-title">Share File</h3>
							<button type="button" class="close" data-dismiss="modal">&times;</button>
                        </div>
                        <div class="modal-body">
                            <div class="files-share-list">
                                <div class="files-cont">
                                    <div class="file-type">
                                        <span class="files-icon"><i class="fas fa-file-alt"></i></span>
                                    </div>
                                    <div class="files-info">
                                        <span class="file-name text-ellipsis">Lorem ipsum.doc</span>
                                        <span class="file-author"><a href="#">Bernardo Galaviz</a></span> <span class="file-date">May 31st at 6:53 PM</span>
                                    </div>
                                </div>
                            </div>
                            <div class="form-group">
                                <label>Share With</label>
                                <input class="form-control" type="text">
                            </div>
                            <div class="m-t-50 text-center">
                                <button class="btn btn-primary submit-btn">Share</button>
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
        </div>
    </div>
  
@endsection