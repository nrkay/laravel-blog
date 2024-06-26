<nav class="site-nav">
    <div class="container">
        <div class="menu-bg-wrap">
            <div class="site-navigation">
                <div class="row g-0 align-items-center">
                    <div class="col-2">
                        {{-- <a class="text-dark" href="index.html" class="logo m-0 float-start">Blogy<span class="text-primary">.</span></a> --}}
                        <img src="{{ asset('images/icon.png') }}" alt="">
                    </div>
                    <div class="col-8 text-center">
                        <form action="#" class="search-form d-inline-block d-lg-none">
                            <input type="text" class="form-control" placeholder="Search...">
                            <span class="bi-search"></span>
                        </form>

                        <ul class="js-clone-nav d-none d-lg-inline-block text-start site-menu mx-auto text-dark">
                            <li class="active text-dark"><a class="text-dark" href="{{ url('/') }}">Home</a></li>
                            <li ><a class="text-dark" class="text-dark" href="{{ url('/about') }}">About</a></li>
                            <li><a class="text-dark" href="{{ url('/activity') }}">Activity</a></li>
                            <li><a class="text-dark" href="{{ url('/contact-us') }}">Contact Us</a></li>
                        </ul>
                    </div>
                    <div class="col-2 text-end">
                        <a href="#" class="burger ms-auto float-end site-menu-toggle js-menu-toggle d-inline-block d-lg-none light">
                            <span></span>
                        </a>
                        <form action="#" class="search-form d-none d-lg-inline-block">
                            <input type="text" class="form-control" placeholder="Search...">
                            <span class="bi-search"></span>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
</nav>