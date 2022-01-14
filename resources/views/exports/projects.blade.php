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
        <th>Status</th>
        <th>Created Date</th>
    </tr>
    </thead>
    <tbody>
    @foreach($projects as $project)
        <tr>
            <td>{{ $project->name }}</td>
            <td>{{ $project->status==1 ? 'Active' : 'Deactive' }}</td>
            <td>{{ $project->created_at }}</td>

        </tr>
    @endforeach
    </tbody>
</table>
</body>
</html>
