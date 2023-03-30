<!DOCTYPE html>
<html>
<head>
  <style>
	<title>Daftar Tugas</title>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
   <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@400;500;600;700&display=swap" rel="stylesheet">
	<style>
		body {
			font-family: Poppins, sans-serif;
			font-size: 16px;
			line-height: 1.5;
			background-color: #f2f2f2;
			padding: 20px;
		}

		h1 {
			font-size: 32px;
			font-weight: bold;
			text-align: center;
			margin-bottom: 20px;
		}

		ul {
			list-style: none;
			padding: 0;
			margin: 0;
		}

		li {
			background-color: #fff;
			padding: 20px;
			border-radius: 10px;
			margin-bottom: 20px;
			box-shadow: 0 2px 5px rgba(0, 0, 0, 0.1);
		}

		li:last-child {
			margin-bottom: 0;
		}

		li h2 {
			font-size: 24px;
			font-weight: bold;
			margin: 0 0 10px 0;
		}

		li p {
			margin: 0;
		}
		
		.add-task {
			text-align: center;
			margin-top: 20px;
		}
		
		.add-task button {
			background-color:  #F33A6A;
			border: none;
			color: white;
			padding: 10px 20px;
			text-align: center;
			text-decoration: none;
			display: inline-block;
			font-size: 16px;
			margin: 4px 2px;
			cursor: pointer;
			border-radius: 10px;
		}
	</style>
</head>
<body>
<div class="list-container">
    <h1>Daftar Tugas</h1>
    <ul class="task-box overflow">
        @if(isset($tasklists) && count($tasklists)>0)
            @foreach($tasklists as $i => $tasklist)
                @if($tasklist->user_id == $account_id)
                <li class="tasklist">
                    <h2>{{ $i+1 }} <a href="{{ route('task.index', ['account_id' => $account_id, 'list_id' => $tasklist->tasklist_id]) }}">{{ $tasklist->tasklist_name }}</a></h2>
                    <p>{{ $tasklist->tasklist_desc }}</p>
                    
                    <div class="buttons" style="display: flex;">
                        <div class="add-task">
                            <button onclick="location.href='{{ route('tasklist.create', ['account_id' => $account_id]) }}'">Edit</button>
                        </div>
                        <div class="add-task">
                            <form action="{{ route('tasklist.destroy', ['account_id' => $account_id, 'list_id' => $tasklist->tasklist_id]) }}" method="POST">
                                @csrf
                                @method('DELETE')
                                <button type="submit" class="clear-btn">Delete</button>
                            </form>
                        </div>
                    </div>
                </li>
                @endif
            @endforeach
        @endif
    </ul>   
    <div class="add-task">
        <button onclick="location.href='{{ route('tasklist.create', ['account_id' => $account_id]) }}'">+</button>
    </div>
</div>
</body>
</html>
