@extends('layouts.app')

@section('content')

    <div class="container">

        @if ($toggleApp->toggle)

            @include('../errors.errors')


            <div id="policy" style="width:80%;" {{-- class="text-center" --}}>


                <h1 class="title">
                  <i class="glyphicon glyphicon-file"></i>  Binding Document
                </h1>

                <p style="text-align:justify;">
                    Terms and Conditions agreements act as a legal contract between you (the company) who has the website or mobile app and the user who access your website and mobile app.

                    Having a Terms and Conditions agreement is completely optional. No laws require you to have one. Not even the super-strict and wide-reaching General Data Protection Regulation (GDPR).

                    It's up to you to set the rules and guidelines that the user must agree to. You can think of your Terms and Conditions agreement as the legal agreement where you maintain your rights to exclude users from your app in the event that they abuse your app, where you maintain your legal rights against potential app abusers, and so on.

                    Terms and Conditions are also known as Terms of Service or Terms of Use.
                </p>

                <form action="/accept-policy" method="POST">

                    {{ csrf_field() }}
                    
                        <div class="form-group">

                            <input type="checkbox" {{ auth()->user()->policy ? 'checked  disabled' : '' }} onchange="this.form.submit()" name="" id="accept">

                            <label for="check">Agree and Continue</label>

                        </div>
                </form>

                @if (auth()->user()->policy )

                    <a href="/elections" class="btn btn-primary">Next</a>
                    
                @endif

            </div>

        @else

            <div class="well text-center">

                <h3 class="title">The page is currently not available</h3>

                <p class="well">Come back later</p>

            </div>

        @endif

    </div>

@endsection