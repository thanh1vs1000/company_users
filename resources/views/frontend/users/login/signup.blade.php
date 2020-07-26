@extends('frontend.users.layout')
@section('content')
    <div class="tr-breadcrumb bg-image section-before">
        <div class="container">
            <div class="breadcrumb-info text-center">
                <div class="page-title">
                    <h1>Create a New Account</h1>
                    <span>Lorem Ipsum is simply dummy text of the printing pesetting.</span>
                </div>
            </div>
        </div>
    </div>
    <div class="tr-account section-padding">
        <div class="container text-center">
            <div class="user-account">

                <ul class="nav nav-tabs  nav-justified" role="tablist">
                    <li role="presentation"><a class="active" href="{{route('add-signup')}}" aria-controls="seeker" role="tab"
                                              >Job Seeker</a></li>
                    <li role="presentation"><a href="{{route('add-employer')}}" aria-controls="employers" role="tab" >Employers</a>
                    </li>
                </ul>

                <div class="tab-content">
                    <div role="tabpanel" class="tab-pane active" id="seeker">
                        <div class="account-content">
                            <form action="{{URL::to('/save-signup')}}" class="tr-form" method="post">
                                {{csrf_field()}}
                                <div class="form-group">
                                    <input type="text" class="form-control" placeholder="Username" name="user_name">
                                    @if($errors->has('user_name'))
                                        <div class="error-text" style="color: red">
                                            {{$errors->first('user_name')}}
                                        </div>
                                    @endif
                                </div>
                                <div class="form-group">
                                    <input type="text" class="form-control" placeholder="Phone" name="user_phone">
                                    @if($errors->has('user_phone'))
                                        <div class="error-text" style="color: red">
                                            {{$errors->first('user_phone')}}
                                        </div>
                                    @endif
                                </div>
                                <div class="form-group">
                                    <input type="email" class="form-control" placeholder=" Email" name="user_email">
                                    @if($errors->has('user_email'))
                                        <div class="error-text" style="color: red">
                                            {{$errors->first('user_email')}}
                                        </div>
                                    @endif
                                </div>
                                <div class="form-group">
                                    <input type="password" class="form-control" placeholder="Password"
                                           name="user_password">
                                    @if($errors->has('user_password'))
                                        <div class="error-text" style="color: red">
                                            {{$errors->first('user_password')}}
                                        </div>
                                    @endif
                                </div>
                                <div class="form-group">
                                    <input type="password" class="form-control" placeholder="Confirm Password" name="password_confirm">
                                    @if($errors->has('password_confirm'))
                                        <div class="error-text" style="color: red">
                                            {{$errors->first('password_confirm')}}
                                        </div>
                                    @endif
                                </div>
                                <div class="form-group">
                                    <input type="text" class="form-control" placeholder="Address" name="address">
                                    @if($errors->has('address'))
                                        <div class="error-text" style="color: red">
                                            {{$errors->first('address')}}
                                        </div>
                                    @endif
                                </div>
                                <div class="form-group">
                                    <input type="date" class="form-control" placeholder="Birthday" name="birthday">
                                    @if($errors->has('birthday'))
                                        <div class="error-text" style="color: red">
                                            {{$errors->first('birthday')}}
                                        </div>
                                    @endif
                                </div>
                                <div class="form-group">
                                    <input type="text" class="form-control" placeholder="Language" name="language">
                                    @if($errors->has('language'))
                                        <div class="error-text" style="color: red">
                                            {{$errors->first('language')}}
                                        </div>
                                    @endif
                                </div>
                                <button type="submit" class="btn btn-primary">Sign Up</button>
                            </form>
                            <div class="new-user text-center">
                                <span>Already Registered? <a href="{{URL::to('/signin-user')}}">Sign in</a> </span>
                            </div>
                        </div>
                    </div>

{{--                    End-from-user--}}

                                        </div>
                                    </div>
                                </div>
                            </div>
                        @endsection



