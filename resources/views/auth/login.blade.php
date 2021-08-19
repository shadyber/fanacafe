@extends('layouts.app')

@section('content')
<div class="container">

    <!-- login -->
    <div class="login segments-page">

        <div class="container">
            <div class="wrap-form">
                <form method="POST" action="{{ route('login') }}">
                    @csrf
                    <label for="email">Email</label>
                    <input id="email" type="email" class="form-control @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" required autocomplete="email" autofocus>

                    @error('email')
                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                    @enderror

                    <label for="password">Password</label>
                    <input id="password" type="password" class="form-control @error('password') is-invalid @enderror" name="password" required autocomplete="current-password">

                    @error('password')
                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                    @enderror

                    <div class="info">
                        <input class="form-check-input" type="checkbox" name="remember" id="remember" {{ old('remember') ? 'checked' : '' }}>

                        {{ __('Remember Me') }}

                        <button class="btn btn-login btn-block">Login</button>

                        <ul>
                            <li>Don't have an account?
                                <a href="/register">Create Account</a>
                            </li>
                            <li>
                                @if (Route::has('password.request'))
                                    <a class="btn-link" href="{{ route('password.request') }}">
                                        {{ __('Forgot Your Password?') }}
                                    </a>
                                @endif

                            </li>
                        </ul>
                    </div>
                        </form>
                <div class="wrap-social">
                    <h5>Login with</h5>
                    <ul>
                        <li><a href=""><i class="fab fa-facebook-f"></i></a></li>
                        <li><a href=""><i class="fab fa-twitter"></i></a></li>
                        <li><a href=""><i class="fab fa-google"></i></a></li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
    <!-- end login -->

</div>
@endsection
