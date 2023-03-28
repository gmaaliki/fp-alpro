<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <title>TaskMate</title>
    <link rel="stylesheet" href="{{ URL::asset('style.css') }}" />
    <link rel="stylesheet" href="https://unicons.iconscout.com/release/v4.0.0/css/line.css">
    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>

  </head>
    @include('navbar')
    @include('sidebar')
    @yield('content')
  <script type="text/javascript" src="{{ URL::asset('script.js') }}"></script>

  </body>
</html>