<?php

namespace App\Http\Controllers\Backend;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Auth;
use DB;
use App\Model\News;
class NewsController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $data = [];
        $data['news'] = News::all();
       // echo "<pre>";
        // print_r($data);
        //echo $data['news'][0]->title; // work
       // exit();
        // foreach($data['news'] as $data){
        //     echo $data->title;
        //     echo "<br>";
        // }
        // exit();

        return view('backend.news.index',$data);

    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
         return view('backend.news.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $update_id = $request->update_id;
        if(isset($update_id) && !empty($update_id)){
            $service =  News::findOrFail($update_id);
        }else{
            $service = new News();
        }
        $image = $request->file('image');
        if ($image) {
            $image_name = Auth::user()->id.time().'.'.request()->image->getClientOriginalExtension();


            $image_full_name = $image_name;
            $destination_path = 'uploads/news/';
            $image_url = $destination_path . $image_full_name;
            $success = $request->file('image')->move($destination_path, $image_full_name);
            if ($success) {
                $service->image = $image_url;
            }
        }


        $other_image=array();
        if($files=$request->file('other_image')){
            foreach($files as $file){
                $name=$file->getClientOriginalName();
                $file->move('other_image',$name);
                $other_image[]=$name;
               
            }
        }

        if(isset($update_id) && !empty($update_id)){
            $allimages = explode(',', $service->other_image);
            foreach($allimages as $img){
                
                $other_image[]=$img;

            }
            $service->other_image =  implode(",",$other_image);
        }else{
           $service->other_image =  implode(",",$other_image); 
        }
        

        $service->title = $request->title;
        $service->description = nl2br($request->description);
        $service->position = $request->position;
        $service->user_id = Auth::user()->id;
        
        $this->setSuccess('successfully created !!');
        $service->save();
        return back();
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
        $data = [];
        $data['news'] = News::findOrFail($id);
        return view('backend.news.create',$data);
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
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $service = News::findOrFail($id);
        $service->delete();
        $this->setSuccess('successfully deleted !!');
        return back();
    }
}
