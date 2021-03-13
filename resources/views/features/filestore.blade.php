@extends('layouts.site')

@section('page')
features filestore
@endsection

@section('content')

    <div class="jumbotron jumbotron-fluid">
        <div class="container">

            <h1>FileStore</h1>

            <div class="row pt-4">

                <div class="col-12 col-md-6 col-lg-7 order-2 order-md-1">

                    <h2>Document and File Sharing, Simplified</h2>

                    <h4>Securely store, share, and manage your digital resources</h4>

                    <p class="mt-5">FileStore is Office Forge's document and media file hosting and sharing service. This system allows you to upload, manage access to, and share files among your staff. These files are securely stored on your Office Forge server and accessible from any web browser so you'll always have access to your most important information.</p>

                </div>

                <div class="col-12 col-md-6 col-lg-5 icon-container order-1 order-md-2">
                    <span class="fas fa-archive"></span>
                </div>

            </div>

        </div>
    </div>

    <div class="container mt-5">

        <h2>Get Organized</h2>

        <div class="row mt-4">

            <div class="col-12 col-md-5">
                <img alt="Office Forge screenshot showing 3 FileStore Drives in which to store and organize an organization's digital media." src="{{ asset('images/features/filestore_drives.png') }}">
            </div>

            <div class="col-12 col-md-7 pt-3">

                <h4>Secure Storage For Your Digital Assets</h4>

                <p class="mt-5">FileStore lets you define Drives to organize your documents and media files. Drives can further be organized using a familiar Folder paradigm to help your organization stay efficient.</p>

                <p>FileStore also provides an enhanced layer of access protection to ensure your digital assets are secure. Give full access to Team members working on a project, or read-only access to those who need to view, but not change, your documents.</p>

            </div>

        </div>

    </div>

    <div class="of-bg-dark mt-5 mb-5 pt-5 pb-5">

        <div class="container">

            <h2>Secure File Management, Available Anywhere</h2>

            <div class="row mt-4">

                <div class="col-12 col-md-6 col-lg-7 order-2 order-md-1">

                    <h4>Your Files Are Secure, And Everywhere You Need Them!</h4>

                    <p class="mt-4">Office Forge runs in your browser, so you can access your content from a web browser anywhere in the world!</p>

                    <p>And because Office Forge runs on your own server, adding more space is very cost effective. </p>

                </div>

                <div class="col-12 col-md-6 col-lg-5 order-1 order-md-2">
                    <img alt="Office Forge screenshot showing a list of employment documents in the Employment Resources FileStore Drive." src="{{ asset('images/features/filestore_documents.png') }}">
                </div>

            </div>

        </div>

    </div>

    <div class="container mt-5 mb-5">

        <h2>Built For Change</h2>

        <div class="row mt-4">

            <div class="col-12 col-md-5">
                <img alt="Office Forge screenshot showing 3 different versions of a document titled 'Employee Manual'." src="{{ asset('images/features/filestore_versions.png') }}">
            </div>

            <div class="col-12 col-md-7">


                <h4>Here To Help As Your Organization Grows</h4>

                <p class="mt-5">FileStore makes it easy to upload new versions of your files as they change. Links and access controls automatically reference the most recent version of the file, </p>

                <p>FileStore also keeps tracks of each version as they're changed. You can see who made changes over time, and even download any version of a file at any given point.</p>

            </div>

        </div>

    </div>

@endsection
