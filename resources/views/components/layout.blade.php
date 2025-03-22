<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>{{$title}}</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet">
    <style>
        body {
            background: linear-gradient(135deg, #f9f9f9, #e0e0e0);
        }
        header, footer {
            background-color: #343a40;
            color: white;
        }
        footer {
            padding: 15px 0;
            text-align: center;
        }
    </style>
</head>
<body>
    <!-- Header -->
    <header class="py-3 text-center">
        <h1>Learn Localization in Laravel</h1>
        <p class="lead">Switch between languages easily!</p>
    </header>

    <!-- Navbar -->
    <nav class="navbar navbar-expand-lg navbar-dark bg-dark">
        <div class="container">
            <a class="navbar-brand" href="{{url('home')}}">LocalizationApp</a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav">
                <span class="navbar-toggler-icon"></span>
            </button>

            <div class="collapse navbar-collapse" id="navbarNav">
                <ul class="navbar-nav me-auto">
                    <li class="nav-item">
                        <a class="nav-link" href="{{url('home')}}">{{__('welcome.Home')}}</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="{{url('about')}}">{{__('welcome.AboutUs')}}</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="{{url('service')}}">{{__('welcome.Service')}}</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="{{url('contact')}}">{{__('welcome.ContactUs')}}</a>
                    </li>
                </ul>
                <ul class="navbar-nav">
                    <li class="nav-item dropdown">
                        <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown">Choose Language</a>
                        <ul class="dropdown-menu dropdown-menu-end">
                            <li><a class="dropdown-item" href="{{url('/setland/en')}}">English</a></li>
                            <li><a class="dropdown-item" href="{{url('/setland/hi')}}">Hindi</a></li>
                            <li><a class="dropdown-item" href="{{url('/setland/ko')}}">Korean</a></li>
                        </ul>
                    </li>
                </ul>
            </div>
        </div>
    </nav>

    <!-- Main Content -->
    <main>
        {{ $main }}
    </main>

    <!-- Footer -->
    <footer>
        <div class="container">
            &copy; 2025 Laravel Localization Demo | Designed by You 😎
        </div>
    </footer>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>
