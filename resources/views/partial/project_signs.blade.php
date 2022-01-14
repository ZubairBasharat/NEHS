

<table class="table" >
    <thead>
    <tr>

        <th>User</th>
        <th>Email</th>
        <th>Role</th>
        <th>view signs</th>
        <th>Date/Time</th>
        <th ></th>



    </tr>
    </thead>
    <tbody>
@foreach($data as $signs)
    <tr>
        <td>{{$signs->user->name}}</td>
        <td>{{$signs->user->email}}</td>
        <td>{{$signs->user->roles->pluck('name')}}</td>
        <td>@if($signs->sign == '') Read But Not Signed @else <img src="{{$signs->sign}}" style="height:60px; width:140px;"> @endif   </td>
        <td>{{$signs->updated_at}}</td>
        <td></td>
    </tr>

@endforeach
    </tbody>
</table>
