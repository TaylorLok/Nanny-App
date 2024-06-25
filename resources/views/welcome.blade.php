<!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Nanny Application</title>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
</head>

<body>
<style>
    body {
        /* background: url('{{ asset('storage/logos/original_home.png') }}') no-repeat center center fixed; */
        background-size: cover;
        background-color: #eae7dc;
    }
</style>
    <nav class="navbar navbar-expand-lg bg-body-tertiary">
        <div class="container">
            <a class="navbar-brand" href="#">Nanny Logo</a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse"
                data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false"
                aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse justify-content-end" id="navbarSupportedContent">
                <ul class="navbar-nav">
                    <li class="nav-item">
                        <a class="nav-link active" aria-current="page" href="#">Home</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#">About us</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#">Find a Nanny</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#">Find a Nanny Job</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#">Get in Touch</a>
                    </li>

                    <li class="nav-item dropdown">
                        <a class="nav-link dropdown-toggle" href="#" id="navbarDropdownMenuLink"
                            data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                            Join Us
                        </a>
                        <ul class="dropdown-menu" aria-labelledby="navbarDropdownMenuLink">
                            <li><a class="dropdown-item" href="{{ route('login') }}">Login</a></li>
                            <li><a class="dropdown-item" href="{{ route('register') }}">Register</a></li>
                        </ul>
                    </li>
                </ul>
                <form class="d-flex" role="search">
                    <input class="form-control me-2" type="search" placeholder="Search" aria-label="Search">
                    <button class="btn btn-light" type="submit">Search</button>
                </form>
            </div>
        </div>
    </nav>
    <br>
    <div class="container">
        <div class="card text-center">
            <div class="card-body">
                <h5 class="card-title">Welcome to NannyNow!</h5>
                <p class="card-text">With possility of partnership with an Au Pair Service, <b>NannyNow</b> offers a
                    seamless platform to connect with experienced and reliable nannies available for hire on flexible
                    terms. Whether you need childcare by the hour, month, or on a weekly basis, NannyNow simplifies the
                    process, providing peace of mind for busy families.<br>
                    Find your ideal nanny today and enjoy the convenience of tailored childcare solutions.</p>

                <b>Key Features:</b>
                <br><br>
                <ul class="list-group">
                    <p class="list-group-item">User Management</p>
                    <p class="list-group-item">Vetting</p>
                    <p class="list-group-item">Booking Management</p>
                    <p class="list-group-item">Feedback and Ratings</p>
                    <p class="list-group-item">Subscription</p>
                </ul>
            </div>
        </div>
    </div>

    <br><br>
    @include('layouts.footer')
</body>

</html>