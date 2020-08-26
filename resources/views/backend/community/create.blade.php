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
                          <h3 class="text-center"> <?php if(isset($blog)){ echo "Update ";}else{ ?>Create new <?php } ?>  Community </h3>
                          @include('backend.partials._message')
                           <form action="{{route('community.store')}}" method="post" enctype="multipart/form-data">
                             @csrf
                             <input type="hidden" name="update_id" value="<?php if(isset($blog->id)){echo $blog->id;}?>">
                             <div class="form-group">
                               <label for="">Title</label>
                               <input type="text" class="form-control" name="title" value="<?php if(isset($blog->title)){echo $blog->title;}?>">
                             </div>

                             <div class="form-group">
                               <label for="">Select Category</label>
                               <select name="category_id" id="post_category" class="form-control">
                                  
                                  <?php
                                  if(isset($blog->category_id) && !empty($blog->category_id)){
                                    $update_category = DB::table('blog_categories')->where('id',$blog->category_id)->first();
                                    if(isset($update_category) && !empty($update_category)){
                                  ?>
                                  <option value="{{$update_category->id}}">{{$update_category->category_name}}</option>
                                <?php } }else{ ?>
                                  
                                <?php } ?>
                                  @foreach($blogcategory as $cat)
                                  <option value="{{$cat->id}}">{{$cat->category_name}}</option>
                                  @endforeach
                               </select>
                             </div>

                             <div class="form-group">
                               <label for="">Description</label>
                               <textarea name="description" id="" class="form-control summernote" cols="30" rows="10">
                                 <?php if(isset($blog) && !empty($blog)){
                                  ?>
                                  {!! $blog->description !!}
                                  <?php
                                 }?>
                               </textarea>
                             </div>
                             <div class="form-group">
                               <label for="">Upload Image</label>
                               <input type="file" class="form-control" name="image">
                               <?php
                                if(isset($blog->image)){
                                  echo "<img src='".asset($blog->image)."' style='height:50px;'>";
                                }
                               ?>
                             </div>

                             <div class="form-group">
                               <label for="">Position</label>
                               <input type="text" class="form-control" name="position" value="<?php if(isset($blog->position)){echo $blog->position;}?>">
                             </div>


                             <br>
                             <?php
                              if(isset($blog)){
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

