@extends('backend.layouts.master')
@section('page-title','Course')
@section('page-content')
<div class="content">
    <div class="container-fluid">
        <div class="container">
            <br><br>
            <div class="row justify-content-center">
                <div class="col-md-8">
                    <div class="card">
                        <div class="card-body">
                          <h3 class="text-center"> <?php if(isset($course)){ echo "Update ";}else{ ?>Create new <?php } ?>  Course </h3>
                          @include('backend.partials._message')
                           <form action="{{route('course.store')}}" method="post" enctype="multipart/form-data">
                            @csrf
                            <input type="hidden" value="<?php if(isset($course->id) && !empty($course->id)){echo $course->id;}?>" name="update_id">
                            <div class="form-group">
                              <label for="">Course Title</label>
                              <input type="text" class="form-control" name="course_title" value="<?php if(isset($course->course_title) && !empty($course->course_title)){echo $course->course_title;}?>">
                            </div>

                            <div class="form-group">
                              <label for="">Course Sub Title</label>
                              <input type="text" class="form-control" name="course_subtitle" value="<?php if(isset($course->course_subtitle) && !empty($course->course_subtitle)){echo $course->course_subtitle;}?>">
                            </div>

                            <div class="form-group">
                              <label for="">Course Fee</label>
                              <input type="text" class="form-control" name="course_fee" value="<?php if(isset($course->course_fee) && !empty($course->course_fee)){echo $course->course_fee;}?>">
                            </div>

                            <div class="form-group">
                              <label for="">Course Duration</label>
                              <input type="text" class="form-control" name="course_duration" value="<?php if(isset($course->course_duration) && !empty($course->course_duration)){echo $course->course_duration;}?>">
                            </div>

                            <div class="form-group">
                              <label for="">Course Description</label>
                              <textarea name="course_description" id="" class="form-control summernote" cols="5" rows="10"><?php if(isset($course->course_duration) && !empty($course->course_duration)){ ?> {!! $course->course_description !!} <?php } ?></textarea>
                            </div>



                            <div class="form-group">
                              <label for="">Course Image</label>
                              <input type="file" class="form-control" name="image">
                              <?php if(isset($course->image) && !empty($course->image)){echo "<img src='".asset($course->image)."' style='height: 50px;' />";}?>
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