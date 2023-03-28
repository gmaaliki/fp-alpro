@extends('main')
@section('content')

<html>
<head>
  <title>Login Form</title>
  <link rel="stylesheet" type="text/css" href="login.css">
  <link rel="apple-touch-icon" sizes="180x180" href="favicon/apple-touch-icon.png">
  <link rel="icon" type="image/png" sizes="32x32" href="favicon/favicon-32x32.png">
  <link rel="icon" type="image/png" sizes="16x16" href="favicon/favicon-16x16.png">
  <link rel="manifest" href="favicon/site.webmanifest">
</head>
<style>
        body {
            background-color: #A9907E;
            transition: background-color 0.2s ease-in-out;
        }

        body:hover {
            background-color: #F3DEBA;
        }

        .hover-effect:hover form {
            background-color: #ABC4AA;
        }

        table {
            transition: transform 0.2s ease-in-out;
        }

        table:hover {
            transform: translateY(-10px);
        }
</style>
<body>
  <div style="display: flex; justify-content: center; align-items: center; height: 100vh;">
    <form id="login_form" onsubmit="submit_form()">
      <h3 style="text-align: center; font-size: 35px;">Login</h3>
      <div class="form-group">
        <label for="username">Username</label>
        <input type="text" id="username" name="username" placeholder="Enter your email id" class="hover-effect">
      </div>
      <div class="form-group">
        <label for="password">Password</label>
        <input type="password" id="password" name="password" placeholder="Enter your password" class="hover-effect">
      </div>
      <div class="form-group" style="text-align: center;">
        <input type="submit" value="Login">
        <input type="button" value="Sign Up" onClick="create()">
      </div>
    </form>
  </div>
  <script type="text/javascript">
    function submit_form(){
      alert("Login successfully");
    }
    function create(){
      window.location = "signup.html";
    }
  </script>
</body>
</html>

@endsection