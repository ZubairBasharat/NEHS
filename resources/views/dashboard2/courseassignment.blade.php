@extends('layout.dashadmin')

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
                    <h5 class="text-dark font-weight-bold my-2 mr-5 text-uppercase">Course</h5>
                    <!--end::Page Title-->
                    <!--begin::Breadcrumb-->
                    <ul class="breadcrumb breadcrumb-transparent breadcrumb-dot font-weight-bold p-0 my-2 font-size-sm">
                        <li class="breadcrumb-item">
                            <a href="{{url('/dashboard2')}}" class="text-muted">Home</a>
                        </li>
                        <li class="breadcrumb-item">
                            <a href="{{url('/course')}}" class="text-muted">Course</a>
                        </li>
                    </ul>
                    <!--end::Breadcrumb-->
                </div>
                <!--end::Page Heading-->
            </div>
            <!--end::Info-->

        </div>
    </div>
    <!--add-course::model-->
    <div class="modal fade w-100" id="addAssignment" data-backdrop="static" tabindex="-1" role="dialog" aria-labelledby="staticBackdrop" aria-hidden="true">
        <div class="modal-dialog modal-dialog-centered modal-lg" role="document">
            <div class="modal-content">
                <div class="modal-header" style="background: #4a4e6b;">
                    <h5 class="modal-title text-uppercase text-white" id="exampleModalLabel">Assignment</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <i aria-hidden="true" class="ki ki-close text-white"></i>
                    </button>
                </div>
                <div class="modal-body p-0">
                    <div class="row">
                        <div class="col-12">
                            <form class="form" action="{{route('course.create')}}">
                                <div class="card-body">
                                    <div class="row">
                                       <div class="col-md-4" >
                                        <a href="{{url('admin/video-assignment')}}/{{$id}}/{{$language}}"> <div class="mx-3" style="background: #4a4e6b; padding:20px; border-radius:10px;">
                                        <h3 class="text-center text-white"><i class="fa fa-video"></i></h3>
                                            <p class="text-center text-light">Videos</p>
                                        </div>
                                    </a>
                                    </div>
{{--                                    <div class="col-md-4 my-2" >--}}
{{--                                        <a href="{{url('admin/audio-assignment')}}/{{$id}}">  <div class="mx-3" style="background: #4a4e6b; padding:20px; border-radius:10px;">--}}
{{--                                        <h3 class="text-center text-white"><i class="fa fa-file"></i></h3>--}}
{{--                                        <p class="text-center text-light">Audio</p>--}}
{{--                                        </div>--}}
{{--                                    </a>--}}
{{--                                </div>--}}
                                        <div class="col-md-4 my-2" >
                                        <a href="{{url('admin/file-assignment')}}/{{$id}}/{{$language}}">  <div class="mx-3" style="background: #4a4e6b; padding:20px; border-radius:10px;">
                                        <h3 class="text-center text-white"><i class="fa fa-file"></i></h3>
                                        <p class="text-center text-light">Acknowledgement</p>
                                        </div>
                                    </a>
                                </div>
                                <div class="col-md-4 my-2" >
                                  <a href="{{url('questions')}}/{{$id}}/{{$language}}"> <div class="mx-3" style="background: #4a4e6b; padding:20px; border-radius:10px;">
                                    <h3 class="text-center text-white"><i class="fa fa-question-circle"></i></h3>
                                    <p class="text-center text-light">Questions/True False</p>
                                   </div>
                                </a>
                            </div>
                                    </div>
                                </div>
                                <div class="card-footer">
                                    <div class="row">
                                        <div class="col-lg-12">
                                            <button type="reset" class="btn btn-primary mr-2" data-dismiss="modal">Close</button>

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

    <div class="modal fade w-100" id="editCompany" data-backdrop="static" tabindex="-1" role="dialog" aria-labelledby="staticBackdrop" aria-hidden="true">

        <div class="modal-dialog modal-dialog-centered" role="document">
            <div class="modal-content">
                <div class="modal-header" style="background: #4a4e6b;">
                    <h5 class="modal-title text-uppercase text-white" id="exampleModalLabel">Course</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <i aria-hidden="true" class="ki ki-close text-white"></i>
                    </button>
                </div>
                <div class="modal-body p-0">
                    <div class="row">
                        <div class="col-12">
                            <form class="form" id="edit-form" action="" method="POST" enctype="multipart/form-data">
                                @method('PUT')
                                @csrf
                                <div class="card-body">
                                    <div class="form-group row">
                                        <div class="col-12">
                                            <h1 class="text-center">Edit Assignment</h1>

                                           <input type="hidden" name="id" id="edit-id" >
                                           <input type="hidden" name="c_id" id="c_id">
                                        </div>
                                        <div class="col-12">
                                            <label for="videoTitle">Video Title</label>
                                            <div class="input-group">
                                                <input type="text" name="title" required placeholder="Enter title" class='form-control' id="edit-videoTitle">
                                            </div>
                                            <span class="form-text text-muted">Please Enter your Title</span>
                                        </div>
                                        <div class="col-12">
                                            <label for="description">Description</label>
                                            <div class="input-group">
                                                <textarea  name="description" id="edit-description" cols="30" rows="10" class="form-control" style="resize:none;width:100%;"></textarea>
                                            </div>
                                            <span class="form-text text-muted">Please Enter your description 1000/1500</span>
                                        </div>
                                        <div class="col-12">
                                            <label for="description">Category</label>
                                            <div class="input-group">
                                                <select class="form-control choosecat" name="status" id="edit-category">
                                                    <option value="" disabled selected readonly="">Choose</option>
                                                @foreach($video_cats as $video_cat)
                                                    <option value="{{$video_cat->id}}">{{$video_cat->name}}</option>
                                                @endforeach
                                                </select>
                                            </div>
                                            <span class="form-text text-muted">Please Choose category then pick video</span>
                                        </div>
                                        <div class="col-12">
                                            <input type="hidden" name="video_id" id="v_id" value="">
                                            <div class="videos">

                                            </div>
                                        </div>
                                        <div class="col-12">
                                            <div id="play_video">

                                            </div>
                                        </div>

                                        <div class="col-12">
                                            <label for="status">Status</label>
                                            <div class="input-group">
                                                <select class="form-control" name="status" id="edit-status">
                                                    <option value="1">Active</option>
                                                    <option value="0">Deactive</option>
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
    <!--end::Subheader-->
@endsection

@section('dashboard')
    <!--begin::Entry-->
    <div class="d-flex flex-column-fluid">
        <!--begin::Container-->
        <div class="container">
            <!--begin::Notice-->

            <!--end::Notice-->
            <!--begin::Card-->
            <div class="card card-custom">
                <div class="card-header flex-wrap border-0 pt-6 pb-0">
                    <div class="card-title">
                        <h3 class="card-label">Course Assignment
                            <span class="d-block text-muted pt-2 font-size-sm"></span></h3>
                    </div>
                    <div class="card-toolbar">

                        <!--begin::Button-->
                        <a href="" class="btn btn-primary font-weight-bolder" data-toggle="modal" data-target="#addAssignment">
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
											</span>New Assignment</a>
                        <!--end::Button-->
                    </div>
                </div>
                <div class="card-body">
                    <!--begin: Search Form-->
                    <h2>Videos</h2>
                    <!--begin::Search Form-->
                    <div class="mb-7">
                        <div class="row align-items-center">
                            <div class="col-md-12">
                                <div class="row align-items-center">
                                    <div class="col-md-4 my-2 my-md-0">
                                        <div class="input-icon">
                                            <input type="text" class="form-control" placeholder="Search..." id="kt_datatable_search_query" />
                                            <span>
                                                <i class="flaticon2-search-1 text-muted"></i>
                                            </span>
                                        </div>
                                    </div>
                                    <div class="col-md-4 my-2 my-md-0">
                                        <div class="d-flex align-items-center">
                                            <label class="mr-3 mb-0 d-none d-md-block">Status:</label>
                                            <select class="form-control" id="kt_datatable_search_status">
                                                <option value="">All</option>
                                                <option value="1">Active</option>
                                                <option value="0">Deactive</option>

                                            </select>
                                        </div>
                                    </div>

                                </div>
                            </div>
                            {{--<div class="col-lg-3 col-xl-4 mt-5 mt-lg-0">--}}
                                {{--<a href="#" class="btn btn-light-primary px-6 font-weight-bold">Search</a>--}}
                            {{--</div>--}}
                        </div>
                    </div>
                    <!--end::Search Form-->
                    <!--end: Search Form-->
                    <!--begin: Datatable-->

                    <table class="datatable datatable-bordered datatable-head-custom" id="kt_datatable">
                        <thead>
                        <tr>
                            {{--<th title="Field #1">ID</th>--}}
                            <th title="Field #2">Title</th>
                            <th title="Field #3">Description</th>
                            <th title="Field #3">Type</th>
                            <th title="Field #4">Status</th>
                            <th title="Field #5">Created On</th>
                            <th title="Field #6">Edit</th>
                            <th title="Field #7">Delete</th>

                            {{--<th title="Field #8">Type</th>--}}

                        </tr>
                        @foreach ($data as $data)


                        <tr>
                            <td>{{$data->title}}</td>
                            <td>{{$data->description}}</td>
                            <td>{{$data->type}}</td>
                            <td>{{$data->status}}</td>
                            <td>{{$data->created_at}}</td>
                            <td><a class="btn btn-primary font-weight-bolder " onclick="editcomp({{$data->id}})" data-id="{{$data->id}}" data-toggle="modal" data-target="#editCompany"><i class="fa fa-edit"></i></a></td>

                            <td>
                                <form action="{{url('admin/destroy-assignment')}}" method="post">
                                    @csrf
                                    <input type="hidden" name="a_id" value="{{$data->id}}">
                                    <button type="submit"><i class="fa fa-trash"></i></button>
                                </form>
                            </td>
                        </tr>
                        @endforeach
                        </thead>
                        <tbody>




                        </tbody>
                    </table>
                    <!-- begin::modal::addEng-->

                    <!-- end::modal::adapan-->
                    <!--end: Datatable-->
                </div>


                <div class="card-body">
                    <!--begin: Search Form-->
                    <!--begin::Search Form-->
                    <h2>Acknowledgments</h2>
                    <div class="mb-7">
                        <div class="row align-items-center">
                            <div class="col-md-12">
                                <div class="row align-items-center">
                                    <div class="col-md-4 my-2 my-md-0">
                                        <div class="input-icon">
                                            <input type="text" class="form-control" placeholder="Search..." id="kt_datatable_search_query1" />
                                            <span>
                                                <i class="flaticon2-search-1 text-muted"></i>
                                            </span>
                                        </div>
                                    </div>


                                </div>
                            </div>

                        </div>
                    </div>
                    <!--end::Search Form-->
                    <!--end: Search Form-->
                    <!--begin: Datatable-->
                    <table class="datatable datatable-bordered datatable-head-custom" id="kt_datatable1">
                        <thead>
                        <tr>
                            <th title="Field #1">Sr</th>
                            <th title="Field #2">Name</th>
                            <th title="Field #3">Type</th>
                            <th title="Field #5">Created On</th>
                            <th title="Field #6">Edit</th>
                            <th title="Field #7">Delete</th>

                            <th title="Field #8"></th>


                        </tr>
                        </thead>
                        <tbody>
                        @php $counter=1;  @endphp
                        @foreach($ack_assigments as $form)
                            <tr>
                                <td>{{$counter}}</td>
                                <td>{{$form->name}}</td>
                                <td>Acknowledgment</td>
                                <td >{{$form->created_at}}</td>
                                <td ><a href="{{url('admin/ack-form/edit/'.$form->form_id.'/'.$form->course_id)}}"><i class="fa fa-edit"></i></a></td>
                                <td><form action="{{ route('admin.form.ack-destroy',$form->form_id)}}" method="post">
                                        @csrf
                                        <button type="submit"><i class="fa fa-trash"></i></button>
                                    </form></td>
                                <td></td>
                            </tr>
                            @php  $counter++; @endphp
                        @endforeach


                        </tbody>
                    </table>
                    <!--end: Datatable-->
                </div>
            </div>
            <!--end::Card-->
        </div>
        <!--end::Container-->
    </div>
    <!--end::Entry-->
@endsection
@section('js')


    <script>

        function play_video(video_id,type){

            var url = "{{url('play_youtube_video')}}";

            $.ajax({
                type: "GET",
                url: url,
                data:{video_id:video_id,type:type},
                cache: false,
                success: function(data){

                    $('#play_video').html(data);

                }
            });



        }

        function editcomp(id){


            var host ="{{url('admin/assignment')}}";
            var id=parseInt(id);
            var url=host;
            var url2=host+'/'+id;
            $.ajax({
                type: "GET",
                url: url + '/' + id + '/edit',
                data:{id:id},
                cache: false,
                success: function(data){

                    $('#edit-id').val(data.id);
                    $('#edit-form').attr('action',url2);
                    $('#edit-videoTitle').val(data.title);
                    $('#edit-description').val(data.description);
                    $('#edit-status').val(data.status);
                    $('#c_id').val(data.course_id);
                    play_video(id,'nill');
                }
            });
        }

    $('.choosecat').change(function () {

        var category=$(this).val();
        var url = "{{url('admin/ajax-v-assignment')}}";

        $.ajax({
            type: "GET",
            url: url,
            data:{category:category,type:'edit'},
            cache: false,
            success: function(data){

                $('.videos').html(data);

            }
        });

    });


    </script>
    <script >
        // "use strict";
        // Class definition

        var KTDatatableHtmlTableDemo = function() {
            // Private functions

            // demo initializer
            var demo = function() {

                var datatable = $('#kt_datatable').KTDatatable({
                    data: {
                        saveState: {cookie: false},
                    },
                    search: {
                        input: $('#kt_datatable_search_query'),
                        key: 'generalSearch'
                    },
                    columns: [
                        {
                            field: 'ID',
                            type: 'number',
                        },{
                            field: 'name',
                            type: 'text',
                        },{
                            field: 'description',
                            type: 'text',
                        },
                        {
                            field: 'created_at',
                            type: 'datetime',
                            format: 'YYYY-MM-DD',
                        },
                        {
                            field: 'updated_at',
                            type: 'datetime',
                            format: 'YYYY-MM-DD',
                        }, {
                            field: 'Status',
                            title: 'Status',

                            // callback function support for column rendering
                            template: function(row) {
                                var status = {
                                    1: {
                                        'title': 'Active',
                                        'class': ' label-light-success'
                                    },
                                    0: {
                                        'title': 'Deactive',
                                        'class': ' label-light-danger'
                                    }

                                };
                                return '<span class="label font-weight-bold label-lg' + status[row.Status].class + ' label-inline">' + status[row.Status].title + '</span>';
                            },
                        },
                    ],
                });



                $('#kt_datatable_search_status').on('change', function() {
                    datatable.search($(this).val().toLowerCase(), 'Status');
                });

                $('#kt_datatable_search_type').on('change', function() {
                    datatable.search($(this).val().toLowerCase(), 'Type');
                });

                $('#kt_datatable_search_status, #kt_datatable_search_type').selectpicker();

            };

            var demo1 = function() {

                var datatable = $('#kt_datatable1').KTDatatable({
                    data: {
                        saveState: {cookie: false},
                    },
                    search: {
                        input: $('#kt_datatable_search_query1'),
                        key: 'generalSearch'
                    },
                    columns: [
                        {
                            field: 'ID',
                            type: 'number',
                        },{
                            field: 'name',
                            type: 'text',
                        },{
                            field: 'description',
                            type: 'text',
                        },
                        {
                            field: 'created_at',
                            type: 'datetime',
                            format: 'YYYY-MM-DD',
                        },
                        {
                            field: 'updated_at',
                            type: 'datetime',
                            format: 'YYYY-MM-DD',
                        }, {
                            field: 'Status',
                            title: 'Status',

                            // callback function support for column rendering
                            template: function(row) {
                                var status = {
                                    1: {
                                        'title': 'Active',
                                        'class': ' label-light-success'
                                    },
                                    0: {
                                        'title': 'Deactive',
                                        'class': ' label-light-danger'
                                    }

                                };
                                return '<span class="label font-weight-bold label-lg' + status[row.Status].class + ' label-inline">' + status[row.Status].title + '</span>';
                            },
                        },
                    ],
                });



                $('#kt_datatable_search_status1').on('change', function() {
                    datatable.search($(this).val().toLowerCase(), 'Status');
                });

                $('#kt_datatable_search_type1').on('change', function() {
                    datatable.search($(this).val().toLowerCase(), 'Type');
                });

                $('#kt_datatable_search_status1, #kt_datatable_search_type1').selectpicker();

            };

            return {
                // Public functions
                init: function() {
                    // init dmeo
                    demo();
                    demo1();
                },
            };
        }();

        jQuery(document).ready(function() {
            KTDatatableHtmlTableDemo.init();
        });

    </script>
    <!--begin::Page Scripts(used by this page)-->
    {{--<script src="assets/js/pages/crud/ktdatatable/advanced/column-width.js?v=7.0.3"></script>--}}
    <!--end::Page Scripts-->


@endsection
