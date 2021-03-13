@extends('layouts.site')

@section('page')
business
@endsection

@section('content')

    <div class="jumbotron jumbotron-fluid">
        <div class="container">

            <h1>Your Business, Your Way</h1>

            <div class="row">

                <div class="col-12 col-md-6 col-lg-7 pt-5">

                    <h2>Customizable Information Systems</h2>

                    <h4>Organize your business information in the way that makes sense for your organization!</h4>

                    <p class="mt-5">Express your needs in the language of your business. Use the terminology that makes sense for you and allows you to embrace your unique advantages to your staff!</p>

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
                <h3 class="mb-4">Get Organized!</h3>

                <p>With Office Forge, you can finally get your business organized in a way that makes sense for you. Our tools let you model your software exactly how you run your business.</p>

                <p>Keep all of your <a href="{{ route('features.filestore') }}">records, documents, and media files</a> organized like never before. Organize your <a href="{{ route('features.activities') }}">workflows into streamlined Processes</a>, track important information with our <a href="{{ route('features.form-docs') }}">FormDoc</a> system, and gain <a href="{{ route('features.reports') }}">realtime insight</a> into how your business is operating!</p>
            </div>

            <div class="col-12 col-md-5 order-1 order-md-2 benefit-icon-container">

                <div class="benefit-icon">
                    <span class="fas fa-briefcase"></span>
                </div>

            </div>

        </div>

        <div class="row mb-5">

            <div class="col-12 col-md-5 benefit-icon-container">

                <div class="benefit-icon">
                    <span class="far fa-comments"></span>
                </div>

            </div>

            <div class="col-12 col-md-7">
                <h3 class="mb-4">Collaborate Effectively!</h3>

                <p>Office Forge keeps everybody on the same page. Your staff will all be working on the same project files, with the same same requirements and expectations. No longer will you find yourself searching through old emails trying to find the latest version of a file or figuring out project details.</p>

                <p><a href="{{ route('features.activities') }}">Everything you need for all of your projects, big or small, in one place.</a></p>
            </div>

        </div>

    </div>

    <div class="of-bg-dark pt-5 pb-5">
        <div class="container">

            <div class="row mb-5">

                <div class="col-12 col-md-5 order-1 order-md-2 benefit-icon-container">

                    <div class="benefit-icon">
                        <span class="fas fa-tools"></span>
                    </div>

                </div>

                <div class="col-12 col-md-7 order-2 order-md-1">
                    <h3 class="mb-4">Customize!</h3>

                    <p>Office Forge provides all the tools to have your own customized business management platform. All of the forms, documents, files, and storage options are <a href="{{ route('features.files') }}">tailored specifically for your business</a>.</p>

                    <p>Workflows, Documentation, and Access Controls are all designed to let you work the way you want to work while keeping things efficient, organized, and secure.</p>
                </div>

            </div>

        </div>
    </div>

    <div class="container">

        <div class="row mt-5 mb-5">

            <div class="col-12 col-md-5 benefit-icon-container">

                <div class="benefit-icon">
                    <span class="fas fa-chart-line"></span>
                </div>

            </div>

            <div class="col-12 col-md-7">
                <h3 class="mb-4">Insights and Intelligence</h3>

                <p>Office Forge provides a <a href="{{ route('features.reports') }}">powerful reporting system</a> that lets you analyze all of the data entered using our form systems. While your staff are <a href="{{ route('features.activities') }}">completing their day-to-day activities</a>, Office Forge is building a powerful database of details and connections that can provide the insight you need to excel!</p>

                <p>Use our <a href="{{ route('features.reports') }}">Reports</a> system to analyze any of the information entered into Office Forge. Add charts and summaries to easily identify and track the things that move your business forward, and share these insights with your staff instantly to help everyone focus on the things that truly matter.</p>

            </div>

        </div>

        <div class="row mb-5 shadow p-3">

            <div class="col-12 col-md-7 order-2 order-md-1">
                <h3 class="mb-4">Private. Secure. Guaranteed.</h3>

                <p>Office Forge provides a multi-level Access Control scheme. This easy-to-configure system provides a powerful framework for you to ensure only users who should be accessing certain information are able to do so.</p>

                <p>The Office Forge software itself is built using some of the most trusted technologies available today. The foundations for our software, build tools, hosting, and encryption software are all open source, as is Office Forge itself. This means you never have to question what we're doing with your data.</p>

                <p>All of these controls allow us to proudly and confidently say that your privacy is guaranteed!</p>
            </div>

            <div class="col-12 col-md-5 order-1 order-md-2 benefit-icon-container">

                <div class="benefit-icon">
                    <span class="fas fa-shield-alt"></span>
                </div>

            </div>

        </div>

    </div>

@endsection
