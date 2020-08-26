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
 
    <section class="blog">
      <div class="container-fluid">
        <div class="row">
          
          <?php 
            if(isset($news) && !empty($news)){
          ?>
          @foreach($news as $data)
          <div class="col-md-4">
            <div class="card custom-card">
              <?php
                if(isset($data->image) && !empty($data->image)){
              ?>
               <a href="{{url('news',$data->id)}}" class="font-weight-bold">
              <img src="{{url($data->image)}}" class="card-img-top" alt="..." style="height: 300px;width: 100%;object-fit: cover;object-position: top;">
            </a>
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
                <p class="card-text">{!! $data->description !!}</p>
                </div>
                <a href="{{url('news',$data->id)}}" class="font-weight-bold">Read More</a>
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