@extends('layouts.admin')

@section('page')
admin-mailings-show
@endsection

@section('admin-content')

    <div class="row">

        <div class="col-12">

            <div class="d-flex">

                <h1 class="flex-grow-1">{{ $mailing->subject }}</h1>

                <div class="flex-grow-0 ">
                    <a class="btn btn-primary btn-sm" href="{{ route('admin.mailings.edit', [$mailing]) }}">
                        <span class="fas fa-edit mr-2"></span>Edit
                    </a>
                </div>

            </div>

            <hr>

            <h5>
                @if ($mailing->hasBeenSent())
                    <span title="Sent" class="far fa-check-square"></span>
                    Sent - {{ \App\format_datetime($mailing->sent_at) }}
                @else
                    <span title="Not sent" class="far fa-square"></span>
                    Not Sent
                    <form class="d-inline" action="{{ route('admin.mailings.send', [$mailing]) }}" method="POST">
                        @csrf
                        <button type="submit" class="btn btn-sm btn-outline-success">
                            <span class="fas fa-paper-plane"></span> Send to {{ $subscriberCount }} subscribers now
                        </button>
                    </form>
                @endif
            </h5>


            <div class="card shadow mb-5">
                <div class="card-body">

                    <div class="editor-content">
                        {!! App\safe_text_editor_content($mailing->body_html) !!}
                    </div>

                </div>
            </div>

            <div class="text-right">

                <form action="{{ route('admin.mailings.destroy', [$mailing]) }}" method="POST" class="delete-form" data-delete-item="Mailing">
                    @csrf
                    @method('DELETE')

                    <button type="submit" class="btn btn-sm btn-danger">
                        <span class="fas fa-trash"></span> Delete Mailing
                    </button>
                </form>

            </div>

        </div>

    </div>

@endsection
