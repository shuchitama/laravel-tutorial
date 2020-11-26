@extends('todos.layout')

@section('content')
<div class="flex justify-center">
  <h1 class="text-2xl">Edit todo</h1>
  <a href="/todos" class="mx-5 py-1 px-1 bg-blue-400 cursor-pointer rounded text-white">Back</a>
</div>
{{ $todo->title }}
@endsection