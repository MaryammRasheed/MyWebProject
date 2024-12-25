<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, user-scalable=0">
    <link rel="shortcut icon" type="image/x-icon" href="dashboard/assets/img/favicon.ico">
    <title>Admin Panel</title>
    <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
    <link rel="stylesheet" type="text/css" href="dashboard/assets/css/bootstrap.min.css">
    <link rel="stylesheet" type="text/css" href="dashboard/assets/plugins/fontawesome/css/fontawesome.min.css">
    <link rel="stylesheet" type="text/css" href="dashboard/assets/plugins/fontawesome/css/all.min.css">
    <link rel="stylesheet" type="text/css" href="dashboard/assets/plugins/morris/morris.css">
    <link rel="stylesheet" type="text/css" href="dashboard/assets/css/jquery.circliful.css">
    <link rel="stylesheet" type="text/css" href="dashboard/assets/css/style.css">
    <style>
        .menu-toggle-btn {
            cursor: pointer;
        }
    </style>
</head>

<body>
    <div class="main-wrapper">
        <!-- Header -->
        <div class="header">
            <div class="header-left">
                <a href="{{ url('index') }}" class="logo">
                    <img src="dashboard/assets/img/logo.png" width="35" height="35" alt=""> <span>Hotel</span>
                </a>
            </div>
            

            <!-- Searchbar -->
            <div class="searchbar">
                <form class="form-inline my-1 w-25 float-left">
                    <input class="form-control mr-sm-2 search-input" type="search" placeholder="Search...">
                </form>
            </div>

         

        </div>

        <div class="sidebar" id="sidebar">
            <div class="sidebar-inner slimscroll">
                <div id="sidebar-menu" class="sidebar-menu">
                    <ul>
                        <li><a href="{{ url('/index') }}"><i class="fas fa-tachometer-alt"></i> <span>Dashboard</span></a></li>
                        <li><a href="{{ url('/all-booking') }}"><i class="fa fa-suitcase"></i><span>Bookings Detail</span></a></li>
                        <li><a href="{{ url('/edit-booking') }}"><i class="fa fa-newspaper"></i><span>Edit Booking</span></a></li>
                        <li><a href="{{ url('/all-customers') }}"><i class="fa fa-user-circle"></i><span>Customers List</span></a></li>
                        <li><a href="{{ url('/admin-rooms') }}"><i class="fas fa-key"></i><span>Rooms Information</span></a></li>
                        <li><a href="{{ url('/edit-room') }}"><i class="fa fa-building"></i><span>Edit Room</span></a></li>
                        <li><a href="{{ url('/expenses') }}"><i class="far fa-money-bill-alt"></i><span>Expenses</span></a></li>
                        <li><a href="{{ url('/payments') }}"><i class="fa fa-tags"></i><span>Pricing</span></a></li>
                        <li><a href="{{ url('/profile') }}"><i class="fa fa-user" aria-hidden="true"></i> <span>My Profile</span></a></li>
                         <li><a href="{{ url('/activities') }}"><i class="fa fa-address-book" aria-hidden="true"></i><span>Activities</span></a></li>
                        <li><a href="{{ url('/login') }}"><i class="fas fa-sign-out-alt" aria-hidden="true"></i><span> </i>Logout</a></li> </span>
                        <li><a href="{{ url('/settings') }}"><i class="fas fa-cog"></i><span>Settings</span></a></li>
                    </ul>
                </div>
            </div>
        </div>
    </div>

  
</body>


