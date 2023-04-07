<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}>

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <!-- Tell the browser to be responsive to screen width -->
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="keywords"
        content="trav, trav dashboard, html css dashboard, web dashboard">
    <meta name="description"
        content="Trav is one of the biggest agencies in the world">
    <meta name="robots" content="noindex,nofollow">
    <title>Trav-Dashboard</title>
    <!-- Favicon icon -->
    <link rel="icon" type="image/png" sizes="16x16" href="./assets/images/logo-icon1.png">
    <!-- Bootstrap Core CSS -->    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.12.1/css/all.min.css" integrity="sha256-mmgLkCYLUQbXn0B1SRqzHar6dCnv9oZFPEC1g1cwlkk=" crossorigin="anonymous" />

    <link rel="stylesheet" href= "{{ asset('css/font-awesome.min.css') }}"/>
    <link href="{{asset('assets/node_modules/bootstrap/css/bootstrap.min.css')}}" rel="stylesheet">
    <link href="{{asset('assets/node_modules/perfect-scrollbar/css/perfect-scrollbar.css')}}" rel="stylesheet">
    <!-- This page CSS -->
    <!-- chartist CSS -->
    <link href="{{asset('assets/node_modules/morrisjs/morris.css')}}" rel="stylesheet">
    <!--c3 CSS -->
    <link href="{{asset('assets/node_modules/c3-master/c3.min.css')}}" rel="stylesheet">
    <!-- Custom CSS -->
    <link href="{{asset('css/style.css')}}" rel="stylesheet">
    <!-- Dashboard 1 Page CSS -->
    <link href="{{asset('css/pages/dashboard1.css')}}" rel="stylesheet">
    <!-- You can change the theme colors from here -->
    <link href="{{asset('css/colors/default.css')}}" id="theme" rel="stylesheet">

    <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
    <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
    <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
<![endif]-->
</head>

<style>
    .dropdown-menu{
    margin-left: -38px;

}
    .cardBalance {
    background-color: #fff;
    border-radius: 10px;
    border: none;
    position: relative;
    /* margin-bottom: 30px; */
    box-shadow: 0 0.46875rem 2.1875rem rgba(90,97,105,0.1), 0 0.9375rem 1.40625rem rgba(90,97,105,0.1), 0 0.25rem 0.53125rem rgba(90,97,105,0.12), 0 0.125rem 0.1875rem rgba(90,97,105,0.1);
    font-family: 'futura';
    scale: 0.9;
}
.l-bg-cherry {
    background: linear-gradient(to right, #493240, #f09) !important;
    color: #fff;
}

.l-bg-blue-dark {
    background: linear-gradient(to right, #373b44, #4286f4) !important;
    color: #fff;
}

.l-bg-green-dark {
    background: linear-gradient(to right, #0a504a, #38ef7d) !important;
    color: #fff;
}

.l-bg-orange-dark {
    background: #1a1a1a !important;
    color: #fff;
}

.cardBalance .card-statistic-3 .card-icon-large .fas, .cardBalance .card-statistic-3 .card-icon-large .far, .cardBalance .card-statistic-3 .card-icon-large .fab, .cardBalance .card-statistic-3 .card-icon-large .fal {
    font-size: 110px;
}

.cardBalance .card-statistic-3 .card-icon {
    text-align: center;
    line-height: 50px;
    margin-left: 15px;
    color: #000;
    position: absolute;
    right: -5px;
    top: 20px;
    opacity: 0.1;
}

.cardTrips .card-statistic-3 .card-icon-large .fas, .cardTrips .card-statistic-3 .card-icon-large .far, .cardTrips .card-statistic-3 .card-icon-large .fab, .cardTrips .card-statistic-3 .card-icon-large .fal {
    font-size: 110px;
}

.cardTrips .card-statistic-3 .card-icon {
    text-align: center;
    line-height: 50px;
    margin-left: 15px;
    color: #000;
    position: absolute;
    right: -5px;
    top: 20px;
    opacity: 0.1;
}

.l-bg-cyan {
    background: linear-gradient(135deg, #289cf5, #84c0ec) !important;
    color: #fff;
}

.l-bg-green {
    background: linear-gradient(135deg, #23bdb8 0%, #43e794 100%) !important;
    color: #fff;
}

.l-bg-orange {
    background: linear-gradient(to right, #f9900e, #ffba56) !important;
    color: #fff;
}

.l-bg-cyan {
    background: #1a1a1a !important;
    color: #fff;
}
.col-xl-3{
    width: 43%;
}

.fa-dollar-sign{
    color: white;
}
.fa-heart{
    color: white;
}

</style>


<body class="fix-header fix-sidebar card-no-border">
    <!-- ============================================================== -->
    <!-- Preloader - style you can find in spinners.css -->
    <!-- ============================================================== -->
    <div class="preloader">
        <div class="loader">
            <div style = "color:black;" class="loader__figure"></div>
            <p style = "color:black;" class="loader__label">we are making things for you</p>
        </div>
    </div>
    <!-- ============================================================== -->
    <!-- Main wrapper - style you can find in pages.scss -->
    <!-- ============================================================== -->
    <div id="main-wrapper">
        <!-- ============================================================== -->
        <!-- Topbar header - style you can find in pages.scss -->
        <!-- ============================================================== -->
        <header class="topbar">
            <nav class="navbar top-navbar navbar-expand-md navbar-light">
                <!-- ============================================================== -->
                <!-- Logo -->
                <!-- ============================================================== -->
                <div class="navbar-header">
                    <a class="navbar-brand" href="http://localhost:8000/dashboard">
                        <!-- Logo icon --><b>
                            <!--You can put here icon as well // <i class="wi wi-sunset"></i> //-->
                            <!-- Dark Logo icon -->
                            <img src="./assets/images/logo-icon1.png" alt="homepage" class="dark-logo" style="width: 40px;
                            height:40px;
                            " />
                            <!-- Light Logo icon -->
                            <img src="./assets/images/logo-light-icon.png" alt="homepage" class="light-logo" />
                        </b>
                        <!--End Logo icon -->
                        <!-- Logo text --><span style = "margin-left : -10px">
                            <!-- dark Logo text -->
                            <img src="./assets/images/logo-text1.png" alt="homepage" class="dark-logo" style="width: 126px;
                            height:50px; object-fit: cover; scale:0.8;"/>
                            <!-- Light Logo text -->
                            <img src="./assets/images/logo-light-text.png" class="light-logo" alt="homepage" /></span>
                    </a>
                </div>
                <!-- ============================================================== -->
                <!-- End Logo -->
                <!-- ============================================================== -->
                <div class="navbar-collapse">
                    <!-- ============================================================== -->
                    <!-- toggle and nav items -->
                    <!-- ============================================================== -->
                    <ul class="navbar-nav me-auto">
                        <li class="nav-item"> <a class="nav-link nav-toggler hidden-md-up waves-effect waves-dark"
                                href="javascript:void(0)"><i class="fa fa-bars"></i></a> </li>
                        <!-- ============================================================== -->
                        <!-- Search -->
                        <!-- ============================================================== -->
                        <li class="nav-item hidden-xs-down search-box"> <a
                                class="nav-link hidden-sm-down waves-effect waves-dark" href="javascript:void(0)"><i
                                    class="fa fa-search"></i></a>
                            <form class="app-search">
                                <input type="text" class="form-control" placeholder="Search & enter"> <a
                                    class="srh-btn"><i class="fa fa-times"></i></a></form>
                        </li>
                    </ul>
                    <!-- ============================================================== -->
                    <!-- User profile and search -->
                    <!-- ============================================================== -->
                    <ul class="navbar-nav my-lg-0">
                        <!-- ============================================================== -->
                        <!-- Profile -->
                        <!-- ============================================================== -->
                        <li class="nav-item dropdown u-pro">
                            <a class="nav-link dropdown-toggle waves-effect waves-dark profile-pic" href="#"
                                id="navbarDropdown" data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false"><img
                                    src="{{Auth::user()->profilePicture}}" alt="user" class="img-circle" style="box-shadow: none"/> <span
                                    class="hidden-md-down">{{Auth::user()->username}} &nbsp;</span> </a>
                            <ul class="dropdown-menu" aria-labelledby="navbarDropdown"></ul>
                        </li>
                    </ul>
                </div>
            </nav>
        </header>
        <!-- ============================================================== -->
        <!-- End Topbar header -->
        <!-- ============================================================== -->
        <!-- ============================================================== -->
        <!-- Left Sidebar - style you can find in sidebar.scss  -->
        <!-- ============================================================== -->
        <aside class="left-sidebar">
            <!-- Sidebar scroll-->
            <div class="scroll-sidebar">
                <!-- Sidebar navigation-->
                <nav class="sidebar-nav">
                    <ul id="sidebarnav">
                        <li> <a class="waves-effect waves-dark" href="http://localhost:8000/dashboard" aria-expanded="false"><i
                                    class="fa fa-tachometer"></i><span class="hide-menu">Dashboard</span></a>
                        </li>
                        <li> <a class="waves-effect waves-dark" href="profile" aria-expanded="false"><i
                                    class="fa fa-user-circle-o"></i><span class="hide-menu">Profile</span></a>
                        </li>
                        {{-- <li> <a class="waves-effect waves-dark" href="table-basic.php" aria-expanded="false"><i
                                    class="fa fa-table"></i><span class="hide-menu">Tables</span></a>
                        </li> --}}
                        <!-- <li> <a class="waves-effect waves-dark" href="icon-fontawesome.php" aria-expanded="false"><i
                                    class="fa fa-smile-o"></i><span class="hide-menu">Icons</span></a>
                        </li> -->
                        <li> <a class="waves-effect waves-dark" href="map" aria-expanded="false"><i
                                    class="fa fa-globe"></i><span class="hide-menu">Map</span></a>
                        </li>
                        <li> <a class="waves-effect waves-dark" href="favorites" aria-expanded="false"><i
                                    class="fa fa-heart"></i><span class="hide-menu">Favorites</span></a>
                        </li>
                        <li> <a class="waves-effect waves-dark" href="checkout" aria-expanded="false"><i
                                    class="fa fa-shopping-cart"></i><span class="hide-menu">Checkout</span></a>
                        </li>
                        <li><a style="position: relative;width: 20.3%;bottom:0%;transform: translateY(-50%);position: fixed;" class="waves-effect waves-dark logout" href="logout" aria-expanded="false"><i class="fa fa-sign-out"></i><span class="hide-menu">Log Out</span></a>
                        </li>
                    </ul>
                    <!-- <div class="text-center mt-4">
                        <a href="https://www.wrappixel.com/templates/adminwrap/"
                            class="btn waves-effect waves-light btn-info hidden-md-down text-white"> Upgrade to Pro</a>
                    </div> -->
                </nav>
                <!-- End Sidebar navigation -->
            </div>
            <!-- End Sidebar scroll-->
        </aside>
        <!-- ============================================================== -->
        <!-- End Left Sidebar - style you can find in sidebar.scss  -->
        <!-- ============================================================== -->
        <!-- ============================================================== -->
        <!-- Page wrapper  -->
        <!-- ============================================================== -->
        <div class="page-wrapper">
            <!-- ============================================================== -->
            <!-- Container fluid  -->
            <!-- ============================================================== -->
            <div class="container-fluid">
                <!-- ============================================================== -->
                <!-- Bread crumb and right sidebar toggle -->
                <!-- ============================================================== -->
                <div class="row page-titles">
                    <div class="col-md-5 align-self-center">
                        <h3 class="text-themecolor">Dashboard</h3>
                        <ol class="breadcrumb">
                            <li class="breadcrumb-item"><a href="http://localhost:8000/home">Home</a></li>
                            <li class="breadcrumb-item active">Dashboard</li>
                        </ol>
                    </div>
                    <!-- <div class="col-md-7 align-self-center">
                        <a href="https://www.wrappixel.com/templates/adminwrap/"
                            class="btn waves-effect waves-light btn btn-info pull-right hidden-sm-down text-white"> Upgrade to
                            Pro</a>
                    </div> -->
                </div>
                <!-- ============================================================== -->
                <!-- End Bread crumb and right sidebar toggle -->
                <!-- ============================================================== -->
                <!-- ============================================================== -->
                <!-- Sales Chart and browser state-->
                <!-- ============================================================== -->
                <div class="row">
                    @include('flash-message')
                    <!-- Column -->
                    <div class="col-lg-8" style="width: 100%;">
                        <div class="card">
                            <div class="card-body">
                                <div class="d-flex no-block">
                                    <div>
                                        <h5 class="card-title mb-0">Informations</h5>
                                    </div>
                                    <div class="ms-auto" style="display: none ;">
                                        <ul class="list-inline text-center font-12">
                                            <li><i class="fa fa-circle text-success"></i> SITE A</li>
                                            <li><i class="fa fa-circle text-info"></i> SITE B</li>
                                            <li><i class="fa fa-circle text-primary"></i> SITE C</li>
                                        </ul>
                                    </div>
                                    <br>
                                    <br>
                                </div>
                                <div class="" id="sales-chart" style="height: 355px; display: none;"></div>

                                <div class="col-md-10 ">
                                    <div class="rowBalance">
                                        <div class="col-xl-3 col-lg-6" style="margin-left: -20px">
                                            <div class="cardBalance l-bg-orange-dark">
                                                <div class="card-statistic-3 p-4">
                                                    <div class="card-icon card-icon-large"><i class="fas fa-dollar-sign"></i></div>
                                                    <div class="mb-4">
                                                    <div class="your-balance"><i style="scale: 1.8;" class="fa fa-credit-card" aria-hidden="true"></i></div>
                                                    </div>
                                                    <div class="row align-items-center mb-2 d-flex">
                                                            <div class = "amount">{{$balance}}<br><div style="color:gray ; font-size:0.9rem;">Balance<button class="deposit-btn" onclick='window.location.replace("http://localhost:8000/deposit-form");'>Deposit</button></div></div>
                                                        <div class="col-4 text-right">
                                                        </div>
                                                    </div>
                                                    <div class="progress mt-1 " data-height="8" style="height: 8px;">
                                                        <div class="progress-bar l-bg-cyan" role="progressbar" data-width="25%" aria-valuenow="25" aria-valuemin="0" aria-valuemax="100" style="width: 45%;"></div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-md-10 ">
                                    <div class="rowBalance">
                                        <div class="col-xl-3 col-lg-6" style="margin-left: 300px ; margin-top: -166.5px">
                                            <div class="cardBalance l-bg-orange-dark">
                                                <div class="card-statistic-3 p-4">
                                                    <div class="card-icon card-icon-large"><i class="fas fa-plane"></i></div>
                                                    <div class="mb-4">
                                                    <div class="your-flights"><i style="scale: 1.8;" style='z-index:0;' class="fa fa-plane" aria-hidden="true"></i></div>
                                                    </div>
                                                    <div class="row align-items-center mb-2 d-flex">
                                                            <div class = "number-flights">{{$number_flights}}<br><div style="color:gray ; font-size:0.9rem;">Tickets<button style="" onclick="window.location.replace('http://localhost/project/places.php')" disabled = false class="fav-btn" >Book</button></div></div>
                                                        <div class="col-4 text-right">
                                                        </div>
                                                    </div>
                                                    <div class="progress mt-1 " data-height="8" style="height: 8px;">
                                                        <div class="progress-bar l-bg-cyan" role="progressbar" data-width="25%" aria-valuenow="25" aria-valuemin="0" aria-valuemax="100" style="width: 25%;"></div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-md-10 ">
                                    <div class="rowBalance">
                                        <div class="col-xl-3 col-lg-6" style="margin-left: 620px ; margin-top: -165px">
                                            <div class="cardBalance l-bg-orange-dark">
                                                <div class="card-statistic-3 p-4">
                                                    <div class="card-icon card-icon-large"><i class="fas fa-heart"></i></div>
                                                    <div class="mb-4">
                                                    <div class="your-flights"><i style="scale: 1.8;" style='z-index:0;' class="fa fa-heart" aria-hidden="true"></i></div>
                                                    </div>
                                                    <div class="row align-items-center mb-2 d-flex">
                                                            <div class = "number-flights">{{$number_favorites}}<br><div style="color:gray ; font-size:0.9rem;">Favorites<button style="" onclick="window.location.replace('http://localhost/favorites')" class="fav-btn" >favorites</button></div></div>
                                                        <div class="col-4 text-right">
                                                        </div>
                                                    </div>
                                                    <div class="progress mt-1 " data-height="8" style="height: 8px;">
                                                        <div class="progress-bar l-bg-cyan" role="progressbar" data-width="25%" aria-valuenow="25" aria-valuemin="0" aria-valuemax="100" style="width: <?php ?>0%"</div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>

                                <!-- //balnce -->
                                <!-- <div class="balance">
                                    <br>
                                    <div class="your-balance"><i style="scale: 1.8;" class="fa fa-credit-card" aria-hidden="true"></i></div>
                                    <br>
                                    <div class = "amount"><br><div style="color:gray ; font-size:0.9rem;">Balance<button class="deposit-btn" onclick='window.location.replace("http://localhost/project/deposit.php");'>Deposit</button></div></div>
                                </div>
                                <div class="incoming-flights">
                                    <br>
                                    <div class="your-flights"><i style="scale: 1.8;" class="fa fa-plane" aria-hidden="true"></i></div>
                                    <br>
                                    <div class = "number-flights"><?php ?><br><div style="color:gray ; font-size:0.9rem;">Tickets<button class="deposit-btn" onclick='window.location.replace("http://localhost/project/places.php");'>Book</button></div></div>
                                </div> -->
                                <!-- <div class="balance">
                                    <br>
                                    <div class="your-balance"><i class="fa fa-money" aria-hidden="true"></i>  Your balance</div>
                                    <br>
                                    <div class = "amount">100000$</div>
                                </div> -->
                            </div>
                        </div>
                    </div>
                    <!-- Column -->
                    <div class="col-lg-4" style="display: none;">
                        <div class="card">
                            <div class="card-body">
                                <div class="d-flex mb-4 no-block">
                                    <h5 class="card-title mb-0 align-self-center">Your favorites</h5>
                                    <!-- <div class="ms-auto">
                                        <select class="form-select b-0">
                                            <option selected="">Today</option>
                                            <option value="1">Tomorrow</option>
                                        </select>
                                    </div> -->

                                </div>
                                <div id="visitor" style="height:260px; width:100%;display: none;"></div>
                                <!-- <ul class="list-inline mt-4 text-center font-12">
                                    <li><i class="fa fa-circle text-purple"></i> Tablet</li>
                                    <li><i class="fa fa-circle text-success"></i> Desktops</li>
                                    <li><i class="fa fa-circle text-info"></i> Mobile</li>
                                </ul> -->
                                <div class="bookings">
                                    <br>
                                    <div class="your-bookings"><i style="scale: 1.5;" class="fa fa-heart" aria-hidden="true"></i></div>
                                    <br>
                                    <div class = "number-bookings">4<br><div style="color:gray ; font-size:0.9rem;">Favorites<button class="check-btn">check</button></div></div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- ============================================================== -->
                <!-- End Sales Chart -->
                <!-- ============================================================== -->
                <!-- ============================================================== -->
                <!-- Projects of the Month -->
                <!-- ============================================================== -->
                <div class="row">
                    <!-- Column -->
                    <div class="col-lg-8 d-flex align-items-stretch">
                        <div class="card w-100">
                            <div class="card-body" style="display: none;">
                                <div class="d-flex">
                                    <div>
                                        <h5 class="card-title">Projects of the Month</h5>
                                    </div>
                                    <div class="ms-auto">
                                        <select class="form-select b-0">
                                            <option selected="">January</option>
                                            <option value="1">February</option>
                                            <option value="2">March</option>
                                            <option value="3">April</option>
                                        </select>
                                    </div>
                                </div>
                                <div class="table-responsive mt-3 no-wrap">
                                    <table class="table vm no-th-brd pro-of-month">
                                        <thead>
                                            <tr>
                                                <th colspan="2">Assigned</th>
                                                <th>Name</th>
                                                <th>Budget</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            <tr>
                                                <td style="width:50px;"><span class="round">S</span></td>
                                                <td>
                                                    <h6>Sunil Joshi</h6><small class="text-muted">Web Designer</small>
                                                </td>
                                                <td>Elite Admin</td>
                                                <td>$3.9K</td>
                                            </tr>
                                            <tr class="active">
                                                <td><span class="round"><img src="./assets/images/users/2.jpg"
                                                            alt="user" width="50"></span></td>
                                                <td>
                                                    <h6>Andrew</h6><small class="text-muted">Project Manager</small>
                                                </td>
                                                <td>Real Homes</td>
                                                <td>$23.9K</td>
                                            </tr>
                                            <tr>
                                                <td><span class="round round-success">B</span></td>
                                                <td>
                                                    <h6>Bhavesh patel</h6><small class="text-muted">Developer</small>
                                                </td>
                                                <td>MedicalPro Theme</td>
                                                <td>$12.9K</td>
                                            </tr>
                                            <tr>
                                                <td><span class="round round-primary">N</span></td>
                                                <td>
                                                    <h6>Nirav Joshi</h6><small class="text-muted">Frontend Eng</small>
                                                </td>
                                                <td>Elite Admin</td>
                                                <td>$10.9K</td>
                                            </tr>
                                            <tr>
                                                <td><span class="round round-warning">M</span></td>
                                                <td>
                                                    <h6>Micheal Doe</h6><small class="text-muted">Content Writer</small>
                                                </td>
                                                <td>Helping Hands</td>
                                                <td>$12.9K</td>
                                            </tr>
                                        </tbody>
                                    </table>
                                </div>
                            </div>
                            <div class="container">
                                <h2>Your paid trips <small>Trav</small></h2>
                                <ul class="responsive-table">
                                    <li class="table-header">
                                    <div class="col col-1">Trip Id</div>
                                    <div class="col col-2">Destination</div>
                                    <div class="col col-3">Amount Due</div>
                                    <div class="col col-4">Status</div>
                                    </li>
                                    @if (!empty($PaidTrips))
                                    @foreach ($PaidTrips as $PaidTrip)
                                        <li class="table-row">
                                        <div class="col col-1" data-label="Trip Id">{{$PaidTrip->id}}</div>
                                        <div class="col col-2" data-label="Destination">{{$PaidTrip->title}}</div>
                                        <div class="col col-3" data-label="Amount">{{$PaidTrip->price}}</div>
                                        <div class="col col-4" data-label="Payment Status">Paid</div>
                                        </li>
                                    @endforeach
                                    @else
                                    You have no previous Trips

                                    @endif

                                </ul>
                            </div>
                        </div>
                    </div>
                    <!-- Column -->
                    <!-- Column -->
                    <div class="col-lg-4 d-flex align-items-stretch">
                        <div class="card w-100">
                            <div class="up-img" style="background-image:url(./assets/images/cityNight.jpg)"></div>
                            <div class="card-body">
                                <h5 class=" card-title">Best Offer</h5>
                                <span class="label label-info label-rounded">Twin Tower</span>
                                <p class="mb-0 mt-3">Titudin venenatis ipsum aciat. Vestibu ullamer quam. nenatis
                                    ipsum ac feugiat. Ibulum ullamcorper.</p>
                                <div class="d-flex mt-3">
                                    <a class="link" href="javascript:void(0)">Read more</a>
                                    <div class="ms-auto align-self-center">
                                        <a href="javascript:void(0)" class="link me-2"><i
                                                class="fa fa-heart-o"></i></a>
                                        <a href="javascript:void(0)" class="link me-2"><i
                                                class="fa fa-share-alt"></i></a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- ============================================================== -->
                <!-- End Projects of the Month -->
                <!-- ============================================================== -->
                <!-- ============================================================== -->
                <!-- Notification And Feeds -->
                <!-- ============================================================== -->
                <div class="row">
                    <!-- Start Notification -->
                    <div class="col-lg-6 col-md-12">
                        <div class="card card-body mailbox">
                            <h5 class="card-title">Notification</h5>
                            <div class="message-center" style="height: 420px !important;">
                                <!-- Message -->
                                <a href="#">
                                    <div class="btn btn-danger btn-circle"><i class="fa fa-link"></i></div>
                                    <div class="mail-contnet">
                                        <h6 class="text-dark font-medium mb-0">Luanch Admin</h6> <span class="mail-desc">Just see the my new admin!</span>
                                        <span class="time">9:30 AM</span>
                                    </div>
                                </a>
                                <!-- Message -->
                                <a href="#">
                                    <div class="btn btn-success btn-circle"><i class="fa fa-calendar-check-o"></i></div>
                                    <div class="mail-contnet">
                                        <h6 class="text-dark font-medium mb-0">Event today</h6> <span class="mail-desc">Just a reminder that you have
                                            event</span> <span class="time">9:10 AM</span>
                                    </div>
                                </a>
                                <!-- Message -->
                                <a href="#">
                                    <div class="btn btn-info btn-circle"><i class="fa fa-cog text-white"></i></div>
                                    <div class="mail-contnet">
                                        <h6 class="text-dark font-medium mb-0">Settings</h6> <span class="mail-desc">You can customize this template as you
                                            want</span> <span class="time">9:08 AM</span>
                                    </div>
                                </a>
                                <!-- Message -->
                                <a href="#">
                                    <div class="btn btn-primary btn-circle"><i class="fa fa-user"></i></div>
                                    <div class="mail-contnet">
                                        <h6 class="text-dark font-medium mb-0">Pavan kumar</h6> <span class="mail-desc">Just see the my admin!</span> <span
                                            class="time">9:02 AM</span>
                                    </div>
                                </a>
                                <!-- Message -->
                                <a href="#">
                                    <div class="btn btn-info btn-circle"><i class="fa fa-cog text-white"></i></div>
                                    <div class="mail-contnet">
                                        <h6 class="text-dark font-medium mb-0">Customize Themes</h6> <span class="mail-desc">You can customize this template as you
                                            want</span> <span class="time">9:08 AM</span>
                                    </div>
                                </a>
                                <!-- Message -->
                                <a href="#">
                                    <div class="btn btn-primary btn-circle"><i class="fa fa-user"></i></div>
                                    <div class="mail-contnet">
                                        <h6 class="text-dark font-medium mb-0">Pavan kumar</h6> <span class="mail-desc">Just see the my admin!</span> <span
                                            class="time">9:02 AM</span>
                                    </div>
                                </a>
                            </div>
                        </div>
                    </div>
                    <!-- End Notification -->
                    <!-- Start Feeds -->
                    <div class="col-lg-6">
                        <div class="card">
                            <div class="card-body">
                                <h5 class="card-title">Feeds</h5>
                                <ul class="feeds">
                                    <li>
                                        <div class="bg-light-info"><i class="fa fa-bell-o"></i></div> You have 4 pending
                                        tasks. <span class="text-muted">Just Now</span>
                                    </li>
                                    <li>
                                        <div class="bg-light-success"><i class="fa fa-server"></i></div> Server #1
                                        overloaded.<span class="text-muted">2 Hours ago</span>
                                    </li>
                                    <li>
                                        <div class="bg-light-warning"><i class="fa fa-shopping-cart"></i></div> New
                                        order received.<span class="text-muted">31 May</span>
                                    </li>
                                    <li>
                                        <div class="bg-light-danger"><i class="fa fa-user"></i></div> New user
                                        registered.<span class="text-muted">30 May</span>
                                    </li>
                                    <li>
                                        <div class="bg-light-inverse"><i class="fa fa-bell-o"></i></div> New Version
                                        just arrived. <span class="text-muted">27 May</span>
                                    </li>
                                    <li>
                                        <div class="bg-light-info"><i class="fa fa-bell-o"></i></div> You have 4 pending
                                        tasks. <span class="text-muted">Just Now</span>
                                    </li>
                                    <li>
                                        <div class="bg-light-danger"><i class="fa fa-user"></i></div> New user
                                        registered.<span class="text-muted">30 May</span>
                                    </li>
                                </ul>
                            </div>
                        </div>
                    </div>
                    <!-- End Feeds -->
                </div>
                <!-- ============================================================== -->
                <!-- End Notification And Feeds -->
                <!-- ============================================================== -->
                <!-- ============================================================== -->
                <!-- End Page Content -->
                <!-- ============================================================== -->
                @yield('content')

            </div>
            <!-- ============================================================== -->
            <!-- End Container fluid  -->
            <!-- ============================================================== -->
            <!-- ============================================================== -->
            <!-- footer -->
            <!-- ============================================================== -->
            <!-- ============================================================== -->
            <!-- End footer -->
            <!-- ============================================================== -->
        </div>
        <!-- ============================================================== -->
        <!-- End Page wrapper  -->
        <!-- ============================================================== -->
    </div>
    <!-- ============================================================== -->
    <!-- End Wrapper -->
    <!-- ============================================================== -->
    <!-- ============================================================== -->
    <!-- All Jquery -->
    <!-- ============================================================== -->
    <script src="./assets/node_modules/jquery/jquery.min.js"></script>
    <!-- Bootstrap popper Core JavaScript -->
    <script src="./assets/node_modules/bootstrap/js/bootstrap.bundle.min.js"></script>
    <!-- slimscrollbar scrollbar JavaScript -->
    <script src="js/perfect-scrollbar.jquery.min.js"></script>
    <!--Wave Effects -->
    <script src="js/waves.js"></script>
    <!--Menu sidebar -->
    <script src="js/sidebarmenu.js"></script>
    <!--Custom JavaScript -->
    <script src="js/custom.min.js"></script>
    <!-- ============================================================== -->
    <!-- This page plugins -->
    <!-- ============================================================== -->
    <!--morris JavaScript -->
    <script src="./assets/node_modules/raphael/raphael-min.js"></script>
    <script src="./assets/node_modules/morrisjs/morris.min.js"></script>
    <!--c3 JavaScript -->
    <script src="./assets/node_modules/d3/d3.min.js"></script>
    <script src="./assets/node_modules/c3-master/c3.min.js"></script>
    <!-- Chart JS -->
    <script src="js/dashboard1.js"></script>
</body>

</html>
