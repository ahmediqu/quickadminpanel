<?php

namespace App\Http\Controllers\Backend;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\User;
use App\Models\Frontend\Website\Contact;
use Carbon\Carbon;
use App\Models\Frontend\Website\ApplayCourse;
use DB;
use App\Suggestion;
use App\FranchiseProfile;
class HomeController extends Controller
{
    public function index(){
    	
    	return view('backend.dashboard');
    }

    public function applyCourseList(){
    	$data = [];
    	$data['applied'] = DB::table('applay_courses')->get();
        return view('backend.pages.applyCourseList',$data);
    }

    public function selectTutor(){
        $data = [];
        $data['approve_tutor'] = User::where('status',1)->get();
        return view('backend.pages.select_tutor.index',$data);
    }

    public function approvedTutor(Request $request){
        $get_user_id = $request->user_id;
        $user = User::findOrfail($get_user_id);
        $user->is_home = 1;
        $user->save();
        return back();
    }
    public function approvedFranchise(Request $request){
        $get_user_id = $request->franchise_id;
        $user = FranchiseProfile::findOrfail($get_user_id);
        $user->status = 1;
        $user->save();
        return back();
    }
}
