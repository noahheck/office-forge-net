@extends('layouts.site')

@php
$__adminRouteActive = Route::is('admin') ? 'active' : '';
$__subscriberRouteActive = Str::startsWith(Route::currentRouteName(), 'admin.subscribers') ? 'active' :'';
$__contactRouteActive = Str::startsWith(Route::currentRouteName(), 'admin.contacts') ? 'active' : '';
$__articleRouteActive = Str::startsWith(Route::currentRouteName(), 'admin.articles') ? 'active' :'';
$__mailingRouteActive = Str::startsWith(Route::currentRouteName(), 'admin.mailings') ? 'active' :'';
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
                    <a class="list-group-item list-group-item-action {{ $__contactRouteActive }}" href="{{ route('admin.contacts.index') }}">Contacts</a>
                    <a class="list-group-item list-group-item-action {{ $__articleRouteActive }}" href="{{ route('admin.articles.index') }}">Articles</a>
                    <a class="list-group-item list-group-item-action {{ $__mailingRouteActive }}" href="{{ route('admin.mailings.index') }}">Mailings</a>
                    <a class="list-group-item list-group-item-action" href="{{ route('logout') }}">Logout</a>
                </div>

            </div>

            <div class="col-12 col-md-8 col-lg-9">

                @yield('admin-content')

            </div>

        </div>

    </div>
@endsection
