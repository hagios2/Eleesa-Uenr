@extends('layouts.app')

@section('content')

    @include('includes.tab')

    @if ($courses->count() > 0)
        
        <h1 class="title"><span class="glyphicon glyphicon-list"></span> {{ $courses->count() }} Course(s) Available</h1>

    @endif    

    <table class="table">

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

@endsection