@extends('layout.dashadmin')
@section('css')

    <link rel="stylesheet" href="{{asset('dist/assets/owl.carousel.css')}}">
    <style>
        .owl-nav{
            border: none;
            position: absolute;

            width: 100%;
            transform: translateY(-50%);
            top: 50%;
            display: flex;
            justify-content: space-between;
        }
        .mb-3, .my-3{
            background: #0e0e0e !important;
        }
        @media (min-width: 992px) {
            .aside-enabled.subheader-fixed .subheader {
                background: #111111;
            }
        }
        .text-dark{
            color: white !important;
        }
        @media (min-width: 992px){
            .content {
                background: #0e0e0e;
            }
        }
        @media (min-width: 992px){
            .flex-lg-column {
                background: #0e0e0e !important;
            }
            }
    </style>

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
    <div class="container-fluid d-flex align-items-center justify-content-between flex-wrap flex-sm-nowrap" >
        <!--begin::Info-->
        <div class="d-flex align-items-center flex-wrap mr-2">
            <!--begin::Page Title-->
            <h5 class="text-dark font-weight-bold mt-2 mb-2 mr-5 text-uppercase">Video Library</h5>
            <!--end::Page Title-->
            <!--begin::Actions-->
            <div class="subheader-separator subheader-separator-ver mt-2 mb-2 mr-4 clear-flex d-inline-block" style="border:1px solid transparent;width:200px;">
                <a href="#" class="btn btn-primary font-weight-bolder d-inline-block" data-toggle="modal" data-target="#new2">
                    <span class="svg-icon svg-icon-md">
                        <!--begin::Svg Icon | path:assets/media/svg/icons/Design/Flatten.svg-->
                        <svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" width="24px" height="24px" viewBox="0 0 24 24" version="1.1">
                            <g stroke="none" stroke-width="1" fill="none" fill-rule="evenodd">
                                <rect x="0" y="0" width="24" height="24" />
                                <circle fill="#000000" cx="9" cy="15" r="6" />
                                <path d="M8.8012943,7.00241953 C9.83837775,5.20768121 11.7781543,4 14,4 C17.3137085,4 20,6.6862915 20,10 C20,12.2218457 18.7923188,14.1616223 16.9975805,15.1987057 C16.9991904,15.1326658 17,15.0664274 17,15 C17,10.581722 13.418278,7 9,7 C8.93357256,7 8.86733422,7.00080962 8.8012943,7.00241953 Z" fill="#000000" opacity="0.3" />
                            </g>
                        </svg>
                        <!--end::Svg Icon-->
                    </span>Add New Video</a>
            </div>


            <!--end::Actions-->

            <!--end::Actions-->
        </div>
        <!--end::Info-->

    </div>
</div>
<!--end::Subheader-->
@endsection
@section('dashboard')
    <div class="mb-3" style="background-image: url('{{ asset('images/bg.jpeg')}}');">
        <!--begin::Container-->
        <div class="container">


                        <!-- Modal-->
                        <div class="modal fade w-100" id="new2" data-backdrop="static" tabindex="-1" role="dialog" aria-labelledby="staticBackdrop" aria-hidden="true">
                            <div class="modal-dialog modal-dialog-centered" role="document">
                                <div class="modal-content">
                                    <div class="modal-header" style="background: #4a4e6b;">
                                        <h5 class="modal-title text-uppercase text-white" id="exampleModalLabel">Add New video</h5>
                                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                            <i aria-hidden="true" class="ki ki-close text-white"></i>
                                        </button>
                                    </div>
                                    <div class="modal-body p-0">
                                        <div class="row">
                                            <div class="col-12">
                                                <form class="form" id="videoform" action="{{route('video-library.store')}}" method="POST" enctype="multipart/form-data">
                                                    @csrf
                                                    <div class="card-body">
                                                        <div class="form-group row">
{{--                                                            <div class="col-12">--}}
{{--                                                                <label for="selectcourse">Course List</label>--}}
{{--                                                                <div class="input-group">--}}
{{--                                                                    <select name="course_id" class="form-control" required>--}}
{{--                                                                        <option value="">----Select Course----</option>--}}
{{--                                                                        @foreach ($courses as $course)--}}
{{--                                                                            <option value="{{$course->id}}">{{$course->name}}</option>--}}
{{--                                                                        @endforeach--}}


{{--                                                                    </select>--}}
{{--                                                                </div>--}}

{{--                                                            </div>--}}
                                                            <div class="col-12">
                                                                <label for="selectcourse">Video Category</label>
                                                                <div class="input-group">
                                                                    <select name="v_cat_id" class="form-control" required>
                                                                        <option value="">----Select Course----</option>
                                                                        @foreach ($video_cat as $video_cats)
                                                                            <option value="{{$video_cats->id}}">{{$video_cats->name}}</option>
                                                                        @endforeach


                                                                    </select>
                                                                </div>

                                                            </div>
{{--                                                            <div class="col-12">--}}
{{--                                                                <label for="selectcourse">Department List</label>--}}
{{--                                                                <div class="input-group">--}}
{{--                                                                    <select name="department_id" class="form-control" required>--}}
{{--                                                                        <option value="">----Select Department----</option>--}}
{{--                                                                        @foreach ($departments as $dep)--}}
{{--                                                                            <option value="{{$dep->id}}">{{$dep->name}}</option>--}}
{{--                                                                        @endforeach--}}


{{--                                                                    </select>--}}
{{--                                                                </div>--}}

{{--                                                            </div>--}}
                                                            <div class="col-12">
                                                                <label for="videoTitle">Video Title</label>
                                                                <div class="input-group">
                                                                    <input type="text" name="video_title" required placeholder="Enter video title" class='form-control' id="videoTitle">
                                                                </div>
                                                                <span class="form-text text-muted">Please Enter your Video Title</span>
                                                            </div>
                                                            <div class="col-12">
                                                                <label for="description">Description</label>
                                                                <div class="input-group">
                                                                    <textarea  name="video_desc" id="description" cols="30" rows="10" class="form-control" style="resize:none;width:100%;"></textarea>
                                                                </div>
                                                                <span class="form-text text-muted">Please Enter you Video description 1000/1500</span>
                                                            </div>
                                                            <div class="col-12" style="display:none;">
                                                                <label for="videoUpload">Video/External link</label>
                                                                <div class="input-group">
                                                                   <select class="form-control" onchange="video_change()" id="change_vid">
                                                                       <option value="1">From Your Pc</option>
                                                                       <option value="2">External Link</option>
                                                                   </select>
                                                                </div>
                                                            </div>
                                                            <div class="col-12" id="from_ex" >
                                                                <label for="videoUpload" id="from_pc">Video Upload</label>
                                                                <div class="input-group">
                                                                    <input type="file"  name="videofile" id="videoUpload" class='form-control'>
                                                                </div>
                                                                <span class="form-text text-muted">Please Upload Video File</span>
                                                            </div>
                                                            <div class="col-12" >
                                                                <label for="videoUpload">Youtube(only Video ID)</label>
                                                                <div class="input-group">
                                                                    <input class='form-control' type="text" placeholder="Youtube(only Video ID)"  id="from_ex_ch" name="videolink" required >
                                                                </div>
                                                                <span class="form-text text-muted">Please Upload Video File</span>
                                                            </div>
                                                            <div class="col-12">
                                                                <label for="videoUpload">Video Thumbnail</label>
                                                                <div class="input-group">
                                                                    <input type="file" required="" name="videothumbnail" id="videoUpload" class='form-control'>
                                                                </div>
                                                                <span class="form-text text-muted">Please Upload Video Thumbnail</span>
                                                            </div>
                                                            <div class="col-12">
                                                                <label for="selectcourse">Select Course</label>
                                                                <div class="input-group">
                                                                    <select name="language" class="form-control" required>
                                                                        <option value="">----Select language----</option>
                                                                        <option value="ENG">ENG</option>
                                                                        <option value="ESP">ESP</option>

                                                                    </select>
                                                                </div>

                                                            </div>
                                                        </div>
                                                    </div>

                                                    <br>
                                                    <div class="card-footer">
                                                        <div class="row">
                                                            <div class="col-lg-12">
                                                                <button type="reset" class="btn btn-primary mr-2" data-dismiss="modal">Close</button>
                                                                <input type="submit" name="submit" class="btn btn-secondary" value="Save">
                                                            </div>
                                                        </div>
                                                    </div>
                                                </form>
                                            </div>
                                        </div>
                                    </div>

                                </div>
                            </div>
                        </div>
                        <!--end::Model-->
                        @if(session('success_msg'))
                            <div class="alert alert-success col-md-12 mb-1 mt-1">
                                {{ session('success_msg') }}
                            </div>
                        @endif
        </div>







    <!--begin::Entry-->
    <div class="container-fluid">

{{--        @foreach($categories as $categorie)--}}
{{--            <h1>{{$categorie->name}}</h1>--}}
{{--        <div class="row">--}}

{{--        @foreach ($videos as $video)--}}

{{--                @if($video->video_cat_it == $categorie->id)--}}

{{--        <div class=" col-md-3">--}}
{{--            <div class="card">--}}
{{--                <div class="card-header">--}}
{{--                   <span class="badge text-dark " style="background:#cacaca;">{{$video->language}}</span>--}}

{{--                </div>--}}
{{--                <div class="card-body">--}}
{{--                    <a href="{{route('video-library.show',$video->id)}}" >--}}
{{--                    <p class="text-dark mb-3" style="font-weight: 700"><?php if((course_byid($video->course_id) !='')){ echo course_byid($video->course_id)->name;  }else{ echo $video->video_title; }?></p><br>--}}
{{--                  <img src="{{ URL::to('/') }}/images/videos/thumbnails/{{$video->video_thumbnail}}" style="height: 95px !important;width: 100%;">--}}
{{--                    </a>--}}
{{--                </div>--}}
{{--                <div class="card-footer">--}}
{{--                    <form action="{{ route('video-library.destroy',$video->id)}}" method="post">--}}
{{--                        @csrf--}}
{{--                        @method('DELETE')--}}
{{--                        <button type="submit" class="btn btn-danger btn-sm float-right"><i class="fa fa-trash text-light"></i></button>--}}
{{--                    </form>--}}
{{--                </div>--}}
{{--            </div>--}}
{{--            </div>--}}
{{--                @endif--}}
{{--        @endforeach--}}

{{--    </div>--}}
{{--        @endforeach--}}

<!--begin::Entry-->
    <div class="container-fluid border border-0 border-info" style="background-color: #0e0e0e;">

        @foreach($categories as $categorie)
            <h1 style="margin-top:15px !important;color:white;">{{$categorie->name}}</h1>

            <div class="row" style="margin-top: 5px;">
                <div class="owl-carousel owl-theme">
                    @foreach ($videos as $video)
                        @if($video->video_cat_it == $categorie->id)
                            <div class="items">
                                <div class="card" style="">
                                    <a href="{{route('video-library.show',$video->id)}}"  >
                                        <img src="{{ URL::to('/') }}/images/videos/thumbnails/{{$video->video_thumbnail}}" style="height: 150px !important;width: 100%;" class="card-img">
                                    </a>
                                                <div class="card-img-overlay p-0 position-relative" style="border:none;">
                                                    <div class="card-text bg-dark-o-100 p-0 position-absolute py-2" style="border:none;bottom:0;width:100%;">
                                                        <div class="row justify-content-center align-items -center">
                                                            <div class="col-6 text-white text-center align-self-center">

                                                                {{$video->title}}
                                                            </div>
                                                            <div class="col-6">
                                                                <div class="d-flex justify-content-end align-items-center">






                                                                    <form action="{{ route('video-library.destroy',$video->id)}}" method="post" class="d-block">
                                                                        @csrf
                                                                        @method('DELETE')
                                                                        <button type="submit" class="btn btn-sm float-right"><i class="fa fa-trash text-danger" style="color:red;"></i></button>
                                                                    </form>

                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                </div>

                            </div>
                        @endif
                    @endforeach

                </div>
            </div>
        @endforeach
    </div>

    <!--end::Entry-->

@endsection
        @section('js')
            <script>
                // $('#from_pc').hide();
                $('document').ready(function(){
                    $(".owl-carousel").owlCarousel({
                        loop:false,
                        margin:10,
                        nav:true,
                        autoplay:true,
                        responsive:{
                            0:{
                                items:1
                            },600:{
                                items:2
                            },1000:{
                                items:4
                            }
                        },
                        navText:["<i class='fa fa-chevron-left' style='position: relative'></i>","<i class='fa fa-chevron-right'></i>"]
                    });
                });
                $('#from_ex').hide();
                function video_change() {
                    var v = $('#change_vid').val();


                    if(v == 1){
                        $('#from_pc').show();
                        $('#from_ex').hide();
                        $('#from_ex_ch').val('');
                    }
                    if(v == 2){
                        $('#from_pc').hide();
                        $('#from_ex').show();
                    }
                }

            </script>
            <script src="{{asset('/dist/owl.carousel.js')}}"></script>
@endsection
