
@extends('layout.'.$extend)


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
                    <h5 class="text-dark font-weight-bold my-2 mr-5 text-uppercase">FAQ'S</h5>
                    <!--end::Page Title-->
                    <!--begin::Breadcrumb-->
                    <ul class="breadcrumb breadcrumb-transparent breadcrumb-dot font-weight-bold p-0 my-2 font-size-sm">
                        <li class="breadcrumb-item">
                            <a href="{{url('/')}}" class="text-muted">Home</a>
                        </li>
                        <li class="breadcrumb-item">
                            <a href="{{url('/faq')}}" class="text-muted">FAQ</a>
                        </li>
                        @if(Auth::user()->hasRole('Admin'))
                        <li class="breadcrumb-item">
                            <a  href="" data-toggle="modal" data-target="#addnewfaq" class="btn btn-info">Add New</a>
                        </li>
                            @endif
                    </ul>
                    <!--end::Breadcrumb-->
                </div>
                <!--end::Page Heading-->
            </div>
            <!--end::Info-->

        </div>
    </div>
    <!-- Modal-->
    <div class="modal fade w-100" id="addnewfaq" data-backdrop="static" tabindex="-1" role="dialog" aria-labelledby="staticBackdrop" aria-hidden="true">
        <div class="modal-dialog modal-dialog-centered" role="document">
            <div class="modal-content">
                <div class="modal-header" style="background: #4a4e6b;">
                    <h5 class="modal-title text-uppercase text-white" id="exampleModalLabel">ADD NEW FAQ</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <i aria-hidden="true" class="ki ki-close text-white"></i>
                    </button>
                </div>
                <div class="modal-body p-0">
                    <div class="row">
                        <div class="col-12">
                            <form class="form" action="{{route('faq.store')}}" method="post">
                                @csrf
                                <div class="card-body">
                                    <div class="form-group row">
                                        <div class="col-12">
                                            <label for="ques">QUESTION</label>
                                            <div class="form-group">
                                                <input type="text" name="q" class="form-control">
                                            </div>
                                        </div>

                                        <div class="col-12">
                                            <label for="ques">Answer</label>
                                            <div class="form-group">
                                                <textarea name="ans" class="form-control" rows="5">
                                                </textarea>
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
    <div class="modal fade w-100" id="editquestion" data-backdrop="static" tabindex="-1" role="dialog" aria-labelledby="staticBackdrop" aria-hidden="true">
        <div class="modal-dialog modal-dialog-centered" role="document">
            <div class="modal-content">
                <div class="modal-header" style="background: #4a4e6b;">
                    <h5 class="modal-title text-uppercase text-white" id="exampleModalLabel">EDIT FAQ</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <i aria-hidden="true" class="ki ki-close text-white"></i>
                    </button>
                </div>
                <div class="modal-body p-0">
                    <div class="row">
                        <div class="col-12">
                            <form class="form" action="" method="post" id="edit-form">
                                @csrf
                                @method('PUT')
                                <input type="hidden" id="edit-id" name="id">
                                <div class="card-body">
                                    <div class="form-group row">
                                        <div class="col-12">
                                            <label for="ques">QUESTION</label>
                                            <div class="form-group">
                                                <input type="text" id="edit_q" name="q" class="form-control">
                                            </div>
                                        </div>

                                        <div class="col-12">
                                            <label for="ques">Answer</label>
                                            <div class="form-group">
                                                <textarea name="ans" id="edit_ans" class="form-control" rows="5">
                                                </textarea>
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

    <!--end::Subheader-->
@endsection

@section('dashboard')
    <!--begin::Entry-->



<!--end::Hero-->
<!--begin::Section-->
<div class="container mt-1">
    <!--begin::Card-->
    <div class="card mb-8">
        <!--begin::Body-->
        <div class="card-body p-10">
            <!--begin::Row-->
            <div class="row ">
                <div class="col-lg-9">
                    <!--begin::Tab Content-->
                    <div class="tab-content">
                        <h1>FREQUENTLY ASKED QUESTION</h1>
                        <!--begin::Accordion-->
                        <div class="accordion accordion-light accordion-light-borderless accordion-svg-toggle" id="faq">
                            <!--begin::Item-->

                                    @foreach($ques as $q)

                            <!--begin::Item-->
                            <div class="card border-top-0">
                                <!--begin::Header-->
                                <div class="card-header" id="faqHeading{{$q->id}}">
                                    <a class="card-title collapsed text-dark" data-toggle="collapse" href="#faq{{$q->id}}" aria-expanded="false" aria-controls="faq2" role="button">
																<span class="svg-icon svg-icon-primary">
																	<!--begin::Svg Icon | path:assets/media/svg/icons/Navigation/Angle-double-right.svg-->
																	<svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" width="24px" height="24px" viewBox="0 0 24 24" version="1.1">
																		<g stroke="none" stroke-width="1" fill="none" fill-rule="evenodd">
																			<polygon points="0 0 24 0 24 24 0 24" />
																			<path d="M12.2928955,6.70710318 C11.9023712,6.31657888 11.9023712,5.68341391 12.2928955,5.29288961 C12.6834198,4.90236532 13.3165848,4.90236532 13.7071091,5.29288961 L19.7071091,11.2928896 C20.085688,11.6714686 20.0989336,12.281055 19.7371564,12.675721 L14.2371564,18.675721 C13.863964,19.08284 13.2313966,19.1103429 12.8242777,18.7371505 C12.4171587,18.3639581 12.3896557,17.7313908 12.7628481,17.3242718 L17.6158645,12.0300721 L12.2928955,6.70710318 Z" fill="#000000" fill-rule="nonzero" />
																			<path d="M3.70710678,15.7071068 C3.31658249,16.0976311 2.68341751,16.0976311 2.29289322,15.7071068 C1.90236893,15.3165825 1.90236893,14.6834175 2.29289322,14.2928932 L8.29289322,8.29289322 C8.67147216,7.91431428 9.28105859,7.90106866 9.67572463,8.26284586 L15.6757246,13.7628459 C16.0828436,14.1360383 16.1103465,14.7686056 15.7371541,15.1757246 C15.3639617,15.5828436 14.7313944,15.6103465 14.3242754,15.2371541 L9.03007575,10.3841378 L3.70710678,15.7071068 Z" fill="#000000" fill-rule="nonzero" opacity="0.3" transform="translate(9.000003, 11.999999) rotate(-270.000000) translate(-9.000003, -11.999999)" />
																		</g>
																	</svg>
                                                                    <!--end::Svg Icon-->
																</span>
                                        <div class="card-label text-dark pl-4" style="width: 100%">{{$q->question}}</div>
                                    </a>
                                </div>
                                <!--end::Header-->
                                <!--begin::Body-->
                                <div id="faq{{$q->id}}" class="collapse" aria-labelledby="faqHeading2{{$q->id}}" data-parent="#faq">
                                    <div class="card-body text-dark-50 font-size-lg pl-12">
                                        <div class="row mb-4 mt-1 container">
                                            @if(Auth::user()->hasRole('Admin'))
                                            <div class="col-md-3 col-6">
                                                <a onclick="edit_question({{$q->id}})" data-id="{{$q->id}}" class="btn btn-primary" data-toggle="modal" data-target="#editquestion" style="cursor: pointer;width: 100%" >Edit</a>
                                            </div>
                                            <div class="col-md-3 col-6">

                                                <form action="{{ route('faq.destroy',$q->id)}}" method="post">
                                                    @csrf
                                                    @method('DELETE')
                                                    <button type="submit" class="btn btn-danger form-control" >Delete</button>
                                                </form>

                                            </div>
                                                @endif
                                        </div>

                                        {{$q->answer}}</div>
                                </div>
                                <!--end::Body-->
                            </div>
                            <!--end::Item-->
                        @endforeach


                            <!--end::Item-->
                        </div>
                        <!--end::Accordion-->
                    </div>
                    <!--end::Tab Content-->
                </div>
            </div>
            <!--end::Row-->
        </div>
        <!--end::Body-->
    </div>
    <!--end::Item-->
</div>
<!--end::Section-->
<!--begin::Section-->
<div class="container">
    <div class="row">
        <div class="col-lg-4">
            <!--begin::Card-->
            <a href="#" class="card card-custom wave wave-animate-slow bg-grey-100 mb-8 mb-lg-0">
                <!--end::Card Body-->
            </a>
            <!--end::Card-->
        </div>

    </div>
</div>
<!--end::Section-->


<!--end::Entry-->
@endsection
@section('js')


    <script>

        function edit_question(idd){


            var host = "{{url('faq')}}";
            var id=parseInt(idd);
            var url=host;
            var url2=host+'/'+id;

            $.ajax({
                type: "GET",
                url: url + '/' + id + '/edit',
                data:{id:id},
                cache: false,
                success: function(data){
                    // console.log(data);
                    $('#edit-id').val(data.id);
                    $('#edit-form').attr('action',url2);
                    $('#edit_ans').val(data.answer);
                    $('#edit_q').val(data.question);

                }
            });
        }




    </script>


@endsection
