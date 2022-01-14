<div class="card-body">
    <?php
    $user=\App\Models\User::find($user_id);
    ?>
    @if($user->hasRole('Admin'))
    <div class="form-group row">

        <label class="col-3 col-form-label">Managers</label>
        <div class="col-9 col-form-label">
            <div class="checkbox-inline">
                <label class="checkbox checkbox-outline checkbox-info">
                    <input type="checkbox" name="permissions[]" value="2" @if($user->hasPermissionTo(2))  checked @endif />
                    <span></span>
                    View
                </label>

                <label class="checkbox checkbox-outline checkbox-success">
                    <input type="checkbox" name="permissions[]"  value="1" @if($user->hasPermissionTo(1))  checked @endif />
                    <span></span>
                    Add
                </label>
                <label class="checkbox checkbox-outline checkbox-warning">
                    <input type="checkbox" name="permissions[]"  value="3" @if($user->hasPermissionTo(3))  checked @endif />
                    <span></span>
                    Edit
                </label>
                <label class="checkbox checkbox-outline checkbox-danger">
                    <input type="checkbox" name="permissions[]"  value="4" @if($user->hasPermissionTo(4))  checked @endif />
                    <span></span>
                    Delete
                </label>
            </div>
            <span class="form-text text-muted"></span>
        </div>
    </div>
    <div class="form-group row">
        <label class="col-3 col-form-label">Course List</label>
        <div class="col-9 col-form-label">
            <div class="checkbox-inline">
                <label class="checkbox checkbox-outline checkbox-outline-2x checkbox-info">
                    <input type="checkbox" name="permissions[]"  value="6" @if($user->hasPermissionTo(6))  checked @endif />
                    <span></span>
                    View
                </label>
                <label class="checkbox checkbox-outline checkbox-outline-2x checkbox-primary">
                    <input type="checkbox" name="permissions[]"  value="5" @if($user->hasPermissionTo(5))  checked @endif />
                    <span></span>
                    Add
                </label><label class="checkbox checkbox-outline checkbox-outline-2x checkbox-warning">
                    <input type="checkbox" name="permissions[]"  value="7" @if($user->hasPermissionTo(7))  checked @endif />
                    <span></span>
                    Edit
                </label><label class="checkbox checkbox-outline checkbox-outline-2x checkbox-danger">
                    <input type="checkbox" name="permissions[]"  value="8" @if($user->hasPermissionTo(8))  checked @endif />
                    <span></span>
                    Delete
                </label>
            </div>
            <span class="form-text text-muted"></span>
        </div>
    </div>
    <div class="form-group row">
        <label class="col-3 col-form-label">Course Category</label>
        <div class="col-9 col-form-label">
            <div class="checkbox-inline">
                <label class="checkbox checkbox-outline checkbox-outline-2x checkbox-info">
                    <input type="checkbox" name="permissions[]" value="10" @if($user->hasPermissionTo(10))  checked @endif />
                    <span></span>
                    View
                </label>
                <label class="checkbox checkbox-outline checkbox-outline-2x checkbox-primary">
                    <input type="checkbox" name="permissions[]" value="9" @if($user->hasPermissionTo(9))  checked @endif />
                    <span></span>
                    Add
                </label><label class="checkbox checkbox-outline checkbox-outline-2x checkbox-warning">
                    <input type="checkbox" name="permissions[]" value="11" @if($user->hasPermissionTo(11))  checked @endif />
                    <span></span>
                    Edit
                </label><label class="checkbox checkbox-outline checkbox-outline-2x checkbox-danger">
                    <input type="checkbox" name="permissions[]" value="12" @if($user->hasPermissionTo(12))  checked @endif />
                    <span></span>
                    Delete
                </label>
            </div>
            <span class="form-text text-muted"></span>
        </div>
    </div>
    <div class="form-group row">
        <label class="col-3 col-form-label">Departments</label>
        <div class="col-9 col-form-label">
            <div class="checkbox-inline">
                <label class="checkbox checkbox-outline checkbox-outline-2x checkbox-primary">
                    <input type="checkbox" name="permissions[]" value="14" @if($user->hasPermissionTo(14))  checked @endif />
                    <span></span>
                    View
                </label>
                <label class="checkbox checkbox-outline checkbox-outline-2x checkbox-info">
                    <input type="checkbox" name="permissions[]" value="13"  @if($user->hasPermissionTo(13))  checked @endif/>
                    <span></span>
                    Add
                </label><label class="checkbox checkbox-outline checkbox-outline-2x checkbox-warning">
                    <input type="checkbox" name="permissions[]" value="15" @if($user->hasPermissionTo(15))  checked @endif />
                    <span></span>
                    Edit
                </label><label class="checkbox checkbox-outline checkbox-outline-2x checkbox-danger">
                    <input type="checkbox" name="permissions[]" value="16" @if($user->hasPermissionTo(16))  checked @endif />
                    <span></span>
                    Delete
                </label>
            </div>
            <span class="form-text text-muted"></span>
        </div>
    </div>
    <div class="form-group row">
        <label class="col-3 col-form-label">Resources</label>
        <div class="col-9 col-form-label">
            <div class="checkbox-inline">
                <label class="checkbox checkbox-outline checkbox-outline-2x checkbox-primary">
                    <input type="checkbox" name="permissions[]" value="18" @if($user->hasPermissionTo(18))  checked @endif />
                    <span></span>
                    View
                </label>
                <label class="checkbox checkbox-outline checkbox-outline-2x checkbox-info">
                    <input type="checkbox" name="permissions[]" value="17" @if($user->hasPermissionTo(17))  checked @endif />
                    <span></span>
                    Add
                </label><label class="checkbox checkbox-outline checkbox-outline-2x checkbox-warning">
                    <input type="checkbox" name="permissions[]" value="19" @if($user->hasPermissionTo(19))  checked @endif />
                    <span></span>
                    Edit
                </label><label class="checkbox checkbox-outline checkbox-outline-2x checkbox-danger">
                    <input type="checkbox" name="permissions[]" value="20" @if($user->hasPermissionTo(20))  checked @endif />
                    <span></span>
                    Delete
                </label>
            </div>
            <span class="form-text text-muted"></span>
        </div>
    </div>
    <div class="form-group row">
        <label class="col-3 col-form-label">Certificates</label>
        <div class="col-9 col-form-label">
            <div class="checkbox-inline">
                <label class="checkbox checkbox-outline checkbox-outline-2x checkbox-primary">
                    <input type="checkbox" name="permissions[]" value="22" @if($user->hasPermissionTo(22))  checked @endif />
                    <span></span>
                    View
                </label>
                <label class="checkbox checkbox-outline checkbox-outline-2x checkbox-info">
                    <input type="checkbox" name="permissions[]"  value="21" @if($user->hasPermissionTo(21))  checked @endif />
                    <span></span>
                    Add
                </label><label class="checkbox checkbox-outline checkbox-outline-2x checkbox-warning">
                    <input type="checkbox" name="permissions[]" value="23" @if($user->hasPermissionTo(23))  checked @endif />
                    <span></span>
                    Edit
                </label><label class="checkbox checkbox-outline checkbox-outline-2x checkbox-danger">
                    <input type="checkbox" name="permissions[]" value="24" @if($user->hasPermissionTo(24))  checked @endif />
                    <span></span>
                    Delete
                </label>
            </div>
            <span class="form-text text-muted"></span>
        </div>
    </div>
        @endif

        @if($user->hasAnyRole(3,4,5,6,7,8,9,10))
            <div class="form-group row">
                <label class="col-3 col-form-label">All Personels</label>
                <div class="col-9 col-form-label">
                    <div class="checkbox-inline">
                        <label class="checkbox checkbox-outline checkbox-outline-2x checkbox-primary">
                            <input type="checkbox" name="permissions[]" value="26" @if($user->hasPermissionTo(26))  checked @endif />
                            <span></span>
                            View
                        </label>
                        <label class="checkbox checkbox-outline checkbox-outline-2x checkbox-info">
                            <input type="checkbox" name="permissions[]" value="25" @if($user->hasPermissionTo(25))  checked @endif />
                            <span></span>
                            Invite Personel
                        </label>
                        <label class="checkbox checkbox-outline checkbox-outline-2x checkbox-warning">
                            <input type="checkbox" name="permissions[]" value="27" @if($user->hasPermissionTo(27))  checked @endif />
                            <span></span>
                            Edit
                        </label>
                        {{--<label class="checkbox checkbox-outline checkbox-outline-2x checkbox-danger">--}}
                            {{--<input type="checkbox" name="permissions[]" value="28" @if($user->hasPermissionTo(28))  checked @endif />--}}
                            {{--<span></span>--}}
                            {{--Delete--}}
                        {{--</label>--}}
                    </div>
                    <span class="form-text text-muted"></span>
                </div>
            </div>

            <div class="form-group row">
                <label class="col-3 col-form-label">Course Statics</label>
                <div class="col-9 col-form-label">
                    <div class="checkbox-inline">
                        <label class="checkbox checkbox-outline checkbox-outline-2x checkbox-primary">
                            <input type="checkbox" name="permissions[]" value="30" @if($user->hasPermissionTo(30))  checked @endif />
                            <span></span>
                            View
                        </label>
                        <label class="checkbox checkbox-outline checkbox-outline-2x checkbox-info">
                            <input type="checkbox" name="permissions[]" value="29" @if($user->hasPermissionTo(29))  checked @endif />
                            <span></span>
                            view Certificate
                        </label>
                        {{--<label class="checkbox checkbox-outline checkbox-outline-2x checkbox-warning">--}}
                            {{--<input type="checkbox" name="permissions[]" value="31" @if($user->hasPermissionTo(31))  checked @endif />--}}
                            {{--<span></span>--}}
                            {{--Edit--}}
                        {{--</label>--}}
                        {{--<label class="checkbox checkbox-outline checkbox-outline-2x checkbox-danger">--}}
                            {{--<input type="checkbox" name="permissions[]" value="32" @if($user->hasPermissionTo(32))  checked @endif />--}}
                            {{--<span></span>--}}
                            {{--Delete--}}
                        {{--</label>--}}
                    </div>
                    <span class="form-text text-muted"></span>
                </div>
            </div>
            <div class="form-group row">
                <label class="col-3 col-form-label">Resources</label>
                <div class="col-9 col-form-label">
                    <div class="checkbox-inline">
                        <label class="checkbox checkbox-outline checkbox-outline-2x checkbox-primary">
                            <input type="checkbox" name="permissions[]" value="18" @if($user->hasPermissionTo(18))  checked @endif />
                            <span></span>
                            View
                        </label>
                        <label class="checkbox checkbox-outline checkbox-outline-2x checkbox-info">
                            <input type="checkbox" name="permissions[]" value="17" @if($user->hasPermissionTo(17))  checked @endif />
                            <span></span>
                            Add
                        </label>
                        <label class="checkbox checkbox-outline checkbox-outline-2x checkbox-warning">
                            <input type="checkbox" name="permissions[]" value="19" @if($user->hasPermissionTo(19))  checked @endif />
                            <span></span>
                            View Uploaded Files
                        </label>
                        {{--<label class="checkbox checkbox-outline checkbox-outline-2x checkbox-danger">--}}
                            {{--<input type="checkbox" name="permissions[]" value="20" @if($user->hasPermissionTo(20))  checked @endif />--}}
                            {{--<span></span>--}}
                            {{--Delete--}}
                        {{--</label>--}}
                    </div>
                    <span class="form-text text-muted"></span>
                </div>
            </div>

            <div class="form-group row">
                <label class="col-3 col-form-label">Groups/classes</label>
                <div class="col-9 col-form-label">
                    <div class="checkbox-inline">
                        <label class="checkbox checkbox-outline checkbox-outline-2x checkbox-primary">
                            <input type="checkbox" name="permissions[]" value="38" @if($user->hasPermissionTo(38))  checked @endif />
                            <span></span>
                            View
                        </label>
                        <label class="checkbox checkbox-outline checkbox-outline-2x checkbox-info">
                            <input type="checkbox" name="permissions[]" value="37" @if($user->hasPermissionTo(37))  checked @endif />
                            <span></span>
                            Add
                        </label>
                        <label class="checkbox checkbox-outline checkbox-outline-2x checkbox-warning">
                            <input type="checkbox" name="permissions[]" value="39" @if($user->hasPermissionTo(39))  checked @endif />
                            <span></span>
                            Edit
                        </label>
                        <br>
                        <label class="checkbox checkbox-outline checkbox-outline-2x checkbox-warning">
                            <input type="checkbox" name="permissions[]" value="40" @if($user->hasPermissionTo(40))  checked @endif />
                            <span></span>
                            Delete
                        </label>
                        <label class="checkbox checkbox-outline checkbox-outline-2x checkbox-warning">
                            <input type="checkbox" name="permissions[]" value="45" @if($user->hasPermissionTo(45))  checked @endif />
                            <span></span>
                            Assign to users
                        </label>
                    </div>
                    <span class="form-text text-muted"></span>
                </div>
            </div>
            <div class="form-group row">
                <label class="col-3 col-form-label">Equipment</label>
                <div class="col-9 col-form-label">
                    <div class="checkbox-inline">
                        <label class="checkbox checkbox-outline checkbox-outline-2x checkbox-primary">
                            <input type="checkbox" name="permissions[]" value="42" @if($user->hasPermissionTo(42))  checked @endif />
                            <span></span>
                            View
                        </label>
                        <label class="checkbox checkbox-outline checkbox-outline-2x checkbox-info">
                            <input type="checkbox" name="permissions[]" value="41" @if($user->hasPermissionTo(41))  checked @endif />
                            <span></span>
                            Add
                        </label>
                        <label class="checkbox checkbox-outline checkbox-outline-2x checkbox-warning">
                            <input type="checkbox" name="permissions[]" value="43" @if($user->hasPermissionTo(43))  checked @endif />
                            <span></span>
                            Edit
                        </label>
                        <br>
                        <label class="checkbox checkbox-outline checkbox-outline-2x checkbox-warning">
                            <input type="checkbox" name="permissions[]" value="44" @if($user->hasPermissionTo(44))  checked @endif />
                            <span></span>
                            Delete
                        </label>
                        <label class="checkbox checkbox-outline checkbox-outline-2x checkbox-warning">
                            <input type="checkbox" name="permissions[]" value="46" @if($user->hasPermissionTo(46))  checked @endif />
                            <span></span>
                            Assign to users
                        </label>
                    </div>
                    <span class="form-text text-muted"></span>
                </div>
            </div>
            <div class="form-group row">
                <label class="col-3 col-form-label">All Assignment</label>
                <div class="col-9 col-form-label">
                    <div class="checkbox-inline">
                        <label class="checkbox checkbox-outline checkbox-outline-2x checkbox-primary">
                            <input type="checkbox" name="permissions[]" value="34" @if($user->hasPermissionTo(34))  checked @endif />
                            <span></span>
                            View
                        </label>
                    </div>
                    <span class="form-text text-muted"></span>
                </div>
            </div>

        @endif
        @if($user->hasRole('User'))
            <div class="form-group row">
                <label class="col-3 col-form-label">Personels</label>
                <div class="col-9 col-form-label">
                    <div class="checkbox-inline">
                        <label class="checkbox checkbox-outline checkbox-outline-2x checkbox-primary">
                            <input type="checkbox" name="permissions[]" value="26" @if($user->hasPermissionTo(26))  checked @endif />
                            <span></span>
                            View
                        </label>
                        <label class="checkbox checkbox-outline checkbox-outline-2x checkbox-info">
                            <input type="checkbox" name="permissions[]" value="25" @if($user->hasPermissionTo(25))  checked @endif />
                            <span></span>
                            Add
                        </label><label class="checkbox checkbox-outline checkbox-outline-2x checkbox-warning">
                            <input type="checkbox" name="permissions[]" value="27" @if($user->hasPermissionTo(27))  checked @endif />
                            <span></span>
                            Edit
                        </label><label class="checkbox checkbox-outline checkbox-outline-2x checkbox-danger">
                            <input type="checkbox" name="permissions[]" value="28" @if($user->hasPermissionTo(28))  checked @endif />
                            <span></span>
                            Delete
                        </label>
                    </div>
                    <span class="form-text text-muted"></span>
                </div>
            </div>

            <div class="form-group row">
                <label class="col-3 col-form-label">Course Statics</label>
                <div class="col-9 col-form-label">
                    <div class="checkbox-inline">
                        <label class="checkbox checkbox-outline checkbox-outline-2x checkbox-primary">
                            <input type="checkbox" name="permissions[]" value="30" @if($user->hasPermissionTo(30))  checked @endif />
                            <span></span>
                            View
                        </label>
                        <label class="checkbox checkbox-outline checkbox-outline-2x checkbox-info">
                            <input type="checkbox" name="permissions[]" value="29" @if($user->hasPermissionTo(29))  checked @endif />
                            <span></span>
                            View assigned certificate
                        </label>
{{--                        <label class="checkbox checkbox-outline checkbox-outline-2x checkbox-warning">--}}
{{--                            <input type="checkbox" name="permissions[]" value="31" @if($user->hasPermissionTo(31))  checked @endif />--}}
{{--                            <span></span>--}}
{{--                            Edit--}}
{{--                        </label><label class="checkbox checkbox-outline checkbox-outline-2x checkbox-danger">--}}
{{--                            <input type="checkbox" name="permissions[]" value="32" @if($user->hasPermissionTo(32))  checked @endif />--}}
{{--                            <span></span>--}}
{{--                            Delete--}}
{{--                        </label>--}}
                    </div>
                    <span class="form-text text-muted"></span>
                </div>
            </div>
            <div class="form-group row">
                <label class="col-3 col-form-label">Resources</label>
                <div class="col-9 col-form-label">
                    <div class="checkbox-inline">
                        <label class="checkbox checkbox-outline checkbox-outline-2x checkbox-primary">
                            <input type="checkbox" name="permissions[]" value="18" @if($user->hasPermissionTo(18))  checked @endif />
                            <span></span>
                            View
                        </label>
                        <label class="checkbox checkbox-outline checkbox-outline-2x checkbox-info">
                            <input type="checkbox" name="permissions[]" value="17" @if($user->hasPermissionTo(17))  checked @endif />
                            <span></span>
                            Add
                        </label>
                        <label class="checkbox checkbox-outline checkbox-outline-2x checkbox-warning">
                            <input type="checkbox" name="permissions[]" value="19" @if($user->hasPermissionTo(19))  checked @endif />
                            <span></span>
                            View Uploaded Files
                        </label>
                    </div>
                    <span class="form-text text-muted"></span>
                </div>
            </div>
            <div class="form-group row">
                <label class="col-3 col-form-label">Assignments</label>
                <div class="col-9 col-form-label">
                    <div class="checkbox-inline">
                        <label class="checkbox checkbox-outline checkbox-outline-2x checkbox-primary">
                            <input type="checkbox" name="permissions[]" value="34" @if($user->hasPermissionTo(34))  checked @endif />
                            <span></span>
                            View
                        </label>
                    </div>
                    <span class="form-text text-muted"></span>
                </div>
            </div>
            <div class="form-group row">
                <label class="col-3 col-form-label">Groups/Classes</label>
                <div class="col-9 col-form-label">
                    <div class="checkbox-inline">
                        <label class="checkbox checkbox-outline checkbox-outline-2x checkbox-primary">
                            <input type="checkbox" name="permissions[]" value="38" @if($user->hasPermissionTo(38))  checked @endif />
                            <span></span>
                            View
                        </label>
                    </div>
                    <span class="form-text text-muted"></span>
                </div>
            </div>
            <div class="form-group row">
                <label class="col-3 col-form-label">Equipment</label>
                <div class="col-9 col-form-label">
                    <div class="checkbox-inline">
                        <label class="checkbox checkbox-outline checkbox-outline-2x checkbox-primary">
                            <input type="checkbox" name="permissions[]" value="42" @if($user->hasPermissionTo(42))  checked @endif />
                            <span></span>
                            View
                        </label>
                    </div>
                    <span class="form-text text-muted"></span>
                </div>
            </div>

        @endif


</div>
<div class="card-footer">
    <div class="row">
        <div class="col-lg-6">
            <button type="submit" class="btn btn-primary mr-2">Save</button>
            <a  href="{{url('/user-managment')}}" class="btn btn-secondary">Cancel</a>
        </div>
        <div class="col-lg-6 text-lg-right">
            {{--<button type="reset" class="btn btn-danger">Delete</button>--}}
        </div>
    </div>
</div>
