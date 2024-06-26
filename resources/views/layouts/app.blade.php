<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <script src="https://code.jquery.com/jquery-3.7.1.min.js"
        integrity="sha256-/JqT3SQfawRcv/BIHPThkBvs0OEvtFFmqPF/lYI/Cxo=" crossorigin="anonymous"></script>
    <link rel="stylesheet" href="{{ asset('assets/style.css') }}">
    <title>{{ config('app.name') }}</title>
</head>

<body>
    <section id="header">
        <div class="wrapper">
            <div class="header-con">
                <ul class="navbar">
                    @auth
                        <li>
                            <a href="{{ route('logout.user') }}">Logout</a>
                        </li>
                    @endauth
                    @guest
                        <li>
                            <a href="{{ route('welcome') }}">Login</a>
                        </li>
                        <li>
                            <a href="{{ route('register') }}">Register</a>
                        </li>
                    @endguest
                </ul>
            </div>
        </div>
    </section>

    @yield('content')

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous">
    </script>
    <script>
        $(document).ready(() => {
            $('#togglePassword').click(function() {
                const authPassword = $("#authPassword");
                authPassword.attr('type', authPassword.attr('type') == 'password' ? 'text' : 'password');
                $(this).toggleClass("bi-eye-slash bi-eye");
            });
        });
    </script>
</body>

</html>
