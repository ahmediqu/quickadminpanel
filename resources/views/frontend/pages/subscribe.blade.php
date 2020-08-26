@extends('frontend.layouts.master')
@section('page-title',' | Contact')
@section('page-content')

<section class="blog">
  <section id="contact">
    <div class="container">
      <div class="well well-sm">
        <h1 class="text-center"><strong>Subscribe</strong></h1> <br><br>
      </div>
      
      <div class="row justify-content-center">
      
        <div class="col-md-8">
          <div class="card">
            <div class="card-body">
              @if ($errors->any())
    <div class="alert alert-danger">
        <ul>
            @foreach ($errors->all() as $error)
                <li>{{ $error }}</li>
            @endforeach
        </ul>
    </div>
  @endif
              <form class="form-inline" method="post" action="{{url('subscribe')}}">
                @csrf
                <div class="form-group mx-sm-3 mb-2">
                  <label for="inputPassword2" class="sr-only">Full Name</label>
                  <input type="text" name="fullname" class="form-control custom-form-control" id="inputPassword2" placeholder="Full Name" required>
                </div>
                <div class="form-group mx-sm-3 mb-2">
                  <label for="inputPassword2" class="sr-only">Email</label>
                  <input type="email" name="email" class="form-control custom-form-control" id="inputPassword2" placeholder="Email" required>
                </div>
                <div class="form-group mx-sm-3">
                  <button type="submit" class="btn btn-outline-secondary custom-btn-connect-sm  mb-2"> Subscribe </button>
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