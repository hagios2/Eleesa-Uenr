@extends('layouts.app')

@section('content')

    @include('includes.tab')

    @include('errors.errors')
       
        
    @if ($materials->count() > 0)

        <div class="well">

            <h2 class="title">Materials for {{ $course_name }}</h2>
        
        </div>

        {{-- books --}}

        <div>

            @if ($book > 0)

                <div>

                    <h3 class="title"><span class="glyphicon glyphicon-book"></span> {{ $book }} Book(s) Available</h3>

                </div>

                <div>

                    <table class="table table-striped">
    
                        @foreach ($materials as $books)

                                {{--  remove redundant rows if book row is empty  --}}
    
                            @if($books->book != null)
                            
                                <tr>
                        
                                    <td>
    
                                        <a href="/material/{{ $books->id }}/{{'Book'}}/download"> {{ $books->book}} </a>
                                
                                    </td>
                                
                                </tr>

                            @endif
    
                        @endforeach        
                
                    </table>
    
                </div>
            
            @else 
             
                <div>

                    <h3 class="title">No Book Available</h3>

                </div>
    
            @endif    
    
           
    
        </div><br>

        {{-- slides --}}

        <div>

            @if ($slide > 0)
                    
                <div>
                    
                    <h3 class="title"><span class="glyphicon glyphicon-book"></span> {{ $slide}} Slide(s) Available</h3>

                </div>

                <div>

                    <table class="table table-striped">
    
                        @foreach ($materials as $slides)

                        {{--  remove redundant rows if slide row is empty  --}}
    
                            @if($slides->slide != null)
                               
                                <tr>
                        
                                    <td>
    
                                        <a href="/material/{{ $slides->id }}/{{'Slide'}}/download"> {{ $slides->slide}} </a>
                                
                                    </td>
                                
                                </tr>
                                
                            @endif

                        @endforeach    
                
                    </table>
    
                </div>

            @else

                <div>

                    <h3 class="title">No Slide Available</h3>

                </div>

            @endif    

           

        </div><br>


            {{-- Pasco --}}

        <div>

            @if ($pasco > 0)
                                    
                                
                <div>

                    <h3 class="title"><span class="glyphicon glyphicon-file"></span> {{ $pasco }} Pasco Available</h3>

                </div>


                <div>
    
                    <table class="table table-striped">
    
                        @foreach ($materials as $material)

                            {{--  remove redundant rows if Pasco row is empty  --}}
    
                            @if($material->pasco != null)

                                <tr>
                        
                                    <td>
                                        
                                        <a href="/material/{{ $material->id }}/{{'Pasco'}}/download"> {{ $material->pasco}} </a>
                                
                                    </td>
                                
                                </tr>
                                
                            @endif
                            
                        @endforeach        
                
                    </table>
    
                </div>

            @else

                <div>

                    <h3 class="title">No Pasco Available</h3> 

                </div>
        
    
            @endif    
    
        </div>
    
    @else
        
        <h1 class="title">No Material(s) Available</h1>

    @endif
    


    

@endsection