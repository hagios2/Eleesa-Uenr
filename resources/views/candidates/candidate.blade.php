@extends('layouts.app')

@section('content')

    @include('../errors.errors')
           
    <div>

        <a class="btn btn-info" href="/candidate/create">Add candidate</a> <br><br>

        @if($candidates)
        
            <div id="presidential">

                <div class="panel panel-default">

                    <div class="panel-heading">Presidential Candidate</div>

                    @forelse ($candidates->where('presidential', 1) as $candidate)

                        <div class="panel-body">

                            <img style="width:22rem; height:20rem;" src="{{$candidate->avatar}}" alt=""><br>

                            <p class="title">{{ $candidate->name }}</p>
                            
                        </div>

                    @empty

                        <h3>No Presidential Candidate(s) added</h3>

                    @endforelse


                </div>
                
                <br>

                <a id="next_to_sec" class="btn btn-primary pull-right">Next >></a>
       
            </div>

            <div id="secretary" style="display:none;">

                <div class="panel panel-default">

                    <div class="panel-heading"> Secretarial Candidate</div>

                    @forelse ($candidates->where('secretary', 1) as $candidate)

                        <div class="panel-body">

                            <img style="width:22rem; height:20rem;" src="{{$candidate->avatar}}" alt=""><br>

                            <p class="title">{{ $candidate->name }}</p>
                            
                        </div>

                    @empty

                        <h3>No General Secretary Candidate added</h3>
                            
                    @endforelse

                </div><br>

                <a id="prev_to_prez" class="btn btn-primary pull-left"><< Previous</a>
                <a id="next_to_mp" class="btn btn-primary pull-right">Next >></a>
            
            </div>

            <div id="mp" style="display:none;">

                <div class="panel panel-default">

                    <div class="panel-heading">Parliamentary Candidate(s)</div>

                    @forelse ($candidates->where('mp', 1) as $candidate)

                        <div class="panel-body">

                            <img style="width:22rem; height:20rem;" src="{{$candidate->avatar}}" alt=""><br>

                            <p class="title">{{ $candidate->name }}</p>
                            
                        </div>

                    @empty

                    <h3>No Parliamentary Candidate(s) added</h3>
                            
                    @endforelse

                </div><br>

                <a id="prev_to_sec" class="btn btn-primary pull-left"><< Previous</a>
            
            </div>

        @else

        <h3 class="well title text-center">No Candidate(s) added</h3>

        @endif

    </div><br>
        
    @section('extra-js')

        $('a#next_to_sec').click(function(){

            $('div#presidential').hide();

            $('div#secretary').show();

        });
        
        
        $('a#next_to_mp').click(function(){

            $('div#secretary').hide();

            $('div#mp').show();

        });
        
        $('a#prev_to_prez').click(function(){

            $('div#secretary').hide();

            $('div#presidential').show();

        });  


        $('a#prev_to_sec').click(function(){

            $('div#secretary').show();

            $('div#mp').hide();

        });  

    @endsection 

@endsection