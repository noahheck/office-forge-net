@extends('layouts.site')

@section('page')
contact
@endsection

@section('content')

    <div class="jumbotron jumbotron-fluid">

        <div class="container pb-5">


            <div class="row justify-content-center">

                <div class="col-12 col-md-8 col-lg-6 contact-form-container">

                    <div class="d-flex">
                        <div class="flex-grow-0 pr-2">
                            <img src="{{ asset('images/of_logo_50.png') }}" alt="Office Forge logo">
                        </div>
                        <h1 class="flex-grow-1">Contact Us</h1>
                    </div>

                    <p class="lead">If you have any questions about Office Forge, our worry-free hosting, or anything else, let us know!</p>

                    <p>
                        Feel free to email us anytime: <a href="mailto:{{ config('site.supportEmail') }}">{{ config('site.supportEmail') }}</a>
                    </p>

{{--                    <hr style="border-color: #d9d9d9;">--}}

                    <p>or fill out the form below and we'll get back with you as soon as possible.</p>

                    <div class="card shadow">
                        <div class="card-body">

                            <form action="{{ route('submit-contact') }}" method="POST" class="bold-labels">
                                @csrf

                                @textField([
                                    'name' => 'name',
                                    'label' => 'Name',
                                    'details' => '',
                                    'value' => old('name', ''),
                                    'placeholder' => '',
                                    'inputGroupAppendText' => '',
                                    'required' => false,
                                    'autofocus' => false,
                                    'error' => $errors->has('name'),
                                    'readonly' => false,
                                ])

                                @textField([
                                    'name' => 'business',
                                    'label' => 'Organization',
                                    'details' => '',
                                    'value' => old('business', ''),
                                    'placeholder' => '',
                                    'inputGroupAppendText' => '',
                                    'required' => false,
                                    'autofocus' => false,
                                    'error' => $errors->has('business'),
                                    'readonly' => false,
                                ])

                                @emailField([
                                    'name' => 'email',
                                    'label' => 'Email Address',
                                    'details' => '',
                                    'value' => old('email', ''),
                                    'placeholder' => '',
                                    'required' => false,
                                    'autofocus' => false,
                                    'error' => $errors->has('email'),
                                    'readonly' => false,
                                    'fieldOnly' => false,
                                ])

                                @phoneField([
                                    'name' => 'phone',
                                    'label' => 'Phone Number',
                                    'details' => '',
                                    'value' => old('phone', ''),
                                    'required' => false,
                                    'autofocus' => false,
                                    'error' => $errors->has('phone'),
                                    'readonly' => false,
                                    'fieldOnly' => false,
                                ])

                                @textareaField([
                                    'name' => 'message',
                                    'label' => 'How can we help you?',
                                    'details' => '',
                                    'value' => old('message', ''),
                                    'placeholder' => '',
                                    'rows' => '10',
                                    'required' => false,
                                    'autofocus' => false,
                                    'error' => $errors->has('message'),
                                    'readonly' => false,
                                ])

                                @honeypot

                                <hr>

                                <button type="submit" class="btn btn-primary">Get In Touch</button>

                            </form>

                        </div>
                    </div>


                </div>
            </div>

        </div>

    </div>

@endsection
