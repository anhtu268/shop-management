<!DOCTYPE html>
<html lang="en">

<head>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/pace/1.0.2/pace.min.js"></script>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width,initial-scale=1,shrink-to-fit=no">
    <link rel="icon" type="image/png" sizes="16x16" href="assets/demo/favicon.png">
    <title>Login</title>
    <!-- CSS -->
    <link href="{{ asset('/assets/vendors/material-icons/material-icons.css')}}" rel="stylesheet" type="text/css">
    <link href="{{ asset('/assets/vendors/mono-social-icons/monosocialiconsfont.css')}}" rel="stylesheet" type="text/css">
    <link href="https://cdnjs.cloudflare.com/ajax/libs/limonte-sweetalert2/6.6.4/sweetalert2.css" rel="stylesheet" type="text/css">
    <link href="https://cdnjs.cloudflare.com/ajax/libs/magnific-popup.js/1.1.0/magnific-popup.min.css" rel="stylesheet" type="text/css">
    <link href="https://cdnjs.cloudflare.com/ajax/libs/mediaelement/4.1.3/mediaelementplayer.min.css" rel="stylesheet" type="text/css">
    <link href="https://cdnjs.cloudflare.com/ajax/libs/jquery.perfect-scrollbar/0.7.0/css/perfect-scrollbar.min.css" rel="stylesheet" type="text/css">
    <link href="https://fonts.googleapis.com/css?family=Nunito+Sans:400,600,700" rel="stylesheet" type="text/css">
    <link href="https://fonts.googleapis.com/css?family=Roboto:300,400,400i,500,700" rel="stylesheet" type="text/css">
    <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,400,600" rel="stylesheet" type="text/css">
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css" rel="stylesheet" type="text/css">
    <link href="{{ asset('/assets/css/style.css')}}" rel="stylesheet" type="text/css">
    <!-- Head Libs -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/modernizr/2.8.3/modernizr.min.js"></script>
</head>

<body class="body-bg-full profile-page" style="background-image: url(assets/demo/night.jpg)">
    <div id="wrapper" class="row wrapper">
        <div class="col-10 ml-sm-auto col-sm-6 col-md-4 ml-md-auto login-center mx-auto">
            <div class="navbar-header text-center">
                <a href="index.html">
                    <img alt="" src="{{ asset('/assets/demo/logo-expand-dark.png')}}">
                </a>
            </div>
            <!-- /.navbar-header -->
            <form class="form-material" method="POST" action="{{ route('login') }}" >
                @csrf

                <div class="form-group">
                    <input type="email" placeholder="johndoe@site.com" class="form-control form-control-line" name="email" id="example-email" value="{{ old('email')}}">
                    <label for="example-email">Email</label>
                </div>
                <div class="form-group">
                    <input type="password" name="password" placeholder="password" class="form-control form-control-line">
                    <label>Password</label>
                </div>
                <div class="form-group">
                    <button class="btn btn-block btn-lg btn-color-scheme ripple" type="submit">Login</button>
                </div>
                <div class="form-group no-gutters mb-0">
                    <!-- <div class="col-md-12 d-flex">
                        <div class="checkbox checkbox-info mr-auto">
                            <label>
                                <input type="checkbox"> <span class="label-text">Remember me</span>
                            </label>
                        </div><a href="javascript:void(0)" id="to-recover" class="my-auto pb-2"><i class="fa fa-lock mr-1"></i>Forgot Password?</a>
                    </div>
 -->                    <!-- /.col-md-12 -->
                </div>
                <!-- /.form-group -->
            </form>
            <!-- /.form-material -->
            <hr>
            <div class="row btn-list">
                <div class="col-md-6">
                    <button type="button" class="btn btn-block btn-facebook ripple" data-toggle="tooltip" data-placement="top" title="Login with Facebook"><i class="social-icons list-icon">facebook</i> Facebook</button>
                </div>
                <div class="col-md-6">
                    <button type="button" class="btn btn-block btn-googleplus ripple" data-toggle="tooltip" data-placement="top" title="Login with Google"><i class="social-icons list-icon">googleplus</i> Google</button>
                </div>
            </div>
            <!-- /.btn-list -->
            <footer class="col-sm-12 text-center">
            </footer>
        </div>
        <!-- /.login-center -->
    </div>
    <!-- /.body-container -->
    <!-- Scripts -->
    <script type="text/javascript" src="http://cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
    <script type="text/javascript" src="http://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/3.3.7/js/bootstrap.min.js"></script>
    <script type="text/javascript" src="{{ asset('/assets/js/material-design.js')}}"></script>
</body>

</html>