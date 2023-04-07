
<!DOCTYPE html>
<html lang="en">

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
    <link rel="canonical" href="https://www.wrappixel.com/templates/adminwrap-lite/" />
    <!-- Favicon icon -->
    <link rel="icon" type="image/png" sizes="16x16" href="./assets/images/logo-icon1.png">
    <!-- Bootstrap Core CSS -->
    <link rel="stylesheet" href= "{{ asset('css/font-awesome.min.css') }}"/>
    <link href="./assets/node_modules/bootstrap/css/bootstrap.min.css" rel="stylesheet">
    <!-- Custom CSS -->
    <link href="css/style.css" rel="stylesheet">
    <!-- You can change the theme colors from here -->
    <link href="css/colors/default.css" id="theme" rel="stylesheet">
    <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
    <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
    <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
<![endif]-->
</head>
<style>
    body{
        /* filter: brightness(50%); */
    }
</style>

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
                        <!-- This is  -->
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
                            <a class="nav-link dropdown-toggle waves-effect waves-dark profile-pic" href=""
                                data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false"><img
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
                        <h3 class="text-themecolor">Cart Items</h3>
                        <ol class="breadcrumb">
                        <li class="breadcrumb-item"><a href="home">Home</a></li>
                            <li class="breadcrumb-item active">Cart</li>
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
                <div class="row">
                    @include('flash-message')

                    <div class="col-12">
                        <div class="card">
                            <div class="card-body">
                            <div class="container" id="itemsTable">
                            <h2>Your cart items <small>Trav</small></h2>
                            <ul class="responsive-table">
                                <li id='li1' class="table-header">
                                <div class="col col-1">Item Id</div>
                                <div class="col col-2">Destination</div>
                                <div class="col col-3">Price</div>
                                <div class="col col-4">Departing date</div>
                                <div class="col col-5">Time left</div>

                                </li>




                                        @if (!empty($results))
                                            @foreach ($results as $result)

                                                <li id='li' class="table-row" style="background: linear-gradient(rgba(100,100,100,0.5), rgba(100,100,100,0.5)), url({{asset('images/' . str_replace(' ','',$result->image) . '.jpg')}}); background-size : cover; background-position : center;color: white; ">
                                                    <div class="col col-1" data-label="Item Id">{{$result->id}}</div>
                                                    <div class="col col-2" data-label="Destination">{{$result->title}}</div>
                                                    <div class="col col-3" data-label="Price">{{$result->price}}</div>
                                                    <div class="col col-4" data-label="Departing date">{{$result->departing_date}}</div>
                                                    <div class="col col-5" data-label="Time left">{{$result->timeLeft}}</div>
                                                    <form action="/cartItems_delete" method="post">@csrf
                                                    <input type="hidden" name="id" value="{{$result->id}}">
                                                    <div class="col col-5" style="margin-left:-90px ;" data-label="delete"><button style="border : none; background:none" type='submit' name='trash'><i class="fa fa-trash-o"></button></i></div>
                                                    </form>
                                                    </li>


                                            @endforeach

                                        @else
                                        no records


                                        @endif
                                    </ul>
                                </div>
                                <form action="/checkout_cartItems" method="post">
                                    @csrf
                                    <button class='checkout-btn' type="submit" name="checkout">Check out  <i class="fa fa-arrow-right"></i></button>
                                </form>
                            </div>
                        </div>
                    </div>
                    @yield('content')
                </div>
                <div class="wrapper" style="display: none;">

                </div>
                <!-- ============================================================== -->
                <!-- End PAge Content -->
                <!-- ============================================================== -->
                <!-- ============================================================== -->
                <!-- Right sidebar -->
                <!-- ============================================================== -->
                <!-- .right-sidebar -->
                <div class="right-sidebar">
                    <div class="slimscrollright">
                        <div class="rpanel-title"> Service Panel <span><i class="ti-close right-side-toggle"></i></span>
                        </div>
                        <div class="r-panel-body">
                            <ul id="themecolors" class="mt-3">
                                <li><b>With Light sidebar</b></li>
                                <li><a href="javascript:void(0)" data-theme="default" class="default-theme">1</a></li>
                                <li><a href="javascript:void(0)" data-theme="green" class="green-theme">2</a></li>
                                <li><a href="javascript:void(0)" data-theme="red" class="red-theme">3</a></li>
                                <li><a href="javascript:void(0)" data-theme="blue" class="blue-theme">4</a></li>
                                <li><a href="javascript:void(0)" data-theme="purple" class="purple-theme">5</a></li>
                                <li><a href="javascript:void(0)" data-theme="megna" class="megna-theme">6</a></li>
                                <li class="d-block mt-4"><b>With Dark sidebar</b></li>
                                <li><a href="javascript:void(0)" data-theme="default-dark"
                                        class="default-dark-theme working">7</a></li>
                                <li><a href="javascript:void(0)" data-theme="green-dark" class="green-dark-theme">8</a>
                                </li>
                                <li><a href="javascript:void(0)" data-theme="red-dark" class="red-dark-theme">9</a></li>
                                <li><a href="javascript:void(0)" data-theme="blue-dark" class="blue-dark-theme">10</a>
                                </li>
                                <li><a href="javascript:void(0)" data-theme="purple-dark"
                                        class="purple-dark-theme">11</a></li>
                                <li><a href="javascript:void(0)" data-theme="megna-dark"
                                        class="megna-dark-theme ">12</a></li>
                            </ul>
                            <ul class="mt-3 chatonline">
                                <li><b>Chat option</b></li>
                                <li>
                                    <a href="javascript:void(0)"><img src="./assets/images/users/1.jpg" alt="user-img"
                                            class="img-circle"> <span>Varun Dhavan <small
                                                class="text-success">online</small></span></a>
                                </li>
                                <li>
                                    <a href="javascript:void(0)"><img src="./assets/images/users/2.jpg" alt="user-img"
                                            class="img-circle"> <span>Genelia Deshmukh <small
                                                class="text-warning">Away</small></span></a>
                                </li>
                                <li>
                                    <a href="javascript:void(0)"><img src="./assets/images/users/3.jpg" alt="user-img"
                                            class="img-circle"> <span>Ritesh Deshmukh <small
                                                class="text-danger">Busy</small></span></a>
                                </li>
                                <li>
                                    <a href="javascript:void(0)"><img src="./assets/images/users/4.jpg" alt="user-img"
                                            class="img-circle"> <span>Arijit Sinh <small
                                                class="text-muted">Offline</small></span></a>
                                </li>
                                <li>
                                    <a href="javascript:void(0)"><img src="./assets/images/users/5.jpg" alt="user-img"
                                            class="img-circle"> <span>Govinda Star <small
                                                class="text-success">online</small></span></a>
                                </li>
                                <li>
                                    <a href="javascript:void(0)"><img src="./assets/images/users/6.jpg" alt="user-img"
                                            class="img-circle"> <span>John Abraham<small
                                                class="text-success">online</small></span></a>
                                </li>
                                <li>
                                    <a href="javascript:void(0)"><img src="./assets/images/users/7.jpg" alt="user-img"
                                            class="img-circle"> <span>Hritik Roshan<small
                                                class="text-success">online</small></span></a>
                                </li>
                                <li>
                                    <a href="javascript:void(0)"><img src="./assets/images/users/8.jpg" alt="user-img"
                                            class="img-circle"> <span>Pwandeep rajan <small
                                                class="text-success">online</small></span></a>
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>
                <!-- ============================================================== -->
                <!-- End Right sidebar -->
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
    <script>

    function displayItem(){

        // document.getElementById("wrapper").innerHtml=<?php
        //         echo '<div class="banner-image" style="background-image: url('.  str_replace(' ','',$offers_array['destination'])  .'.jpg);
        //         "> </div>
        //         <h1>'.$offers_array['destination'].'</h1>
        //         <p><input name="price" type = "hidden" value = "'. $offers_array['price'] .'" ><br/>
        //             '.  $offers_array['offer']  .' For only '. $offers_array['price'] .' Expiration Date: '.$offers_array['expiration_date'].'</p>
        //         </div>
        //         <div class="button-wrapper">
        //         <button class="btn outline" type="button">DETAILS</button>
        //         <button class="btn fill" name="addToCart" type="submit">BOOK NOW</button>
        //         </div>
        //         </div>'

        //     ?>


    }

    </script>

    <!--php-->


</body>

</html>
