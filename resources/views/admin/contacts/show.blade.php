@extends('layouts.admin')

@section('page')
admin-mailings-show
@endsection

@push('scripts')
    <script src="{{ mix('js/admin.mailings.show.js') }}"></script>
@endpush

@section('admin-content')

    <div class="row">

        <div class="col-12">

            <div class="card shadow mb-5">
                <div class="card-body">

                    <div class="row">

                        <div class="col-12 col-lg-6 col-xl-7">
                            <h1 class="h2">{!! ($contact->name) ? e($contact->name) : '&lt;no name&gt;' !!}</h1>
                        </div>
                        <div class="col-12 col-lg-6 col-xl-5 d-flex justify-content-end">
                            <form action="{{ route('admin.contacts.unread', [$contact]) }}" method="POST">
                                @csrf
                                <button type="submit" class="btn btn-sm btn-outline-secondary">
                                    Mark as Unread
                                </button>
                            </form>
                            @if ($contact->completed)
                                <form action="{{ route('admin.contacts.uncomplete', [$contact]) }}" method="POST">
                                    @csrf
                                    <button type="submit" class="btn btn-sm btn-outline-dark ml-2">
                                        Mark as Un-completed
                                    </button>
                                </form>
                            @else
                                <form action="{{ route('admin.contacts.complete', [$contact]) }}" method="POST">
                                    @csrf
                                    <button type="submit" class="btn btn-sm btn-outline-dark ml-2">
                                        Mark as Completed
                                    </button>
                                </form>
                            @endif
                        </div>
                    </div>

                    <hr>

                    <dl>

                        <dt>Name</dt>
                        <dd>{{ $contact->name }}</dd>

                        <dt>Business</dt>
                        <dd>{{ $contact->business }}</dd>

                        <dt>Email</dt>
                        <dd>{{ $contact->email }}</dd>

                        <dt>Phone</dt>
                        <dd>{{ $contact->phone }}</dd>

                    </dl>

                    @if ($contact->message)

                        <hr>

                        <strong>Message</strong>

                        <br>

                        {!! nl2br(e($contact->message)) !!}

                    @endif

                </div>
            </div>

            <h4>Notes:</h4>
            <hr>

            @foreach ($contact->notes as $note)

                @if ($loop->first)
                    <div class="notes">
                @endif

                <div class="note">
                    <strong>{{ $note->createdBy->name }}</strong> - {{ App\format_datetime($note->created_at) }}

                    <div class="editor-content pl-3">
                        {!! App\safe_text_editor_content($note->note) !!}
                    </div>
                </div>

                @if($loop->last)
                    </div>
                    <hr>
                @endif

            @endforeach

            <form action="{{ route('admin.contacts.notes.store', [$contact]) }}" method="POST">
                @csrf

                @textEditorField([
                    'name' => 'note',
                    'id' => 'note',
                    'label' => 'Add a note for this Contact',
                    'required' => true,
                    'value' => old('note', ''),
                    'placeholder' => 'Enter your note text here',
                    'description' => '',
                    'toolbar' => 'full',
                    'resourceType' => get_class($contact),
                    'resourceId' => $contact->id,
                ])

                <br>

                <button type="submit" class="btn btn-primary">
                    Add Note
                </button>

            </form>

        </div>

    </div>

@endsection
