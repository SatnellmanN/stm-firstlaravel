<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
    <div style="width:100%;text-align:right">
        sessin Id : @if(session()->has('ssusername')) {{session('ssusername')}} @endif
        </div>
        <form class="modal-content" method="post" action="storeEmployee">
            @csrf
            @if(Session::get('success'))
            {{Session::get('success')}}
            @else 
            {{Session::get('fail')}}
            @endif
            <table>
                <thead>
                    <tr>
                        <td>Colunm</td>
                        <td>Information</td>
                    </tr>
                </thead>
                <tbody>
                    <tr>
                        <td>
                            First Name :
                        </td>
                        <td>
                            <input type="text" placeholder="Enter First Name" name="firstname" required>
                        </td>
                    </tr>
                    <tr>
                        <td>
                            Last Name :
                        </td>
                        <td>
                            <input type="text" placeholder="Enter Last Name" name="lastname" required>
                        </td>
                    </tr>
                    <tr>
                        <td>
                            Email :
                        </td>
                        <td>
                            <input type="text" placeholder="Enter Email" name="email">
                        </td>
                    </tr>
                    <tr>
                        <td>
                        <button type="submit" name="submit">Add</button>
                        </td>
                    </tr>
                </tbody>
            </table>
            <br>
            <a href="index">Back</a>
            </form>
    
</body>
</html>