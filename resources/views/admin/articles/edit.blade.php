@extends('layouts.admin')

@section('page')
admin-articles-edit
@endsection

@section('admin-content')

    <div class="row">

        <div class="col-12">
            <div class="card shadow-sm">
                <div class="card-header">
                    <h4>Edit Article</h4>
                </div>
                <div class="card-body">

                    @include('admin.articles._form', [
                        'action' => route('admin.articles.update', [$article]),
                        'method' => 'PUT',
                    ])

                </div>
            </div>
        </div>

    </div>

@endsection
