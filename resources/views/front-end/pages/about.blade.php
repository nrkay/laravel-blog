@extends('Layouts.index')
@section('content')
<div class="section">
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-lg-4  mb-4 mb-lg-0 d-flex justify-content-end">
                <div class="text-center">
                    <img src="{{ asset('images/about.png') }}" alt="Image" class="img-fluid rounded w-75
                    ">
                </div>
               
            </div>
            <div class="col-lg-6 ps-lg-2">
                <div class="mb-5">
                    <h2 class="text-black h4">About</h2>
                    <p>Far far away, behind the word mountains, far from the countries Vokalia and Consonantia, there live the blind texts.</p>
                </div>
                <div class="d-flex mb-3 service-alt">
                    <div>
                        <span class="bi-wallet-fill me-4"></span>
                    </div>
                    <div>
                        <h3>Building your blog</h3>
                        <p>Far far away, behind the word mountains, far from the countries Vokalia and Consonantia, there live the blind texts.</p>
                    </div>
                </div>

                <div class="d-flex mb-3 service-alt">
                    <div>
                        <span class="bi-pie-chart-fill me-4"></span>
                    </div>
                    <div>
                        <h3>Resources and insights</h3>
                        <p>Far far away, behind the word mountains, far from the countries Vokalia and Consonantia, there live the blind texts.</p>
                    </div>
                </div>

                <div class="d-flex mb-3 service-alt">
                    <div>
                        <span class="bi-bag-check-fill me-4"></span>
                    </div>
                    <div>
                        <h3>Blog just for you</h3>
                        <p>Far far away, behind the word mountains, far from the countries Vokalia and Consonantia, there live the blind texts.</p>
                    </div>
                </div>

            </div>

        </div>
    </div>
</div>
    
@endsection