@extends('layouts.admin')

@section('page')
edit
@endsection

@section('admin-content')

    <div class="row">

        <div class="col-12">
            <div class="card shadow-sm">
                <div class="card-header page-card-header">
                    <h4>Edit Mailing</h4>
                </div>
                <div class="card-body">

                    @include('admin.mailings._form', [
                        'action' => route('admin.mailings.update', [$mailing]),
                        'method' => 'PUT',
                    ])

                </div>
            </div>
        </div>

    </div>

@endsection
