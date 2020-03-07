@extends('layouts.app')


@section('extra-css')

<style>
/* The switch - the box around the slider */
.switch {
  position: relative;
  display: inline-block;
  width: 60px;
  height: 34px;
}

/* Hide default HTML checkbox */
.switch input {
  opacity: 0;
  width: 0;
  height: 0;
}

/* The slider */
.slider {
  position: absolute;
  cursor: pointer;
  top: 0;
  left: 0;
  right: 0;
  bottom: 0;
  background-color: #ccc;
  -webkit-transition: .4s;
  transition: .4s;
}

.slider:before {
  position: absolute;
  content: "";
  height: 26px;
  width: 26px;
  left: 4px;
  bottom: 4px;
  background-color: white;
  -webkit-transition: .4s;
  transition: .4s;
}

input:checked + .slider {
  background-color: #2196F3;
}

input:focus + .slider {
  box-shadow: 0 0 1px #2196F3;
}

input:checked + .slider:before {
  -webkit-transform: translateX(26px);
  -ms-transform: translateX(26px);
  transform: translateX(26px);
}

/* Rounded sliders */
.slider.round {
  border-radius: 34px;
}

.slider.round:before {
  border-radius: 50%;
} 

</style>

@endsection

@section('content')

<div class="container">
    <ol class="breadcrumb">
      <li class="active">Dashboard</li>
    </ol> 
  </div>



    @include('../errors.errors')


    <div class="pull-right">

        <form action="/start-election" method="post">
      
            {{ csrf_field() }}
            {{ method_field('PATCH') }}
       
            <!-- Rounded switch -->
            <strong>Election Switch:</strong>  &emsp; <label class="switch">
                <input type="checkbox" name="toggle" {{ $toggleApp->toggle ? 'checked' :'' }} onchange="this.form.submit();">
                <span class="slider round"></span>
        
            </label>
  
        </form>
      
      </div><br><br>
           
    <div>

        <a class="btn btn-info" href="/candidate/create">Add candidate</a> <br><br>

        @if($candidates)
        
            <div id="presidential">

                <div class="panel panel-default">

                    <div class="panel-heading">Presidential Candidate</div>

                </div> <br>

                    @forelse ($candidates->where('presidential', 1) as $candidate)

                        <div class="col-xs-12 col-md-10 col-lg-10 col-sm-12">

                            <div class="row">
                                <div class="col-sm-6 col-xs-6  col-md-4 col-lg-4">
                                    <img style="max-height:200px; max-width:100%; margin-bottom:2rem;" src="{{$candidate->avatar}}" alt=""> <br>
                                   
                                <p class="title"> <strong>{{ $candidate->name }}</strong> <a href="/candidate/{{$candidate->id}}/edit" class="btn btn-outline-info">Edit info</a>
                                </p> 
                                </div>
                                <div class="col-sm-5 col-lg-6 col-md-6 col-xs-5">

                                    <div style="padding:1rem;">

                                        @if($candidate->bio)

                                            <i class="fa fa-quote-left" aria-hidden="true"></i>
                                            <p>{{$candidate->bio}}</p>
                                            <i class="fa fa-quote-right" aria-hidden="true"></i>

                                        @endif
                                    
                                    </div>
                                       
                                </div>
                            </div>
    
                        </div> <hr style="width:70%;">
                     
                    @empty

                        <br>

                        <div class="lead text-center">

                            <h5 >No Presidential Candidate(s) added</h5>
                            
                        </div>

                    @endforelse

                    <br>

                    <a id="next_to_sec" class="btn btn-primary pull-right">Next >></a>

                </div> 
       

            <div id="secretary" style="display:none;">

                <div class="panel panel-default">

                    <div class="panel-heading"> Secretarial Candidate</div>

                </div>

                    @forelse ($candidates->where('secretary', 1) as $candidate)

                        <div class="col-xs-12 col-md-10 col-lg-10 col-sm-12">

                            <div class="row">
                                <div class="col-sm-6 col-xs-6  col-md-4 col-lg-4">
                                    <img style="max-height:200px; max-width:100%; margin-bottom:2rem;" src="{{$candidate->avatar}}" alt=""> <br>
                                
                                    <p class="title"> <strong>{{ $candidate->name }}</strong><a href="/candidate/{{$candidate->id}}/edit" class="btn btn-outline-info">Edit info</a></p>
                                    
                                </div>
                                <div class="col-sm-5 col-lg-6 col-md-6 col-xs-5">

                                    <div style="padding:1rem;">

                                        @if($candidate->bio)

                                            <i class="fa fa-quote-left" aria-hidden="true"></i>
                                            <p>{{$candidate->bio}}</p>
                                            <i class="fa fa-quote-right" aria-hidden="true"></i>

                                        @endif
                                        
                                    </div>
                                    
                                </div>
                            </div>

                        </div> <hr style="width:70%;">

                    @empty

                    <br>

                    <div class="lead text-center">

                        <h5 >No Secretarial Candidate(s) added</h5>
                        
                    </div>
                            
                    @endforelse

                <br>

                <a id="prev_to_prez" class="btn btn-primary pull-left"><< Previous</a>
                <a id="next_to_mp" class="btn btn-primary pull-right">Next >></a>
            
            </div>

            <div id="mp" style="display:none;">

                <div class="panel panel-default">

                    <div class="panel-heading">Parliamentary Candidate(s)</div>

                </div>

                    @forelse ($candidates->where('mp', 1) as $candidate)

                    <div class="col-xs-12 col-md-10 col-lg-10 col-sm-12">

                        <div class="row">
                            <div class="col-sm-6 col-xs-6  col-md-4 col-lg-4">
                                <img style="max-height:200px; max-width:100%; margin-bottom:2rem;" src="{{$candidate->avatar}}" alt=""> <br>
                               
                                <p class="title"> <strong>{{ $candidate->name }}</strong><a href="/candidate/{{$candidate->id}}/edit" class="btn btn-outline-info">Edit info</a></p>
                                
                            </div>
                            <div class="col-sm-5 col-lg-6 col-md-6 col-xs-5">

                                <div style="padding:1rem;">
                                   
                                    @if($candidate->bio)

                                        <i class="fa fa-quote-left" aria-hidden="true"></i>
                                        <p>{{$candidate->bio}}</p>
                                        <i class="fa fa-quote-right" aria-hidden="true"></i>

                                    @endif    

                                </div>
                                   
                            </div>
                        </div>

                    </div> <hr style="width:70%;">

                    @empty

                    <br>

                    <div class="lead text-center">

                        <h5 >No Parliamentary Candidate(s) added</h5>
                        
                    </div>
                            
                    @endforelse

                <br>

                <a id="prev_to_sec" class="btn btn-primary pull-left"><< Previous</a>
            
            </div>

        @else

        <h3 class="well title text-center">No Candidate(s) added</h3>

        @endif

    </div><br>
        
    @section('extra-js')

        $('a#next_to_sec').click(function(){

            toggleCandidates('div#secretary', 'div#presidential');

        });
        
        
        $('a#next_to_mp').click(function(){

            toggleCandidates('div#mp', 'div#secretary');

        });
        
        $('a#prev_to_prez').click(function(){

            toggleCandidates('div#presidential', 'div#secretary');

        });  


        $('a#prev_to_sec').click(function(){

            toggleCandidates('div#secretary', 'div#mp');

        });  


        function toggleCandidates(showDiv, hideDiv)
        {
            $(showDiv).show();

            $(hideDiv).hide();
        }

    @endsection 

@endsection