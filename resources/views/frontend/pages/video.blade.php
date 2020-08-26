@extends('frontend.layouts.master')
@section('page-title',' | News')
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
        <h1 class="text-center" style="display: 4;" >Videos</h1>
      </div>
    </div>
  </div>
</div>
    <section class="blog">
      <div class="container-fluid">
        <div class="row">
          
          <?php 
            if(isset($videos) && !empty($videos)){
          ?>
          @foreach($videos as $data)
          <div class="col-md-6">
            <div class="card custom-card">
              <?php
                if(isset($data->video_link) && !empty($data->video_link)){
              ?>
              <div style="width: 100%;">
              {!! $data->video_link !!}
              </div>
              <?php
                }else{
              ?>
              <img src="{{url('frontend/image/data.jpg')}}" class="card-img-top" alt="..." style="height: 300px;width: 100%;object-fit: cover;object-position: top;">
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
               
                </div>
               
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