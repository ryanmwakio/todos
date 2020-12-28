@extends('layouts.app')

@section('content')
    <a href="/" class="btn btn-outline-danger btn-sm col-sm-12 col-md-3">Go back</a>

    <div class="card p-2 mt-2">
    <div class="col-sm-12 col-md-9">
        <h3>{{ $todo->title }}</h3>
        <p class="bg-dark btn-sm text-white">Due:&nbsp;{{ $todo->due }}</p>
        <hr>
        <p class="card-body border-left border-right border-danger">{{ $todo->body }}</p>
        <hr>
        <div class="row justify-content-center">
             <a href="/todo/{{ $todo->id }}/edit" class="btn btn-primary col-4 m-2">Edit</a>
             <div class="col-4 m-2">
             <form action="/destroy/{{ $todo->id }}" method="post">
                @csrf
                 <input type="submit" value="Done" class="btn btn-success col-12">
             </form>
            </div>
       </div>
    </div>
    </div>
@endsection
