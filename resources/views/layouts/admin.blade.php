@extends('layouts.site')

@php
$__adminRouteActive = Route::is('admin') ? 'active' : '';
$__subscriberRouteActive = Str::startsWith(Route::currentRouteName(), 'admin.subscribers') ? 'active' :'';
@endphp

@push('styles')
    <link rel="stylesheet" type="text/css" href="{{ mix('css/admin.css') }}">
@endpush

@push('scripts')
    <script type="text/javascript" src="{{ mix('js/admin.js') }}"></script>
@endpush

@section('content')

    <div class="container mt-5 mb-5 admin-container">

        <div class="row">

            <div class="col-12 col-md-4 col-lg-3">

                <div class="list-group admin-nav-menu mb-3">
                    <a class="list-group-item list-group-item-action {{ $__adminRouteActive }}" href="{{ route('admin') }}">Admin Home</a>
                    <a class="list-group-item list-group-item-action {{ $__subscriberRouteActive }}" href="{{ route('admin.subscribers.index') }}">Subscribers</a>
                    <a class="list-group-item list-group-item-action" href="{{ route('logout') }}">Logout</a>
                </div>

            </div>

            <div class="col-12 col-md-8 col-lg-9">

                @yield('admin-content')

            </div>

        </div>

    </div>
@endsection
