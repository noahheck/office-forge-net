@extends('layouts.site')

@section('page')
contact
@endsection

@section('content')

    <div class="sssjumbotron sssjumbotron-fluid">

        <div class="container pt-5 pb-5">


            <div class="row justify-content-center">

                <div class="col-12 col-md-8 col-lg-6 contact-form-container">

                    <div class="d-flex">
                        <div class="flex-grow-0 pr-2">
                            <img src="{{ asset('images/of_logo_50.png') }}" alt="Office Forge logo">
                        </div>
                        <h1 class="flex-grow-1">Thanks for Contacting Us</h1>
                    </div>

                    <p class="lead">We've received your information, and somebody will get back with you as soon as possible.</p>

                    <p class="text-center">
                        <a class="btn btn-primary" href="{{ route('home') }}">Return to our homepage</a>
                    </p>

                </div>
            </div>

        </div>

    </div>

@endsection
