@extends('layouts.admin')

@section('page')
index
@endsection

@section('admin-content')

    <div class="row">

        <div class="col-12">
            <div class="card shadow-sm ">
                <div class="card-header d-flex">
                    <h4 class="flex-grow-1">
                        Contacts - {{ $contacts->count() }}
                        @if ($newContactsCount = $contacts->where('unread', true)->count())
                            ({{ $newContactsCount }} New)
                        @endif
                    </h4>
                    @if(!$showingCompleted)
                        <div class="flex-grow-0">
                            <a href="{{ route('admin.contacts.index', ['withCompleted' => '1']) }}">
                                Show Completed
                            </a>
                        </div>
                    @endif
                </div>
                <div class="card-body">
                    <table class="table table-bordered table-hover">
                        <thead class="thead-dark">
                            <tr>
                                <th>&nbsp;</th>
                                <th>Name</th>
                                <th>Business</th>
                                <th>Email</th>
                                <th>Phone</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach ($contacts as $contact)
                                <tr>
                                    <td class="text-center">
                                        @if ($contact->unread)
                                            <span class="fas fa-exclamation text-primary"></span>
                                        @endif
                                    </td>
                                    <td>
                                        <a href="{{ route('admin.contacts.show', [$contact]) }}">{!! ($contact->name) ? e($contact->name) : "<em>&lt;no name&gt;</em>" !!}</a>
                                    </td>
                                    <td>
                                        {{ $contact->business }}
                                    </td>
                                    <td>
                                        {{ $contact->email }}
                                    </td>
                                    <td>
                                        {{ $contact->phone }}
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
