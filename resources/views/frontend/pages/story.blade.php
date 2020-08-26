@extends('frontend.layouts.master')
@section('page-title',' | Story')
@section('style')
<style>
  .description p {
    text-align: justify !important;
  }
</style>
@endsection



@section('page-content')
<div class="page-content pb-5 pt-5 bg-black" style="background: #C5EBF4;">
  <div class="container">
    <div class="row justify-content-center">
      <div class="col-md-12">
        <h1 class="text-center" style="display: 4;" >Our Story</h1>
      </div>
    </div>
  </div>
</div>
    <section class="blog">
      <div class="container-fluid">
      	<?php
      		if(isset($story) && !empty($story)){
      		foreach($story as $data){
      	?>
        <div class="row stories-row mb-5">
          <div class="col-md-6" style="padding: 0px;">
            <div class="card custom-card">
              <?php
              	if(isset($data->image) && !empty($data->image)){
              ?>
				<img src="{{ url($data->image)}}" class="card-img-top" alt="...">
              <?php }else{ ?>
              <img src="{{ url('frontend/image/blog.jpg')}}" class="card-img-top" alt="...">
              <?php } ?>
              
            </div>
          </div>
          <div class="col-md-6">
            <div class="card custom-card">
              
              <div class="card-body">
                <div class="stores-content">
                  
                  <h5 class="card-title">{{$data->title}}</h5>
                  <div class="description">
                  <p class="card-text">{!! $data->description !!}</p>
                  </div>
                  <a href="{{url('story/details',$data->id)}}" class=""> Details</a>
                </div>
              </div>
            </div>
          </div>
        </div>
       
        <?php } } ?>
        <div class="row mt-5">
          <div class="col-md-12">
            <div class="text-center">
              {{$story->links()}}
            </div>
          </div>
        </div>
      </div>
    </section>
@endsection
@section('scripts')
<script>
 jQuery(".description").text(function (i, text) {
  return text.length > 100 ? text.substr(0, text.lastIndexOf(' ', 550)) + '...' : text;
});
</script>
@endsection