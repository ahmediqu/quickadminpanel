<?php

namespace App\Http\Controllers\Backend;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Model\Subscription;
use App\Model\News;
use DB;
class SubscriberController extends Controller
{
    public function index(){
    	$data = [];
    	$data['subs'] = Subscription::all();
    	return view('backend.subscribe.index',$data);
    }

    public function newsImageDelete($newsId,$id){
        // $data = [];
        // $data['editimage'] = News::findOrFail($id);

        // return view('backend.news.editimage',$data);
    	$news = News::findOrFail($newsId);
    	$hd = explode(',',$news->other_image);

    	foreach($hd as $singleimg){
    		$other_image[]=$singleimg;
    		if($singleimg == $id){
    			unset($singleimg);

    		}else{
                
                 $other_image[]=$singleimg;
                 // print_r($other_image);
                 //$service->other_image =  implode(", ",$other_image);
            }
           
    		
    	}

         $news->other_image =  implode(",",$other_image);
         $news->save();
        return back();

// return back();
    	// $news->other_image =  implode(",",$other_image);
    	// $affected = DB::table('news')
     //           ->where('id', $newsId)
     //           ->update(['other_image' => $implode]);
    	// $news->save();


    		if($singleimg != $id){
    			 echo $singleimg;
    			 unset($singleimg);
    		

				$affected = DB::table('news')
				              ->where('id', $newsId)
				              ->update(['other_image' => $id]);

    			
    		}else{
    			 // $affected = DB::table('news')
        //       ->where('id', $newsId)
        //       ->update(['other_image' => $singleimg]);
    		}
    	
    	
    	// return back();
    	// unset($array[1])
    	// exit();
    }
}
