@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-8 col-md-offset-2">
            <div class="panel panel-default">
                <div class="panel-heading">Register</div>
                <div class="panel-body">

                    @include('errors.errors')
                    <form class="form-horizontal" role="form" method="POST" action="{{ url('/register') }}">
                        {{ csrf_field() }}

                        <div class="form-group{{ $errors->has('name') ? ' has-error' : '' }}">
                            <label for="name" class="col-md-4 control-label"><span class="glyphicon glyphicon-user"></span>  Name</label>

                            <div class="col-md-6">
                                <input id="name" type="text" class="form-control" placeholder="Name" name="name" value="{{ old('name') }}">

                                @if ($errors->has('name'))
                                    <span class="help-block">
                                        <strong><span class="glyphicon glyphicon-exclamation-sign"></span> {{ $errors->first('name') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>

                        <div class="form-group{{ $errors->has('email') ? ' has-error' : '' }}">
                            <label for="email" class="col-md-4 control-label"><span class="glyphicon glyphicon-envelope"></span>  E-Mail Address</label>

                            <div class="col-md-6">
                                <input id="email" type="email" class="form-control" placeholder="Email" name="email" value="{{ old('email') }}">

                                @if ($errors->has('email'))
                                    <span class="help-block">
                                        <strong><span class="glyphicon glyphicon-exclamation-sign"></span> {{ $errors->first('email') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>

                        <div class="form-group{{ $errors->has('index_no') ? ' has-error' : '' }}">
                            <label for="email" class="col-md-4 control-label"><span class="glyphicon glyphicon-edit"></span>  Index Number</label>

                            <div class="col-md-6">
                                <input id="index_no" type="text" class="form-control" placeholder="Index Number" name="index_no" value="{{ old('index_no') }}">

                                @if ($errors->has('index_no'))
                                    <span class="help-block">
                                        <strong><span class="glyphicon glyphicon-exclamation-sign"></span> {{ $errors->first('index_no') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>

                        <div class="form-group{{ $errors->has('program') ? ' has-error' : '' }}">
                            <label for="program" class="col-md-4 control-label"><span class="glyphicon glyphicon-edit"></span>  Program</label>

                            <div class="col-md-6">

                                <select name="program" class="form-control" required id="">
                                    <option value="#">Select Program</option>
                                    <option {{ old('program') == 1 ? "selected" : '' }} value="1">Bsc Computer Engineering</option>
                                    <option {{ old('program') == 2 ? "selected" : '' }} value="2">Bsc Electrical Engineering</option>
                                    <option {{ old('program') == 3 ? "selected" : '' }} value="3">Diploma in Electrical Engineering</option>
                                </select>

                                @if ($errors->has('program'))
                                    <span class="help-block">
                                        <strong><span class="glyphicon glyphicon-exclamation-sign"></span> {{ $errors->first('program') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>


                        <div class="form-group{{ $errors->has('index_no') ? ' has-error' : '' }}">
                                <label for="email" class="col-md-4 control-label"><span class="glyphicon glyphicon-calendar"></span>  Year of Admission</label>
    
                                <div class="col-md-6">
                                    <input id="year" type="month" class="form-control" name="year" value="{{ old('year') }}">
    
                                    @if ($errors->has('index_no'))
                                        <span class="help-block">
                                            <strong><span class="glyphicon glyphicon-exclamation-sign"></span> {{ $errors->first('year') }}</strong>
                                        </span>
                                    @endif
                                </div>
                            </div>

                        <div class="alert text-center alert-info form-group" style="margin: 0 auto;">

                            <label><span class="glyphicon glyphicon-info-sign"></span> We recommed using your reference number as password</label>
        
                        </div><br>

                        <div class="form-group{{ $errors->has('password') ? ' has-error' : '' }}">
                            <label for="password" class="col-md-4 control-label">Password</label>

                            <div class="col-md-6">
                                <input id="password" type="password" placeholder="Password" class="form-control" name="password">

                                @if ($errors->has('password'))
                                    <span class="help-block">
                                        <strong><span class="glyphicon glyphicon-exclamation-sign"></span> {{ $errors->first('password') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>

                        <div class="form-group{{ $errors->has('password_confirmation') ? ' has-error' : '' }}">
                            <label for="password-confirm" class="col-md-4 control-label">Confirm Password</label>

                            <div class="col-md-6">
                                <input id="password-confirm" type="password" placeholder="Confirm Password" class="form-control" name="password_confirmation">

                                @if ($errors->has('password_confirmation'))
                                    <span class="help-block">
                                        <strong> {{ $errors->first('password_confirmation') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>

                        <div class="form-group">
                            <div class="col-md-6 col-md-offset-4">
                                <button type="submit" class="btn btn-primary">
                                    <i class="fa fa-btn fa-user"></i> Register
                                </button>
                            </div>
                        </div>
                    </form>

                </div>
            </div>
        </div>
    </div>
</div>
@endsection
