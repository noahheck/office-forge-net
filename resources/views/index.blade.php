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

        <div class="row mb-5 mt-5 justify-content-center">

            <div class="col-12 col-sm-6 col-lg-4">
                <div class="feature-card">
                    <span class="fas fa-briefcase"></span>
                    <h5>Organize</h5>
                    Keep all of your records, documents, and files organized
                </div>
            </div>

            <div class="col-12 col-sm-6 col-lg-4">
                <div class="feature-card">
                    <span class="far fa-comments"></span>
                    <h5>Collaborate</h5>
                    Ensure everyone is on the same page, from anywhere
                </div>
            </div>

            <div class="col-12 col-sm-6 col-lg-4">
                <div class="feature-card">
                    <span class="fas fa-tools"></span>
                    <h5>Customize</h5>
                    Workflows, Documents, and Storage tailored just for you
                </div>
            </div>

        </div>

        <div class="row mb-5 shadow p-3">

            <div class="col-12 col-md-7 order-2 order-md-1">
                <h3 class="mb-4">Office Forge Is Great for Businesses!</h3>

                <p>With Office Forge, you can finally get your business organized in a way that makes sense for you. Our tools let you model your software exactly how you run your business.</p>

                <p>Keep all of your records, documents, and media files organized like never before. Organize your workflows into streamlined Processes, track important information with our FormDoc system, and gain realtime insight into how your business is operating!</p>

                <p><a href="{{ route('business') }}">See how Office Forge can help your business excel!</a></p>
            </div>

            <div class="col-12 col-md-5 order-1 order-md-2 benefit-icon-container">

                <div class="benefit-icon">
                    <span class="fas fa-building"></span>
                </div>

            </div>

        </div>

        <div class="row mb-5">

            <div class="col-12 col-md-5 order-2 order-md-1 benefit-icon-container">

                <div class="benefit-icon">
                    <span class="fas fa-user-shield"></span>
                </div>

            </div>

            <div class="col-12 col-md-7 order-1 order-md-2">
                <h3 class="mb-4">And Loved By IT Teams!</h3>

                <p>Office Forge let's you deliver a customized business management platform, without the hassle. Office Forge is the no-code solution to the problems all businesses face.</p>

                <p>Our worry-free hosting service lets you take care of your clients while we take care of the servers.</p>

                <p><a href="{{ route('it-teams') }}">See why IT Teams love Office Forge!</a></p>
            </div>

        </div>

        <div class="row mb-5 justify-content-center">

            <div class="col-12 text-center mb-4">

                <hr>

                <h2>The Latest From Our Blog</h2>

            </div>

            @foreach ($articles as $article)

                <div class="col-12 col-md-6 col-lg-4 mb-4">
                    <div class="card border-0 shadow h-100">
                        <div class="card-body">
                            <h4 class="card-title">{{ $article->title }}</h4>
                            <h6 class="text-muted card-subtitle mb-3">{{ $article->author->name }}</h6>
                            <p>{{ $article->summary }}</p>
                        </div>
                        <div class="card-footer bg-white border-top-0 text-right">

                            <a class="card-link" href="{{ route('blog.article', [$article]) }}">
                                Read More
                                <span class="fas fa-chevron-right"></span>
                            </a>
                        </div>
                    </div>
                </div>

            @endforeach

        </div>

        <div class="row justify-content-center mb-5">

            <div class="col-12 col-md-10">

                <div class="card border-0 shadow">

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

    </div>

    <div class="container">

        <div class="row justify-content-center">

            <div class="col-12">
                <hr>
            </div>

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
