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
                           
                            
                           <table class="table table-bordered">
                               <thead>
                                   <th>Sl.</th>
                                   <th>Name</th>
                                   <th>Email</th>
                               </thead>
                               <tbody>
                                <?php
                                // print_r($news);
                                 $blog1 = 0;

                                 if(isset($subs) && !empty($subs)){

                                ?>
                                @foreach($subs as $data)
                                <?php $blog1++; ?>
                                   <tr>
                                       <td>{{$blog1}}</td>
                                       <td>{{$data->fullname}}</td>
                                       <td>{{$data->email}}</td>
                                       
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
