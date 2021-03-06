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
                          <h3 class="text-center"> <?php if(isset($service)){ echo "Update ";}else{ ?>Create new <?php } ?>  Service </h3>
                          @include('backend.partials._message')
                           <form action="{{route('service.store')}}" method="post" enctype="multipart/form-data">
                             @csrf
                             <input type="hidden" name="update_id" value="<?php if(isset($service->id)){echo $service->id;}?>">
                             <div class="form-group">
                               <label for="">Title</label>
                               <input type="text" class="form-control" name="title" value="<?php if(isset($service->title)){echo $service->title;}?>">
                             </div>
                             <div class="form-group">
                               <label for="">Description</label>
                               <textarea name="description" id="" class="form-control summernote" cols="30" rows="10">
                                 <?php if(isset($service) && !empty($service)){
                                  ?>
                                  {!! $service->description !!}
                                  <?php
                                 }?>
                               </textarea>
                             </div>
                             <div class="form-group">
                               <label for="">Upload Image</label>
                               <input type="file" class="form-control" name="image">
                               <?php
                                if(isset($service->image)){
                                  echo "<img src='".asset($service->image)."' style='height:50px;'>";
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
            </div>
        </div>
    </div>
</div>
@endsection