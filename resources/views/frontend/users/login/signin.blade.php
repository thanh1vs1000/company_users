@extends('frontend.users.layout')
@section('content')
    <div class="tr-breadcrumb bg-image section-before">
        <div class="container">
            <div class="breadcrumb-info text-center">
                <div class="page-title">
                    <h1>Sign In</h1>
                    <span>Lorem Ipsum is simply dummy text of the printing pesetting.</span>
                </div>
            </div>
        </div>
    </div>
    <div class="tr-account section-padding">
        <div class="container text-center">
            <div class="user-account">
                <div class="account-content">
                    <form action="{{ route('login-user')}}" class="tr-form" method="post">
                        <div class="form-group">
                            <input type="text" class="form-control" placeholder="Please Enter Your Email" name="email" value="{{old('email')}}">
                            @if($errors->has('email'))
                                <div class="error-text" style="color: red">
                                    {{$errors->first('email')}}
                                </div>
                            @endif
                        </div>
                        <div class="form-group">
                            <input type="password" class="form-control" placeholder="Password" name="password" value="{{old('password')}}">
                            @if($errors->has('password'))
                                <div class="error-text" style="color: red">
                                    {{$errors->first('password')}}
                                </div>
                            @endif
                            <?php
                            $message = Session::get('message');
                            if($message){
                                echo '<span class="text-alert"  style="color: red">'.$message.'</span>';
                                Session::put('message',null);
                            }
                            ?>
                        </div>
                        <div class="user-option">
                            <div class="checkbox">
                                <label><input type="checkbox" name="remember_token" id="remember_token" value="Remember me"{{ old('remember_token') ? 'checked' : '' }}>Remember me</label>
                            </div>
                            <div class="forgot-password">
                                <a href="#">I forgot password</a>
                            </div>
                        </div>
                        <button type="submit" class="btn btn-primary">Login</button>
                      @csrf
                    </form>
                    <div class="new-user text-center">
                        <span><a href="{{route('add-signup')}}">Create a New Account</a> </span>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
