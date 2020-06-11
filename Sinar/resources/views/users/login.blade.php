@extends('layouts.main')
@section('title', 'Menu')
@section('head', 'Rumah Makan Sinar Minang Balige')

@section('content')
    <div class="container">
        @if(Session::has('message'))
            <div class="alert alert-success text-center" role="alert">
                {{Session::get('message')}}
            </div>
        @endif
        <div class="row">
            <div class="col-sm-6 col-sm-offset-3">
                <div class="login-form"><!--login form-->
                    <h2 align="center">Login to your account</h2>
                    <form action="{{ url('/user_login') }}" method="POST">
                    {{ csrf_field() }}
                    {{ method_field('POST') }}
                    <!-- <form action="{{url('/user_login')}}" method="get" class="form-horizontal">
                        <input type="hidden" name="_token" value="{{csrf_token()}}"> -->
                        <input type="email" placeholder="Email" name="email"/>
                        <input type="password" placeholder="Password" name="password"/>
                        <span>
                            <input type="checkbox" class="checkbox">
                            <h3>Keep me signed in</h3>
                        </span>
                        <button type="submit" class="btn btn-default" >Login</button>
                        </form>
                        @if (Route::has('password.request'))
                                    <a class="btn btn-link" href="{{ route('password.request') }}">
                                        {{ __('Forgot Your Password?') }}
                                    </a>
                                @endif
                        </label>
                        </label>
                    
                </div><!--/login form-->
            </div>
            
            
        </div>
        
    </div>
    <div style="margin-bottom: 60px;"></div>
@endsection