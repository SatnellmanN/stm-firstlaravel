<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Show Data</title>
</head>
<body>
    <form class="modal-content" method="post" action="">
        <div style="width:100%;text-align:right">
            sessin Id : @if(session()->has('ssusername')) {{session('ssusername')}} @endif
        </div>
        <h1>All Employees</h1>
        
            <table border="1" cellpadding="0" cellspacing="0">
                <thead>
                    <tr>
                        <td>No.</td>
                        <td>Name</td>
                        <td>Email</td>
                    </tr>
                </thead>
                <tbody>
                   
                @foreach ($data as $item)
                <tr>
                    <td class="txtCenter">
                        {{$no++}}
                    </td>
                    <td>
                        {{$item->firstname}} {{$item->lastname}}
                    </td>
                    <td>
                        {{$item->email}}
                    </td>
                    </tr>
                @endforeach
                
                
                </tbody>
            </table>
            <br>
            <a href="index">Back</a>
            </form>
</body>
</html>