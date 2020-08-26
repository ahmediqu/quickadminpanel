@extends('frontend.layouts.master')
@section('page-title',' | Contact')
@section('page-content')
<div class="page-content pb-5 pt-5 bg-black" style="background: #C5EBF4;">
  <div class="container">
    <div class="row justify-content-center">
      <div class="col-md-12">
        <h1 class="text-center" style="display: 4;" >Leave a testimonial or question</h1>
      </div>
    </div>
  </div>
</div>
<section class="blog">
  <section id="contact">
    <div class="container">
     
      
      <div class="row justify-content-center">
      
        <div class="col-md-8">
          <div class="card">
            <div class="card-body">
              <form class="">
                
                <div class="form-group mx-sm-3 mb-2">
                  <label for="inputPassword2" class="sr-only">Full Name</label>
                  <input type="text" class="form-control custom-form-control" id="inputPassword2" placeholder="Full Name">
                </div>
                <div class="form-group mx-sm-3 mb-2">
                  <label for="inputPassword2" class="sr-only">Company Name</label>
                  <input type="text" class="form-control custom-form-control" id="inputPassword2" placeholder="Company Name">
                </div>
                <div class="form-group mx-sm-3 mb-2">
                  <label for="inputPassword2" class="sr-only">Subject / Title</label>
                  <input type="text" class="form-control custom-form-control" id="inputPassword2" placeholder="Subject / Title">
                </div>
                <div class="form-group mx-sm-3 mb-2">
                  <label for="inputPassword2" class="sr-only">Message</label>
                  <textarea name="" id="" cols="5" rows="5" class="form-control" placeholder="Message"></textarea>
                </div>
                <div class="form-group mx-sm-3 mb-2">
                  <label for="inputPassword2" class="sr-only">Email</label>
                  <input type="email" class="form-control custom-form-control" id="inputPassword2" placeholder="Email">
                </div>

              <div class="form-group mx-sm-3 mb-2">
                <button type="submit" class="btn btn-outline-secondary form-control custom-btn-connect-sm  mb-2 mb-2 "> Subscribe </button>
              </div>
              </form>
            </div>
          </div>
        </div>
      </div>
    </div>
  </section>
</section>

@endsection