@extends('Layouts.index')
@section('content')
    <div class="section">
        <div class="px-5 mx-5">
            <div class="row">
                <div class="col-lg-1"></div>
                <div class="col-lg-3  d-flex justify-content-center align-items-center mb-2">
                        <img class="w-75" src="{{ asset('images/contact.png') }}" alt="">
                </div>
                <div class="row col-lg-7">
                    <div class="col-lg-6 mb-5 mb-lg-0" data-aos="fade-up" data-aos-delay="100">
                        <div class="contact-info">
                            <div class="address mt-2">
                                <i style="width: 30px; height: 30px;" class="icon-room"></i>
                                <h4 class="mb-2">Location:</h4>
                                <p>43 Raymouth Rd. Baltemoer,<br> London 3910</p>
                            </div>

                            <div class="open-hours mt-4">
                                <i style="width: 30px; height: 30px;" class="icon-clock-o"></i>
                                <h4 class="mb-2">Open Hours:</h4>
                                <p>
                                    Sunday-Friday:<br>
                                    11:00 AM - 2300 PM
                                </p>
                            </div>

                            <div class="email mt-4">
                                <i style="width: 30px; height: 30px;" class="icon-envelope"></i>
                                <h4 class="mb-2">Email:</h4>
                                <p>info@Untree.co</p>
                            </div>

                            <div class="phone mt-4">
                                <i style="width: 30px; height: 30px;" class="icon-phone"></i>
                                <h4 class="mb-2">Call:</h4>
                                <p>+1 1234 55488 55</p>
                            </div>

                        </div>
                    </div>
                    <div class="col-lg-6" data-aos="fade-up" data-aos-delay="200">
                        <form action="#">
                            <div class="row">
                                <div class="col-6 mb-3">
                                    <input type="text" class="form-control" placeholder="Your Name">
                                </div>
                                <div class="col-6 mb-3">
                                    <input type="email" class="form-control" placeholder="Your Email">
                                </div>
                                <div class="col-12 mb-3">
                                    <input type="text" class="form-control" placeholder="Subject">
                                </div>
                                <div class="col-12 mb-3">
                                    <textarea name="" id="" cols="30" rows="7" class="form-control" placeholder="Message"></textarea>
                                </div>

                                <div class="col-6">
                                    <input type="submit" value="Send Message" class="btn btn-primary btn-sm">
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
            </div>

        </div>
    </div>
@endsection
