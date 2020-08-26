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
                            <a href="{{route('community.create')}}" class="btn btn-success">Create a new Community</a> <br> <br>
                            
                           <table class="table table-bordered">
                               <thead>
                                   <th>Sl.</th>
                                   <th>Title</th>
                                   <th>Catgory</th>
                                   <th>Position</th>
                                   <th>Description</th>
                                   <th>Image</th>
                                   <th>Action</th>
                               </thead>
                               <tbody>
                                <?php
                                // print_r($news);
                                 $blog1 = 0;

                                 if(isset($community) && !empty($community)){

                                ?>
                                @foreach($community as $data)
                                <?php $blog1++; ?>
                                   <tr>
                                       <td>{{$blog1}}</td>
                                       <td>{{$data->title}}</td>
                                       <td>
                                          <?php
                                          if(isset($data->category_id) && !empty($data->category_id)){
                                            $category = DB::table('blog_categories')->where('id',$data->category_id)->first();
                                          
                                          ?>
                                        {{$category->category_name}}

                                        <?php }else{ echo "N/A"; }?>
                                       </td>
                                       <td>{{$data->position}}</td>
                                       <td>{!! $data->description !!}</td>
                                       <td>
                                         <?php echo "<img src='".asset($data->image)."' style='height:50px;'>";?>
                                       </td>
                                       <td>
                                         <a href="{{route('community.edit',$data->id)}}" class="btn btn-info">Edit</a>
                                         <form action="{{route('community.destroy',$data->id)}}" method="post">
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
