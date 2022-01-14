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
                    <h5 class="text-dark font-weight-bold my-2 mr-5 text-uppercase">Questions</h5>
                    <!--end::Page Title-->
                    <!--begin::Breadcrumb-->
                    <ul class="breadcrumb breadcrumb-transparent breadcrumb-dot font-weight-bold p-0 my-2 font-size-sm">
                        <li class="breadcrumb-item">
                            <a href="{{url('/dashboard1')}}" class="text-muted">Home</a>
                        </li>
                        <li class="breadcrumb-item">
                            <a href="{{url('/admin/course-assignment/'.$id.'/'.$language)}}" class="text-muted">back</a>
                        </li>
                    </ul>
                    <!--end::Breadcrumb-->
                </div>
                <!--end::Page Heading-->
            </div>
            <!--end::Info-->

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

                        <a href="#" class="btn btn-primary font-weight-bolder mx-2" data-toggle="modal" data-target="#addtruefalse">
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
                        </span>Add True/false
                        </a>
                        <!--begin::Button-->
                        <a href="#" class="btn btn-primary font-weight-bolder mx-2" data-toggle="modal" data-target="#addworker">
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
                        </span>Add Questions
                        </a>
                        <!--end::Button-->

                        <!-- begin::Model-->
                        <!-- Modal-->
                        <div class="modal fade w-100" id="addtruefalse" data-backdrop="static" tabindex="-1" role="dialog" aria-labelledby="staticBackdrop" aria-hidden="true">
                            <div class="modal-dialog modal-dialog-centered modal-xl" role="document">
                                <div class="modal-content">
                                    <div class="modal-header" style="background: #4a4e6b;">
                                        <h5 class="modal-title text-uppercase text-white" id="exampleModalLabel">Question summary</h5>
                                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                            <i aria-hidden="true" class="ki ki-close text-white"></i>
                                        </button>
                                    </div>
                                    <div class="modal-body p-0">
                                        <div class="row">
                                            <div class="col-12">
                                                <form class="form"   action="{{route('question.true-false')}}" method="post" >
                                                    @csrf
                                                    <div class="card-body">
                                                        <div class="form-group row">
                                                            <input type="hidden" name="course_id" value="{{$id}}"/>
                                                            <input type="hidden" name="lng" value="{{$language}}"/>
                                                            <div class="col-lg-8">
                                                                <label>Question</label>
                                                                <input type="text" class="form-control" placeholder="Write The Question Here" name="question"  required/>
                                                                <span class="form-text text-muted">Please Enter Question</span>
                                                            </div>

                                                        </div>
                                                        <div class="form-group row">
                                                            <div class="col-lg-4">
                                                                <label><input type="radio" name="value" value="1" checked="true"> True </label>
                                                            </div>
                                                            <div class="col-lg-4">
                                                                <label><input type="radio" name="value" value="0" /> False </label>

                                                            </div>
                                                        </div>



                                                    </div>
                                                    <div class="card-footer">
                                                        <div class="row">
                                                            <div class="col-lg-6">
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
                        <!--end::Model-->
                        <!-- Modal-->
                        <div class="modal fade w-100" id="addworker" data-backdrop="static" tabindex="-1" role="dialog" aria-labelledby="staticBackdrop" aria-hidden="true">
                            <div class="modal-dialog modal-dialog-centered modal-xl" role="document">
                                <div class="modal-content">
                                    <div class="modal-header" style="background: #4a4e6b;">
                                        <h5 class="modal-title text-uppercase text-white" id="exampleModalLabel">Question summary</h5>
                                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                            <i aria-hidden="true" class="ki ki-close text-white"></i>
                                        </button>
                                    </div>
                                    <div class="modal-body p-0">
                                        <div class="row">
                                            <div class="col-12">
                                                <form class="form"   action="{{route('question.store')}}" method="POST" enctype="multipart/form-data"  >

                                                    <div class="card-body">
                                                        <div class="form-group row">
                                                            @csrf
                                                            <input type="hidden" name="course_id" value="{{$id}}"/>
                                                            <input type="hidden" name="lng" value="{{$language}}"/>
                                                            <div class="col-lg-4">
                                                                <label>Question</label>
                                                                <input type="text" class="form-control" placeholder="Write The Question Here" name="question" id="question" required/>
                                                                <span class="form-text text-muted">Please Enter Question</span>
                                                            </div>
                                                            <div class="col-lg-4">
                                                                <label>Answer</label>
                                                                <input type="text" class="form-control" placeholder="Write The Answer Here" name="answer" id="answer" required readonly/>
                                                                <span class="form-text text-muted">Please Enter Answer</span>
                                                            </div>
                                                            <div class="col-lg-4">
                                                                <img src="{{asset('/assets/media/users/default.jpg')}}" alt="question" id='pic_circlce' onclick="select_img()" width="150">
                                                               <p>Choose Question Image</p>
                                                                <input type="file" name="photo" id="usr_img" onChange="displayImage(this)" style="display: none;"  />
                                                            </div>

                                                        </div>
                                                        <div class="form-group row">
                                                            <div class="col-lg-4">
                                                                <label><input type="radio" name="opt" data-o_id="1" class="opt"/> Option 1</label>
                                                                <input type="text" class="form-control" placeholder="Enter Your Email" id="option1" name="option1" />
                                                                <span class="form-text text-muted">Enter Your Option</span>
                                                            </div>
                                                            <div class="col-lg-4">
                                                                <label><input type="radio" name="opt" data-o_id="2" class="opt"/> Option 2 </label>
                                                                <input type="text" class="form-control" placeholder="Enter Your Option " id="option2" name="option2" />
                                                                <span class="form-text text-muted">Enter Your Option</span>
                                                            </div>
                                                            <div class="col-lg-4">
                                                                <label><input type="radio" name="opt" data-o_id="3" class="opt"/> Option 3 </label>
                                                                <input type="text" class="form-control" placeholder="Enter Your Option " id="option3" name="option3" />
                                                                <span class="form-text text-muted">Enter Your Option</span>
                                                            </div>
                                                        </div>

                                                        <div class="form-group row">
                                                            <div class="col-lg-4">
                                                                <label><input type="radio" name="opt" data-o_id="4" class="opt"/> Option 4 </label>
                                                                <input type="text" class="form-control" placeholder="Enter Your Option " id="option4" name="option4" />
                                                                <span class="form-text text-muted">Enter Your Option</span>
                                                            </div>

                                                        </div>


                                                    </div>
                                                    <div class="card-footer">
                                                        <div class="row">
                                                            <div class="col-lg-6">
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
                        <!--end::Model-->
                        <!--begin::Button--><!-- Modal-->
                        <div class="modal fade w-100" id="editpersonnel" data-backdrop="static"  tabindex="-1" role="dialog" aria-labelledby="staticBackdrop" aria-hidden="true">
                            <div class="modal-dialog modal-dialog-centered modal-xl" role="document">
                                <div class="modal-content">
                                    <div class="modal-header" style="background: #4a4e6b;">
                                        <h5 class="modal-title text-uppercase text-white" id="exampleModalLabel">Edit Question</h5>
                                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                            <i aria-hidden="true" class="ki ki-close text-white"></i>
                                        </button>
                                    </div>
                                    <div class="modal-body p-0">
                                        <div class="row">
                                            <div class="col-12">
                                                <form class="form"   method="post" action="" id="edit-form" enctype="multipart/form-data">
                                                    @method('PUT')
                                                    @csrf
                                                    <div class="card-body">
                                                        <div class="form-group row">

                                                            <input type="hidden" name="course_id" value="{{$id}}"/>
                                                            {{--</div>--}}
                                                            <div class="col-lg-4">
                                                                <label>Question</label>
                                                                <input type="text" class="form-control" placeholder="Write The Question Here" name="question" id="edit-question" required/>
                                                                <span class="form-text text-muted">Please Enter Question</span>
                                                            </div>
                                                            <div class="col-lg-4">
                                                                <label>Answer</label>
                                                                <input type="text" class="form-control" placeholder="Write The Answer Here" name="answer" id="edit-answer" required readonly/>
                                                                <span class="form-text text-muted">Please Enter Answer</span>
                                                            </div>
                                                            <div class="col-lg-4">
                                                                <img src="{{asset('/assets/media/users/default.jpg')}}" alt="question" id='edit_pic_circlce' onclick="select_img2()" width="150">
                                                                <p>Choose Question Image</p>
                                                                <input type="file" name="photo" id="edit_usr_img" onChange="displayImage2(this)" style="display: none;"  />
                                                            </div>

                                                        </div>
                                                        <div class="form-group row">
                                                            <div class="col-lg-4">
                                                                <label><input type="radio" name="opt" data-o_id="1" class="eopt"/> Option 1 </label>
                                                                <input type="text" class="form-control" placeholder="Enter Your Email" id="edit-option1" name="option1" />
                                                                <span class="form-text text-muted">Enter Your Option</span>
                                                            </div>
                                                            <div class="col-lg-4">
                                                                <label><input type="radio" name="opt" data-o_id="2" class="eopt"/> Option 2 </label>
                                                                <input type="text" class="form-control" placeholder="Enter Your Option " id="edit-option2" name="option2" />
                                                                <span class="form-text text-muted">Enter Your Option</span>
                                                            </div>
                                                            <div class="col-lg-4">
                                                                <label><input type="radio" name="opt" data-o_id="3" class="eopt"/> Option 3 </label>
                                                                <input type="text" class="form-control" placeholder="Enter Your Option " id="edit-option3" name="option3" />
                                                                <span class="form-text text-muted">Enter Your Option</span>
                                                            </div>
                                                        </div>
                                                        <div class="form-group row">
                                                            <div class="col-lg-4">
                                                                <label><input type="radio" name="opt" data-o_id="4" class="eopt"/> Option 4 </label>
                                                                <input type="text" class="form-control" placeholder="Enter Your Option " id="edit-option4" name="option4" />
                                                                <span class="form-text text-muted">Enter Your Option</span>
                                                            </div>

                                                        </div>



                                                    </div>
                                                    <div class="card-footer">
                                                        <div class="row">
                                                            <div class="col-lg-6">
                                                                <button type="reset" class="btn btn-primary mr-2" data-dismiss="modal">Close</button>
                                                                <button type="submit" class="btn btn-secondary">Save</button>
                                                            </div>

                                                        </div>
                                                    </div>
                                                </form>
                                            </div></div>
                                    </div>

                                </div>
                            </div>
                        </div>
                        <!--end::Model-->

{{--                       true_false--}}
                        <div class="modal fade w-100" id="edit_t_f" data-backdrop="static"  tabindex="-1" role="dialog" aria-labelledby="staticBackdrop" aria-hidden="true">
                            <div class="modal-dialog modal-dialog-centered modal-xl" role="document">
                                <div class="modal-content">
                                    <div class="modal-header" style="background: #4a4e6b;">
                                        <h5 class="modal-title text-uppercase text-white" id="exampleModalLabel">Edit Question</h5>
                                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                            <i aria-hidden="true" class="ki ki-close text-white"></i>
                                        </button>
                                    </div>
                                    <div class="modal-body p-0">
                                        <div class="row">
                                            <div class="col-12">
                                                <form class="form"   method="post" action="" id="edit2-form" >

                                                    @csrf
                                                    <div class="card-body">
                                                        <div class="form-group row">
                                                            <input type="hidden" name="course_id" value="{{$id}}"/>
                                                            <div class="col-lg-8">
                                                                <label>Question</label>
                                                                <input type="text" class="form-control" placeholder="Write The Question Here" name="question" id="edit2-question" required/>
                                                                <span class="form-text text-muted">Please Enter Question</span>
                                                            </div>

                                                        </div>
                                                        <div class="form-group row">
                                                            <div class="col-lg-4">
                                                                <label><input type="radio" name="value" value="1" checked="true"> True </label>
                                                            </div>
                                                            <div class="col-lg-4">
                                                                <label><input type="radio" name="value" value="0" /> False </label>

                                                            </div>
                                                        </div>



                                                    </div>
                                                    <div class="card-footer">
                                                        <div class="row">
                                                            <div class="col-lg-6">
                                                                <button type="reset" class="btn btn-primary mr-2" data-dismiss="modal">Close</button>
                                                                <button type="submit" class="btn btn-secondary">Save</button>
                                                            </div>

                                                        </div>
                                                    </div>
                                                </form>
                                            </div></div>
                                    </div>

                                </div>
                            </div>
                        </div>
                        <!--end::Model-->



                        <!--end::Button-->
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
                                </div>
                            </div>
                            <div class="col-lg-3 col-xl-4 mt-5 mt-lg-0">
                                <a href="#" class="btn btn-light-primary px-6 font-weight-bold">Search</a>
                            </div>
                        </div>
                    </div>
                    <!--end::Search Form-->
                    <!--end: Search Form-->
                    <!--begin: Datatable-->
                    <table class="datatable datatable-bordered datatable-head-custom" id="kt_datatable">
                        <thead>
                        <tr>
                            {{-- <th title="Field #1">ID</th> --}}
                            <th title="Field #1">Question </th>
                            <th title="Field #2">Answer</th>
                            <th title="Field #3">Edit</th>
                            <th title="Field #4">Delete All</th>

                            {{--<th title="Field #8">Type</th>--}}

                        </tr>
                        </thead>
                        <tbody>

                        @foreach($questions as $question)
                            <tr>
                                <td>{{$question->question}}</td>
                                <td>{{$question->answer}}</td>
                                <td><a class="btn btn-primary font-weight-bolder " onclick="editcomp({{$question->id}})"  data-toggle="modal" data-target="#editpersonnel"><i class="fa fa-edit"></i></a></td>

                                <td><form action="{{ route('question.destroy',$question->id)}}" method="post">
                                        @csrf
                                        @method('DELETE')
                                        <button class="btn btn-danger" type="submit">Delete</button>
                                    </form></td>

                            </tr>
                        @endforeach


                        </tbody>
                    </table>
                    <!--end: Datatable-->
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
                                            <input type="text" class="form-control" placeholder="Search..." id="kt_datatable_search_query1" />
                                            <span>
                                                <i class="flaticon2-search-1 text-muted"></i>
                                            </span>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-3 col-xl-4 mt-5 mt-lg-0">
                                <a href="#" class="btn btn-light-primary px-6 font-weight-bold">Search</a>
                            </div>
                        </div>
                    </div>
                    <!--end::Search Form-->
                    <!--end: Search Form-->
                    <!--begin: Datatable-->
                    <table class="datatable datatable-bordered datatable-head-custom" id="kt_datatable1">
                        <thead>
                        <tr>
                            {{-- <th title="Field #1">ID</th> --}}
                            <th title="Field #1">Question </th>
                            <th title="Field #2">True/False</th>
                            <th title="Field #3">Edit</th>
                            <th title="Field #4">Delete All</th>

                            {{--<th title="Field #8">Type</th>--}}

                        </tr>
                        </thead>
                        <tbody>

                        @foreach($true_false as $question)
                            <tr>
                                <td>{{$question->question}}</td>
                                <td>@if($question->true_false == 1)True @else False @endif </td>
                                <td><a class="btn btn-primary font-weight-bolder " onclick="edit_true_false({{$question->id}})"  data-toggle="modal" data-target="#edit_t_f"><i class="fa fa-edit"></i></a></td>

                                <td><form action="{{ route('question.destroy',$question->id)}}" method="post">
                                        @csrf
                                        @method('DELETE')
                                        <button class="btn btn-danger" type="submit">Delete</button>
                                    </form></td>

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

        function editcomp(id){


            // alert(id);
            var host ="{{url('question')}}";
            var id=parseInt(id);
            var url=host;
            var url2=host+'/'+id;
            var asset ="{{asset('/images/questions')}}/";
            var asset2 ="{{asset('/assets/media/users/default.jpg')}}";

            $.ajax({
                type: "GET",
                url: url + '/' + id + '/edit',
                data:{id:id},
                cache: false,
                success: function(data){
                    // console.log(data);
                    $('#edit-id').val(data.id);

                    $('#edit-form').attr('action',url2);
                    $('#edit-question').val(data.question);
                    $('#edit-answer').val(data.answer);
                    $('#edit-option1').val(data.option1);
                    $('#edit-option2').val(data.option2);
                    $('#edit-option3').val(data.option3);
                    $('#edit-option4').val(data.option4);
                    if(data.photo != null){
                        $('#edit_pic_circlce').attr('src',asset+data.photo);

                    }else{
                        $('#edit_pic_circlce').attr('src',asset2);
                    }
                    $('#edit-status').val(data.status);

                }
            });
        }
        function edit_true_false(id){


            // alert(id);
            var host ="{{url('question')}}";
            var id=parseInt(id);
            var url=host;
            var url2="{{url('true-false/update/')}}/"+ id;

            $.ajax({
                type: "GET",
                url: url + '/' + id + '/edit',
                data:{id:id,type:'t_f'},
                cache: false,
                success: function(data){
                    // console.log(data);
                    $('#edit2-id').val(data.id);
                    $('#edit2-form').attr('action',url2);


                }
            });
        }

        $('.opt').click(function(){
            var id=$(this).data('o_id');

            var opt=$('#option'+id).val();
            $('#answer').val(opt);


        });
        $('.eopt').click(function(){
            var id=$(this).data('o_id');

            var opt=$('#edit-option'+id).val();
            $('#edit-answer').val(opt);


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



                $('#kt_datatable_search_status').on('change', function() {
                    datatable.search($(this).val().toLowerCase(), 'Status');
                });

                $('#kt_datatable_search_type').on('change', function() {
                    datatable.search($(this).val().toLowerCase(), 'Type');
                });

                $('#kt_datatable_search_status, #kt_datatable_search_type').selectpicker();
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
        function select_img2() {
            $('#edit_usr_img').click();
        }
        function displayImage2(e) {
            if (e.files[0]) {
                var reader = new FileReader();
                reader.onload = function(e){

                    document.querySelector('#edit_pic_circlce').setAttribute('src', e.target.result);
                }
                reader.readAsDataURL(e.files[0]);
            }
        }
    </script>


@endsection
