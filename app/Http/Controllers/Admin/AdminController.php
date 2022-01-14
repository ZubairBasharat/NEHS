<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Session;
use Spatie\Permission\Models\Permission;
use Spatie\Permission\Models\Role;

class AdminController extends Controller
{
    //
    public function __construct()
    {
        $this->middleware('auth');
    }
    public function manage_users(){

        $users=User::where('company_id','=',Auth::User()->company_id)->get();
        $permissions=Permission::all();
        $rolls=Role::all();



    return view('admin.manageusers.index',compact('users','permissions','rolls'));



    }
    public function add_role(Request $request){


      $role = Role::create(['name' => $request->rolename]);
        Session::flash('succesmsg','Role Added Successfully!');
    return redirect()->back();



    }
    public function profile(Request $request){

        $user =User::find(Auth::user()->id);

        return view('admin.profile.admin-profile',compact('user'));



    }
    public function manage_permissions(Request $request){

        $this->validate($request,[
                'user'=> "required",
        ]);

        $permissions=$request->permissions;
        if (empty($permissions)){
            Session::flash('errormsg','Please Choose Atleast one Permission');
            return redirect()->back();

        }
        $user=User::find($request->user);
        $user->syncPermissions($permissions);
        Session::flash('succesmsg','Permission Granted Successfully');
        return redirect()->back();


    }
    public function show_permissions(Request $request){


        $html = view('partial.permissions',['user_id'=>$request->user_id])->render();
        echo $html;

    }










    public function comp(Request $request){

        // Define the page and number of items per page
        $page = 1;
        $per_page = 10;

// Define the default order
        $order_field = 'id';
        $order_sort = 'asc';

// Get the request parameters
        $params = $request->all();
        $query = User::query();

// Set the current page
        if(isset($params['pagination']['page'])) {
            $page = $params['pagination']['page'];
        }

// Set the number of items
        if(isset($params['pagination']['perpage'])) {
            $per_page = $params['pagination']['perpage'];
        }

// Set the search filter
        if(isset($params['query']['generalSearch'])) {
            $query->where('name', 'LIKE', "%" . $params['query']['generalSearch'] . "%")
                ->orWhere('email', 'LIKE', "%" . $params['query']['generalSearch'] . "%");
        }

// Set the status filter
        if(isset($params['query']['Status'])) {
            $query->where('status', $params['query']['Status']);
        }

// Set the sort order and field
        if(isset($params['sort']['field'])) {
            $order_field = $params['sort']['field'];
            $order_sort = $params['sort']['sort'];
        }

// Get how many items there should be
        $total = $query->limit($per_page)->count();

// Get the items defined by the parameters
        $results = $query->skip(($page - 1) * $per_page)
            ->take($per_page)->orderBy($order_field, $order_sort)
            ->get();



        // Create an array with the items and meta data
        $imports = [
            'meta' => [
                "page" => $page,
                "pages" => ceil($total / $per_page),
                "perpage" => $per_page,
                "total" => $total,
                "sort" => $order_sort,
                "field" => $order_field
            ],
            'data' => $results->toArray()
        ];


        // Return the array in JSON format
//        dd($imports);
        return response()->json($imports);
    }
}
