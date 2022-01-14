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
        <th>Phone</th>
        <th>Department</th>
        <th>Gender</th>
        <th>D.O.B</th>
        <th>Type</th>
    </tr>
    </thead>
    <tbody>
    @foreach($users as $user)
        <tr>
            <td>{{ $user->first_name }} {{ $user->last_name }}</td>
            <td>{{ $user->email }}</td>
            <td>{{ $user->phone }}</td>
            <td>@if(departments_byid($user->dep_id) != ''){{departments_byid($user->dep_id)->name}} @endif</td>
            <td> @if($user->gender == 1) Male @else Female @endif </td>
            <td>{{ $user->date_of_birth }}</td>
            <td>{{ $user->type }}</td>
        </tr>
    @endforeach
    </tbody>
</table>
</body>
</html>
