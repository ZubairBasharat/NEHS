@extends('layout.dashadmin')

@section('css')
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-datepicker/1.9.0/css/bootstrap-datepicker.min.css">
    <link rel="stylesheet" href="//ajax.googleapis.com/ajax/libs/jqueryui/1.12.1/themes/south-street/jquery-ui.css">
    <link rel="stylesheet" href="{{asset('assets/plugins/custom/signature/css/jquery.signature.css')}}">
    <style>
    .digisigns{
        position: relative;
        width: 100%;
        height:200px;
        border:1px solid grey;
    }
    .digisigns .digisigns-clear-btn{
        position: absolute;
        bottom: 11px;
        right: 6px;
    }
    </style>
@endsection

@section('dashboard')

    <div id="print_area12" class="card card-custom">
        <div class="card-header">
            <h3 class="card-title">
                Fill Form
            </h3>
        </div>
        <!--begin::Form-->
        <form class="form" action="{{route('form.save')}}" method="post" enctype="multipart/form-data">
            @csrf
            <div class="card-body">
                {!! $data !!}
            </div>
            <div class="card-footer">
                <button type="submit" class="btn btn-primary mr-2">Submit</button>
                <a onclick="history.back()" class="btn btn-secondary">Back</a>
            </div>
        </form>
        <!--end::Form-->
    </div>
@endsection

@section('js')
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-datepicker/1.9.0/js/bootstrap-datepicker.min.js"></script>

    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/2.1.4/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jqueryui/1.11.4/jquery-ui.min.js"></script>
    <script src="{{asset('assets/plugins/custom/signature/js/jquery.ui.touch-punch.min.js')}}"></script>
    <script src="{{asset('assets/plugins/custom/signature/js/jquery.signature.min.js')}}"></script>



    <script>
        function  pdf() {

            var printContents = document.getElementById('print_area12').innerHTML;


            var originalContents = document.body.innerHTML;


            document.body.innerHTML = printContents;


            // document.body.style.marginTop="-45px";


            window.print();


            // document.body.innerHTML = originalContents;


            //
            // window.onafterprint = function(event) {
            //
            //     window.location.href = 'index.php'
            //
            // };

        }

        (function(){
            $('.digisigns').signature({
                guideline: true,
                change: function(event, ui) {
                    $('#i'+event.target.id).val($(event.target).signature('toDataURL'));
                }
            } );
            $('.digisigns button.digisigns-clear-btn').click(function(event) {
                event.preventDefault();
                console.log('event:', event);
                let dsignId=$(event.target).data('digisign');
                $('#'+dsignId).signature('clear');
            });

            $('.datepicker').datepicker({
                format: 'yyyy/mm/dd'
            });
        })()
    </script>
@endsection
