<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" crossorigin="anonymous">
  <title>Todos</title>
</head>
<body>
  <h1>Todos Page</h1>
  <ul>
  @foreach($todos as $todo)
    <li>
    Name: {{ $todo->name }}
    desc: {{ $todo->description }}
    </li>
  @endforeach
  </ul>
</body>
</html>