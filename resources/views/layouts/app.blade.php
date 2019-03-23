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

    <title>Gamer Vault</title>

</head>
<body>

@include('components.navigation')

<div class="wrapper">
    <div class="page-header section-dark" style="background-image: url('/img/stockvault-board-game135717.jpg')">
        <div class="filter"></div>
        <div class="content-center">
            <div class="container">
                <div class="title-brand">
                    <h1 class="presentation-title">Board Game Safe</h1>
                </div>

                <h2 class="presentation-subtitle text-center">Keep your game collection in pristine condition!</h2>
            </div>
        </div>
        <div class="moving-clouds" style="background-image: url('/img/clouds.png'); ">

        </div>
    </div>

    <div class="main">
@yield('content')
    </div>
</div> {{-- wrapper --}}

<footer class="footer">
    <div class="container">
        <div class="row">
            <nav class="footer-nav">
                <ul>
                    <li><a href="#">Popular Games</a></li>
                    <li><a href="#">Blog</a></li>
                    <li><a href="#">Terms of Service</a></li>
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