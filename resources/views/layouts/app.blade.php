<!DOCTYPE html>
<html lang="en">
<head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
    <meta content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=0" name="viewport">

    <link href="https://fonts.googleapis.com/css?family=Montserrat:400,300,700" rel="stylesheet" type="text/css">
    <link href="https://maxcdn.bootstrapcdn.com/font-awesome/latest/css/font-awesome.min.css" rel="stylesheet">
    <link href="{{ asset('css/fonts.css') }}" rel="stylesheet">
    <link href="{{ asset('css/bootstrap.css') }}" rel="stylesheet">
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">

    <title>Gamer</title>

</head>
<body>

<nav class="navbar navbar-expand-md fixed-top navbar-transparent" color-on-scroll="500">
    <div class="container">
        <div class="navbar-translate">
            <button class="navbar-toggler navbar-toggler-right navbar-burger" type="button" data-toggle="collapse" data-target="#navbarToggler" aria-controls="navbarTogglerDemo02" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-bar"></span>
                <span class="navbar-toggler-bar"></span>
                <span class="navbar-toggler-bar"></span>
            </button>
            <a class="navbar-brand" href="/">Gamer</a>
        </div>
        <div class="collapse navbar-collapse" id="navbarToggler">
            <ul class="navbar-nav ml-auto">
                <li class="nav-item">
                    <a class="nav-link" rel="tooltip" title="Follow us on Twitter" data-placement="bottom" href="https://twitter.com/CreativeTim" target="_blank">
                        <i class="fa fa-twitter"></i>
                        <p class="d-lg-none">Twitter</p>
                    </a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" rel="tooltip" title="Like us on Facebook" data-placement="bottom" href="https://www.facebook.com/CreativeTim" target="_blank">
                        <i class="fa fa-facebook-square"></i>
                        <p class="d-lg-none">Facebook</p>
                    </a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" rel="tooltip" title="Follow us on Instagram" data-placement="bottom" href="https://www.instagram.com/CreativeTimOfficial" target="_blank">
                        <i class="fa fa-instagram"></i>
                        <p class="d-lg-none">Instagram</p>
                    </a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" rel="tooltip" title="Star on GitHub" data-placement="bottom" href="https://www.github.com/CreativeTimOfficial/paper-kit" target="_blank">
                        <i class="fa fa-github"></i>
                        <p class="d-lg-none">GitHub</p>
                    </a>
                </li>
                <li class="nav-item">
                    <a href="documentation/tutorial-components.html" target="_blank" class="nav-link"><i class="nc-icon nc-book-bookmark"></i> Documentation</a>
                </li>
                <li class="nav-item">
                    @auth
                        <a href="/logout" class="nav-link"><i class="nc-icon nc-book-bookmark"></i>Logout</a>
                    @else
                        <a href="/login" class="btn btn-danger btn-round">Login</a>
                    @endauth
                </li>
            </ul>
        </div>
    </div>
</nav>

<div class="wrapper">
    <div class="page-header" style="background-image: url('../assets/img/login-image.jpg');">
        <div class="filter"></div>
        <div class="container">

@yield('content')

        </div>
    </div>
</div>

<!-- footer -->
<footer class="footer">
    <div class="container">
        <div class="row">
            <nav class="footer-nav">
                <ul>
                    <li><a href="http://www.creative-tim.com">Creative Tim</a></li>
                    <li><a href="http://blog.creative-tim.com">Blog</a></li>
                    <li><a href="http://www.creative-tim.com/license">Licenses</a></li>
                </ul>
            </nav>
            <div class="credits ml-auto">
                    <span class="copyright">
                        © {{ date('Y') }} by Jeff
                    </span>
            </div>
        </div>
    </div>
</footer>

<script src="/js/app.js"></script>

</body>
</html>