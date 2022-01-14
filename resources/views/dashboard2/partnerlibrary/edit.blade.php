@extends('layout.dashadmin')



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
            <div class="d-flex align-items-center flex-wrap mr-2">
                <!--begin::Page Title-->
                <h5 class="text-dark font-weight-bold mt-2 mb-2 mr-5 text-uppercase">Partner Library</h5>
                <!--end::Page Title-->
                <!--begin::Actions-->
                <div class="subheader-separator subheader-separator-ver mt-2 mb-2 mr-4 bg-gray-200"></div>


                <!--end::Actions-->
            </div>
            <!--end::Info-->
            <!--begin::Toolbar-->
            <div class="d-flex align-items-center">
                <!--begin::Actions-->



                <!--end::Actions-->
                <!--begin::Dropdowns-->
                <div class="dropdown dropdown-inline" data-toggle="tooltip" title="Quick actions" data-placement="left">
                    <a href="#" class="btn btn-sm btn-clean btn-icon" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                    <span class="svg-icon svg-icon-success svg-icon-lg">
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
                </div>
                <!--end::Dropdowns-->
            </div>
            <!--end::Toolbar-->
        </div>
    </div>
    <!--end::Subheader-->
@endsection
@section('dashboard')
    <div class="mb-3">
        <!--begin::Container-->
        <div class="container">
            <!--begin::Card-->
            <div class="card card-custom">
                <div class="card-header flex-wrap border-0 pt-6 pb-0">

                    <div class="card-toolbar">


                        <!-- Modal-->

                                <div class="modal-content">
                                    <div class="modal-header" style="background: #4a4e6b;">
                                        <h5 class="modal-title text-uppercase text-white" id="exampleModalLabel">Edit</h5>
                                    </div>
                                    <div class="modal-body p-0">
                                        <div class="row">
                                            <div class="col-12">
                                                <form class="form" id="videoform" action="{{route('partnerlibrary.update',$data->id)}}" method="POST" enctype="multipart/form-data">
                                                    @csrf
                                                    @method('PUT')
                                                    <div class="card-body">
                                                        <div class="form-group row">



                                                            <div class="col-12">
                                                                <label for="videoTitle">Title</label>
                                                                <div class="input-group">
                                                                    <input class='form-control' type="text" name="video_title" value="{{$data->title}}"  placeholder="Enter video title"  required>
                                                                </div>
                                                                <span class="form-text text-muted">Please Enter Title</span>
                                                            </div>
                                                            <div class="col-12">
                                                                <label for="description">Description</label>
                                                                <div class="input-group">
                                                                    <textarea  name="video_desc" cols="30" rows="10" class="form-control" style="resize:none;width:100%;">{{$data->descr}}</textarea>
                                                                </div>
                                                                <span class="form-text text-muted">Please Enter description</span>
                                                            </div>
                                                            <div class="col-12">
                                                                <label for="videoUpload">Video/External link</label>
                                                                <div class="input-group">
                                                                    <select class="form-control" onchange="video_change()" id="change_vid">
                                                                        <option value="1">From Your Pc</option>
                                                                        <option value="2">External Link</option>
                                                                    </select>
                                                                </div>
                                                            </div>
                                                            <div class="col-12" id="from_pc">
                                                                <label for="videoUpload">Video Upload</label>
                                                                <div class="input-group">
                                                                    <input type="file"  name="videofile" id="videoUpload" class='form-control'>
                                                                </div>
                                                                <span class="form-text text-muted">Please Upload Video File</span>
                                                            </div>
                                                            <div class="col-12" id="from_ex">
                                                                <label for="videoUpload">Video Link</label>
                                                                <div class="input-group">
                                                                    <input type="text"  id="from_ex_ch" name="videolink"  class='form-control'>
                                                                </div>
                                                                <span class="form-text text-muted">Please Upload Video File</span>
                                                            </div>
                                                            <div class="col-12">
                                                                <label for="videoUpload">Video Thumbnail</label>
                                                                <div class="input-group">
                                                                    <input type="file"  name="videothumbnail" id="videoUpload" class='form-control'>
                                                                </div>
                                                                <span class="form-text text-muted">Please Upload Video Thumbnail</span>
                                                            </div>
                                                        </div>
                                                    </div>

                                                    <br>
                                                    <div class="card-footer">
                                                        <div class="row">
                                                            <div class="col-lg-12">
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
                </div>

            </div>
            <!--end::Card-->


        <!--end::Container-->

@endsection
@section('js')
    <script>
        // $('#from_pc').hide();
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
@endsection
