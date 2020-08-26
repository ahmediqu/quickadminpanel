@extends('backend.layouts.master')
@section('page-title','Service')
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
                            <a href="{{route('product.create')}}" class="btn btn-success">Create a new Product</a> <br> <br>
                            
                           <table class="table table-bordered">
                               <thead>
                                   <th>Sl.</th>
                                   <th>Name</th>
                                   <th>Price</th>
                                   <th>Description </th>
                                   <th>Image</th>
                                   <th>Action</th>
                               </thead>
                               <tbody>
                                <?php $i=0; ?>
                               @foreach($product as $data)
                                <?php $i++; ?>
                               <tr>
                                 <td>{{$i}}</td>
                                 <td>{{$data->name}}</td>
                                 <td>{{$data->price}}</td>
                                 <td>{{$data->description}}</td>
                                 <td>
                                   <img src="{{url($data->image)}}" alt="" style="height: 100px;width: 100px;object-fit: contain;">
                                 </td>
                                 <td>
                                         <a href="{{route('product.edit',$data->id)}}" class="btn btn-info">Edit</a>
                                         <form action="{{route('product.destroy',$data->id)}}" method="post">
                                           @csrf
                                           @method('delete')
                                           <button class="btn btn-danger" type="submit" onClick="return deleteconfirm();">Del</button>
                                         </form>
                                        
                                       </td>
                               </tr>
                               @endforeach
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
