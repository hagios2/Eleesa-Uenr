@extends('layouts.app')

@section('content')

    @include('includes.tab')

    @include('errors.errors')

    @foreach ($materials as $m_course)

        <div class="well">

            <h2 class="title">Course Materials for {{ $m_course->course->course }}</h2>
        
        </div>
       
        
        @if ($materials->count() > 0)

         {{-- books --}}

         <div>

                @if ($book > 0)
                    
                    <h1 class="title"><span class="glyphicon glyphicon-book"></span> {{ $book }} Book(s) Available</h1>
        
                @endif    
        
                <div>
        
                    <table class="table table-striped">
        
                        @forelse ($materials as $material)
            
                            <tr>
                        
                                <td>
            
                                    <a href="/material/{{ $material->id }}/{{'Book'}}/download"> {{ $material->book}} </a>
                                
                                </td>
                                
                            </tr>
                                            
                        @empty
                                    
                            <h1 class="title">No Book Available</h1>
            
                        @endforelse        
                
                    </table>
        
                </div>
        
            </div><br>
    
            {{-- slides --}}
    
            <div>
    
                @if ($slide > 0)
                        
                    <h1 class="title"><span class="glyphicon glyphicon-book"></span> {{ $slide}} Slide(s) Available</h1>
    
                @endif    
    
                <div>
    
                    <table class="table table-striped">
    
                        @forelse ($materials as $slides)
    
                            <tr>
                        
                                <td>
    
                                    <a href="/material/{{ $slides->id }}/{{'Slide'}}/download"> {{ $slides->slide}} </a>
                                
                                </td>
                                
                            </tr>
                                            
                        @empty
                                    
                            <h1 class="title">No Slide Available</h1>
    
                        @endforelse        
                
                    </table>
    
                </div>
    
            </div><br>
    
    
             {{-- Pasco --}}
    
            <div>
    
                @if ($pasco > 0)
                            
                    <h1 class="title"><span class="glyphicon glyphicon-file"></span> {{ $pasco }} Pasco Available</h1>
        
                @endif    
        
                <div>
        
                    <table class="table">
    
                        @forelse ($materials as $pasco)
    
                            <tr>
                        
                                <td>
    
                                    <a href="/material/{{ $pasco->id }}/{{'Pasco'}}/download"> {{ $pasco->pasco}} </a>
                                
                                </td>
                                
                            </tr>
                                            
                        @empty
                                    
                            <h1 class="title">No Pasco Available</h1>
    
                        @endforelse        
                
                    </table>
    
                </div>
        
            </div>
        
        @else
            
            <h1 class="title">No Material(s) Available</h1>
    
        @endif
        
    @endforeach

      

@endsection