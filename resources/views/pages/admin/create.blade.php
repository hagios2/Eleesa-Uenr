@extends('layouts.app')

@section('title', 'Admin')

@section('content')
        
    @include('includes.tab')
    
    @include('errors.errors')
    
    <div>

        {{-- <div class="col-3">
            <ul class="nav nav-pills nav-stacked">
                
                <li role="presentation" class="active"><a href="">Add Course </a></li>

                <li role="presentation"><a href="">Browse Courses </a></li>
            </ul>
        </div>
--}}
        <div>

            <h3 style="margin-left:15%"> Add a course details</h3>

            <form action="/admin" method="POST" enctype="multipart/form-data">
                
            {{ csrf_field() }}
                
            <div class="form-group" id="non_existing">
                    <label for="InputCourse">Program</label>
            
                    <select required name="program" id="program" class="form-control" style="width:70%">
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
                    
                    <select  required name="semester" id="semester" class="form-control" style="width:70%">
                        <option value="#">Select Semester</option>
                            
                        @foreach ($semesters as $semester)
                            <option {{ (old('semester') == $semester->id) ? 'selected' : '' }} value="{{ $semester->id }}">{{ $semester->sem }}</option>
                        @endforeach
                    </select>
                        
                </div>

                <div class="alert alert-info" style="width:70%">

                        <h5><span class="glyphicon glyphicon-info-sign"></span> Click on Existing Course to add materials to existing courses</h5>

                </div>


                <div class="form-group" id="course_code">

                    <label for="Course_code">Course Code</label>
        
                    <input class="form-control" type="text" name="course_code" placeholder="Enter course code" value="{{ old('course_code') }}" style="width:70%">
        
                </div>


               
                <div class="form-group" id="t_course">
                    <label for="InputCourse">Course</label>

                    <input class="form-control" type="text" name="course" placeholder="Enter course name" value="{{ old('course') }}" style="width:70%">

                </div>


            <h4 class="title">Add Course Materials</h4>

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


                <a href="/existing" class="btn btn-default">Existing Course</a>

            </form>

        </div>

    </div>

@endsection


