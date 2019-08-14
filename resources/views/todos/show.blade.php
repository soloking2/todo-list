@extends('layouts.app')

@section('content')
<div class="col-lg-8 col-md-8">
  <a class="btn btn-secondary m-2" href="/">Go Back</a>
  <div class="card card-default p-4 mb-4">
    <h3 class="mt-3">{{ $todo->text }}</h3>
    <span class="text-white bg-secondary p-1 text-center" style="font-size:14px; width:20%;">{{ $todo->due }}</span>
    <hr/>
    <p class="lead">{{ $todo->body }}</p>
  </div>

</div>
<div class="col-lg-4 col-md-4 mt-2">
  <ol class="list-unstyled">
    <li><a href="/todo/{{ $todo->id }}/edit" class="btn btn-secondary mt-2" style="width:22%;">Edit</a></li>
    <li>
      <form action="{{ route('todo.destroy',[$todo->id])}}" method="post">
            {{ csrf_field() }}
          <input type="hidden" name="_method" value="delete">
          <input type="submit" name="sub" class="btn btn-secondary mt-2" style="width:22%;" value="Delete">
      </form>
    </li>
  </ol>
</div>
@endsection
