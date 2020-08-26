@extends('backend.layouts.master')
@section('page-title','Gallery')
@section('page-content')
<div class="content">
    <div class="container-fluid">
        <div class="container">
            <br><br>
            <div class="row justify-content-center">
                <div class="col-md-8">
                    <div class="card">
                        <div class="card-body">
                          <h3 class="text-center"> <?php if(isset($gallery)){ echo "Update ";}else{ ?>Create new <?php } ?>  Gallery </h3>
                          @include('backend.partials._message')
                           <form action="{{route('gallery.store')}}" method="post" enctype="multipart/form-data">
                             @csrf
                             <input type="hidden" name="update_id" value="<?php if(isset($gallery->id)){echo $gallery->id;}?>">
                             <div class="form-group">
                               <label for="">Title</label>
                               <input type="text" class="form-control" name="title" value="<?php if(isset($gallery->title)){echo $gallery->title;}?>">
                             </div>
                             <div class="form-group">
                               <label for="">Image Link</label>
                               <input type="text" class="form-control" name="image_link" value="<?php if(isset($gallery->title)){echo $gallery->title;}?>">
                             </div>
                             
                             <div class="form-group">
                               <label for="">Upload Image</label>
                               <input type="file" class="form-control" name="image">
                               <?php
                                if(isset($gallery->image)){
                                  echo "<img src='".asset($gallery->image)."' style='height:50px;'>";
                                }
                               ?>
                             </div>

                             <div class="form-group">
                               <label for="">Position</label>
                               <input type="text" class="form-control" name="position" value="<?php if(isset($gallery->position)){echo $gallery->position;}?>">
                             </div>


                             <br>
                             <?php
                              if(isset($gallery)){
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
            </div>
        </div>
    </div>
</div>
@endsection

