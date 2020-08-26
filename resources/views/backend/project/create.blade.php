@extends('backend.layouts.master')
@section('page-title','Service')
@section('page-content')
<div class="content">
    <div class="container-fluid">
        <div class="container">
            <br><br>
            <div class="row justify-content-center">
                <div class="col-md-8">
                    <div class="card">
                        <div class="card-body">
                          <h3 class="text-center"> <?php if(isset($service)){ echo "Update ";}else{ ?>Create new <?php } ?>  Project </h3>
                          @include('backend.partials._message')
                           <form action="{{route('project.store')}}" method="post" enctype="multipart/form-data">
                             @csrf
                             <input type="hidden" name="update_id" value="<?php if(isset($service->id)){echo $service->id;}?>">
                              
                              <div class="form-group">
                                <label for="project_cat">Select Project Category</label>
                                <select name="project_cat" id="project_cat" class="form-control">
                                  <option value="">select category</option>
                                  <?php if(isset($cats) && !empty($cats)){ ?>
                                  @foreach($cats as $cat)
                                  <option value="{{$cat->id}}">{{$cat->name}}</option>
                                  @endforeach
                                  <?php } ?>
                                </select>
                              </div>

                             <div class="form-group">
                               <label for="">Title</label>
                               <input type="text" class="form-control" name="title" value="<?php if(isset($project->title)){echo $project->title;}?>">
                             </div>

                             <div class="form-group">
                               <label for="">Project Link</label>
                               <input type="text" class="form-control" name="project_link" value="<?php if(isset($project->project_link)){echo $project->project_link;}?>">
                             </div>

                             <div class="form-group">
                               <label for="project_status">Project Status</label>
                               <input type="text" class="form-control" name="project_status" value="<?php if(isset($project->project_status)){echo $project->project_status;}?>">
                             </div>

                             <div class="form-group">
                               <label for="client_name">client name</label>
                               <input type="text" class="form-control" name="client_name" value="<?php if(isset($project->client_name)){echo $project->client_name;}?>">
                             </div>

                             <div class="form-group">
                               <label for="started_date">Project Started Date</label>
                               <input type="date" class="form-control" name="started_date" value="<?php if(isset($project->client_name)){echo $project->client_name;}?>">
                             </div>

                             <div class="form-group">
                               <label for="">Description</label>
                               <textarea name="description" id="" class="form-control summernote" cols="30" rows="10">
                                 <?php if(isset($project) && !empty($project)){
                                  ?>
                                  {!! $project->description !!}
                                  <?php
                                 }?>
                               </textarea>
                             </div>
                             <div class="form-group">
                               <label for="">Upload Image 1</label>
                               <input type="file" class="form-control" name="image_one">
                               <?php
                                if(isset($project->image_one)){
                                  echo "<img src='".asset($project->image_one)."' style='height:50px;'>";
                                }
                               ?>
                             </div>

                             <div class="form-group">
                               <label for="">Upload Image 2</label>
                               <input type="file" class="form-control" name="image_two">
                               <?php
                                if(isset($project->image_two)){
                                  echo "<img src='".asset($project->image_two)."' style='height:50px;'>";
                                }
                               ?>
                             </div>
                             <br>
                             <?php
                              if(isset($service)){
                              ?>
                              <input type="submit" class="btn btn-success" value="Update">
                              <?php
                              }else{
                             ?>
                             <input type="submit" class="btn btn-success" value="Submit">
                             <?php } ?>
                           </form>
                        </div>
                    </div>
                </div>
                <div class="col-md-4">
                  <div class="card">
                    <div class="card-body">
                      
                    
                    <h3 class="text-center">Craete a new category</h3>
                    <form action="{{route('project_category.store')}}" method="post">
                      @csrf
                      <div class="form-group">
                        <label for="">Category Name</label>
                        <input type="text" class="form-control" name="name">
                      </div>
                      <br>
                      <input type="submit" class="btn btn-success" value="Submit">
                    </form>
                    <table class="table table-bordered">
                      <thead>
                        <th>sl.</th>
                        <th>name</th>
                        <th>action</th>
                      </thead>
                      <tbody>
                        <?php
                          if(isset($cats) && !empty($cats)){
                            $c = 0;
                        ?>
                        @foreach($cats as $cat)
                        <?php $c++; ?>
                        <tr>
                          <td>{{$c}}</td>
                          <td>{{$cat->name}}</td>
                        </tr>
                        @endforeach
                        <?php } ?>
                      </tbody>
                    </table>
                    </div>
                  </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection