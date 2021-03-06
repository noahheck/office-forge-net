@extends('layouts.site')

@section('page')
subscribed
@endsection

@section('content')

    <div class="jumbotron jumbotron-fluid">
        <div class="container">
            <h1>Thanks for registering for updates!</h1>

            <div class="row">

                <div class="col-12 col-md-6 order-md-2 operations-image-container">

                    <span class="fa fa-envelope mail-icon"></span>

                </div>

                <div class="col-12 col-md-6 order-md-1 headings-container">
                    <p>Your email address ({{ session('email') }}) has been registered.</p>
                    <p>Please check your email inbox and follow the verification link we've sent you.</p>
                </div>

            </div>

        </div>
    </div>

    <div class="container">

        <div class="row justify-content-center mt-5 mb-5">

            <div class="col-12 col-md-6 mt-5">
                <a href="{{ route('home') }}" class="btn btn-lg btn-primary btn-block">
                    Take me back to the homepage
                </a>

            </div>

        </div>

    </div>

@endsection
