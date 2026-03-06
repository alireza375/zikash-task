@php
    $route = Route::current()->getName();
@endphp

@php
$user = Auth::id();
@endphp

<div class="hero_area">

    <!-- header section strats -->
    <header class="header_section">
        <div class="header_bottom">
            <div class="container-fluid">
                <nav class="navbar navbar-expand-lg custom_nav-container ">
                    <a class="navbar-brand" href="{{ url('/') }}">
                        <img src="images/logo.png" alt="">
                    </a>
                    <button class="navbar-toggler" type="button" data-toggle="collapse"
                        data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent"
                        aria-expanded="false" aria-label="Toggle navigation">
                        <span class=""> </span>
                    </button>

                    <div class="collapse navbar-collapse" id="navbarSupportedContent">
                        <div class="container-fluid fixed-top">

                            <div class="container px-0">
                                <nav class="bg-white navbar navbar-light navbar-expand-xl">
                                    <a href="{{ url('/') }}" class="navbar-brand">
                                        <h1 class="text-primary display-6">Fruitables</h1>
                                    </a>
                                    <button class="px-3 py-2 navbar-toggler" type="button" data-bs-toggle="collapse"
                                        data-bs-target="#navbarCollapse">
                                        <span class="fa fa-bars text-primary"></span>
                                    </button>
                                    <div class="bg-white collapse navbar-collapse" id="navbarCollapse">
                                        <div class="mx-auto navbar-nav">
                                            <a href="{{ url('/') }}" class="nav-item nav-link active">Home</a>
                                            <a href="#" class="nav-item nav-link">Product</a>
                                            <a href="#" class="nav-item nav-link">Contact</a>
                                        </div>
                                       
                                        <div class="m-3 d-flex me-0">
                                            <div class="quote_btn-container">

                                                @auth
                                                    <a href="{{ route('admin.admin_dashboard') }}">
                                                        <i class="fa fa-user" aria-hidden="true"></i>
                                                        <span>Dashboard</span>
                                                    </a>
                                                @else
                                                    <a href="{{ route('login') }}">
                                                        <i class="fa fa-user" aria-hidden="true"></i>
                                                        <span>Login</span>
                                                    </a>
                                                     <a href="{{ route('register') }}">
                                                        <i class="fa fa-user" aria-hidden="true"></i>
                                                        <span>
                                                            Sign Up
                                                        </span>
                                                    </a>
                                                @endauth

                                            </div>
                                        </div>
                                    </div>
                                </div>
                        </div>
            </nav>
        </div>


    </div>
    </nav>
</div>
</div>
</header>
</div>
