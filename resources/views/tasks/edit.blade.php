@extends('layouts.app')
@section('content_create_page')
    <h1 class="text-center my-5"> Editare task</h1>
    <div class="px-2 py-1 my-1 text-center col-lg-6 mx-auto">
        @if($errors->any())
        <div class="alert alert-danger">
            <ul class="list-group">
                @foreach($errors->all() as $error)
                    <li class="list-group-item">
                        {{ $error }}
                    </li>
                @endforeach
            </ul>
        </div>
        @endif
        <form action="/tasks/{{ $task->id }}/update-task" method="POST">
            @csrf
            <div class="mb-3">
                <label for="InputText" class="form-label taskName">Nume task</label>
                <input type="text" class="form-control" aria-describedby="textTitleHelp" name="name" value="{{ $task->name }}">
                <div id="textTitleHelp" class="form-text">Numele task-ului dumneavoastra.</div>
            </div>
            <div class="form-floating taskDescriptio">
                <textarea class="form-control" id="textareaSize" placeholder="Descriere task" id="floatingTextarea" name="description">{{ $task->description }}</textarea>
                <label for="floatingTextarea">Descriere task</label>
            </div>
            <br>
            <button type="submit" class="btn btn-primary">Actualizare task</button>
        </form>
    </div>
@endsection