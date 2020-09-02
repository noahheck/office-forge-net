@extends('layouts.admin')

@section('page')
index
@endsection

@section('admin-content')

    <div class="row">

        <div class="col-12 col-md-6">
            <div class="card shadow-sm admin-overview-card">
                <div class="card-header">
                    <h4>Subscribers ({{ $subscriberCount }})</h4>
                </div>
                <a class="card-body" href="{{ route('admin.subscribers.index') }}">
                    <span class="fas fa-envelope icon"></span>
                </a>
            </div>
        </div>

    </div>

@endsection
