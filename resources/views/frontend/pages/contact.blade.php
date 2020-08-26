@extends('frontend.layouts.master')
@section('page-title',' | Contact')
@section('page-content')

<section class="blog">
  <section id="contact">
    <div class="container">
      <div class="well well-sm">
        <h3 class="text-center"><strong>Contact Us</strong></h3> <br><br>
      </div>
      
      <div class="row">
        <div class="col-md-7">
          <iframe src="https://www.google.com/maps/embed?pb=!1m10!1m8!1m3!1d3736489.7218514383!2d90.21589792292741!3d23.857125486636733!3m2!1i1024!2i768!4f13.1!5e0!3m2!1sen!2sbd!4v1506502314230" width="100%" height="315" frameborder="0" style="border:0" allowfullscreen></iframe>
        </div>
        <div class="col-md-5">
          <h4><strong>Get in Touch</strong></h4>
          @include('frontend.pages._message')
          <form method="post" action="{{url('contact')}}">
            @csrf
            <div class="form-group">
              <input type="text" class="form-control" name="name" placeholder="Name">
            </div>
            <div class="form-group">
              <input type="email" class="form-control" name="email"  placeholder="E-mail">
            </div>
            <div class="form-group">
              <input type="tel" class="form-control" name="tel"  placeholder="Phone">
            </div>
            <div class="form-group">
              <textarea class="form-control" name="message" rows="3" placeholder="Message"></textarea>
            </div>
            <button class="btn btn-info" type="submit" name="button">
            Submit
            </button>
          </form>
        </div>
      </div>
    </div>
  </section>
</section>

@endsection