@extends('main')
@section('content')
<div class="wrapper">
<form action="{{ route('home', ['account_id' => $account_id]) }}" method="POST">
    @csrf
    <div class="task-input add-task">
      <img src="bars-icon.svg" alt="+">
      <input type="text" name="task_name" placeholder="Add a new task">
      @error('task_name')
        <div class="alert alert-danger">
            {{ $task_name }}
        </div>
      @enderror
      <input type="submit" value="Submit">
    </div>
</form>
  <div class="controls">
    <div class="filters">
      <span class="active" id="all">All</span>
      <span id="pending">On Going</span>
      <span id="completed">Finished</span>
    </div>
    
    <button class="clear-btn">Clear All</button>
  </div>

  <ul class="task-box"></ul>
  
</div>
<script src="script.js"></script>
@endsection