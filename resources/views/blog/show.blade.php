@extends('layouts.site')

@section('page')
blog-article
@endsection

@section('og-tags')
    <meta property="og:url" content="{{ url()->current() }}">
    <meta property="og:title" content="{{ $article->title }}">
    <meta property="og:type" content="website">
    <meta property="og:image" content="https://officeforge.net/images/of_logo_500.png">
    <meta property="og:description" content="{{ $article->summary }}">
@endsection

@section('content')

    <div class="container">

        <div class="article mt-5 mb-5">

            <div class="row justify-content-center mb-5">

                <div class="col-12 col-md-11 pt-sm-3">

                        <h2>{{ $article->title }}</h2>

                        @if ($article->subtitle)
                            <h3>{{ $article->subtitle }}</h3>
                        @endif
                        <p class="text-muted">{{ \App\format_date($article->date) }} - {{ $article->author->name }}</p>

                        <hr>

                        <div class="editor-content">
                            {!! \App\safe_text_editor_content($article->content) !!}
                        </div>

                        <hr>

                        <p class="article-footer">
                            Office Forge is proud to be an open source project. Find out more at:
                            <a href="{{ config('site.officeForgeProjectUrl') }}" target="_blank">{{ config('site.officeForgeProjectUrl') }}</a>
                        </p>

                    </div>

            </div>

        </div>

    </div>

@endsection
