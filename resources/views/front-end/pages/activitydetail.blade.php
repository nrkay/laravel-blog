@extends('Layouts.index')
@section('content')
    <section class="section">
        <div class="container">
            <h1 style="color:black; font-weight:bold" class="mb-4">Lorem Ipsum Dolor Sit Amet Sed Do Consectetur Adipiscing Elit</h1>
            <div class="post-meta align-items-center text-left clearfix">
                <figure class="author-figure mb-0 me-3 float-start"><img src="images/person_2.jpg"
                        alt="Image" class="img-fluid"></figure>
                <span class="d-inline-block mt-1">By <a href="#">David Anderson</a></span>
                <span>&nbsp;-&nbsp; July 19, 2019</span>
            </div>
            <img src=" {{ asset('images/detail-1.png') }}" alt="Image" class="img-fluid mb-4">
            <div class="row">
                <p style="font-weight:100">Description of the picture</p>
                <div class="col-lg-6 mb-4">
                    <p style="color: black">
                        Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea. Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea. 
                    </p>
                    <p style="color: black"> 
                        Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea. Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea. 
                    </p>
                </div>
                <div class="col-lg-6 mb-4">
                    <p style="color: black">
                        Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea. Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea. 
                    </p>
                    <p style="color: black">
                        Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea. Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea. 
                    </p>
                </div>
            </div>
        </div>
    </section>
@endsection