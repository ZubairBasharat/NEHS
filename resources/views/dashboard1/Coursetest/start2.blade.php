@extends('layout.dash1')


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

    <style>
        iframe {
            pointer-events: none !important;

        }
      form{
        width:all !important;
      }

    </style>
    <!--begin::Entry-->

        <!--begin::Container-->
{{--        <form class="form" action="{{url('home')}}"  >--}}

            <input type="hidden" id="c_id"  value="{{$c_id}}">
            @if(isset($_GET['v']))
            <input type="hidden" id="counter"  value="{{$_GET['v']}}">
            <input type="hidden" id="resumetime"  value="0">
            <input type="hidden" id="resumetype"  value="">


            @else

                    @if($is_resume->state == 'pause')


                    <input type="hidden" id="resumetype"  value="{{($is_resume->type)}}">
                    <input type="hidden" id="resumetime"  value="{{($is_resume->start)}}">
                    <input type="hidden" id="counter"  value="{{($is_resume->vid_no)-1}}">

                @else
                        <input type="hidden" id="resumetype"  value="">

                        <input type="hidden" id="resumetime"  value="0">

                        <input type="hidden" id="counter"  value="0">

                @endif

            @endif
        <div class="container" style="width:all !important;">

            @if(count($videos) > 0 OR count($ack_form) > 0)
            <div class="row">
            <div class=" col-10 mx-auto d-block">

                @if(count($videos) > 0)
                    <div class="card" >

                        <div class="card-body" id="video_v">

                        </div>

                  </div>

                @endif
                    @if(count($ack_form) > 0)
                <div class="card" >

                    <div class="card-body" id="ack-file">

                   </div>
                </div>
                    @endif

            @endif
            <!--begin::Card-->
            @if(count($questions) > 0)
            <div class="card" id="question_v" >

                <div class="card-body">
                <?php
                    $sr=1;
                ?>

                    <form class="form" action="{{route('usertests.store')}}" method="post" id="testform">
                        @csrf
                        <input type="hidden" name="course_id" id="course_id"  value="{{$c_id}}">

                    @foreach($questions as $question)
                <div class="form-group row" >
                    @if($question->type == 'question')
                    <label class="col-6 col-form-label"><h5>{{$sr}}.{{$question->question}}</h5></label>
                   @if($question->photo != null)
                    <div class="col-6">
                        <img src="{{asset('images/questions')}}/{{$question->photo}}">
                    </div>
                        @endif
                    <div class="col-12 mx-2 col-form-label">
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
                            @else
                                <label class="col-5 col-form-label"><h5>{{$sr}}.{{$question->question}}</h5></label>
                                <div class="col-7 col-form-label">
                                    <div class="checkbox-inline">
                                        <label class="checkbox checkbox-outline checkbox-success">
                                            <input type="radio"  name="{{$question->id}}" value="1"/>
                                            <span></span>
                                            True
                                        </label>
                                        <label class="checkbox checkbox-outline checkbox-success">
                                            <input type="radio" name="{{$question->id}}"  value="0"/>
                                            <span></span>
                                            False
                                        </label>


                                    </div>

                                </div>
                    @endif
                        <?php $sr++; ?>
                @endforeach
                    </form>

                </div>
                <button type="button" class="btn btn-info q_next">Next</button>
            </div>
                @else
                        <form class="form" action="{{route('usertests.store')}}" method="post" id="testform">
                            @csrf
                            <input type="hidden" name="course_id" id="course_id"  value="{{$c_id}}">
                        </form>
                        @endif
            <!--end::Card-->
        </div>
        </div>
        </div>
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
            $('#res_countes').val($('#counter').val());
            $('#res_form').submit();
        }

        function synctest(type) {

            var cid = $('#c_id').val();
            var count = parseInt($('#counter').val());

            var v_token = "{{csrf_token()}}";
            $('#video_v').html('loading...');
            $('#ack-file').html('loading...');

            $('#res_type').val(type);
            if($('#resumetype').val() != ''){
                var type=$('#resumetype').val();
            }
            var resumetime = $('#resumetime').val();
            // video
            $.ajax({
                type: 'POST',
                url: "{{url('usertests-sync')}}",
                data: {type: type,resumetime:resumetime,count: count, _token: v_token,cid:cid},

                cache: false,
                success: function (data) {

                    $('#counter').val(parseInt(count+1));
                    if(type == 'video'){
                        // alert(data);
                        $('#video_v').html(data);
                    }
                    if(type == 'ack_form'){
                        // alert(data);
                        $('#ack-file').html(data);

                    }
                    // if(type == 'question'){
                    //     $('#question_v').html(data);
                    //
                    // }


                }


            });
        }

        $(document).ready(function () {



            @if(count($videos) > 0 OR count($ack_form) > 0)
                @if(count($videos) > 0)

            $('#video_v').show();
            $('#ack-file').hide();
            $('#question_v').hide();
            synctest('video');


            @elseif(count($ack_form) > 0)
            $('#video_v').hide();
            $('#ack-file').show();
            $('#question_v').hide();
            synctest('ack_form');
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





        $('.q_next').click(function () {
            alert('test submit');
            $('#testform').submit();
        });



    </script>




@endsection
