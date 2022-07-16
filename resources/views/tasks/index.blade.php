@extends('layouts.app')

@section('content_index_page')

@section('navigation')
    @include('components.navigation')
@endsection

@section('pageTitle')
    Pagina cu task-uri
@endsection

@section('content_index_page')
    <h1 class="text-center my-5">Pagina cu task-uri</h1>
    <div class="card card-default">
        <div class="card-header">Listă task-uri:</div>
        <div class="card-body">
            <ul class="list-group">   
                @foreach($tasks as $task)
                <li class="list-group-item">
                    {{ $task->name }}
                    @if ($task->completed == false)
                        <a href="/tasks/{{ $task->id }}/complete" class="btn btn-warning btn-sm float-end">Am rezolvat</a>
                    @endif
                    <a href="/tasks/{{ $task->id }}" class="btn btn-primary btn-sm float-end">Vezi detalii</a>
                </li>
                @endforeach
            </ul>
        </div>
    </div> 
@endsection