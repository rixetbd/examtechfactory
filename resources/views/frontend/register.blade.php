@extends('frontend.master')

@section('custom_css')

@endsection


@section('content')

<div class="container">
    <div class="row justify-content-center align-items-center vh-100">
        <div class="col-lg-8 col-md-8 col-sm-12">
            <div class="card shadow">
                <div class="card-title text-center border-bottom">
                    <h2 class="p-3">Register</h2>
                </div>
                <div class="card-body">
                    <form class="form" method="POST" action="{{route('frontend.signup.create')}}">
                        @csrf
                        <div class="row">
                            <div class="col-sm-12 col-md-6">
                                <label for="firstName" class="form-label">First name</label>
                                <input type="text" class="form-control" name="firstName" placeholder="Enter First name"
                                    required="">
                            </div>

                            <div class="col-sm-12 col-md-6 mt-3">
                                <label for="lastName" class="form-label">Last name</label>
                                <input type="text" class="form-control" name="lastName" placeholder="Enter Last name"
                                    required="">
                            </div>

                            <div class="col-sm-12 col-md-6 mt-3">
                                <label for="username" class="form-label">Username</label>
                                <div class="input-group has-validation">
                                    <span class="input-group-text">@</span>
                                    <input type="text" class="form-control" name="username" placeholder="Username"
                                        required="">
                                </div>
                            </div>

                            <div class="col-sm-12 col-md-6 mt-3">
                                <label for="email" class="form-label">Email</label>
                                <input type="email" class="form-control" name="email" placeholder="you@example.com">

                            </div>

                            <div class="col-sm-12 col-md-6 mt-3">
                                <label for="address" class="form-label">Phone</label>
                                <input type="text" class="form-control" name="phone" placeholder="+88017-123456"
                                    required="">
                            </div>

                            <div class="col-sm-12 col-md-6 mt-3">
                                <label for="address" class="form-label">Address</label>
                                <input type="text" class="form-control" name="address" placeholder="1234 Main St"
                                    required="">
                            </div>

                            <div class="col-sm-12 col-md-6 mt-3">
                                <label for="address" class="form-label">Password</label>
                                <input type="password" class="form-control" name="password"
                                    placeholder="Enter Your Password" required="">
                            </div>

                            <div class="col-sm-12 col-md-6 mt-3">
                                <label for="address" class="form-label">Confirm Password</label>
                                <input type="password" class="form-control" name="conpassword"
                                    placeholder="Enter Your Password" required="">
                            </div>

                            <div class="col-12 d-flex align-items-center mt-5">
                            <button class="btn btn-sm btn-primary px-5" type="submit">Sign Up</button>
                            <span class="ps-4 pe-1">Already have a account ?</span><a href="{{route('frontend.login')}}">Sign In</a>
                            </div>

                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>

@endsection
