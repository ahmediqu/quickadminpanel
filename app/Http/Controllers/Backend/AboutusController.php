<?php

namespace App\Http\Controllers\Backend;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Auth;
use App\Model\Aboutus;
class AboutusController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $data = [];
        $data['aboutus'] = Aboutus::first();
        return view('backend.about_us.index',$data);
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
        $update_id = $request->update_id;
        if(isset($update_id) && !empty($update_id)){
            $aboutus =  Aboutus::findOrFail($update_id);
        }else{
            $aboutus = new Aboutus();
        }

        $image_one = $request->file('image_one');
        if ($image_one) {
            $image_name = Auth::user()->id.time().'.'.request()->image_one->getClientOriginalExtension();


            $image_full_name = $image_name;
            $destination_path = 'uploads/aboutus/';
            $image_url = $destination_path . $image_full_name;
            $success = $request->file('image_one')->move($destination_path, $image_full_name);
            if ($success) {
                $aboutus->image_one = $image_url;
            }
        }

        $image_two = $request->file('image_two');
        if ($image_two) {
            $image_name = Auth::user()->id.time().'.'.request()->image_two->getClientOriginalExtension();


            $image_full_name = $image_name;
            $destination_path = 'uploads/aboutus/';
            $image_url = $destination_path . $image_full_name;
            $success = $request->file('image_two')->move($destination_path, $image_full_name);
            if ($success) {
                $aboutus->image_two = $image_url;
            }
        }

        $aboutus->title = $request->title;
        $aboutus->subtitle = $request->subtitle;
        $aboutus->description = $request->description;
        
        $this->setSuccess('successfully created !!');
        $aboutus->save();
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
        //
    }
}
