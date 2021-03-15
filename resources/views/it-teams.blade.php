@extends('layouts.site')

@section('page')
it-teams
@endsection

@section('content')

    <div class="jumbotron jumbotron-fluid">
        <div class="container">

            <h1>Custom IT Solutions</h1>

            <div class="row">

                <div class="col-12 col-md-6 col-lg-7 pt-5">

                    <h4>Deliver a customized business management platform, without the hassle</h4>

                    <p class="mt-5">We work with internal and external IT teams to deliver custom IT platforms that exceed their client's expectations.</p>

                    <p>We'll get your Office Forge server set up quickly so you can focus on your client.</p>

                </div>

                <div class="col-12 col-md-6 col-lg-5">
                    <img alt="Office Forge screenshot showing navigation options for Clients, Competitors, Contacts, Employees, Jobs, Properties, and Prospects. The main content of the screenshot includes an attractive listing of Properties and the addresses." src="{{ asset('images/screenshot_1_5.png') }}">
                </div>

            </div>

        </div>
    </div>

    <div class="container">

        <div class="row mb-5 shadow p-3">

            <div class="col-12 col-md-7 order-2 order-md-1">
                <h3 class="mb-4">Low Costs</h3>

                <p>We're pleased to offer our <a href="{{ route('pricing') }}">worry-free hosting</a> for a consistent, stable price. This includes a dedicated VPS with 20GB of storage, state-of-the-art security, and managed updates. We don't charge more for additional users, or for feature updates and upgrades.</p>

                <p>Need more resources or storage? We'll work with you to make sure your clients get the best experience possible with the resources they need to keep them running at their absolute best.</p>
            </div>

            <div class="col-12 col-md-5 order-1 order-md-2 benefit-icon-container">

                <div class="benefit-icon">
                    <span class="fas fa-search-dollar"></span>
                </div>

            </div>

        </div>

        <div class="row mb-5">

            <div class="col-12 col-md-5 benefit-icon-container">

                <div class="benefit-icon">
                    <span class="fas fa-tools"></span>
                </div>

            </div>

            <div class="col-12 col-md-7">
                <h3 class="mb-4">Customizability</h3>

                <p>Office Forge is designed to be <a href="{{ route('features.files') }}">fully customized to each client's needs</a>. All of our <a href="{{ route('features.form-docs') }}">data collection</a>, <a href="{{ route('features.form-docs') }}">document</a>, <a href="{{ route('features.form-docs') }}">form</a>, <a href="{{ route('features.filestore') }}">file storage</a>, and <a href="{{ route('features.activities') }}">workflow</a> systems are designed to let each client express their unique business practices while keeping things efficient, organized, and secure.</p>
            </div>

        </div>

    </div>

    <div class="of-bg-dark pt-5 pb-5">

        <div class="container">

            <div class="row">

                <div class="col-12 col-md-5 order-1 order-md-2 benefit-icon-container">

                    <div class="benefit-icon">
                        <span class="fas fa-clipboard-check"></span>
                    </div>

                </div>

                <div class="col-12 col-md-7 order-2 order-md-1">
                    <h3 class="mb-4">Simplified Management</h3>

                    <p>Our <a href="{{ route('pricing') }}">worry-free hosting service</a> lets you take care of your clients while we take care of the servers. Automatic and on-demand backups are provided, and our data center partners offer a 99.99% uptime SLA.</p>

                    <p>Clients connect to their Office Forge server through their web browsers, so there's no client software to install or maintain. Servers get unique URLs so firewall management is straightforward and predictable.</p>

                    <p>In addition, we can help you host Office Forge on your own servers on premise or in your own cloud, and since we don't charge extra for more users or additional features, your costs are stable, predictable, and easy to budget for.</p>
                </div>

            </div>

        </div>

    </div>

    <div class="container mt-5">

        <div class="row mb-5">

            <div class="col-12 col-md-5 benefit-icon-container">

                <div class="benefit-icon">
                    <span class="fas fa-shield-alt"></span>
                </div>

            </div>

            <div class="col-12 col-md-7">
                <h3 class="mb-4">Security</h3>

                <p>Our hosting infrastructure implements the best available technologies to ensure a high performance, secure computing environment. We implement state-of-the-art firewalls and encryption protocols running on modern hardware and operating systems.</p>

                <p>In addition, our application software, build system, and provisioning tools are open source and available for anybody to audit. We don't have any access to your client's application data unless they provide it.</p>

                <p>This all combines to allow us to proudly and confidently say that your privacy is guaranteed!</p>
            </div>

        </div>

    </div>


@endsection
