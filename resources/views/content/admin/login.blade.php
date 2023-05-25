<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link href="{{ asset('css/login.css') }}" rel="stylesheet">
    <title>Login</title>
</head>
<body>
    <div class="limiter">
    <div class="container-login100">
        <div class="wrap-login100">
            <form class="login100-form validate-form" method="POST" action="{{ route('login') }}">
                @csrf
                <span class="login100-form-title p-b-26">
                    Welkom
                </span>
                <span class="login100-form-title p-b-48">
                    <i class="zmdi zmdi-font"></i>
                </span>

                <div class="wrap-input100 validate-input" data-validate = "Valid email is: a@b.c">
                    <input :value="old('email')" class="input100" type="text" name="email">
                    <span class="focus-input100" data-placeholder="Email" id="email" type="email" name="email" required autofocus autocomplete="username"></span>
                </div>

                <div class="wrap-input100 validate-input" data-validate="Enter password">
                    <span class="btn-show-pass">
                        <i class="zmdi zmdi-eye"></i>
                    </span>
                    <input :value="__('Password')" class="input100" type="password" name="password" id="password" required autocomplete="current-password">
                    @if ($errors->has('password'))
                        <span class="text-danger">{{ $errors->first('password') }}</span>
                    @endif
                    <span class="focus-input100" data-placeholder="Wachtwoord"></span>
                </div>

                <div class="container-login100-form-btn">
                    <div class="wrap-login100-form-btn">
                        <div class="login100-form-bgbtn"></div>
                        <button class="login100-form-btn" type="submit">
                            Inloggen
                        </button>
                    </div>
                </div>
            </form>
        </div>
    </div>
</div>


<div id="dropDownSelect1"></div>


</body>
</html>