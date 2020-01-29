@extends('layouts.app')

@section('content')

    @include('../errors.errors')
       
        
    <div>

        <a class="btn btn-info" href="/candidate/create">Add candidate</a> <br><br>

        <div>
        
            @if($candidates)

                @forelse ($candidates as $candidate)

                    @if($candidate->presidential)
                    
                        <div class="panel panel-default">

                            <div class="panel-heading">Presidential candidate</div>

                            <div class="panel-body">

                                <img src="{{$candidate->avatar}}" alt="">

                                {{ $candidate->name }}
                                
                            </div>

                        </div>

                    @endif

                @empty
                    
                    <h3>No Presidential Candidate added</h3>
                        
                @endforelse

            @else

            <h3 class="well title text-center">No Candidate(s) added</h3>

            @endif
    
        </div> 

    </div><br>

@endsection