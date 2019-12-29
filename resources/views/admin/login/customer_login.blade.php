
<!DOCTYPE html>
<html lang="en">
<head>
    <title>User Login</title>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="shortcut icon" href="{{ asset('frontend/front/images/favicon.png') }}" />
    <link rel="stylesheet" type="text/css" href="{{ asset('login_resource/vendor/bootstrap/css/bootstrap.min.css') }}">
    <link rel="stylesheet" type="text/css" href="{{ asset('login_resource/fonts/font-awesome-4.7.0/css/font-awesome.min.css') }}">
    <link rel="stylesheet" type="text/css" href="{{ asset('login_resource/fonts/iconic/css/material-design-iconic-font.min.css') }}">
    <link rel="stylesheet" type="text/css" href="{{ asset('login_resource/vendor/animate/animate.css') }}">
    <link rel="stylesheet" type="text/css" href="{{ asset('login_resource/vendor/css-hamburgers/hamburgers.min.css') }}">
    <link rel="stylesheet" type="text/css" href="{{ asset('login_resource/vendor/animsition/css/animsition.min.css') }}">
    <link rel="stylesheet" type="text/css" href="{{ asset('login_resource/vendor/select2/select2.min.css') }}">
    <link rel="stylesheet" type="text/css" href="{{ asset('login_resource/vendor/daterangepicker/daterangepicker.css') }}">
    <link rel="stylesheet" type="text/css" href="{{ asset('login_resource/css/util.css') }}">
    <link rel="stylesheet" type="text/css" href="{{ asset('login_resource/css/main.css') }}">
</head>

<!-- <ul class="nav ">
  <li class="nav-item">
    <a href="{{ route('homepage') }}" class="nav-link btn-outline-success " style="font-weight: bold; font-size: 16px;">Home</a>
  </li>
</ul> -->
<body>

    <div class="limiter">
        <div class="container-login100">
            <div class="wrap-login100">

                @if($errors->any())
                <div class="alert alert-danger">
                    <ul>
                        @foreach ($errors->all() as $error)
                        <li>{{ $error }}</li>
                        @endforeach
                    </ul>
                </div><br />
                @endif

                <form class="login100-form validate-form" method="post" action="{{ route('login') }}">

                @csrf

                    <span class="login100-form-title p-b-26">
                        Welcome
                    </span>
                    <span class="login100-form-title p-b-48">
                    </span>

                    <div class="wrap-input100 validate-input" data-validate = "Valid email is: a@b.c">
                        <input class="input100" type="email" name="email" required>
                        <span class="focus-input100" data-placeholder="Email"></span>
                    </div>

                    <div class="wrap-input100 validate-input" data-validate="Enter password">
                        <span class="btn-show-pass">
                            <i class="zmdi zmdi-eye"></i>
                        </span>
                        <input class="input100" type="password" name="password" required>
                        <span class="focus-input100" data-placeholder="Password"></span>
                    </div>
                    <div class="contact100-form-checkbox m-l-4">
                    <input class="input-checkbox100" id="ckb1" type="checkbox" name="remember" {{ old('remember') ? 'checked' : '' }}>
                    <label class="text-right p-t-8 p-b-31" for="ckb1">
                        Remember me
                    </label>
                </div>

                    <div class="container-login100-form-btn">
                        <div class="wrap-login100-form-btn">
                            <div class="login100-form-bgbtn"></div>
                            <button class="login100-form-btn">
                                Login
                            </button>
                        </div>
                        <div class="text-center p-t-20">
                        @if (Route::has('password.request'))
                            <a class="btn btn-link" href="{{ route('password.request') }}">
                                Forgot Your Password?
                            </a>
                        @endif
                        </div>

                    </div>
                    <div class="text-center p-t-20">
                        <span class="txt1">
                            Return to home
                        </span>
                        <a class="txt2 btn-primaryfont-weight-bold" style="color: #00ff40;" href="{{ route('homepage') }}">
                        Home
                    </a>
                    </div>

                    <div class="text-center p-t-115">
                        <span class="txt1">
                            Don’t have an account?
                        </span>

                        <a class="txt2 btn-primaryfont-weight-bold" style="color: #00ff40;" href="{{ url('/user-registration') }}">
                            Sign Up
                        </a>
                    </div>
                </form>
            </div>
        </div>
    </div>


    <div id="dropDownSelect1"></div>
    <script src="{{ asset('login_resource/vendor/jquery/jquery-3.2.1.min.js') }}"></script>
    <script src="{{ asset('login_resource/vendor/animsition/js/animsition.min.js') }}"></script>
    <script src="{{ asset('login_resource/vendor/bootstrap/js/popper.js') }}"></script>
    <script src="{{ asset('login_resource/vendor/bootstrap/js/bootstrap.min.js') }}"></script>
    <script src="{{ asset('login_resource/vendor/select2/select2.min.js') }}"></script>
    <script src="{{ asset('login_resource/vendor/daterangepicker/moment.min.js') }}"></script>
    <script src="{{ asset('login_resource/vendor/daterangepicker/daterangepicker.js') }}"></script>
    <script src="{{ asset('login_resource/vendor/countdowntime/countdowntime.js') }}"></script>
    <script src="{{ asset('login_resource/js/main.js') }}"></script>

</body>
</html>
