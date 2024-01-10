<?php

namespace App\Http\Controllers;

use App\Models\Fund;
use File;
use Image;
use Auth;
use DB;
use Illuminate\Http\Request;
class FundController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
        $funds = Fund::all();
        return view('admin.funds.funds',compact('funds'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
        $funds = Fund::get();
        return view('admin.funds.addFund',compact('funds'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $add = new Fund();
        $add->name_en = $request->name_en;
        $add->name_ar = $request->name_ar;
        $link = str_replace(" ","-",$add->name_en);
        $add->link = str_replace("/","-",$link);
        $add->text_en = $request->text_en;
        $add->text_ar = $request->text_ar;
        $add->status = $request->status;
        if ($request->hasFile("image")) {
            $file = $request->file("image");
            $mime = File::mimeType($file);
            $mimearr = explode('/', $mime);

            // $destinationPath = base_path() . '/uploads/'; // upload path
            $extension = $mimearr[1]; // getting file extension
            $fileName = rand(11111, 99999) . '.' . $extension; // renameing image
            $path = base_path('uploads/funds/source/' . $fileName);
            $resize200 = base_path('uploads/funds/resize200/' . $fileName);
            $resize800 = base_path('uploads/funds/resize800/' . $fileName);
            //  $file->move($destinationPath, $fileName);

            Image::make($file->getRealPath())->save($path);

            $arrayimage = list($width, $height) = getimagesize($file->getRealPath());
            $widthreal = $arrayimage['0'];
            $heightreal = $arrayimage['1'];

            $width200 = ($widthreal / $heightreal) * 150;
            $height200 = $width200 / ($widthreal / $heightreal);

            $img200 = Image::canvas($width200, $height200);
            $image200 = Image::make($file->getRealPath())->resize($width200, $height200, function ($c) {
                $c->aspectRatio();
                $c->upsize();
            });
            $img200->insert($image200, 'center');
            $img200->save($resize200);

            $width800 = ($widthreal / $heightreal) * 800;
            $height800 = $width800 / ($widthreal / $heightreal);

            $img800 = Image::canvas($width800, $height800);
            $image800 = Image::make($file->getRealPath())->resize($width800, $height800, function ($c) {
                $c->aspectRatio();
                $c->upsize();
            });
            $img800->insert($image800, 'center');
            $img800->save($resize800);

            $add->image = $fileName;
        }
		if($request->hasFile("pdf")){
            $extension = $request->file('pdf')->getClientOriginalExtension();
            $filename = rand(11111111, 99999999). '.' . $extension;
            $request->file('pdf')->move( base_path() . '/uploads/funds/source', $filename );
            $add->pdf = $filename;
        }
        $add->save();
        return redirect('admin/funds')->with('success',trans('home.your_item_added_successfully'));
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
        //
        $fund =Fund::find($id);
        $funds = Fund::where('id','!=',$id)->get();  
		if($fund){
            return view('admin.funds.editFund',compact('fund','funds'));
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
            'pdf' => 'mimes:pdf',
        ]);
        $add = Fund::find($id);
        $add->name_en = $request->name_en;
        $add->name_ar = $request->name_ar;
        $link = str_replace(" ","-",$add->name_en);
        $add->link = str_replace("/","-",$link);
        $add->text_en = $request->text_en;
        $add->text_ar = $request->text_ar;
        $add->status = $request->status;

        if ($request->hasFile("image")) {

            $file = $request->file("image");
            $mime = File::mimeType($file);
            $mimearr = explode('/', $mime);

            $img_path = base_path() . '/uploads/funds/source/';
            $img_path200 = base_path() . '/uploads/funds/resize200/';
            $img_path800 = base_path() . '/uploads/funds/resize800/';

            if ($add->image != null) {
                unlink(sprintf($img_path . '%s', $add->image));
                unlink(sprintf($img_path200 . '%s', $add->image));
                unlink(sprintf($img_path800 . '%s', $add->image));
            }

            // $destinationPath = base_path() . '/uploads/'; // upload path
            $extension = $mimearr[1]; // getting file extension
            $fileName = rand(11111, 99999) . '.' . $extension; // renameing image
            $path = base_path('uploads/funds/source/' . $fileName);
            $resize200 = base_path('uploads/funds/resize200/' . $fileName);
            $resize800 = base_path('uploads/funds/resize800/' . $fileName);
            //  $file->move($destinationPath, $fileName);

            Image::make($file->getRealPath())->save($path);

            $arrayimage = list($width, $height) = getimagesize($file->getRealPath());
            $widthreal = $arrayimage['0'];
            $heightreal = $arrayimage['1'];

            $width200 = ($widthreal / $heightreal) * 150;
            $height200 = $width200 / ($widthreal / $heightreal);

            $img200 = Image::canvas($width200, $height200);
            $image200 = Image::make($file->getRealPath())->resize($width200, $height200, function ($c) {
                $c->aspectRatio();
                $c->upsize();
            });
            $img200->insert($image200, 'center');
            $img200->save($resize200);

            $width800 = ($widthreal / $heightreal) * 800;
            $height800 = $width800 / ($widthreal / $heightreal);

            $img800 = Image::canvas($width800, $height800);
            $image800 = Image::make($file->getRealPath())->resize($width800, $height800, function ($c) {
                $c->aspectRatio();
                $c->upsize();
            });
            $img800->insert($image800, 'center');
            $img800->save($resize800);
            $add->image = $fileName;
        }
		if($request->hasFile("pdf")){
            @unlink( base_path() . '/uploads/funds/source/'. $add->pdf);
            $extension = $request->file('pdf')->getClientOriginalExtension();
            $filename = rand(11111111, 99999999). '.' . $extension;
            $request->file('pdf')->move( base_path() . '/uploads/funds/source', $filename );
            $add->pdf = $filename;
        }
        $add->save();
        return redirect('admin/funds')->with('success',trans('home.your_item_added_successfully'));
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
            $fund = Fund::findOrFail($id);
            $img_path = base_path() . '/uploads/funds/source/';
            $img_path200 = base_path() . '/uploads/funds/resize200/';
            $img_path800 = base_path() . '/uploads/funds/resize800/';

            if ($fund->image != null) {
                unlink(sprintf($img_path . '%s', $fund->image));
                unlink(sprintf($img_path200 . '%s', $fund->image));
                unlink(sprintf($img_path800 . '%s', $fund->image));
            }

            $fund->delete();
        }
    }
}
