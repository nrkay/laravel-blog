@extends('Layouts.index')
@section('content')
    <section class="section">
        <div class="container">

            <div class="row mb-4">
                <div class="col-sm-6">
                    <h2 class="posts-entry-title">Gallery</h2>
                </div>
                <div class="col-sm-6 text-sm-end"><a href="category.html" class="read-more">View All</a></div>
            </div>

            <div class="row">
                <div class="col-lg-4 mb-4">
                    <div class="post-entry-alt">
                            <a href="{{ url('/gallerydetail') }}" class="img-link"><img src="{{ asset('images/Image-4.png') }}" alt="Image"
                                class="img-fluid"></a>
                            <h2><a href="{{ url('/gallerydetail') }}">Image Title Example 4</a></h2>
                    </div>
                </div>
                <div class="col-lg-4 mb-4">
                    <div class="post-entry-alt">
                            <a href="{{ url('/contact-us') }}" class="img-link"><img src="{{ asset('images/Image-2.png') }}" alt="Image"
                                class="img-fluid"></a>
                            <h2><a href="single.html">Image Title Example 2</a></h2>
                    </div>
                </div>
                <div class="col-lg-4 mb-4">
                    <div class="post-entry-alt">
                            <a href="{{ url('/contact-us') }}" class="img-link"><img src="{{ asset('images/Image-3.png') }}" alt="Image"
                                class="img-fluid"></a>
                            <h2><a href="single.html">Image Title Example 3</a></h2>
                    </div>
                </div>
                <div class="col-lg-4 mb-4">
                    <div class="post-entry-alt">
                            <a href="{{ url('/contact-us') }}" class="img-link"><img src="{{ asset('images/Image-1.png') }}" alt="Image"
                                class="img-fluid"></a>
                            <h2><a href="single.html">Image Title Example 1</a></h2>
                    </div>
                </div>
                <div class="col-lg-4 mb-4">
                    <div class="post-entry-alt">
                            <a href="{{ url('/contact-us') }}" class="img-link"><img src="{{ asset('images/Image-5.png') }}" alt="Image"
                                class="img-fluid"></a>
                            <h2><a href="single.html">Image Title Example 5</a></h2>
                    </div>
                </div>
                <div class="col-lg-4 mb-4">
                    <div class="post-entry-alt">
                            <a href="{{ url('/contact-us') }}" class="img-link"><img src="{{ asset('images/Image-6.png') }}" alt="Image"
                                class="img-fluid"></a>
                            <h2><a href="single.html">Image Title Example 6</a></h2>
                    </div>
                </div>
                <div class="col-lg-4 mb-4">
                    <div class="post-entry-alt">
                            <a href="{{ url('/contact-us') }}" class="img-link"><img src="{{ asset('images/Image-7.png') }}" alt="Image"
                                class="img-fluid"></a>
                            <h2><a href="single.html">Image Title Example 7</a></h2>
                    </div>
                </div>
                <div class="col-lg-4 mb-4">
                    <div class="post-entry-alt">
                            <a href="{{ url('/contact-us') }}" class="img-link"><img src="{{ asset('images/Image-8.png') }}" alt="Image"
                                class="img-fluid"></a>
                            <h2><a href="single.html">Image Title Example 8</a></h2>
                    </div>
                </div>
                <div class="col-lg-4 mb-4">
                    <div class="post-entry-alt">
                            <a href="{{ url('/contact-us') }}" class="img-link"><img src="{{ asset('images/Image-9.png') }}" alt="Image"
                                class="img-fluid"></a>
                            <h2><a href="single.html">Image Title Example 9</a></h2>
                    </div>
                </div>
                <div class="col-lg-4 mb-4">
                    <div class="post-entry-alt">
                            <a href="{{ url('/contact-us') }}" class="img-link"><img src="{{ asset('images/Image-10.png') }}" alt="Image"
                                class="img-fluid"></a>
                            <h2><a href="single.html">Image Title Example 10</a></h2>
                    </div>
                </div>
                <div class="col-lg-4 mb-4">
                    <div class="post-entry-alt">
                            <a href="{{ url('/contact-us') }}" class="img-link"><img src="{{ asset('images/Image-11.png') }}" alt="Image"
                                class="img-fluid"></a>
                            <h2><a href="single.html">Image Title Example 11</a></h2>
                    </div>
                </div>
                <div class="col-lg-4 mb-4">
                    <div class="post-entry-alt">
                            <a href="{{ url('/contact-us') }}" class="img-link"><img src="{{ asset('images/Image.png') }}" alt="Image"
                                class="img-fluid"></a>
                            <h2><a href="single.html">Image Title Example 12</a></h2>
                    </div>
                </div>
            </div>

        </div>
    </section>
@endsection
