@extends('backend.layouts.master')
@section('page-title','Blog')
@section('page-content')
<div class="content">
    <div class="container-fluid">
        <div class="container">
            <br><br>
            <div class="row justify-content-center">
                <div class="col-md-12">
                    <div class="card">
                        <div class="card-body">
                          @include('backend.partials._message')
                            <a href="{{route('blogcategory.create')}}" class="btn btn-success">Create a new Blog</a> <br> <br>
                            
                           <table class="table table-bordered">
                               <thead>
                                   <th>Sl.</th>
                                   <th>Category Name</th>
                                   <th>Action</th>
                               </thead>
                               <tbody>
                                <?php
                                // print_r($news);
                                 $blog1 = 0;

                                 if(isset($category) && !empty($category)){

                                ?>
                                @foreach($category as $data)
                                <?php $blog1++; ?>
                                   <tr>
                                       <td>{{$blog1}}</td>
                                       <td>{{$data->category_name}}</td>
                                       <td>
                                         <a href="{{route('blogcategory.edit',$data->id)}}" class="btn btn-info">Edit</a>
                                         <form action="{{route('blogcategory.destroy',$data->id)}}" method="post">
                                           @csrf
                                           @method('delete')
                                           <button class="btn btn-danger" type="submit" onClick="return deleteconfirm();">Del</button>
                                         </form>
                                        
                                       </td>
                                   </tr>
                                @endforeach
                                <?php } ?>
                               </tbody>
                           </table>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<script>
  function deleteconfirm()
  {
    deletedata = confirm("Are you sure to delete permanently?");
    if (deletedata != true)
    {
      return false;
    }
  }
</script>
@endsection
