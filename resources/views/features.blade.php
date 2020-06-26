@extends('layouts.site')

@section('page')
features
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

                    <p>Need to differentiate between an employee and a contractor? Have a great way to let your staff know what you really think of the competition? Office Forge lets you organize your business the way you think about it, so your software works the way you work.</p>

                </div>

                <div class="col-12 col-md-6 col-lg-5">
                    <img alt="Office Forge screenshot showing navigation options for Clients, Competitors, Contacts, Employees, Jobs, Properties, and Prospects. The main content of the screenshot includes an attractive listing of Properties and the addresses." src="{{ asset('images/screenshot_1_5.png') }}">
                </div>

            </div>

        </div>
    </div>

    <div class="container">
        <div class="row mt-5">

            <div class="col-12 col-md-5 order-2 order-md-1">
                <img alt="" src="{{ asset('images/screenshot_2.png') }}">
            </div>

            <div class="col-12 col-md-7 order-1 order-md-2 pt-5">

                <h2>Intuitive, Powerful Data Collection</h2>

                <h4>Office Forge's innovative data collection system helps you collect the information that's important for your business!</h4>

                <p class="mt-5">Using plain language, craft your information forms, use our drag-and-drop simplicity to organize them, and get access to powerful reporting features!</p>

                <p>In addition, because we use comfortable, familiar form systems, your staff already know how to use them.</p>

            </div>

        </div>

    </div>

    <div class="container">

        <div class="card shadow of-bg-dark mt-5 mb-5">

            <div class="card-body">

                <div class="row">

                    <div class="col-12 col-md-6 col-lg-7">

                        <h2>Work Smarter, Not Harder</h2>

                        <h4>Office Forge's Process workflows ensure all the right things are getting done, without missing a step!</h4>

                        <p class="mt-5">Easily define your business activities as Processes, and let Office Forge keep your staff on top of the things that matter! Keep all of the files, documentation, and tasks required to complete your work in one place, so everybody knows where to find it.</p>

                        <p>Reporting facilities in Office Forge let you see the status of all the work that's in progress, overdue, or coming up. Find bottlenecks before they create problems, and make sure you're doing the best work possible!</p>

                    </div>

                    <div class="col-12 col-md-6 col-lg-5">
                        <img alt="Screenshot showing an Office Forge Workflow Process: an employees quarterly review is shown with tasks displayed showing a responsible person, a due date, and an indicator of the tasks status" src="{{ asset('images/overlaid_activity_and_report.png') }}">
                    </div>

                </div>

            </div>

        </div>

    </div>

@endsection
