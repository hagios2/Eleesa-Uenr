@extends('layouts.app')

@section('content')
    
    @include('includes.tab')

    
<div id="carousel-example-generic" class="carousel slide" data-ride="carousel">
        <!-- Indicators -->
        <ol class="carousel-indicators">
          <li data-target="#carousel-example-generic" data-slide-to="0" class="active"></li>
          <li data-target="#carousel-example-generic" data-slide-to="1"></li>
          <li data-target="#carousel-example-generic" data-slide-to="2"></li>
          <li data-target="#carousel-example-generic" data-slide-to="3"></li>
          <li data-target="#carousel-example-generic" data-slide-to="4"></li>

        </ol>
      
        <!-- Wrapper for slides -->
        <div class="carousel-inner">
          <div class="item active">
            <img src="{{ asset('storage/images/trip/IMG_6290.jpg') }}"
             alt="..." style="height: 500px;width: 100%" class="img-thumbnail">
            <div class="carousel-caption">
                <h3>A Trip to Bui Dam</h3>
            </div>
          </div>
          
          <div class="item">
            <img src="{{ asset('storage/images/trip/IMG_6274.jpg') }}" alt="..." style="height: 500px;width: 100%;" class="img-thumbnail">
            <div class="carousel-caption">
                <h3>Eleesa Uenr</h3>
            </div>
          </div>
          
          <div class="item">
            <img src="{{ asset('storage/images/trip/IMG_6690.jpg') }}" alt="..." style="height: 500px;width: 100%" class="img-thumbnail">
            <div class="carousel-caption">
                <h3>Eleesa Executives</h3>
            </div>
          </div>

          <div class="item">
                <img src="{{ asset('storage/images/trip/IMG_6704.jpg') }}" alt="..." style="height: 500px;width: 100%" class="img-thumbnail">
                <div class="carousel-caption">
                    <h3>Fun at Bui</h3>
                </div>
           </div>

           <div class="item">
                <img src="{{ asset('storage/images/trip/IMG_6671.jpg') }}" alt="..." style="height: 500px;width: 100%" class="img-thumbnail">
                <div class="carousel-caption">
                    <h3></h3>
                </div>
           </div>
        
        </div>
      
        <!-- Controls -->
        <a class="left carousel-control" href="#carousel-example-generic" role="button" data-slide="prev">
          <span class="glyphicon glyphicon-chevron-left"></span>
        </a>
        <a class="right carousel-control" href="#carousel-example-generic" role="button" data-slide="next">
          <span class="glyphicon glyphicon-chevron-right"></span>
        </a>
      </div> <!-- Carousel -->

      <div class="jumbotron bg-info" style="margin-top: 30px">
          <div class="card">
              <h2 class="card-title text-center lead pt-4 text-info">ELEESA SERMINAR</h2>
      
          </div>
        <div class="row">
          <div class="col-md-4">
            <div>
              <a href="#">
                <img src="{{ asset('storage/images/seminar/IMG_5874.jpg') }}" alt="Lights" style="width:100%" class="img-responsive img-circle">
                <div class="caption">
                  <p></p>
                </div>
              </a>
            </div>
          </div>
          <div class="col-md-4">
            <div>
              <a href="#">
                <img src="{{ asset('storage/images/seminar/IMG_5886.jpg') }}" alt="Nature" style="width:100%" class="img-responsive img-circle">
                <div class="caption">
                  <p></p>
                </div>
              </a>
            </div>
          </div>
          <div class="col-md-4">
            <div>
              <a href="#">
                <img src="{{ asset('storage/images/seminar/IMG_5939.jpg') }}" alt="Fjords" style="width:100%" class="img-responsive img-circle">
                <div class="caption">
                  <p></p>
                </div>
              </a>
            </div>
          </div>
        </div>
      </div>


      <div class="jumbotron bg-info" style="margin-top: 30px">
        <div class="card">
            <h2 class="card-title text-center lead pt-4 text-info">ELEESA DINNER</h2>
    
        </div>
      <div class="row">
        <div class="col-md-4">
          <div>
            <a href="#">
              <img src="{{ asset('storage/images/Dinner/IMG_8984.jpg') }}" alt="Lights" style="width:100%;height: 250px" class="img-responsive img-circle">
              <div class="caption">
                <p></p>
              </div>
            </a>
          </div>
        </div>
        <div class="col-md-4">
          <div>
            <a href="#">
              <img src="{{ asset('storage/images/Dinner/_MG_7932.jpg') }}" alt="Nature" style="width:100%;height: 250px" class="img-responsive img-circle">
              <div class="caption">
                <p></p>
              </div>
            </a>
          </div>
        </div>
        <div class="col-md-4">
          <div>
            <a href="#">
              <img src="{{ asset('storage/images/Dinner/_MG_7805.jpg') }}" alt="Fjords" style="width:100%;height: 250px" class="img-responsive img-circle">
              <div class="caption">
                <p></p>
              </div>
            </a>
          </div>
        </div>
      </div>
    </div>
          
{{--  
      <div class="card" style="margin-top:10px">
          <h2 class="card-title">ELEESA SERMINA</h2>

          <img width="50%" class="rounded-thumbnail" src="{{ asset('storage/images/image_10.jpg') }}" alt="image"> 

      </div>

      <div class="card" style="margin-top:10px">
            <h2 class="card-title">ELEESA DINNER</h2>
  
            <img width="50%" class="rounded-thumbnail" src="{{ asset('storage/images/image_10.jpg') }}" alt="image"> 
  
       </div>  --}}
    
    
@endsection