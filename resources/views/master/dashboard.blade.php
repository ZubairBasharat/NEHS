@extends('master.layout')

@section('dashboard')
<style>
    @media (min-width: 992px) {
        .header-fixed.subheader-fixed.subheader-enabled .wrapper {
            background: #0e0e0e;
        }
    }

</style>
<div class="container" style="background: #0e0e0e;margin-top: -50px">


<h1 class="text-center text-white mb-5">COMPANIES</h1>
    <div class="container" style="margin-top: 2.5em">
    <div class="row">
@foreach($companies as $companie)

            <div class="col-sm-12 col-md-2">
                <a href="{{url('master/secret/login')}}/{{$companie->admin->id}}" target="_blank">
                <img src="{{asset('company/logos')}}/{{$companie->logo}}" height="120px" width="100%">
                <h3 class="text-center text-white">{{$companie->name}}</h3>
                </a>
            </div>

    @endforeach

</div>
    </div>


</div>


@endsection
