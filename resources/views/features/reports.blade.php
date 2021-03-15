@extends('layouts.site')

@section('page')
features reports
@endsection

@section('content')

    <div class="jumbotron jumbotron-fluid">
        <div class="container">

            <h1>Reports</h1>

            <div class="row pt-4">

                <div class="col-12 col-md-6 col-lg-7 order-2 order-md-1">

                    <h2>Intelligent Insights To Help You Excel</h2>

                    <h4>Track the details that move your business forward</h4>

                    <p class="mt-5">Office Forge provides a powerful reporting system that lets you analyze all of the data entered using our <a href="{{ route('features.form-docs') }}">form</a> systems. While your staff are completing their day-to-day <a href="{{ route('features.activities') }}">activities</a>, Office Forge is building a powerful database of details and connections that can provide the insight you need to excel!</p>

                </div>

                <div class="col-12 col-md-6 col-lg-5 icon-container order-1 order-md-2">
                    <span class="fas fa-chart-line"></span>
                </div>

            </div>

        </div>
    </div>

    <div class="container mt-5">

        <h2>Easy To Design</h2>

        <div class="row mt-4">

            <div class="col-12 col-md-5">
                <img alt="Office Forge screenshot showing how to add a Filter to a Report. There is an option to select a field from the Performance Review FormDocs in the dataset. When the user has selected a Date type field, they are given the option choose how to compare the data field with the values selected when generating the report." src="{{ asset('images/features/reports_design.png') }}">
            </div>

            <div class="col-12 col-md-7 ">

                <h4 class="mt-5 mt-md-0">Our easy-to-use Report builder puts you in charge of your data</h4>

                <p class="mt-5">Reports are designed to help you make sense of the data your staff are collecting in Office Forge. Select which fields you want to appear in your report from any of our <a href="{{ route('features.form-docs') }}">form systems</a>, add filters to narrow down your datasets, and output the results in real time.</p>

                <p>Our Report builder uses plain language to help take any confusion out of designing Reports, and Access Controls make sharing Reports with staff a breeze.</p>

            </div>

        </div>

    </div>

    <div class="of-bg-dark mt-5 mb-5 pt-5 pb-5">

        <div class="container">

            <h2>Powerful Insights</h2>

            <div class="row mt-4">

                <div class="col-12 col-md-6 col-lg-7 order-2 order-md-1">

                    <h4 class="mt-5 mt-md-0">Customized insights for the data that's important to you</h4>

                    <p class="mt-5">Once a Report has content, you can begin analyzing it. Once again, use our plain language tools to calculate averages, totals, trends, and more! Your results are output beautifully in charts, tables, summaries, and more!</p>

                    <p class="mt-lg-5">The Report builder guides you in deciding which kinds of analyses you might apply to the data in the Report. We provide over half a dozen types of charts, tables, calculations, and other visualizations to help provide meaningful insights and responsible practices to your reports.</p>

                </div>

                <div class="col-12 col-md-6 col-lg-5 order-1 order-md-2">
                    <div class="carousel slide" id="reportsCarousel" data-ride="carousel">
                        <div class="carousel-inner">
                            <div class="carousel-item active">
                                <img alt="Office Forge screenshot of a Sales Interest Report. The report shows the number of new Prospect records created during the specified timeframe, how many of them were qualified, and the total and average monthly revenue expected from the Prospects. At the bottom of the report is a full color pie chart showing a breakdown of the industries each prospect works in." src="{{ asset('images/features/reports_analysis_1.png') }}">
                            </div>
                            <div class="carousel-item">
                                <img alt="Office Forge screenshot of a Performance Review Analysis Report for the Employee named Mike Ehrmantraut. The report shows Mike's average Overall Performance score over the last year output in a table and on a gauge chart. It also shows his average performance ratings in 5 different performance areas output in a table and on a radar chart." src="{{ asset('images/features/reports_analysis_2.png') }}">
                            </div>
                            <div class="carousel-item">
                                <img alt="Office Forge screenshot of a Daily Report Analysis Report for a single user. The report shows the number of reports completed by the user in the provided time frame along with his average 'Productivity Rating' score for those reports. The report also displays the user's Productivity Rating scores on a line chart with an upward trend." src="{{ asset('images/features/reports_analysis_3.png') }}">
                            </div>
                        </div>
                        <a class="carousel-control-prev text-secondary" href="#reportsCarousel" role="button" data-slide="prev">
                            <span class="fas fa-chevron-left"></span>
                            <span class="sr-only">Previous</span>
                        </a>
                        <a class="carousel-control-next text-secondary" href="#reportsCarousel" role="button" data-slide="next">
                            <span class="fas fa-chevron-right"></span>
                            <span class="sr-only">Next</span>
                        </a>
                    </div>
                </div>

            </div>

        </div>

    </div>

    <div class="container mt-5 mb-5">

        <h2>Immediate Insights</h2>

        <div class="row mt-4">

            <div class="col-12 col-md-5">
                <img alt="Office Forge screenshot showing access details for an Employee File. Each user who has access to the File is listed." src="{{ asset('images/features/reports_trends.png') }}">
            </div>

            <div class="col-12 col-md-7">

                <h4 class="mt-5 mt-md-0">Share with your Teams to focus on what matters most</h4>

                <p class="mt-5">Reports always run against current data, so you never have to worry about out of date reporting.</p>

                <p>Reports are protected from unauthorized access by our easy-to-use Access Control system, so you can rest easy knowing your data is secure, while your staff have access to current information so they can do their best work.</p>

            </div>

        </div>

    </div>

@endsection
