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
    <link rel="shortcut icon" href="{{asset('img/fav.png')}}" />

    <!-- Title -->
    <title>Njoro - {{$getUserId->property->name}}</title>


    <!-- *************
        ************ Common Css Files *************
    ************ -->
    <!-- Bootstrap css -->
    <link rel="stylesheet" href="{{asset('css/bootstrap.min.css')}}">

    <!-- Icomoon Font Icons css -->
    <link rel="stylesheet" href="{{asset('fonts/style.css')}}">

    <!-- Main css -->
    <link rel="stylesheet" href="{{asset('css/main.css')}}">


    <!-- *************
        ************ Vendor Css Files *************
    ************ -->
    <!-- DateRange css -->
    <link rel="stylesheet" href="{{asset('vendor/daterange/daterange.css')}}" />

    <!-- Data Tables -->
    <link rel="stylesheet" href="{{asset('vendor/datatables/dataTables.bs4.css')}}" />
    <link rel="stylesheet" href="{{asset('vendor/datatables/dataTables.bs4-custom.css')}}" />
    <link href="{{asset('vendor/datatables/buttons.bs.css')}}" rel="stylesheet" />

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
                    <span class="user-name">{{\Illuminate\Support\Facades\Auth::user()->name}}</span>
                    <span class="avatar">K<span class="status busy"></span></span>
                </a>
                <div class="dropdown-menu dropdown-menu-right" aria-labelledby="userSettings">
                    <div class="header-profile-actions">
                        <div class="header-user-profile">
                            <div class="header-user">
                                <img src="img/user.png" alt="Admin Template" />
                            </div>
                            <h5>{{\Illuminate\Support\Facades\Auth::user()->name}}</h5>
                            <p>Owner</p>
                        </div>
                        <a href="{{url('profile')}}"><i class="icon-user1"></i> My Profile</a>
                        <form action="{{route('logout')}}" method="post" id="logout">
                            @csrf
                            <a href="javascript:document.getElementById('logout').submit();"><i class="icon-log-out1"></i> Sign Out</a>
                        </form>
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
                    <a class="nav-link dropdown-toggle" href="{{url('counter')}}" id="appsDropdown" role="button"  aria-haspopup="true" aria-expanded="false">
                        <i class="icon-package nav-icon"></i>
                        Home
                    </a>
                </li>
                <li class="nav-item dropdown">
                    <a class="nav-link active-page dropdown-toggle" href="#" id="appsDropdown" role="button"  aria-haspopup="true" aria-expanded="false">
                        <i class="icon-package nav-icon"></i>
                        {{$getUserId->name}}
                    </a>
                </li>
            </ul>
        </div>
    </nav>
    <!-- Navigation end -->


    <!-- *************
        ************ Main container start *************
    ************* -->
    <div class="main-container">

        <!-- Page header start -->
        <div class="page-header">
            <ol class="breadcrumb">
                <li class="breadcrumb-item active"><a href="{{url('counter')}}">Home</a></li>
                <li class="breadcrumb-item">{{$getUserId->name}}</li>

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
@include('flash-message')

        <!-- Content wrapper start -->
        <div class="content-wrapper">
             <form action="{{route('profile.store')}}" method="post">
                 @csrf
                 <input type="hidden" name="userId" value="{{$getUserId->id}}">
            <div class="form-group">
                <label for="exampleInputEmail1">Phone Number</label>
                <input type="text" name="phone" value="{{$getUserId->phone}}" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Phone Number">
            </div>
            <div class="form-group">
                <label for="exampleInputEmail1">Worker Area</label>
                <input type="text" name="work" value="{{$getUserId->property->name}}" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Work Area" readonly>
            </div>
                 <div class="form-group">
                     <label for="exampleInputEmail1">Password</label>
                     <input type="password" name="password" class="form-control" id="password" aria-describedby="emailHelp" placeholder="Password">
                     <br>
                     <input type="checkbox" onclick="passwordFunction()">Show Password
                 </div>

                 <button type="submit" class="btn btn-success">Save</button>
             </form>

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

<!-- *************
			************ Required JavaScript Files *************
		************* -->
<!-- Required jQuery first, then Bootstrap Bundle JS -->
<script src="{{asset('js/jquery.min.js')}}"></script>
<script src="{{asset('js/bootstrap.bundle.min.js')}}"></script>
<script src="{{asset('js/moment.js')}}"></script>


<!-- *************
			************ Vendor Js Files *************
		************* -->
<!-- Slimscroll JS -->
<script src="{{asset('vendor/slimscroll/slimscroll.min.js')}}"></script>
<script src="{{asset('vendor/slimscroll/custom-scrollbar.js')}}"></script>

<!-- Daterange -->
<script src="{{asset('vendor/daterange/daterange.js')}}"></script>
<script src="{{asset('vendor/daterange/custom-daterange.js')}}"></script>

<!-- Data Tables -->
<script src="{{asset('vendor/datatables/dataTables.min.js')}}"></script>
<script src="{{asset('vendor/datatables/dataTables.bootstrap.min.js')}}"></script>

<!-- Custom Data tables -->
<script src="{{asset('vendor/datatables/custom/custom-datatables.js')}}"></script>
<script src="{{asset('vendor/datatables/custom/fixedHeader.js')}}"></script>

<!-- Download / CSV / Copy / Print -->
<script src="{{asset('vendor/datatables/buttons.min.js')}}"></script>
<script src="{{asset('vendor/datatables/jszip.min.js')}}"></script>
<script src="{{asset('vendor/datatables/pdfmake.min.js')}}"></script>
<script src="{{asset('vendor/datatables/vfs_fonts.js')}}"></script>
<script src="{{asset('vendor/datatables/html5.min.js')}}"></script>
<script src="{{asset('vendor/datatables/buttons.print.min.js')}}"></script>

<!-- Main Js Required -->
<script src="{{asset('js/main.js')}}"></script>

</body>
<script>
    $('#productDesc').on('change',function () {
        $value = $(this).val();
        $.ajax({
            type:"get",
            url:"{{url('getProdDetails')}}",
            data:{'prodId':$value},
            success:function (data) {
                $('#prodInput').val(data);
            },
            error:function (error) {
                console.log(error)
                alert('error')

            }

        });
    });
    function passwordFunction() {
        var x = document.getElementById("password");
        if (x.type === "password") {
            x.type = "text";
        } else {
            x.type = "password";
        }
    }
</script>

<!-- Mirrored from bootstrap.gallery/wafi-admin/dashboard-v2/topbar/data-tables.html by HTTrack Website Copier/3.x [XR&CO'2014], Wed, 08 Jul 2020 08:15:07 GMT -->
</html>
