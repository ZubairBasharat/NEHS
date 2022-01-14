<?php

namespace App\Http\Controllers;

use App\Models\Equipment;
use App\Models\User;
use App\Models\Worker;
use App\Models\WorkerHasEquipment;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Session;

class EquipmentController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        if(Auth::user()->hasAnyRole(3,4,5,6,7,8,9,10)){
            $equipments = Equipment::all();
            $workers = Worker::all();
            return view('dashboard1.equipment.manager.index', compact('equipments', 'workers'));
        }
        if (Auth::user()->hasRole('User')) {

            $equipments = Worker::find(Auth::user()->user_personel->id)->equipments()->get();
            return view('dashboard1.equipment.user.index', compact('equipments'));

        }
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create(Request $request)
    {


        $add=new Equipment();
        $add->name=$request->name;
        $add->descr=$request->descr;
        $add->status=$request->status;
        $add->save();
        Session::flash('succesmsg','Added Successfully');
        return redirect()->back();

    }
    public function assigns(Request $request)
    {

        $already=WorkerHasEquipment::where('id_equipment',$request->equipment)->where('id_worker',$request->worker)->get();
        if (count($already) < 1 ){
        $add=new WorkerHasEquipment();
        $add->id_equipment =$request->equipment;
        $add->id_worker=$request->worker;
        $add->save();
        Session::flash('succesmsg','Added Successfully');
        }else{
            Session::flash('warnmsg','Already Assigned');
        }
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
        $data=Equipment::find($id);
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
//        dd($request->all());
        $add=Equipment::find($id);
        $add->name=$request->edit_name;
        $add->descr=$request->edit_descr;
        $add->status=$request->edit_status;
        $add->update();
        Session::flash('succesmsg','Updated Successfully');
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

        $del=Equipment::find($id);
        $del->delete();
        Session::flash('succesmsg','Deleted Successfully');
        return redirect()->back();
    }
}
