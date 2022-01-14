

<br>
<h1>Select Video</h1>
<br>
<div class="row align-center">

    @if(count($category->videos) > 0)
    @foreach($category->videos as $videos)

        <div class="col-md-4">
            <h4>
            <a  onclick="add_video(event,{{$videos->id}})" style="cursor:pointer; color:lightskyblue;"><i class="fa fa-folder"></i> {{$videos->video_title}}</a>
            </h4>
        </div>

    @endforeach
        @else
        <center> <h4>No Video Found</h4></center>
        @endif
</div>

<script>
    function add_video(event,id) {
        event.preventDefault();
        $('#v_id').val(id);
        play_video(id,'from_videos');
    }
</script>
