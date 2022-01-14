

<br>
<h1 class="back-to-cat" style="cursor: pointer;"><i class="fa fa-backward"></i> Back</h1>
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

    $('.back-to-cat').click(function () {

        $('.category').show();
        $('.videos').css('display','none');

    });
</script>
