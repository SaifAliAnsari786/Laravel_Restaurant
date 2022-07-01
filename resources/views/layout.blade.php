<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/css/bootstrap.min.css
    ">
    <link rel="stylesheet" href="{{ asset('css/main.cs') }}">
    <title>layut page</title>
</head>

<body>
    <nav class="navbar navbar-expand-sm navbar-light" style="background-color: #e3f2fd;">
        <a class="navbar-brand" href="/">Restaurant</a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNavAltMarkup"
            aria-controls="navbarNavAltMarkup" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarNavAltMarkup">
            <div class="navbar-nav">
                <a class="nav-item nav-link active" href="/">Home <span class="sr-only"></span></a>
                <a class="nav-item nav-link" href="{{ asset('list') }}">list</a>
                <a class="nav-item nav-link" href="{{ asset('add') }}">Add</a>
                @if (Session::get('user'))
                    <a class="nav-item nav-link " href="#">Welcome,{{ Session::get('user') }}</a>
                    <a class="nav-item nav-link " href="{{ asset('logout') }}">Logout</a>
                @else
                    <a class="nav-item nav-link  " href="{{ asset('login') }}">Login</a>
                    <a class="nav-item nav-link " href="{{ asset('register') }}">Register</a>
                @endif

            </div>
        </div>
    </nav>
    @yield('content')
    <footer>

        {{-- The footer section ! --}}
    </footer>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.5/dist/umd/popper.min.js"
        integrity="sha384-Xe+8cL9oJa6tN/veChSP7q+mnSPaj5Bcu9mPX5F5xIGE0DVittaqT5lorf0EI7Vk" crossorigin="anonymous">
    </script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/js/bootstrap.min.js"
        integrity="sha384-kjU+l4N0Yf4ZOJErLsIcvOU2qSb74wXpOhqTvwVx3OElZRweTnQ6d31fXEoRD1Jy" crossorigin="anonymous">
    </script>
</body>

</html>
