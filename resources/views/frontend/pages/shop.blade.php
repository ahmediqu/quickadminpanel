@extends('frontend.layouts.master')
@section('page-title',' | Shop')
@section('page-content')


<section class="shop-banner">
  <div class="container">
    <div class="row">
      <div class="col-md-12">
        <div class="shop-banner-content text-center">
          <img src="{{url('frontend/image/logo.png')}}" alt="" style="height: 150px;">
          <h1>Store</h1>
        </div>
      </div>
    </div>
  </div>
</section>
    <section class="blog">
      <div class="container-fluid">
        <div class="row justify-content-center">
          <div class="col-md-10">
            <div class="row">
              
              @foreach($products as $proudct)
              <div class="col-md-4 mb-4">
                  <div class="single-shop">
                    <img src="{{url($proudct->image)}}" alt="Avatar" class="image" style="width: 100%;">
                    <div class="overlay">
                    <a href="{{url('shop',$proudct->id)}}" class="icon" title="User Profile" style="text-decoration: none;color: #fff;">
                      <span style="display: block;">{{$proudct->name}}</span>
                      <span> $ {{$proudct->price}}</span>
                    </a>
                    </div>
                  </div>
              </div>
             @endforeach
              
            </div>
            
          </div>
        </div>
      </div>
    </div>
  </section>

@endsection