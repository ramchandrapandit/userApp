<!DOCTYPE html>
<html>
<head>
    <title>Laravel User App</title>
</head>
<body>
    <h1>User Management</h1>

    <form action="{{ route('users.store') }}" method="POST">
        @csrf
        <input type="text" name="name" placeholder="Name" required>
        <input type="email" name="email" placeholder="Email" required>
        <input type="password" name="password" placeholder="password" required>
        <button type="submit">Add User</button>
    </form>

    <h2>All Users:</h2>
    <ul>
        @foreach ($users as $user)
            <li>{{ $user->name }} ({{ $user->email }}) ({{$user->password}})</li>
        @endforeach
    </ul>
</body>
</html>
