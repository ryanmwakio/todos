@extends('layouts.app')

@section('content')
<a href="/todo/{{ $todo->id }}" class="btn btn-outline-danger btn-sm col-sm-12 col-md-3 mb-2">Go back</a>
    <h5>Edit Todo</h5>
    <div class="col-sm-12 col-md-8">
        <hr>
        <form action="/update/{{ $todo->id }}" method="post">
            @csrf
            <div class="form-group">
                <label for="title" class="label-control">Title:</label>
                <input type="text" value="{{ $todo->title }}" name="title" id="title" class="form-control">
            </div>
            <div class="form-group">
                <label for="body" class="label-control">Body:</label>
                <textarea name="body" id="body" class="form-control" cols="30" rows="10" placeholder="Enter your todo...">{{ $todo->body }}</textarea>
            </div>
            <div class="form-group">
                <label for="due" class="label-control">Due:</label>
                <input type="text" name="due" value="{{ $todo->due }}" id="due" class="form-control">
            </div>
            <div class="form-group">
                <input type="submit" value="Edit" name="edit" class="btn btn-danger">
            </div>
        </form>
        <hr>
   </div>
@endsection
