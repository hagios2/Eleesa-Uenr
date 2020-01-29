@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-8 col-md-offset-2">

            <a class="btn btn-info" href="/candidate"> << Back</a><br><br>

            <div class="panel panel-default">
                <div class="panel-heading">Register Aspirants</div>
                <div class="panel-body">

                    @include('../errors.errors')
                    <form class="form-horizontal" role="form" enctype="multipart/form-data" method="POST" action="{{ url('/candidate') }}">
                        {{ csrf_field() }}

                        <div class="form-group{{ $errors->has('name') ? ' has-error' : '' }}">
                            <label for="name" class="col-md-4 control-label"><span class="glyphicon glyphicon-user"></span>  Name</label>

                            <div class="col-md-6">
                                <input id="name" type="text" required class="form-control" placeholder="Name" name="name" value="{{ old('name') }}">

                                @if ($errors->has('name'))
                                    <span class="help-block">
                                        <strong><span class="glyphicon glyphicon-exclamation-sign"></span> {{ $errors->first('name') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>

                        <div class="form-group{{ $errors->has('avatar') ? ' has-error' : '' }}">
{{-- 
                            <div id="avatar" style="">

                                I am here

                            </div> --}}
                            <label for="avatar" class="col-md-4 control-label"><span class="glyphicon glyphicon-envelope"></span> Image</label>

                            <div class="col-md-6">
                                <input id="t_avatar" type="file" class="form-control"  name="avatar" value="{{ old('avatar') }}">

                                @if ($errors->has('avatar'))
                                    <span class="help-block">
                                        <strong><span class="glyphicon glyphicon-exclamation-sign"></span> {{ $errors->first('avatar') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>

                        <div class="form-group{{ $errors->has('bio') ? ' has-error' : '' }}">
                            <label for="bio" class="col-md-4 control-label"><span class="glyphicon glyphicon-edit"></span> Bio</label>

                            <div class="col-md-6">
                                <textarea id="bio" class="form-control" placeholder="Bio" name="bio">{{ old('bio') }}</textarea>

                                @if ($errors->has('bio'))
                                    <span class="help-block">
                                        <strong><span class="glyphicon glyphicon-exclamation-sign"></span> {{ $errors->first('bio') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>

                        <div class="form-group{{ $errors->has('candidate_type') ? ' has-error' : '' }}">
                            <label for="candidate_type" class="col-md-4 control-label">Candidate Type</label>

                            <div class="col-md-6">

                                <div class="row">

                                    <input id="" type="radio" {{ old('candidate_type') == 'presidential' ? 'checked': "" }} name="candidate_type" value="presidential"> Presidential

                                    <input id="" {{ old('candidate_type') == 'secretary' ? 'checked': "" }} type="radio"  name="candidate_type" value="secretary"> Secretary
    
                                    <input id="" type="radio" {{ old('candidate_type') == 'mp' ? 'checked': "" }} name="candidate_type" value="mp"> Parlimentary

                                </div>

                               

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

<script>

    $(document).ready(function(){

        if($('$t_avatar').value != null)
        {

            $('div#avatar').html('<img style="width:40px;height:35px;" src=$('t_avatar').value >'); 
        }

     
    });
</script>
@endsection
