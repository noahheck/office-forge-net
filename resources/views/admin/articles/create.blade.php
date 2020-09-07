@extends('layouts.admin')

@section('page')
index
@endsection

@section('admin-content')

    <div class="row">

        <div class="col-12">
            <div class="card shadow-sm">
                <div class="card-header page-card-header">
                    <h4>New Article</h4>
                </div>
                <div class="card-body">

                    @include('admin.articles._form', [
                        'action' => route('admin.articles.store'),
                    ])

                </div>
            </div>
        </div>

    </div>

@endsection
