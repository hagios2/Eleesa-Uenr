@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-10 col-md-offset-1">
            <div class="panel panel-default">
                <div class="panel-heading">Dashboard</div>


                @if (auth()->user())

                    <div class="panel-body">

                        <div class="row">
                            <div class="col-sm-6 col-md-4">
                              <div class="thumbnail">
                                {{-- <div id="myCarousel" class="carousel slide" data-ride="carousel">
                                    <!-- Indicators -->
                                    <ol class="carousel-indicators">
                                      <li data-target="#myCarousel" data-slide-to="0" class="active"></li>
                                      <li data-target="#myCarousel" data-slide-to="1"></li>
                                      <li data-target="#myCarousel" data-slide-to="2"></li>
                                    </ol>
                                  
                                    <!-- Wrapper for slides -->
                                    <div class="carousel-inner">
                                      <div class="item active">
                                        <img src="/storage/images/candidates/1/1.jpg" alt="Los Angeles">
                                      </div>
                                  
                                      <div class="item">
                                        <img src="chicago.jpg" alt="Chicago">
                                      </div>
                                  
                                      <div class="item">
                                        <img src="ny.jpg" alt="New York">
                                      </div>
                                    </div>
                                  
                                    <!-- Left and right controls -->
                                    <a class="left carousel-control" href="#myCarousel" data-slide="prev">
                                      <span class="glyphicon glyphicon-chevron-left"></span>
                                      <span class="sr-only">Previous</span>
                                    </a>
                                    <a class="right carousel-control" href="#myCarousel" data-slide="next">
                                      <span class="glyphicon glyphicon-chevron-right"></span>
                                      <span class="sr-only">Next</span>
                                    </a>
                                  </div>
                                <div class="caption">
                                  <h3>Thumbnail label</h3>
                                  <p>...</p>
                                  <p><a href="#" class="btn btn-primary" role="button">Button</a> <a href="#" class="btn btn-default" role="button">Button</a></p>
                                </div>
                              </div>
                            </div>
                          </div>
 --}}
                     


                        Thank you for registering with us
                    </div>

                    <a class="btn btn-primary" href="/election-policy">Cast Vote</a>
                    
                @else

                     <div class="panel-body">
                        
                        You are currently not login/registered with us 
                    
                        <p> 
                            click on the link to register <a href="/register">Register</a> | <a href="/login">login</a> to login
                        </p>

                    </div>
                    
                    
                @endif
               
            </div>
        </div>
    </div>
</div>
@endsection
