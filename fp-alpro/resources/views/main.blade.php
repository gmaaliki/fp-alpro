<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>To Do List</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css">
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"></script>
    <style type="text/css">
        html, body {
                height: 100%;
                margin: 0;
        }

        /* Blum bisa */
        .height-adjust {
            min-height: 100%; 
        }
    </style>

</head>
<body>
    @include('navbar')
    <div class="container-fluid height-adjust">
        <div class="row" style="height: 600px">
        @include('sidebar')
        @yield('content')
        </div>
    </div>
</body>
</html>
