<div class="card-toolbar">

    @php
    $temp=\App\Models\EmailTemplates::find(3);
    @endphp
    {!! $temp->descr !!}
    <h3>Your email: {{$email}}</h3>
    <h3>Your password: {{$password}}</h3>
    <h3><a href="{{asset('/login')}}">Click Here</a> To Login And Verify Your Account</h3>
</div>
