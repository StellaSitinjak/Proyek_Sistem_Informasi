@extends('frontEnd.layouts.master')
@section('title','My Account Page')
@section('content')

<div class="greyBg">
    <div class="container">
		<div class="wrapper">
    
        
            <div class="panel itemBox">
                <div class="panel-header"><h2 align="center">{{Auth::user()->name}}</h2></div>

                <div class="panel-body">
                    @if (session('status'))
                        <div class="alert alert-success">
                            {{ session('status') }}
                        </div>
                    @endif

                    @if(isset($link))
                    <div class="myContent">

                      <ul class="nav nav-tabs">
                        @if($link=="update-profile")
                        <li class="active"><a href="#update-profile" data-toggle="tab">Address</a></li>
                        <li><a href="#myorders" data-toggle="tab">My Orders</a></li>
                        <li><a href="#update-password" data-toggle="tab">Change Password</a></li>

                        @elseif($link=="myorders")
                        <li ><a href="#update-profile" data-toggle="tab">Address</a></li>
                        <li class="active"><a href="#myorders" data-toggle="tab">My Orders</a></li>
                        <li><a href="#update-password" data-toggle="tab">Change Password</a></li>

                        @elseif($link=="update-password")
                        <li ><a href="#update-profile" data-toggle="tab">Address</a></li>
                        <li><a href="#myorders" data-toggle="tab">My Orders</a></li>
                        <li class="active"><a href="#update-password" data-toggle="tab">Change Password</a></li>
                        @else
                        something else
                        @endif
                      </ul>

                      <div class="tab-content col-md-6">
                        <div id="update-profile" class="tab-pane fade in active">
                        your {{$link}} data
                        </div>
                        <div id="myorders" class="tab-pane fade in" >
                          myorders tab
                        </div>
                        <div id="update-password" class="tab-pane fade in">
                          changepassword tab
                        </div>
                      </div>

                    </div>
                    @else
                  <div class="myContent">

                    <ul class="nav nav-tabs">

                      <li class="active"><a href="{{url('/update-profile',$user_login->id)}}" data-toggle="tab">Address</a></li>
                      <li><a href="#myorders" data-toggle="tab">My Orders</a></li>
                      <li><a href="#update-password" data-toggle="tab">Change Password</a></li>

                    </ul>

                    <div class="tab-content">
                      <div id="update-profile" class="tab-pane fade in active">
                      
                      <form action="{{url('/update-profile',$user_login->id)}}" method="post" class="account-form">                   
                        <input type="hidden" name="_token" value="{{csrf_token()}}">
                        {{method_field('PUT')}}
                        <legend id ="Fonts">Account Profile</legend>
                        <div class="form-group {{$errors->has('name')?'has-error':''}}">
                            <input type="text" class="form-control" name="name" id="name" value="{{$user_login->name}}" placeholder=" Name">
                            <span class="text-danger">{{$errors->first('name')}}</span>
                        </div>
                        <div class="form-group {{$errors->has('country')?'has-error':''}}">
                            <input type="text" class="form-control" name="country" value="" id="country" placeholder=" Country">
                            <span class="text-danger">{{$errors->first('country')}}</span>
                        </div>
                        <div class="form-group {{$errors->has('province')?'has-error':''}}">
                            <input type="text" class="form-control" name="province" value="{{$user_login->province}}" id="province" placeholder="  province">
                            <span class="text-danger">{{$errors->first('province')}}</span>
                        </div>
                        <div class="form-group {{$errors->has('region')?'has-error':''}}">
                            <input type="text" class="form-control" name="region" value="{{$user_login->region}}" id="region" placeholder="  Region">
                            <span class="text-danger">{{$errors->first('region')}}</span>
                        </div>
                        <div class="form-group {{$errors->has('city')?'has-error':''}}">
                            <input type="text" class="form-control" name="city" value="{{$user_login->city}}" id="city" placeholder=" City">
                            <span class="text-danger">{{$errors->first('city')}}</span>
                        </div>
                        <div class="form-group {{$errors->has('barangay')?'has-error':''}}">
                            <input type="text" class="form-control" name="barangay" value="{{$user_login->barangay}}" id="barangay" placeholder=" Barangay">
                            <span class="text-danger">{{$errors->first('barangay')}}</span>
                        </div>
                        <div class="form-group {{$errors->has('postal_code')?'has-error':''}}">
                            <input type="text" class="form-control" name="postal_code" value="{{$user_login->postal_code}}" id="postal_code" placeholder="  postal_code">
                            <span class="text-danger">{{$errors->first('postal_code')}}</span>
                        </div>
                        <div class="form-group {{$errors->has('phone_number')?'has-error':''}}">
                            <input type="text" class="form-control" name="phone_number" value="{{$user_login->phone_number}}" id="phone_number" placeholder=" phone_number">
                            <span class="text-danger">{{$errors->first('phone_number')}}</span>
                        </div>
                        <div class="form-group {{$errors->has('address')?'has-error':''}}">
                            <input type="text" class="form-control" value="{{$user_login->address}}" name="address" id="address" placeholder=" Address">
                            <span class="text-danger">{{$errors->first('address')}}</span>
                        </div>

                        <button type="submit" class="btn btn-account" style="float: center;">Update Profile</button>
						</form> 
                      
					  </div>

                      <div id="myorders" class="tab-pane fade in" style="height:400px; overflow-x:scroll">
					     
                      <table class="table table-bordered data-table">
                    <thead>
                    <div class="col-sm-5">
                

                <ul class="thumbnails" style="margin-left: -10px;">
                </ul>

                    <tr>
                        <th>Order Number</th>
                        <th>Odered  ID</th>
                        <th>Ordered Product</th>
                        <th>Payment Method</th>
                        <th>Grand Total</th>
                        <th>Action</th>
                    </tr>
                    </thead>
                    <tbody>
                    <tr>
                    <th></th>
                    <th></th>
                    <th></th>
                    <th></th>
                    <th></th>
                    <th></th>
                    </tr>

                    </tbody>
                </table>

                      </div>

                      <div id="update-password" class="tab-pane fade in">
                        
						<form action="{{url('/update-password',$user_login->id)}}" method="post" class="account-form">
                        <legend >Update New Password</legend>
                        <input type="hidden" name="_token" value="{{csrf_token()}}">
                        {{method_field('PUT')}}
                        <div class="form-group {{$errors->has('password')?'has-error':''}}">
                            <input type="password" class="form-control" name="password" id="password" placeholder="Old Password">
                            @if(Session::has('oldpassword'))
                                <span class="text-danger">{{Session::get('oldpassword')}}</span>
                            @endif
                        </div>
                        <div class="form-group {{$errors->has('newPassword')?'has-error':''}}">
                            <input type="password" class="form-control" name="newPassword" id="newPassword" placeholder="New Password">
                            <span class="text-danger">{{$errors->first('newPassword')}}</span>
                        </div>
                        <div class="form-group {{$errors->has('newPassword_confirmation')?'has-error':''}}">
                            <input type="password" class="form-control" name="newPassword_confirmation" id="newPassword_confirmation" placeholder="Confirm Password">
                            <span class="text-danger">{{$errors->first('newPassword_confirmation')}}</span>
                        </div>
                        <button type="submit" class="btn btn-account" style="float: center;">Update Password</button>
						</form>
                      
					  </div>


                    </div>
                  </div>
                  @endif

                </div>
            </div>
        </div>
    </div>
  </div>
</div>
@endsection
