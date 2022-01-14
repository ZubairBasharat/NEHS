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
        <th>Content Type</th>
        <th>Category</th>
        <th>Department</th>
    </tr>
    </thead>
    <tbody>
    @foreach($data as $datas)
        <tr>
            <td>{{ $datas->name }}</td>
            <td>{{ $datas->description }}</td>
            <td>@if(course_cat_byid($datas->cat_id) != ''){{course_cat_byid($datas->cat_id)->name}} @endif</td>
            <td>@if(departments_byid($datas->department_id) != ''){{departments_byid($datas->department_id)->name}} @endif</td>

        </tr>
    @endforeach
    </tbody>
    </center>
</table>
</body>
</html>
