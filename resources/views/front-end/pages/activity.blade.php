@extends('Layouts.index')
@section('content')
    <section class="section">
        <div class="container">

            <div class="row mb-4">
                <div class="col-sm-6">
                    <h2 class="posts-entry-title">Activity</h2>
                </div>
                <div class="col-sm-6 text-sm-end"><a href="category.html" class="read-more">View All</a></div>
            </div>

            <div class="row">
                <div class="col-lg-6 mb-4">
                    <div class="post-entry-alt">
                        <a href="{{ url('/activitydetail') }}" class="img-link"><img src="{{ asset('images/Image1.png') }}" alt="Image"
                                class="img-fluid"></a>
                            <h2><a href="{{ url('/activitydetail') }}">Activity Title 1</a></h2>
                            <div class="post-meta align-items-center text-left clearfix">
                                <figure class="author-figure mb-0 me-3 float-start"><img
                                        src="{{ asset('images/activity_1.png') }}" alt="Image" class="img-fluid">
                                </figure>
                                <span class="d-inline-block mt-1">By <a href="#">David Anderson</a></span>
                                <span>&nbsp;-&nbsp; July 19, 2019</span>
                            </div>

                            <p class="">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Quo sunt tempora dolor laudantium
                                sed optio, explicabo ad deleniti impedit facilis fugit recusandae! Illo, aliquid, dicta
                                beatae quia porro id est.</p>
                            <p><a href="{{ url('/activitydetail') }}" class="read-more">Continue Reading</a></p>
                    </div>
                </div>
                <div class="col-lg-6 mb-4">
                    <div class="post-entry-alt">
                        <a href="{{ url('/activitydetail') }}" class="img-link"><img src="{{ asset('images/Image2.png') }}" alt="Image"
                                class="img-fluid"></a>
                            <h2><a href="{{ url('/activitydetail') }}">Activity Title 2</a></h2>
                            <div class="post-meta align-items-center text-left clearfix">
                                <figure class="author-figure mb-0 me-3 float-start"><img
                                        src="{{ asset('images/activity_1.png') }}" alt="Image" class="img-fluid">
                                </figure>
                                <span class="d-inline-block mt-1">By <a href="#">David Anderson</a></span>
                                <span>&nbsp;-&nbsp; July 19, 2019</span>
                            </div>

                            <p class="">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Quo sunt tempora dolor laudantium
                                sed optio, explicabo ad deleniti impedit facilis fugit recusandae! Illo, aliquid, dicta
                                beatae quia porro id est.</p>
                            <p><a href="{{ url('/activitydetail') }}" class="read-more">Continue Reading</a></p>
                    </div>
                </div>
                <div class="col-lg-6 mb-4">
                    <div class="post-entry-alt">
                        <a href="{{ url('/activitydetail') }}" class="img-link"><img src="{{ asset('images/Image3.png') }}" alt="Image"
                                class="img-fluid"></a>
                            <h2><a href="{{ url('/activitydetail') }}">Activity Title 3</a></h2>
                            <div class="post-meta align-items-center text-left clearfix">
                                <figure class="author-figure mb-0 me-3 float-start"><img
                                        src="{{ asset('images/activity_1.png') }}" alt="Image" class="img-fluid">
                                </figure>
                                <span class="d-inline-block mt-1">By <a href="#">David Anderson</a></span>
                                <span>&nbsp;-&nbsp; July 19, 2019</span>
                            </div>

                            <p class="">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Quo sunt tempora dolor laudantium
                                sed optio, explicabo ad deleniti impedit facilis fugit recusandae! Illo, aliquid, dicta
                                beatae quia porro id est.</p>
                            <p><a href="{{ url('/activitydetail') }}" class="read-more">Continue Reading</a></p>
                    </div>
                </div>
                <div class="col-lg-6 mb-4">
                    <div class="post-entry-alt">
                        <a href="{{ url('/activitydetail') }}" class="img-link"><img src="{{ asset('images/Image4.png') }}" alt="Image"
                                class="img-fluid"></a>
                            <h2><a href="{{ url('/activitydetail') }}">Activity Title 4</a></h2>
                            <div class="post-meta align-items-center text-left clearfix">
                                <figure class="author-figure mb-0 me-3 float-start"><img
                                        src="{{ asset('images/activity_1.png') }}" alt="Image" class="img-fluid">
                                </figure>
                                <span class="d-inline-block mt-1">By <a href="#">David Anderson</a></span>
                                <span>&nbsp;-&nbsp; July 19, 2019</span>
                            </div>

                            <p class="">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Quo sunt tempora dolor laudantium
                                sed optio, explicabo ad deleniti impedit facilis fugit recusandae! Illo, aliquid, dicta
                                beatae quia porro id est.</p>
                            <p><a href="{{ url('/activitydetail') }}" class="read-more">Continue Reading</a></p>
                    </div>
                </div>
                <div class="col-lg-6 mb-4">
                    <div class="post-entry-alt">
                        <a href="{{ url('/activitydetail') }}" class="img-link"><img src="{{ asset('images/Image1.png') }}" alt="Image"
                                class="img-fluid"></a>
                            <h2><a href="{{ url('/activitydetail') }}">Activity Title 5</a></h2>
                            <div class="post-meta align-items-center text-left clearfix">
                                <figure class="author-figure mb-0 me-3 float-start"><img
                                        src="{{ asset('images/activity_1.png') }}" alt="Image" class="img-fluid">
                                </figure>
                                <span class="d-inline-block mt-1">By <a href="#">David Anderson</a></span>
                                <span>&nbsp;-&nbsp; July 19, 2019</span>
                            </div>

                            <p class="">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Quo sunt tempora dolor laudantium
                                sed optio, explicabo ad deleniti impedit facilis fugit recusandae! Illo, aliquid, dicta
                                beatae quia porro id est.</p>
                            <p><a href="{{ url('/activitydetail') }}" class="read-more">Continue Reading</a></p>
                    </div>
                </div>
                <div class="col-lg-6 mb-4">
                    <div class="post-entry-alt">
                        <a href="{{ url('/activitydetail') }}" class="img-link"><img src="{{ asset('images/Image2.png') }}" alt="Image"
                                class="img-fluid"></a>
                            <h2><a href="{{ url('/activitydetail') }}">Activity Title 6</a></h2>
                            <div class="post-meta align-items-center text-left clearfix">
                                <figure class="author-figure mb-0 me-3 float-start"><img
                                        src="{{ asset('images/activity_1.png') }}" alt="Image" class="img-fluid">
                                </figure>
                                <span class="d-inline-block mt-1">By <a href="#">David Anderson</a></span>
                                <span>&nbsp;-&nbsp; July 19, 2019</span>
                            </div>

                            <p class="">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Quo sunt tempora dolor laudantium
                                sed optio, explicabo ad deleniti impedit facilis fugit recusandae! Illo, aliquid, dicta
                                beatae quia porro id est.</p>
                            <p><a href="{{ url('/activitydetail') }}" class="read-more">Continue Reading</a></p>
                    </div>
                </div>
                <div class="col-lg-6 mb-4">
                    <div class="post-entry-alt">
                        <a href="{{ url('/activitydetail') }}" class="img-link"><img src="{{ asset('images/Image7.png') }}" alt="Image"
                                class="img-fluid"></a>
                            <h2><a href="{{ url('/activitydetail') }}">Activity Title 7</a></h2>
                            <div class="post-meta align-items-center text-left clearfix">
                                <figure class="author-figure mb-0 me-3 float-start"><img
                                        src="{{ asset('images/activity_1.png') }}" alt="Image" class="img-fluid">
                                </figure>
                                <span class="d-inline-block mt-1">By <a href="#">David Anderson</a></span>
                                <span>&nbsp;-&nbsp; July 19, 2019</span>
                            </div>

                            <p class="">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Quo sunt tempora dolor laudantium
                                sed optio, explicabo ad deleniti impedit facilis fugit recusandae! Illo, aliquid, dicta
                                beatae quia porro id est.</p>
                            <p><a href="{{ url('/activitydetail') }}" class="read-more">Continue Reading</a></p>
                    </div>
                </div>
                <div class="col-lg-6 mb-4">
                    <div class="post-entry-alt">
                        <a href="{{ url('/activitydetail') }}" class="img-link"><img src="{{ asset('images/Image8.png') }}" alt="Image"
                                class="img-fluid"></a>
                            <h2><a href="{{ url('/activitydetail') }}">Activity Title 8</a></h2>
                            <div class="post-meta align-items-center text-left clearfix">
                                <figure class="author-figure mb-0 me-3 float-start"><img
                                        src="{{ asset('images/activity_1.png') }}" alt="Image" class="img-fluid">
                                </figure>
                                <span class="d-inline-block mt-1">By <a href="#">David Anderson</a></span>
                                <span>&nbsp;-&nbsp; July 19, 2019</span>
                            </div>

                            <p class="">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Quo sunt tempora dolor laudantium
                                sed optio, explicabo ad deleniti impedit facilis fugit recusandae! Illo, aliquid, dicta
                                beatae quia porro id est.</p>
                            <p><a href="{{ url('/activitydetail') }}" class="read-more">Continue Reading</a></p>
                    </div>
                </div>
                <div class="col-lg-6 mb-4">
                    <div class="post-entry-alt">
                        <a href="{{ url('/activitydetail') }}" class="img-link"><img src="{{ asset('images/Image1.png') }}" alt="Image"
                                class="img-fluid"></a>
                            <h2><a href="{{ url('/activitydetail') }}">Activity Title 1</a></h2>
                            <div class="post-meta align-items-center text-left clearfix">
                                <figure class="author-figure mb-0 me-3 float-start"><img
                                        src="{{ asset('images/activity_1.png') }}" alt="Image" class="img-fluid">
                                </figure>
                                <span class="d-inline-block mt-1">By <a href="#">David Anderson</a></span>
                                <span>&nbsp;-&nbsp; July 19, 2019</span>
                            </div>

                            <p class="">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Quo sunt tempora dolor laudantium
                                sed optio, explicabo ad deleniti impedit facilis fugit recusandae! Illo, aliquid, dicta
                                beatae quia porro id est.</p>
                            <p><a href="{{ url('/activitydetail') }}" class="read-more">Continue Reading</a></p>
                    </div>
                </div>
                <div class="col-lg-6 mb-4">
                    <div class="post-entry-alt">
                        <a href="{{ url('/activitydetail') }}" class="img-link"><img src="{{ asset('images/Image1.png') }}" alt="Image"
                                class="img-fluid"></a>
                            <h2><a href="{{ url('/activitydetail') }}">Activity Title 1</a></h2>
                            <div class="post-meta align-items-center text-left clearfix">
                                <figure class="author-figure mb-0 me-3 float-start"><img
                                        src="{{ asset('images/activity_1.png') }}" alt="Image" class="img-fluid">
                                </figure>
                                <span class="d-inline-block mt-1">By <a href="#">David Anderson</a></span>
                                <span>&nbsp;-&nbsp; July 19, 2019</span>
                            </div>

                            <p class="">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Quo sunt tempora dolor laudantium
                                sed optio, explicabo ad deleniti impedit facilis fugit recusandae! Illo, aliquid, dicta
                                beatae quia porro id est.</p>
                            <p><a href="{{ url('/activitydetail') }}" class="read-more">Continue Reading</a></p>
                    </div>
                </div>
                
            </div>

        </div>
    </section>
@endsection
