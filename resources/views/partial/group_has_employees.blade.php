

{{--@php--}}
{{--dd($workers);--}}
{{--@endphp--}}
<div class="modal-content" style="margin-top:200px;">
    <div class="modal-header" style="background: #4a4e6b;">
        <h5 class="modal-title text-uppercase text-white" id="group_name">{{group_byid($id)->name}}</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
            <i aria-hidden="true" class="ki ki-close text-white"></i>
        </button>
    </div>
    <div class="modal-body p-2">
        <br>
        <div class="row">
            <div class="col-3">
                <input type="hidden" value="{{$id}}" id="group_ajax">
                <input class="form-control" name="search_ajax" id="search_ajax" placeholder="Search">
            </div>
            <div class="col-3">
                <select class="form-control" name="department_ajax" id="department_ajax" >
                    <option disabled selected readonly value="">Department</option>
                    @foreach($dep as $deps)
                    <option value="{{$deps->id}}">{{$deps->name}}</option>
                    @endforeach
                </select>
            </div>
            <div class="col-3">
                <select class="form-control" id="language_ajax">
                    <option disabled selected readonly value="">Language</option>
                    <option value="English">Eng</option>
                    <option value="Spanish">Esp</option>
                </select>
            </div>
            <div class="col-3">
                <a class="btn btn-primary get_filter_result"><i class="fa fa-search"></i> Filter</a>
            </div>
        </div>
        <br>
        <div class="row" >

            @foreach($workers as $worker)

                    <div class="col-3">
                        <div class="row">
                            <div class="col-12">
                                <h6>{{$worker->first_name}} {{$worker->last_name}}</h6>
                            </div>
                            <div class="col-8">
                                @if(count($worker->groups) > 0)
                                    @php $check=0; @endphp
                                @foreach($worker->groups as $groups)
                                    @if($groups->id_group == $id)
                                        @php $check=1; @endphp
                                        <button class="btn btn-danger add_remove" data-actionn="remove" data-w_id="{{$worker->id}}" data-g_id="{{$id}}" >Remove</button>
                                    @endif
                                @endforeach
                                    @if($check ==0)
                                        <button class="btn btn-success add_remove" data-actionn="add" data-w_id="{{$worker->id}}" data-g_id="{{$id}}" >Add</button>

                                    @endif
                                @else
                                    <button class="btn btn-success add_remove" data-actionn="add" data-w_id="{{$worker->id}}" data-g_id="{{$id}}" >Add</button>
                               @endif


                            </div>
                        </div>

                    </div>

            @endforeach


        </div>
    </div>

</div>
<script>
    $('.add_remove').click(function () {


        var group_id=$(this).data('g_id');
        var worker_id=$(this).data('w_id');
        var actionn=$(this).data('actionn');
        var v_token = "{{csrf_token()}}";
        var url = "{{url('add-remove-worker')}}";

        $.ajax({
            type: "Post",
            url: url,
            data:{actionn:actionn,group_id:group_id,worker_id:worker_id,_token:v_token},
            cache: false,
            success: function(data){
                if(data == 'remove'){
                    toastr.error('','User Remove Successfully');
                }
                if(data == 'add'){
                    toastr.success('','User Add Successfully');
                }

                group_employees(group_id);

            }
        });

    });

    function sleep (time) {
        return new Promise((resolve) => setTimeout(resolve, time));
    }



    $('.get_filter_result').click(function () {


        var search=$('#search_ajax').val();
        var department=$('#department_ajax').val();
        var langauage=$('#language_ajax').val();
        var group=$('#group_ajax').val();

        var v_token = "{{csrf_token()}}";
        var url = "{{url('group-user-filter-ajax')}}";
        $('#fetch_data').html('<img src="{{'assets/images/loader'}}.gif" style="width:1000px; align:center;">');

        $.ajax({
            type: "Post",
            url: url,
            data:{group:group,search:search,department:department,langauage:langauage,_token:v_token},
            cache: false,
            success: function(data){
                // Usage!
                sleep(500).then(() => {
                    $('#fetch_data').html(data);
                });

            }
        });

    });
</script>


