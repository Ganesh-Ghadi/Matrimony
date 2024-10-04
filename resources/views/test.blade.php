<x-app-layout>

    
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
</x-app-layout>
