<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
</head>
<body>

<table>
    <center>
    <thead>
    <tr>

        <th>Name</th>
        <th>ESP NAME</th>
        <th>Created Date</th>
    </tr>
    </thead>
    <tbody>
    @foreach($data as $datas)
        <tr>
            <td>{{ $datas->name }}</td>
            <td>{{ $datas->esp_name }}</td>
            <td>{{ $datas->created_at }}</td>

        </tr>
    @endforeach
    </tbody>
    </center>
</table>
</body>
</html>
