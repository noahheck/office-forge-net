@extends('layouts.admin')

@section('page')
index
@endsection

@section('admin-content')

    <div class="row">

        <div class="col-12">
            <div class="card shadow-sm ">
                <div class="card-header">
                    <h4>Subscribers ({{ $subscribers->count() }})</h4>
                </div>
                <div class="card-body">
                    <table class="table table-bordered table-hover">
                        <thead class="thead-dark">
                            <tr>
                                <th>Email</th>
                                <th style="width: 100px;">Verified</th>
                                <th style="width: 125px;">Action</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach ($subscribers as $subscriber)
                                <tr>
                                    <td>
                                        {{ $subscriber->email }}
                                    </td>
                                    <td class="text-center">
                                        @if ($subscriber->verified)
                                            <span class="text-success far fa-check-circle"></span>
                                        @else
                                            <form action="{{ route('admin.subscribers.verify', [$subscriber]) }}" method="POST">
                                                @csrf
                                                <button type="submit" class="btn btn-sm btn-outline-info">
                                                    <span class="fas fa-check-circle"></span> Verify
                                                </button>
                                            </form>
                                        @endif
                                    </td>
                                    <td class="text-center">
                                        <form action="{{ route('admin.subscribers.destroy', [$subscriber]) }}" method="POST" class="delete-subscriber-form">
                                            @csrf
                                            @method('DELETE')
                                            <button type="submit" class="btn btn-sm btn-outline-danger">
                                                <span class="fas fa-times-circle"></span> Delete
                                            </button>
                                        </form>
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
