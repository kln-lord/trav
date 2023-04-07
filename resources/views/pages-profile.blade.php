<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

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
    <!-- Bootstrap Core CSS -->
    <link href="{{asset('assets/node_modules/bootstrap/css/bootstrap.min.css')}}" rel="stylesheet">
    <!-- Custom CSS -->
    <link href="{{asset('css/style.css')}}" rel="stylesheet">
    <link href="{{asset('css/font-awesome.min.css')}}" rel="stylesheet">

    <!-- You can change the theme colors from here -->
    <link href="{{asset('css/colors/default.css')}}" id="theme" rel="stylesheet">

    <script src="{{asset('js/sweetalert.min.js')}}"></script>
    <script src="{{asset('js/jquery-3.5.1.min.js')}}"></script>
    <script src="{{asset('js/popper.min.js')}}"></script>
    <script src="{{asset('js/bootstrap1.min.js')}}"></script>
    <script>

        function alert1(){
            swal(" OPERATION SUCCEDED !", "CHANGES SAVED ", "success");
        }
        function alert2(){
            sweetAlert("Oops...", "Something went wrong!", "error");

        }

    </script>


</head>

<style>
    .dropdown-menu{
    margin-left: -38px;

}
    .modal-confirm {
        color: #636363;
        width: 400px;
    }

    .modal-confirm .modal-content {
        padding: 20px;
        border-radius: 5px;
        border: none;
        text-align: center;
        font-size: 14px;
    }

    .modal-confirm .modal-header {
        border-bottom: none;
        position: relative;
    }

    .modal-confirm h4 {
        text-align: center;
        font-size: 26px;
        margin: 30px 0 -10px;
    }

    .modal-confirm .close {
        position: absolute;
        top: -5px;
        right: -2px;
    }

    .modal-confirm .modal-body {
        color: #999;
    }

    .modal-confirm .modal-footer {
        border: none;
        text-align: center;
        border-radius: 5px;
        font-size: 13px;
        padding: 10px 15px 25px;
    }

    .modal-confirm .modal-footer a {
        color: #999;
    }

    .modal-confirm .icon-box {
        width: 80px;
        height: 80px;
        margin: 0 auto;
        border-radius: 50%;
        z-index: 9;
        text-align: center;
        border: 3px solid #f15e5e;
    }

    .modal-confirm .icon-box i {
        color: #f15e5e;
        font-size: 46px;
        display: inline-block;
        margin-top: 13px;
    }

    .modal-confirm .btn,
    .modal-confirm .btn:active {
        color: #fff;
        border-radius: 4px;
        background: #60c7c1;
        text-decoration: none;
        transition: all 0.4s;
        line-height: normal;
        min-width: 120px;
        border: none;
        min-height: 40px;
        border-radius: 3px;
        margin: 0 5px;
    }

    .modal-confirm .btn-secondary {
        background: #c1c1c1;
    }

    .modal-confirm .btn-secondary:hover,
    .modal-confirm .btn-secondary:focus {
        background: #a8a8a8;
    }

    .modal-confirm .btn-danger {
        background: #f15e5e;
    }

    .modal-confirm .btn-danger:hover,
    .modal-confirm .btn-danger:focus {
        background: #ee3535;
    }

    .trigger-btn {
        display: inline-block;
        margin: 100px auto;
    }
    #pfp{
        transition: all 0.6s ease;
    }
    .uploadYourPicture{
        position: absolute;
        color: white;
        margin-top: -90px;
        margin-left: 70px;
        font-size: 1rem;
        opacity: 0;
        transition: all 0.6s ease;

    }
</style>
@if (Auth::user()->username=='ADMIN' && Auth::user()->theme=='dark')
    <style>
        .modal-confirm .icon-box {
        width: 80px;
        height: 80px;
        margin: 0 auto;
        border-radius: 50%;
        z-index: 9;
        text-align: center;
        border: 3px solid black;
        margin-bottom: -50px;
        }

        .modal-confirm .icon-box i {
            color: black;
            font-size: 46px;
            display: inline-block;
            margin-top: 13px;
        }
        .modal-confirm .btn-danger {
        background: #000000;
        }
        .modal-confirm .btn-danger:hover {
        background: #12cc97;
        }


        .btn-success, .btn-success.disabled{
            box-shadow: none;
            background-color: #f3f1f1;
            color: black !important;
        }
        .btn-success a{
            color: black !important;

        }
        .btn-success:hover{
            background-color: #101010;
            color: white !important;
            border-color: black;

        }

        .btn-success:hover .btn-success.disabled{
            background-color: #101010;
            color: white !important;
            border-color: black;
        }

        .btn-success:hover a{
            color: white !important;

        }
        .img-circle{
            box-shadow: 0px 0px 100px {{$pfpDominantColor}};
        }
        .card{
            background-color: black;
        }
        .card-no-border .card {
            border: 0px;
            border-radius: 5px;
            box-shadow: none;
        }
        .card-body{
            border-radius: 5px;
            background-color: black !important;
        }
        body{
            color: white;
        }
        .left-sidebar{
            background-color: black !important;
        }
        .sidebar-nav ul li a {
            color: #8d97ad;
            padding: 10px 35px 10px 15px;
            display: block;
            font-size: 15px;
            font-weight: 400;
            color: white;
        }
        .navbar-header{
            background-color: black !important;
        }
        .page-titles{
            border-radius: 5px;
            background: #ffffff;
            margin-bottom: 20px;
            padding: 0px;
            border-radius: 10px;
            margin-left: 1px;
            height: 80px;
            width: 100%;
            background-color: black !important;

        }
        .text-themecolor{
            color: white !important;
        }
        .page-titles .breadcrumb li a {
    color: #ffffff !important;
}
.page-titles .breadcrumb .breadcrumb-item.active {
    color: #ffffff !important;
    font-weight: 500;
}

.sidebar-nav ul li a:hover i{
    color: #fff;
}
.sidebar-nav ul li a.active, .sidebar-nav ul li a:hover {
    color: #fff;
}
.sidebar-nav ul li a.active i, .sidebar-nav ul li a:hover i{
    color: #fff;
}
.container-fluid{
    background-color: #d8d8d8;
}
.sidebar-nav ul li a:hover{
    background-color: #fff;
    color: black
}
.sidebar-nav ul li a:hover i{
    color: black
}
.sidebar-nav{
    background: rgb(0, 0, 0) !important;
    padding: 15px 0 0 0px;

}
.sidebar-nav > ul > li > a i {
    color: #ffffff;
}
.sidebar-nav ul {
    margin: 0px;
    padding: 0px;
    background-color: black;
}
.form-material .form-control, .form-material .form-control.focus, .form-material .form-control:focus {
    background-image: linear-gradient(#ffffff, #ffffff), linear-gradient(#626262, #626262);
    border: 0 none;
    border-radius: 0;
    box-shadow: none;
    float: none;
}
.topbar .navbar-light .navbar-nav .nav-item > a.nav-link{
    color: white !important;
}

.navbar{
    background: black;
}
li .nav-link{
    color: white !important;
}
.dark-logo{
    filter: brightness(0) invert(1);
}
.footer{
    background-color: black;
    border-top: 5px solid rgb(0 0 0 / 13%);
}
.footer a{
    color: white
}

.form-control {
    color: white !important;
}
.topbar .navbar-light .navbar-nav .nav-item > a.nav-link:hover, .topbar .navbar-light .navbar-nav .nav-item > a.nav-link:focus {
    color: rgb(221, 221, 221) !important;
}
h4{
    color: white !important;
}
.search-box .app-search input {
    color: black !important;

}
    </style>

@endif

<body class="fix-header card-no-border fix-sidebar">
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
                    <a class="navbar-brand" href="dashboard">
                        <!-- Logo icon --><b>
                            <!--You can put here icon as well // <i class="wi wi-sunset"></i> //-->
                            <!-- Dark Logo icon -->
                            <img src="./assets/images/logo-icon1.png" alt="homepage" class="dark-logo" style="width: 40px;
                            height:40px;
                            " />
                            <!-- Light Logo icon -->
                            <img  src="./assets/images/logo-light-icon.png" alt="homepage" class="light-logo" />
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
                                    class="srh-btn"><i class="fa fa-times"></i></a> </form>
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
                            <form id="my_form" action="/changeTheme" method="post">
                                @csrf
                            </form>
                                <a class="nav-link dropdown-toggle waves-effect waves-dark profile-pic" onclick = "document.getElementById('my_form').submit(); return false;"
                                data-bs-toggle="" aria-haspopup="true" aria-expanded="false"><img
                                    src="{{Auth::user()->profilePicture}}" alt="user" class="img-circle" style="box-shadow: none" /> <span
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
                    @if (Auth::user()->username=='ADMIN')
                    <li> <a class="waves-effect waves-dark" href="dashboard" aria-expanded="false"><i
                        class="fa fa-tachometer"></i><span class="hide-menu">Dashboard</span></a>
                    </li>
                    <li> <a class="waves-effect waves-dark" href="profile" aria-expanded="false"><i
                                class="fa fa-user-circle-o"></i><span class="hide-menu">Profile</span></a>
                    </li>
                    <li> <a class="waves-effect waves-dark" href="usersTable" aria-expanded="false"><i
                                class="fa fa-table"></i><span class="hide-menu">Tables</span></a>
                    </li>
                    <li> <a class="waves-effect waves-dark" href="icon-fontawesome.html" aria-expanded="false"><i
                                class="fa fa-smile-o"></i><span class="hide-menu">Icons</span></a>
                    </li>
                    <li> <a class="waves-effect waves-dark" href="map-google.html" aria-expanded="false"><i
                                class="fa fa-globe"></i><span class="hide-menu">Map</span></a>
                    </li>
                    <li> <a class="waves-effect waves-dark" href="pages-blank.html" aria-expanded="false"><i
                                class="fa fa-bookmark-o"></i><span class="hide-menu">Blank</span></a>
                    </li>
                    <li> <a class="waves-effect waves-dark" href="pages-error-404.html" aria-expanded="false"><i
                                class="fa fa-question-circle"></i><span class="hide-menu">404</span></a>
                    </li>
                    @else
                    <li> <a class="waves-effect waves-dark" href="dashboard" aria-expanded="false"><i
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

                @endif
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
                        <h3 class="text-themecolor">Profile</h3>
                        <ol class="breadcrumb">
                            <li class="breadcrumb-item"><a href="home">Home</a></li>
                            <li class="breadcrumb-item active">Profile</li>
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
                <!-- Start Page Content -->
                <!-- ============================================================== -->
                <!-- Row -->
                <div class="row">
                    @include('flash-message')
                    <!-- Column -->
                    <div class="col-lg-4 col-xlg-3 col-md-5">
                        <div class="card">
                            <div class="card-body">
                                <center class="mt-4"> <img id='pfp' src="{{Auth::user()->profilePicture}}" class="img-circle"
                                        width="150" />
                                    <div id="uploadYourPicture" class="uploadYourPicture">upload a picture</div>
                                    <h4 class="card-title mt-2">@if ($fullName=="")
                                            {{Auth::user()->username}}
                                    @else
                                        {{$fullName}}

                                    @endif</h4>
                                    <h6 class="card-subtitle">@if(Auth::user()->username == 'ADMIN') Admin @else A Client @endif</h6>
                                    <div class="row text-center justify-content-md-center">
                                        <div class="col-4"><a href="javascript:void(0)" class="link"><i
                                                    class="fa fa-user"></i>
                                                <font class="font-medium">254</font>
                                            </a></div>
                                        <div class="col-4"><a href="javascript:void(0)" class="link"><i
                                                    class="fa fa-camera"></i>
                                                <font class="font-medium">54</font>
                                            </a></div>
                                    </div>
                                </center>
                            </div>
                        </div>
                    </div>
                    <!-- Column -->
                    <!-- Column -->
                    <div class="col-lg-8 col-xlg-9 col-md-7">
                        <div class="card">
                            <!-- Tab panes -->
                            <div class="card-body">
                                <form class="form-horizontal form-material mx-2" method="POST" action="/update_profile" enctype="multipart/form-data">
                                    @csrf
                                    <label for="profile_pic" style="position:absolute;margin-top:135px" onmouseover="document.getElementById('pfp').style.filter = 'brightness(50%)';document.getElementById('uploadYourPicture').style.opacity = '1'" onmouseout="document.getElementById('pfp').style.filter = 'brightness(100%)';document.getElementById('uploadYourPicture').style.opacity = '0'">
                                        <i class="fa fa-2x fa-camera" style="color:white;scale: 0.7;margin-left:-175px;cursor: pointer;"></i>
                                        <input type="file" id="profile_pic"
                                        name="profile_pic" style="display: none"
                                        accept=".jpg, .jpeg, .png" />
                                    </label>
                                    <div class="form-group">
                                        <label class="col-md-12">Full Name</label>
                                        <div class="col-md-12">
                                            <input type="text" placeholder=""
                                                class="form-control form-control-line" name="newfullname" id="fullName">
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <label for="example-email" class="col-md-12">Email</label>
                                        <div class="col-md-12">
                                            <input type="email" disabled
                                                class="form-control form-control-line" name="newemail"
                                                id="example-email">
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <label class="col-md-12">Password</label>
                                        <div class="col-md-12">
                                            <input type="password" placeholder=""
                                                class="form-control form-control-line" name="newpass">
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <label class="col-md-12">Phone No</label>
                                        <div class="col-md-12">
                                            <input type="text" placeholder=""
                                                class="form-control form-control-line" name="newphone" id="phoneNumber">
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <label class="col-md-12">Message</label>
                                        <div class="col-md-12">
                                            <textarea rows="5" class="form-control form-control-line"></textarea>
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <label class="col-sm-12">Select Country</label>
                                        <div class="col-sm-12">
                                            <select class="form-control form-control-line" name="country" id="country">
                                                <option>Morocco</option>
                                                <option>France</option>
                                                <option>London</option>
                                                <option>Canada</option>
                                                <option>Usa</option>
                                                <option>India</option>
                                                <option>Italy</option>
                                                <option>Thailand</option>

                                            </select>
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <div class="col-sm-12">
                                            <button type="submit" class="btn btn-success" name="submit" >Update Profile</button>
                                        </div>
                                    </div>
                                </form>
                                    <button class="btn btn-success" type="button" style="margin-left:435px;margin-top:-120px" name=""><a href="#myModal" style="text-decoration: none !important;color:white" data-toggle="modal">delete account</a> <i class="fa fa-arrow-right"></i></button>
                                    <!-- <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css"> -->
                                    <div id="myModal" class="modal fade">
                                    <div class="modal-dialog modal-confirm">
                                        <div class="modal-content">
                                            <div class="modal-header flex-column">
                                                <div class="icon-box">
                                                <i class="fa fa-exclamation"></i>                                                </div>
                                                <h4 class="modal-title w-100">Are you sure?</h4>
                                                <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
                                            </div>
                                            <div class="modal-body">
                                                <p>Do you really want to delete your account? This process cannot be undone.</p>
                                            </div>
                                            <div class="modal-footer justify-content-center">
                                                <button type="button" class="btn btn-secondary" data-dismiss="modal">Cancel</button>
                                                <form action="/delete_account" method="post">@csrf<button type="submit" name="delete_account" class="btn btn-danger">Delete</button></form>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- Column -->
                    @yield('content')
                </div>
                <!-- Row -->
                <!-- ============================================================== -->
                <!-- End PAge Content -->
                <!-- ============================================================== -->
            </div>
            <!-- ============================================================== -->
            <!-- End Container fluid  -->
            <!-- ============================================================== -->
            <!-- ============================================================== -->
            <!-- footer -->
            <!-- ============================================================== -->
            <footer class="footer"> © 2021 trav by <a href="https://www.trav.com/">Trav.com</a> </footer>

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

        <!-------------------------- PHP ----------------------->



    <script src="./assets/node_modules/jquery/jquery.min.js"></script>
    <!-- Bootstrap tether Core JavaScript -->
    <script src="./assets/node_modules/bootstrap/js/bootstrap.bundle.min.js"></script>
    <!-- slimscrollbar scrollbar JavaScript -->
    <script src="js/perfect-scrollbar.jquery.min.js"></script>
    <!--Wave Effects -->
    <script src="js/waves.js"></script>
    <!--Menu sidebar -->
    <script src="js/sidebarmenu.js"></script>
    <!--Custom JavaScript -->
    <script src="js/custom.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/color-thief/2.3.0/color-thief.umd.js"></script>
        <script>
        // const colorThief = new ColorThief();
        // const img = document.querySelector('#pfp');

        // // Make sure image is finished loading
        // if (img.complete) {
        //     console.log(colorThief.getColor(img));
        //     document.getElementById("pfp").style.boxShadow = "0px 0px 100px "+colorThief.getColor(img)
        // } else {
        // window.addEventListener('load', function() {
        //     console.log(colorThief.getColor(img));
        //     document.getElementById("pfp").style.boxShadow = "0px 0px 100px "+colorThief.getColor(img)
        // });
        // }


    </script>
</body>
<script>
    function fillThePlaceHolder(){
        @if ($fullName=="")
        document.getElementById("fullName").value = "";
        @else
        document.getElementById("fullName").value = '{{$fullName}}';

        @endif
        @if ($phoneNumber=="")
        document.getElementById("phoneNumber").value = "";
        @else
        document.getElementById("phoneNumber").value = '{{$phoneNumber}}';
        @endif

        @if ($country!="")
        document.getElementById("country").value = '{{$country}}';
        @endif

        document.getElementById("example-email").value = '{{$email}}';
    };
    fillThePlaceHolder();

</script>


</html>



<?php


?>
