
@extends('layout.'.$extends)

@section('css')
    <style>
        @media print{
            .modal-content{
                width:auto !important;

            }


        }
    </style>
@endsection

@section('dashboard')

    <div class="container">
        <div class="row justify-content-around"  id="print2">
            <div class='col-md-6'>

                <div class="card border border-1 border-dark bg-warning m-4" style="width:380px;height:600px;">
                    <img src="{{asset('/')}}{{$user->photo}}" alt="photo" class="card-img" style="width:100%;height:270px !important; padding:50px;">
                    <div class="card-body" style="margin-top:-40px;">
                        <div class="card-title text-center h3" style="margin-top: -34px; !important;">
                            <span class="d-block">{{$user->user->name}}</span>
                            <span class='d-block h4'><i>@if(departments_byid($user->dep_id) != ''){{departments_byid($user->dep_id)->name}} @endif</i></span>
                        </div>
                        <div class="card-text">
                            <img src="{{asset('company/logos/')}}{{'/'.mylogo()->logo}}" alt="image-stamp" style="height:230px !important;" class="img-fluid rouned rounded-cricle d-block mx-auto w-75">
                            <div class="row text-center mt-3">
                                <div class="col-6">
                                    Expire date
                                </div>
                                <div class="col-6">
                                    Id {{$user->user->id}}
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-md-6">
                <div class='card bg-white border border-1 border-dark m-4 ' style="width:380px;height:600px;">
                    <div class="card-notes text-center w-50 mx-auto mt-4">
                        Scan this QR Code to verify the Badage
                    </div>
                    <img src="https://api.qrserver.com/v1/create-qr-code/?data={{route('User.Card.Detail',$user->id)}}&amp;size=100x100&amp;bgcolor=f8f9fa" alt="" class="card-img-top img-fluid d-block mx-auto w-75">
                    <div class='card-body'>
                        <div class="card-title text-center">
                            <h5>Badage Issued By</h5>
                        </div>
                        <div class="card-title">
                            <h4 class='text-center'><b>Canva Solutions</b></h4>
                            <p class="text-center"><small>0304 8518244</small></p>
                            <img src="{{asset('assets/images/barcode.png')}}" alt="image-stamp" class="img-fluid rouned rounded-cricle d-block mx-auto w-50">
                        </div>
                    </div>
                </div>
            </div>
        </div>

{{--        <button class="btn btn-info" type="button" onclick="printcard2()">Print</button>--}}
    </div>
{{--    <br>--}}
{{--    <br>--}}
{{--    <div class="modal-content" id="print_area12">--}}
{{--        <div class="modal-body"  >--}}
{{--            <div class="row justify-content-start align-items-center">--}}
{{--                <div class="col-md-4">--}}

{{--                    <img src="{{asset('/')}}{{$user->photo}}" id="card-show_img" alt="" class="img-fluid" style="--}}
{{--    height: 310px;--}}
{{--    width: 290px;--}}
{{--">--}}

{{--                </div>--}}
{{--                <div class="col-md-4">--}}
{{--                    <div class="full_name my-4">--}}
{{--                        <span class="d-block h1"><span id="card-first_name"></span> <span id="card-last_name"></span></span>--}}
{{--                        <span class="d-block"><i>Employee</i></span>--}}
{{--                    </div>--}}
{{--                    <div class="Company my-4">--}}
{{--                        <span class="h1 d-block">Name</span>--}}
{{--                        <span class="d-block"><i>{{$user->user->name}}</i></span>--}}

{{--                    </div>--}}
{{--                    <div class="department my-4">--}}
{{--                        <span class="h1 d-block">Department</span>--}}
{{--                        <span class="d-block"><i>@if(departments_byid($user->dep_id) != ''){{departments_byid($user->dep_id)->name}} @endif </i></span>--}}
{{--                    </div>--}}
{{--                </div>--}}
{{--                <div class="col-md-4">--}}
{{--                    <img class="img-fluid w-100 h-100"--}}
{{--                         src="https://api.qrserver.com/v1/create-qr-code/?data={{route('User.Card.Detail',$user->id)}}&amp;size=140x140&amp;bgcolor=f8f9fa"--}}
{{--                         alt=""--}}
{{--                         title="" />--}}
{{--                </div>--}}
{{--            </div>--}}
{{--        </div>--}}

{{--    </div>--}}
{{--    <div class="card-footer">--}}
    <div class="row container">
        <div class="col-6">
        <button class="btn btn-info" type="button" onclick="printcard2()">Print</button>
        <a href="javascript: history.go(-1)" class="btn btn-primary" type="button" >Close</a>
            
        </div>
    </div>
      
{{--    </div>--}}


@endsection
@section('js')
    <script>

        function printcard() {


            var printContents = document.getElementById('print_area12').innerHTML;



            var originalContents = document.body.innerHTML;



            document.body.innerHTML = printContents;



            $('#print_area12').css('background-color','red');



            window.print();



            document.body.innerHTML = originalContents;


        }

        function printcard2() {


            var printContents = document.getElementById('print2').innerHTML;



            var originalContents = document.body.innerHTML;



            document.body.innerHTML = printContents;



            $('#print_area12').css('background-color','red');



            window.print();



            document.body.innerHTML = originalContents;


        }
    </script>
@endsection

