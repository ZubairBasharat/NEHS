<?php
namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;

use App\Models\CourseCategory;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Session;

class CoursecatController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $categories=CourseCategory::where('company_id','=',Auth::User()->company_id)->get();
        return view('dashboard2.coursecateg',compact('categories'));

    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create(Request $request)
    {


        $add=new CourseCategory();
        $add->name=$request->name;
        $add->esp_name=$request->esp_name;
        $add->status=1;
        $add->company_id=Auth::user()->company_id;
        $add->save();
        Session::flash('succesmsg', 'Successfully Created');
        return redirect()->back();

    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $data=CourseCategory::find($id);

        return response()->json($data);
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request,$id)
    {
        $add=CourseCategory::find($id);
        $add->name=$request->name;
        $add->esp_name=$request->esp_name;
        $add->status=$request->status;
        $add->update();
        Session::flash('succesmsg', 'Successfully updated');
        return redirect()->back();
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //

        $del=CourseCategory::find($id);
        $del->delete();
        return redirect()->back();
    }
}
