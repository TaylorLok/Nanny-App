@extends('layouts.app')

@section('content')
<style>
    body {
        /* background: url('{{ asset('storage/logos/nanyHome.jpg') }}') no-repeat center center fixed; */
        background-size: cover;
        background-color: #eae7dc;
    }
    .register-container {
        display: flex;
        justify-content: center;
        align-items: center;
        min-height: 100vh;
        padding: 15px;
    }
    .register-card {
        display: flex;
        flex-direction: column;
        background-color: white;
        border-radius: 8px;
        overflow: hidden;
        box-shadow: 0 2px 10px rgba(0, 0, 0, 0.1);
        width: 100%;
        max-width: 1000px;
    }
    .register-left {
        background-color: #f5f5f5;
        padding: 40px;
        display: flex;
        flex-direction: column;
        justify-content: center;
        align-items: center;
        flex: 1;
        text-align: center;
    }
    .register-right {
        padding: 40px;
        width: 100%;
        flex: 2;
    }
    .register-right form {
        width: 100%;
    }
    .register-right .form-group {
        margin-bottom: 20px;
    }
    .register-right .form-control {
        border-radius: 4px;
    }
    .register-right .btn-primary {
        width: 100%;
        padding: 10px;
        border-radius: 4px;
    }
    .register-right .social-buttons {
        display: flex;
        justify-content: space-between;
        margin-top: 20px;
    }
    .register-right .social-buttons .btn {
        flex: 1;
        margin-right: 10px;
        border-radius: 4px;
    }
    .register-right .social-buttons .btn:last-child {
        margin-right: 0;
    }
    .register-right h3{
        text-align: center;
    }
    .divider {
        height: 100%;
        width: 1px;
        background-color: #e0e0e0;
        margin: 20px 0px;
    }
    @media (min-width: 768px) {
        .register-card {
            flex-direction: row;
        }
        .divider {
            height: 100%;
            width: 1px;
            background-color: #e0e0e0;
            margin: 0 40px;
        }
    }
    @media (max-width: 767px) {
        .divider {
            display: none;
        }
    }
</style>

<div class="register-container">
    <div class="register-card">
        <div class="register-left">
            <h3>Welcome!</h3>
            <!-- <img src="{{ asset('path/to/your/welcome-image.png') }}" alt="Welcome" style="width: 100px;"> -->
            <p>Are you a member? <a href="{{ route('login') }}">Log in now</a></p>
        </div>
        <div class="divider"></div>
        <div class="register-right">
            <h3>Register</h3>
            <form method="POST" action="{{ route('register') }}">
                @csrf
                <div class="form-group">
                    <label for="username">Username</label>
                    <input type="text" id="username" class="form-control @error('username') is-invalid @enderror" name="username" value="{{ old('username') }}" required autofocus>
                    @error('username')
                    <span class="invalid-feedback" role="alert">
                        <strong>{{ $message }}</strong>
                    </span>
                    @enderror
                </div>
                <div class="form-group">
                    <label for="email">Email</label>
                    <input type="email" id="email" class="form-control @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" required>
                    @error('email')
                    <span class="invalid-feedback" role="alert">
                        <strong>{{ $message }}</strong>
                    </span>
                    @enderror
                </div>
                <div class="form-group">
                    <label for="password">Password</label>
                    <input type="password" id="password" class="form-control @error('password') is-invalid @enderror" name="password" required>
                    @error('password')
                    <span class="invalid-feedback" role="alert">
                        <strong>{{ $message }}</strong>
                    </span>
                    @enderror
                </div>
                <div class="form-group">
                    <label for="password-confirm">Repeat Password</label>
                    <input type="password" id="password-confirm" class="form-control" name="password_confirmation" required>
                </div>
                <div class="form-group">
                    <label for="password-confirm"><strong>NanyNow</strong> may keep me informed with personalized emails about products and services. See our <strong>Privacy Policy</strong> for more details.</label>
                </div>
                <div class="form-group form-check">
                    <input type="checkbox" class="form-check-input" id="privacy-policy" name="privacy_policy" required>
                    <label class="form-check-label" for="privacy-policy">I have read and accept the Terms and Conditions</label>
                </div>
                <button type="submit" class="btn btn-primary">Create Account</button>
                <div class="social-buttons">
                    <button type="button" class="btn btn-outline-secondary"><i class="fa fa-google fa-fw"></i> Google</button>
                    <button type="button" class="btn btn-outline-secondary"><i class="fa fa-facebook fa-fw"></i>  Facebook</button>
                    <button type="button" class="btn btn-outline-secondary"><i class="fa fa-twitter fa-fw"></i> Twitter</button>
                </div>
            </form>
        </div>
    </div>
</div>
@include('layouts.footer')
@endsection
