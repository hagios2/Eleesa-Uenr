@extends('layouts.app')

@section('content')

    @include('includes.tab')

    <div class="well">
       
        <h3 class="title">Cant find Course?</h3>

        <form action="/course" method="GET">

            <div class="row">

                <div class="input-group" style="width:40%;">
        
                    <input type="text" class="form-control" name="search" id="search" placeholder="Enter Course or Course code" value="{{ old('search') }}">
    
                    <span class="input-group-btn">
    
                        <button class="btn btn-primary" type="submit"><span class="glyphicon glyphicon-search"></span> Search</button>
                    
                    </span>
        
                </div>
        
            </div>
            
        </form>

    </div>

    <div>


    @if ($courses->count() > 0)
        
        <h1 class="title"><span class="glyphicon glyphicon-list"></span> {{ $courses->count() }} Course(s) Available</h1>

    @endif    

    <table class="table table-striped">

        @forelse ($courses as $course)

            <tr>
                <td>
                    <a href="/{{ $course->id }}/materials"> {{ $course->course_code.' '. $course->course}} 
                            
                        @if ($course->combined == 1)
                            
                            <span class="badge">combined</span>
                        
                        @endif()     
                
                    </a>  
            
                </td>
            
            </tr>
                        
        @empty
                
            <h1 class="title">No Course(s) Available at the moment</h1>

        @endforelse   

    </table>

    </div>

@endsection