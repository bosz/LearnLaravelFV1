<!DOCTYPE html>
<html>
<head>
  <title>All users</title>
  <style type="text/css">
    li {
      line-height: 3;
    }
  </style>
</head>
<body>
  <h1>All event users</h1>
  <ul>
    @foreach($users as $index => $user)
    <li> 
      <a href="{{ route('user', ['name' => $user]) }}">
        {{ $index }}: {{ $user->name }}
      </a>

      --- 

      <a href="{{ route('edit-user', ['id' => $user->id]) }}">Edit</a>
    </li>
    @endforeach
  </ul>
</body>
</html>