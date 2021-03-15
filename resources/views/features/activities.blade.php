@extends('layouts.site')

@section('page')
features files
@endsection

@section('content')

    <div class="jumbotron jumbotron-fluid">
        <div class="container">

            <h1>Activities</h1>

            <div class="row pt-4">

                <div class="col-12 col-md-6 col-lg-7 order-2 order-md-1">

                    <h2>Projects, Processes, and Tasks</h2>

                    <h4>Coordinate all of your work activities across all your teams in one convenient place</h4>

                    <p class="mt-5">Office Forge Activities are the perfect place for your staff to coordinate and collaborate on all the work they do. Activities are great for big projects, small projects, single tasks, and recurring business processes. Eliminate confusion and get your best work done!</p>

                </div>

                <div class="col-12 col-md-6 col-lg-5 icon-container order-1 order-md-2">
                    <span class="fas fa-clipboard-list"></span>
                </div>

            </div>

        </div>
    </div>

    <div class="container mt-5">

        <h2>Quick, Convenient, and Everything You Need in One Place</h2>

        <div class="row mt-4">

            <div class="col-12 col-md-5">
                <img alt="Office Forge screenshot showing an Activity called 'Website Redesign' for the Office Forge Cafe. The Activity shows an Activity Owner, 3 additional participants, details of the project to be completed, an attached document titled 'Original RFP' and tasks that are assigned to various participants along with due dates." src="{{ asset('images/features/activities_project.png') }}">
            </div>

            <div class="col-12 col-md-7">

                <h4 class="mt-5">Powerful tools for doing great work</h4>

                <p class="mt-1 mt-md-5">Activities bring together everything your staff needs to get their best work done. Bring Team members together to collaborate, assign tasks, and track progress all in one place.</p>

                <p class="mt-1 mt-md-5">Track media files and documents, prioritize work, and communicate updates in one convenient location so nothing gets lost. When everybody is on the same page, your work gets done more efficiently, with less waste and higher quality!</p>

            </div>

        </div>

    </div>

    <div class="of-bg-dark mt-5 mb-5 pt-5 pb-5">

        <div class="container">

            <h2>Management For All Your Processes</h2>

            <div class="row mt-4">

                <div class="col-12 col-md-6 col-lg-7 order-2 order-md-1">

                    <h4 class="mt-5 mt-md-0">Streamline quality into your staff's day-to-day work with Office Forge Processes</h4>

                    <p class="mt-5">Organize your routine work practices with Processes to create recurring, organized workflows that help ensure quality and consistency. Processes contain default tasks, <a href="{{ route('features.form-docs') }}">FormDocs</a>, and instructions to help your staff deliver the best results to your customers.</p>

                    <p>With centralized management of day-to-day activities, adjustments made to your Processes get communicated to all your staff immediately helping to eliminate errors and improve morale!</p>

                </div>

                <div class="col-12 col-md-6 col-lg-5 order-1 order-md-2">
                    <img alt="Office Forge screenshot showing the template for a 'Sales Demo' Process. It includes instructions on how to complete the Process, along with a FormDoc title 'Demo Report' and 4 tasks to be completed as part of the Process." src="{{ asset('images/features/activities_process.png') }}">
                </div>

            </div>

        </div>

    </div>

    <div class="container mt-5 mb-5">

        <h2>Get Comfortable Feeling Confident</h2>

        <div class="row mt-4">

            <div class="col-12 col-md-5">
                <img alt="A User's 'My Work' view showing documents that have been started but not completed, and tasks that are due today or later this week." src="{{ asset('images/features/form-docs_my-work.png') }}">
            </div>

            <div class="col-12 col-md-7">

                <h4 class="mt-5 mt-md-0">Get Your Absolute Best Work Done</h4>

                <p class="mt-5">Each user's dashboard shows all their Tasks, Activities, Processes, and <a href="{{ route('features.form-docs') }}">FormDocs</a>. When new Tasks and Activities are assigned, they'll show up immediately, prioritized, and with all the resources your staff need to get the job done. Rest easy knowing that you don't have to worry about things falling through the cracks.</p>

                <p>Office Forge makes it easy to ensure your customers are getting the best service possible!</p>

            </div>

        </div>

    </div>

@endsection
