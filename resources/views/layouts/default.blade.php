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
    <navigation fixedWidth dropdown="horizontal">
        <nav-header>
            <img src="/assets/QZPulse.svg" alt="Pulse Logo" class="img--responsive">
        </nav-header>
        <nav-menu>
            <li class="nav__item active"><a class="nav__link" href="#">Home</a></li>
            <dropdown text="Components" transition="flip--x">
                <dropdown-item>Alerts</dropdown-item>
                <dropdown-item>Buttons</dropdown-item>
                <dropdown-item>Dropdowns</dropdown-item>
                <dropdown-item>Form Elements</dropdown-item>
                <dropdown-item>Grid System</dropdown-item>
                <dropdown-item>Navigation</dropdown-item>
                <dropdown-item>Tables</dropdown-item>
            </dropdown>
            <dropdown text="About" transition="flip--x">
                <dropdown-item>Contact Us</dropdown-item>
                <dropdown-item>Pulse CSS</dropdown-item>
                <dropdown-item>QZion</dropdown-item>
            </dropdown>
        </nav-menu>
    </navigation>
    @yield('PageContent')
</div>

<script src="/js/app.js"></script>
@yield('PageScripts')
</body>