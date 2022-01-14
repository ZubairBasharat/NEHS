
@if(isset($all))
@foreach($all as $alls)
    <tr>
    <td>{{$alls->project}}</td>
    <td>{{$alls->location}}</td>
    <td><a class="btn btn-warning btn-sm" href="{{url('personel/dellocations/'.$alls->id)}}">Remove</a></td>
</tr>
@endforeach
    @endif
