

@foreach($res as $re)

<div class="col-md-4">
    <div class="row">
        <div class="col-md-1">
            @if(Auth::user()->hasRole('Admin'))
            <form action="{{ route('admin-resources.destroy',$re->id)}}" method="post">
                @csrf
                @method('DELETE')
                <button type="submit" style="border:white !important;"><i class="fa fa-trash" ></i></button>
            </form>
                @endif
        </div>
        <div class="col-md-11">
            <h4><a
                    @if(Auth::user()->hasRole('Admin'))
                    href="{{route('admin-resources.edit',$re->id)}}"
                    @else
                    href="{{route('um-resource.show',$re->id)}}"
                    @endif
                    style="cursor:pointer; color:lightskyblue;"   target="_blank" >
                    {{$re->name}}</a>
            </h4>
        </div>

    </div>

</div>

@endforeach
