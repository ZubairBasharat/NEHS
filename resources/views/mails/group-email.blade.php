<div class="card-toolbar">

    @php
        $temp=\App\Models\EmailTemplates::find(11);
    @endphp
    {!! $temp->descr !!}
    <h3>Group Name:<span style="color: blue">{{$assign_course_name}}</span></h3>
    <h3><a href="{{asset('/login')}}">Click Here</a> To Login and View</h3>
</div>
