<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <!-- Tell the browser to be responsive to screen width -->
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">
    <!-- Favicon icon -->

    <link rel="icon" type="image/png" sizes="16x16" href="{{ asset('assets/ElaAdmin/images/favicon.png') }}">
    <title>Login Sikorea</title>
    <!-- Bootstrap Core CSS -->

    <link href="{{ asset('assets/ElaAdmin/css/lib/bootstrap/bootstrap.min.css') }}" rel="stylesheet">
    <!-- Custom CSS -->
    <link href="{{ asset('assets/ElaAdmin/css/helper.css') }}" rel="stylesheet">
    <link href="{{ asset('assets/ElaAdmin/css/style.css') }}" rel="stylesheet">

    <!-- <link href="css/helper.css" rel="stylesheet">
    <link href="css/style.css" rel="stylesheet"> -->
    <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:** -->
    <!--[if lt IE 9]>
    <script src="https:**oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
    <script src="https:**oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
<![endif]-->
</head>

<body class="fix-header fix-sidebar">
    <!-- Preloader - style you can find in spinners.css -->
    <div class="preloader">
        <svg class="circular" viewBox="25 25 50 50">
			<circle class="path" cx="50" cy="50" r="20" fill="none" stroke-width="2" stroke-miterlimit="10" /> </svg>
    </div>
    <!-- Main wrapper  -->
    <div id="main-wrapper">

        <div class="unix-login">
            <div class="container-fluid">
                <div class="row justify-content-center">
                    <div class="col-lg-4">
                        <div class="login-content card">
                            <div class="login-form">
                                <h4>Login</h4>
                                <form method="POST" action="{{ route('login') }}">
                                  @csrf
                                    <div class="form-group">
                                        <label for="email" >{{ __('E-Mail Address') }}</label>
                                        <input id="email" type="email" class="form-control{{ $errors->has('email') ? ' is-invalid' : '' }}" name="email" value="{{ old('email') }}" required autofocus>

                                        @if ($errors->has('email'))
                                            <span class="invalid-feedback" role="alert">
                                                <strong>{{ $errors->first('email') }}</strong>
                                            </span>
                                        @endif
                                    </div>
                                    <div class="form-group">
                                        <label for="password" >{{ __('Password') }}</label>
                                        <input id="password" type="password" class="form-control{{ $errors->has('password') ? ' is-invalid' : '' }}" name="password" required>

                                        @if ($errors->has('password'))
                                            <span class="invalid-feedback" role="alert">
                                                <strong>{{ $errors->first('password') }}</strong>
                                            </span>
                                        @endif
                                    </div>
                                    <div class="checkbox">
                                          <label>
                        										<input type="checkbox" name="remember" id="remember" {{ old('remember') ? 'checked' : '' }}>

                                                {{ __('Remember Me') }}

                        									</label>
                                          <label class="pull-right">
                                            <a class="btn btn-link" href="{{ route('password.request') }}">
                                                {{ __('Forgot Your Password?') }}
                                            </a>
                        									</label>

                                    </div>
                                    <button type="submit" class="btn btn-primary btn-flat m-b-30 m-t-30">{{ __('Login') }}</button>
                                    <div class="register-link m-t-15 text-center">
                                        <p>Don't have account ? <a href="{{ route('register') }}">{{ __('Register') }}</a></p>
                                    </div>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

    </div>
    <!-- End Wrapper -->
    <!-- All Jquery -->
    <script src="{{ asset('assets/ElaAdmin/js/lib/jquery/jquery.min.js' ) }}" rel="stylesheet"></script>
    <!-- <script src="js/lib/jquery/jquery.min.js"></script> -->
    <!-- Bootstrap tether Core JavaScript -->
    <script src="{{ asset('assets/ElaAdmin/js/lib/bootstrap/js/popper.min.js' ) }}" rel="stylesheet"></script>
    <script src="{{ asset('assets/ElaAdmin/js/lib/bootstrap/js/bootstrap.min.js' ) }}" rel="stylesheet"></script>

    <!-- <script src="js/lib/bootstrap/js/popper.min.js"></script>
    <script src="js/lib/bootstrap/js/bootstrap.min.js"></script> -->
    <!-- slimscrollbar scrollbar JavaScript -->
    <script src="{{ asset('assets/ElaAdmin/js/jquery.slimscroll.js' ) }}" rel="stylesheet"></script>
    <script src="{{ asset('assets/ElaAdmin/js/sidebarmenu.js' ) }}" rel="stylesheet"></script>
    <script src="{{ asset('assets/ElaAdmin/js/lib/sticky-kit-master/dist/sticky-kit.min.js' ) }}" rel="stylesheet"></script>
    <script src="{{ asset('assets/ElaAdmin/js/custom.min.js' ) }}" rel="stylesheet"></script>

    <!-- <script src="js/jquery.slimscroll.js"></script> -->
    <!--Menu sidebar -->
    <!-- <script src="js/sidebarmenu.js"></script> -->
    <!--stickey kit -->
    <!-- <script src="js/lib/sticky-kit-master/dist/sticky-kit.min.js"></script> -->
    <!--Custom JavaScript -->
    <!-- <script src="js/custom.min.js"></script> -->

</body>

</html>
