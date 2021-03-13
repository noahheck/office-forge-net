@extends('layouts.site')

@section('page')
features files
@endsection

@section('content')

    <div class="jumbotron jumbotron-fluid">
        <div class="container">

            <h1>Files</h1>

            <div class="row pt-4">

                <div class="col-12 col-md-6 col-lg-7 order-2 order-md-1">

                    <h2>Custom Resources, Crafted By You</h2>

                    <h4>Software resources designed to your unique specifications</h4>

                    <p class="mt-5">Design custom <a href="{{ route('features.activities') }}">workflows</a>, <a href="{{ route('features.filestore') }}">storage</a>, <a href="{{ route('features.form-docs') }}">documents</a>, and <a href="{{ route('features.reports') }}">reports</a> that work the way your business works. Every aspect of the resource design is in your control, so your software works how you work!</p>

                </div>

                <div class="col-12 col-md-6 col-lg-5 icon-container order-1 order-md-2">
                    <span class="fas fa-folder-open"></span>
                </div>

            </div>

        </div>
    </div>

    <div class="container mt-5">

        <h2>Designed By You</h2>

        <div class="row mt-4">

            <div class="col-12 col-md-5">
                <img alt="Office Forge screenshot showing navigation options for Clients, Competitors, Contacts, Employees, Jobs, Properties, and Prospects. The main content of the screenshot includes an attractive listing of Properties and the addresses." src="{{ asset('images/screenshot_1_5.png') }}">
            </div>

            <div class="col-12 col-md-7 pt-5">

                <h4>Uniquely customizable, Office Forge's Files system lets you design resources to perfectly represent your business.</h4>

                <p class="mt-5">Express your needs in the language of your business. Use the terminology that makes sense for you and allows you to embrace your unique advantages to your staff!</p>

            </div>

        </div>

    </div>

    <div class="of-bg-dark mt-5 mb-5 pt-5 pb-5">

        <div class="container">

            <h2>Tools To Help You Excel</h2>

            <div class="row mt-4">

                <div class="col-12 col-md-6 col-lg-7 order-2 order-md-1">

                    <h4>Office Forge's Tools Help You Get Organized!</h4>

                    <p class="mt-5">Files expose powerful tools to help keep your business organized. Create custom <a href="{{ route('features.form-docs') }}">Forms</a> to collect important information, <a href="{{ route('features.activities') }}">Processes</a> to map workflows, and <a href="{{ route('features.filestore') }}">FileStore</a> to keep track of important documents and media.</p>

                    <p><a href="{{ route('features.form-docs') }}">FormDocs</a> let you collect and track interactions, status updates, and progress. <a href="{{ route('features.reports') }}">Reports</a> provide detailed and intelligent insights into operations and performance, all while your staff are performing their day-to-day work.</p>

                </div>

                <div class="col-12 col-md-6 col-lg-5 order-1 order-md-2">
                    <img alt="Office Forge screenshot showing an employee form with fields to collect different pieces of information." src="{{ asset('images/features/files_forms.png') }}">
                </div>

            </div>

        </div>

    </div>

    <div class="container mt-5 mb-5">

        <h2>Secure and Private, Guaranteed</h2>

        <div class="row mt-4">

            <div class="col-12 col-md-5">
                <img alt="Office Forge screenshot showing access details for an Employee File. Each user who has access to the File is listed." src="{{ asset('images/features/file_access-details.png') }}">
            </div>

            <div class="col-12 col-md-7">


                <h4>Powerful Controls, Simplified</h4>

                <p class="mt-5">Office Forge provides a multi-level Access Control scheme. This easy-to-configure system provides a powerful framework for you to ensure only users who should be accessing certain information are able to do so.</p>

                <p>And though we've taken care to make our Access Control system as easy to understand as possible, we want to make sure there are never any questions about who has access to your important information. This is why we provide an interface to show exactly which users in your Office Forge server can access each File.</p>

            </div>

        </div>

    </div>

@endsection
