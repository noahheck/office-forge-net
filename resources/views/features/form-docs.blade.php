@extends('layouts.site')

@section('page')
features form-docs
@endsection

@section('content')

    <div class="jumbotron jumbotron-fluid">
        <div class="container">

            <h1>FormDocs</h1>

            <div class="row pt-4">

                <div class="col-12 col-md-6 col-lg-7 order-2 order-md-1">

                    <h2>Easy to Use, Powerful Data Collection</h2>

                    <h4>Organize your business information in the way that makes sense for your organization!</h4>

                    <p class="mt-5">Our FormDocs system makes collecting the information you need easy. No more forgotten data, lost or misplaced forms, forgotten data, or incomplete reports. FormDocs make it easy to get it right the first time, every time.</p>

                </div>

                <div class="col-12 col-md-6 col-lg-5 icon-container order-1 order-md-2">
                    <span class="fas fa-file-invoice"></span>
                </div>

            </div>

        </div>
    </div>

    <div class="container mt-5">

        <h2>Easy to Set Up!</h2>

        <div class="row mt-4">

            <div class="col-12 col-md-5">
                <img alt="Screenshot of a FormDoc within Office Forge. The FormDoc is titled 'Property Details' and contains fields relevant to a property listing for a real estate agency." src="{{ asset('images/screenshot_2.png') }}">
            </div>

            <div class="col-12 col-md-7 pt-5">

                <h4>Office Forge's innovative data collection system helps you collect the information that's important for your business!</h4>

                <p class="mt-5">Using plain language, craft your information forms, use our drag-and-drop simplicity to organize them, and get access to powerful reporting features!</p>

                <p>We currently provide over a dozen different form field types to use with FormDocs, including text fields, phone numbers, addresses, numeric values, checkboxes, select boxes, and even other entities within Office Forge.</p>

                <p>In addition, because we use comfortable, familiar form systems, your staff already know how to use them.</p>

            </div>

        </div>

    </div>

    <div class="of-bg-dark mt-5 mb-5 pt-5 pb-5">

        <div class="container">

            <h2>Track, Monitor, and Review</h2>

            <div class="row mt-4">

                <div class="col-12 col-md-6 col-lg-7 order-2 order-md-1">

                    <h4>Office Forge's FormDoc Review let's you find all of your documents without hassle!</h4>

                    <p class="mt-5">Once set up, in-progress and submitted FormDocs can be easily found using the FormDoc Review. All documents are easy to find, and filters allow you to narrow down your search to only what you are interested in seeing.</p>

                    <p>FormDoc data is perfect for using with our <a href="{{ route('features.reports') }}">Reports Feature</a>, or you can download all your information to use with your own external tools!</p>

                </div>

                <div class="col-12 col-md-6 col-lg-5 order-1 order-md-2">
                    <img alt="Screenshot showing the Office Forge FormDoc Review screen: fields to filter the results by document type, user, file, date, and FormDoc status. The results of the query are displayed with an option to display each FormDoc in the main window. The currently displayed FormDoc is a Performance Report showing custom field data entries for the Office Forge Cafe submitted by Noah Heck" src="{{ asset('images/features/form-doc_review.png') }}">
                </div>

            </div>

        </div>

    </div>

    <div class="container mt-5 mb-5">

        <h2>Stay Organized!</h2>

        <div class="row mt-4">

            <div class="col-12 col-md-5">
                <img alt="A User's 'My Work' view showing documents that have been started but not completed, and tasks that are due today or later this week." src="{{ asset('images/features/form-docs_my-work.png') }}">
            </div>

            <div class="col-12 col-md-7">


                <h4>Office Forge's intuitive design makes sure your staff can always find their work!</h4>

                <p class="mt-5">Each user's dashboard includes links to all of their documents, tasks, and <a href="{{ route('features.activities') }}">projects</a>, so they're never more than a click away from completing their work.</p>

                <p></p>

            </div>

        </div>

    </div>

@endsection
