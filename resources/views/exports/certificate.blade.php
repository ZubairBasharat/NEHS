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

        <th>Course Name</th>
        <th>Type</th>
        <th>Issuer</th>
        <th>Expires</th>
        <th>Accquired</th>
        <th>Ticket</th>
    </tr>
    </thead>
    <tbody>
    @foreach($data as $datas)
        <tr>
            <td>@if(course_byid($datas->course_id) != ''){{course_byid($datas->course_id)->name}}@endif</td>
            <td>{{$datas->course_type}}</td>
            <td>{{$datas->issuer}}</td>
            <td>{{$datas->expiray_date}}</td>
            <td >{{$datas->accuqired}}</td>
            <td >{{$datas->ticket}}</td>
        </tr>
    @endforeach
    </tbody>
    </center>
</table>
</body>
</html>
