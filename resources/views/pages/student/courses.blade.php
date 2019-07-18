@extends('layouts.app')

@section('content')

@if ($course->count() > 0)
    
    <h1 class="title"><span class="glyphicon glyphicon-list-all"></span> $courses->count() Course(s) Available</h1>
@endif

    <h1 class="title">No Course Available</h1>
    
@endsection

<table class="table">
    
    <tr>

        @forelse ($courses as $course)

            <td>
                <a href="#"> {{ $course->course_code.' '. $course->course}} 
                        
                    {{ ($course->combined) ? '<span class="badge">combined</span>' : ''}}    
            
                </a>  
           
            </td>
            
        @empty
            
            <h1 class="title">No Course(s) vailable at the moment</h1>
            
        @endforelse

    </tr>

</table>
