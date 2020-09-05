@extends('layouts.admin')

@section('page')
index
@endsection

@section('admin-content')

    <div class="row">

        <div class="col-12">
            <div class="card shadow-sm">
                <div class="card-header">
                    <h4>Articles ({{ $articles->count() }})</h4>
                </div>
                <div class="card-body">

                    <a class="btn btn-primary btn-sm" href="{{ route('admin.articles.create') }}">
                        <span class="fas fa-plus-circle"></span> New Article
                    </a>

                    <hr>

                    <table class="table table-bordered table-hover">
                        <thead class="thead-dark">
                            <tr>
                                <th style="width: 100px;">Date</th>
                                <th style="width: 100px;">Published</th>
                                <th>Title</th>
                                <th>Author</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach ($articles as $article)
                                <tr>
                                    <td>{{ \App\format_date($article->date) }}</td>
                                    <td class="text-center">
                                        @if ($article->published)
                                            <span class="far fa-check-square"></span>
                                        @else
                                            <span class="far fa-square"></span>
                                        @endif
                                    </td>
                                    <td>
                                        <a href="{{ route('admin.articles.show', [$article]) }}">{{ $article->title }}</a>
                                    </td>
                                    <td>
                                        {{ $article->author->name }}
                                    </td>
                                </tr>
                            @endforeach
                        </tbody>
                    </table>
                </div>
            </div>
        </div>

    </div>

@endsection
