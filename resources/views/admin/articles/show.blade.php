@extends('layouts.admin')

@section('page')
admin-articles-show
@endsection

@section('admin-content')

    <div class="row">

        <div class="col-12">

            <div class="d-flex">

                <h1 class="flex-grow-1">{{ $article->title }}</h1>

                <div class="flex-grow-0 ">
                    <a class="btn btn-primary btn-sm" href="{{ route('admin.articles.edit', [$article]) }}">
                        <span class="fas fa-edit mr-2"></span>Edit
                    </a>
                </div>

            </div>


            @if ($article->subtitle)
                <h3>{{ $article->subtitle }}</h3>
            @endif

            <h5 class="text-muted">{{ $article->slug }}</h5>

            <h5>
                @if ($article->published)
                    <span title="Published" class="far fa-check-square"></span>
                @else
                    <span title="Not published" class="far fa-square"></span>
                @endif
                {{ \App\format_date($article->date) }} - {{ $article->author->name }}
            </h5>

            <hr>

            <h5>Summary:</h5>

            <p>{!! nl2br(e($article->summary)) !!}</p>

            <hr>

            <div class="editor-content">
                {!! App\safe_text_editor_content($article->content) !!}
            </div>

        </div>

    </div>

@endsection
