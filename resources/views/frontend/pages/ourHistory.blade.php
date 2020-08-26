@extends('frontend.layouts.master')
@section('page-title',' | Our History')
@section('style')
<style>
  .our-history{
    background: #F6F6F6;
  }
</style>
@endsection
@section('page-content')
<section class="blog our-history py-5">
  <div class="container-fluid">
    <div class="row theme-shadow">
      
      <div class="col-md-12" style="margin: 0;padding: 0;">
        
        <div class="card custom-card">
          
          <div class="card-body">
            <div class="">
              <div class="row">
                <div class="col-md-6">
                  <h1 class="card-title display-3">History in the Making</h1>
                  <p class="card-text">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Nesciunt nulla corrupti deserunt harum nam animi voluptatem id numquam dolorum quaerat, necessitatibus odit illo nihil possimus, corporis. </p> <br>
                </div>
              </div>
              
              
            </div>
          </div>
        </div>
      </div>
    </div>
    

    <div class="row mt-5">
      
      @foreach($histories as $history)

      <div class="col-md-4">
        <div class="card custom-card p-3 hover-shadow">
          <img src="{{url($history->image)}}" class="card-img-top" alt="..." style="height: 300px;width: 100%;object-fit: cover;object-position: top;">
          <div class="card-body custom-card-body">
            <h5 class="card-title">{{$history->title}}
            </h5>
            <div class="description">
              <p class="card-text second-section-p">{!! $history->description !!}</p>
           </div>
          </div>
        </div>
      </div>

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