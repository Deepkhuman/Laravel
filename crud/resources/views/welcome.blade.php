<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <center>
        <h1>Student registration</h1>

        <form action="{{$url}}" method="post">
            @csrf
            <input name="name" placeholder="enter name" value="{{$data->name}}"><br>
            <input name="email" placeholder="enter email" value="{{$data->email}}"><br>
            <input name="password" placeholder="enter password" value="{{$data->password}}"><br>
            <input type="submit">
        </form>
    </center>
</body>
</html>