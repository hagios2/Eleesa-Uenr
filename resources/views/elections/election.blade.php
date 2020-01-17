@extends('layouts.app')

@section('content')

   <div class="container">

        @include('../errors.errors')

        @if(auth()->user()->vote)

            <div class="jumbotron">

                <canvas id="myChart" class="offset-md-2" ></canvas>

            </div>


            <script src="/js/jquery.min.js"></script>
            <script src="/js/Chart.min.js"></script>

            <script>

                var ctx = document.getElementById('myChart');
                var myChart = new Chart(ctx, {
                type: 'doughnut',
                data: {
                    labels: ['Joseph Adomako', 'Enoch Ofori Larbi', 'George Gbest'],
                    datasets: [{
                        label: '# of Votes',
                        data: [

                            @foreach ($attributes as $attribute)

                                @foreach($attribute as $key => $value)

                                    {{ $value }},

                                @endforeach

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

        <form method="POST" action="/elections">
            
            {{ csrf_field() }}


            <div class="form-group">

                 <div class="card" style="width:15rem">
                {{--  <div class="form-check">  --}}
                    {{-- <img class="card-img-top" src="/storage/images/1.jpg" alt="Jay"> --}}

                    <label class="card-title" for="votes"  style="text-align: center;" >
                            <input class="form-check-input" value="Joseph Adomako" {{ auth()->user()->vote && auth()->user()->vote->candidate == "Joseph Adomako" ? "checked" : ""}} type="radio" name="candidate">
                        Joseph Adomako
                    </label>
                </div>


                <div class="card" style="width:15rem">
                    {{--  <div class="form-check">  --}}
                    {{-- <img class="card-img-top" src="/storage/images/1.jpg" alt="Africa"> --}}

                    <label class="card-title" for="votes" style="text-align: center;" >
                        <input class="form-check-input" value="Enoch Ofori Larbi" {{ auth()->user()->vote && auth()->user()->vote->candidate == "Enoch Ofori Larbi" ? "checked" : ""}} type="radio" name="candidate">
                            Enoch Ofori Larbi
                        </label>
                </div>


                <div class="card" style="width:15rem; margin-bottom: 10px;">
                        {{--  <div class="form-check">  --}}
                            {{-- <img class="card-img-top" src="/storage/images/1.jpg" alt="Best"> --}}

                            <label class="card-title" for="votes" style="text-align: center; " >
                                    <input class="form-check-input" value="George Gbest"  {{ auth()->user()->vote && auth()->user()->vote->candidate  == "George Gbest" ? "checked" : ""}} type="radio" name="candidate">
                                George Gbest
                            </label>
                </div>

                <div>
                    <button class="btn btn-primary"  {{ auth()->user()->vote ? "disabled" : ""}} type="submit">Vote</button>
                </div>

            </div>

        </form>

   </div>

@endsection
