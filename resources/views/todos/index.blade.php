@extends('layouts.app')

@section('content')
<div class="col-lg-8 mx-auto mt-2">
<h1>Todo List</h1>

@if(count($todos))
  @foreach($todos as $todo)
  <div class="card m-3 p-2">
    <h3><a href="/todo/{{ $todo->id }}">{{ $todo->text }}</a> <span class="text-white bg-secondary p-1" style="font-size:14px;">{{ $todo->due }}</span></h3>

  </div>
  @endforeach

@endif
</div>
@endsection
