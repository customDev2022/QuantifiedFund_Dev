

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8" />
    <link rel="apple-touch-icon" sizes="76x76" href="{{ asset('storage') }}/assets/img/apple-icon.png">
    <link rel="icon" type="image/png" href="{{ asset('storage') }}/assets/img/favicon.png">
    <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1" />
    <title>Light Bootstrap Dashboard</title>
    <meta content='width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=0, shrink-to-fit=no'
        name='viewport' />
    <!--     Fonts and icons     -->
    <link href="https://fonts.googleapis.com/css?family=Montserrat:400,700,200" rel="stylesheet" />
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/latest/css/font-awesome.min.css" />
    <!-- CSS Files -->
    <link href="{{ asset('storage') }}/assets/css/bootstrap.min.css" rel="stylesheet" />
    <link href="{{ asset('storage') }}/assets/css/light-bootstrap-dashboard.css?v=2.0.1" rel="stylesheet" />
    <link href="{{ asset('storage') }}/assets/css/demo.css" rel="stylesheet" />
</head>

<body>
    <div class="wrapper wrapper-full-page">
        <!-- Navbar -->
        <nav class="navbar navbar-expand-lg navbar-transparent navbar-absolute">
            <div class="container">
                <div class="navbar-wrapper">
                    <a class="navbar-brand" href="#pablo">Quantified Funds Admin Panel</a>
                    <button class="navbar-toggler navbar-toggler-right" type="button" data-toggle="collapse" aria-controls="navigation-index" aria-expanded="false" aria-label="Toggle navigation">
                        <span class="navbar-toggler-bar burger-lines"></span>
                        <span class="navbar-toggler-bar burger-lines"></span>
                        <span class="navbar-toggler-bar burger-lines"></span>
                    </button>
                </div>
                
            </div>
        </nav>
        <!-- End Navbar -->
        <div class="full-page  section-image" data-color="black" data-image="../../assets/img/full-screen-image-2.jpg" ;>
            <!--   you can change the color of the filter page using: data-color="blue | purple | green | orange | red | rose " -->
            <div class="content">
                <div class="container">
                    <div class="col-md-4 col-sm-6 ml-auto mr-auto">
                       <form class="form" method="POST" action="{{ route('checkadmin') }}">
                        @csrf
                        <div class="card card-login card-hidden">
                            <div class="card-header ">
                                <h3 class="header text-center">Login</h3>
                            </div>
                            <!-- Validation Errors -->
                            @if ($errors->any())
                                @foreach ($errors->all() as $error)
                                    <div class="alert alert-danger">
                                        <span>{{ $error }}</span>
                                    </div>
                                @endforeach
                            @endif

                           @if(Session::has('error'))
                           <div class="alert alert-danger">
                           {{Session::get('error')}}
                           </div>
                           @endif
                           
                            <div class="card-body">
                                <div class="form-group">
                                    <label>Email address</label>
                                    <input type="email" name="email" value="{{ old('email') }}"
                                        placeholder="Enter email" class="form-control" required>
                                </div>
                                <div class="form-group">
                                    <label>Password</label>
                                    <input type="password" name="password" placeholder="Password" class="form-control">
                                </div>
                                <div class="form-group">
                                    <div class="form-check">
                                        <label class="form-check-label">
                                            <input class="form-check-input" type="checkbox" value="" id="remember_me"
                                                name="remember" value="{{ old('remember') ? 'checked' : '' }}">
                                            <span class="form-check-sign"></span>
                                            Remember me
                                        </label>
                                    </div>
                                </div>
                                @if (Route::has('password.request'))
                                    <a class="underline text-sm text-gray-600 hover:text-gray-900"
                                        href="{{ route('password.request') }}">
                                        {{ __('Forgot your password?') }}
                                    </a>
                                @endif
                            </div>
                            <div class="card-footer ml-auto mr-auto">
                                <button type="submit" class="btn btn-warning btn-wd">Login</button>
                            </div>
                        </div>
                    </form>
                    </div>
                </div>
            </div>
        </div>
        <footer class="footer">
            <div class="container">
                <nav>
                    <ul class="footer-menu">
                        <li>
                            <a href="#">
                                Home
                            </a>
                        </li>
                        <li>
                            <a href="#">
                                Company
                            </a>
                        </li>
                        <li>
                            <a href="#">
                                Portfolio
                            </a>
                        </li>
                        <li>
                            <a href="#">
                                Blog
                            </a>
                        </li>
                    </ul>
                    <p class="copyright text-center">
                        ©
                        <script>
                            document.write(new Date().getFullYear())
                        </script>
                        <a href="https://wellbuiltdigital.com/">WellBuilt Digital™</a>, made with love for a better web
                    </p>
                </nav>
            </div>
        </footer>
    </div>
    </body>
<!--   Core JS Files   -->
<script src="{{ asset('storage') }}/assets/js/core/jquery.3.2.1.min.js" type="text/javascript"></script>
<script src="{{ asset('storage') }}/assets/js/core/popper.min.js" type="text/javascript"></script>
<script src="{{ asset('storage') }}/assets/js/core/bootstrap.min.js" type="text/javascript"></script>
<script src="{{ asset('storage') }}/assets/js/plugins/bootstrap-switch.js"></script>
<script type="text/javascript" src="https://maps.googleapis.com/maps/api/js?YOUR_KEY_HERE"></script>
<script src="{{ asset('storage') }}/assets/js/plugins/chartist.min.js"></script>
<script src="{{ asset('storage') }}/assets/js/plugins/bootstrap-notify.js"></script>
<script src="{{ asset('storage') }}/assets/js/plugins/jquery-jvectormap.js" type="text/javascript"></script>
<script src="{{ asset('storage') }}/assets/js/plugins/moment.min.js"></script>
<script src="{{ asset('storage') }}/assets/js/plugins/bootstrap-datetimepicker.js"></script>
<script src="{{ asset('storage') }}/assets/js/plugins/sweetalert2.min.js" type="text/javascript"></script>
<script src="{{ asset('storage') }}/assets/js/plugins/bootstrap-tagsinput.js" type="text/javascript"></script>
<script src="{{ asset('storage') }}/assets/js/plugins/nouislider.js" type="text/javascript"></script>
<script src="{{ asset('storage') }}/assets/js/plugins/bootstrap-selectpicker.js" type="text/javascript"></script>
<script src="{{ asset('storage') }}/assets/js/plugins/jquery.validate.min.js" type="text/javascript"></script>
<script src="{{ asset('storage') }}/assets/js/plugins/jquery.bootstrap-wizard.js"></script>
<script src="{{ asset('storage') }}/assets/js/plugins/bootstrap-table.js"></script>
<script src="{{ asset('storage') }}/assets/js/plugins/jquery.dataTables.min.js"></script>
<script src="{{ asset('storage') }}/assets/js/plugins/fullcalendar.min.js"></script>
<script src="{{ asset('storage') }}/assets/js/light-bootstrap-dashboard.js?v=2.0.1" type="text/javascript"></script>
<script src="{{ asset('storage') }}/assets/js/demo.js"></script>
<script>
    $(document).ready(function() {
        demo.checkFullPageBackgroundImage();

        setTimeout(function() {
            // after 1000 ms we add the class animated to the login/register card
            $('.card').removeClass('card-hidden');
        }, 700)
    });
</script>


</html>