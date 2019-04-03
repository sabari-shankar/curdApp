<?php

namespace App\Http\Controllers;

use App\Employee;
use Illuminate\Http\Request;


class EmployeeController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $emp['employees']=Employee::all();
        return view('employee',$emp);

    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request,Employee $emp)
    {
        //$mes=['numeric'=>':attribute must be an mobile'];
         $validate=$request->validate(['name'=>'required',
                                        'mobile'=>'required|numeric',
                                        'email'=>'required|unique:employees']);
        $emp->name=$request->name;
        $emp->mobile=$request->mobile;
        $emp->email=$request->email;
        if($emp->save()){
            $request->session()->flash('alert-success','Record Inserted');
            return redirect()->back();
            echo"Inserted";
        }else{
            echo"<script>alert('Not Inserted');</script>";
        }
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Employee  $employee
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $emp['employees']=Employee::find($id);
        return view('employee-update',$emp);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Employee  $employee
     * @return \Illuminate\Http\Response
     */
    public function edit(Employee $employee)
    {

    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Employee  $employee
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request)
    {
        $validate=$request->validate(['name'=>'required',
                                        'mobile'=>'required|numeric',
                                        'email'=>'required']);
        $emp=Employee::find($request->id);
        $emp->name=$request->name;
        $emp->mobile=$request->mobile;
        $emp->email=$request->email;
        if($emp->save()){
            $request->session()->flash('alert-success','Record Updated');
            return redirect('/employee');
            echo "Updated";
        }else{
            echo"Not Updated";
        }
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Employee  $employee
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $emp=Employee::find($id);

        if($emp->delete()){

            return redirect()->back();
            echo"Deleted";
        }else{
            echo"Not Deleted";
        }
    }
}
