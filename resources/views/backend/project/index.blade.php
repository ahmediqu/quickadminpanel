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
                            <a href="{{route('project.create')}}" class="btn btn-success">Create a new Project</a> <br> <br>
                            
                           <table class="table table-bordered">
                               <thead>
                                   <th>Sl.</th>
                                   <th>Title</th>
                                   <th>Project Link </th>
                                   <th>Project Status </th>
                                   <th>Client Name </th>
                                   <th>Description</th>
                                   <th>Image</th>
                                   <th>Action</th>
                               </thead>
                               <tbody>
                                <?php
                                 $p = 0;
                                 if(isset($project) && !empty($project)){
                                ?>
                                @foreach($project as $data)
                                <?php $p++; ?>
                                   <tr>
                                       <td>{{$p}}</td>
                                       <td>{{$data->title}}</td>
                                       <td>{{$data->project_link}}</td>
                                       <td>{{$data->project_status}}</td>
                                       <td>{{$data->client_name}}</td>
                                       <td>{!! $data->description !!}</td>
                                       <td>
                                         <?php echo "<img src='".asset($data->image_one)."' style='height:50px;'>";?>
                                         <?php echo "<img src='".asset($data->image_two)."' style='height:50px;'>";?>
                                       </td>
                                       <td>
                                         <a href="{{route('project.edit',$data->id)}}" class="btn btn-info">Edit</a>
                                         <form action="{{route('project.destroy',$data->id)}}" method="post">
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
