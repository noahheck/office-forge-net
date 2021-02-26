@extends('layouts.site')

@section('page')
blog-list
@endsection

@section('content')


    <div class="jumbotron jumbotron-fluid">
        <div class="container">
            <a href="{{ route('blog.article', [$latestArticle]) }}">
                <h1>
                    {{ $latestArticle->title }}
                </h1>

                @if ($latestArticle->subtitle)
                    <h2>
                        {{ $latestArticle->subtitle }}
                    </h2>
                @endif
            </a>

            <div class="row">

                <div class="col-12 col-md-12 order-md-1 pt-md-5">
                    <p>
                        <span class="text-muted">{{ \App\format_date($latestArticle->date) }}</span>
                        <br>
                        {!! nl2br(e($latestArticle->summary)) !!}

                        <br><br>

                        <a href="{{ route('blog.article', [$latestArticle]) }}">
                            <em>Read more...</em>
                        </a>
                    </p>
                </div>

            </div>

        </div>
    </div>

    <div class="container">

        <div class="row justify-content-center mt-5 mb-5">

            @foreach ($articles as $article)

                <div class="col-12 col-md-9 col-lg-9 mt-5">

                    <a class="card shadow-sm" href="{{ route('blog.article', [$article]) }}">

                        <div class="card-body">

                            <h2>{{ $article->title }}</h2>
                            @if ($article->subtitle)
                                <h3>{{ $article->subtitle }}</h3>
                            @endif

                            <p class="text-muted">{{ \App\format_date($article->date) }}</p>
                            <p>{!! nl2br(e($article->summary)) !!}</p>

                            <em class="read-more">Read more...</em>

                        </div>

                    </a>

                </div>

            @endforeach

        </div>

    </div>

@endsection
