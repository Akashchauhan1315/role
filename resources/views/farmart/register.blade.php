@extends('farmart.layouts.main')
@section('content')
<div class="ps-breadcrumb">
    <div class="container">
        <ul class="ps-breadcrumb__list">
            <li class="active"><a href="index.html">Home</a></li>
            <li><a href="javascript:void(0);">Register</a></li>
        </ul>
    </div>
</div>
<section class="section--login">
    <div class="container">
        <div class="row">
            <div class="col-12 col-lg-6">
                <div class="login__box">
                    <div class="login__header">
                        <h3 class="login__register">REGISTER</h3>
                    </div>
                    <div class="login__content">
                        @if ($errors->any())
                            <div class="alert alert-danger">
                                <ul>
                                    @foreach ($errors->all() as $error)
                                        <li>{{ $error }}</li>
                                    @endforeach
                                </ul>
                            </div>
                        @endif
                        <div class="login__label">Create your account.</div>
                        <form method="post">
                            @csrf
                            <div class="form-row">
                                <div class="col-12 col-lg-6 form-group--block">
                                    <label>First name: <span>*</span></label>
                                    <input class="form-control @error('first_name') is-invalid @enderror" value="{{ old('first_name')}}" type="text" name="first_name">
                                    <input class="form-control" value="user" type="hidden" name="type">
                                    @error('first_name')
                                    <div class="invalid-feedback error-block">{{ $message }}</div>
                                    @enderror
                                </div>
                                <div class="col-12 col-lg-6 form-group--block">
                                    <label>Last name<span>*</span></label>
                                    <input class="form-control @error('last_name') is-invalid @enderror" value="{{ old('last_name')}}" type="text" name="last_name">
                                    @error('last_name')
                                    <div class="invalid-feedback error-block">{{ $message }}</div>
                                    @enderror
                                </div>
                                <div class="col-12 form-group--block">
                                    <label>Email: <span>*</span></label>
                                    <input class="form-control @error('email') is-invalid @enderror" value="{{ old('email')}}" type="text" name="email">
                                    @error('email')
                                    <div class="invalid-feedback error-block">{{ $message }}</div>
                                    @enderror
                                </div>
                                <div class="col-12 form-group--block">
                                    <label>Password: <span>*</span></label>
                                    <input class="form-control @error('password') is-invalid @enderror" value="{{ old('password')}}" type="text" name="password">
                                    @error('password')
                                    <div class="invalid-feedback error-block">{{ $message }}</div>
                                    @enderror
                                </div>
                                <div class="col-12 form-group--block">
                                    <label>Confirm password: <span>*</span></label>
                                    <input class="form-control @error('confirm_password') is-invalid @enderror" value="{{ old('confirm_password')}}" type="text" name="confirm_password">
                                    @error('confirm_password')
                                    <div class="invalid-feedback error-block">{{ $message }}</div>
                                    @enderror
                                </div>
                            </div>
                            <button class="btn btn-login" type="submit">Register</button>
                        </form>
                        <div class="login__conect">
                            <hr>
                            <p>Or login with</p>
                            <hr>
                        </div>
                        <button class="btn btn-social btn-facebook"> <i class="fa fa-facebook-f"></i>Login with Facebook</button>
                        <button class="btn btn-social btn-google"> <i class="fa fa-google-plus"></i>Login with Google</button>
                    </div>
                </div>
            </div>
            <div class="col-12 col-lg-6">
                <h3 class="login__title">Advantages Of Becoming A Member</h3>
                <p class="login__description"> <b>Famart Buyer Protection </b>has you covered from click to delivery.<br>Sign up or sign in and you will be able to: </p>
                <div class="login__orther">
                    <p> <i class="icon-truck"></i>Easily Track Orders, Hassle free Returns</p>
                    <p> <i class="icon-alarm2"></i>Get Relevant Alerts and Recommendation</p>
                    <p><i class="icon-star"></i>Wishlist, Reviews, Ratings and more.</p>
                </div>
                <div class="login__vourcher">
                    <div class="vourcher-money"><span class="unit">$</span><span class="number">25</span></div>
                    <div class="vourcher-content">
                        <h4 class="vourcher-title">GIFT VOURCHER FOR FISRT PURCHASE</h4>
                        <p>We give $25 as a small gift for your first purchase.<br>Welcome to Farmart Market!</p>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

@endsection