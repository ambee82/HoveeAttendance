@extends('layouts.main')
@section('title', $title)
@push('css')
    
@endpush

@section('content')
    <section>
        <div class="banner-1 cover-image sptb-2 sptb-tab bg-background2 animation-zidex bg-white"
            data-bs-image-src="{{ asset('assets/images/banners/banner2.jpg') }}">
            <div class="svg-home">
                <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 1440 250">
                    <path fill="#fff" fill-opacity="1"
                        d="M0,192L60,202.7C120,213,240,235,360,208C480,181,600,107,720,74.7C840,43,960,53,1080,74.7C1200,96,1320,128,1380,144L1440,160L1440,320L1380,320C1320,320,1200,320,1080,320C960,320,840,320,720,320C600,320,480,320,360,320C240,320,120,320,60,320L0,320Z">
                    </path>
                </svg>
            </div>
            <div class="header-text mb-0">
                <div class="container">
                    <div class="text-center text-white ">
                        <div class="row">
                            <div class="col-md-7 ">
                                <div class="hello-1 ">
                                    <h1 class="text-start text-white fw-bold header-banner-text">The World's Largest
                                        Selection of Courses</h1>
                                    <p class="text-start text-white"> It is a long established fact that a
                                        reader will be distracted by
                                        the readable.</p>
                                    <div class="row">
                                        <div class="col-xl-5 col-lg-5 col-md-5 col-sm-5">
                                            <div class="input-group">
                                                <input type="text" class="form-control br-tl-3  br-bl-3"
                                                    placeholder="Search">
                                                <button type="button" class="btn bg-secondary text-white px-3 ">
                                                    Search
                                                </button>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-5">
                                <div class=" mx-auto mb-0">
                                    <img src="{{ asset('assets/images/photos/main-1.png') }}"
                                        class="img-thumbnail-1 rounded-circle alt=" alt="">
                                </div>
                            </div>
                        </div>

                    </div>

                </div>
            </div>
        </div>
    </section>

    <section class="sptb bg-white">
        <div class="container">
            <div class="section-title center-block text-start">
                <h2>Our Services</h2>
            </div>
            <div class="row">
                <div class="col-lg-12">
                    <div class=" text-center">
                        <div class="wideget-user-tab ">
                            <div class="tab-menu-heading ">
                                <div class="tabs-menu1  mx-auto pb-5">
                                    <ul class="nav ">
                                        <li class><a href="#tab-51" class="active fw-bold" data-bs-toggle="tab">Rent</a>
                                        </li>
                                        <li><a href="#tab-61" data-bs-toggle="tab" class=" fw-bold">E-attendance</a></li>
                                        <li><a href="#tab-71" data-bs-toggle="tab" class=" fw-bold ">Ride</a></li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="tab-content">
                        <div class="tab-pane active" id="tab-51">
                            <div class="col-md-12">
                                <div class="card bg-background-1">
                                    <div class="card-body ">
                                        <div class="d-flex team-section-2">
                                            <div class="row">
                                                <div class="col-xl-3 col-md-6 mx-auto">
                                                    <div class="team-img-2 text-center">
                                                        <img src="{{ asset('assets/images/media/3.png') }}"
                                                            class="img-thumbnail-3 bg-transparent" alt="">
                                                    </div>
                                                </div>
                                                <div class="col-xl-9 col-sm-6">
                                                    <div class="ms-lg-5 ms-xs-0 text-white card-day">
                                                        <h2 class="font-weight-bold dark-grey-text mt-2 pb-5">Rent
                                                            Properties</h2>

                                                        <p> <i class="fa fa-quote-left pe-3"></i>
                                                            Rent is the payment made by a tenant to a landlord in
                                                            exchange for the use of property or premises. It is
                                                            typically agreed upon in a lease or rental agreement and is
                                                            usually paid on a monthly basis.</p>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="tab-pane " id="tab-61">
                            <div class="col-md-12">
                                <div class="card bg-background-1">
                                    <div class="card-body">
                                        <div class="d-flex team-section-2">
                                            <div class="row">
                                                <div class="col-xl-3 col-md-6 mx-auto">
                                                    <div class="team-img-2 text-center">
                                                        <img src="{{ asset('assets/images/media/2.png') }}"
                                                            class="img-thumbnail-3 bg-transparent" alt="">
                                                    </div>
                                                </div>
                                                <div class="col-xl-9 col-sm-6">
                                                    <div class="ms-lg-5 ms-xs-2 text-white card-day ">
                                                        <h2 class="font-weight-bold dark-grey-text mt-2 pb-5 ">
                                                            E-Attendance</h2>
                                                        <p><i class="fa fa-quote-left pe-3"></i>
                                                            Attendance is crucial for maintaining accountability and
                                                            ensuring productivity in any organization. It helps track
                                                            employees' presence, manage schedules, and uphold
                                                            operational efficiency.</p>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="tab-pane" id="tab-71">
                            <div class="col-md-12">
                                <div class="card bg-background-1 ">
                                    <div class="card-body">
                                        <div class="d-flex team-section-2 ">
                                            <div class="row">
                                                <div class="col-xl-3 col-md-6 mx-auto">
                                                    <div class="team-img-2 text-center">
                                                        <img src="{{ asset('assets/images/media/1.png') }}"
                                                            class="img-thumbnail-3 bg-transparent" alt="">
                                                    </div>
                                                </div>
                                                <div class="col-xl-9 col-sm-6">
                                                    <div class="ms-lg-5 ms-xs-0 text-white card-day">
                                                        <h2 class="font-weight-bold dark-grey-text mt-2 pb-5">Ride Now
                                                        </h2>
                                                        <p><i class="fa fa-quote-left pe-3"></i> A ride refers to a
                                                            journey or trip taken in a vehicle, often
                                                            for transportation from one location to another. It can be
                                                            arranged through various means such as taxis, rideshare
                                                            services, or private vehicles.</p>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section class="sptb bg-white">
        <div class="container">
            <div class="section-title center-block text-start">
                <h2>Best Tutors</h2>
            </div>
            <div class="row">
                <div class="col-md-12">

                    <div class="row">
                        <div class="col-lg-3 col-md-6">
                            <div class="card p-5 card-cat shadow-lg">
                                <a href="#" class="text-dark">
                                    <h1 class="card-title mb-5 ">
                                        <img src="{{ asset('assets/images/faces/female/1.jpg') }}" alt="img"
                                            class="w-8 h-8 br-3">
                                    </h1>
                                </a>
                                <h5 class="fw-bold">Devaraj</h5>
                                <p>Course : <span class="fw-bold"> Business Maths</span></p>
                            </div>
                        </div>
                        <div class="col-lg-3 col-md-6">
                            <div class="card p-5 card-cat shadow-lg">
                                <a href="#" class="text-dark">
                                    <h1 class="card-title mb-5 ">
                                        <img src="{{ asset('assets/images/faces/female/2.jpg') }}" alt="img"
                                            class="w-8 h-8 br-3">
                                    </h1>
                                </a>
                                <h5 class="fw-bold">Pavithra Kannan</h5>
                                <p>Course : <span class="fw-bold"> Computer Science</span></p>
                            </div>
                        </div>
                        <div class="col-lg-3 col-md-6">
                            <div class="card p-5 card-cat shadow-lg">
                                <a href="#" class="text-dark">
                                    <h1 class="card-title mb-5 ">
                                        <img src="{{ asset('assets/images/faces/female/3.jpg') }}" alt="img"
                                            class="w-8 h-8 br-3">
                                    </h1>
                                </a>
                                <h5 class="fw-bold">Naveen Kumar</h5>
                                <p>Course : <span class="fw-bold"> Physics</span></p>
                            </div>
                        </div>
                        <div class="col-lg-3 col-md-6">
                            <div class="card p-5 card-cat shadow-lg">
                                <a href="#" class="text-dark">
                                    <h1 class="card-title mb-5 ">
                                        <img src="{{ asset('assets/images/faces/female/1.jpg') }}" alt="img"
                                            class="w-8 h-8 br-3">
                                    </h1>
                                </a>
                                <h5 class="fw-bold">Vinoth Kumar</h5>
                                <p>Course : <span class="fw-bold"> Chemistry</span></p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        </div>
    </section>

    <section class="sptb bg-white">
        <div class="container">
            <div class="section-title center-block text-start">
                <h2>Steps Of Attendance</h2>
            </div>
            <div class="row">
                <div class="col-12 col-md-12 col-lg-12 col-xl-6">
                    <div class="row">
                        <div class="col-sm-12 col-lg-6 col-md-6 ">
                            <div class="item-card overflow-hidden">
                                <div class="item-card-desc">
                                    <div class="card text-center overflow-hidden">
                                        <div class="card-img">
                                            <img src="{{ asset('assets/images/photos/2.jpg') }}" alt="img"
                                                class="cover-image">
                                        </div>
                                        <div class="item-card-text">
                                            <h4 class="mb-0"><i class="fa fa-map-marker text-white me-1 fs-3"></i><span
                                                    class="fs-3">Registeration</span></h4>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-sm-12 col-lg-6 col-md-6 ">
                            <div class="item-card overflow-hidden">
                                <div class="item-card-desc">
                                    <div class="card text-center overflow-hidden">
                                        <div class="card-img">
                                            <img src="{{ asset('assets/images/photos/3.jpg') }}" alt="img"
                                                class="cover-image">
                                        </div>
                                        <div class="item-card-text">
                                            <h4 class="mb-0"><i class="fa fa-map-marker text-white me-1 fs-3"></i><span
                                                    class="fs-3">Enrollments</span></h4>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-sm-12 col-lg-6 col-md-6 ">
                            <div class="item-card overflow-hidden">
                                <div class="item-card-desc">
                                    <div class="card text-center overflow-hidden mb-lg-0">
                                        <div class="card-img">
                                            <img src="{{ asset('assets/images/photos/4.jpg') }}" alt="img"
                                                class="cover-image">
                                        </div>
                                        <div class="item-card-text">
                                            <h4 class="mb-0"><i class="fa fa-map-marker text-white me-1 fs-3"></i><span
                                                    class="fs-3">Ratings</span></h4>
                                        </div>
                                    </div>
                                </div>
                            </div>

                        </div>
                        <div class="col-sm-12 col-lg-6 col-md-6 ">
                            <div class="item-card overflow-hidden">
                                <div class="item-card-desc">
                                    <div class="card text-center overflow-hidden mb-lg-0">
                                        <div class="card-img ">
                                            <img src="{{ asset('assets/images/photos/5.jpg') }}" alt="img"
                                                class="cover-image">
                                        </div>
                                        <div class="item-card-text">
                                            <h4 class="mb-0"><i class="fa fa-map-marker text-white me-1 fs-3"></i><span
                                                    class="fs-3">attendance</span></h4>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-12 col-md-12 col-xl-6 col-sm-12">
                    <div class="item-card overflow-hidden">
                        <div class="item-card-desc">
                            <div class="card overflow-hidden mb-0">
                                <div class="card-img">
                                    <img src="{{ asset('assets/images/categories/student.jpg') }}" alt="img"
                                        class="cover-image">
                                </div>
                                <div class="item-card-text">
                                    <h4 class="mb-0"><i class="fa fa-map-marker text-white me-1 fs-3"></i><span
                                            class="fs-3">Search Using Map</span></h4>
                                </div>
                            </div>
                        </div>
                    </div>

                </div>
            </div>
        </div>
    </section>

    <section class="sptb bg-white">
        <div class="container">
            <div class="section-title center-block text-start">
                <h2>Best Institutes</h2>
            </div>
            <div class="row">
                <div class="col-lg-4 col-md-12 col-sm-12">
                    <div class="card">
                        <div class="card-body">
                            <div class=" text-center">
                                <img src="{{ asset('assets/images/photos/1.jpg') }}" alt="img">
                            </div>
                        </div>
                        <h3 class="text-center mb-0 fw-bold pb-1">NP Institutes</h3>
                        <p class="mt-0 text-center fw-bold"> Vadapalani, Chennai, Tamilnadu.</p>
                    </div>
                </div>
                <div class="col-lg-4 col-md-12 col-sm-12">
                    <div class="card">
                        <div class="card-body">
                            <div class=" text-center">
                                <img src="{{ asset('assets/images/photos/2.jpg') }}" alt="img">
                            </div>
                        </div>
                        <h3 class="text-center mb-0 fw-bold pb-1">Accord Institute</h3>
                        <p class="mt-0 text-center fw-bold"> Ambattur Estate, Chennai, Tamilnadu.</p>
                    </div>
                </div>
                <div class="col-lg-4 col-md-12 col-sm-12">
                    <div class="card">
                        <div class="card-body">
                            <div class=" text-center">
                                <img src="{{ asset('assets/images/photos/3.jpg') }}" alt="img">
                            </div>
                        </div>
                        <h3 class="text-center mb-0 fw-bold pb-1">Info Matrix Center</h3>
                        <p class="mt-0 text-center fw-bold"> Villivakam, Chennai, Tamilnadu.</p>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section class="sptb download" id="downloadapp">
        <div class="cover-image sptb bg-background-color bg-background5 ">
            <div class="content-text mb-0 text-white info">
                <div class="container">

                    <div class="row">

                        <div class="col-xl-6 col-sm-8">
                            <div class="ms-lg-5 ms-xs-0 text-white card-day pt-5 mt-5 hovee-downloads">
                                <h1 class="font-weight-bold dark-grey-text mt-2 pb-5 fs-1">
                                    hovee Attendance on the Go!</h1>

                                <h3> <i class="fa fa-quote-left pe-3"></i>

                                    Download the hovee App Today!

                                </h3>
                                <br>

                                <h4>
                                    Your ultimate Attendance solution is here! With hovee, enjoy: </h4>

                                <h3>
                                    Available on the App Store and Google Play.
                                </h3>

                                <div class="btn-list pt-3 ms-auto">
                                    <img src="{{ asset('assets/images/categories/downloadapp.png') }}" alt="googleplay"
                                        width="25" class="playstore">
                                    <img src="{{ asset('assets/images/categories/goo.png') }}" alt="googleplay"
                                        width="25" class="playstore mx-2">
                                </div>
                            </div>
                        </div>
                        <div class="col-xl-6 col-sm-6 mx-auto">
                            <div class="row Download-img">
                                <div class="col-6">
                                    <div class="team-img-2">
                                        <img src="{{ asset('assets/images/thumbnails/mobile-view-1.png') }}"
                                            class="img-thumbnail-3 bg-transparent" alt="" width="200">
                                    </div>
                                </div>
                                <div class="col-6">
                                    <div class="team-img-2">
                                        <img src="{{ asset('assets/images/thumbnails/mobile-view-2.png') }}"
                                            class="img-thumbnail-3 bg-transparent" alt="" width="200">
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section class="sptb bg-white">
        <div class="container">
            <div class="section-title center-block text-start">
                <h2>Testimonials</h2>
            </div>
            <div class="col-lg-12">
                <div class="card">
                    <div id="myCarousel" class="owl-carousel testimonial-owl-carousel">
                        <div class="item text-center">
                            <div class="card-body bg-light">
                                <div class="row">
                                    <div class="col-xl-8 col-md-12 d-block mx-auto ">
                                        <div class="testimonia">
                                            <div class="testimonia-img mx-auto mb-3">
                                                <img src="{{ asset('assets/images/faces/female/3.jpg') }}"
                                                    class="img-thumbnail rounded-circle alt=" alt="">
                                            </div>
                                            <p>
                                                <i class="fa fa-quote-left"></i> Lorem ipsum dolor sit amet, consectetur
                                                adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna
                                                aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris
                                                nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in
                                                reprehenderit in cillum dolore eu fugiat nulla pariatur.
                                            </p>
                                            <div class="testimonia-data">
                                                <h4 class="fs-20 mb-1">Heather Bell</h4>
                                                <div class="rating-stars">
                                                    <input type="number" readonly="readonly" class="rating-value star"
                                                        name="rating-stars-value" value="3">
                                                    <div class="rating-stars-container">
                                                        <div class="rating-star sm">
                                                            <i class="fa fa-star"></i>
                                                        </div>
                                                        <div class="rating-star sm">
                                                            <i class="fa fa-star"></i>
                                                        </div>
                                                        <div class="rating-star sm">
                                                            <i class="fa fa-star"></i>
                                                        </div>
                                                        <div class="rating-star sm">
                                                            <i class="fa fa-star"></i>
                                                        </div>
                                                        <div class="rating-star sm">
                                                            <i class="fa fa-star"></i>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="item text-center">
                            <div class="card-body bg-light">
                                <div class="row">
                                    <div class="col-xl-8 col-md-12 d-block mx-auto">
                                        <div class="testimonia">
                                            <div class="testimonia-img mx-auto mb-3">
                                                <img src="{{ asset('assets/images/faces/male/2.jpg') }}"
                                                    class="img-thumbnail rounded-circle alt=" alt="">
                                            </div>
                                            <p><i class="fa fa-quote-left"></i> Neque porro quisquam est, qui dolorem ipsum
                                                quia dolor sit amet, consectetur, adipisci velit, sed quia non numquam eius
                                                modi tempora incidunt ut labore et dolore magnam aliquam quaerat voluptatem.
                                                Nor again is there anyone who loves or pursues obtain pain of itself,
                                                because laboriosam ex ea commodi consequatur. </p>
                                            <div class="testimonia-data">
                                                <h4 class="fs-20 mb-1">David Blake</h4>
                                                <div class="rating-stars">
                                                    <input type="number" readonly="readonly" class="rating-value star"
                                                        name="rating-stars-value" value="3">
                                                    <div class="rating-stars-container">
                                                        <div class="rating-star sm">
                                                            <i class="fa fa-star"></i>
                                                        </div>
                                                        <div class="rating-star sm">
                                                            <i class="fa fa-star"></i>
                                                        </div>
                                                        <div class="rating-star sm">
                                                            <i class="fa fa-star"></i>
                                                        </div>
                                                        <div class="rating-star sm">
                                                            <i class="fa fa-star"></i>
                                                        </div>
                                                        <div class="rating-star sm">
                                                            <i class="fa fa-star"></i>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="item text-center">
                            <div class="card-body bg-light">
                                <div class="row">
                                    <div class="col-xl-8 col-md-12 d-block mx-auto">
                                        <div class="testimonia">
                                            <div class="testimonia-img mx-auto mb-3">
                                                <img src="{{ asset('assets/images/faces/female/1.jpg') }}"
                                                    class="img-thumbnail rounded-circle alt=" alt="">
                                            </div>
                                            <p><i class="fa fa-quote-left"></i> Duis aute irure dolor in reprehenderit in
                                                voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint
                                                occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit
                                                anim id est laborum exercitation ullamco laboris nisi.</p>
                                            <div class="testimonia-data">
                                                <h4 class="fs-20 mb-1">Sophie Carr</h4>
                                                <div class="rating-stars">
                                                    <input type="number" readonly="readonly" class="rating-value star"
                                                        name="rating-stars-value" value="3">
                                                    <div class="rating-stars-container">
                                                        <div class="rating-star sm">
                                                            <i class="fa fa-star"></i>
                                                        </div>
                                                        <div class="rating-star sm">
                                                            <i class="fa fa-star"></i>
                                                        </div>
                                                        <div class="rating-star sm">
                                                            <i class="fa fa-star"></i>
                                                        </div>
                                                        <div class="rating-star sm">
                                                            <i class="fa fa-star"></i>
                                                        </div>
                                                        <div class="rating-star sm">
                                                            <i class="fa fa-star"></i>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <input class="chat-menu hidden" id="offchat-menu" type="checkbox" />
    <div class="sticky-button" id="sticky-button">
        <label for="offchat-menu">
            <svg class="chat-icon" viewBox="0 0 24 24">
                <path
                    d="M12.04 2C6.58 2 2.13 6.45 2.13 11.91C2.13 13.66 2.59 15.36 3.45 16.86L2.05 22L7.3 20.62C8.75 21.41 10.38 21.83 12.04 21.83C17.5 21.83 21.95 17.38 21.95 11.92C21.95 9.27 20.92 6.78 19.05 4.91C17.18 3.03 14.69 2 12.04 2M12.05 3.67C14.25 3.67 16.31 4.53 17.87 6.09C19.42 7.65 20.28 9.72 20.28 11.92C20.28 16.46 16.58 20.15 12.04 20.15C10.56 20.15 9.11 19.76 7.85 19L7.55 18.83L4.43 19.65L5.26 16.61L5.06 16.29C4.24 15 3.8 13.47 3.8 11.91C3.81 7.37 7.5 3.67 12.05 3.67M8.53 7.33C8.37 7.33 8.1 7.39 7.87 7.64C7.65 7.89 7 8.5 7 9.71C7 10.93 7.89 12.1 8 12.27C8.14 12.44 9.76 14.94 12.25 16C12.84 16.27 13.3 16.42 13.66 16.53C14.25 16.72 14.79 16.69 15.22 16.63C15.7 16.56 16.68 16.03 16.89 15.45C17.1 14.87 17.1 14.38 17.04 14.27C16.97 14.17 16.81 14.11 16.56 14C16.31 13.86 15.09 13.26 14.87 13.18C14.64 13.1 14.5 13.06 14.31 13.3C14.15 13.55 13.67 14.11 13.53 14.27C13.38 14.44 13.24 14.46 13 14.34C12.74 14.21 11.94 13.95 11 13.11C10.26 12.45 9.77 11.64 9.62 11.39C9.5 11.15 9.61 11 9.73 10.89C9.84 10.78 10 10.6 10.1 10.45C10.23 10.31 10.27 10.2 10.35 10.04C10.43 9.87 10.39 9.73 10.33 9.61C10.27 9.5 9.77 8.26 9.56 7.77C9.36 7.29 9.16 7.35 9 7.34C8.86 7.34 8.7 7.33 8.53 7.33Z" />
            </svg>

            <svg class="close-icon" viewBox="0 0 512 512">
                <path
                    d="M278.6 256l68.2-68.2c6.2-6.2 6.2-16.4 0-22.6-6.2-6.2-16.4-6.2-22.6 0L256 233.4l-68.2-68.2c-6.2-6.2-16.4-6.2-22.6 0-3.1 3.1-4.7 7.2-4.7 11.3 0 4.1 1.6 8.2 4.7 11.3l68.2 68.2-68.2 68.2c-3.1 3.1-4.7 7.2-4.7 11.3 0 4.1 1.6 8.2 4.7 11.3 6.2 6.2 16.4 6.2 22.6 0l68.2-68.2 68.2 68.2c6.2 6.2 16.4 6.2 22.6 0 6.2-6.2 6.2-16.4 0-22.6L278.6 256z" />
            </svg>
        </label>
    </div>
    <div class="sticky-chat">
        <div class="chat-content">
            <div class="chat-header">
                <svg viewBox="0 0 32 32">
                    <path
                        d="M24,22a1,1,0,0,1-.64-.23L18.84,18H17A8,8,0,0,1,17,2h6a8,8,0,0,1,2,15.74V21a1,1,0,0,1-.58.91A1,1,0,0,1,24,22ZM17,4a6,6,0,0,0,0,12h2.2a1,1,0,0,1,.64.23L23,18.86V16.92a1,1,0,0,1,.86-1A6,6,0,0,0,23,4Z" />
                    <rect height="2" width="2" x="19" y="9"></rect>
                    <rect height="2" width="2" x="14" y="9"></rect>
                    <rect height="2" width="2" x="24" y="9"></rect>
                    <path
                        d="M8,30a1,1,0,0,1-.42-.09A1,1,0,0,1,7,29V25.74a8,8,0,0,1-1.28-15,1,1,0,1,1,.82,1.82,6,6,0,0,0,1.6,11.4,1,1,0,0,1,.86,1v1.94l3.16-2.63A1,1,0,0,1,12.8,24H15a5.94,5.94,0,0,0,4.29-1.82,1,1,0,0,1,1.44,1.4A8,8,0,0,1,15,26H13.16L8.64,29.77A1,1,0,0,1,8,30Z" />
                </svg>
                <div class="title">Please chat with our team <span>An admin will respond within a few minutes.</span>
                </div>
            </div>
            <div class="chat-text"><span>Hello, is there anything we can assist you with?</span>
                <span class="typing">
                    <svg viewBox="0 0 512 512">
                        <circle cx="256" cy="256" r="48"></circle>
                        <circle cx="416" cy="256" r="48"></circle>
                        <circle cx="96" cy="256" r="48"></circle>
                    </svg>
                </span>
            </div>
        </div>
        <a class="chat-button" href="https://api.whatsapp.com/send?phone=9876565432" rel="nofollow noreferrer"
            target="_blank">
            <span>Type a message</span>
            <svg viewBox="0 0 32 32">
                <path
                    d="M19.47,31a2,2,0,0,1-1.8-1.09l-4-7.57a1,1,0,0,1,1.77-.93l4,7.57L29,3.06,3,12.49l9.8,5.26,8.32-8.32a1,1,0,0,1,1.42,1.42l-8.85,8.84a1,1,0,0,1-1.17.18L2.09,14.33a2,2,0,0,1,.25-3.72L28.25,1.13a2,2,0,0,1,2.62,2.62L21.39,29.66A2,2,0,0,1,19.61,31Z" />
            </svg>
        </a>

    </div>
@endsection


@push('scripts')
    
@endpush
