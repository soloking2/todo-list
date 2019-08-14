@extends('layouts.app')

@section('content')
<div class="col-lg-8 mx-auto mt-3">
  <h1>Create Todo</h1>
  <form action="{{ route('todo.store')}}" method="post" style="width:80%">
      {{ csrf_field() }}

      <div class="form-group">
        <label for="title">Enter Text</label>
        <input type="text" name="text"
        class="form-control" spellcheck="false" required placeholder="Enter text"/>
      </div>
      <div class="form-group">
        <label for="body">Body</label>
        <textarea name="body" rows="5" cols="8" class="form-control" spellcheck="false" required placeholder="Enter message"></textarea>
      </div>
      <div class="form-group">
        <label for="due">Due date</label>
        <input type="text" name="due"
        class="form-control" spellcheck="false" required placeholder="Enter due date"/>
      </div>
      <div class="form-group">
        <input type="submit" name="sub" value="Submit" class="btn btn-secondary btn-lg">
      </div>
  </form>
</div>

@endsection
