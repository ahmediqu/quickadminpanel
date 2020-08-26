@extends('backend.layouts.master')
@section('page-title','Category')
@section('page-content')
<div class="content">
    <div class="container-fluid">
        <div class="container">
            <br><br>
            <div class="row justify-content-center">
                <div class="col-md-8">
                    <div class="card">
                        <div class="card-body">
                          <h3 class="text-center"> <?php if(isset($category)){ echo "Update ";}else{ ?>Create new <?php } ?>  Category </h3>
                          @include('backend.partials._message')
                           <form action="{{route('librarycategory.store')}}" method="post" enctype="multipart/form-data">
                            @csrf
                            <input type="hidden" value="<?php if(isset($category->id) && !empty($category->id)){echo $category->id;}?>" name="update_id">
                            <div class="form-group">
                              <label for="">Category Name</label>
                              <input type="text" class="form-control" name="category_name" value="<?php if(isset($category->category_name) && !empty($category->category_name)){echo $category->category_name;}?>">
                            </div>

                            <br>
                            <input type="submit" class="btn btn-success" value="Submit">

                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection