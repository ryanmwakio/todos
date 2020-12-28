@extends('layouts.app')

@section('content')
    <h5>Create Todo</h5>
    <div class="col-sm-12 col-md-8">
        <hr>
        <form action="/store" method="post">
            @csrf
            <div class="form-group">
                <label for="title" class="label-control">Title:</label>
                <input type="text" name="title" id="title" class="form-control">
            </div>
            <div class="form-group">
                <label for="body" class="label-control">Body:</label>
                <textarea name="body" id="body" class="form-control" cols="30" rows="10" placeholder="Enter your todo..."></textarea>
            </div>
            <div class="form-group">
                <label for="due" class="label-control">Due:</label>
                <input type="text" name="due" id="due" class="form-control">
            </div>
            <div class="form-group">
                <input type="submit" value="submit" name="submit" class="btn btn-danger">
            </div>
        </form>
        <hr>
   </div>
@endsection
