<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Setting;
use File;
use Image;
class SettingController extends Controller
{
    
    public function __construct()
    {
        $this->middleware('permission:setting');
    }
    
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
        $settings =Setting::first();
        return view('admin.settings.setting',compact('settings'));
    }

    public function update(Request $request, $id)
    {
        $settings=Setting::first();
        $settings->default_lang = $request->default_lang;
        $settings->contact_email = $request->contact_email;
        $settings->email = $request->email;
        $settings->telphone = $request->telphone;
        $settings->mobile = $request->mobile;
        $settings->telphone2 = $request->telphone2;
        $settings->mobile2 = $request->mobile2;
        $settings->fax = $request->fax;
        $settings->facebook = $request->facebook;
        $settings->linkedin = $request->linkedin;
        $settings->instgram = $request->instgram;
        $settings->twitter = $request->twitter;
		$settings->alert_name_en = $request->alert_name_en;
		$settings->alert_name_ar = $request->alert_name_ar;
		$settings->alert_text_en = $request->alert_text_en;
		$settings->alert_text_ar = $request->alert_text_ar;
        $settings->lat = $request->lat;
        $settings->lng = $request->lng;
        $settings->map_url = $request->map_url;
        $settings->whatsapp = $request->whatsapp;
        $settings->youtube = $request->youtube;
        $settings->cetificates = $request->cetificates;
        $settings->exp_years = $request->exp_years;
        $settings->surgeries = $request->surgeries;
        $settings->consult = $request->consult;
        
        if ($request->hasFile("business_card_front")) {

            $file = $request->file("business_card_front");
            $mime = File::mimeType($file);
            $mimearr = explode('/', $mime);

            $img_path = base_path() . '/uploads/settings/source/';
            $img_path200 = base_path() . '/uploads/settings/resize200/';
            $img_path800 = base_path() . '/uploads/settings/resize800/';

            if ($settings->business_card_front != null) {
                unlink(sprintf($img_path . '%s', $settings->business_card_front));
                unlink(sprintf($img_path200 . '%s', $settings->business_card_front));
                unlink(sprintf($img_path800 . '%s', $settings->business_card_front));
            }

            // $destinationPath = base_path() . '/uploads/'; // upload path
            $extension = $mimearr[1]; // getting file extension
            $fileName = rand(11111, 99999) . '.' . $extension; // renameing image
            $path = base_path('uploads/settings/source/' . $fileName);
            $resize200 = base_path('uploads/settings/resize200/' . $fileName);
            $resize800 = base_path('uploads/settings/resize800/' . $fileName);
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

            $settings->business_card_front = $fileName;
        }
        
        if ($request->hasFile("business_card_back")) {

            $file = $request->file("business_card_back");
            $mime = File::mimeType($file);
            $mimearr = explode('/', $mime);

            $img_path = base_path() . '/uploads/settings/source/';
            $img_path200 = base_path() . '/uploads/settings/resize200/';
            $img_path800 = base_path() . '/uploads/settings/resize800/';

            if ($settings->business_card_back != null) {
                unlink(sprintf($img_path . '%s', $settings->business_card_back));
                unlink(sprintf($img_path200 . '%s', $settings->business_card_back));
                unlink(sprintf($img_path800 . '%s', $settings->business_card_back));
            }

            // $destinationPath = base_path() . '/uploads/'; // upload path
            $extension = $mimearr[1]; // getting file extension
            $fileName = rand(11111, 99999) . '.' . $extension; // renameing image
            $path = base_path('uploads/settings/source/' . $fileName);
            $resize200 = base_path('uploads/settings/resize200/' . $fileName);
            $resize800 = base_path('uploads/settings/resize800/' . $fileName);
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

            $settings->business_card_back = $fileName;
        }
        $settings->save();

        return back()->with('success',trans('home.settings_updated_successfully'));
    }


}
