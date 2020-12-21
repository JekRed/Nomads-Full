    <!--Nav_Bar-->
    <div class="container">
        <nav class=" row navbar navbar-expand-lg navbar-light bg-white">
            <a class="navbar-brand" href="{{route('home')}}">
                <img src="{{url('/front_end/img/Asset_Web/home_page/logo/logo_nomads.png')}}" alt="logo Nomads">
            </a>
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navb">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navb">
                <div class="navbar-nav ml-auto mr-3">
                    <a class="nav-item nav-link active " href="{{route('home')}}">Home </a>
                    <a class="nav-item nav-link mx-md-2" href="#">Paket Travel</a>
                    <div class="nav-item dropdown">
                        <a class="nav-link dropdown-toggle" href="#" id="navbardrop" data-toggle="dropdown">
                            Services
                        </a>
                        <div class="dropdown-menu">
                            <a class="dropdown-item" href="#">Action</a>
                            <a class="dropdown-item" href="#">Another action</a>
                            <a class="dropdown-item" href="#">Something else here</a>
                        </div>
                    </div>
                    <a class="nav-item nav-link mx-md-2" href="#">Testimonial</a>
                </div>

                @guest
                    <!--Mobile Button-->
                <form class="form-inline d-sm-block d-md-none">
                    <button class="btn btn-login  my-2 my-sm-0" type="button"
                    onclick="event.preventDefault(); location.href='{{url('login')}}'">
                        Masuk
                    </button>
                </form>
                <!--Akhir Mobile Button-->

                <!--Desktop Button-->
                <form class="form-inline my-2 my-lg-0 d-none d-md-block">
                    <button class="btn btn-login btn-navbar-right my-2 my-sm-0 px-4" type="button"
                    onclick="event.preventDefault(); location.href='{{url('login')}}'">
                        Masuk
                    </button>
                </form>
                <!--Akhir Desktop Button-->
                @endguest

                 @auth
                    <!--Mobile Button-->
                <form class="form-inline d-sm-block d-md-none" action="{{url('logout')}}"
                method="POST">
                    <button class="btn btn-login  my-2 my-sm-0" type="submit">
                        @csrf
                        Keluar
                    </button>
                </form>
                <!--Akhir Mobile Button-->

                <!--Desktop Button-->
                <form class="form-inline my-2 my-lg-0 d-none d-md-block" action="{{url('logout')}}"
                method="POST">
                    <button class="btn btn-login btn-navbar-right my-2 my-sm-0 px-4" type="submit">
                        @csrf
                        Keluar
                    </button>
                </form>
                <!--Akhir Desktop Button-->
                @endauth

            </div>
        </nav>
    </div>
    <!--Akhir Nav_bar-->
