@extends('layout.dashadmin')

@section('header-mobile')
    <!--begin::Logo-->
    <a href="{{url('/dashboard1')}}">
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
@section('brand-logo')
    <!--begin::Logo-->
    <a href="{{url('/dashboard1')}}" class="brand-logo">
        <img alt="Logo" src="{{asset('assets/media/logos/logo2.png')}}" class="img-fluid" />
    </a>
    <!--end::Logo-->
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
@section('css')
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/toastr.min.css" integrity="sha512-vKMx8UnXk60zUwyUnUPM3HbQo8QfmNx7+ltw8Pm5zLusl1XIfwcxo8DbWCqMGKaWeNxWA8yrx5v3SaVpMvR3CA==" crossorigin="anonymous" />
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
                    <h5 class="text-dark font-weight-bold my-2 mr-5 text-uppercase">all managers</h5>
                    <!--end::Page Title-->
                    <!--begin::Breadcrumb-->
                    <ul class="breadcrumb breadcrumb-transparent breadcrumb-dot font-weight-bold p-0 my-2 font-size-sm">
                        <li class="breadcrumb-item">
                            <a href="{{url('/dashboard2')}}" class="text-muted">Home</a>
                        </li>
                        <li class="breadcrumb-item">
                            <a href="{{url('/manager')}}" class="text-muted">Managers</a>
                        </li>
                    </ul>
                    <!--end::Breadcrumb-->
                </div>
                <!--end::Page Heading-->
            </div>
            <!--end::Info-->
            <!--begin::Toolbar-->
            <div class="d-flex align-items-center">
                <!--begin::Actions-->
                <a href="#" class="btn btn-light font-weight-bold btn-sm">Actions</a>
                <!--end::Actions-->
                <!--begin::Dropdown-->
                <div class="dropdown dropdown-inline" data-toggle="tooltip" title="Quick actions" data-placement="left">
                    <a href="#" class="btn btn-icon" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                        <span class="svg-icon svg-icon-success svg-icon-2x">
                            <!--begin::Svg Icon | path:assets/media/svg/icons/Files/File-plus.svg-->
                            <svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" width="24px" height="24px" viewBox="0 0 24 24" version="1.1">
                                <g stroke="none" stroke-width="1" fill="none" fill-rule="evenodd">
                                    <polygon points="0 0 24 0 24 24 0 24" />
                                    <path d="M5.85714286,2 L13.7364114,2 C14.0910962,2 14.4343066,2.12568431 14.7051108,2.35473959 L19.4686994,6.3839416 C19.8056532,6.66894833 20,7.08787823 20,7.52920201 L20,20.0833333 C20,21.8738751 19.9795521,22 18.1428571,22 L5.85714286,22 C4.02044787,22 4,21.8738751 4,20.0833333 L4,3.91666667 C4,2.12612489 4.02044787,2 5.85714286,2 Z" fill="#000000" fill-rule="nonzero" opacity="0.3" />
                                    <path d="M11,14 L9,14 C8.44771525,14 8,13.5522847 8,13 C8,12.4477153 8.44771525,12 9,12 L11,12 L11,10 C11,9.44771525 11.4477153,9 12,9 C12.5522847,9 13,9.44771525 13,10 L13,12 L15,12 C15.5522847,12 16,12.4477153 16,13 C16,13.5522847 15.5522847,14 15,14 L13,14 L13,16 C13,16.5522847 12.5522847,17 12,17 C11.4477153,17 11,16.5522847 11,16 L11,14 Z" fill="#000000" />
                                </g>
                            </svg>
                            <!--end::Svg Icon-->
                        </span>
                    </a>
                    <div class="dropdown-menu dropdown-menu-md dropdown-menu-right p-0 m-0">
                        <!--begin::Navigation-->
                        <ul class="navi navi-hover">
                            <li class="navi-header font-weight-bold py-4">
                                <span class="font-size-lg">Choose Label:</span>
                                <i class="flaticon2-information icon-md text-muted" data-toggle="tooltip" data-placement="right" title="Click to learn more..."></i>
                            </li>
                            <li class="navi-separator mb-3 opacity-70"></li>
                            <li class="navi-item">
                                <a href="#" class="navi-link">
                                    <span class="navi-text">
                                        <span class="label label-xl label-inline label-light-success">Customer</span>
                                    </span>
                                </a>
                            </li>
                            <li class="navi-item">
                                <a href="#" class="navi-link">
                                    <span class="navi-text">
                                        <span class="label label-xl label-inline label-light-danger">Partner</span>
                                    </span>
                                </a>
                            </li>
                            <li class="navi-item">
                                <a href="#" class="navi-link">
                                    <span class="navi-text">
                                        <span class="label label-xl label-inline label-light-warning">Suplier</span>
                                    </span>
                                </a>
                            </li>
                            <li class="navi-item">
                                <a href="#" class="navi-link">
                                    <span class="navi-text">
                                        <span class="label label-xl label-inline label-light-primary">Member</span>
                                    </span>
                                </a>
                            </li>
                            <li class="navi-item">
                                <a href="#" class="navi-link">
                                    <span class="navi-text">
                                        <span class="label label-xl label-inline label-light-dark">Staff</span>
                                    </span>
                                </a>
                            </li>
                            <li class="navi-separator mt-3 opacity-70"></li>
                            <li class="navi-footer py-4">
                                <a class="btn btn-clean font-weight-bold btn-sm" href="#">
                                    <i class="ki ki-plus icon-sm"></i>Add new</a>
                            </li>
                        </ul>
                        <!--end::Navigation-->
                    </div>
                </div>
                <!--end::Dropdown-->
            </div>
            <!--end::Toolbar-->
        </div>
    </div>
    <!--end::Subheader-->
@endsection
@section('dashboard')
    <!--begin::Entry-->
    <div class="d-flex flex-column-fluid">
        <!--begin::Container-->
        <div class="container" >
            <div class="card">
                <form class="form">
                    <div class="card-body">

                        <h4>Give Role To User</h4>
                        <br>
                        <br>
                        <div class="form-group row">
                            <br>
                            <div class="col-lg-4 col-md-9 col-sm-12">
                                <select class="form-control">
                                    <option disabled selected readonly>Select User</option>
                                    @foreach($users as $user)
                                        <option value="{{$user->id}}">{{$user->name}} --- Role:{{$user->roles->pluck('name')}}</option>

                                    @endforeach
                                </select>
                            </div>
                            <div class="col-lg-4 col-md-9 col-sm-12">
                                <select class="form-control">
                                    <option disabled selected readonly>Select Role</option>
                                    @foreach($rolls as $rol)
                                        <option value="{{$rol->id}}">{{$rol->name}}</option>
                                    @endforeach
                                </select>
                            </div>
                        </div>



                    </div>
                    <div class="card-footer">
                        <div class="row">
                            <div class="col-lg-6">
                                <button type="submit" class="btn btn-primary mr-2">Save</button>
                                <button type="reset" class="btn btn-secondary">Cancel</button>
                            </div>
                            <div class="col-lg-6 text-lg-right">
                                <button type="submit" class="btn btn-danger">Delete</button>
                            </div>
                        </div>
                    </div>
                </form>
            </div>
            <div class="card">
                <form class="form" action="{{route('admin.addroles')}}" method="POST" >
                    @csrf
                    <div class="card-body">
                        <h4>Add Roles</h4>
                        <div class="form-group row">
                            <div class="col-lg-6">
                                <label>Enter Roll Name:</label>
                                <input type="text" name="rolename" class="form-control" placeholder="Enter" required/>
                                {{--<span class="form-text text-muted">Please enter your full name</span>--}}
                            </div>

                        </div>
                        <div class="row">
                            <div class="col-lg-6">
                                <button type="submit" class="btn btn-primary mr-2">Save</button>
                                {{--<button type="reset" class="btn btn-secondary">Cancel</button>--}}
                            </div>

                        </div>
                    </div>
                    {{--<div class="card-footer">--}}

                    {{--</div>--}}
                </form>
            </div>
            <br>
            <br>
            <div class="card">
                <form class="form">
                    <div class="card-body">
                        <h4>Give Permission To Roles</h4>
                        <br>
                        <br>
                        <div class="form-group row">
                            <br>
                            <div class="col-lg-4 col-md-9 col-sm-12">
                                <select class="form-control">

                                    <option disabled selected readonly>Select Role</option>
                                    @foreach($rolls as $rol)
                                        <option value="{{$rol->id}}">{{$rol->name}}</option>
                                    @endforeach
                                </select>
                            </div>
                        </div>
                        <h5>Give Privileges To:</h5>
                        <br>
                        <br>

                        <div class="form-group row">
                            <label class="col-3 col-form-label">Managers</label>
                            <div class="col-9 col-form-label">
                                <div class="checkbox-inline">
                                    <label class="checkbox checkbox-outline checkbox-info">
                                        <input type="checkbox" name="permissions[]" />
                                        <span></span>
                                        View
                                    </label> <label class="checkbox checkbox-outline checkbox-success">
                                        <input type="checkbox" name="permissions[]"/>
                                        <span></span>
                                        Add
                                    </label>
                                    <label class="checkbox checkbox-outline checkbox-warning">
                                        <input type="checkbox" name="permissions[]" checked="checked" />
                                        <span></span>
                                        Edit
                                    </label>
                                    <label class="checkbox checkbox-outline checkbox-danger">
                                        <input type="checkbox" name="permissions[]" />
                                        <span></span>
                                        Delete
                                    </label>
                                </div>
                                <span class="form-text text-muted"></span>
                            </div>
                        </div>
                        <div class="form-group row">
                            <label class="col-3 col-form-label">Course List</label>
                            <div class="col-9 col-form-label">
                                <div class="checkbox-inline">
                                    <label class="checkbox checkbox-outline checkbox-outline-2x checkbox-info">
                                        <input type="checkbox" name="permissions[]"/>
                                        <span></span>
                                        View
                                    </label>
                                    <label class="checkbox checkbox-outline checkbox-outline-2x checkbox-primary">
                                        <input type="checkbox" name="permissions[]" checked="checked" />
                                        <span></span>
                                        Add
                                    </label><label class="checkbox checkbox-outline checkbox-outline-2x checkbox-warning">
                                        <input type="checkbox" name="permissions[]" checked="checked" />
                                        <span></span>
                                        Edit
                                    </label><label class="checkbox checkbox-outline checkbox-outline-2x checkbox-danger">
                                        <input type="checkbox" name="permissions[]" checked="checked" />
                                        <span></span>
                                        Delete
                                    </label>
                                </div>
                                <span class="form-text text-muted"></span>
                            </div>
                        </div>
                        <div class="form-group row">
                            <label class="col-3 col-form-label">Course Category</label>
                            <div class="col-9 col-form-label">
                                <div class="checkbox-inline">
                                    <label class="checkbox checkbox-outline checkbox-outline-2x checkbox-info">
                                        <input type="checkbox" name="permissions[]"/>
                                        <span></span>
                                        View
                                    </label>
                                    <label class="checkbox checkbox-outline checkbox-outline-2x checkbox-primary">
                                        <input type="checkbox" name="permissions[]" checked="checked" />
                                        <span></span>
                                        Add
                                    </label><label class="checkbox checkbox-outline checkbox-outline-2x checkbox-warning">
                                        <input type="checkbox" name="permissions[]" checked="checked" />
                                        <span></span>
                                        Edit
                                    </label><label class="checkbox checkbox-outline checkbox-outline-2x checkbox-danger">
                                        <input type="checkbox" name="permissions[]" checked="checked" />
                                        <span></span>
                                        Delete
                                    </label>
                                </div>
                                <span class="form-text text-muted"></span>
                            </div>
                        </div>
                        <div class="form-group row">
                            <label class="col-3 col-form-label">Departments</label>
                            <div class="col-9 col-form-label">
                                <div class="checkbox-inline">
                                    <label class="checkbox checkbox-outline checkbox-outline-2x checkbox-primary">
                                        <input type="checkbox" name="permissions[]"/>
                                        <span></span>
                                        View
                                    </label>
                                    <label class="checkbox checkbox-outline checkbox-outline-2x checkbox-info">
                                        <input type="checkbox" name="permissions[]" checked="checked" />
                                        <span></span>
                                        Add
                                    </label><label class="checkbox checkbox-outline checkbox-outline-2x checkbox-warning">
                                        <input type="checkbox" name="permissions[]" checked="checked" />
                                        <span></span>
                                        Edit
                                    </label><label class="checkbox checkbox-outline checkbox-outline-2x checkbox-danger">
                                        <input type="checkbox" name="permissions[]" checked="checked" />
                                        <span></span>
                                        Delete
                                    </label>
                                </div>
                                <span class="form-text text-muted"></span>
                            </div>
                        </div>
                        <div class="form-group row">
                            <label class="col-3 col-form-label">Companies</label>
                            <div class="col-9 col-form-label">
                                <div class="checkbox-inline">
                                    <label class="checkbox checkbox-outline checkbox-outline-2x checkbox-primary">
                                        <input type="checkbox" name="permissions[]"/>
                                        <span></span>
                                        View
                                    </label>
                                    <label class="checkbox checkbox-outline checkbox-outline-2x checkbox-info">
                                        <input type="checkbox" name="permissions[]" checked="checked" />
                                        <span></span>
                                        Add
                                    </label><label class="checkbox checkbox-outline checkbox-outline-2x checkbox-warning">
                                        <input type="checkbox" name="permissions[]" checked="checked" />
                                        <span></span>
                                        Edit
                                    </label><label class="checkbox checkbox-outline checkbox-outline-2x checkbox-danger">
                                        <input type="checkbox" name="permissions[]" checked="checked" />
                                        <span></span>
                                        Delete
                                    </label>
                                </div>
                                <span class="form-text text-muted"></span>
                            </div>
                        </div>
                        <div class="form-group row">
                            <label class="col-3 col-form-label">Certificates</label>
                            <div class="col-9 col-form-label">
                                <div class="checkbox-inline">
                                    <label class="checkbox checkbox-outline checkbox-outline-2x checkbox-primary">
                                        <input type="checkbox" name="permissions[]"/>
                                        <span></span>
                                        View
                                    </label>
                                    <label class="checkbox checkbox-outline checkbox-outline-2x checkbox-info">
                                        <input type="checkbox" name="permissions[]" checked="checked" />
                                        <span></span>
                                        Add
                                    </label><label class="checkbox checkbox-outline checkbox-outline-2x checkbox-warning">
                                        <input type="checkbox" name="permissions[]" checked="checked" />
                                        <span></span>
                                        Edit
                                    </label><label class="checkbox checkbox-outline checkbox-outline-2x checkbox-danger">
                                        <input type="checkbox" name="permissions[]" checked="checked" />
                                        <span></span>
                                        Delete
                                    </label>
                                </div>
                                <span class="form-text text-muted"></span>
                            </div>
                        </div>


                    </div>
                    <div class="card-footer">
                        <div class="row">
                            <div class="col-lg-6">
                                <button type="submit" class="btn btn-primary mr-2">Save</button>
                                <button type="reset" class="btn btn-secondary">Cancel</button>
                            </div>
                            <div class="col-lg-6 text-lg-right">
                                {{--<button type="reset" class="btn btn-danger">Delete</button>--}}
                            </div>
                        </div>
                    </div>
                </form>
            </div>
        </div>
        <!--end::Container-->
    </div>
    <!--end::Entry-->
@endsection
@section('js')
    <!--begin::Page Scripts(used by this page)-->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/toastr.min.js" integrity="sha512-VEd+nq25CkR676O+pLBnDW09R7VQX9Mdiij052gVCp5yVH3jGtH70Ho/UUv4mJDsEdTvqRCFZg0NKGiojGnUCw==" crossorigin="anonymous"></script>
    @if(Session::has('errormsg'))
        <script>

            toastr.error('','{{Session::get('errormsg')}}');
        </script>
    @endif
    @if(Session::has('succesmsg'))
        <script>

            toastr.success('','{{Session::get('succesmsg')}}');
        </script>
    @endif
    <!--end::Page Scripts-->
@endsection