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

        <div class="col-12 col-md-6">
            <div class="card shadow-sm admin-overview-card">
                <div class="card-header">
                    <h4>Articles ({{ $articleCount }})</h4>
                </div>
                <a class="card-body" href="{{ route('admin.articles.index') }}">
                    <span class="fas fa-file-alt icon"></span>
                </a>
            </div>
        </div>

        <div class="col-12 col-md-6">
            <div class="card shadow-sm admin-overview-card">
                <div class="card-header">
                    <h4>Mailings ({{ $mailingCount }})</h4>
                </div>
                <a class="card-body" href="{{ route('admin.mailings.index') }}">
                    <span class="fas fa-paper-plane icon"></span>
                </a>
            </div>
        </div>

    </div>

@endsection
