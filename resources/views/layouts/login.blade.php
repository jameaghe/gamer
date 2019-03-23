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

@include('components/navigation')

<div class="wrapper">
    <div class="page-header" style="background-image: url('/img/board-game-2237460_1920.jpg');">
        <div class="filter"></div>
        <div class="container">

@yield('content')

        </div>
    </div>
</div>

</body>
</html>