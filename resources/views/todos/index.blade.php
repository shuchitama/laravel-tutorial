@extends('todos.layout')

@section('content')
<div class="flex justify-between px-4 border-b pb-4">
  <h1 class="text-2xl px-10">All your Todos</h1>
  <a href="todos/create" class="py-2 text-blue-400 cursor-pointer text-white">
    <span class="fas fa-plus-circle" />
  </a>
</div>
<ul class="my-5">
  <x-alert />
  @foreach($todos as $todo)
  <li class="flex justify-between p-2">
    <div>
      @if($todo->completed)
      <span onclick="event.preventDefault(); document.getElementById('form-incomplete-{{ $todo->id }}').submit()"
        class="fas fa-check cursor-pointer text-green-400 px-2" />
      <form style="display:none;" id="{{ 'form-incomplete-'.$todo->id }}" method="post"
        action="{{route('todo.incomplete', $todo -> id)}}">
        @csrf
        @method('put')
      </form>
      @else
      <span onclick="event.preventDefault(); document.getElementById('form-complete-{{ $todo->id }}').submit()"
        class="fas fa-check text-gray-300 cursor-pointer px-2" />
      <form style="display:none;" id="{{ 'form-complete-'.$todo->id }}" method="post"
        action="{{route('todo.complete', $todo -> id)}}">
        @csrf
        @method('put')
      </form>
      @endif
    </div>
    @if($todo->completed)
    <p class="line-through">{{ $todo->title }}</p>
    @else
    <p>{{ $todo->title }}</p>
    @endif
    <div>
      <a href="{{ '/todos/'.$todo->id.'/edit' }}">
        <span class="fas fa-edit text-yellow-400 cursor-pointer px-2" />
      </a>
    </div>
  </li>
  @endforeach
</ul>
@endsection