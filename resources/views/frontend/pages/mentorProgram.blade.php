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
        <h1 class="text-center" style="display: 4;" >Mentor Program</h1>
      </div>
    </div>
  </div>
</div>
    <section class="blog">
      <div class="container-fluid">
      	
        <div class="row mb-5 justify-content-center">
          <div class="col-md-6" style="padding: 0px;">
            <div class="">
              <?php
              	if(isset($blogs->image) && !empty($blogs->image)){
              ?>
				<img src="{{ url($blogs->image)}}" class="card-img-top" alt="...">
              <?php }else{ ?>
              <img src="{{ url('frontend/image/blog.jpg')}}" class="card-img-top" alt="...">
              <?php } ?>
              
            </div>
          </div>
          <div class="col-md-12 mt-3">
            <div class="">
              
              <div class="">
                <div class="">
                  
                  
                  <div class="">
                  <p class="card-text">
                    Lorem ipsum dolor sit amet, consectetur adipisicing elit. Perferendis numquam id est! Harum dolorum beatae sint consectetur laborum soluta, odio doloribus rerum quidem, mollitia fuga nulla cum sed quasi impedit amet aspernatur repudiandae magni adipisci iusto dicta labore doloremque omnis, aperiam accusantium. Numquam rerum ipsum ut impedit explicabo, consequatur eligendi, quasi perspiciatis magni eveniet odio eum inventore fugit commodi recusandae nesciunt cum assumenda repudiandae autem unde, nisi cupiditate itaque totam. Hic vel nisi dolorum tenetur, ratione, laboriosam, repellendus omnis sint sed iure suscipit velit libero officiis corporis. Minima at, et suscipit voluptate veritatis velit excepturi praesentium atque illum tempora delectus.
                  </p>
                  </div>
                  
                </div>
              </div>
            </div>
          </div>

        </div>

        <div class="row pt-5 justify-content-center">
          <div class="col-md-6 text-center">
            <a href="#" class="btn btn-outline-secondary custom-btn-connect-sm  mb-2">Apply</a>
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