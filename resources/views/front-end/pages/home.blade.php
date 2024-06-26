@extends('Layouts.index')
@section('content')
    <section class="section">
        <div class="container">
            <div class="title text-black text-center mb-3">
                <h1><b><i>Selamaik</i> Datang di <i>Barando</i> Hendri Septa Padang</b></h1>
            </div>
            <div class="row mt-5">
                <div class="col-lg-6"></div>
                <div class="col-lg-6 text-black">
                    <h4><b>Hendri Septa</b></h4>
                    <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore
                        et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut
                        aliquip ex ea. Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor
                        incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation
                        ullamco laboris nisi ut aliquip ex ea. </p>
                </div>
            </div>
        </div>
    </section>
    <section class="section">
        <div class="container">

            <div class="row mb-4">
                <div class="col-sm-6">
                    <h2 class="posts-entry-title">Aktivity</h2>
                </div>
                <div class="col-sm-6 text-sm-end"><a href="{{ url('/activity') }}" class="read-more">View All</a></div>
            </div>

            <div class="row">
                <div class="col-lg-4 mb-4">
                    <div class="post-entry-alt">
                        <a href="single.html" class="img-link"><img src="images/img_7_horizontal.jpg" alt="Image"
                                class="img-fluid"></a>
                        <div class="excerpt">


                            <h2><a href="single.html">Startup vs corporate: What job suits you best?</a></h2>
                            <div class="post-meta align-items-center text-left clearfix">
                                <figure class="author-figure mb-0 me-3 float-start"><img
                                        src="{{ asset('images/activity_1.png') }}" alt="Image" class="img-fluid">
                                </figure>
                                <span class="d-inline-block mt-1">By <a href="#">David Anderson</a></span>
                                <span>&nbsp;-&nbsp; July 19, 2019</span>
                            </div>

                            <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Quo sunt tempora dolor laudantium
                                sed optio, explicabo ad deleniti impedit facilis fugit recusandae! Illo, aliquid, dicta
                                beatae quia porro id est.</p>
                            <p><a href="#" class="read-more">Continue Reading</a></p>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 mb-4">
                    <div class="post-entry-alt">
                        <a href="single.html" class="img-link"><img src="images/img_6_horizontal.jpg" alt="Image"
                                class="img-fluid"></a>
                        <div class="excerpt">


                            <h2><a href="single.html">Startup vs corporate: What job suits you best?</a></h2>
                            <div class="post-meta align-items-center text-left clearfix">
                                <figure class="author-figure mb-0 me-3 float-start"><img src="images/person_2.jpg"
                                        alt="Image" class="img-fluid"></figure>
                                <span class="d-inline-block mt-1">By <a href="#">David Anderson</a></span>
                                <span>&nbsp;-&nbsp; July 19, 2019</span>
                            </div>

                            <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Quo sunt tempora dolor laudantium
                                sed optio, explicabo ad deleniti impedit facilis fugit recusandae! Illo, aliquid, dicta
                                beatae quia porro id est.</p>
                            <p><a href="#" class="read-more">Continue Reading</a></p>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 mb-4">
                    <div class="post-entry-alt">
                        <a href="single.html" class="img-link"><img src="images/img_5_horizontal.jpg" alt="Image"
                                class="img-fluid"></a>
                        <div class="excerpt">


                            <h2><a href="single.html">Startup vs corporate: What job suits you best?</a></h2>
                            <div class="post-meta align-items-center text-left clearfix">
                                <figure class="author-figure mb-0 me-3 float-start"><img src="images/person_3.jpg"
                                        alt="Image" class="img-fluid"></figure>
                                <span class="d-inline-block mt-1">By <a href="#">David Anderson</a></span>
                                <span>&nbsp;-&nbsp; July 19, 2019</span>
                            </div>

                            <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Quo sunt tempora dolor laudantium
                                sed optio, explicabo ad deleniti impedit facilis fugit recusandae! Illo, aliquid, dicta
                                beatae quia porro id est.</p>
                            <p><a href="#" class="read-more">Continue Reading</a></p>
                        </div>
                    </div>
                </div>



            </div>

        </div>
    </section>
@endsection
