<!DOCTYPE html>
<html lang="en">
<head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-COMPATIBLE" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="Hair Care Products Branding">
    <meta name="author" content="Carlos Quinones">

    <title>QZion Pulse | @yield('PageTitle')</title>

    <link rel="stylesheet" href="/css/pulse.css">
@yield('PageStyles')
<!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
    <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
    <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
    <![endif]-->

</head>

<body>
<div id="app">
    <nav class="navbar navbar--dark navbar--full">
        <div class="container--fluid navbar--flex">
            <div class="navbar__header">
                {{--<button type="button" class="navbar__toggle" data-toggle="collapse" data-target="#pulse-navbar-collapse">--}}
                {{--<span class="icon-bar"></span>--}}
                {{--<span class="icon-bar"></span>--}}
                {{--<span class="icon-bar"></span>--}}
                {{--</button>--}}
                <a href="#" class="navbar__brand">
                    <img src="/assets/QZPulse.svg" alt="Pulse Logo" class="img--responsive">
                </a>
                <a href="#" class="navbar__navbar-toggler"><i class="fa fa-bars"></i></a>
            </div>
            <ul class="nav navbar__nav navbar--flex" id="pulse-navbar-collapse">
                <li class="nav__item active"><a class="nav__link" href="#">Home</a></li>
                <li class="nav__item"><a class="nav__link" href="#">Products</a></li>
                <li class="nav__item"><a class="nav__link" href="#">Services</a></li>
                <li class="nav__item"><a class="nav__link" href="#">About</a></li>
                <qz-dropdown text="Dropdown" transition="flip--x"></qz-dropdown>

                {{--<li class="nav__item dropdown">--}}
                {{--<a class="nav__link dropdown__toggle" href="http://example.com" id="supportedContentDropdown" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">Dropdown</a>--}}
                {{--<div class="dropdown__menu" aria-labelledby="supportedContentDropdown">--}}
                {{--<a class="dropdown__item" href="#">Action</a>--}}
                {{--<a class="dropdown__item" href="#">Another action</a>--}}
                {{--<a class="dropdown__item" href="#">Something else here</a>--}}
                {{--</div>--}}
                {{--</li>--}}
            </ul>
        </div>
    </nav>
    @yield('PageContent')
</div>

<script src="/js/app.js"></script>
@yield('PageScripts')
</body>