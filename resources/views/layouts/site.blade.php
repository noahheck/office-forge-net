@php
$homeRouteActive = Route::is('home') ? 'active' : '';
$featuresRouteActive = Route::is('features') ? 'active' : '';
$pricingRouteActive = Route::is('pricing') ? 'active' : '';
@endphp
<!DOCTYPE html>
<html lang="en">
<head>

    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <meta property="og:url" content="{{ url()->current() }}">
    <meta property="og:title" content="Office Forge">
    <meta property="og:type" content="website">
    <meta property="og:image" content="https://officeforge.net/images/of_logo_500.png">
    <meta property="og:description" content="At Office Forge, we believe nobody knows your business as well as you do. Our goal is to give you software that works the way you work.">

    <link rel="stylesheet" type="text/css" href="{{ mix('/css/app.css') }}">

    <title>{{ config('app.name') }}</title>

    <!-- ****** faviconit.com favicons ****** -->
    <link rel="shortcut icon" href="/favicon/favicon.ico">
    <link rel="icon" sizes="16x16 32x32 64x64" href="/favicon/favicon.ico">
    <link rel="icon" type="image/png" sizes="196x196" href="/favicon/favicon-192.png">
    <link rel="icon" type="image/png" sizes="160x160" href="/favicon/favicon-160.png">
    <link rel="icon" type="image/png" sizes="96x96" href="/favicon/favicon-96.png">
    <link rel="icon" type="image/png" sizes="64x64" href="/favicon/favicon-64.png">
    <link rel="icon" type="image/png" sizes="32x32" href="/favicon/favicon-32.png">
    <link rel="icon" type="image/png" sizes="16x16" href="/favicon/favicon-16.png">
    <link rel="apple-touch-icon" href="/favicon/favicon-57.png">
    <link rel="apple-touch-icon" sizes="114x114" href="/favicon/favicon-114.png">
    <link rel="apple-touch-icon" sizes="72x72" href="/favicon/favicon-72.png">
    <link rel="apple-touch-icon" sizes="144x144" href="/favicon/favicon-144.png">
    <link rel="apple-touch-icon" sizes="60x60" href="/favicon/favicon-60.png">
    <link rel="apple-touch-icon" sizes="120x120" href="/favicon/favicon-120.png">
    <link rel="apple-touch-icon" sizes="76x76" href="/favicon/favicon-76.png">
    <link rel="apple-touch-icon" sizes="152x152" href="/favicon/favicon-152.png">
    <link rel="apple-touch-icon" sizes="180x180" href="/favicon/favicon-180.png">
    <meta name="msapplication-TileColor" content="#FFFFFF">
    <meta name="msapplication-TileImage" content="/favicon/favicon-144.png">
    <meta name="msapplication-config" content="/favicon/browserconfig.xml">
    <!-- ****** faviconit.com favicons ****** -->

</head>
<body class="d-flex flex-column min-vh-100">

<nav class="navbar fixed-top shadow-sm navbar-expand-sm navbar-light">
    <div class="container">
        <a class="navbar-brand" href="{{ route('home') }}">
            <img alt="Office Forge logo" src="{{ asset("images/of_logo_50.png") }}">
            {{ config('app.name') }}
        </a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNavAltMarkup" aria-controls="navbarNavAltMarkup" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarNavAltMarkup">
            <div class="navbar-nav">
                <a class="nav-item nav-link {{ $homeRouteActive }}" href="{{ route('home') }}">Home</a>
                <a class="nav-item nav-link {{ $featuresRouteActive }}" href="{{ route('features') }}">Features</a>
                {{--<a class="nav-item nav-link {{ $pricingRouteActive }}" href="{{ route('pricing') }}">Pricing</a>--}}
            </div>
        </div>
    </div>
</nav>

<div class="main-content @yield('page')">

    @yield('content')

</div>


<div class="footer mt-auto">
    <div class="container">

        <div class="row">
            <div class="col-12 col-md-6">
                <ul>
                    <li>
                        <a href="{{ route('home') }}">Home</a>
                    </li>
                    <li>
                        <a href={{ route('features') }}>Features</a>
                    </li>
                    {{--<li>
                        <a href={{ route('pricing') }}>Pricing</a>
                    </li>--}}
                </ul>
            </div>

            <div class="col-12 col-md-6 text-md-right">
                <p>&copy; {{ date('Y') }} - Pillar Falls Software, LLC.</p>
                <p>Contact: <a href="mailto:{{ config('site.supportEmail') }}">{{ config('site.supportEmail') }}</a></p>
                <p>Office Forge is proud to be an open-source project - Find out more at:</p>
                <p><a href="{{ config('site.officeForgeProjectUrl') }}" target="_blank">{{ config('site.officeForgeProjectUrl') }}</a></p>
            </div>

            <div class="col-12 os-gutter">
                Typo? Bug? <a href="{{ config('site.siteProjectUrl') }}" target="_blank">Help us improve this page</a>
            </div>
        </div>

    </div>
</div>

<script src="{{ mix('/js/app.js') }}"></script>
</body>
</html>
