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
                        	<div class="row">
                        		<?php
                        		print_r($editimage->other_image);
                        		
                        			// foreach($editimage as $data){
                        			// 	$images = explode(',',$data->other_image);
                        			// 	foreach($images as $img){
                        			// 		echo $img->other_image;
                        			// 	}
                        			// }
                        		?>
                        		<div class="col-md-4"></div>
                        	</div>
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