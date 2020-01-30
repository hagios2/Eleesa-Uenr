@extends('layouts.app')

@section('content')

    <div class="container">

        @if ($toggleApp->toggle)

            @include('../errors.errors')

            @if(auth()->user()->vote)

                <div id="presidential" class="jumbotron pull-center" style="width:60%; height:40rem;">

                    <canvas id="presidentChart" class="offset-md-2" ></canvas>

                </div> 
                
                <div id="gen_sec" class="jumbotron pull-center" style="width:60%; height:40rem; display:none">

                    <canvas id="gen_sec_Chart" class="offset-md-2" ></canvas>

                </div> 

                <div id="mp" class="jumbotron pull-center" style="width:60%; height:40rem; display:none">

                    <canvas id="mpChart" class="offset-md-2" ></canvas>

                </div> 

                <script src="{{ asset('js/Chart.min.js')}}"></script>

                <script>
                
                    var ctx = document.getElementById('presidentChart');
                    var myChart = new Chart(ctx, {
                    type: 'doughnut',
                    data: {
                        labels: [@foreach($candidates->where('presidential', 1) as $candidate) "{{ $candidate->name }}", @endforeach],
                        datasets: [{
                            label: '# of Votes',
                            data: [

                                    @foreach($candidates->where('presidential', 1) as $candidate )

                                        {{ $attributes->where('president_id', $candidate->id)->count()}},

                                    @endforeach                              
                                ],

                        backgroundColor: [
                            'rgba(255, 99, 132, 0.2)',
                            'rgba(54, 162, 235, 0.2)',
                            'rgba(255, 206, 86, 0.2)',

                        ],
                        borderColor: [
                            'rgba(255, 99, 132, 1)',
                            'rgba(54, 162, 235, 1)',
                            'rgba(255, 206, 86, 1)',

                        ],
                            borderWidth: 1
                        }]
                    },
                    options: {

                        title: {
                            display: true,
                            text: 'Elections 2020',
                            postion: 'right'
                        },
                        legend:{
                            display:true,
                            postion: 'left'
                        },
                        tooltips:{
                            mode: 'point'
                        },

                    }
                    });


                    var ctx = document.getElementById('gen_sec_Chart');
                    var myChart = new Chart(ctx, {
                    type: 'doughnut',
                    data: {
                        labels: [@foreach($candidates->where('secretary', 1) as $candidate) "{{ $candidate->name }}", @endforeach],
                        datasets: [{
                            label: '# of Votes',
                            data: [

                                    @foreach($candidates->where('secretary', 1) as $candidate )

                                        {{ $attributes->where('secretary_id', $candidate->id)->count()}},

                                    @endforeach                              
                                ],

                        backgroundColor: [
                            'rgba(255, 99, 132, 0.2)',
                            'rgba(54, 162, 235, 0.2)',
                            'rgba(255, 206, 86, 0.2)',

                        ],
                        borderColor: [
                            'rgba(255, 99, 132, 1)',
                            'rgba(54, 162, 235, 1)',
                            'rgba(255, 206, 86, 1)',

                        ],
                            borderWidth: 1
                        }]
                    },
                    options: {

                        title: {
                            display: true,
                            text: 'Elections 2020',
                            postion: 'right'
                        },
                        legend:{
                            display:true,
                            postion: 'left'
                        },
                        tooltips:{
                            mode: 'point'
                        },

                    }
                    });



                    var ctx = document.getElementById('mpChart');
                    var myChart = new Chart(ctx, {
                    type: 'doughnut',
                    data: {
                        labels: [@foreach($candidates->where('mp', 1) as $candidate) "{{ $candidate->name }}", @endforeach],
                        datasets: [{
                            label: '# of Votes',
                            data: [

                                    @foreach($candidates->where('mp', 1) as $candidate )

                                        {{ $attributes->where('mp_id', $candidate->id)->count()}},

                                    @endforeach                              
                                ],

                        backgroundColor: [
                            'rgba(255, 99, 132, 0.2)',
                            'rgba(54, 162, 235, 0.2)',
                            'rgba(255, 206, 86, 0.2)',

                        ],
                        borderColor: [
                            'rgba(255, 99, 132, 1)',
                            'rgba(54, 162, 235, 1)',
                            'rgba(255, 206, 86, 1)',

                        ],
                            borderWidth: 1
                        }]
                    },
                    options: {

                        title: {
                            display: true,
                            text: 'Elections 2020',
                            postion: 'right'
                        },
                        legend:{
                            display:true,
                            postion: 'left'
                        },
                        tooltips:{
                            mode: 'point'
                        },

                    }
                    });


            
                </script>

                   

            @endif

           <div>

                <form method="POST" action="/elections">
                
                    {{ csrf_field() }}

                    <div id="presidential">

                        <div class="panel panel-default">
                            <div class="panel-heading">Presidential Elections</div>
                        </div>

                        @forelse ($candidates->where('presidential', 1) as $candidate)

                            <div class="panel panel-default">

                                <div class="panel-body">

                                    <div class="form-group">

                                    <img src="{{$candidate->avatar}}" style="width:20rem;" alt="" srcset=""><br>

                                        <input class="form-check-input" value="{{ $candidate->id}}"  {{ auth()->user()->vote && auth()->user()->vote->prez_candidate == $candidate ? "checked" : ""  }} type="radio" name="president_id">
                                        
                                        <label for="Presidential_Candidate">{{$candidate->name}}</label>

                                    </div>

                                </div><br>

                            </div>

                        @empty

                            <h3 class="title">Presidential Aspirant not available</h3>
                        
                        @endforelse

                        <a id="next_to_sec" class="pull-right btn btn-primary">Next >></a>
                        
                    </div> 

                    <div id="gen_sec" style="display:none;">

                        <div class="panel panel-default">
                            <div class="panel-heading">General Secretary Elections</div>
                        </div>

                        @forelse ($candidates->where('secretary', 1) as $candidate)

                            <div class="panel panel-default">

                                <div class="panel-body">

                                    <div class="form-group">

                                    <img src="{{$candidate->avatar}}" style="width:20rem;" alt="" srcset=""><br>

                                        <input class="form-check-input" value="{{ $candidate->id}}"  {{ auth()->user()->vote && auth()->user()->vote->sec_candidate == $candidate ? "checked" : ""  }} type="radio" name="secretary_id">
                                        
                                        <label for="General_Secretary">{{$candidate->name}}</label>

                                    </div>

                                </div><br>

                            </div>

                        @empty

                            <h3 class="title">General Secretary not available</h3>
                        
                        @endforelse

                        <a id="prev_to_prez" class="pull-left btn btn-primary"><< Previous</a>

                        <a id="next_to_mp" class="pull-right btn btn-primary">Next >></a>
                        
                    </div>

                    <div id="mp" style="display:none;">

                        <div class="panel panel-default">
                            <div class="panel-heading">Parliamentary Elections</div>
                        </div>

                        @forelse ($candidates->where('mp', 1) as $candidate)

                            <div class="panel panel-default">

                                <div class="panel-body">

                                    <div class="form-group">

                                    <img src="{{$candidate->avatar}}" style="width:20rem;" alt="" srcset=""><br>

                                        <input class="form-check-input" value="{{ $candidate->id}}"  {{ auth()->user()->vote && auth()->user()->vote->mp_candidate == $candidate ? "checked" : ""  }} type="radio" name="mp_id">
                                        
                                        <label for="Parliamentary_Candidate">{{$candidate->name}}</label>

                                    </div><br>

                                </div><br>

                            </div>

                        @empty

                            <h3 class="title">Parliamentary Candidate(s) not available</h3>
                        
                        @endforelse

                        <button class="btn btn-success pull-right"  {{ auth()->user()->vote ? "disabled" : ""}} type="submit">Vote >></button>
                          
                        <a id="prev_to_sec" class="pull-left btn btn-primary"><< Previous</a>
                        
                    </div>

                </form>

            </div>
            
        @else

            <div class="well text-center">

                <h3 class="title">The page is currently not available</h3>

                <p class="well">Come back later</p>

            </div>
            
        @endif


    </div>

    @section('extra-js')

        function toggleDiv(showDiv, hideDiv)
        {

            $(showDiv).show();

            $(hideDiv).hide();

        }

    
        $('a#next_to_sec').click(function(){

            toggleDiv('div#gen_sec', 'div#presidential');

        });


        $('a#next_to_mp').click(function(){

            toggleDiv('div#mp', 'div#gen_sec');

        });


        $('a#prev_to_sec').click(function(){

            toggleDiv('div#gen_sec', 'div#mp');

        });


        $('a#prev_to_prez').click(function(){

            toggleDiv('div#presidential', 'div#gen_sec');

        });


    @endsection

@endsection
