@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-10 col-md-offset-1">
            <div class="panel panel-default">
                <div class="panel-heading">Dashboard</div>


                @if (auth()->user())

                    <div class="panel-body">
                        Thank you for registering with us
                    </div>

                    <a href="/election">Cast Vote</a>
                    
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
