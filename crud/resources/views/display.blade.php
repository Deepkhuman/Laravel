<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Document</title>
</head>
<body>
  <center>
    <h1>Student</h1>

    <table border="1">
      <tr>
        <th>Name</th>
        <th>Email</th>
        <th>Password</th>
        <th>Edit</th>
        <th>Delete</th>
      </tr>
      @foreach($data as $data)
      <tr>
        <td>{{$data->name}}</td>
        <td>{{$data->email}}</td>
        <td>{{$data->password}}</td>
        <td><a href="/edit/{{$data->id}}">Edit</a></td>
        <td><a href="/delete/{{$data->id}}">Delete</a></td>
      </tr>
      @endforeach
    </table>
    </table>
  </center>
</body>
</html>