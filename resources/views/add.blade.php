@extends('layouts.app')

@section('content')
<div class="container">
        <h2>Add New Task</h2>
         
<form method="POST" action="/task">

  <div class="form-group">
    <textarea name="description" class="form-control"></textarea>  
    @if ($errors->has('description'))
      <span class="text-danger">{{ $errors->first('description') }}</span>
    @endif
  </div>


  <div class="form-group">
    <button type="submit" class="btn btn-primary">Add Task</button>
  </div>
{{ csrf_field() }}
</form>


</div>
@endsection