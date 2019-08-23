@extends('layouts.app')

@section('title', 'Admin')
    
@section('content')

    @include('includes.tab')

    @include('errors.errors')

         {{-- Existing Courses --}}

    <div>

            <h2 class="title" style="margin-left:15%">Add materials to existing course</h2>
        
        <form action="/admin" method="post" enctype="multipart/form-data">
            {{ csrf_field() }}

            <div>

                <input type="hidden" name="existing" value="1">
            
            </div>
            
            <div class="form-group">
                <label for="InputCourse">Courses</label>
                
                <select  required name="course" id="course" class="form-control" style="width:60%">
                    <option value="#">Select Course</option>
                        
                    @foreach ($courses as $existingCourse)
                        <option {{ (old('course') == $existingCourse->id) ? 'selected' : '' }} value="{{ $existingCourse->id }}">{{ $existingCourse->course }}</option>
                    @endforeach
                </select>
                    
            </div> <br>


            <div class="alert alert-info" style="width:60%">

                    <h5><span class="glyphicon glyphicon-info-sign"></span> Click on New Course to add new courses</h5>

            </div>

            <div>

                <h4 class="title">Course Materials</h4>

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

            <button class="btn btn-primary" type="submit">Add Materials</button>  

            <a href="/admin/create" class="btn btn-default">New Course</a>

        </form>

    </div>

@endsection