

@php
    $counterr=0;
    $video_completed=0;
    $form_completed=0;


@endphp
@if($type == 'video')
@foreach($data as $v)
    @if($counterr == $counter )
        @if(count($data) == ($counter+1))
            @php $video_completed=1; @endphp
            @endif

        @php
            $api_key = "AIzaSyAPQKBhoyH0cgY_kCOA_91uqOKpjCFz6A4";
        $video_id =$v->file;
        $url = "https://www.googleapis.com/youtube/v3/videos?id=$video_id&key=$api_key&part=snippet,contentDetails,statistics,status";

        $json = file_get_contents($url);
        $getData = json_decode( $json , true);

        if ($getData['items'] != []){
        foreach((array)$getData['items'] as $key => $gDat){
            $timee = $gDat['contentDetails']['duration'];
        }


        $time=ISO8601ToSeconds($timee);
        }else{
            $time=0;
        }

        @endphp

        <input class="vtime" type="hidden"  value="{{($time-($resumetime))}}">
        <input class="vid" type="hidden" value="{{$v->file}}">
       <div style="overflow: auto !important;">
           <div id="player" ></div>
       </div>


        <div id="countdown"></div>



        <button class="btn btn-success" type="button" onclick="pplay()">play</button>
        <button class="btn btn-warning" type="button" onclick="ppause()">pause</button>
        <button class="btn btn-info" type="button" onclick="sstop()">Reset</button>
        <button class="btn btn-danger" type="button" onclick="mmute()">Mute</button>
        <button class="btn btn-primary" type="button" onclick="unmute()">Unmute</button>
        <button class="btn btn-primary" type="button" onclick="toglefullscreen()">Full Screen</button>
        <input  type="range" min="1" max="100" value="30" id="myRange" >
        <p>Volumne: <span id="demo"></span></p>

        <div class="timer">
            <span class="hour">00</span>:<span class="minute">00</span>:<span class="second">10</span>
        </div>
        @if($video_completed == 1)
            <button type="button" class="btn btn-info video_next" id="countdown" >Next</button>

        @else

            <button type="button" class="btn btn-info next" data-type="video">Next Video</button>

        @endif



    @endif
    @php $counterr++; @endphp
@endforeach
    @endif
@if($type == 'ack_form')

    @foreach($data1 as $v2)
        @if($counterr == $counter )
            @if(count($data1) == ($counter+1))
                @php $form_completed=1;

                @endphp
            @endif

        @php $file=\App\Models\Form::find($v2->form_id); @endphp
        <iframe src="{{asset('/images/assignments/acknowledgment')}}/{{$file->file_name}}" width="600px" height="2100px" />
       @endif
       @php $counterr++; @endphp
        @endforeach


        <center>
            <div class="form-group row text-align-left">
                <label class="col-12 col-form-label text-left">I Read and Agree</label>
               
                           <span class="switch switch-outline switch-icon switch-success" >
                            <label >
                             <input type="checkbox"  id="i_agree" onclick="agree()">
                             <span></span>
                            </label>
                           </span>
               
            </div>
        </center>

            @if($form_completed == 1)
                <button type="button" class="btn btn-info file_next"  >Next</button>

            @else

                <button type="button" class="btn btn-info next " data-type="ack_form">Next File</button>

            @endif
    @endif

@if($type == 'video')
<script>
    // 2. This code loads the IFrame Player API code asynchronously.
    var tag = document.createElement('script');
    tag.src = "https://www.youtube.com/iframe_api";
    var firstScriptTag = document.getElementsByTagName('script')[0];
    firstScriptTag.parentNode.insertBefore(tag, firstScriptTag);

    // 3. This function creates an <iframe> (and YouTube player)
    //    after the API code downloads.
    var player;
    function onYouTubeIframeAPIReady() {
        var vid = $('.vid').val();
        var restime = parseInt($('#resumetime').val());
        player = new YT.Player('player', {

            videoId: vid,

            playerVars: {
                fs: 1,
                controls: 0, // Show pause/play buttons in player
                showinfo: 0, // Hide the video title
                disablekb:1,
                modestbranding: 0, // Hide the Youtube Logo
                cc_load_policy: 1, // Hide closed captions
                iv_load_policy: 2, // Hide the Video Annotations
                start: restime,
                autohide: 1, // Hide video controls when playing
            },
            events: {
                'onReady': onPlayerReady,
                'onStateChange': onPlayerStateChange
            }
        });
    }

    // 4. The API will call this function when the video player is ready.
    function onPlayerReady(event) {
        event.target.pauseVideo();


    }



    // 5. The API calls this function when the player's state changes.
    //    The function indicates that when playing a video (state=1),
    //    the player should play for six seconds and then stop.
    var done = false;
    function onPlayerStateChange(event) {

        if (event.data == YT.PlayerState.PLAYING) {
            pplay();
            // setTimeout(stopVideo, 6000);
            // done = true;
        }else if(event.data == YT.PlayerState.PAUSED){
            ppause();
        }

    }
    function stopVideo() {
        player.stopVideo();

    }
    function pplay() {
        player.playVideo();

        var timeleft = parseInt($('.vtime').val());
        timer.start(1000);

    }
    function sstop() {
        player.stopVideo();
        player.playVideo();
        timer.reset(parseInt($('.vtime').val()));

    }
    function ppause() {
        timer.stop();
        player.pauseVideo();
    }
    function mmute() {

        player.mute();
        console.log(player.getPlayerState());
    }
    function unmute() {

        player.unMute();

    }
    function playFullscreen (){

       return document.FullScreenElement
            || document.mozFullScreenElement
            || document.webkitFullScreenElement
            || document.msFullScreenElement ;

    }
    function toglefullscreen(){

        if(playFullscreen()){
            document.exitFullscreen();

        }else{
            document.getElementById('player').requestFullscreen().catch(console.log);
        }
    }
    // document.addEventListener("dblclick",()=>{
    //     toglefullscreen();
    // })

    // requestFullScreen


    function _timer(callback)
    {
        var time = 0;     //  The default time of the timer
        var mode = 1;     //    Mode: count up or count down
        var status = 0;    //    Status: timer is running or stoped
        var timer_id;    //    This is used by setInterval function

        // this will start the timer ex. start the timer with 1 second interval timer.start(1000)
        this.start = function(interval)
        {
            interval = (typeof(interval) !== 'undefined') ? interval : 1000;

            if(status == 0)
            {
                status = 1;
                timer_id = setInterval(function()
                {
                    switch(mode)
                    {
                        default:
                            if(time)
                            {
                                time--;
                                generateTime();
                                if(typeof(callback) === 'function') callback(time);
                            }
                            break;

                        case 1:
                            if(time < 86400)
                            {
                                time++;
                                generateTime();
                                if(typeof(callback) === 'function') callback(time);
                            }
                            break;
                    }
                }, interval);
            }
        }

        //  Same as the name, this will stop or pause the timer ex. timer.stop()
        this.stop =  function()
        {
            if(status == 1)
            {
                status = 0;
                clearInterval(timer_id);
            }
        }

        // Reset the timer to zero or reset it to your own custom time ex. reset to zero second timer.reset(0)
        this.reset =  function(sec)
        {
            sec = (typeof(sec) !== 'undefined') ? sec : 0;
            time = sec;
            generateTime(time);
        }

        // Change the mode of the timer, count-up (1) or countdown (0)
        this.mode = function(tmode)
        {
            mode = tmode;
        }

        // This methode return the current value of the timer
        this.getTime = function()
        {
            return time;
        }

        // This methode return the current mode of the timer count-up (1) or countdown (0)
        this.getMode = function()
        {
            return mode;
        }

        // This methode return the status of the timer running (1) or stoped (1)
        this.getStatus
        {
            return status;
        }

        // This methode will render the time variable to hour:minute:second format
        function generateTime()
        {
            var second = time % 60;
            var minute = Math.floor(time / 60) % 60;
            var hour = Math.floor(time / 3600) % 60;

            second = (second < 10) ? '0'+second : second;
            minute = (minute < 10) ? '0'+minute : minute;
            hour = (hour < 10) ? '0'+hour : hour;

            $('div.timer span.second').html(second);
            $('div.timer span.minute').html(minute);
            $('div.timer span.hour').html(hour);
        }
    }

    // example use
    var timer;


    var slider = document.getElementById("myRange");
    var output = document.getElementById("demo");



    output.innerHTML = slider.value;

    slider.oninput = function() {
        output.innerHTML = this.value;
        player.setVolume(this.value);
    }
    var timeleft = parseInt($('.vtime').val());
    timer = new _timer
    (
        function(time)
        {
            // console.log(player.getPlayerState());
            if(time == 0)
            {
                timer.stop();
                $('.video_next').show();
                $('.next').show();
            }
        }
    );
    timer.reset(timeleft);
    timer.mode(0);


</script>

@endif

<script>




    $(document).ready(function(e)
    {



        $('.file_next').hide();
        $('.video_next').hide();
        $('.next').hide();

        $('.next').click(function () {

            var c_id = $('#c_id').val();
            var counter = $('#counter').val();
            if ($(this).data('type') == 'video'){

                var urrl = "{{url('usertests')}}/" + c_id + "?v=" + counter;
            window.location.href = urrl;
        }
            if ($(this).data('type') == 'ack_form'){
                synctest($(this).data('type'));

            }

        });

        $('.video_next').click(function () {

            @if(count($data1) > 0)
            $('#counter').val(0);
            $('#video_v').hide();
            $('#ack-file').show();
            $('#question_v').hide();
            synctest('ack_form');
            @elseif(count($data2) > 0)
            $('#video_v').hide();
            $('#ack-file').hide();
            $('#question_v').show();
            @else
            // alert('test submit');
            $('#testform').submit();
            @endif
        });

        $('.file_next').click(function () {

            @if(count($data2) > 0)
            $('#video_v').hide();
            $('#ack-file').hide();
            $('#question_v').show();
            @else
            alert('test submit');
            $('#testform').submit();
            @endif
        });




    });


    function agree() {
        var checkBox = document.getElementById("i_agree");

        if (checkBox.checked == true){
            $('.next').show();
            $('.file_next').show();
        } else {
            $('.next').hide();
            $('.file_next').hide();
        }
    }



</script>


