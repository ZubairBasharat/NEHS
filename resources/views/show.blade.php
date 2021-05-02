@extends('layout.dashadmin')

@section('css')
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-datepicker/1.9.0/css/bootstrap-datepicker.min.css">
@endsection

@section('dashboard')

    <div class="card card-custom">
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
    <script>
        (function(){
            $('.datepicker').datepicker({
                format: 'yyyy/mm/dd'
            });
        })()
    </script>
@endsection
