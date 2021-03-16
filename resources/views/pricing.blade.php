@extends('layouts.site')

@section('page')
pricing
@endsection

@section('content')

    <div class="jumbotron jumbotron-fluid">
        <div class="container">
            <h1>Office Forge Hosting</h1>

            <div class="row">

                <div class="col-12 col-md-6 order-md-2 pricing-icon-container">

                    <span class="fas fa-search-dollar"></span>

                </div>

                <div class="col-12 col-md-6 order-md-1 pt-md-5">
                    <h3>You've got enough things to worry about running your business. We don't think your software costs should be one of them.</h3>
                    <h4>This is why we offer worry-free hosting for just</h4>
                    <h3 class="h2 text-center">$150/month</h3>
                </div>

            </div>

        </div>
    </div>

    <div class="container">

        <div class="row justify-content-center">
            <div class="col-12 col-sm-10 col-lg-8">

                <div class="card text-center">
                    <div class="card-body">
                        <h3>Office Forge is 100% open source!</h3>
                        <p>You can host it for free on your servers or in your office</p>
                        <a class="btn sssbtn-primary btn-outline-primary" target="_blank" href="{{ config('site.officeForgeProjectUrl') }}">
                            <span class="fab fa-github"></span>
                            Check out the main GitHub repository
                        </a>
                    </div>
                </div>

            </div>
        </div>

        <h2 class="mt-5">Worry-free Hosting - Just $150/month!</h2>

        <div class="row mt-5 justify-content-center">

            <div class="col-12 col-md-10">

                <div class="row justify-content-center">

                    <div class="hosting-feature">
                        <div class="card h-100">
                            <div class="card-body">
                                <span class="check-icon fas fa-check-circle"></span>
                                <h3>Managed Hosting</h3>
                                <p>You worry about your company, we'll keep the lights on</p>
                            </div>
                        </div>
                    </div>

                    <div class="hosting-feature">
                        <div class="card h-100">
                            <div class="card-body">
                                <span class="check-icon fas fa-check-circle"></span>
                                <h3>Security</h3>
                                <p>State-of-the-art firewall and encryption for <em>your</em> cloud server</p>
                            </div>
                        </div>
                    </div>

                    <div class="hosting-feature">
                        <div class="card h-100">
                            <div class="card-body">
                                <span class="check-icon fas fa-check-circle"></span>
                                <h3>All Features</h3>
                                <p>Everything we work on, at no additional cost</p>
                            </div>
                        </div>
                    </div>

                    <div class="hosting-feature">
                        <div class="card h-100">
                            <div class="card-body">
                                <span class="check-icon fas fa-check-circle"></span>
                                <h3>Unlimited Users</h3>
                                <p>Anyone and everyone that's important for your business to operate</p>
                            </div>
                        </div>
                    </div>


                    <div class="hosting-feature">
                        <div class="card h-100">
                            <div class="card-body">
                                <span class="check-icon fas fa-check-circle"></span>
                                <h3>Email Support</h3>
                                <p>Questions? Feedback? Worry free support is at your fingertips</p>
                            </div>
                        </div>
                    </div>

                    <div class="hosting-feature">
                        <div class="card h-100">
                            <div class="card-body">
                                <span class="check-icon fas fa-check-circle"></span>
                                <h3>20 GB Storage</h3>
                                <p>Plenty of space to keep your business moving strong</p>
                            </div>
                        </div>
                    </div>

                    <div class="hosting-feature">
                        <div class="card h-100">
                            <div class="card-body">
                                <span class="check-icon fas fa-check-circle"></span>
                                <h3>Offsite Backup</h3>
                                <p>Take comfort knowing we can get you back up quickly if the unthinkable happens</p>
                            </div>
                        </div>
                    </div>

                    <div class="hosting-feature">
                        <div class="card h-100">
                            <div class="card-body">
                                <span class="check-icon fas fa-check-circle"></span>
                                <h3>1 TB Bandwidth</h3>
                                <p>Because your business shouldn't be hindered by data caps</p>
                            </div>
                        </div>
                    </div>

                </div>


            </div>

        </div>

    </div>

    <div class="of-bg-dark mt-5 pt-5 pb-5 mb-5">

        <div class="container">

            <div class="row justify-content-center">

                <div class="col-12 col-md-7 col-lg-6">

                    <h2>Additional Services</h2>

                    <h4>We want to make sure your company's experience with Office Forge is nothing short of fantastic. Let us know how we can help!</h4>

                    <h4>Need help with anything not on the list? <a href="{{ route('contact') }}">Contact us</a> and let us know what we can do to help!</h4>

                    <p class="mt-4">
                        <a class="btn btn-primary" href="{{ route('contact') }}">Contact us now!</a>
                    </p>


                </div>

                <div class="col-12 col-md-5 col-lg-4 pt-5">
                    <ul class="list-group">
                        <li class="list-group-item">Staff Training</li>
                        <li class="list-group-item">Extended Support</li>
                        <li class="list-group-item">On-site Training</li>
                        <li class="list-group-item">Help with your self-hosted installation</li>
                        <li class="list-group-item">Additional Storage or Computing Needs</li>
                        <li class="list-group-item">Backup Restoration</li>
                    </ul>
                </div>

            </div>

        </div>
    </div>

    <div class="container">

        <h2>Ready to get started?</h2>

        <div class="row justify-content-center">

            <div class="col-12 col-md-8 pb-5">
                <div class="card shadow mt-5">
                    <div class="card-body text-center">

                        <h3>Contact us today!</h3>

                        <hr>

                        <h4>Our support team will get started building out your customized Office Forge server right away!</h4>

                        <h4 class="mt-4 mb-4"><a href="mailto:{{ config('site.supportEmail') }}">{{ config('site.supportEmail') }}</a></h4>

                        <h4>Office Forge - Your Business, Your Way</h4>

                    </div>
                </div>
            </div>

        </div>

    </div>

@endsection
