<div class="card-toolbar">


    <table class="datatable table-bordered" >
        <thead>
        <tr>

            <th title="Field #1" >User</th>
            <th title="Field #2">Role</th>
            <th title="Field #3">view signs</th>


        </tr>
        </thead>
        <tbody>

        @php
        $allsign=\App\Models\Admin\ToolboxSignature::where('file_id',7)->get();
        function base64_to_jpeg($base64_string, $output_file) {
            // open the output file for writing
            $ifp = fopen( $output_file, 'wb' );

            // split the string on commas
            // $data[ 0 ] == "data:image/png;base64"
            // $data[ 1 ] == <actual base64 string>
            $data = explode( ',', $base64_string );

            // we could add validation here with ensuring count( $data ) > 1
            fwrite( $ifp, base64_decode( $data[ 1 ] ) );

            // clean up the file resource
            fclose( $ifp );

            return $output_file;
        }
        @endphp
        @if(count($allsign) > 0)
        @foreach($allsign as $signs)
            @php
                $image = base64_to_jpeg($signs->sign,public_path('signs/').$signs->user->name.'.png');
            @endphp

            <tr>

                <td>{{$signs->user->name}}</td>
                <td>{{$signs->user->roles->pluck('name')}}</td>
                <td><img src="{{asset('signs')}}/{{$signs->user->name}}.png"></td>

            </tr>
        @endforeach
            @else
            <tr>
                <td>No</td>
                <td>Sign</td>
                <td>On This</td>
            </tr>
            @endif



        </tbody>
    </table>
</div>
