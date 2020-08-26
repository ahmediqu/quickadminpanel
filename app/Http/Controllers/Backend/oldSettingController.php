<?php

namespace App\Http\Controllers\Backend;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Model\Setting;
use Auth;
use DB;
class SettingController extends Controller
{
    public function index(){
    	$data = [];
    	$data['setting'] = Setting::first();
    	return view('backend.setting.index',$data);
    }

    public function store(Request $request){
    	$update_id = $request->setting_id;
    	if(isset($update_id) && !empty($update_id)){
    		$data = Setting::findOrFail($update_id);
    	}else{
    		$data = new Setting();
    	}
    	$logo = $request->file('logo');
        if ($logo) {
            $image_name = Auth::user()->id.time().'.'.request()->logo->getClientOriginalExtension();


            $image_full_name = $image_name;
            $destination_path = 'uploads/setting/';
            $image_url = $destination_path . $image_full_name;
            $success = $request->file('logo')->move($destination_path, $image_full_name);
            if ($success) {
                $data->logo = $image_url;
            }
        }

        $audio = $request->file('audio');
        if ($audio) {
            $image_name = Auth::user()->id.time().'.'.request()->audio->getClientOriginalExtension();


            $image_full_name = $image_name;
            $destination_path = 'uploads/setting/';
            $image_url = $destination_path . $image_full_name;
            $success = $request->file('audio')->move($destination_path, $image_full_name);
            if ($success) {
                $data->audio = $image_url;
            }
        }

        $slider_image = $request->file('slider_image');
        if ($slider_image) {
            $image_name = Auth::user()->id.time().'.'.request()->slider_image->getClientOriginalExtension();


            $image_full_name = $image_name;
            $destination_path = 'uploads/setting/';
            $image_url = $destination_path . $image_full_name;
            $success = $request->file('slider_image')->move($destination_path, $image_full_name);
            if ($success) {
                $data->slider_image = $image_url;
            }
        }

    	$data->company_name = $request->company_name;
    	$data->company_slogan = $request->company_slogan;
    	$data->fb_link = $request->fb_link;
    	$data->twitter_link = $request->twitter_link;
    	$data->ins_link = $request->ins_link;
    	$data->linkedin_link = $request->linkedin_link;
    	$data->slider_video_link = $request->slider_video_link;
    	$data->save();
    	return back();
    }
}
