@extends('backend.layouts.master')
@section('page-title','Blog')
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
        <div class="col-md-12">
          <div class="card">
            <div class="card-body">
              @include('backend.partials._message')
              <form action="{{url('admin/blogimage/store')}}" method="post" enctype="multipart/form-data">
                @csrf
                <input type="hidden" name="blog_id" value="{{$id}}">
              <div class="row">
                <div class="col-md-6">
                  <div class="input-group control-group increment" >
                    <input type="file" name="photos[]" class="form-control" required>
                    <div class="input-group-btn">
                      <button class="btn btn-success add-more" type="button"><i class="glyphicon glyphicon-plus"></i>Add</button>
                    </div>
                  </div>
                  <div class="clone hide">
                    <div class="control-group input-group" style="margin-top:10px">
                      <input type="file" name="photos[]" class="form-control">
                      <div class="input-group-btn">
                        <button class="btn btn-danger remove-more" type="button"><i class="glyphicon glyphicon-remove"></i> Remove</button>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
              <br>
              <div class="form-group">
                <input type="submit" class="btn btn-info">
              </div>
              </form>
              

              <?php
                foreach($blogimages as $image){
                  ?>
                  <figure class="figure">
  <img src="{{url($image->photos)}}" class="figure-img img-fluid rounded img-thumbnail" alt="..." style="height: 100px;">
  <figcaption class="figure-caption"><a href="{{url('admin/blogimage/delete',$image->id)}}" class="btn btn-danger btn-sm">Del</a></figcaption>
</figure>
                  <?php
                }
              ?>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
</div>
<script>
function deleteconfirm()
{
deletedata = confirm("Are you sure to delete permanently?");
if (deletedata != true)
{
return false;
}
}
</script>
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