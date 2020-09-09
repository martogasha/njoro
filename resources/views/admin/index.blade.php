<!doctype html>
<html lang="en">

<!-- Mirrored from bootstrap.gallery/wafi-admin/dashboard-v2/topbar/sales-dashboard.html by HTTrack Website Copier/3.x [XR&CO'2014], Wed, 08 Jul 2020 08:09:09 GMT -->
<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Meta -->
    <meta name="description" content="Responsive Bootstrap4 Dashboard Template">
    <meta name="author" content="ParkerThemes">
    <link rel="shortcut icon" href="img/fav.png" />

    <!-- Title -->
    <title>Njoro - Sales Dashboard</title>


    <!-- *************
        ************ Common Css Files *************
    ************ -->
    <!-- Bootstrap css -->
    <link rel="stylesheet" href="css/bootstrap.min.css">

    <!-- Icomoon Font Icons css -->
    <link rel="stylesheet" href="fonts/style.css">

    <!-- Main css -->
    <link rel="stylesheet" href="css/main.css">


    <!-- *************
        ************ Vendor Css Files *************
    ************ -->
    <!-- DateRange css -->
    <link rel="stylesheet" href="vendor/daterange/daterange.css" />

    <!-- Chartist css -->
    <link rel="stylesheet" href="vendor/chartist/css/chartist.min.css" />
    <link rel="stylesheet" href="vendor/chartist/css/chartist-custom.css" />

</head>
<body>

<!-- Loading starts -->
<div id="loading-wrapper">
    <div class="spinner-border" role="status">
        <span class="sr-only">Loading...</span>
    </div>
</div>
<!-- Loading ends -->


<!-- *************
    ************ Header section start *************
************* -->

<!-- Header start -->
<header class="header">
    <div class="logo-wrapper">
        <a href="index.html" class="logo">
            <img src="img/logo.png" alt="Wafi Admin Dashboard" />
        </a>
    </div>
    <div class="header-items">
        <!-- Custom search start -->
        <div class="custom-search">
            <input type="text" class="search-query" placeholder="Search here ...">
            <i class="icon-search1"></i>
        </div>
        <!-- Custom search end -->

        <!-- Header actions start -->
        <ul class="header-actions">
            <li class="dropdown">
                <a href="#" id="userSettings" class="user-settings" data-toggle="dropdown" aria-haspopup="true">
                    <span class="user-name">Kelvin Njoroge</span>
                    <span class="avatar">K<span class="status busy"></span></span>
                </a>
                <div class="dropdown-menu dropdown-menu-right" aria-labelledby="userSettings">
                    <div class="header-profile-actions">
                        <div class="header-user-profile">
                            <div class="header-user">
                                <img src="img/user.png" alt="Admin Template" />
                            </div>
                            <h5>Kelvin Njoroge</h5>
                            <p>Owner</p>
                        </div>
                        <a href="user-profile.html"><i class="icon-user1"></i> My Profile</a>
                        <a href="account-settings.html"><i class="icon-settings1"></i> Account Settings</a>
                        <a href="login.html"><i class="icon-log-out1"></i> Sign Out</a>
                    </div>
                </div>
            </li>

        </ul>
        <!-- Header actions end -->
    </div>
</header>
<!-- Header end -->

<!-- Screen overlay start -->
<!-- Screen overlay end -->

<!-- Quicklinks box start -->

<!-- Quicklinks box end -->

<!-- Quick settings start -->
<div class="quick-settings-box">
    <div class="quick-settings-header">
        <div class="date-container">Today <span class="date" id="today-date"></span></div>
        <a href="#" class="quick-settings-box-close">
            <i class="icon-circle-with-cross"></i>
        </a>
    </div>
    <div class="quick-settings-body">
        <div class="fullHeight">
            <div class="quick-setting-list">
                <h6 class="title">Events</h6>
                <ul class="list-items">
                    <li>
                        <div class="list-title">Product Launch</div>
                        <div class="list-location">10:00 AM</div>
                    </li>
                    <li>
                        <div class="list-title">Team Meeting</div>
                        <div class="list-location">01:30 PM</div>
                    </li>
                    <li>
                        <div class="list-title">Q&A Session</div>
                        <div class="list-location">02:30 PM</div>
                    </li>
                </ul>
            </div>
            <div class="quick-setting-list">
                <h6 class="title">Notes</h6>
                <ul class="list-items">
                    <li>
                        <div class="list-title">Refreshing the list</div>
                        <div class="list-location">03:15 PM</div>
                    </li>
                    <li>
                        <div class="list-title">Not able to click on button</div>
                        <div class="list-location">03:18 PM</div>
                    </li>
                </ul>
            </div>
            <div class="quick-setting-list">
                <h6 class="title">Quick Settings</h6>
                <ul class="set-priority-list">
                    <li>
                        <div class="custom-control custom-switch">
                            <input type="checkbox" class="custom-control-input" checked id="systemUpdates">
                            <label class="custom-control-label" for="systemUpdates">System Updates</label>
                        </div>
                    </li>
                    <li>
                        <div class="custom-control custom-switch">
                            <input type="checkbox" class="custom-control-input" id="noti">
                            <label class="custom-control-label" for="noti">Notifications</label>
                        </div>
                    </li>
                </ul>
            </div>
        </div>
    </div>
</div>
<!-- Quick settings end -->

<!-- *************
    ************ Header section end *************
************* -->


<!-- Container fluid start -->
<div class="container-fluid">

    <!-- Navigation start -->
    <nav class="navbar navbar-expand-lg custom-navbar">
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#WafiAdminNavbar" aria-controls="WafiAdminNavbar" aria-expanded="false" aria-label="Toggle navigation">
					<span class="navbar-toggler-icon">
						<i></i>
						<i></i>
						<i></i>
					</span>
        </button>
        <div class="collapse navbar-collapse" id="WafiAdminNavbar">
            <ul class="navbar-nav">
                <li class="nav-item dropdown">
                    <a class="nav-link active-page dropdown-toggle" href="#" id="dashboardsDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                        <i class="icon-devices_other nav-icon"></i>
                        Dashboard
                    </a>
                </li>
                <li class="nav-item dropdown">
                    <a class="nav-link dropdown-toggle" href="{{url('stock')}}" id="appsDropdown" role="button"  aria-haspopup="true" aria-expanded="false">
                        <i class="icon-package nav-icon"></i>
                        Stock
                    </a>
                </li>
                <li class="nav-item dropdown">
                    <a class="nav-link dropdown-toggle" href="{{url('sales')}}" id="appsDropdown" role="button"  aria-haspopup="true" aria-expanded="false">
                        <i class="icon-package nav-icon"></i>
                        Sales
                    </a>
                </li>
                <li class="nav-item dropdown">
                    <a class="nav-link dropdown-toggle" href="{{url('workers')}}" id="appsDropdown" role="button"  aria-haspopup="true" aria-expanded="false">
                        <i class="icon-package nav-icon"></i>
                        Workers
                    </a>
                </li>
            </ul>
        </div>
    </nav>
    <!-- Navigation end -->

@include('flash-message')
    <!-- *************
        ************ Main container start *************
    ************* -->
    <div class="main-container">

        <!-- Page header start -->
        <div class="page-header">
            <ol class="breadcrumb">
                <li class="breadcrumb-item active">Sales Dashboard</li>
            </ol>

            <ul class="app-actions">
                <li>
                    <a href="#" id="reportrange">
                        <span class="range-text"></span>
                        <i class="icon-chevron-down"></i>
                    </a>
                </li>
                <li>
                    <a href="#" data-toggle="tooltip" data-placement="top" title="" data-original-title="Print">
                        <i class="icon-print"></i>
                    </a>
                </li>
                <li>
                    <a href="#" data-toggle="tooltip" data-placement="top" title="" data-original-title="Download CSV">
                        <i class="icon-cloud_download"></i>
                    </a>
                </li>
            </ul>
        </div>
        <!-- Page header end -->

        <!-- Content wrapper start -->
        <div class="content-wrapper">
            <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#propertyModal">
                Add Property
            </button>
            <div class="modal fade" id="propertyModal" tabindex="-1" role="dialog" aria-labelledby="customModalTwoLabel" aria-hidden="true">
                <div class="modal-dialog" role="document">
                    <form action="{{route('storeProperty')}}" method="post">
                        @csrf
                        <div class="modal-content">
                            <div class="modal-header">
                                <h5 class="modal-title" id="customModalTwoLabel">Add Property</h5>
                                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                    <span aria-hidden="true">&times;</span>
                                </button>
                            </div>
                            <div class="modal-body">
                                <div class="form-group">
                                    <label for="recipient-name" class="col-form-label">Property Name:</label>
                                    <input type="text" name="name" placeholder="Property Name" class="form-control" id="recipient-name" required>
                                </div>
                                <div class="form-group">
                                    <label for="recipient-name" class="col-form-label">Location:</label>
                                    <input type="text" name="location" placeholder="Property Location" class="form-control" id="recipient-name" required>
                                </div>

                            </div>
                            <div class="modal-footer custom">

                                <div class="left-side">
                                    <button type="button" class="btn btn-link danger" data-dismiss="modal">Cancel</button>
                                </div>
                                <div class="divider"></div>
                                <div class="right-side">
                                    <button type="submit" class="btn btn-link success">Save</button>
                                </div>
                            </div>
                        </div>
                    </form>
                </div>
            </div>

            <br>
            <br>
            <!-- Row start -->
            <div class="row gutters">
                <div class="col-xl-3 col-lg-3 col-md-6 col-sm-6 col-12">
                    <a href="{{url('stock')}}">
                        <div class="info-stats4">
                        <div class="info-icon">
                            <i class="icon-eye1"></i>
                        </div>
                        <div class="sale-num">
                            <h4>Stock</h4>
                            <p>Visitors</p>
                        </div>
                    </div>
                    </a>
                </div>
                @foreach($properties as $property)
                <div class="col-xl-3 col-lg-3 col-md-6 col-sm-6 col-12">
                    <a href="{{url('propertyDetail',$property->id)}}">

                    <div class="info-stats4">
                        <div class="info-icon">
                            <i class="icon-shopping-bag1"></i>
                        </div>
                        <div class="sale-num">
                            <h4>{{$property->name}}</h4>
                            <p>{{$property->location}}</p>
                            <p><strong>Counters: {{\App\Counter::where('property_id',$property->id)->count()}}</strong></p>
                        </div>
                    </div>
                    </a>
                </div>
                @endforeach
            </div>
            <!-- Row end -->

            <!-- Row start -->
            <!-- Row end -->

            <!-- Row start -->
            <!-- Row end -->

            <!-- Row start -->
            <!-- Row end -->

        </div>
        <!-- Content wrapper end -->

    </div>
    <!-- *************
        ************ Main container end *************
    ************* -->


    <!-- Footer start -->
    <footer class="main-footer">© Njoro 2020</footer>
    <!-- Footer end -->

</div>
<!-- Container fluid end -->

<!-- *************
    ************ Required JavaScript Files *************
************* -->
<!-- Required jQuery first, then Bootstrap Bundle JS -->
<script src="js/jquery.min.js"></script>
<script src="js/bootstrap.bundle.min.js"></script>
<script src="js/moment.js"></script>


<!-- *************
    ************ Vendor Js Files *************
************* -->
<!-- Slimscroll JS -->
<script src="vendor/slimscroll/slimscroll.min.js"></script>
<script src="vendor/slimscroll/custom-scrollbar.js"></script>

<!-- Daterange -->
<script src="vendor/daterange/daterange.js"></script>
<script src="vendor/daterange/custom-daterange.js"></script>

<!-- Chartist JS -->
<script src="vendor/chartist/js/chartist.min.js"></script>
<script src="vendor/chartist/js/chartist-tooltip.js"></script>
<script src="vendor/chartist/js/custom/pie/pie-charts3.js"></script>
<script src="vendor/chartist/js/custom/area/custom-area-chart.js"></script>
<script src="vendor/chartist/js/custom/area/custom-area-chart2.js"></script>
<script src="vendor/chartist/js/custom/bar/bar-chart.js"></script>

<!-- Main Js Required -->
<script src="js/main.js"></script>

</body>

<!-- Mirrored from bootstrap.gallery/wafi-admin/dashboard-v2/topbar/sales-dashboard.html by HTTrack Website Copier/3.x [XR&CO'2014], Wed, 08 Jul 2020 08:09:14 GMT -->
</html>
