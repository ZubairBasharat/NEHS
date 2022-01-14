
<table width="100%" class="table table-striped">

    @if($show == 'gr')
        <thead>
        <tr>
            <th>Name</th>
            <th>DEscription</th>
            <th>Action</th>

        </tr>
        </thead>

        <tbody class="w-100" >
        @php  $groups=\App\Models\Group::where('status',1)->get(); @endphp
    @foreach($groups as $datas)

        <tr class="w-100">

            <td>{{$datas->name}}</td>
            <td>{{$datas->descr}}</td>
            <td>
                @if(check_user_has_this_group($datas->id,$user_id) > 0)
                <button class="btn btn-success remove-g-c" data-actionn="remove" data-wid="{{$user_id}}" data-gid="{{$datas->id}}">Remove</button>
                @else
                    <button class="btn btn-secondary remove-g-c" data-actionn="add" data-wid="{{$user_id}}" data-gid="{{$datas->id}}">Include</button>

                @endif
            </td>

        </tr>
    @endforeach
    @endif


    @if($show == 'eq')
            <thead>
            <tr>
                <th>Course</th>
                <th>Result</th>
                <th>View Certicate</th>
                <th>Assign to User</th>

            </tr>
            </thead>

            <tbody class="w-100" >
    @foreach($data as $datas)
        <tr class="w-100">

            <td>{{course_byid($datas->course_id)->name}}</td>
            <td>{{$datas->grade}}</td>
            <td>
                @if($datas->assign == 0)
                    <a  class="btn btn-warning" >Not Assigned</a>
                    @else
                <form action="{{route('usercertificate.show',$datas->course_id)}}" method="get">

                    <input type="hidden" name="c_id" value="{{$datas->course_id}}">
                    <input type="hidden" name="t_id" value="{{$datas->id}}">

                    <button class="btn btn-info" type="submit">View</button>

                </form>
                    @endif
            </td>
            <td>
                @if($datas->assign == 1)
                    <a  class="btn btn-success" >Assigned</a>
                @else
            <a href="{{route('assigned.certificate',$datas->id)}}" class="btn btn-primary" >Assign+</a>
                        @endif
                        </td>

        </tr>
    @endforeach
    @endif


    @if($show == 'course')
        <tr>
            <th>COURSE NAME</th>
            <th>CATEGORY</th>
            <th>CONTENT TYPES</th>
            <th>Action</th>
        </tr>
    @foreach($data as $datas)
        @if(count_course_assignments($datas->id) > 0)
        <tr class="w-100">

            <td>{{$datas->name}}</td>
            <td>@if(course_cat_byid($datas->cat_id) !=''){{course_cat_byid($datas->cat_id)->name}}@endif</td>
            <td>{{count_course_type($datas->id)}}</td>
            <td>

                @if(check_user_has_this_course($datas->id,$user_id) < 1)
                    <form action="assign-single" method="post">
                        @csrf
                        <input type="hidden" name="course_id" value="{{$datas->id}}">
                        <input type="hidden" name="w_id" value="{{$user_id}}">
                        <input type="hidden" name="type" value="add">
                <button type="submit" class="btn btn-primary">Assign</button>
                    </form>
                    @else
                    <form action="assign-single" method="post">
                        @csrf
                        <input type="hidden" name="course_id" value="{{$datas->id}}">
                        <input type="hidden" name="w_id" value="{{$user_id}}">
                        <input type="hidden" name="type" value="remove">
                    <button type="submit" class="btn btn-secondary">Remove</button>
                    </form>
                    @endif
            </td>

        </tr>
        @endif

    @endforeach
        @endif
    </tbody>
</table>
<script>

    $('.remove-g-c').click(function () {

        var v_token = "{{csrf_token()}}";
        var group_id = $(this).data('gid');
        var worker_id = $(this).data('wid');
        var actionn = $(this).data('actionn');
        $.ajax({
            type: "Post",
            url:"{{route('manager.add_remove.group')}}",
            data:{group_id:group_id,worker_id:worker_id,_token:v_token,actionn:actionn},
            cache: false,
            success: function(data){
                // Usage!
               $('#user_groups').click();

            }
        });

    })



</script>
