@extends('frontend.layouts.master')
@section('page-title',' | Mission')
@section('page-content')

    <section class="blog">
      <div class="container-fluid">
        <div class="row stories-row">
          <div class="col-md-6" style="padding: 0px;">
            <div class="card custom-card">
              <img src="{{url($mission->image)}}" class="card-img-top" alt="...">
              
            </div>
          </div>
          <div class="col-md-6">
            <div class="card custom-card">
              
              <div class="card-body">
                <div class="stores-content">
                  
                  <h5 class="card-title">{{$mission->title}}</h5>
                  <p class="card-text">{!! $mission->description !!}</p>
                  
                </div>
              </div>
            </div>
          </div>
        </div>
        
        
      </div>
    </section>

@endsection