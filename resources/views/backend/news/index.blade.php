@extends('backend.layouts.master')
@section('page-title','News')
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
                            <a href="{{route('news.create')}}" class="btn btn-success">Create a new News</a> <br> <br>
                            
                           <table class="table table-bordered">
                               <thead>
                                   <th>Sl.</th>
                                   <th>Title</th>
                                   <th>Position</th>
                                   <th>Description</th>
                                   <th>Image</th>
                                   <th>Action</th>
                               </thead>
                               <tbody>
                                <?php
                                // print_r($news);
                                 $news1 = 0;

                                 if(isset($news) && !empty($news)){

                                ?>
                                @foreach($news as $data)
                                <?php $news1++; ?>
                                   <tr>
                                       <td>{{$news1}}</td>
                                       <td>{{$data->title}}</td>
                                       <td>{{$data->position}}</td>
                                       <td>
                                        <div class="description">
                                        {!! $data->description !!}
                                        </div>
                                      </td>
                                       <td>
                                         <?php echo "<img src='".asset($data->image)."' style='height:50px;'>";?>
                                       </td>
                                       <td>
                                        <a href="{{url('admin/newsimages',$data->id)}}" class="btn btn-info m-1">Add Or Update Image</a>

                                         <a href="{{route('news.edit',$data->id)}}" class="btn btn-info m-1">Edit</a>
                                         <form action="{{route('news.destroy',$data->id)}}" method="post">
                                           @csrf
                                           @method('delete')
                                           <button class="btn btn-danger m-1" type="submit" onClick="return deleteconfirm();">Del</button>
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
@section('backend-scripts')
<script>
 jQuery(".description").text(function (i, text) {
  return text.length > 100 ? text.substr(0, text.lastIndexOf(' ', 100)) + '...' : text;
});
</script>
@endsection