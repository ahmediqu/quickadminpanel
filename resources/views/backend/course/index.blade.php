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
                            <a href="{{route('course.create')}}" class="btn btn-success">Create a new Course</a> <br> <br>
                            
                           <table class="table table-bordered">
                               <thead>
                                   <th>Sl.</th>
                                   <th>Title</th>
                                   <th>Sub Title</th>
                                   <th>Fee</th>
                                   <th>Duration</th>
                                   <th>Description</th>
                                   <th>Image</th>
                                   <th>Action</th>
                               </thead>
                               <tbody>
                                <?php
                                 $course = 0;
                                 if(isset($courses) && !empty($courses)){
                                ?>
                                @foreach($courses as $data)
                                <?php $course++; ?>
                                   <tr>
                                       <td>{{$course}}</td>
                                       <td>{{$data->course_title}}</td>
                                       <td>{{$data->course_subtitle}}</td>
                                       <td>{{$data->course_fee}}</td>
                                       <td>{{$data->course_duration}}</td>
                                       <td>{!! $data->course_description !!}</td>
                                       <td>
                                         <?php echo "<img src='".asset($data->image)."' style='height:50px;'>";?>
                                       </td>
                                       <td>
                                         <a href="{{route('course.edit',$data->id)}}" class="btn btn-info">Edit</a>
                                         <form action="{{route('course.destroy',$data->id)}}" method="post">
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
