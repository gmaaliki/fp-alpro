@extends('main')
@section('content')
<div class="wrapper">
@include('sidebar')
<form action="{{ route('task.store', ['account_id' => $account_id, 'list_id' => $list_id]) }}" method="POST">
    @csrf
    <div class="task-input add-task">
      <img src="bars-icon.svg" alt="+">
      <input type="text" name="task_name" placeholder="Add a new task">
      @error('task_name')
        <div class="alert alert-danger">
            {{ $task_name }}
        </div>
      @enderror
      <button type="submit" id="submit-btn">Submit</button>
    </div>
</form>
  <div class="controls">
    <div class="filters">
      <span class="active" id="all">All</span>
      <span id="pending">On Going</span>
      <span id="completed">Finished</span>
    </div>
    
    <form action="{{ route('task.destroyall', ['account_id' => $account_id, 'list_id' => $list_id]) }}" method="POST">
      @csrf
      @method('DELETE')
      <button type="submit" class="clear-btn">Clear All</button>
    </form>
  </div>
  <ul class="task-box overflow">
    @if(isset($tasks) && count($tasks)>0)
    @foreach($tasks as $task)
      @if($task->tasklist_id == $list_id)
      <li class="task">
          <label for="{{ $task->task_id }}">
              <input onclick="updateStatus(this)" type="checkbox" id="{{ $task->task_id }}" {{ $task->task_status == "completed" ? "checked" : "" }}>
              <p class="{{ $task->task_status }}">{{ $task->task_name }}</p>
          </label>
          <div class="settings">
              <i onclick="showMenu(this)" class="uil uil-ellipsis-h"></i>
              <ul class="task-menu">
                <li onclick='editTask({{ $task->task_id }}, "{{ $task->task_name }}")'><i class="uil uil-pen"></i>Edit</li>
                  <form action="{{ route('task.destroy', ['account_id' => $account_id, 'list_id' => $list_id, 'task_id' => $task->task_id]) }}" method="POST">
                    @csrf
                    @method('DELETE')
                    <button type="submit"><i class="uil uil-trash"></i>Delete</button>
                  </form>
              </ul>
          </div>
      </li>
      @endif
    @endforeach
    @endif
  </ul>
</div>
@endsection