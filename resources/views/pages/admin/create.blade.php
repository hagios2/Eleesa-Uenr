@extends('layouts.app')

@section('title', 'Admin')

@section('content')
        
    @include('errors.errors')
    
    <div class="tab">

        {{-- <div class="col-3">
            <ul class="nav nav-pills nav-stacked">
                
                <li role="presentation" class="active"><a href="">Add Course </a></li>

                <li role="presentation"><a href="">Browse Courses </a></li>
            </ul>
        </div>
--}}
        <div class="tabcontent" id="create">

            <h1> Add a course details</h1>

            <form action="/admin" method="POST" enctype="multipart/form-data">
                
            {{ csrf_field() }}
                
            <div class="form-group" id="non_existing">
                    <label for="InputCourse">Program</label>
            
                    <select required name="program" id="program" class="form-control">
                        <option value="#">Select a Program</option>

                        @foreach ($programs as $prog)
                            <option {{ (old('program') == $prog->id) ? 'selected' : '' }} value="{{ $prog->program }}">{{ $prog->program }}</option>
                        @endforeach
                    </select>
                
                </div>

                <div class="form-group">
                    <label for="InputCombined">Specify Combined Course</label><br>

                    <input type="checkbox" name="combined" value="1" id="combined"> Combined

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

                <div class="form-group" id="course_code">
                    <label for="Course_code">Course</label>

                    <input class="form-control" type="text" name="course_code" placeholder="Enter course code" value="{{ old('course_code') }}">

                </div>

                <div class="form-group" id="t_course">
                    <label for="InputCourse">Course</label>

                    <input class="form-control" type="text" name="course" placeholder="Enter course name" value="{{ old('course') }}">

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


                <button class="tablinks" onclick="opencourse(event, 'existing')">Existing Course</button>

            </form>

        </div>

    

    {{-- Existing Courses --}}

    <div id="existing" class="tabcontent">
        
        <form action="/admin" method="post">
            {{ csrf_field() }}

            <div>

                <input type="hidden" name="existing" value="1">
            
            </div>
            
            <div class="form-group">
                <label for="InputCourse">Courses</label>
                
                <select  required name="course" id="course" class="form-control">
                    <option value="#">Select Course</option>
                        
                    @foreach ($courses as $existingCourse)
                        <option {{ (old('course') == $existingCourse->id) ? 'selected' : '' }} value="{{ $existingCourse->id }}">{{ $existingCourse->course }}</option>
                    @endforeach
                </select>
                    
            </div>

            <h3 class="title">Add Course Materials</h3>


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

            <button id="defaultOpen" class="tablinks" onclick="opencourse(event, 'create')">New Course</button>

        </form>

    </div>

</div>

@endsection

    <script>
      
    </script>

