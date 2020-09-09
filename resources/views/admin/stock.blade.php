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
    <title>Njoro - Stock Dashboard</title>


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

    <!-- Data Tables -->
    <link rel="stylesheet" href="vendor/datatables/dataTables.bs4.css" />
    <link rel="stylesheet" href="vendor/datatables/dataTables.bs4-custom.css" />
    <link href="vendor/datatables/buttons.bs.css" rel="stylesheet" />

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
                    <a class="nav-link dropdown-toggle" href="{{url('admin')}}" id="dashboardsDropdown" role="button" aria-haspopup="true" aria-expanded="false">
                        <i class="icon-devices_other nav-icon"></i>
                        Dashboard
                    </a>
                </li>
                <li class="nav-item dropdown">
                    <a class="nav-link active-page dropdown-toggle" href="{{url('stock')}}" id="appsDropdown" role="button"  aria-haspopup="true" aria-expanded="false">
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


    <!-- *************
        ************ Main container start *************
    ************* -->
    <div class="main-container">

        <!-- Page header start -->
        <div class="page-header">
            <ol class="breadcrumb">
                <li class="breadcrumb-item active"><a href="{{url('admin')}}">Dashboard</a></li>
                <li class="breadcrumb-item">Stock</li>

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

            <!-- Row start -->
            <div class="row gutters">
                <div class="col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12">

                    <div class="table-container">
                        <div class="t-header">Stock Management</div>
                        <div class="table-responsive">
                            <table id="copy-print-csv" class="table custom-table">
                                <br>
                                <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#customModalTwo">
                                    Add Stock
                                </button>
                                <!-- Modal -->
                                <div class="modal fade" id="customModalTwo" tabindex="-1" role="dialog" aria-labelledby="customModalTwoLabel" aria-hidden="true">
                                    <div class="modal-dialog" role="document">
                                        <form action="{{route('stock.store')}}" method="post">
                                            @csrf
                                        <div class="modal-content">
                                            <div class="modal-header">
                                                <h5 class="modal-title" id="customModalTwoLabel">Add Product</h5>
                                                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                                    <span aria-hidden="true">&times;</span>
                                                </button>
                                            </div>
                                            <div class="modal-body">
                                                  <div class="form-group">
                                                        <label for="recipient-name" class="col-form-label">Product Name:</label>
                                                        <input type="text" name="name" placeholder="Product Name" class="form-control" id="recipient-name" required>
                                                    </div>
                                                    <div class="form-group">
                                                        <label for="recipient-name" class="col-form-label">Size:</label>
                                                        <input type="text" name="size" placeholder="Product Description" class="form-control" id="recipient-name" required>
                                                    </div>
                                                    <div class="form-group">
                                                        <label for="recipient-name" class="col-form-label">Stock:</label>
                                                        <input type="text" name="stock" placeholder="Stock" class="form-control" id="recipient-name" required>
                                                    </div>
                                                    <div class="form-group">
                                                        <label for="recipient-name" class="col-form-label">Price:</label>
                                                        <input type="text" name="price" placeholder="Product Price" class="form-control" id="recipient-name" required>
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
                                <thead>
                                <tr>
                                    <th>Product Name</th>
                                    <th>Size</th>
                                    <th>Stock</th>
                                    <th>Price</th>
                                    <th>Assign Stock</th>
                                    <th>Edit</th>
                                </tr>
                                </thead>
                                @foreach($stocks as $stock)
                                <tbody>
                                <tr>
                                    <td>{{$stock->name}}</td>
                                    <td>{{$stock->size}}</td>
                                    @switch($stock)
                                        @case($stock->stock>40)
                                        <td>2Carton({{$stock->stock-40}})Pieces</td>
                                        @break
                                        @case($stock->stock==40)
                                        <td>2Carton</td>
                                        @break
                                        @case($stock->stock>20)
                                        <td>1Carton({{$stock->stock-20}})Pieces</td>
                                        @break
                                        @case($stock->stock==20)
                                    <td>1Carton</td>
                                        @break
                                        @case($stock)
                                        <td>{{$stock->stock}}Pieces</td>
                                        @break
                                    @endswitch
                                    <td>Ksh:@ {{$stock->price}}</td>
                                    <td><button type="button" class="btn btn-info assign" name="assign" id="{{$stock->id}}" data-toggle="modal" data-target="#assignModal">Assign Stock</button> </td>
                                    <td><button type="button" class="btn btn-success view" name="view" id="{{$stock->id}}" data-toggle="modal" data-target="#editModal">Edit</button> </td>

                                </tr>

                                </tbody>
                                @endforeach
                            </table>
                        </div>
                    </div>

                </div>

            </div>
            <!-- Row end -->

        </div>
        <!-- Content wrapper end -->
        <div class="modal fade" id="editModal" tabindex="-1" role="dialog" aria-labelledby="customModalTwoLabel" aria-hidden="true">
            <div class="modal-dialog" role="document">
                <form action="{{route('editStock')}}" method="post">
                    @csrf
                    <div class="modal-content">
                        <div class="modal-header">
                            <h5 class="modal-title" id="customModalTwoLabel">Add Product</h5>
                            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                <span aria-hidden="true">&times;</span>
                            </button>
                        </div>
                        <div class="modal-body" id="modalBody">


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


    </div>
    <div class="modal fade" id="assignModal" tabindex="-1" role="dialog" aria-labelledby="customModalTwoLabel" aria-hidden="true">
        <div class="modal-dialog" role="document">
            <form action="{{url('assignStock')}}" method="post">
                @csrf
                <div class="modal-content">
                    <div class="modal-header">
                        <h5 class="modal-title" id="customModalTwoLabel">Assign Stock</h5>
                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                            <span aria-hidden="true">&times;</span>
                        </button>
                    </div>
                    <div class="modal-body" id="modalBody1">


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

<!-- Data Tables -->
<script src="vendor/datatables/dataTables.min.js"></script>
<script src="vendor/datatables/dataTables.bootstrap.min.js"></script>

<!-- Custom Data tables -->
<script src="vendor/datatables/custom/custom-datatables.js"></script>
<script src="vendor/datatables/custom/fixedHeader.js"></script>

<!-- Download / CSV / Copy / Print -->
<script src="vendor/datatables/buttons.min.js"></script>
<script src="vendor/datatables/jszip.min.js"></script>
<script src="vendor/datatables/pdfmake.min.js"></script>
<script src="vendor/datatables/vfs_fonts.js"></script>
<script src="vendor/datatables/html5.min.js"></script>
<script src="vendor/datatables/buttons.print.min.js"></script>

<!-- Main Js Required -->
<script src="js/main.js"></script>
<script>
    $(document).on('click','.view',function () {
        $value = $(this).attr('id');
        $.ajax({
            type:"get",
            url:"{{url('getStockDetail')}}",
            data:{'stockId':$value},
            success:function (data) {
                $('#modalBody').html(data);
            },
            error:function (error) {
                console.log(error)
                alert('error')

            }

        });
    });
</script>
<script>
    $(document).on('click','.assign',function () {
        $value = $(this).attr('id');
        $.ajax({
            type:"get",
            url:"{{url('getStock')}}",
            data:{'stockId':$value},
            success:function (data) {
                $('#modalBody1').html(data);
            },
            error:function (error) {
                console.log(error)
                alert('error')

            }

        });
    });
</script>

</body>

<!-- Mirrored from bootstrap.gallery/wafi-admin/dashboard-v2/topbar/data-tables.html by HTTrack Website Copier/3.x [XR&CO'2014], Wed, 08 Jul 2020 08:15:07 GMT -->
</html>
