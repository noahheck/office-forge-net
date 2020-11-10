@extends('layouts.admin')

@section('page')
create
@endsection

@section('admin-content')

    <div class="row">

        <div class="col-12">
            <div class="card shadow-sm">
                <div class="card-header page-card-header">
                    <h4>New Mailing</h4>
                </div>
                <div class="card-body">

                    @include('admin.mailings._form', [
                        'action' => route('admin.mailings.store'),
                    ])

                </div>
            </div>
        </div>

    </div>

@endsection
