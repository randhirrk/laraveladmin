<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ config('app.name', 'Laravel') }}</title>


    <!-- Scripts -->
    <script src="{{ asset('js/app.js') }}" defer></script>

    <!-- Fonts -->
    <link rel="dns-prefetch" href="//fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css?family=Nunito" rel="stylesheet" type="text/css">

    <!-- Styles -->
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">
    <link href="{{ asset('css/sb-admin.css') }}" rel="stylesheet">

</head>

<body class="bg-dark">

    <div class="container">
      <div class="card card-register mx-auto mt-5">
        <div class="card-header">Register an Account</div>
        <div class="card-body">
          <form method="POST" action="{{ route('register') }}">
            @csrf
            <div class="form-group">
              <div class="form-row">
                <div class="col-md-6">
                  <div class="form-label-group">
                    <input type="text" id="firstName" name="firstName" class="form-control{{ $errors->has('firstName') ? ' is-invalid' : '' }}" placeholder="First name" value="{{ old('firstName') }}" autofocus="autofocus">
                    <label for="firstName">{{ __('First Name') }}</label>

                    @if ($errors->has('firstName'))
                        <span class="invalid-feedback" role="alert">
                            <strong>{{ $errors->first('firstName') }}</strong>
                        </span>
                    @endif
                  </div>
                </div>
                <div class="col-md-6">
                  <div class="form-label-group">
                    <input type="text" id="lastName" name="lastName" class="form-control{{ $errors->has('lastName') ? ' is-invalid' : '' }}" placeholder="Last name" value="{{ old('lastName') }}">
                    <label for="lastName">{{ __('Last Name') }}</label>

                    @if ($errors->has('lastName'))
                        <span class="invalid-feedback" role="alert">
                            <strong>{{ $errors->first('lastName') }}</strong>
                        </span>
                    @endif
                  </div>
                </div>
              </div>
            </div>
            <div class="form-group">
              <div class="form-label-group">
                <input type="email" id="inputEmail" name="email" class="form-control{{ $errors->has('email') ? ' is-invalid' : '' }}" placeholder="Email address" value="{{ old('email') }}">
                <label for="inputEmail">{{ __('Email Address') }}</label>

                @if ($errors->has('email'))
                    <span class="invalid-feedback" role="alert">
                        <strong>{{ $errors->first('email') }}</strong>
                    </span>
                @endif
              </div>
            </div>
            <div class="form-group">
              <div class="form-row">
                <div class="col-md-6">
                  <div class="form-label-group">
                    <input type="password" id="inputPassword" class="form-control{{ $errors->has('password') ? ' is-invalid' : '' }}" name="password" placeholder="Password">
                    <label for="inputPassword">{{ __('Password') }}</label>

                    @if ($errors->has('password'))
                        <span class="invalid-feedback" role="alert">
                            <strong>{{ $errors->first('password') }}</strong>
                        </span>
                    @endif
                  </div>
                </div>
                <div class="col-md-6">
                  <div class="form-label-group">
                    <input type="password" id="confirmPassword" class="form-control" placeholder="Confirm password" name="password_confirmation">
                    <label for="confirmPassword">{{ __('Confirm Password') }}</label>
                  </div>
                </div>
              </div>
            </div>
            <button type="submit" class="btn btn-primary btn-block">
                {{ __('Register') }}
            </button>
          </form>
          <div class="text-center">
            <a class="d-block small mt-3" href="/login">{{ __('Login') }}</a>
            <a class="d-block small" href="forgot-password.html">{{ __('Forgot Password?') }}</a>
          </div>
        </div>
      </div>
    </div>
</body>

</html>