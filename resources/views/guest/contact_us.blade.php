@extends('layouts.main')
@section('title', $title)
@push('css')
@endpush

@section('content')
    <section>
        <div class="bannerimg cover-image bg-background3 sptb-2 bg-white"
            data-bs-image-src="{{ asset('assets/images/banners/banner2.jpg') }}">
            <div class="header-text mb-0">
                <div class="container">
                    <div class="text-center text-white ">
                        <h1 class="">Contact Us</h1>
                        <ol class="breadcrumb text-center">
                            <li class="breadcrumb-item"><a href="index.php">Home</a></li>
                            <li class="breadcrumb-item  text-white">Contact Us</li>
                        </ol>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section class="sptb bg-white">
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <div class="row text-white">
                        <div class="col-lg-6 col-md-12">
                            <div class="card">
                                <div class="support-service bg-warning ">
                                    <i class="fa fa-phone"></i>
                                    <h6>(044) 49529141</h6>
                                    <P>Free Support!</P>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-6 col-md-12">
                            <div class="card">
                                <div class="support-service bg-pink-dark  ">
                                    <i class="fa fa-clock-o"></i>
                                    <h6>Mon-Sat(10:00-19:00)</h6>
                                    <p>Working Hours!</p>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-6 col-md-12">
                            <div class="card">
                                <div class="support-service bg-pink-dark ">
                                    <i class="fa fa-map-marker"></i>
                                    <h6> Vadapalani,Chennai,Tamil Nadu 600026</h6>

                                </div>
                            </div>
                        </div>
                        <div class="col-lg-6 col-md-12">
                            <div class="card mb-0">
                                <div class="support-service bg-warning ">
                                    <i class="fa fa-envelope-o"></i>
                                    <h6> info@hovee.in</h6>
                                    <p>Support us!</p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <div class="sptb">
        <div class="container">
            <div class="row">
                <div class="col-md-6 map-page">
                    <div class="map1">
                        <div class="map-header-layer" id="map2"></div>
                    </div>
                </div>
                <div class="col-md-6 contact-page">
                    <div class="card mb-0 shadow-lg">
                        <div class="card-body ">
                            <div class="form-group">
                                <input type="text" class="form-control  py-5" id="name1" placeholder="Your Name">
                            </div>
                            <div class="form-group">
                                <input type="email" class="form-control  py-5" id="email" placeholder="Email Address">
                            </div>
                            <div class="form-group">
                                <textarea class="form-control  " name="example-textarea-input" rows="6" cols="" placeholder="Message"></textarea>
                            </div>
                            <div class="text-start">
                                <a href="#" class="btn btn-secondary ">Send Message</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

@endsection


@push('scripts')
@endpush
