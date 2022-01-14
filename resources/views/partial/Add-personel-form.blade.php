<div class="card-toolbar">

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
                        </span>Invite Personnel
    </a>
    <!--end::Button-->
    <!-- begin::Model-->
    <!-- Modal-->
    <div class="modal fade w-100" id="addworker" data-backdrop="static" tabindex="-1" role="dialog" aria-labelledby="staticBackdrop" aria-hidden="true">
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
                            <form class="form"   action="{{route('personnel.create')}}">
                                <div class="card-body">
                                    <div class="form-group row">
                                        <div class="col-lg-4">
                                            <label>First Name</label>
                                            <input type="text" class="form-control" placeholder="First Name" name="first_name" id="first_name" required/>
                                            <span class="form-text text-muted">Please select user group</span>
                                        </div>
                                        <div class="col-lg-4">
                                            <label>Last Name</label>
                                            <input type="text" class="form-control" placeholder="Last Name" name="last_name" id="last_name" required/>
                                            <span class="form-text text-muted">Please select user group</span>
                                        </div>
                                        <div class="col-lg-2">
                                            <label>Gender</label>
                                            <div class="radio-inline">
                                                <label class="radio radio-solid">
                                                    <input type="radio" name="gender" id="gender" checked value="2"  /> Male
                                                    <span></span>
                                                </label>
                                                <label class="radio radio-solid">
                                                    <input type="radio" name="gender" id="gender" value="2"/> Female
                                                    <span></span>
                                                </label>
                                            </div>
                                            <span class="form-text text-muted">Please select user group</span>
                                        </div>
                                        <div class="col-lg-2">
                                            <img src="{{asset('assets/profile.png')}}" alt="Profile Pic" class="img-fluid w-50 h-auto d-block mx-auto">
                                        </div>
                                    </div>
                                    <div class="form-group row">
                                        <div class="col-lg-4">
                                            <label>Primary Email</label>
                                            <input type="email" class="form-control" placeholder="Enter Your Email" id="email" name="email" />
                                            <span class="form-text text-muted">Please enter your Email</span>
                                        </div>
                                        <div class="col-lg-4">
                                            <label>Date of Birth</label>
                                            <div class="input-group">
                                                <input type="date" class="form-control" id="date_of_birth" name="date_of_birth"/>
                                            </div>
                                            <span class="form-text text-muted">Please enter your Date of Birth </span>
                                        </div>
                                        <div class="col-lg-4">
                                            <label>Hire Date</label>
                                            <div class="input-group">

                                                <input type="date" class="form-control" name="hire_date" id="hire_date"/>
                                            </div>
                                            <span class="form-text text-muted">Please enter your Date of Hire </span>
                                        </div>
                                    </div>
                                    <div class="form-group row">
                                        <div class="col-lg-4">
                                            <label>Native Language</label>
                                            <div class="radio-inline">
                                                <label class="radio radio-solid">
                                                    <input type="radio" name="native_language" id="native_language" checked value="2"/> English
                                                    <span></span>
                                                </label>
                                                <label class="radio radio-solid">
                                                    <input type="radio" name="native_language" id="native_language" value="2"/> Spanish
                                                    <span></span>
                                                </label>
                                            </div>
                                        </div>
                                        <div class="col-lg-4">
                                            <label>Phone</label>
                                            <div class="input-group">
                                                <input type="Phone" class="form-control" placeholder="Enter Your Contact Number" id="phone" name="phone"/>
                                            </div>
                                            <span class="form-text text-muted">Please enter your Phone Number </span>
                                        </div>
                                        <div class="col-lg-4">
                                            <label>Title</label>
                                            <div class="input-group">
                                                <input type="text" class="form-control" id="title" name="title" placeholder="Foreman"/>
                                            </div>
                                            <span class="form-text text-muted">Please enter your Title </span>
                                        </div>
                                    </div>
                                    <div class="form-group row">
                                        <div class="col-lg-4">
                                            <label>Department</label>
                                            <div class='input-group'>
                                                <select name="dep_id" id="dep_id" class="form-control custom-select">
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
                                                <input type="text" name="job_no" id="job_no" placeholder="Enter your Project Or Job Number " class="form-control">
                                            </div>
                                        </div>
                                        <div class="col-lg-5">
                                            <label>Type of Worker</label>
                                            <div class="radio-inline">
                                                <label class="radio radio-solid">
                                                    <input type="radio" name="type" id="type" checked value="Employee"/> Employee
                                                    <span></span>
                                                </label>
                                                <label class="radio radio-solid">
                                                    <input type="radio" name="type" id="type" value="emporary Labor"/> Temporary Labor
                                                    <span></span>
                                                </label>
                                                <label class="radio radio-solid">
                                                    <input type="radio" name="type" id="type" value="Subcontractor"/> Subcontractor
                                                    <span></span>
                                                </label>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="form-group row">
                                        <div class="col-lg-6">
                                            <label>Emergency contact</label>
                                            <div class='input-group'>
                                                <input type="text" name="em_no" id="em_no" placeholder="Enter Emergency contact Number" class="form-control">
                                            </div>
                                        </div>
                                        {{--<div class="col-lg-6 row justify-content-end align-items-center">--}}

                                        {{--<label class="col-6 col-form-label text-right">Activity</label>--}}
                                        {{--<div class="col-6 text-end">--}}
                                        {{--<span class="switch switch-success">--}}
                                        {{--<label>--}}
                                        {{--<input type="checkbox"  id="status" name checked="checked" value="1" name="status"/>--}}
                                        {{--<span></span>--}}
                                        {{--</label>--}}
                                        {{--</span>--}}
                                        {{--</div>--}}
                                        {{----}}
                                        {{--</div>--}}
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
    <!--end::Model-->
</div>
