@extends('frontend.layouts.master')
@section('page-title',' | Event')
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
          @foreach($event as $data)
          @if(!isset($upcomingStarted) && $data->date > now())
         
          
          
          
          <div class="col-md-4">
            <div class="card custom-card">
              <img src="{{url('frontend/image/blog.jpg')}}" class="card-img-top" alt="...">
              <div class="card-body">
                <div class="event">
                  <h5 class="h4">{{$data->date}}</h5>
                  <h5 class="card-title">{{$data->title}}</h5>
                  <div class="description">
                  <p class="card-text">{!! $data->description !!}</p>
                  </div>
                  <br>
                  <a href="{{url('event',$data->id)}}" class="font-weight-bold">Event Details</a>
                </div>
              </div>
            </div>
          </div>
           @endif
          @endforeach
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