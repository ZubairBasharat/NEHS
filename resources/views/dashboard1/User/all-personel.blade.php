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
                    <h5 class="text-dark font-weight-bold my-2 mr-5 text-uppercase">Personnel List</h5>
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
                    <div class="card-toolbar container">
                    @if(Auth::user()->hasPermissionTo(27))
                        <!--begin::Button-->
                        <a href="#" class="btn btn-primary font-weight-bolder mx-2 my-2" data-toggle="modal" data-target="#invite">
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
                        </span>Invite Personnel
                        </a>
                    @endif

{{--                        <a href="#" class="btn btn-primary font-weight-bolder mx-2">--}}
{{--                            <span class="svg-icon svg-icon-md">--}}
{{--                              --}}
{{--                                <svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" width="24px" height="24px" viewBox="0 0 24 24" version="1.1">--}}
{{--                                    <g stroke="none" stroke-width="1" fill="none" fill-rule="evenodd">--}}
{{--                                        <rect x="0" y="0" width="24" height="24" />--}}
{{--                                        <circle fill="#000000" cx="9" cy="15" r="6" />--}}
{{--                                        <path d="M8.8012943,7.00241953 C9.83837775,5.20768121 11.7781543,4 14,4 C17.3137085,4 20,6.6862915 20,10 C20,12.2218457 18.7923188,14.1616223 16.9975805,15.1987057 C16.9991904,15.1326658 17,15.0664274 17,15 C17,10.581722 13.418278,7 9,7 C8.93357256,7 8.86733422,7.00080962 8.8012943,7.00241953 Z" fill="#000000" opacity="0.3" />--}}
{{--                                    </g>--}}
{{--                                </svg>--}}
{{--                               --}}
{{--                            </span>Import from Excel--}}
{{--                        </a>--}}
                        <!--end::Button-->


                        <div class="modal fade w-100" id="locations" data-backdrop="static" tabindex="-1" role="dialog" aria-labelledby="staticBackdrop" aria-hidden="true">
                            <div class="modal-dialog modal-dialog-centered" role="document">
                                <div class="modal-content">
                                    <div class="modal-header" style="background: #4a4e6b;">
                                        <h5 class="modal-title text-uppercase text-white" id="exampleModalLabel">locations</h5>
                                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                            <i aria-hidden="true" class="ki ki-close text-white"></i>
                                        </button>
                                    </div>
                                    <div class="modal-body p-10">
{{--                                        <div class="mb-7">--}}
{{--                                            <div class="row align-items-center">--}}
{{--                                                <div class="col-md-12 col-xl-8">--}}
{{--                                                    <div class="row align-items-center">--}}
{{--                                                        <div class="col-md-12 ">--}}
{{--                                                            <div class="input-icon">--}}
{{--                                                                <input type="text" class="form-control" placeholder="Search..." id="kt_datatable_search_query2" />--}}
{{--                                                                <span>--}}
{{--                                                           <i class="flaticon2-search-1 text-muted"></i>--}}
{{--                                                             </span>--}}
{{--                                                            </div>--}}
{{--                                                        </div>--}}
{{--                                                    </div>--}}
{{--                                                </div>--}}
{{--                                            </div>--}}
{{--                                        </div>--}}
                                        <form action="{{route('personal.addlocation')}}" method="post" >
                                            @csrf
                                            <input type="hidden" id="l_w_id" name="w_id">
                                            <div class="row">
                                                <div class="col-md-8">
                                                    <select class="form-control" name="project" required>
                                                        <option value="" readonly disabled selected>Select Location</option>
                                                        @foreach($projects as $project)
                                                            <option value="{{$project->name}}">{{$project->name}}</option>
                                                        @endforeach
                                                    </select>
                                                </div>
                                                <div class="col-md-6">
                                                    <input type="text" class="form-control" name="loc">
                                                </div>
                                                <div class="col-md-6">
                                                    <button type="submit" class="btn btn-success">+Add</button>
                                                </div>
                                            </div>
                                        </form>

                                        <table class="table" id="d">
                                            <thead>
                                            <tr>

                                                <th >Location</th>
                                                <th >Remove</th>

                                            </tr>
                                            </thead>
                                            <tbody id="show-location-data" >

                                            </tbody>
                                        </table>

                                    </div>

                                </div>
                            </div>
                        </div>



                        <!--begin::Button-->
                        <a href="" class="btn btn-primary font-weight-bolder mx-2 my-2" data-toggle="modal" data-target="#assignCommon" >
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
                            </span>Assign Common Course
                        </a>
                        <!--end::Button-->
                        <!--begin::Button-->
                        <a href="#" class="btn btn-primary font-weight-bolder mx-2 my-2">
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
                        <div class="modal fade w-100" id="invite" data-backdrop="static" tabindex="-1" role="dialog" aria-labelledby="staticBackdrop" aria-hidden="true">
        <div class="modal-dialog modal-dialog-centered" role="document">
            <div class="modal-content" style="min-width:650px !important;">
                <div class="modal-header" style="background: #4a4e6b;">
                    <h5 class="modal-title text-uppercase text-white" id="exampleModalLabel">Invite</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <i aria-hidden="true" class="ki ki-close text-white"></i>
                    </button>
                </div>
                <div class="modal-body p-0">
                    <div class="row">
                        <div class="col-12">
                            <form class="form" action="{{url('manager/invite-common')}}" method="POST">
                                @csrf
                                <div class="card-body">
                                    <div class="form-group">
                                        <input class="form-control h-auto rounded-pill border-0 py-4 px-8 @error('name') is-invalid @enderror" type="text" placeholder="First name" name="name" value="{{ old('name') }}" required />
                                        @error('name')
                                        <span class="invalid-feedback" role="alert">
                                                            <strong>{{ $message }}</strong>
                                                        </span>
                                        @enderror
                                    </div>
                                    <div class="form-group">
                                        <input class="form-control h-auto rounded-pill border-0 py-4 px-8 @error('lname') is-invalid @enderror" type="text" placeholder="Last name" name="lname" value="{{ old('lname') }}" required />
                                        @error('lname')
                                        <span class="invalid-feedback" role="alert">
                                                            <strong>{{ $message }}</strong>
                                                        </span>
                                        @enderror
                                    </div>
                                    <div class="form-group">
                                        <input class="form-control h-auto rounded-pill border-0 py-4 px-8 @error('email') is-invalid @enderror" id="email" type="email" placeholder="Email" name="email" value="{{ old('email') }}" required  autocomplete="off" />
                                        @error('email')
                                        <span class="invalid-feedback" role="alert">
                                                            <strong>{{ $message }}</strong>
                                                        </span>
                                        @enderror
                                    </div>
                                    {{--                                                        <div class="form-group">--}}
                                    {{--                                                            <input id="password" type="password" name="password" class="form-control h-auto  rounded-pill border-0 py-4 px-8 @error('password') is-invalid @enderror" placeholder="Password"  required />--}}
                                    {{--                                                            @error('password')--}}
                                    {{--                                                            <span class="invalid-feedback" role="alert">--}}
                                    {{--                                                             <strong>{{ $message }}</strong>--}}
                                    {{--                                                             </span>--}}
                                    {{--                                                            @enderror--}}
                                    {{--                                                        </div>--}}
                                    {{--                                                        <div class="form-group">--}}
                                    {{--                                                            <input class="form-control h-auto rounded-pill border-0 py-4 px-8" id="password-confirm" type="password" placeholder="Confirm Password" name="password_confirmation" required/>--}}
                                    {{--                                                        </div>--}}
                                    <div class="form-group row">
                                        <label class="col-4 col-form-label">Gender</label>
                                        <div class="col-8 col-form-label">
                                            <div class="radio-inline">
                                                <label class="radio radio-success">
                                                    <input type="radio" name="gender" value="1" checked/>
                                                    <span></span>
                                                    Male
                                                </label>
                                                <label class="radio radio-success">
                                                    <input type="radio" name="gender"  value="2" />
                                                    <span></span>
                                                    Female
                                                </label>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="form-group row">
                                        <label class="col-4 col-form-label">Native language</label>
                                        <div class="col-8 col-form-label">
                                            <div class="radio-inline">
                                                <label class="radio radio-solid">
                                                    <input type="radio" name="native_language"  checked value="English"/> English
                                                    <span></span>
                                                </label>
                                                <label class="radio radio-solid">
                                                    <input type="radio" name="native_language"  value="Spanish"/> Spanish
                                                    <span></span>
                                                </label>
                                            </div>
                                        </div>
                                    </div>

                                    <div class="form-group row">

                                        <div class="col-8">
                                            <label for="selectcourse">Department</label>
                                            <div class="input-group">
                                                <select name="department" class="form-control" required>
                                                    <option value="">----Select Department----</option>
                                                    @foreach ($departments as $department)
                                                        <option value="{{$department->id}}">{{$department->name}}</option>
                                                    @endforeach


                                                </select>
                                            </div>
                                        </div>
                                        {{--                                                            <div class="form-group">--}}
                                        {{--                                                                <select class="form-control h-auto rounded-pill border-0 py-4 px-8" name="role">--}}
                                        {{--                                                                    <option disabled selected readonly class="text-dark">Select Role</option>--}}
                                        {{--                                                                    @foreach($rolls as $rol)--}}
                                        {{--                                                                        @if($rol->name != 'Admin')--}}
                                        {{--                                                                        <option class="text-dark" value="{{$rol->id}}">{{$rol->name}}</option>--}}
                                        {{--                                                                        @endif--}}
                                        {{--                                                                    @endforeach--}}
                                        {{--                                                                </select>--}}
                                        {{--                                                            </div>--}}
                                        {{--                                                        </div>--}}

                                    </div>
                                    <div class="form-group row">
                                        <label class="col-4 col-form-label">Type of Worker</label>
                                        <div class="col-8 col-form-label">
                                            <div class="radio-inline">
                                                <label class="radio radio-solid">
                                                    <input type="radio" name="type"  checked value="Employee"/> Employee
                                                    <span></span>
                                                </label>
                                                <label class="radio radio-solid">
                                                    <input type="radio" name="type"  value="emporary Labor"/> Temporary Labor
                                                    <span></span>
                                                </label>
                                                <label class="radio radio-solid">
                                                    <input type="radio" name="type"  value="Subcontractor"/> Subcontractor
                                                    <span></span>
                                                </label>
                                            </div>
                                        </div>
                                    </div>

                                    <div class="card-footer">
                                        <div class="row">
                                            <div class="col-lg-12">
                                                <button type="reset" class="btn btn-primary mr-2" data-dismiss="modal">Close</button>
                                                <button type="submit" class="btn btn-secondary">Send Invitation</button>
                                            </div>
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

                        <div class="modal fade w-100" id="assignCommon" data-backdrop="static" tabindex="-1" role="dialog" aria-labelledby="staticBackdrop" aria-hidden="true">
        <div class="modal-dialog modal-dialog-centered" role="document">
            <div class="modal-content" >
                <div class="modal-header" style="background: #4a4e6b;">
                    <h5 class="modal-title text-uppercase text-white" id="exampleModalLabel">Assign Course To Departments</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <i aria-hidden="true" class="ki ki-close text-white"></i>
                    </button>
                </div>
                <div class="modal-body p-0">
                    <div class="row">
                        <div class="col-12">
                            <form class="form" action="{{url('manager/assign-common')}}" method="POST">
                                @csrf
                                <div class="card-body">
                                    <div class="form-group row">

                                        <div class="col-12">
                                            <label for="selectcourse">Department</label>
                                            <div class="input-group">
                                                <select name="department_id" class="form-control" required>
                                                    <option value="">----Select Department----</option>
                                                    @foreach ($departments as $department)
                                                    <option value="{{$department->id}}">{{$department->name}}</option>
                                                    @endforeach


                                                </select>
                                            </div>
                                        </div>
                                        <div class="col-12">
                                            <label for="selectcourse">Course</label>
                                            <div class="input-group">
                                                <select name="course_id" class="form-control" required>
                                                    <option value="">----Select Course----</option>
                                                    @foreach ($courses as $course)
                                                    <option value="{{$course->id}}">{{$course->name}}</option>
                                                    @endforeach


                                                </select>
                                            </div>

                                        </div>
                                    </div>
                                </div>
                                <div class="card-footer">
                                    <div class="row">
                                        <div class="col-lg-12">
                                            <button type="reset" class="btn btn-primary mr-2" data-dismiss="modal">Close</button>
                                            <button type="submit" class="btn btn-secondary">Save</button>
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


                        <!-- begin::personel-modal-->
                        <div class="modal fade w-100" id="editpersonnel" data-backdrop="static"  tabindex="-1" role="dialog" aria-labelledby="staticBackdrop" aria-hidden="true">
                            <div class="modal-dialog modal-dialog-centered modal-xl" role="document">
                                <div class="modal-content">
                                    <div class="modal-header" style="background: #4a4e6b;">
                                        <h5 class="modal-title text-uppercase text-white" id="exampleModalLabel">personnel summary</h5>
                                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                            <i aria-hidden="true" class="ki ki-close text-white"></i>
                                        </button>
                                    </div>
                                    <div class="modal-body p-0">
                                        <div class="row">
                                            <div class="col-12">
                                                <form class="form"   method="post" action="" id="edit-form" enctype="multipart/form-data" >
                                                    @method('PUT')
                                                    @csrf
                                                    <input  type="hidden" id="edit-id" />
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
                                                            <div class="col-lg-2">
                                                                <label>Gender</label>
                                                                <div class="radio-inline">
                                                                    <label class="radio radio-solid">
                                                                        <input class="" type="radio" name="gender" id="edit-gender" checked value="2"  /> Male
                                                                        <span></span>
                                                                    </label>
                                                                    <label class="radio radio-solid">
                                                                        <input type="radio" name="gender" id="edit-gender" value="2"/> Female
                                                                        <span></span>
                                                                    </label>
                                                                </div>
                                                                <span class="form-text text-muted">Please select user group</span>
                                                            </div>
                                                            <div class="col-lg-2">
                                                                {{--@if(Auth::user()->user_personel->photo == )--}}
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
                                                                    <input type="date" class="form-control" id="edit-date_of_birth" name="date_of_birth"/>
                                                                </div>
                                                                <span class="form-text text-muted">Please enter your Date of Birth </span>
                                                            </div>
                                                            <div class="col-lg-4">
                                                                <label>Hire Date</label>
                                                                <div class="input-group">

                                                                    <input type="date" class="form-control" name="hire_date" id="edit-hire_date"/>
                                                                </div>
                                                                <span class="form-text text-muted">Please enter your Date of Hire </span>
                                                            </div>
                                                        </div>
                                                        <div class="form-group row">
                                                            <div class="col-lg-4">
                                                                <label>Native Language</label>
                                                                <div class="radio-inline">
                                                                    <label class="radio radio-solid">
                                                                        <input type="radio" name="native_language" id="edit-native_language" checked value="English"/> English
                                                                        <span></span>
                                                                    </label>
                                                                    <label class="radio radio-solid">
                                                                        <input type="radio" name="native_language" id="edit-native_language" value="Spanish"/> Spanish
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
                                                                    <select name="dep_id" id="edit-dep_id" class="form-control custom-select">
                                                                        <option value="Select">Select</option>
                                                                        @foreach($departments as $dep)
                                                                            <option value="{{$dep->id}}">{{$dep->name}}</option>
                                                                        @endforeach
                                                                    </select>
                                                                </div>

                                                            </div>
                                                            <div class="col-lg-3">
                                                                <label>Project and Job Number</label>
                                                                <div class='input-group'>
                                                                    {{--                                                                    <input type="text" name="job_no" id="edit-job_no" placeholder="Enter your Project Or Job Number " class="form-control">--}}
                                                                    <select class="form-control" name="job_no" id="edit-job_no">
                                                                        <option value="" disabled selected readonly>Choose</option>
                                                                        @foreach($projects as $projects)
                                                                            <option value="{{$projects->id}}">{{$projects->name}}</option>
                                                                        @endforeach
                                                                    </select>
                                                                </div>
                                                            </div>
                                                            <div class="col-lg-5">
                                                                <label>Type of Worker</label>
                                                                <div class="radio-inline">
                                                                    <label class="radio radio-solid">
                                                                        <input type="radio" name="type" id="edit-type" checked value="Employee"/> Employee
                                                                        <span></span>
                                                                    </label>
                                                                    <label class="radio radio-solid">
                                                                        <input type="radio" name="type" id="edit-type" value="emporary Labor"/> Temporary Labor
                                                                        <span></span>
                                                                    </label>
                                                                    <label class="radio radio-solid">
                                                                        <input type="radio" name="type" id="edit-type" value="Subcontractor"/> Subcontractor
                                                                        <span></span>
                                                                    </label>
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <h4>Emergency contact</h4>
                                                        <div class="form-group row">

                                                            <div class="col-lg-4">
                                                                <label>First Name</label>
                                                                <div class='input-group'>
                                                                    <input type="text" name="em_fname" id="edit-em_fname" placeholder="Enter Emergency First Name" class="form-control" required>
                                                                </div>
                                                            </div>
                                                            <div class="col-lg-4">
                                                                <label>Last Name</label>
                                                                <div class='input-group'>
                                                                    <input type="text" name="em_lname" id="edit-em_lname" placeholder="Enter Emergency contact Last Name" class="form-control" required>
                                                                </div>
                                                            </div>
                                                            <div class="col-lg-4">
                                                                <label>Phone</label>
                                                                <div class='input-group'>
                                                                    <input type="text" name="em_no" id="edit-em_no" placeholder="Enter Emergency contact Number" class="form-control" required>
                                                                </div>
                                                            </div>
                                                            <h4 style="margin-left: 14px;">Emergency contact 2</h4>
                                                            <div class="col-lg-4"></div>
                                                            <div class="col-lg-4"></div>
                                                            <div class="col-lg-4">
                                                                <label>First Name</label>
                                                                <div class='input-group'>
                                                                    <input type="text" name="em_fname2" id="edit-em_fname2" placeholder="Enter Emergency First Name" class="form-control" >
                                                                </div>
                                                            </div>
                                                            <div class="col-lg-4">
                                                                <label>Last Name</label>
                                                                <div class='input-group'>
                                                                    <input type="text" name="em_lname2" id="edit-em_lname2" placeholder="Enter Emergency contact Last Name" class="form-control" >
                                                                </div>
                                                            </div>
                                                            <div class="col-lg-4">
                                                                <label>Phone 2</label>
                                                                <div class='input-group'>
                                                                    <input type="text" name="em_no2" id="edit-em_no2" placeholder="Enter Emergency contact Number" class="form-control" >
                                                                </div>
                                                            </div>


                                                            <div class="col-lg-4" style="display:none">
                                                                <label for="companyName">Status</label>
                                                                <div class="input-group">
                                                                    <select class="form-control" name="status" id="edit-status">
                                                                        <option value="1">Active</option>
                                                                        <option value="0">Deactive</option>
                                                                    </select>

                                                                </div>
                                                            </div>

                                                        </div>
                                                    </div>
                                                    <div class="card-footer">
                                                        <div class="row container">
                                                            <div class="col-12 my-2">
                                                                <button type="reset" class="btn btn-primary my-2" data-dismiss="modal">Close</button>
                                                                <button type="submit" class="btn btn-secondary my-2 mx-1">Save</button>
                                                         
{{--                                                                <button type="reset" class="btn btn-primary my-2 mx-1 print-data" data-toggle="modal" data-target="#id-card" data-dismiss="modal">Print ID card</button>--}}
                                                                <a href="" id="print_card" class="btn btn-primary my-2 mx-1 print-data">View And Print</a>
                                                                <a  class="btn btn-secondary my-2 mx-1">Print Summary</a>
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
                                                <button type="reset" class="btn btn-secondary show-table-plan my-2" >Training Plan</button>
                                                <button type="reset" class="btn btn-outline-primary show-table-data my-2 mx-1" data-sid='course'>Assign Courses</button>
                                                <button type="reset" class="btn btn-outline-primary show-table-data my-2 mx-1" data-sid='eq'>Certificates</button>
                                                <button id="user_groups" type="reset" class="btn btn-outline-primary my-2 mx-1 show-table-data" data-sid='gr'>Groups / Classes</button>
                                            </div>
                                        </div>
                                        <div class="row">
                                            <div class="col-lg-12">
                                                <div class="table-responsive-lg w-100" id="show-table-plan">
                                                    <table width="100%" class="table table-striped">
                                                        <thead>
                                                        <tr>
                                                            <th>Name</th>
                                                            <th>Assign By</th>
                                                            <th>Content Type</th>
                                                            <th>Language</th>
                                                            <th>Assign Date</th>
                                                            <th>Date Finish</th>
                                                            <th>Result</th>

                                                        </tr>
                                                        </thead>

                                                        <tbody class="w-100" id="show-courses">

                                                        </tbody>
                                                    </table>
                                                </div>
                                                <div class="table-responsive-lg w-100" id="show-table-data">
                                                    <table width="100%" class="table table-striped">

                                                    </table>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <!--end::Model-->



                        <!--begin-card-model-->
                        <div class="modal fade w-100" id="id-card" data-backdrop="static"  tabindex="-1" role="dialog" aria-labelledby="staticBackdrop" aria-hidden="true" aria-inval >
                            <div  class="modal modal-dialog modal-dialog-centered modal-lg" role="document">
                                <div class="modal-content" id="print_area">
                                    <div class="modal-body">
                                        <div class="row justify-content-start align-items-center">
                                            <div class="col-lg-4">
                                                <img src="{{asset('assets/profile.png')}}" id="card-show_img" alt="" class="img-fluid w-100 h-100">

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
                                                     src="https://api.qrserver.com/v1/create-qr-code/?data=sdfdsfs#4&amp;size=180x180&amp;bgcolor=f8f9fa"
                                                     alt=""
                                                     title="" />
                                            </div>
                                        </div>
                                    </div>
                                    <div class="modal-footer">
                                        <button class="btn btn-info" type="button" onclick="printcard()">Print</button>
                                        <button class="btn btn-primary" type="button" data-dismiss="modal">Close</button>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <!--End::card-model-->
                    </div>
                </div>
                <div class="card-body">
                    <!--begin: Search Form-->
                    <!--begin::Search Form-->
                    <div class="mb-7">
                        <div class="row align-items-center">
                            <div class="col-lg-9 col-xl-8">
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

                        </div>
                    </div>
                    <!--end::Search Form-->
                    <!--end: Search Form-->
                    <!--begin: Datatable-->
                    <table class="datatable datatable-bordered datatable-head-custom" id="kt_datatable">
                        <thead>
                        <tr>

                            <th title="Field #2">Full Name </th>
                            <th title="Field #3">Email</th>
                            <th title="Field #4">phone</th>
                            <th title="Field #5">Department</th>
                            <th title="Field #6">Status</th>
                            <th title="Field #7">Locations</th>
                            <th title="Field #8">Hire Date</th>
                            @if(Auth::user()->hasPermissionTo('edit personel'))
                            <th title="Field #9">Edit</th>
                                @endif


                        </tr>
                        </thead>
                        <tbody>

                        @foreach($workers as $work)
                            <tr>

                                <td>{{$work->first_name}} {{$work->last_name}}</td>
                                <td>{{$work->email}}</td>
                                <td>{{$work->phone}}</td>
                                <td><?php
                                    try {
                                        echo departments_byid($work->dep_id)->name?:'';
                                    } catch (Exception $e) {
                                        echo 'nill';
                                    }
                                    ?>
                                </td>

                                <td>{{$work->status}}</td>
                                <td><a  onclick="editlocation({{$work->id}})" data-toggle="modal" data-target="#locations"><i class="fa fa-plus" style="color:green; border:1px solid red; cursor:pointer;"></i></a></td>

                                <td>{{$work->hire_date}}</td>
                                @if(Auth::user()->hasPermissionTo('edit personel'))
                                <td><a class="btn btn-primary font-weight-bolder " onclick="editcomp({{$work->id}})" data-id="{{$work->id}}" data-toggle="modal" data-target="#editpersonnel"><i class="fa fa-edit"></i></a></td>
                                @endif

                            </tr>
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


        $(document).ready(function(){


            $('.show-table-data').click(function(){
                $('#show-table-plan').hide();
                var v_token = "{{csrf_token()}}";
                var show = $(this).data('sid');
                var w_id = $('#edit-id').val();
                $.ajax({
                    type:'POST',
                    url:"{{route('manager.show.personal.ajax-data')}}",
                    cache:false,
                    data:{show:show,w_id:w_id,_token: v_token},
                    success:function (data) {

                        // console.log(data);
                        $('#show-table-data').html(data);

                    }


                });


            });

            $('.show-table-plan').click(function () {

                $('#show-table-plan').show();
                $('#show-table-data').html('');

            });



        });

        function editlocation(id){
            var v_token = "{{csrf_token()}}";
            $('#l_w_id').val(id);
            $.ajax({
                type:'POST',
                url:"{{route('show.personal.location')}}",
                cache:false,
                data:{w_id:id,_token: v_token},
                success:function (data) {

                    // console.log(data);
                    $('#show-location-data').html(data);

                }


            });
        }

        function editcomp(id){

            var host ="{{url('all-personnel')}}";
            var asset ="{{asset('/')}}";
            var id=parseInt(id);
            var url=host;
            var href ="{{url('worker-print-card/')}}";
            var url2=host+'/'+id;

            $.ajax({
                type: "GET",
                url: url + '/' + id + '/edit',
                data:{id:id},
                cache: false,
                success: function(dataa){
                    var data =dataa.data;
                    var courses =dataa.courses;
                    console.log(courses);

                    $('#edit-id').val(data.id);

                    $('#edit-form').attr('action',url2);
                    $('#edit-first_name').val(data.first_name);
                    $('#card-show_img').attr('src',asset+data.photo);
                    $('#card-first_name').html(data.first_name);
                    $('#card-last_name').html(data.last_name);
                    $('#edit-last_name').val(data.last_name);

                    $('#edit-gender').val(data.gender);
                    $('#edit-email').val(data.email);
                    $('#edit-date_of_birth').val(data.date_of_birth);
                    $('#edit-hire_date').val(data.hire_date);
                    $('#edit-native_language').val(data.native_language);
                    $('#edit-phone').val(data.phone);
                    $('#edit-title').val(data.title);
                    $('#pic_circlce').attr('src',asset+data.photo);
                    $('#print_card').attr('href',href+'/'+data.id);
                    $('#edit-dep_id').val(data.dep_id);
                    $('#edit-job_no').val(data.job_no);
                    $('#edit-type').val(data.type);
                    $('#edit-em_no').val(data.em_no);
                    $('#edit-em_no2').val(data.em_no2);
                    $('#edit-em_fname').val(data.em_fname);
                    $('#edit-em_fname2').val(data.em_fname2);
                    $('#edit-em_lname').val(data.em_lname);
                    $('#edit-em_lname2').val(data.em_lname2);
                    $('#edit-status').val(data.status);

                    $('#show-courses').html(dataa.courses);
                    $('#edit-u-t-c').html(dataa.total);


                }
            });
        }




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

        function printcard() {


            // var printContents = $('#print_area').innerHTML;


            // var originalContents = document.body.innerHTML;
            //
            //
            // document.body.innerHTML = $('#print_area').innerHTML;


            window.print();


            document.body.innerHTML = originalContents;


            window.onafterprint = function (event) {



            };
        }
    </script>

    @error('name')
    <script>
        toastr.warning('','{{$message}}');
    </script>
    @enderror
    @error('email')
    <script>
        toastr.warning('','{{$message}}');
    </script>
    @enderror
    @error('password')
    <script>
        toastr.warning('','{{$message}}');
    </script>
    @enderror

@endsection
