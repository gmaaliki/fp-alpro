@extends('main')
@section('content')
<div class="wrapper">
      <div class="task-input add-task">
        <img src="bars-icon.svg" alt="+">
        <input type="text" placeholder="Add a new task">
      </div>
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
@endsection