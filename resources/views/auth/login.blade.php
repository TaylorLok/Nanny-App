@extends('layouts.app')

@section('content')
<style>
    body {
        /* background: url('{{ asset('storage/logos/nanyHome.jpg') }}') no-repeat center center fixed; */
        background-size: cover;
        background-color: #eae7dc;
    }
    .login-container {
        display: flex;
        justify-content: center;
        align-items: center;
        min-height: 100vh;
        padding: 15px;
    }
    .login-card {
        display: flex;
        flex-direction: column;
        background-color: white;
        border-radius: 8px;
        overflow: hidden;
        box-shadow: 0 2px 10px rgba(0, 0, 0, 0.1);
    }
    .login-left {
        background-color: #f5f5f5;
        padding: 40px;
        display: flex;
        flex-direction: column;
        justify-content: center;
        align-items: center;
    }
    .login-right {
        padding: 40px;
    }
    .login-right form {
        width: 100%;
    }
    .login-right .form-group {
        margin-bottom: 20px;
    }
    .login-right .form-control {
        border-radius: 4px;
    }
    .login-right .btn-primary {
        width: 100%;
        padding: 10px;
        border-radius: 4px;
    }
    .login-right h3 {
    text-align: center;
    }
    .divider {
        height: 100%;
        width: 1px;
        background-color: #e0e0e0;
        margin: 0 40px;
    }
    @media (min-width: 768px) {
        .login-card {
            flex-direction: row;
        }
        .divider {
            display: block;
        }
    }
    @media (max-width: 767px) {
        .divider {
            display: none;
        }
    }
</style>

<div class="login-container">
    <div class="login-card">
        <div class="login-left">
            <h3>Welcome!</h3>
            <!-- <img src="{{ asset('path/to/your/welcome-image.png') }}" alt="Welcome" style="width: 100px;"> -->
            <p>Not a member yet? <a href="{{ route('register') }}">Register now</a></p>
        </div>
        <div class="divider"></div>
        <div class="login-right">
            <h3 >Log in</h3>
            <form method="POST" action="{{ route('login') }}">
                @csrf
                <div class="form-group">
                    <label for="email">Email</label>
                    <input type="email" id="email" class="form-control @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" required autocomplete="email" autofocus>
                    @error('email')
                    <span class="invalid-feedback" role="alert">
                        <strong>{{ $message }}</strong>
                    </span>
                    @enderror
                </div>
                <div class="form-group">
                    <label for="password">Password</label>
                    <input type="password" id="password" class="form-control @error('password') is-invalid @enderror" name="password" required autocomplete="current-password">
                    @error('password')
                    <span class="invalid-feedback" role="alert">
                        <strong>{{ $message }}</strong>
                    </span>
                    @enderror
                </div>
                <div class="form-group form-check">
                    <input type="checkbox" class="form-check-input" id="remember" name="remember" {{ old('remember') ? 'checked' : '' }}>
                    <label class="form-check-label" for="remember">Keep me logged in</label>
                </div>
                <button type="submit" class="btn btn-primary">Log in now</button>
                @if (Route::has('password.request'))
                <a class="btn btn-link" href="{{ route('password.request') }}">Forgot your password?</a>
                @endif
                <div class="social-buttons">
                    <button type="button" class="btn btn-outline-secondary"><i class="fa fa-google"></i> Google</button>
                    <button type="button" class="btn btn-outline-secondary"><i class="fa fa-facebook"></i> Facebook</button>
                    <button type="button" class="btn btn-outline-secondary"><i class="fa fa-twitter"></i> Twitter</button>
                </div>
            </form>
        </div>
    </div>
</div>
@include('layouts.footer')
@endsection
