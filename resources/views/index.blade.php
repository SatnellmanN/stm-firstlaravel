<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
    <h1>Welcome : @if(session()->has('ssusername')){{session('ssusername')}}@endif</h1>
    <p><a href="AddEmployee">Add Employee</a></p>
    
    <p><a href="ShowEmployee">Show Employee</a></p>
    <br>
    <br>
    <br>
    <a href="Logoutss">Logout</a>
</body>
</html>