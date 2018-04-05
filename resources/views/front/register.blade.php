@extends('master')
@section('content')
    <div class="user-form-block">
        <div class="container">
            <div class="row">
                <div class="col-lg-6 offset-lg-3 col-md-12">
                    <div class="registration-form-block">
                        <div class="registration-form-title">
                            <h4>Register</h4>
                        </div>
                        <div class="form-block">
                            <form class="form-common">
                                <div class="form-group">
                                    <label for="userName">Username or Email Address *</label>
                                    <input type="text" class="form-control" id="userName" placeholder="Enter your Username">
                                </div>
                                <div class="form-group">
                                    <label for="password">Password *</label>
                                    <input type="password" class="form-control" id="password" placeholder="Enter your Passwoed">
                                </div>
                                <div class="form-group row form-check-row">
                                    <div class="col-md-6">
                                        <div class="row">
                                            <div class="form-check">
                                                <label class="custom-control custom-checkbox">
                                                    <input type="checkbox" class="custom-control-input">
                                                    <span class="custom-control-indicator"></span>
                                                    <span class="custom-control-description">Remember Me</span>
                                                </label>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-md-6">
                                        <div class="row">
                                            <div class="forgot-link-block">
                                                <a href="#" class="forgot-link">Forget Password?</a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="form-group">
                                    <div class="form-btn-block">
                                        <button type="submit" class="form-btn">Sign in</button>
                                    </div>
                                </div>
                            </form>
                            <div class="signin-others-option-block">
                                <h5>Not a Member? <a href="javascript:void(0)">Sign up</a></h5>
                                <p>Connect with your social media network</p>
                                <div class="social-icon-btn-group-detail">
                                    <a href="javascript:void(0)" class="icon-btn-fb">
                                        <i class="fa fa-facebook"></i> Facebook
                                    </a>
                                    <a href="javascript:void(0)" class="icon-btn-tw">
                                        <i class="fa fa-twitter"></i> Twitter
                                    </a>
                                    <a href="javascript:void(0)" class="icon-btn-gplus">
                                        <i class="fa fa-google-plus"></i> Google +
                                    </a>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- panel -->
                </div>
            </div>
        </div>
    </div>
@endsection