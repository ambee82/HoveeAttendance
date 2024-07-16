@extends('layouts.main')
@section('title', $title)
@push('css')
@endpush

@section('content')
    <section>
        <div class="bannerimg cover-image bg-background3 sptb-2"
            data-bs-image-src="{{ asset('assets/images/banners/banner2.jpg') }}">
            <div class="header-text mb-0">
                <div class="container">
                    <div class="text-center text-white ">
                        <h1 class="">About Us</h1>
                        <ol class="breadcrumb text-center">
                            <li class="breadcrumb-item"><a href="javascript:void(0);">Home</a></li>
                            <li class="breadcrumb-item active text-white" aria-current="page">About Us</li>
                        </ol>
                    </div>
                </div>
            </div>
        </div>
    </section>


    <section class="sptb bg-white">
        <div class="container">
            <div class="section-title center-block text-start">
                <h2>Why hovee?</h2>
                <p class="text-start">Majority have suffered alteration in some form, by injected humor</p>
            </div>
            <div class="text-justify">
                <p class="leading-normal">There are many variations of passages of Lorem Ipsum available, but the majority
                    have suffered by injected humour, or randomised words which don't look even sdashly believable.
                    If you are going to use a passage of Lorem Ipsum, you need to as necessary All the Lorem Ipsum
                    generators on the Internet tend to repeat</p>
                <p class="leading-normal">It is a long established fact that a reader will be distracted by the readable
                    content of a page when looking at its layout. The point of using Lorem Ipsum is that it has a
                    more-or-less normal distribution of letters, as opposed to using 'Content here, content here', making it
                    look like readable English.</p>
                <p class="leading-normal mb-0">Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod
                    tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation
                    ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in
                    voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non
                    proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</p>
            </div>
        </div>
    </section>

    <section class="sptb bg-light">
        <div class="container">
            <div class="section-title center-block text-start">
                <h2>How It Works?</h2>
                <p class="text-start">Sed do eiusmod tempor incididunt ut labore et dolore magna aliqua</p>
            </div>
            <div class="row">
                <div class="col-lg-3 col-md-6 col-sm-6">
                    <div class="">
                        <div class="mb-lg-0 mb-4">
                            <div class="service-card text-center">
                                <div class="bg-white icon-bg box-shadow icon-service  about">
                                    <img src="{{ asset('assets/images/categories/1.png') }}" alt="img">
                                </div>
                                <div class="servic-data mt-3">
                                    <h4 class="font-weight-semibold mb-2">Register</h4>
                                    <p class="text-muted mb-0">By registering, you agree to abide by hovee Attendance's
                                        terms and conditions</p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-3 col-md-6 col-sm-6">
                    <div class="">
                        <div class="mb-lg-0 mb-4">
                            <div class="service-card text-center">
                                <div class="bg-white icon-bg box-shadow icon-service  about">
                                    <img src="{{ asset('assets/images/categories/2.png') }}" alt="img">
                                </div>
                                <div class="servic-data mt-3">
                                    <h4 class="font-weight-semibold mb-2">Create Account</h4>
                                    <p class="text-muted mb-0">To create an account on hovee Attendance, please provide the
                                        following information</p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-3 col-md-6 col-sm-6">
                    <div class="">
                        <div class="mb-sm-0 mb-4">
                            <div class="service-card text-center">
                                <div class="bg-white icon-bg box-shadow icon-service  about">
                                    <img src="{{ asset('assets/images/categories/3.png') }}" alt="img">
                                </div>
                                <div class="servic-data mt-3">
                                    <h4 class="font-weight-semibold mb-2">Add Subjects</h4>
                                    <p class="text-muted mb-0">To add subjects to your account on hovee Attendance, please
                                        follow these steps</p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-3 col-md-6 col-sm-6">
                    <div class="">
                        <div class="">
                            <div class="service-card text-center">
                                <div class="bg-white icon-bg box-shadow icon-service  about">
                                    <img src="{{ asset('assets/images/categories/4.png') }}" alt="img">
                                </div>
                                <div class="servic-data mt-3">
                                    <h4 class="font-weight-semibold mb-2">Ratings</h4>
                                    <p class="text-muted mb-0">Create a user-friendly interface where instructors can input
                                        ratings for each student</p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section>
        <div class="cover-image sptb bg-background-color bg-background5"
            data-bs-image-src="{{ asset('assets/images/banners/banner2.jpg') }}">
            <div class="content-text mb-0">
                <div class="container">
                    <div class="text-center text-white ">
                        <h2 class="mb-2 display-5">Are you ready for the posting you ads on this Site?</h2>
                        <p>It is a long established fact that a reader will be distracted by the readable content of a page
                            when looking at its layout.</p>
                        <div class="mt-5">
                            <a href="subscription.php" class="btn bg-secondary text-white rounded-pill  btn-lg">Subscribe
                                Now</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section class="sptb bg-white">
        <div class="container">
            <div class="section-title center-block text-start">
                <h2>Frequently Asked Questions</h2>
            </div>
            <div class="panel-group1" id="accordion2">
                <div class="panel panel-default mb-4 p-0">
                    <div class="panel-heading1 ">
                        <h4 class="panel-title1">
                            <a class="accordion-toggle collapsed" data-bs-toggle="collapse" data-parent="#accordion2"
                                href="#collapseone" aria-expanded="false">1. What the first step of the Class buying
                                process? </a>
                        </h4>
                    </div>
                    <div id="collapseone" class="panel-collapse collapse active" role="tabpanel" aria-expanded="false">
                        <div class="panel-body bg-white">
                            <p>All the Lorem Ipsum generators on the Internet tend to repeat predefined chunks as necessary,
                                making this the first true generator on the Internet. It uses a dictionary of over 200 Latin
                                words </p>
                            <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has
                                been the industry's standard dummy text ever since the 1500s, when an unknown printer took a
                                galley of type and scrambled.Nor again is there anyone who loves or pursues or desires to
                                obtain pain of itself, because it is pain, but because occasionally circumstances occur in
                                which toil and pain can procure him some great pleasure. To take a trivial example, which of
                                us ever undertakes laborious physical exercise</p>
                        </div>
                    </div>
                </div>
                <div class="panel panel-default mb-4 p-0">
                    <div class="panel-heading1">
                        <h4 class="panel-title1">
                            <a class="accordion-toggle collapsed" data-bs-toggle="collapse" data-parent="#accordion2"
                                href="#collapsetwo" aria-expanded="false">2. How long does it take to buy a Class? </a>
                        </h4>
                    </div>
                    <div id="collapsetwo" class="panel-collapse collapse active" role="tabpanel" aria-expanded="false">
                        <div class="panel-body bg-white">
                            <p>All the Lorem Ipsum generators on the Internet tend to repeat predefined chunks as necessary,
                                making this the first true generator on the Internet. It uses a dictionary of over 200 Latin
                                words </p>
                            <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has
                                been the industry's standard dummy text ever since the 1500s, when an unknown printer took a
                                galley of type and scrambled.Nor again is there anyone who loves or pursues or desires to
                                obtain pain of itself, because it is pain, but because occasionally circumstances occur in
                                which toil and pain can procure him some great pleasure. To take a trivial example, which of
                                us ever undertakes laborious physical exercise</p>
                        </div>
                    </div>
                </div>
                <div class="panel panel-default mb-4 p-0">
                    <div class="panel-heading1 ">
                        <h4 class="panel-title1">
                            <a class="accordion-toggle collapsed" data-bs-toggle="collapse" data-parent="#accordion2"
                                href="#collapsethree" aria-expanded="false">3. What is a seller's market?</a>
                        </h4>
                    </div>
                    <div id="collapsethree" class="panel-collapse collapse active" role="tabpanel"
                        aria-expanded="false">
                        <div class="panel-body bg-white">
                            <p>All the Lorem Ipsum generators on the Internet tend to repeat predefined chunks as necessary,
                                making this the first true generator on the Internet. It uses a dictionary of over 200 Latin
                                words </p>
                            <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has
                                been the industry's standard dummy text ever since the 1500s, when an unknown printer took a
                                galley of type and scrambled.Nor again is there anyone who loves or pursues or desires to
                                obtain pain of itself, because it is pain, but because occasionally circumstances occur in
                                which toil and pain can procure him some great pleasure. To take a trivial example, which of
                                us ever undertakes laborious physical exercise</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection


@push('scripts')
@endpush
