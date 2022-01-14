


<div class="modal fade w-100" id="toproject" data-backdrop="static" tabindex="-1" role="dialog" aria-labelledby="staticBackdrop" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered" role="document">
        <div class="modal-content">
            <div class="modal-header" style="background: #4a4e6b;">
                <h5 class="modal-title text-uppercase text-white" id="exampleModalLabel">Assign To Project</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <i aria-hidden="true" class="ki ki-close text-white"></i>
                </button>
            </div>
            <div class="modal-body p-0">
                <div class="row">
                    <div class="col-12">
                        <form class="form" action="{{url('/toolbox-talk-assign')}}" method="post">
                            <div class="card-body">

                                @csrf
                                <input type="hidden" name="type" value="proj" >
                                <input class="file_id" type="hidden" name="file_id" value="" >
                                <input class="folder_id" type="hidden" name="folder_id" value="" >


                                <div class="col-12">
                                    <label for="companyName">Projects</label>
                                    <div class="input-group">
                                        <select class="form-control" name="project_id" >
                                            <option value="" selected readonly>Projects</option>
                                            @foreach($projects as $project)
                                                <option value="{{$project->id}}">{{$project->name}}</option>
                                            @endforeach
                                        </select>

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

<div class="modal fade w-100" id="toemploye" data-backdrop="static" tabindex="-1" role="dialog" aria-labelledby="staticBackdrop" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered" role="document">
        <div class="modal-content">
            <div class="modal-header" style="background: #4a4e6b;">
                <h5 class="modal-title text-uppercase text-white" id="exampleModalLabel">To Employee</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <i aria-hidden="true" class="ki ki-close text-white"></i>
                </button>
            </div>
            <div class="modal-body p-0">
                <div class="row">
                    <div class="col-12">
                        <form class="form" action="{{url('toolbox-talk-assign')}}" method="post">
                            <div class="card-body">

                                @csrf
                                <input type="hidden" name="type" value="user" >
                                <input class="file_id" type="hidden" name="file_id" value="" >
                                <input class="folder_id" type="hidden" name="folder_id" value="" >




                                <div class="col-12">
                                    <label for="companyName">Employee</label>
                                    <div class="input-group">
                                        <select class="form-control" name="user_id" >
                                            <option value="" selected readonly>Employee</option>
                                            @foreach($users as $user)
                                                <option value="{{$user->id}}">{{$user->name}}</option>
                                            @endforeach
                                        </select>

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

<div class="modal fade w-100" id="tomanager" data-backdrop="static" tabindex="-1" role="dialog" aria-labelledby="staticBackdrop" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered" role="document">
        <div class="modal-content">
            <div class="modal-header" style="background: #4a4e6b;">
                <h5 class="modal-title text-uppercase text-white" id="exampleModalLabel">To Manager</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <i aria-hidden="true" class="ki ki-close text-white"></i>
                </button>
            </div>
            <div class="modal-body p-0">
                <div class="row">
                    <div class="col-12">
                        <form class="form" action="{{url('toolbox-talk-assign')}}" method="post">
                            <div class="card-body">

                                @csrf
                                <input type="hidden" name="type" value="manager" >
                                <input class="file_id" type="hidden" name="file_id" value="" >
                                <input class="folder_id" type="hidden" name="folder_id" value="" >




                                <div class="col-12">
                                    <label for="companyName">Managers</label>
                                    <div class="input-group">
                                        <select class="form-control" name="manager_id" >
                                            <option value="" selected readonly>Manager</option>
                                            @foreach($managers as $manager)
                                                <option value="{{$manager->id}}">{{$manager->name}}</option>
                                            @endforeach
                                        </select>

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


<div class="modal fade w-100" id="toemail" data-backdrop="static" tabindex="-1" role="dialog" aria-labelledby="staticBackdrop" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered" role="document">
        <div class="modal-content">
            <div class="modal-header" style="background: #4a4e6b;">
                <h5 class="modal-title text-uppercase text-white" id="exampleModalLabel">To</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <i aria-hidden="true" class="ki ki-close text-white"></i>
                </button>
            </div>
            <div class="modal-body p-0">
                <div class="row">
                    <div class="col-12">

                        <div class="card-body">

                            @csrf
                            <input type="hidden" id="toolbox_id" value="" >

                            <div class="col-12">
                                <label for="companyName">To</label>


                                <input type="email" class="form-control" id="to_email" required >


                            </div>

                        </div>
                        <div class="card-footer">
                            <div class="row">
                                <div class="col-lg-12">
                                    <button type="reset" class="btn btn-primary mr-2" data-dismiss="modal">Close</button>
                                    <button type="submit" class="btn btn-secondary send-mail" data-dismiss="modal">Send</button>
                                </div>
                            </div>
                        </div>

                    </div>
                </div>
            </div>

        </div>
    </div>
</div>



<!--begin::Entry-->
<div class="d-flex flex-column-fluid">
    <!--begin::Container-->
    <div class="container">

        <!--begin::Row-->
        <div class="row" style="margin-top:40px;">
            <div class="col-lg-4">
                <!--begin::Card-->
                <div class="card card-custom gutter-b example-hover">
                    <div class="card-header bg-warning" >
                        <div class="card-title">
                            <h3 class="card-label">Toolbox Talks</h3>
                            @if(!Auth::user()->hasRole('User'))  <a href="{{url('toolbox-addnew')}}" class="btn btn-warning" style="background-color:#cb6f1f">Add New</a> @endif
                        </div>
                    </div>
                    {{--                    <br>--}}
                    {{--                    <input class="form-control"  placeholder="Search" type="text">--}}
                    <div class="card-body">
                        <!--begin::Accordion-->
                        <div class="accordion accordion-toggle-arrow" id="accordionExample1">
                            @foreach($userfolder as $folder)
                                <div class="card">
                                    <div class="card-header">
                                        <div class="row">
                                            <div class="col-2">
                                                @if(!Auth::user()->hasRole('User'))
                                                <form action="{{url('toolbox-delfolder')}}" method="post" >
                                                    @csrf
                                                    <input type="hidden" name="folder_id" value="{{$folder['folder']['id']}}">
                                                    <button type="submit" class="btn btn-secondary"><i class="fa fa-trash"></i></button>
                                                </form>
                                                    @endif
                                            </div>
                                            <div class="col-10">
                                                <div class="card-title collapsed" data-toggle="collapse" data-target="#collapseTwo{{$folder['folder']['id']}}">{{$folder['folder']['name']}}</div>

                                            </div>
                                        </div>
                                    </div>
                                    <div id="collapseTwo{{$folder['folder']['id']}}" class="collapse" data-parent="#accordionExample1">
                                        @foreach($folder['files'] as $files)
{{--                                            @php dd($files); @endphp--}}
                                            <div class="card-body"  style="cursor:pointer;">

                                                <div class="row">
                                                    <div class="col-md-8 show-pdf" data-f_id="{{$folder['folder']['id']}}" data-r_id="{{$files['toolbox_id']}}" >{{toolbox_by_id($files['toolbox_id'])->name}}</div>
                                                    <form action="{{url('toolbox-delfile')}}" method="post" >
                                                        @csrf
                                                        <input type="hidden" name="file_id" value="{{$files['id']}}" >
                                                        <div class="col-md-2">
                                                            @if(!Auth::user()->hasRole('User'))
                                                            <button type="submit" class="btn btn-secondary"><i class="fa fa-trash"></i></button>
                                                            @endif
                                                        </div>
                                                    </form>
                                                </div>
                                            </div>
                                        @endforeach
                                    </div>
                                </div>

                            @endforeach


                        </div>
                        <!--end::Accordion-->

                    </div>
                </div>
                <!--end::Card-->

            </div>
            <div class="col-lg-8" id="show-pdf">


            </div>
        </div>
        <!--end::Row-->
    </div>
    <!--end::Container-->
</div>
<!--end::Entry-->
