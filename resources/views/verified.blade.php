@extends('layouts.site')

@section('page')
verified
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
                    <p>Your email address ({{ $email }}) has been verified.</p>
                    <p>We'll only send you the kinds of things we would like to get, and we'll never give away or sell your information to anyone.</p>
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
