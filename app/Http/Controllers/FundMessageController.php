<?php

namespace App\Http\Controllers;

use App\Models\SubscribeToFund;
use DB;
use File;
use Image;
use Illuminate\Http\Request;

class FundMessageController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */

    public function index()
    {
        $fundMessages = SubscribeToFund::orderBy('id','DESC')->get();
        return view('admin.fundMessages.fundMessages',compact('fundMessages'));
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
    public function store(Request $request)
    {
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
        $fundMessage=SubscribeToFund::find($id);
        if($fundMessage){
            $fundMessage->save();
            return view('admin.fundMessages.fundMessage_details',compact('fundMessage'));
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
            $fundMessage = SubscribeToFund::findOrFail($id);
            $fundMessage->delete();
            return redirect()->url('/admin/fund-messages')->with('success',trans('home.message successfully deleted'));

        }
    }  
    
}
