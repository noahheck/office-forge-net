@extends('layouts.admin')

@section('page')
index
@endsection

@section('admin-content')

    <div class="row">

        <div class="col-12">
            <div class="card shadow-sm">
                <div class="card-header page-card-header">
                    <h4>Mailings ({{ $mailings->count() }})</h4>
                </div>
                <div class="card-body">

                    <a class="btn btn-primary btn-sm" href="{{ route('admin.mailings.create') }}">
                        <span class="fas fa-plus-circle"></span> New Mailing
                    </a>

                    <hr>

                    <div class="table-responsive">

                        <table class="table table-bordered table-hover">
                            <thead class="thead-dark">
                                <tr>
                                    <th style="width: 100px;">Date</th>
                                    <th style="width: 100px;">Sent</th>
                                    <th>Subject</th>
                                </tr>
                            </thead>
                            <tbody>
                                @foreach ($mailings as $mailing)
                                    <tr>
                                        <td>{{ \App\format_date($mailing->sent_at) }}</td>
                                        <td class="text-center">
                                            @if ($mailing->sent_at)
                                                <span class="far fa-check-square"></span>
                                            @else
                                                <span class="far fa-square"></span>
                                            @endif
                                        </td>
                                        <td>
                                            <a href="{{ route('admin.mailings.show', [$mailing]) }}">{{ $mailing->subject }}</a>
                                        </td>
                                    </tr>
                                @endforeach
                            </tbody>
                        </table>

                    </div>

                </div>
            </div>
        </div>

    </div>

@endsection
