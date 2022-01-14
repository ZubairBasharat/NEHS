@extends('layout.dashadmin')

@section('header-mobile')
    <!--begin::Logo-->
    <a href="{{url('/dashboard2')}}">
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
@section('css')
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/toastr.min.css" integrity="sha512-vKMx8UnXk60zUwyUnUPM3HbQo8QfmNx7+ltw8Pm5zLusl1XIfwcxo8DbWCqMGKaWeNxWA8yrx5v3SaVpMvR3CA==" crossorigin="anonymous" />
@endsection
{{-- Content --}}
@section('dashboard')

    {{-- Dashboard 1 --}}
    <div class="container-fluid" >
        <div class="d-flex justify-content-between p-4">
            <h4 class="mb-1">Edit Profile</h4>

            {{--<a href="{{ url('admin/faqpage/tab/add')  }}" class="btn btn-success ">Add Tab & Question</a>--}}
        </div>
        <div class="card card-custom">
            <!--begin::Form-->
            <form class="form w-50" action="{{ url('/savedata') }}" method="post" enctype="multipart/form-data"  autocomplete="off">
                @csrf
                <div class="card-body">

                    <div class="form-group">
                        <div class="col-md-5">


                            <img src="{{asset('/'.Auth::user()->photo)}}" alt="Admin" id='pic_circlce' onclick="select_img()" class="rounded-circle" width="150">
                           <center><p>Click on Image to Choose</p></center>
                            <input type="file" name="usr_img" id="usr_img" onChange="displayImage(this)" style="display: none;"  />
                            <div class="mt-3">
                                <h4>{{ Auth::user()->name }}</h4>
                            </div>
                        </div>
                    </div>
                    <div class="form-group">
                        <label>Name</label>
                        <input type="text" name="name"  value="{{ Auth::user()->name }}" class="form-control form-control-solid" placeholder="new"/>

                    </div>



                </div>

                <div class="card-footer">
                    <button type="submit" class="btn btn-success mr-2">Submit</button>
                    <a href="javascript:history.back()" class="btn btn-secondary">Cancel</a>
                </div>
            </form>
            <!--end::Form-->

            <!--begin::Form-->
            <form class="form w-50" action="{{ url('/savepass') }}" method="post" enctype="multipart/form-data"  autocomplete="off">
                @csrf
                <div class="card-body">

                    <div class="form-group">
                        <label>OLD PASSWORD</label>
                        <input type="password" name="old"  value="{{old('old')}}" class="form-control form-control-solid" placeholder="old"/>
                        <span class="text-danger">
                                 @error('old')
                                {{$message}}
                                @enderror
                                </span>
                    </div>
                    <div class="form-group">
                        <label>NEW PASSWORD</label>
                        <input type="password" name="new"  value="{{old('new')}}" class="form-control form-control-solid" placeholder="new"/>
                        <span class="text-danger">
                                 @error('new')
                                {{$message}}
                                @enderror
                                </span>
                    </div>
                    <div class="form-group">
                        <label>RENTER NEW PASSWORD</label>
                        <input type="password" name="confirm"  value="{{old('confirm')}}" class="form-control form-control-solid" placeholder="confirm"/>
                        <span class="text-danger">
                                 @error('confirm')
                                {{$message}}
                                @enderror
                                </span>
                    </div>


                </div>

                <div class="card-footer">
                    <button type="submit" class="btn btn-success mr-2">Submit</button>
                    <a href="javascript:history.back()" class="btn btn-secondary">Cancel</a>
                </div>
            </form>
            <!--end::Form-->
        </div>
    </div>


@endsection

{{-- Scripts Section --}}


@section('js')
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
    <script>

        var KTSummernoteDemo = function () {
            // Private functions
            var demos = function () {
                $('#summernote').summernote({
                    height: 400,
                    tabsize: 2
                });
            }

            return {
                // public functions
                init: function() {
                    demos();
                }
            };
        }();

        // Initialization
        jQuery(document).ready(function() {
            KTSummernoteDemo.init();
        });
        //


    </script>
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
