@extends('frontend.layouts.master')
@section('page-title',' | Shop Details')
@section('style')
<style>
  .description p {
    text-align: justify !important;
  }
</style>
@endsection
@section('page-content')

    <section class="blog">
      <div class="container">
      	<div class="row mb-5">
         <div class="col-md-6">
           <img src="{{ url($product->image)}}" alt="" style="width: 100%;">
         </div> 
         <div class="col-md-6">
           <div class="product-content">
             <h5>Name : {{$product->name}}</h5>
             <h5>Price : {{$product->price}}</h5>
             <p> <b>Details : </b> {!! $product->description !!}</p>
             <br><br>
             <div class="add-to-card">
               <button class="btn btn-info" type="submit">Add to Cart</button>
             </div>
           </div>
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