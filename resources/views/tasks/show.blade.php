@extends('layouts.app')

@section('navigation')
    @include('components.navigation')
@endsection

@section('pageTitle')
    Detalii task
@endsection

@section('content_show_page')
    <h1 class="text-center my-5">
        {{ $task->name }}
    </h1>
    <div class="row justify-content-center">
        <div class="col-md-6">
            <div class="card card-default">
                <div class="card-header">Detalii:</div>
                <div class="card-body">
                    {{ $task->description }}
                </div>
            </div>
            <a href="/tasks/{{ $task->id }}/edit" class="btn btn-info btn-sm my-2">Editare</a>
            <a href="/tasks/{{ $task->id }}/delete" class="btn btn-danger btn-sm my-2">Ștergere</a>
        </div>
    </div>
@endsection