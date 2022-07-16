@extends('layouts.app')

@section('pageTitle')
    Lista de task-uri    
@endsection

@section('content_wellcome_page')
    <div class="px-4 py-5 my-5 text-center col-lg-8 mx-auto">
        <img class="d-block mx-auto mb-4" src="https://cdn.pixabay.com/photo/2020/01/21/18/39/todo-4783676_960_720.png" alt="" width="250" id="appImage">
        <h1 class="display-5 fw-bold">Lista de task-uri</h1>
        <ul class="nav justify-content-center">
            <li class="nav-item">
                <a class="nav-link" href="/add-task">Adaugă task</a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="/tasks">Vezi toate task-urile</a>
            </li>
        </ul>
    </div>
@endsection