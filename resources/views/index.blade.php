@extends('layouts.site')

@section('page')
index
@endsection

@section('content')

    <div class="jumbotron jumbotron-fluid">
        <div class="container">
            <h1>Your Business, Your Way</h1>

            <div class="row">

                <div class="col-12 col-md-6 order-md-2 operations-image-container">

                    <img alt="Office Forge helps with all of your business's operational concerns" src="{{ asset("images/operations_dots.png") }}">

                </div>

                <div class="col-12 col-md-6 order-md-1 headings-container">
                    <h3>At Office Forge, we believe nobody knows <em>your</em> business as well as you do.</h3>
                    <h4>Our goal is to give you software that works the way you work.</h4>
                </div>

            </div>

        </div>
    </div>

    <div class="container">

        <div class="row justify-content-center mb-5">

            <div class="col-12 col-md-10">

                <div class="card shadow">

                    <div class="card-body">

                        <div class="row">

                            <div class="col-12 col-md-8">

                                <h3>Subscribe to updates!</h3>

                                <p>Sign up to receive updates on Office Forge news and development!</p>

                                <p>Don't worry, we won't send too often (usually 1-2 times per month at most, plus potential security updates), and we won't share your email with anyone.</p>

                            </div>

                            <div class="col-12 col-md-4">
                                <form action="{{ route('subscribe') }}" method="POST">
                                    @csrf

                                    @honeypot

                                    <div class="form-group">
                                        <label for="subscriber_email">Email Address</label>
                                        <input type="email" class="form-control" id="subscriber_email" name="subscriber_email" value="{{ old('subscriber_email') }}" placeholder="Your Email Address" required>
                                    </div>
                                    @error('subscriber_email')
                                        <div class="alert alert-danger">{{ $message }}</div>
                                    @enderror

                                    <div class="form-group form-check">
                                        <input type="checkbox" class="form-check-input" id="confirm_subscription" name="confirm_subscription" value="1" required>
                                        <label class="form-check-label text-muted" for="confirm_subscription"><small>Yes, please subscribe me to Office Forge updates</small></label>
                                    </div>

                                    @error('confirm_subscription')
                                        <div class="alert alert-danger">{{ $message }}</div>
                                    @enderror

                                    <button type="submit" class="btn btn-primary">Subscribe</button>

                                </form>
                            </div>

                        </div>

                    </div>

                </div>

            </div>

        </div>
        
        <div class="row justify-content-center">

            <div class="col-12 col-md-10">

                <h3>All Your Business Activities</h3>

                <p>We're hard at work crafting tools to help your organization with:</p>

            </div>

            <div class="col-12 col-md-8">

                <div class="row">

                    <div class="col-6">
                        <div class="feature-card">
                            <span class="fas fa-tasks"></span>
                            Process and Task Management
                        </div>
                    </div>

                    <div class="col-6">
                        <div class="feature-card">
                            <span class="fas fa-comments"></span>
                            Communication and Collaboration
                        </div>
                    </div>

                    <div class="col-6">
                        <div class="feature-card">
                            <span class="fas fa-folder-open"></span>
                            File Storage
                        </div>
                    </div>

                    <div class="col-6">
                        <div class="feature-card">
                            <span class="fas fa-calendar"></span>
                            Scheduling
                        </div>
                    </div>

                </div>

            </div>

        </div>

    </div>

    <div class="of-bg-dark mb-5">

        <div class="container">

            <div class="row justify-content-center">

                <div class="col-12 col-md-10">

                    <h2>Your Tools, Your Way</h2>

                    <p>We want to give you the tools you need to do the very best work you can do. You'll be empowered to deliver the best products, service, and support possible to your customers. You'll be able to leverage Office Forge to implement the perfect solution to all of your operational concerns, including:</p>

                    <ul>
                        <li>
                            Human Resources
                            <ul>
                                <li>Hiring</li>
                                <li>Training</li>
                                <li>Development</li>
                            </ul>
                        </li>
                        <li>CRM</li>
                        <li>Project Management</li>
                        <li>Compliance</li>
                    </ul>

                    <h3>And so much more!</h3>


                    <p>We're still polishing our software for our initial production release, but if you're interested in what we have to offer and want to learn more, feel free to reach out to us anytime and we'll be happy to connect with you! Drop us an email and we'll get right back to you: <a href="mailto:{{ config('site.supportEmail') }}">{{ config('site.supportEmail') }}</a></p>

                </div>

            </div>

        </div>

    </div>

    <div class="container">

        <div class="row justify-content-center">

            <div class="col-12 col-md-10">

                <h3>When you adopt Office Forge, you get the best of everything!</h3>

                <div class="row feature-tab">

                    <div class="col-12 col-md-4 icon-container">

                        <span class="fas fa-sync-alt"></span>

                    </div>

                    <div class="col-12 col-md-8">

                        <h4>Upgrades included</h4>

                        <p>We are continually working to add new features, improve existing ones, keeping a close eye on security, and more! </p>

                        <p>Every month, we release new features, and it's all included, at no additional charge.</p>

                    </div>

                </div>

                <div class="row feature-tab bg-dark">

                    <div class="col-12 col-md-8">

                        <h4>Fair, Transparent Pricing</h4>

                        <p>We want you to take advantage of all the work we put in to Office Forge, so we won't charge you more for using more features or for adding more users to <em>your</em> system.</p>

                        <p>See more information on our <a href="{{ route('pricing') }}">pricing page</a>.</p>

                    </div>

                    <div class="col-12 col-md-4 icon-container">

                        <span class="fas fa-search-dollar"></span>

                    </div>

                </div>

                <div class="row feature-tab">

                    <div class="col-12 col-md-4 icon-container">

                        <span class="fas fa-shield-alt"></span>

                    </div>

                    <div class="col-12 col-md-8">

                        <h4>Privacy. Guaranteed.</h4>

                        <p>We do all of our work in the open. You can see all the changes we're making, bugs we're fixing, and features we're adding! Also, you don't have to wonder what we're doing with <em>your</em> data.</p>

                    </div>

                </div>


                <h2>Empowering Everyone</h2>

                <hr>

                <div class="row feature-tab bg-dark">

                    <div class="col-12 col-md-4 icon-container">

                        <span class="fas fa-code"></span>

                    </div>

                    <div class="col-12 col-md-8">

                        <h4>Open</h4>

                        <p>We do all of our work in the open. We share what we know and do so others can trust us, learn from us, and help us create better products.</p>

                        <p>Install Office Forge on your own servers, browse through our code, or report bugs. We appreciate all the help we get.</p>

                        <p>Check out our <a href="{{ config('site.officeForgeProjectUrl') }}" target="_blank">repository on Github</a> today!</p>

                    </div>

                </div>

                <div class="row feature-tab">

                    <div class="col-12 col-md-8">

                        <h4>Accessible</h4>

                        <p>We want to make sure Office Forge is accessible to everybody who needs it. We do our best to limit and remove any barriers caused by:</p>

                        <ul>
                            <li>Cost</li>
                            <li>Deliverability</li>
                            <li>Language</li>
                            <li>Disability</li>
                        </ul>

                    </div>

                    <div class="col-12 col-md-4 icon-container">

                        <span class="fas fa-universal-access"></span>

                    </div>

                </div>


            </div>

        </div>

    </div>

@endsection
