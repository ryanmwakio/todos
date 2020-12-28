
@extends('layouts.app')

@section('content')
    <h3>Todos</h3>

    @if (count($todos)>0)
        @foreach ($todos as $todo)
            <hr>
            <div class="card mb-2 p-2 border-right-danger border-left-danger border-radius-md">
                <h5><a href="todo/{{ $todo->id }}">{{ $todo->title }}</a></h5>
                <p class="btn btn-danger btn-sm col-md-3 col-sm-12">Due:&nbsp;{{ $todo->due }}</p>
                <hr>
                <div class="bg-dark pl-2 pt-2">
                  <p class="text-small text-white timestamp">posted {{ get_time_ago($todo->timecreated) }}</p>
                </div>
            </div>
        @endforeach
    @endif
@endsection

