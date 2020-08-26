@extends('backend.layouts.master')
@section('page-title','News')
@section('backend-stylesheet')
<style>
.hide{
display: none;
}
</style>
@endsection
@section('page-content')
<div class="content">
  <div class="container-fluid">
    <div class="container">
      <br><br>
      <div class="row justify-content-center">
        <div class="col-md-8">
          <div class="card">
            <div class="card-body">
              <h3 class="text-center"> <?php if(isset($news)){ echo "Update ";}else{ ?>Create new <?php } ?>  News </h3>
              @include('backend.partials._message')
              <form action="{{route('news.store')}}" method="post" enctype="multipart/form-data">
                @csrf
                <input type="hidden" name="update_id" value="<?php if(isset($news->id)){echo $news->id;}?>">
                <div class="form-group">
                  <label for="">Title</label>
                  <input type="text" class="form-control" name="title" value="<?php if(isset($news->title)){echo $news->title;}?>">
                </div>
                <div class="form-group">
                  <label for="">Description</label>
                  <textarea name="description" id="" class="form-control summernote" cols="30" rows="10">
                  <?php if(isset($news) && !empty($news)){
                  ?>
                  {!! $news->description !!}
                  <?php
                  }?>
                  </textarea>
                </div>
                <div class="form-group">
                  <label for="">Upload Image</label>
                  <input type="file" class="form-control" name="image">
                  <?php
                  if(isset($news->image)){
                  echo "<img src='".asset($news->image)."' style='height:50px;'>";
                  }
                  ?>
                </div>
                <div class="form-group">
                  <label for="">Position</label>
                  <input type="text" class="form-control" name="position" value="<?php if(isset($news->position)){echo $news->position;}?>">
                </div>
                <div class="form-group">
                  <label for="">Other Image</label>
                  
                </div>
                
                
                <div class="input-group control-group increment" >
                  <input type="file" name="other_image[]" class="form-control" required>
                  <div class="input-group-btn">
                    <button class="btn btn-success add-more" type="button"><i class="glyphicon glyphicon-plus"></i>Add</button>
                  </div>
                </div>
                <div class="clone hide">
                  <div class="control-group input-group" style="margin-top:10px">
                    <input type="file" name="other_image[]" class="form-control">
                    <div class="input-group-btn">
                      <button class="btn btn-danger remove-more" type="button"><i class="glyphicon glyphicon-remove"></i> Remove</button>
                    </div>
                  </div>
                </div>
                <?php
                if(isset($news->id) && !empty($news->id)){
                $allphotos = DB::table('news')->where('id',$news->id)->get();
                foreach($allphotos as $alimg){
                $alimgs = explode(',',$alimg->other_image);
                foreach($alimgs as  $key => $singleimage){
                
                ?>
                
                <div id="preview">
                  <img src="{{url('other_image/',$singleimage)}}" alt="" style="height: 100px;">
                  <a href="{{url('admin/deleteimage',[$news->id,$singleimage])}}" class="remove_img_preview">Del</a>
                </div>
                <?php
                } } }
                ?>
                <br>
                <?php
                if(isset($news)){
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
@section('backend-scripts')
<script>
$(document).ready(function() {
$(".add-more").click(function(){
var html = $(".clone").html();
$(".increment").after(html);
});
$("body").on("click",".remove-more",function(){
$(this).parents(".control-group").remove();
});
});
$(document).ready(function(){
$('#other_image_del').click(function(){
var get_image = ('#other_image_get').val();
console.log(get_image);
});
});
$('#preview').on('click', '.remove_img_preview', function () {
$("#preview").empty()
$("#file").val("");
});
</script>
@endsection