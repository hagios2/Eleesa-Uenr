@extends('layouts.app')

@section('content')

<div class="container">

    <div class="row">

        @if (auth()->user()->isAdmin)

        {{-- admin --}}

            <div class="col-xs-12 col-sm-12 col-md-4 col-lg-4   col-md-offset-1">

                <div class="thumbnail">
                    <img src="/storage/images/academics/admin.jpg" style="max-height:250px; width:100%;" alt="...">

                    <div class="caption">
                        <p><a style="margin-left:30%;" class="btn btn-primary" href="/candidate">Admin Page</a>
                    </div>
                </div>

            </div>

        @endif

        <div class="col-xs-12 col-sm-12 col-md-4 col-lg-4   col-md-offset-1">

            <div id="carousel-example-generic" class="carousel slide" data-ride="carousel">
                <!-- Indicators -->
                <ol class="carousel-indicators">
                  <li data-target="#carousel-example-generic" data-slide-to="0" class="active"></li>
                  <li data-target="#carousel-example-generic" data-slide-to="1"></li>
                {{--   <li data-target="#carousel-example-generic" data-slide-to="2"></li> --}}
                </ol>
              
                <!-- Wrapper for slides -->
                <div class="carousel-inner" role="listbox">
                  <div class="item active">
                    <img src="/storage/images/election_photos/photo1.jpeg" style="max-height:250px; width:100%;" alt="...">
                    <div class="carousel-caption">
                        <strong>2020 ELEESA Elections</strong> 
                    </div>
                  </div>
                  <div class="item">
                    <img src="/storage/images/election_photos/photo2.png" style="max-height:250px; width:100%;" alt="...">
                    <div class="carousel-caption">
                      <strong>Who wins the 2020 Presidential Elections?</strong> 
                    </div>
                  </div> 
                </div> 
        
            </div><br>

            <a style="margin-left:35%;" class="btn btn-primary" href="/election-policy">Cast Vote</a>
           
        </div> 

        {{-- academics --}}


        <div class="col-xs-12 col-sm-12 col-md-4 col-lg-4   col-md-offset-1">

            <div id="carousel-example-generic" class="carousel slide" data-ride="carousel">
                <!-- Indicators -->
                <ol class="carousel-indicators">
                    <li data-target="#carousel-example-generic" data-slide-to="0" class="active"></li>
                    <li data-target="#carousel-example-generic" data-slide-to="1"></li>
                    <li data-target="#carousel-example-generic" data-slide-to="2"></li>
                </ol>
                
                <!-- Wrapper for slides -->
                <div class="carousel-inner" role="listbox">
                    <div class="item active">
                    <img src="/storage/images/academics/photo1.jpg" style="max-height:250px; width:100%;" alt="...">
                    <div class="carousel-caption">
                        <strong>Power up your mind</strong> 
                    </div>
                    </div>
                    <div class="item">
                    <img src="/storage/images/academics/photo3.jpg" style="max-height:250px; width:100%;" alt="...">
                    <div class="carousel-caption">
                        <strong>You can do it</strong> 
                    </div>
                    </div>
                    <div class="item">
                    <img src="/storage/images/academics/photo3.jpg" style="max-height:250px; width:100%;" alt="...">
                    <div class="carousel-caption">
                        <strong>It will be worth it</strong> 
                    </div>
                    </div> 
                </div> 

            </div><br>

                <a style="margin-left:35%;" class="btn btn-primary" href="/index">Academics Page</a>
        </div>

    </div>

</div>

@endsection
