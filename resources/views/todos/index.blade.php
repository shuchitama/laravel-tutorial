@extends('todos.layout')

@section('content')
<div class="flex justify-between px-4 border-b pb-4">
  <h1 class="text-2xl px-10">All your Todos</h1>
  <a href="{{ route('todo.create') }}" class="py-2 text-blue-400 cursor-pointer text-white">
    <span class="fas fa-plus-circle" />
  </a>
</div>
<ul class="my-5">
  <x-alert />
  @foreach($todos as $todo)
  <li class="flex justify-between p-2">
    <div>@include('todos.completeButton')</div>

    @if($todo->completed)
    <p class="line-through">{{ $todo->title }}</p>
    @else
    <p>{{ $todo->title }}</p>
    @endif

    <div>
      <a href="{{ route('todo.edit', $todo->id) }}">
        <span class="fas fa-edit text-yellow-400 cursor-pointer px-2" />
      </a>

      <span onclick="event.preventDefault(); 
      if(confirm('Do you really want to delete?')){
      document.getElementById('form-delete-{{ $todo->id }}').submit()}"
        class="fas fa-trash text-red-400 cursor-pointer px-2" />
      <form style="display:none;" id="{{ 'form-delete-'.$todo->id }}" method="post"
        action="{{route('todo.destroy', $todo -> id)}}">
        @csrf
        @method('delete')
      </form>
    </div>

  </li>
  @endforeach
</ul>
@endsection