<?php

namespace App\Http\Controllers\Backend;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Auth;
use App\Model\Project;
use App\Model\ProjectCategory;
class ProjectController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $data = [];
        $data['project'] = Project::all();
        return view('backend.project.index',$data);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $data = [];
        $data['cats'] = ProjectCategory::all();
        return view('backend.project.create',$data);
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
            $project =  Project::findOrFail($update_id);
        }else{
            $project = new Project();
        }
        $image_one = $request->file('image_one');
        if ($image_one) {
            $image_name = Auth::user()->id.time().'.'.request()->image_one->getClientOriginalExtension();


            $image_full_name = $image_name;
            $destination_path = 'uploads/project/';
            $image_url = $destination_path . $image_full_name;
            $success = $request->file('image_one')->move($destination_path, $image_full_name);
            if ($success) {
                $project->image_one = $image_url;
            }
        }
        $image_two = $request->file('image_two');
        if ($image_two) {
            $image_name = Auth::user()->id.time().'.'.request()->image_two->getClientOriginalExtension();


            $image_full_name = $image_name;
            $destination_path = 'uploads/project/';
            $image_url = $destination_path . $image_full_name;
            $success = $request->file('image_two')->move($destination_path, $image_full_name);
            if ($success) {
                $project->image_two = $image_url;
            }
        }
        $project->title = $request->title;
        $project->description = $request->description;
        $project->project_cat = $request->project_cat;
        $project->started_date = $request->started_date;
        $project->project_link = $request->project_link;
        $project->project_status = $request->project_status;
        $project->client_name = $request->client_name;
        
        $this->setSuccess('successfully created !!');
        $project->save();
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
        $data['project'] = Project::findOrFail($id);
        return view('backend.project.create',$data);
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
        $project = Project::findOrFail($id);
        $project->delete();
        $this->setSuccess('successfully deleted !!');
        return back();
    }
}
