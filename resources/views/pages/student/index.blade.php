@extends('layouts.app')

@section('title', 'Eleesa-Uenr')
    
@section('content')

    <div class="container">
        
        @include('includes/tab')<br>

        @include('errors.errors')

        <form action="/" method="post">
            {{ csrf_field() }}
        
            <div class="form-group">
                <label for="Program">Program</label>
        
                <select class="form-control" name="program" id="program">
                    <option value="">Select Program</option>
                    <option {{ (old('program') == 1) ? 'selected' : '' }} value="1">Computer Engeering</option>
                    <option {{ (old('program') == 2) ? 'selected' : '' }} value="2">Electrical Engineering</option>
                </select>
        
            </div>
        
            <div class="form-group">
                <label for="Semester">Semester</label>
        
                <select class="form-control" name="semester" id="semester">
                    <option value="">Select Semester</option>
                    <option {{ (old('semester') == 1) ? 'selected' : '' }} value="First Semester">First Semester</option>
                    <option {{ (old('semester') == 2) ? 'selected' : '' }} value="Second Semester">Second Semester</option>

                </select>
        
            </div>
        
            <div class="form-group">
                <label for="Level">Level</label>
        
                <select  class="form-control" name="level" id="program">
                    <option value="">Select Level</option>
                    <option {{ (old('level') == 1) ? 'selected' : '' }} value="1">Level 100</option>
                    <option {{ (old('level') == 2) ? 'selected' : '' }} value="2">Level 200</option>
                    <option {{ (old('level') == 3) ? 'selected' : '' }} value="3">Level 300</option>
                    <option {{ (old('level') == 4) ? 'selected' : '' }} value="4">Level 400</option>
                </select>
        
            </div>
        
            <button type="submit" class="btn btn-primary">Submit</button>
                
            </form>    

        </div>    
@endsection