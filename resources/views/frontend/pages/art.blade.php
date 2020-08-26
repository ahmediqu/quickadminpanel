@extends('frontend.layouts.master')
@section('page-title',' | News')
@section('style')
<style>
.description p {
text-align: justify !important;
}
.art-tab{
border: 1px solid;
}
</style>
@endsection
@section('page-content')
<section class="blog">
  <div class="container-fluid">
    
    <ul class="nav nav-pills mb-3 justify-content-center pt-3 pb-4">
      
      <div class="btn-group" role="group" aria-label="Basic example">
        @foreach($artscategorys as $acat)
        <a href="#" class="btn btn-default art-tab">{{$acat->category_name}}</a>
        @endforeach
      </div>
    </ul>
    
    <div class="row">
      
      <?php
      if(isset($arts) && !empty($arts)){
      ?>
      @foreach($arts as $data)
      <div class="col-md-3">
        <div class="card custom-card">
          <?php
          if(isset($data->image) && !empty($data->image)){
          ?>
          <img src="{{url($data->image)}}" class="card-img-top" alt="..." style="height: 200px;width: 100%;object-fit: cover;object-position: top;">
          <?php
          }else{
          ?>
          <img src="{{url('frontend/image/data.jpg')}}" class="card-img-top" alt="..." style="height: 200px;width: 100%;object-fit: cover;object-position: top;">
          <?php
          }
          ?>
          <div class="card-body custom-card-body">
            <h5 class="card-title">{{$data->title}}</h5>
            <div class="description">
              <?php
              //$pos=strpos($blog->description, ' ', 200);
              //substr($blog->description,0,$pos );
              //$description = str_limit($blog->description, $limit = 30, $end = '...');
              ?>
              <p class="card-text">{!! $data->description !!}</p>
            </div>
            <a href="{{url('art',$data->id)}}" class="font-weight-bold">Read More</a>
          </div>
        </div>
      </div>
      @endforeach
      
      <?php
      }else{
      echo "<h3 class='text-center'>No Blog Found</h3>";
      }
      ?>
    </div>
  </div>
</section>
@endsection
@section('scripts')
<script>
jQuery(".description").text(function (i, text) {
return text.length > 100 ? text.substr(0, text.lastIndexOf(' ', 150)) + '...' : text;
});
</script>
@endsection