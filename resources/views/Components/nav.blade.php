<nav class="site-nav">
    <div class="container">
        <div class="menu-bg-wrap">
            <div class="site-navigation">
                <div class="row g-0 d-flex justify-content-between">
                    <div class="col-2">
                        {{-- <a class="text-dark" href="index.html" class="logo m-0 float-start">Blogy<span class="text-primary">.</span></a> --}}
                        <img src="{{ asset('images/icon.png') }}" alt="">
                    </div>
                    <div class="col-8 text-center">
                        

                        <ul class="js-clone-nav d-none d-lg-inline-block text-start site-menu mx-auto ">
                            <li ><a class="" class="" href="{{ url('/') }}">Home</a></li>
                            <li ><a class="" class="" href="{{ url('/about') }}">About</a></li>
                            <li ><a class="" class="" href="{{ url('/gallery') }}">Gallery</a></li>
                            <li><a class="" href="{{ url('/activity') }}">Activity</a></li>
                            <li><a class="" href="{{ url('/contact-us') }}">Contact Us</a></li>
                        </ul>
                    </div>
                    <div class="col-2 text-end">
                        <a href="#" class="burger ms-auto float-end site-menu-toggle js-menu-toggle d-inline-block d-lg-none light">
                            <span></span>
                        </a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</nav>