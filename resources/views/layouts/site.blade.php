@php
    $__currentRouteName    = Route::currentRouteName();

    $homeRouteActive = Route::is('home') ? 'active' : '';
    $businessRouteActive = Route::is('business') ? 'active' : '';
    $itTeamsRouteActive = Route::is('it-teams') ? 'active' : '';
    $featuresRouteActive = Route::is('features') ? 'active' : '';
    $pricingRouteActive = Route::is('pricing') ? 'active' : '';
    $formDocRouteActive = Route::is('features.form-docs') ? 'active' : '';
    $filesRouteActive = Route::is('features.files') ? 'active' : '';
    $filestoreRouteActive = Route::is('features.filestore') ? 'active' : '';
    $reportsRouteActive = Route::is('features.reports') ? 'active' : '';
    $activitiesRouteActive = Route::is('features.activities') ? 'active' : '';
    $blogRouteActive = Str::startsWith($__currentRouteName, 'blog') ? 'active' : '';
    $adminRouteActive = Str::startsWith($__currentRouteName, 'admin') ? 'active' : '';
@endphp
<!DOCTYPE html>
<html lang="en">
<head>

    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">


    <!-- CSRF Token -->
    @meta('csrf-token', csrf_token())

    @section('og-tags')
        <meta property="og:url" content="{{ url()->current() }}">
        <meta property="og:title" content="Office Forge">
        <meta property="og:type" content="website">
        <meta property="og:image" content="https://officeforge.net/images/of_logo_500.png">
        <meta property="og:description" content="At Office Forge, we believe nobody knows your business as well as you do. Our goal is to give you software that works the way you work.">
    @show

    <link rel="stylesheet" type="text/css" href="{{ mix('/css/app.css') }}">

    @stack('styles')

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
            <div class="navbar-nav mr-auto">
                <a class="nav-item nav-link {{ $homeRouteActive }}" href="{{ route('home') }}">Home</a>
                <div class="nav-item dropdown {{ $businessRouteActive . $itTeamsRouteActive }}">
                    <a class="nav-link dropdown-toggle" href="#" id="solutionsDropdownToggle" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                        Solutions
                    </a>
                    <div class="dropdown-menu solutions-dropdown" id="solutionsDropdown" aria-labelledby="solutionsDropdownToggle">
                        <a class="dropdown-item {{ $businessRouteActive }} d-flex" href="{{ route('business') }}">
                            <div class="icon-container flex-grow-0">
                                <span class="fa-fw fas fa-building"></span>
                            </div>
                            <div class="flex-grow-1">
                                <strong>For Businesses</strong>
                                <br>
                                See how <strong>Office Forge</strong> can help your business excel
                            </div>
                        </a>
                        <a class="dropdown-item {{ $itTeamsRouteActive }} d-flex" href="{{ route('it-teams') }}">
                            <div class="icon-container flex-grow-0">
                                <span class="fa-fw fas fa-user-shield"></span>
                            </div>
                            <div class="flex-grow-1">
                                <strong>For IT Teams</strong>
                                <br>
                                See why IT Teams love <strong>Office Forge</strong> as much users do
                            </div>
                        </a>
                    </div>
                </div>

                <div class="nav-item dropdown {{ $formDocRouteActive . $filesRouteActive . $filestoreRouteActive . $reportsRouteActive . $activitiesRouteActive }}">
                    <a class="nav-link dropdown-toggle" href="#" id="featuresDropdownToggle" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                        Features
                    </a>
                    <div class="dropdown-menu features-dropdown" id="featuresDropdown" aria-labelledby="featuresDropdownToggle">
                        <a class="dropdown-item {{ $formDocRouteActive }} d-flex" href="{{ route('features.form-docs') }}">
                            <div class="icon-container flex-grow-0">
                                <span class="fa-fw fas fa-file-invoice"></span>
                            </div>
                            <div class="flex-grow-1">
                                <strong>FormDocs</strong>
                                <br>
                                Our easy to use, powerful data collection system
                            </div>
                        </a>

                        <a class="dropdown-item {{ $filesRouteActive }} d-flex" href="{{ route('features.files') }}">
                            <div class="icon-container flex-grow-0">
                                <span class="fa-fw fas fa-folder-open"></span>
                            </div>
                            <div class="flex-grow-1">
                                <strong>Files</strong>
                                <br>
                                Custom resource management made easy
                            </div>
                        </a>

                        <a class="dropdown-item {{ $filestoreRouteActive }} d-flex" href="{{ route('features.filestore') }}">
                            <div class="icon-container flex-grow-0">
                                <span class="fa-fw fas fa-archive"></span>
                            </div>
                            <div class="flex-grow-1">
                                <strong>FileStore</strong>
                                <br>
                                File hosting, sharing, and versioning
                            </div>
                        </a>

                        <a class="dropdown-item {{ $reportsRouteActive }} d-flex" href="{{ route('features.reports')  }}">
                            <div class="icon-container flex-grow-0">
                                <span class="fa-fw fas fa-chart-line"></span>
                            </div>
                            <div class="flex-grow-1">
                                <strong>Reports</strong>
                                <br>
                                Custom reports bringing insights and intelligence to your organization
                            </div>
                        </a>

                        <a class="dropdown-item {{ $activitiesRouteActive }} d-flex" href="{{ route('features.activities') }}">
                            <div class="icon-container flex-grow-0">
                                <span class="fa-fw fas fa-clipboard-list"></span>
                            </div>
                            <div class="flex-grow-1">
                                <strong>Activities</strong>
                                <br>
                                Projects, Processes, and Task management for all your teams
                            </div>
                        </a>

                    </div>
                </div>
                <a class="nav-item nav-link {{ $pricingRouteActive }}" href="{{ route('pricing') }}">Pricing</a>
                <a class="nav-item nav-link {{ $blogRouteActive }}" href="{{ route('blog') }}">Blog</a>
            </div>
            @auth
                <div class="navbar-nav">
                    <a class="nav-item nav-link {{ $adminRouteActive }}" href="{{ route('admin') }}">Admin</a>
                </div>
            @endauth
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
                        <a href="{{ route('business') }}">For Businesses</a>
                    </li>
                    <li>
                        <a href="{{ route('it-teams') }}">For IT Teams</a>
                    </li>
                    <li>
                        <a href={{ route('features') }}>Features</a>
                    </li>
                    <li>
                        <a href={{ route('pricing') }}>Pricing</a>
                    </li>
                    <li>
                        <a href={{ route('blog') }}>Blog</a>
                    </li>
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
@stack('scripts')
</body>
</html>
