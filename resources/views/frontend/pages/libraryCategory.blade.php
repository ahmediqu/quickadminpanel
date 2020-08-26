@extends('frontend.layouts.master')
@section('page-title',' | Library ')
@section('style')
<link rel="stylesheet" href="{{url('frontend/css/lightbox.min.css')}}">
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
        <h1 class="text-center" style="display: 4;" >Library</h1>
      </div>
    </div>
  </div>
</div>


<section class="blog">
      <div class="container-fluid">
        <div class="row">
          
          <?php 
            if(isset($library) && !empty($library)){
          ?>
          @foreach($library as $blog)
          
          <div class="col-md-4">
            <div class="card custom-card">
              <?php
                if(isset($blog->image) && !empty($blog->image)){
              ?>
              <img src="{{url($blog->image)}}" class="card-img-top" alt="..." style="height: 300px;width: 100%;object-fit: cover;object-position: top;">
              <?php
                }else{
              ?>
              <img src="{{url('frontend/image/blog.jpg')}}" class="card-img-top" alt="..." style="height: 300px;width: 100%;object-fit: cover;object-position: top;">
              <?php
                }
              ?>
              <div class="card-body custom-card-body">
                <h5 class="card-title">{{$blog->title}}</h5>
                <div class="description">
                  <?php
                    //$pos=strpos($blog->description, ' ', 200);
                    //substr($blog->description,0,$pos ); 
                    //$description = str_limit($blog->description, $limit = 30, $end = '...');
                  ?>
                <p class="card-text">{!! $blog->description !!}</p>
                </div>
                <br>
                <a href="{{url('library',$blog->id)}}" class="font-weight-bold">Read More</a>
              </div>
            </div>
          </div>
          
          @endforeach
        
        <?php
          }else{
            echo "<h3 class='text-center'>No Library Found</h3>";
          }
        ?>

        </div>
      </div>
    </section>

@endsection
@section('scripts')
<script src="{{url('frontend/js/lightbox.min.js')}}"></script>
<script>
 jQuery(".description").text(function (i, text) {
  return text.length > 200 ? text.substr(0, text.lastIndexOf(' ', 150)) + '...' : text;
});
</script>
@endsection