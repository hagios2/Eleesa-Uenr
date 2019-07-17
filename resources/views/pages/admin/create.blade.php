@extends('layouts.app')

@section('title', 'Admin')

@section('content')
        
    @include('errors.errors')
    <div class="row">

        {{-- <div class="col-3">
            <ul class="nav nav-pills nav-stacked">
                
                <li role="presentation" class="active"><a href="">Add Course </a></li>

                <li role="presentation"><a href="">Browse Courses </a></li>
            </ul>
        </div>
--}}
        <div class="col-5">

            <h1> Add a course details</h1>

            <form action="/admin" method="POST" enctype="multipart/form-data">
                
            <input type="hidden" name="_token" value="<?php echo csrf_token(); ?>">
                
            <div class="form-group">
                    <label for="InputCourse">Program</label>
            
                    <select required name="program" id="program" class="form-control">
                        <option value="#">Select a Program</option>

                        @foreach ($programs as $prog)
                            <option {{ (old('program') == $prog->id) ? 'selected' : '' }} value="{{ $prog->id }}">{{ $prog->program }}</option>
                        @endforeach
                    </select>
                
                </div>

                <div class="form-group">
                    <label for="InputCombined">Specify Combined Course</label><br>

                    <input type="checkbox" name="combined" id="combined"> Combined

                </div>


                <div class="form-group">
                    <label for="InputCourse">Semester</label>
                    
                    <select  required name="semester" id="semester" class="form-control">
                        <option value="#">Select Semester</option>
                            
                        @foreach ($semesters as $semester)
                            <option {{ (old('semester') == $semester->id) ? 'selected' : '' }} value="{{ $semester->id }}">{{ $semester->sem }}</option>
                        @endforeach
                    </select>
                        
                </div>
{{-- 
                <div class="form-group" id="s_course">
                    <label for="InputCourse">
                        Course
                    </label>

                    <select name="program" id="program" class="form-control">
                        <option value="#">Select Course</option>
                    </select>

                    <div class="form-group">
                        <label for="Prompt"><h3>Cant find a Course?</h3></label>
                    </div>
                </div> --}}

                <div class="form-group" id="course_code">
                    <label for="Course_code">Course</label>

                    <input class="form-control" type="text" name="course_code" placeholder="Enter course code" value="{{ old('course_code') }}">

                </div>

                <div class="form-group" id="t_course">
                    <label for="InputCourse">Course</label>

                    <input class="form-control" type="text" name="course" placeholder="Enter course code and name" value="{{ old('course') }}">

            {{--           <div>
                        <label for="Prompt"><h3>Add resource(s) to existing Course?</h3></label>

                        <a class="btn btn-primary" onclick="fieldSwitcher(t_course)">Switch</a>
                    </div> --}}
                </div>

                

                <div class="form-group">
                        <label for="inputCourseBook">
                            Upload Book
                        </label>

                        <input type="file" name="Book" id="Book" class="form-control-file" value="{{ old('Book') }}">
                </div>
                

                <div class="form-group">
                        <label for="inputCourseSlide">
                            Upload Slide
                        </label>

                        <input type="file" name="Slide" value="{{ old('Slide') }}" id="Slide" class="form-control-file">
                    </div>


                <div class="form-group">
                    <label for="inputCoursePasco">
                        Upload Pasco
                    </label>

                    <input type="file" name="Pasco" value="{{ old('Pasco') }}" id="Pasco" class="form-control-file">
                </div>

                <button class="btn btn-primary" type="submit">Add Course</button>

            </form>

        </div>
    </div>

@endsection

{{-- @section('extra_js')
    <script>
        function fieldSwitcher(id)
        {
            switch(id)
            {
                case "t_course":
                    document.getElementById(id).style = display:none;
            }
        }

        
    </script>

@endsection
 --}}