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
                    <h5 class="text-dark font-weight-bold my-2 mr-5 text-uppercase">Personnel</h5>
                    <!--end::Page Title-->
                    <!--begin::Breadcrumb-->
                    <ul class="breadcrumb breadcrumb-transparent breadcrumb-dot font-weight-bold p-0 my-2 font-size-sm">
                        <li class="breadcrumb-item">
                            <a href="{{url('/dashboard1')}}" class="text-muted">Home</a>
                        </li>
                        <li class="breadcrumb-item">
                            <a href="{{url('/personnel')}}" class="text-muted">personnel</a>
                        </li>
                    </ul>
                    <!--end::Breadcrumb-->
                </div>
                <!--end::Page Heading-->
            </div>
            <!--end::Info-->
            <!--begin::Toolbar-->

            <!--end::Toolbar-->
        </div>
    </div>
    <!--end::Subheader-->
@endsection
@section('dashboard')
    <!--begin::Entry-->
    <div class="d-flex flex-column-fluid">
        <!--begin::Container-->
        <div class="container">
            <!--begin::Card-->
            <div class="card card-custom">
                <div class="card-header flex-wrap border-0 pt-6 pb-0">
                    <div class="card-title">
                        <h3 class="card-label text-uppercase"></h3>
                    </div>
                    <div class="card-toolbar">


                        <!--begin::Button-->
                        <a href="#" class="btn btn-primary font-weight-bolder mx-2" data-toggle="modal" data-target="#editpersonnel">
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
                            </span>Export to PDF
                        </a>
                        <!--end::Button-->


                        <!-- Modal-->
                                <div class="modal-content">
                                    <div class="modal-header" style="background: #4a4e6b;">
                                        <h5 class="modal-title text-uppercase text-white" id="exampleModalLabel">personnel summary</h5>
                                        {{--<button type="button" class="close" data-dismiss="modal" aria-label="Close">--}}
                                            {{--<i aria-hidden="true" class="ki ki-close text-white"></i>--}}
                                        {{--</button>--}}
                                    </div>
                                    <div class="modal-body p-0">
                                        <div class="row">
                                            <div class="col-12">
                                                <form class="form" method="post" action="" id="edit-form"  enctype="multipart/form-data">
                                                    @method('PUT')
                                                    @csrf
                                                    <div class="card-body">
                                                        <div class="form-group row">
                                                            <div class="col-lg-4">
                                                                <label>First Name</label>
                                                                <input type="text" class="form-control" placeholder="First Name" name="first_name" id="edit-first_name" required/>
                                                                <span class="form-text text-muted">Please select user group</span>
                                                            </div>
                                                            <div class="col-lg-4">
                                                                <label>Last Name</label>
                                                                <input type="text" class="form-control" placeholder="Last Name" name="last_name" id="edit-last_name" required/>
                                                                <span class="form-text text-muted">Please select user group</span>
                                                            </div>
                                                            <div class="col-lg-2" id="edit-gender">
                                                                <label>Gender</label>
                                                                <div class="radio-inline">
                                                                    <label class="radio radio-solid">
                                                                        <input type="radio" name="gender" @if($worker->gender==1) checked @endif value="1"  /> Male
                                                                        <span></span>
                                                                    </label>
                                                                    <label class="radio radio-solid">
                                                                        <input type="radio" name="gender" @if($worker->gender==2) checked @endif  value="2"/> Female
                                                                        <span></span>
                                                                    </label>
                                                                </div>
                                                                <span class="form-text text-muted">Please select user group</span>
                                                            </div>
                                                            <div class="col-lg-2">

                                                                {{--<img src="{{asset('assets/profile.png')}}" alt="Profile Pic" class="img-fluid w-50 h-auto d-block mx-auto">--}}
                                                                <img src="" alt="Profile" id='pic_circlce' onclick="select_img()" class="img-fluid w-50 h-auto d-block mx-auto">
                                                                <center><p>Click on Image to Choose</p></center>
                                                                <input type="file" name="usr_img" id="usr_img" onChange="displayImage(this)" style="display: none;"  />

                                                            </div>
                                                        </div>
                                                        <div class="form-group row">
                                                            <div class="col-lg-4">
                                                                <label>Email</label>
                                                                <input type="email" class="form-control" placeholder="Enter Your Email" id="edit-email" name="email" />
                                                                <span class="form-text text-muted">Please enter your Email</span>
                                                            </div>
                                                            <div class="col-lg-4">
                                                                <label>Date of Birth</label>
                                                                <div class="input-group">
                                                                    <input type="date" class="form-control" value="{{$worker->date_of_birth}}"  name="date_of_birth"/>
                                                                </div>
                                                                <span class="form-text text-muted">Please enter your Date of Birth </span>
                                                            </div>
                                                            <div class="col-lg-4">
                                                                <label>Hire Date</label>
                                                                <div class="input-group">

                                                                    <input type="date" class="form-control"  value="{{$worker->hire_date}}" name="hire_date" />
                                                                </div>
                                                                <span class="form-text text-muted">Please enter your Date of Hire </span>
                                                            </div>
                                                        </div>
                                                        <div class="form-group row">
                                                            <div class="col-lg-4">
                                                                <label>Native Language</label>
                                                                <div class="radio-inline">
                                                                    <label class="radio radio-solid">
                                                                        <input type="radio" name="native_language" @if($worker->native_language=='English') checked @endif value="English"/> English
                                                                        <span></span>
                                                                    </label>
                                                                    <label class="radio radio-solid">
                                                                        <input type="radio" name="native_language"  @if($worker->native_language=='Spanish') checked @endif value="Spanish"/> Spanish
                                                                        <span></span>
                                                                    </label>
                                                                </div>
                                                            </div>
                                                            <div class="col-lg-4">
                                                                <label>Phone</label>
                                                                <div class="input-group">
                                                                    <input type="Phone" class="form-control" placeholder="Enter Your Contact Number" id="edit-phone" name="phone"/>
                                                                </div>
                                                                <span class="form-text text-muted">Please enter your Phone Number </span>
                                                            </div>
                                                            <div class="col-lg-4">
                                                                <label>Title</label>
                                                                <div class="input-group">
                                                                    <input type="text" class="form-control" id="edit-title" name="title" placeholder="Foreman"/>
                                                                </div>
                                                                <span class="form-text text-muted">Please enter your Title </span>
                                                            </div>
                                                        </div>
                                                        <div class="form-group row">
                                                            <div class="col-lg-4">
                                                                <label>Department</label>
                                                                <div class='input-group'>
                                                                    {{--<select name="dep_id" id="edit-dep_id" class="form-control custom-select">--}}
                                                                        <strong><span id="edit-dep_id" ></span></strong>
                                                                        {{--<option value="Select">Select</option>--}}
                                                                        {{--@foreach($departments as $dep)--}}
                                                                            {{--<option value="{{$dep->id}}">{{$dep->name}}</option>--}}
                                                                        {{--@endforeach--}}
                                                                    {{--</select>--}}
                                                                </div>

                                                            </div>
                                                            <div class="col-lg-3">
                                                                <label>Project and Job Number</label>
                                                                <div class='input-group'>
                                                                    <input type="text" name="job_no" id="edit-job_no" placeholder="Enter your Project Or Job Number " class="form-control">
                                                                </div>
                                                            </div>
                                                            <div class="col-lg-5">
                                                                <label>Type of Worker</label>
                                                                <div class="radio-inline">
                                                                    <label class="radio radio-solid">
                                                                        <input type="radio" name="type"  @if($worker->type=='Employee') checked @endif  value="Employee"/> Employee
                                                                        <span></span>
                                                                    </label>
                                                                    <label class="radio radio-solid">
                                                                        <input type="radio" name="type"  @if($worker->type=='Temporary_Labor') checked @endif  value="Temporary_Labor"/> Temporary Labor
                                                                        <span></span>
                                                                    </label>
                                                                    <label class="radio radio-solid">
                                                                        <input type="radio" name="type"  @if($worker->type=='Subcontractor') checked @endif  value="Subcontractor"/> Subcontractor
                                                                        <span></span>
                                                                    </label>
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <div class="form-group row">

                                                            <div class="col-lg-6">
                                                                <label>Emergency contact</label>
                                                                <div class='input-group'>
                                                                    <input type="text" name="em_no" id="edit-em_no" placeholder="Enter Emergency contact Number" class="form-control">
                                                                </div>
                                                            </div>
                                                            {{--<div class="col-lg-6">--}}
                                                                {{--<label for="companyName">Status</label>--}}
                                                                {{--<div class="input-group">--}}
                                                                    {{--<select class="form-control" name="status" id="edit-status">--}}
                                                                        {{--<option value="1">Active</option>--}}
                                                                        {{--<option value="0">Deactive</option>--}}
                                                                    {{--</select>--}}

                                                                {{--</div>--}}
                                                            {{--</div>--}}



                                                        </div>
                                                    </div>
                                                    <div class="card-footer">
                                                        <div class="row">
                                                            <div class="col-lg-6">
                                                                {{--<button type="reset" class="btn btn-primary mr-2" data-dismiss="modal">Close</button>--}}
                                                                <button type="submit" class="btn btn-info">Update</button>
                                                            </div>
                                                            <div class="col-lg-6 text-right">
                                                                <button type="reset" class="btn btn-primary mr-2 print-data" data-toggle="modal" data-target="#id-card" data-dismiss="modal">Print ID card</button>
                                                                <button type="reset" class="btn btn-secondary">Print Summary</button>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </form>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="modal-body">
                                        <div class="row">
                                            <div class="col-12 py-2">
                                                <button type="reset" class="btn btn-secondary">Training Plan (10)</button>
                                                <button type="reset" class="btn btn-outline-primary">Assign Courses({{$t_courses}})</button>
                                                <button type="reset" class="btn btn-outline-primary">Equipment (2)</button>
                                                <button type="reset" class="btn btn-outline-primary">Groups / Classes</button>
                                            </div>
                                        </div>
                                        <div class="row">
                                            <div class="col-lg-12">
                                                <div class="table-responsive-lg w-100">
                                                    <table width="100%" class="table table-striped">
                                                        <tr>
                                                            <th>Name</th>
                                                            <th>Assign By</th>
                                                            <th>Content Type</th>
                                                            <th>Language</th>
                                                            <th>Assign Date</th>
                                                            <th>Date Finish</th>
                                                            <th>Result</th>
                                                            <th>Test</th>
                                                            <th>Attempts</th>

                                                        </tr>



                                                        @foreach($assigncourses as $assigncourse)
                                                            <tr class="w-100">
                                                                <th><a href="{{route('userpersonnel.show',$assigncourse->course_id)}}">{{course_byid($assigncourse->course_id)->name?:''}}</a></th>
                                                                <th>Admin</th>
                                                                <th>{{course_byid($assigncourse->course_id)->description?:''}}</th>
                                                                <th>{{$assigncourse->language}}</th>
                                                                <th>{{$assigncourse->created_at}}</th>
                                                                <th>{{$assigncourse->created_at}}</th>
                                                                @php
                                                                $take=\App\Models\CourseResults::where('course_id',$assigncourse->course_id)->where('worker_id',Auth::user()->user_personel->id)->count();
                                                                $res=\App\Models\CourseResults::where('course_id',$assigncourse->course_id)->where('worker_id',Auth::user()->user_personel->id)->first();

                                                                @endphp
                                                                <th>@if($take > 0)<a class="btn btn-primary">{{$res->grade}}</a>@else <a class="btn btn-warning">Not Attempted</a> @endif</th>
                                                                <th><a href="{{route('usertests.show',$assigncourse->course_id)}}" class="btn btn-primary">Start</a></th>
                                                                <th><center>{{$take}}</center></th>
                                                            </tr>
                                                        @endforeach

                                                    </table>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>

                        <!--end::Model-->
                        <div class="modal fade w-100" id="id-card" data-backdrop="static"  tabindex="-1" role="dialog" aria-labelledby="staticBackdrop" aria-hidden="true">
                            <div class="modal modal-dialog modal-dialog-centered modal-lg" role="document">
                                <div class="modal-content">
                                    <div class="modal-body">
                                        <div class="row justify-content-start align-items-center">
                                            <div class="col-lg-4">
                                                <img src="{{asset('assets/profile.png')}}"  id="card-show_img" alt="" class="img-fluid w-100 h-100">
                                            </div>
                                            <div class="col-lg-4">
                                                <div class="full_name my-4">
                                                    <span class="d-block h1"><span id="card-first_name"></span> <span id="card-last_name"></span></span>
                                                    <span class="d-block"><i>Employee</i></span>
                                                </div>
                                                <div class="Company my-4">
                                                    <span class="h1 d-block">Company</span>
                                                    <span class="d-block"><i>Canva Solution</i></span>

                                                </div>
                                                <div class="department my-4">
                                                    <span class="h1 d-block">Department</span>
                                                    <span class="d-block"><i>Contructor</i></span>
                                                </div>
                                            </div>
                                            <div class="col-lg-4">
                                                <img class="img-fluid w-100 h-100"
                                                     src="https://api.qrserver.com/v1/create-qr-code/?data=Employe#44&amp;size=180x180&amp;bgcolor=f8f9fa"
                                                     alt=""
                                                     title="" />
                                            </div>
                                        </div>
                                    </div>
                                    <div class="modal-footer">
                                        <button class="btn btn-primary" type="button" data-dismiss="modal">Close</button>
                                    </div>
                                </div>
                            </div>
                        </div>


                    </div>
                </div>

            </div>
            <!--end::Card-->
        </div>
        <!--end::Container-->
        <input type="hidden" name="u_p_id" id="u_p_id" value="{{Auth::user()->user_personel->id}}">

    </div>
    <!--end::Entry-->
@endsection
@section('js')


    <script>

        function editcomp(id){

            var host ="{{url('userpersonnel')}}";
            var id=parseInt(id);
            var url=host;
            var url2=host+'/'+id;
            var asset ="{{asset('/')}}";
            $.ajax({
                type: "GET",
                url: url + '/' + id + '/edit',
                data:{id:id},
                cache: false,
                success: function(alldata){
                    // console.log(data);
                    var data=alldata.datas;
                    $('#edit-id').val(data.id);

                    $('#edit-form').attr('action',url2);
                    $('#edit-first_name').val(data.first_name);
                    $('#card-first_name').html(data.first_name);
                    $('#card-last_name').html(data.last_name);
                    $('#edit-last_name').val(data.last_name);
                    $('#card-show_img').attr('src',asset+data.photo);
                    // $('#edit-gender').val(data.gender);
                    $('#edit-email').val(data.email);
                    // $('#edit-date_of_birth').val(data.date_of_birth);
                    // $('#edit-hire_date').val(data.hire_date);
                    $('#edit-native_language').val(data.native_language);
                    $('#pic_circlce').attr('src',asset+data.photo);
                    $('#edit-phone').val(data.phone);
                    $('#edit-title').val(data.title);
                    $('#edit-dep_id').html(data.dep_id);
                    $('#edit-job_no').val(data.job_no);
                    $('#edit-type').val(data.type);
                    $('#edit-em_no').val(data.em_no);
                    $('#edit-status').val(data.status);

                }
            });
        }

        $(document).ready(function () {
            var u_p_id= $('#u_p_id').val();

            editcomp(u_p_id);


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

            return {
                // Public functions
                init: function() {
                    // init dmeo
                    demo();
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

    <script>
        function select_img() {
            $('#usr_img').click();
        }
        function displayImage(e) {
            if (e.files[0]) {
                var reader = new FileReader();
                reader.onload = function(e){
                    document.querySelector('#pic_circlce').setAttribute('src', e.target.result);
                }
                reader.readAsDataURL(e.files[0]);
            }
        }
    </script>
@endsection