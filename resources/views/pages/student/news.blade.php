@extends('layouts.app')

@section('content')
    
    @include('includes.tab')

    
<div id="carousel-example-generic" class="carousel slide" data-ride="carousel">
        <!-- Indicators -->
        <ol class="carousel-indicators">
          <li data-target="#carousel-example-generic" data-slide-to="0" class="active"></li>
          <li data-target="#carousel-example-generic" data-slide-to="1"></li>
          <li data-target="#carousel-example-generic" data-slide-to="2"></li>
        </ol>
      
        <!-- Wrapper for slides -->
        <div class="carousel-inner">
          <div class="item active">
            <img src="{{ asset('storage/images/eleesa_logo.jpg') }}"
             alt="...">
            <div class="carousel-caption">
                <h3>A Trip to Bui Dam</h3>
            </div>
          </div>
          
          <div class="item">
            <img src="{{ asset('storage/images/header_image.jpg') }}" alt="...">
            <div class="carousel-caption">
                <h3>Caption Text</h3>
            </div>
          </div>
          
          <div class="item">
            <img src="{{ asset('storage/images/image_10.jpg') }}" alt="...">
            <div class="carousel-caption">
                <h3>Caption Text</h3>
            </div>
          </div>

          <div class="item">
                <img src="{{ asset('storage/images/tab1_image.jpg') }}" alt="...">
                <div class="carousel-caption">
                    <h3>Caption Text</h3>
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
          

      <div class="card">
          <div class="card-body">ELEESA SERMINA</div>

          
      </div>
    
    
@endsection