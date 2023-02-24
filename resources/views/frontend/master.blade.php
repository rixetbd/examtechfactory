@php
$currentRouteName = Route::currentRouteName();
@endphp

<!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css">
    <link rel="stylesheet" href="{{asset('assets/sweetalert2/sweetalert2.min.css')}}">

    <title>Exam</title>

    <style>
        @import url(https://unpkg.com/@webpixels/css@1.0/dist/index.css);

    </style>

    @yield('custom_css')


</head>

<body>

    <nav
        class="navbar navbar-expand-lg navbar-dark bg-dark px-0 py-3 {{($currentRouteName == 'frontend.login'?'d-none':'')}} {{($currentRouteName == 'frontend.register'?'d-none':'')}}">
        <div class="container-xl">
            <!-- Logo -->
            <a class="navbar-brand" href="#">
                ETest
            </a>
            <!-- Navbar toggle -->
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarCollapse"
                aria-controls="navbarCollapse" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <!-- Collapse -->
            <div class="collapse navbar-collapse" id="navbarCollapse">
                <!-- Nav -->
                <div class="navbar-nav mx-lg-auto">
                    <a class="nav-item nav-link active" href="{{url('/')}}" aria-current="page">Home</a>
                    <a class="nav-item nav-link" href="#">Package</a>
                </div>


                @auth('memberAuth')
                <div class="navbar-nav ms-lg-4 align-items-center">
                    <a
                        class="px-3 text-light">{{Auth::guard('memberAuth')->user()->firstname.' '.Auth::guard('memberAuth')->user()->lastname}}</a>
                    <a class="btn btn-sm btn-danger" href="{{ route('frontend.logout') }}"
                        onclick="event.preventDefault(); document.getElementById('logout-form').submit();">
                        Logout
                    </a>

                    <form id="logout-form" action="{{ route('frontend.logout') }}" method="POST" class="d-none">
                        @csrf
                    </form>

                </div>

                @else

                <!-- Right navigation -->
                <div class="navbar-nav ms-lg-4">
                    <a class="nav-item nav-link" href="{{route('frontend.login')}}">Sign in</a>
                </div>
                <!-- Action -->
                <div class="d-flex align-items-lg-center mt-3 mt-lg-0">
                    <a href="{{route('frontend.register')}}" class="btn btn-sm btn-primary w-full w-lg-auto">
                        Register
                    </a>
                </div>

                @endauth

            </div>
        </div>
    </nav>

    @yield('content')


    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js"></script>
    <script src="{{asset('assets/sweetalert2/sweetalert2.all.js')}}"></script>
    <script src="https://code.jquery.com/jquery-3.6.3.min.js"></script>
    <script>
        $('.authLog').click(function () {
            Swal.fire({
                title: 'You need to login first.',
                icon: 'warning',
                showCancelButton: true,
                confirmButtonColor: '#3085d6',
                cancelButtonColor: '#d33',
                confirmButtonText: 'Go to Login'
            }).then((result) => {
                if (result.isConfirmed) {
                    let url = `{{route('frontend.login')}}`;
                    window.location = url;
                }
            })

        })

    </script>

</body>

</html>
