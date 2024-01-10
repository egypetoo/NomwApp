<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Department;

class DepartmentController extends Controller
{
    public function index()
    {
        $departments = Department::orderBy('id','DESC')->get();
        return view('admin.departments.departments',compact('departments'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('admin.departments.addDepartment');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $request->validate([
            'pdf' => 'nullable|mimes:pdf',
        ]);
        $add = new Department();
        $add->name_en = $request->name_en;
        $add->name_ar = $request->name_ar;
        $add->status = $request->status;
        if($request->hasFile("pdf")){
            $extension = $request->file('pdf')->getClientOriginalExtension();
            $filename = rand(11111111, 99999999). '.' . $extension;
            $request->file('pdf')->move( base_path() . '/uploads/pdf', $filename );
            $add->pdf = $filename;
        }
        $add->save();
        return redirect()->route('departments.index')->with('success',trans('home.your_item_added_successfully'));
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
        $department=Department::find($id);
        if($department){
            return view('admin.departments.editDepartment',compact('department'));
        }else{
            abort('404');
        }
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $request->validate([
            'pdf' => 'nullable|mimes:pdf',
        ]);
        $add = Department::find($id);
        $add->name_en = $request->name_en;
        $add->name_ar = $request->name_ar;
        $add->status = $request->status;
        //upload pdf file
        if($request->hasFile("pdf")){
            @unlink(base_path() . '/uploads/pdf/' . $add->pdf);
            $extension = $request->file('pdf')->getClientOriginalExtension();
            $filename = rand(11111111, 99999999). '.' . $extension;
            $request->file('pdf')->move( base_path() . '/uploads/pdf', $filename );
            $add->pdf = $filename;
        }
        $add->save();
        return redirect()->route('departments.index')->with('success',trans('home.your_item_updated_successfully'));
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($ids)
    {
        //
        $ids = explode(',', $ids);
        if ($ids[0] == 'on') {
            unset($ids[0]);
        }
        
        foreach ($ids as $id) {
            $departments = Department::findOrFail($id);
            $departments->delete();
        }
    }  
}
