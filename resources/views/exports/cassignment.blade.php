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

            <th>Course</th>
            <th>Title</th>
            <th>Description</th>
            <th>Type</th>
            <th>Created At</th>

        </tr>
        </thead>
        <tbody>
        @foreach($data as $datas)
            <tr>
                <td>{{course_byid($datas->course_id)->name}}</td>
                <td>{{$datas->title}}</td>
                <td>{{$datas->description}}</td>
                <td>{{$datas->type}}</td>
                <td >{{$datas->created_at}}</td>

            </tr>
        @endforeach
        </tbody>
    </center>
</table>
</body>
</html>
