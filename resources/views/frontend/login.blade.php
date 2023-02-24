@extends('frontend.master')

@section('custom_css')

@endsection


@section('content')

<div class="container">
    <div class="row justify-content-center align-items-center vh-100">
        <div class="col-lg-5 col-md-7 col-sm-12">
            <div class="card shadow">
                <div class="card-title text-center border-bottom">
                    <h2 class="p-3">Login</h2>
                </div>
                <div class="card-body">
                    <form class="form" method="POST" action="{{route('frontend.signup.check')}}">
                        @csrf
                        <div class="mb-4">
                            <label for="username" class="form-label">Username/Email</label>
                            <input type="text" class="form-control" name="username" />
                        </div>
                        <div class="mb-4">
                            <label for="password" class="form-label">Password</label>
                            <input type="password" class="form-control" name="password" />
                        </div>
                        <div class="mb-4">
                            <input type="checkbox" class="form-check-input" id="remember" />
                            <label for="remember" class="form-label">Remember Me</label>
                        </div>
                        <div class="d-flex align-items-center">
                            <button type="submit" class="btn text-dark btn-success">Login</button>
                            <span class="ps-4 pe-1">Create a account ?</span><a href="{{route('frontend.register')}}">Register</a>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>

@endsection
