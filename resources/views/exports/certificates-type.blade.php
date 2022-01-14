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
            <th>Created_at</th>
        </tr>
        </thead>
        <tbody>
        @foreach($data as $datas)
            <tr>

                <td>{{$datas->name}}</td>
                <td >{{$datas->created_at}}</td>

            </tr>
        @endforeach
        </tbody>
    </center>
</table>
</body>
</html>
