<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
    @if(Session::get('success'))
        {{Session::get('success')}}

    @else 
        {{Session::get('fail')}}
    @endif
    <form class="modal-content" method="post" action="CreateUserFc">
        @csrf
            <div class="container">
                <h1>Sign Up</h1>
                <p>Please fill in this form to create an account.</p>
                <hr>
                <label for="email"><b>Email</b></label>
                <input type="text" placeholder="Enter Email" name="email" required>
                <br><br>
                <label for="username"><b>UserName</b></label>
                <input type="text" placeholder="Enter UserName" name="username" required>
                <br><br>
                <label for="psw"><b>Password</b></label>
                <input type="password" placeholder="Enter Password" name="password" required>
                <br><br>
                <label for="psw-repeat"><b>Repeat Password</b></label>
                <input type="password" placeholder="Repeat Password" name="password-repeat" required>
                <br><br>
                <div class="clearfix">
                    <button type="button" onclick="window.location='{{ url("/") }}'" class="cancelbtn">Cancel</button>
                    <button type="submit" class="signupbtn" name="submit">Sign Up</button>
                </div>
            </div>
        </form>
</body>
</html>