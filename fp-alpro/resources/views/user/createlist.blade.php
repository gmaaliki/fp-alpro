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
<h2>Create Your List!</h2>
<form action="{{ route('tasklist.store', $account_id) }}" method="post" enctype="multipart/form-data">
    @csrf
  <ul>
    <li>
      <label for="Name">Name:</label>
      <input type="text" name="task_name" />
    </li>
    <li>
      <label for="Desc">Description:</label>
      <input type="text" name="task_desc" />
    </li>
    <li>
    <input type="submit" value="Create List" />
    </li>
  </ul>
</form>


</body>
</html>
