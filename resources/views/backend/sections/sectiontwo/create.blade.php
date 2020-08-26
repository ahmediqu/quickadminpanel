@extends('backend.layouts.master')
@section('page-title','Section Content')
@section('page-content')
<div class="content">
    <div class="container-fluid">
        <div class="container">
            <br><br>
            <div class="row justify-content-center">
                <div class="col-md-8">
                    <div class="card">
                        <div class="card-body">
                          <h3 class="text-center"> <?php if(isset($section)){ echo "Update ";}else{ ?>Section Content <?php } ?>   </h3>
                          @include('backend.partials._message')
                           <form action="{{route('sectiontwo.store')}}" method="post" enctype="multipart/form-data">
                             @csrf
                             <input type="hidden" name="update_id" value="<?php if(isset($section->id)){echo $section->id;}?>">
                             <div class="form-group">
                               <label for="">Title</label>
                               <input type="text" class="form-control" name="title" value="<?php if(isset($section->title)){echo $section->title;}?>">
                             </div>
                             <div class="form-group">
                               <label for="">Button Link</label>
                               <input type="text" class="form-control" name="btn_link" value="<?php if(isset($section->btn_link)){echo $section->btn_link;}?>">
                             </div>
                             <div class="form-group">
                               <label for="">Description</label>
                               <textarea name="description" id="" class="form-control summernote" cols="30" rows="10">
                                 <?php if(isset($section) && !empty($section)){
                                  ?>
                                  {!! $section->description !!}
                                  <?php
                                 }?>
                               </textarea>
                             </div>
                             <div class="form-group">
                               <label for="">Upload Image</label>
                               <input type="file" class="form-control" name="image">
                               <?php
                                if(isset($section->image)){
                                  echo "<img src='".asset($section->image)."' style='height:50px;'>";
                                }
                               ?>
                             </div>

                             


                             <br>
                             <?php
                              if(isset($section)){
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

