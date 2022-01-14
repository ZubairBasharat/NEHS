<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
</head>
<body>

<table>
    <thead>
    <tr>

        <th>Name</th>
        <th>Email</th>
        <th>Created Date</th>
    </tr>
    </thead>
    <tbody>
    @foreach($users as $user)
        @if($user->hasRole('User') || $user->hasRole('Admin'))
            @else
        <tr>
            <td>{{ $user->name }}</td>
            <td>{{ $user->email }}</td>
            <td>{{ $user->created_at }}</td>

        </tr>
        @endif
    @endforeach
    </tbody>
</table>
</body>
</html>
