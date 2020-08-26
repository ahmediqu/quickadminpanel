@extends('frontend.layouts.master')
@section('page-title',' | Blog')
@section('style')
<link rel="stylesheet" href="{{url('frontend/css/lightbox.min.css')}}">
<style>
  .description p {
    text-align: justify !important;
  }
</style> 
@endsection
@section('page-content')
{{--  <div class="page-content pb-5 pt-5 bg-black" style="background: #C5EBF4;">
  <div class="container">
    <div class="row justify-content-center">
      <div class="col-md-12">
        <h1 class="text-center" style="display: 4;" >Community</h1>
      </div>
    </div>
  </div>
</div> --}}


<section class="gallery-section pt-5 pb-5">
	<div class="container">
		<div class="row mb-4">
      @foreach($gallery as $data)
			<div class="col-md-4">
            <div class="card custom-card">
            

              <a class="example-image-link" href="{{$data->image}}" data-lightbox="example-set" data-title="Click the right half of the image to move forward.">
                <img class="example-image" src="{{$data->image}}" alt=""/ style="height: 300px;width: 100%;object-fit: cover;object-position: top;">
              </a>
              
            </div>
        </div>
        @endforeach
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