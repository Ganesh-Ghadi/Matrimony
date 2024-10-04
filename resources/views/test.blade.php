<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
    
    <h2>Roles</h2>
    @foreach ($roles as $role)
        <p>{{ $role->name }}</p>
    @endforeach
    
    <h2>Permissions</h2>
    @foreach ($permissions as $permission)
        <p>{{ $permission->name }}</p>
    @endforeach
    
    <h2>Users</h2>
    @foreach ($users as $user)
        <p>{{ $user->name }}</p>
    @endforeach
    
    <h1>Hello</h1>
    
</body>
</html>