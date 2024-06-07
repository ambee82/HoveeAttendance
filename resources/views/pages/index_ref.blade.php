@extends('layouts.main')
@section('content')
    
    <section>
        <div class="banner-1 cover-image sptb-2 sptb-tab bg-background2 animation-zidex bg-white"
            data-bs-image-src="../assets/images/banners/banner2.jpg">
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
                                    <h1 class="text-start text-white fw-bold ">The World's Largest
                                        Selection of Courses</h1>
                                    <p class="text-start text-white"> It is a long established fact that a
                                        reader will be distracted by
                                        the readable.</p>
                                    <div class="row">
                                        <div class="col-xl-12 col-lg-12 col-md-12 d-block mx-auto">
                                            <div class="search-background bg-transparent">
                                                <div class="form row no-gutters ">
                                                    <div class="form-group  col-xl-8 col-lg-8 col-md-12 mb-0">
                                                        <input type="search" class="form-control input-lg bg-white"
                                                            id="text4" placeholder="Search Courses">
                                                    </div>
                                                    <div class="col-xl-4 col-lg-4 col-md-12 mb-0">
                                                        <a href="#"
                                                            class="btn btn-lg btn-block btn-primary br-tl-md-0 br-bl-md-0">Search</a>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-5">
                                <div class=" mx-auto mb-0">
                                    <img src="../assets/images/photos/main-1.png" class="img-thumbnail rounded-circle alt="
                                        alt="">
                                </div>
                            </div>
                        </div>

                    </div>

                </div>
            </div>
        </div>
    </section>
    <x-forms.input label="Enter password" name="password" type="text" placeholder="Place holder"></x-forms.input>
    <section class="sptb bg-white">
        <div class="container">
            <div class="section-title center-block text-start">
                <h2 class="fw-bold fs-1">Our Services</h2>
                <p class="text-start">Sed do eiusmod tempor incididunt ut labore et dolore
                    magna aliqua</p>
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
                                        <li><a href="#tab-61" data-bs-toggle="tab" class=" fw-bold">E-Attendence</a></li>
                                        <li><a href="#tab-71" data-bs-toggle="tab" class=" fw-bold ">Ride</a></li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                    </div>


                    <div class="tab-content">
                        <div class="tab-pane active" id="tab-51">
                            <div class="col-md-12">
                                <div class="banner-1 pt-5 card cover-image-1  border-0 pb-0  bg-background-1 overflow-hidden"
                                    data-bs-image-src="../assets/images/banners/banner1.jpg">
                                    <div class="card bg-transparent">
                                        <div class="card-body">
                                            <div class="d-flex team-section-2">
                                                <div class="team-img-2">
                                                    <img src="../assets/images/media/3.png"
                                                        class="img-thumbnail-2 bg-transparent" alt="">
                                                </div>
                                                <div class="ms-lg-5 ms-xs-0 text-white card-day">
                                                    <h2 class="font-weight-bold dark-grey-text mt-2 pb-5">Rent Properties
                                                    </h2>
                                                    <i class="fa fa-quote-left pe-3"></i>Lorem ipsum dolor sit amet,
                                                    consectetur adipisicing elit. Quod eos id officiis hic tenetur quae
                                                    quaerat ad velit ab hic tenetur.</p>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="tab-pane " id="tab-61">
                            <div class="col-md-12">
                                <div class="banner-1 pt-5 card cover-image-1  border-0 pb-0  bg-background-1 overflow-hidden"
                                    data-bs-image-src="../assets/images/banners/banner1.jpg">
                                    <div class="card bg-transparent">
                                        <div class="card-body">
                                            <div class="d-flex team-section-2">
                                                <div class="team-img-2">
                                                    <img src="../assets/images/media/2.png"
                                                        class="img-thumbnail-2 bg-transparent" alt="">
                                                </div>

                                                <div class="ms-lg-5 ms-xs-2 text-white card-day ">
                                                    <h2 class="font-weight-bold dark-grey-text mt-2 pb-5 ">Attendence</h2>
                                                    <i class="fa fa-quote-left pe-3"></i>Lorem ipsum dolor sit amet,
                                                    consectetur adipisicing elit. Quod eos id officiis hic tenetur quae
                                                    quaerat ad velit ab hic tenetur.</p>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="tab-pane" id="tab-71">
                            <div class="col-md-12">
                                <div class="banner-1 pt-5 card cover-image-1  border-0 pb-0  bg-background-1 overflow-hidden"
                                    data-bs-image-src="../assets/images/banners/banner1.jpg">
                                    <div class="card bg-transparent">
                                        <div class="card-body">
                                            <div class="d-flex team-section-2 ">
                                                <div class="team-img-2">
                                                    <img src="../assets/images/media/1.png"
                                                        class="img-thumbnail-2 bg-transparent" alt="">
                                                </div>
                                                <div class="ms-lg-5 ms-xs-0 text-white card-day">
                                                    <h2 class="font-weight-bold dark-grey-text mt-2 pb-5">Ride Now</h2>
                                                    <i class="fa fa-quote-left pe-3"></i>Lorem ipsum dolor sit amet,
                                                    consectetur adipisicing elit. Quod eos id officiis hic tenetur quae
                                                    quaerat ad velit ab hic tenetur.</p>
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

    <section class="sptb">
        <div class="container">
            <div class="section-title center-block text-start">
                <h2 class="fw-bold fs-1">Categories</h2>
                <p class="text-start">Sed do eiusmod tempor incididunt ut labore et dolore
                    magna aliqua</p>
            </div>
            <div class="row">
                <div class="col-md-12">

                    <div class="row">
                        <div class="col-lg-3 col-md-6">
                            <div class="card p-5 card-cat">
                                <a href="#" class="text-dark">
                                    <h1 class="card-title mb-5 ">
                                        <i class="fe fe-book-open"></i>
                                    </h1>
                                </a>
                                <h5 class="fw-bold">Language</h5>
                                <p>Sed do eiusmod tempor ut labore et dolore magna aliqua</p>
                                <a href="#" class="text-primary"> View more..</a>
                            </div>
                        </div>
                        <div class="col-lg-3 col-md-6">
                            <div class="card p-5 card-cat">
                                <a href="#" class="text-dark">
                                    <h1 class="card-title mb-5 ">
                                        <i class="fe fe-airplay"></i>
                                    </h1>
                                </a>
                                <h5 class="fw-bold">Language</h5>
                                <p>Sed do eiusmod tempor ut labore et dolore magna aliqua</p>
                                <a href="#" class="text-primary"> View more..</a>
                            </div>
                        </div>
                        <div class="col-lg-3 col-md-6">
                            <div class="card p-5 card-cat">
                                <a href="#" class="text-dark">
                                    <h1 class="card-title mb-5 ">
                                        <i class="fe fe-database"></i>
                                    </h1>
                                </a>
                                <h5 class="fw-bold">Language</h5>
                                <p>Sed do eiusmod tempor ut labore et dolore magna aliqua</p>
                                <a href="#" class="text-primary"> View more..</a>
                            </div>
                        </div>
                        <div class="col-lg-3 col-md-6">
                            <div class="card p-5 card-cat">
                                <a href="#" class="text-dark">
                                    <h1 class="card-title mb-5 ">
                                        <i class="fe fe-heart"></i>
                                    </h1>
                                </a>
                                <h5 class="fw-bold">Language</h5>
                                <p>Sed do eiusmod tempor ut labore et dolore magna aliqua</p>
                                <a href="#" class="text-primary"> View more..</a>
                            </div>
                        </div>
                        <div class="col-lg-3 col-md-6">
                            <div class="card p-5 card-cat">
                                <a href="#" class="text-dark">
                                    <h1 class="card-title mb-5 ">
                                        <i class="fe fe-heart"></i>
                                    </h1>
                                </a>
                                <h5 class="fw-bold">Language</h5>
                                <p>Sed do eiusmod tempor ut labore et dolore magna aliqua</p>
                                <a href="#" class="text-primary"> View more..</a>
                            </div>
                        </div>
                        <div class="col-lg-3 col-md-6">
                            <div class="card p-5 card-cat">
                                <a href="#" class="text-dark">
                                    <h1 class="card-title mb-5 ">
                                        <i class="fe fe-hash"></i>
                                    </h1>
                                </a>
                                <h5 class="fw-bold">Language</h5>
                                <p>Sed do eiusmod tempor ut labore et dolore magna aliqua</p>
                                <a href="#" class="text-primary"> View more..</a>
                            </div>
                        </div>
                        <div class="col-lg-3 col-md-6">
                            <div class="card p-5 card-cat">
                                <a href="#" class="text-dark">
                                    <h1 class="card-title mb-5 ">
                                        <i class="fe fe-briefcase"></i>
                                    </h1>
                                </a>
                                <h5 class="fw-bold">Language</h5>
                                <p>Sed do eiusmod tempor ut labore et dolore magna aliqua</p>
                                <a href="#" class="text-primary"> View more..</a>
                            </div>
                        </div>
                        <div class="col-lg-3 col-md-6">
                            <div class="card p-5 card-cat">
                                <a href="#" class="text-dark">
                                    <h1 class="card-title mb-5 ">
                                        <i class="fe fe-bar-chart"></i>
                                    </h1>
                                </a>
                                <h5 class="fw-bold">Language</h5>
                                <p>Sed do eiusmod tempor ut labore et dolore magna aliqua</p>
                                <a href="#" class="text-primary"> View more..</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section>
        <div class="cover-image sptb bg-background-color bg-background5 "
            data-bs-image-src="../assets/images/banners/banner2.jpg">
            <div class="content-text mb-0 text-white info">
                <div class="container">
                    <div class="row text-center">
                        <div class="col-lg-3 col-md-6 ">
                            <div class="counter-status md-mb-0">
                                <div class="counter-icon text-danger rounded">
                                    <i class="icon icon-people "></i>
                                </div>
                                <h5>Total Agents</h5>
                                <h2 class="counter mb-0 font-weight-bold">893</h2>
                            </div>
                        </div>
                        <div class="col-lg-3 col-md-6">
                            <div class="counter-status status-1 md-mb-0">
                                <div class="counter-icon text-warning rounded">
                                    <i class="icon icon-rocket"></i>
                                </div>
                                <h5>Total Sales</h5>
                                <h2 class="counter mb-0 font-weight-bold">1765</h2>
                            </div>
                        </div>
                        <div class="col-lg-3 col-md-6">
                            <div class="counter-status status md-mb-0">
                                <div class="counter-icon text-primary rounded">
                                    <i class="icon icon-docs"></i>
                                </div>
                                <h5>Total Projects</h5>
                                <h2 class="counter mb-0 font-weight-bold">846</h2>
                            </div>
                        </div>
                        <div class="col-lg-3 col-md-6">
                            <div class="counter-status status">
                                <div class="counter-icon text-success rounded ">
                                    <i class="icon icon-emotsmile  "></i>
                                </div>
                                <h5>Happy Customers</h5>
                                <h2 class="counter font-weight-bold">7253</h2>
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
                <h2 class="fw-bold fs-1">Steps Of Attendance</h2>
                <p class="text-start">Sed do eiusmod tempor incididunt ut labore et dolore
                    magna aliqua</p>
            </div>
            <div class="row">
                <div class="col-12 col-md-12 col-lg-12 col-xl-6">
                    <div class="row">
                        <div class="col-sm-12 col-lg-6 col-md-6 ">
                            <div class="item-card overflow-hidden">
                                <div class="item-card-desc">
                                    <div class="card text-center overflow-hidden">
                                        <div class="card-img">
                                            <img src="../assets/images/photos/2.jpg" alt="img" class="cover-image">
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
                                            <img src="../assets/images/photos/3.jpg" alt="img" class="cover-image">
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
                                            <img src="../assets/images/photos/4.jpg" alt="img" class="cover-image">
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
                                            <img src="../assets/images/photos/5.jpg" alt="img" class="cover-image">
                                        </div>
                                        <div class="item-card-text">
                                            <h4 class="mb-0"><i class="fa fa-map-marker text-white me-1 fs-3"></i><span
                                                    class="fs-3">Attendence</span></h4>
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
                                    <img src="../assets/images/photos/6.jpg" alt="img" class="cover-image">
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

    <section class="sptb bg-light">
        <div class="container">
            <div class="section-title center-block text-start">
                <h2 class="fw-bold fs-1">Our Courses</h2>
                <p class="text-start">Sed do eiusmod tempor incididunt ut labore et dolore
                    magna aliqua</p>
            </div>
            <div class="row">
                <div class="col-lg-4 col-md-12 col-sm-12">
                    <div class="card">
                        <div class="card-body">
                            <div class=" text-center">
                                <img src="../assets/images/photos/1.jpg" alt="img">
                            </div>
                        </div>
                        <h3 class="text-center mb-0 fw-bold pb-2">Software Development</h3>
                        <span class="font-weight-bold text-center pb-5"><strong
                                class="fs-18 font-weight-bold">1856</strong> Over Courses</span>
                    </div>
                </div>
                <div class="col-lg-4 col-md-12 col-sm-12">
                    <div class="card">
                        <div class="card-body">
                            <div class=" text-center">
                                <img src="../assets/images/photos/2.jpg" alt="img">
                            </div>
                        </div>
                        <h3 class="text-center mb-0 fw-bold pb-2">Web Designing</h3>
                        <span class="font-weight-bold text-center pb-5"><strong
                                class="fs-18 font-weight-bold">1856</strong> Over Courses</span>
                    </div>
                </div>
                <div class="col-lg-4 col-md-12 col-sm-12">
                    <div class="card">
                        <div class="card-body">
                            <div class=" text-center">
                                <img src="../assets/images/photos/3.jpg" alt="img">
                            </div>
                        </div>
                        <h3 class="text-center mb-0 fw-bold pb-2">Web Development</h3>
                        <span class="font-weight-bold text-center pb-5"><strong
                                class="fs-18 font-weight-bold">1856</strong> Over Courses</span>
                    </div>
                </div>
                <div class="col-lg-4 col-md-12 col-sm-12">
                    <div class="card">
                        <div class="card-body">
                            <div class=" text-center">
                                <img src="../assets/images/photos/4.jpg" alt="img">
                            </div>
                        </div>
                        <h3 class="text-center mb-0 fw-bold pb-2">Animation Classes</h3>
                        <span class="font-weight-bold text-center pb-5"><strong
                                class="fs-18 font-weight-bold">1856</strong> Over Courses</span>
                    </div>
                </div>
                <div class="col-lg-4 col-md-12 col-sm-12">
                    <div class="card">
                        <div class="card-body">
                            <div class=" text-center">
                                <img src="../assets/images/photos/5.jpg" alt="img">
                            </div>
                        </div>
                        <h3 class="text-center mb-0 fw-bold pb-2">Business Classes</h3>
                        <span class="font-weight-bold text-center pb-5"><strong
                                class="fs-18 font-weight-bold">1856</strong> Over Courses</span>
                    </div>
                </div>
                <div class="col-lg-4 col-md-12 col-sm-12">
                    <div class="card">
                        <div class="card-body">
                            <div class=" text-center">
                                <img src="../assets/images/photos/6.jpg" alt="img">
                            </div>
                        </div>
                        <h3 class="text-center mb-0 fw-bold pb-2">Beauty Classes</h3>
                        <span class="font-weight-bold text-center pb-5"><strong
                                class="fs-18 font-weight-bold">1856</strong> Over Courses</span>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section class="sptb bg-white">
        <div class="container">
            <div class="section-title center-block text-start">
                <h2 class="fw-bold fs-1">Testimonials</h2>
                <p class="text-start">Sed do eiusmod tempor incididunt ut labore et dolore
                    magna aliqua</p>
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
                                                <img src="../assets/images/faces/female/3.jpg"
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
                                                <img src="../assets/images/faces/male/2.jpg"
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
                                                <img src="../assets/images/faces/female/1.jpg"
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

    <section class="sptb bg-white ">
        <div class="container">
            <div class="card border-top-1">
                <div class="card-body ">
                    <div class="d-flex team-section-1">
                        <div class="team-img-1">
                            <img src="../assets/images/photos/1.png" class="img-thumbnail " alt="img">
                        </div>
                        <div class="ms-0 boder-top-line ">

                            <h1 class="font-weight-bold dark-grey-text mt-2 text-start">Tittle</h1>
                            <p class="font-weight-normal dark-grey-text mb-5  text-start">
                                Lorem Ipsum is simply dummy text of the printing and typesetting
                                industry</p>
                            <span class="text-start"><a class="btn btn-secondary px-5" href="ad-posts.html">Register
                                    Now</a></span>
                        </div>
                    </div>
                </div>
            </div>

        </div>
    </section>
@endsection
