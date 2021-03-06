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
        <h1 class="text-center" style="display: 4;" >{{$event->title}}</h1>
        <h1 class="text-center" style="display: 4;" >{{$event->date}}</h1>
      </div>
    </div>
  </div>
</div>
    <section class="blog">
      <div class="container-fluid">
      	
        <div class="row mb-5 justify-content-center">
          <div class="col-md-6" style="padding: 0px;">
            <div class="text-center">
              <?php
              	if(isset($event->image) && !empty($event->image)){
              ?>
				<img src="{{ url($event->image)}}" class="card-img-top" alt="...">
              <?php }else{ ?>
              <img src="{{ url('frontend/image/blog.jpg')}}" class="card-img-top" alt="...">
              <?php } ?>
              
            </div>
          </div>
          <div class="col-md-12 text-center">
            <div class="">
              
              <div class="">
                <div class="">
                  
                  {{-- <h2 class="text-center p-3">{{$story->title}}</h2> --}}
                  <div class="">
                  <p class="card-text">{!! $event->description !!}</p>
                  </div>
                  
                </div>
              </div>
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