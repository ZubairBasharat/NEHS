@extends('layout.dash1')

@section('header-mobile')
    <!--begin::Logo-->
    <a href="#">
        <img alt="Logo" src="{{asset('assets/media/logos/logo-light.png')}}" class="img-fluid" />
    </a>
    <!--end::Logo-->
    <!--begin::Toolbar-->
    <div class="d-flex align-items-center">
        <!--begin::Aside Mobile Toggle-->
        <button class="btn p-0 burger-icon burger-icon-left" id="kt_aside_mobile_toggle">
            <span></span>
        </button>
        <!--end::Aside Mobile Toggle-->
        <!--begin::Header Menu Mobile Toggle-->
        <button class="btn p-0 burger-icon ml-4" id="kt_header_mobile_toggle">
            <span></span>
        </button>
        <!--end::Header Menu Mobile Toggle-->
        <!--begin::Topbar Mobile Toggle-->
        <button class="btn btn-hover-text-primary p-0 ml-2" id="kt_header_mobile_topbar_toggle">
                <span class="svg-icon svg-icon-xl">
                    <!--begin::Svg Icon | path:assets/media/svg/icons/General/User.svg-->
                    <svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" width="24px" height="24px" viewBox="0 0 24 24" version="1.1">
                        <g stroke="none" stroke-width="1" fill="none" fill-rule="evenodd">
                            <polygon points="0 0 24 0 24 24 0 24" />
                            <path d="M12,11 C9.790861,11 8,9.209139 8,7 C8,4.790861 9.790861,3 12,3 C14.209139,3 16,4.790861 16,7 C16,9.209139 14.209139,11 12,11 Z" fill="#000000" fill-rule="nonzero" opacity="0.3" />
                            <path d="M3.00065168,20.1992055 C3.38825852,15.4265159 7.26191235,13 11.9833413,13 C16.7712164,13 20.7048837,15.2931929 20.9979143,20.2 C21.0095879,20.3954741 20.9979143,21 20.2466999,21 C16.541124,21 11.0347247,21 3.72750223,21 C3.47671215,21 2.97953825,20.45918 3.00065168,20.1992055 Z" fill="#000000" fill-rule="nonzero" />
                        </g>
                    </svg>
                    <!--end::Svg Icon-->
                </span>
        </button>
        <!--end::Topbar Mobile Toggle-->
    </div>
    <!--end::Toolbar-->
@endsection

@section('button-toggle-mobile')
    <!--begin::Toggle-->
    <button class="brand-toggle btn btn-sm px-0" id="kt_aside_toggle">
        <span class="svg-icon svg-icon svg-icon-xl">
            <!--begin::Svg Icon | path:assets/media/svg/icons/Navigation/Angle-double-left.svg-->
            <svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" width="24px" height="24px" viewBox="0 0 24 24" version="1.1">
                <g stroke="none" stroke-width="1" fill="none" fill-rule="evenodd">
                    <polygon points="0 0 24 0 24 24 0 24" />
                    <path d="M5.29288961,6.70710318 C4.90236532,6.31657888 4.90236532,5.68341391 5.29288961,5.29288961 C5.68341391,4.90236532 6.31657888,4.90236532 6.70710318,5.29288961 L12.7071032,11.2928896 C13.0856821,11.6714686 13.0989277,12.281055 12.7371505,12.675721 L7.23715054,18.675721 C6.86395813,19.08284 6.23139076,19.1103429 5.82427177,18.7371505 C5.41715278,18.3639581 5.38964985,17.7313908 5.76284226,17.3242718 L10.6158586,12.0300721 L5.29288961,6.70710318 Z" fill="#000000" fill-rule="nonzero" transform="translate(8.999997, 11.999999) scale(-1, 1) translate(-8.999997, -11.999999)" />
                    <path d="M10.7071009,15.7071068 C10.3165766,16.0976311 9.68341162,16.0976311 9.29288733,15.7071068 C8.90236304,15.3165825 8.90236304,14.6834175 9.29288733,14.2928932 L15.2928873,8.29289322 C15.6714663,7.91431428 16.2810527,7.90106866 16.6757187,8.26284586 L22.6757187,13.7628459 C23.0828377,14.1360383 23.1103407,14.7686056 22.7371482,15.1757246 C22.3639558,15.5828436 21.7313885,15.6103465 21.3242695,15.2371541 L16.0300699,10.3841378 L10.7071009,15.7071068 Z" fill="#000000" fill-rule="nonzero" opacity="0.3" transform="translate(15.999997, 11.999999) scale(-1, 1) rotate(-270.000000) translate(-15.999997, -11.999999)" />
                </g>
            </svg>
            <!--end::Svg Icon-->
        </span>
    </button>
    <!--end::Toolbar-->
@endsection


@section('subheader')
    <!--begin::Subheader-->
    <div class="subheader py-2 py-lg-4 subheader-solid" id="kt_subheader">
        <div class="container-fluid d-flex align-items-center justify-content-between flex-wrap flex-sm-nowrap">
            <!--begin::Info-->
            <div class="d-flex align-items-center flex-wrap mr-1">
                <!--begin::Page Heading-->
                <div class="d-flex align-items-baseline mr-5">
                    <!--begin::Page Title-->
                    <h5 class="text-dark font-weight-bold my-2 mr-5 text-uppercase">Choose One Option Of Each Question Carefully</h5>
                    <!--end::Page Title-->

                </div>
                <!--end::Page Heading-->
            </div>
            <!--end::Info-->
            <div class="d-flex align-items-center">
                <!--begin::Actions-->
                <a style="cursor:pointer" class="btn btn-success font-weight-bold" onclick="submit_res_form()">Continue Later</a>
                <!--end::Actions-->

            </div>
        </div>
    </div>
    <!--end::Subheader-->
@endsection

@section('dashboard')
    <!--begin::Entry-->

    <!--begin::Container-->
    {{--        <form class="form" action="{{route('usertests.store')}}" method="post" id="testform">--}}
    <form class="form" action="{{url('home')}}"  >

        <input type="hidden" id="c_id"  value="{{$c_id}}">
        <input type="hidden" id="counter"  value="0">

        <div class="container">

            @if(count($videos) > 0 OR count($ack_form) > 0)
                <div class=" col-md-10 mx-auto d-block">

                    @if(count($videos) > 0)
                        <div class="card" id="video_v">

                            <div class="card-body" >
                                @php $counter=0; @endphp
                                @foreach($videos as $v)
                                    @if($counter < 1)

                                        {{--                        <video src="{{ URL::to('/') }}/images/assignments/video/{{$v->file}}" autoplay class="img-fluid" style="width:100%; height:100%;">--}}
                                        {{--                        </video>--}}
                                        <style>
                                            iframe{
                                                pointer-events: none !important;
                                            }
                                            @media screen and (min-width: 480px) {
                                                iframe{
                                                    /*width: 275px !important;*/
                                                }
                                            }

                                        </style>

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

                                        function ISO8601ToSeconds($ISO8601){
                                        $interval = new \DateInterval($ISO8601);

                                        return ($interval->d * 24 * 60 * 60) +
                                            ($interval->h * 60 * 60) +
                                            ($interval->i * 60) +
                                            $interval->s;
                                            }
                                        $time=ISO8601ToSeconds($timee);
                                        }else{
                                            $time=0;
                                        }

                                        @endphp
                                        <input type="hidden" id="vtime" value="{{$time}}">
                                        <input type="hidden" id="vid" value="{{$v->file}}">
                                        <div id="player"></div>

                                        <div id="countdown"></div>



                                        <button class="btn btn-success" type="button" onclick="pplay()">play</button>
                                        <button class="btn btn-warning" type="button" onclick="ppause()">pause</button>
                                        <button class="btn btn-info" type="button" onclick="sstop()">Reset</button>
                                        <button class="btn btn-danger" type="button" onclick="mmute()">Mute</button>
                                        <button class="btn btn-primary" type="button" onclick="unmute()">Unmute</button>
                                        <input type="range" min="1" max="100" value="30" id="myRange">
                                        <p>Volumne: <span id="demo"></span></p>

                                        <div class="timer">
                                            <span class="hour">00</span>:<span class="minute">00</span>:<span class="second">10</span>
                                        </div>
                                        <div class="control">
                                            {{--    <button onClick="timer.start(1000)">Start</button>--}}
                                            {{--    <button onClick="timer.stop()">Stop</button>--}}
                                            {{--    <button onClick="timer.reset({{$time}})">Reset</button>--}}

                                        </div>

                                    @endif
                                    @php $counter++; @endphp
                                @endforeach
                            </div>

                            <button type="button" class="btn btn-info next" data-type="video">N''ext Video</button>
                            <button type="button" class="btn btn-info video_next" id="countdown" >Next</button>
                        </div>

                    @endif
                    @if(count($ack_form) > 0)
                        <div class="card" id="ack-file">


                            <div class="card-body">
                                @foreach($ack_form as $v2)
                                    @php $file=\App\Models\Form::find($v2->form_id); @endphp
                                    <embed src="{{asset('/images/assignments/acknowledgment')}}/{{$file->file_name}}" width="800px" height="2100px" />
                                @endforeach
                            </div>
                            <center>
                                <div class="form-group">
                                    <label class="col-3 col-form-label">I Read and Agree</label>
                                    <div class="col-3">
                           <span class="switch switch-outline switch-icon switch-success">
                            <label>
                             <input type="checkbox"  name="select" id="i_agree" onclick="agree()">
                             <span></span>
                            </label>
                           </span>
                                    </div>
                                </div>
                            </center>
                            <button type="button" class="btn btn-info file_next" >Next</button>
                        </div>
                    @endif



                </div>
            @endif
        <!--begin::Card-->
            @if(count($questions) > 0)
                <div class="card" id="question_v">

                    <div class="card-body">
                        <?php
                        $sr=1;
                        ?>
                        @csrf

                        @foreach($questions as $question)
                            <div class="form-group row">

                                <label class="col-5 col-form-label"><h5>{{$sr}}.{{$question->question}}</h5></label>

                                <div class="col-7 col-form-label">
                                    <div class="checkbox-inline">
                                        <label class="checkbox checkbox-outline checkbox-success">
                                            <input type="radio" value="{{$question->option1}}" name="{{$question->id}}"/>
                                            <span></span>
                                            {{$question->option1}}
                                        </label>
                                        <label class="checkbox checkbox-outline checkbox-success">
                                            <input type="radio" name="{{$question->id}}"  value="{{$question->option2}}"/>
                                            <span></span>
                                            {{$question->option2}}
                                        </label>
                                        <label class="checkbox checkbox-outline checkbox-success">
                                            <input type="radio" name="{{$question->id}}"  value="{{$question->option3}}"/>
                                            <span></span>
                                            {{$question->option3}}
                                        </label>
                                        <label class="checkbox checkbox-outline checkbox-success">
                                            <input type="radio" name="{{$question->id}}"  value="{{$question->option4}}"/>
                                            <span></span>
                                            {{$question->option4}}
                                        </label>

                                    </div>

                                </div>
                            </div>
                            <hr>
                            <?php $sr++; ?>
                        @endforeach

                    </div>
                    <button type="button" class="btn btn-info q_next" >Next</button>
                </div>
        @endif
        <!--end::Card-->
        </div>
    </form>
    <form method="post" action="{{url('/usertests-resume')}}" id="res_form">

        @csrf
        <input type="hidden" value="{{$c_id}}" name="cid">
        <input type="hidden" name="start" id="res_start">
        <input type="hidden" name="end" id="res_end">
        <input type="hidden" name="type" id="res_type">
        <input type="hidden" name="countes" id="res_countes">

    </form>


    <!--end::Entry-->
@endsection
@section('js')

    <script>




        function submit_res_form(){

            $('#res_start').val(player.getCurrentTime());
            $('#res_form').submit();
        }

        function synctest(type) {

            var cid = $('#c_id').val();
            var count = $('#counter').val();

            var v_token = "{{csrf_token()}}";
            // video
            $.ajax({
                type: 'POST',
                url: "{{url('usertests-sync')}}",
                cache: false,
                data: {type: type, count: count, _token: v_token,cid:cid},
                success: function (data) {

                    if(type == 'video'){
                        $('#video_v').html();
                    }
                    if(type == 'ack_form'){
                        $('#ack-file').html();

                    }
                    if(type == 'question'){
                        $('#question_v').html();

                    }


                }


            });
        }

        $(document).ready(function () {




            $('.next').click(function () {
                synctest($(this).data('type'));
            });




            $('.file_next').hide();
            $('.video_next').hide();

            @if(count($videos) > 0 OR count($ack_form) > 0)
            @if(count($videos) > 0)



            $('#video_v').show();
            $('#ack-file').hide();
            $('#question_v').hide();



            @elseif(count($ack_form) > 0)
            $('#video_v').hide();
            $('#ack-file').show();
            $('#question_v').hide();
            @elseif(count($questions) > 0)
            $('#video_v').hide();
            $('#ack-file').hide();
            $('#question_v').show();
            @endif
            @endif





            $('.finish').click(function (e) {
                e.preventDefault();
                $('#testform').submit();
            })

        });

        $('.video_next').click(function () {

            @if(count($ack_form) > 0)
            $('#video_v').hide();
            $('#ack-file').show();
            $('#question_v').hide();
            @elseif(count($questions) > 0)
            $('#video_v').hide();
            $('#ack-file').hide();
            $('#question_v').show();
            @else
            alert('test submit');
            @endif
        });

        $('.file_next').click(function () {

            @if(count($questions) > 0)
            $('#video_v').hide();
            $('#ack-file').hide();
            $('#question_v').show();
            @else
            alert('test submit');
            @endif
        });

        $('.q_next').click(function () {
            alert('test submit');
        });


        function agree() {
            var checkBox = document.getElementById("i_agree");

            if (checkBox.checked == true){
                $('.file_next').show();
            } else {
                $('.file_next').hide();
            }
        }

    </script>






    <script>
        var slider = document.getElementById("myRange");
        var output = document.getElementById("demo");
        output.innerHTML = slider.value;

        slider.oninput = function() {
            output.innerHTML = this.value;
            player.setVolume(this.value);
        }

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

        $(document).ready(function(e)
        {
            var timeleft = parseInt(document.getElementById("vtime").value);
            timer = new _timer
            (
                function(time)
                {
                    console.log(player.getPlayerState());
                    if(time == 0)
                    {
                        timer.stop();
                        $('.video_next').show();
                    }
                }
            );
            timer.reset(timeleft);
            timer.mode(0);
        });





    </script>




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
            var vid = $('#vid').val();
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

                    // start: 10,
                    // end: 15,
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

            var timeleft = parseInt(document.getElementById("vtime").value);
            timer.start(1000);

        }
        function sstop() {
            player.stopVideo();
            player.playVideo();
            timer.reset(parseInt(document.getElementById("vtime").value));

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


    </script>
@endsection
