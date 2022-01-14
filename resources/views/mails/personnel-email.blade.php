<div class="card-toolbar">

    @php
        $temp=\App\Models\EmailTemplates::find(8);
    @endphp
    {!! $temp->descr !!}
    <h3>Your email: {{$assign_user_email}}</h3>
    <h3>Assigned Course Name:<span style="color: blue">{{$assign_course_name}}</span></h3>
    <h3><a href="{{asset('/login')}}">Click Here</a> To View</h3>
</div>
