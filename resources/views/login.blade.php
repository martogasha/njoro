<!doctype html>
<html lang="en">

<!-- Mirrored from bootstrap.gallery/wafi-admin/dashboard-v2/topbar/login.html by HTTrack Website Copier/3.x [XR&CO'2014], Wed, 08 Jul 2020 08:12:26 GMT -->
<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Meta -->
    <meta name="description" content="Responsive Bootstrap4 Dashboard Template">
    <meta name="author" content="ParkerThemes">
    <link rel="shortcut icon" href="img/fav.png" />

    <!-- Title -->
    <title>Njoro - Login</title>

    <!-- *************
        ************ Common Css Files *************
    ************ -->
    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="css/bootstrap.min.css" />

    <!-- Master CSS -->
    <link rel="stylesheet" href="css/main.css" />

</head>

<body class="authentication">

<!-- Container start -->
<div class="container">

    <form action="{{url('Login')}}" method="post">
        @csrf
        <div class="row justify-content-md-center">
            <div class="col-xl-4 col-lg-5 col-md-6 col-sm-12">
                <div class="login-screen">
                    <div class="login-box">
                        <a href="#" class="login-logo">
                            <img src="img/logo-dark.png" alt="Wafi Admin Dashboard" />
                        </a>
                        @include('flash-message')
                        <h5>Welcome back,<br />Please Login to your Account.</h5>
                        <div class="form-group">
                            <input type="text" name="phone" class="form-control" placeholder="Phone Number" required/>
                        </div>
                        <div class="form-group">
                            <input type="password" name="password" class="form-control" placeholder="Password" />
                        </div>
                        <div class="actions mb-4">
                            <div class="custom-control custom-checkbox">
                                <input type="checkbox" class="custom-control-input" id="remember_pwd">
                                <label class="custom-control-label" for="remember_pwd">Remember me</label>
                            </div>
                            <button type="submit" class="btn btn-primary">Login</button>
                        </div>
                        <div class="forgot-pwd">
                            <a class="link" href="forgot-pwd.html">Forgot password?</a>
                        </div>
                        <hr>
                        <div class="actions align-left">
                            <span class="additional-link">New here?</span>
                            <a href="signup.html" class="btn btn-dark">Create an Account</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </form>

</div>
<!-- Container end -->

</body>

<!-- Mirrored from bootstrap.gallery/wafi-admin/dashboard-v2/topbar/login.html by HTTrack Website Copier/3.x [XR&CO'2014], Wed, 08 Jul 2020 08:12:26 GMT -->
</html>
