@extends('main')
@section('content')

<!DOCTYPE html>
<html>
  <head>
    <title> Sign Up</title>
    <link rel="stylesheet" type="text/css" href="signup.css">
    <link rel="apple-touch-icon" sizes="180x180" href="favicon/apple-touch-icon.png">
    <link rel="icon" type="image/png" sizes="32x32" href="favicon/favicon-32x32.png">
    <link rel="icon" type="image/png" sizes="16x16" href="favicon/favicon-16x16.png">
    <link rel="manifest" href="favicon/site.webmanifest">
    <style>
        body {
            background-color: #B7C4CF;
        }
        .hover-effect:hover {
            background-color: #EEE3CB;
        }

        table {
            transition: transform 0.2s ease-in-out;
        }

        table:hover {
            transform: translateY(-10px);
        }
    </style>
</head>
<br/>
<br/>
<body align="center">
    <table cellspacing="2" align="center" cellpadding="8" border="0">
        <tr>
            <td colspan="2">
                <h1>Sign Up</h1>
            </td>
        </tr>
        <tr>
            <td class ="left-align">Name</td>
            <td class="left-align">
                <input type="text" placeholder="Enter your name" id="n1" class="hover-effect" />
            </td>
        </tr> 
        <tr>
            <td class ="left-align">Email</td>
            <td class="left-align">
                <input type="text" placeholder="Enter your email id" id="e1" class="hover-effect" />
            </td>
        </tr>
        <tr>
            <td class ="left-align">Set Password</td>
            <td class="left-align">
                <input type="password" placeholder="Set a password" id="p1" class="hover-effect" />
            </td>
        </tr>
        <tr>
            <td class ="left-align">Confirm Password</td>
            <td class="left-align">
                <input type="password" placeholder="Confirm your password" id="p2" class="hover-effect"/>
            </td>
        </tr>
        <tr>
            <td colspan="2">
                <input type="submit" value="Create" onClick="create_account(event)" />
            </td>
        </tr>
    </table>
    
    <script type="text/javascript">
        function create_account(event) {
            event.preventDefault(); // prevent form submission
            var n = document.getElementById("n1").value;
            var e = document.getElementById("e1").value;
            var p = document.getElementById("p1").value;
            var cp = document.getElementById("p2").value;
            //Code for password
            var letters = /^[A-Za-z]+$/;
            var email_val = /^([a-zA-Z0-9_\.\-])+\@(([a-zA-Z0-9\-])+\.)+([a-zA-Z0-9]{2,4})+$/;
            //other validations required code
        if (n == "" || e == "" || p == "" || cp == "") {
          alert("Enter each details correctly");
        } else if (!letters.test(n)) {
          alert("Name is incorrect must contain alphabets only");
        } else if (!email_val.test(e)) {
          alert("Invalid email format please enter valid email id");
        } else if (p != cp) {
          alert("Passwords not matchihng");
        } else if (document.getElementById("p1").value.length < 6) {
          alert("Password minimum length is 6");
        } else {
          alert("Your account has been created successfully... Redirecting to JavaTpoint.com");
          window.location = "https://www.javapoint.com/";
        }
      }
    </script>
  </body>
</html>


@endsection