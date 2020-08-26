@extends('frontend.layouts.master')
@section('page-title',' | Blog')
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
            if(isset($blogs) && !empty($blogs)){
          ?>
          @foreach($blogs as $blog)
          <div class="col-md-4">
            <div class="card custom-card">
              <?php
                if(isset($blog->image) && !empty($blog->image)){
              ?>
              <a href="{{url('blog',$blog->id)}}" class="font-weight-bold">
              <img src="{{url($blog->image)}}" class="card-img-top" alt="..." style="height: 300px;width: 100%;object-fit: cover;object-position: top;">
            </a>
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
                <a href="{{url('blog',$blog->id)}}" class="font-weight-bold">Read More</a>
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
  return text.length > 200 ? text.substr(0, text.lastIndexOf(' ', 150)) + '...' : text;
});
</script>
@endsection