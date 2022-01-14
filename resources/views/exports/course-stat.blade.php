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

        <th>Employee Name</th>
        <th>Course</th>
        <th>Result</th>
        <th>Correct</th>
        <th>Wrong</th>
        <th>Total</th>
        <th>Q's Attempts</th>
    </tr>
    </thead>
    <tbody>
    @foreach($data as $datas)
        <tr>
            <td>{{worker_by_id($datas->worker_id)->first_name}} {{worker_by_id($datas->worker_id)->last_name}}</td>
            <td>{{course_byid($datas->course_id)->name}}</td>
            <td>{{$datas->grade}}</td>
            <td>{{$datas->correct}}</td>
            <td>{{$datas->wrong}}</td>
            <td >{{$datas->total}}</td>
            <td >{{$datas->attempt}}</td>
        </tr>
    @endforeach
    </tbody>
    </center>
</table>
</body>
</html>
