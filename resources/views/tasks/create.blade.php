@extends('layouts.app')

@section('pageTitle')
    Adăugare task
@endsection

@section('navigation')
    @include('components.navigation')
@endsection

@section('content_create_page')
    <h1 class="text-center my-5">Adăugare task</h1>
    <div class="px-2 py-1 my-1 text-center col-lg-6 mx-auto">
        <form action="/store-task" method="POST">
            @csrf
            @error('name')
                <div class="alert alert-danger" role="alert">
                    @if ($message == "The name field is required.")
                        Trebuie să completați numele task-ului!
                    @elseif ($message == "The name must be at least 6 characters.")
                        Numele task-ului trebuie să aibă cel puțin 6 caractere.
                    @elseif ($message == "The name must not be greater than 20 characters.")
                        Numele task-ului trebuie să nu aibă mai mult de 20 de caractere.
                    @elseif ($message == "The name has already been taken.")
                        Numele task-ului există deja în listă! Trebuie să alegi alt nume.
                    @endif
                </div> 
            @enderror
            <div class="mb-3">
                <label for="InputText" class="form-label taskName">Nume task</label>
                <input type="text" class="form-control" aria-describedby="textTitleHelp" name="name" value="{{ old('name') }}">
                <div id="textTitleHelp" class="form-text">Numele task-ului dumneavoastra.</div>
            </div>
            @error('description')
                <div class="alert alert-danger" role="alert">
                    @if ($message == "The description field is required.")
                        Trebuie să completați descrierea task-ului!
                    @endif
                </div> 
            @enderror
            <div class="form-floating taskDescription">
                <textarea class="form-control" id="textareaSize" placeholder="Descriere task" id="floatingTextarea" name="description">{{ old('description') }}</textarea>
                <label for="floatingTextarea">Descriere task</label>
            </div>
            <br>
            <button type="submit" class="btn btn-primary">Adaugă task</button>
        </form>
    </div>
@endsection