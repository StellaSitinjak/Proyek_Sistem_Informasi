@extends('layouts.main')
@section('title', 'Menu')
@section('head', 'Rumah Makan Sinar Minang Balige')

@section('content')
<div class="row">
<div class="col-sm-4 col-sm-offset-4">
                <div class="signup-form"><!--sign up form-->
                    <h2 align="center">New User Signup!</h2>
                    <form action="{{url('/register_user')}}" method="post" class="form-horizontal">
                        <input type="hidden" name="_token" value="{{csrf_token()}}">


                        <input type="email" placeholder="Email Address" name="email" value="{{old('email')}}"/>
                        <span class="text-danger">{{$errors->first('email')}}</span>

                        <input type="password" placeholder="Password" name="password" value="{{old('password')}}"/>
                        <span class="text-danger">{{$errors->first('password')}}</span>

                        <input type="password" placeholder="Confirm Password" name="password_confirmation" value="{{old('password_confirmation')}}"/>
                        <span class="text-danger">{{$errors->first('password_confirmation')}}</span>

                        <button type="submit" class="btn btn-default">Signup</button>
                    </form>
                </div><!--/sign up form-->
</div>
    </div>
    <div style="margin-bottom: 150px;"></div>
@endsection