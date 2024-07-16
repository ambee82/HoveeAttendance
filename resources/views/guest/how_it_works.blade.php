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
                        <h1 class="">How It Works</h1>
                        <ol class="breadcrumb text-center">
                            <li class="breadcrumb-item"><a href="index.php">Home</a></li>
                            <li class="breadcrumb-item  text-white">About</li>
                        </ol>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section class="howworks ">
        <div class="container py-5">
            <div class="row">
                <div class="col-md-12">
                    <div class="main-timeline">
                        <div class="timeline">
                            <div class="timeline-content">
                                <div class="circle"><span class="homebox">
                                        <img src="{{ asset('assets/images/photos/howItWorksTenant1.png') }}" loading="lazy"
                                            alt="img" class="img">
                                    </span></div>
                                <div class="content">
                                    <span class="year">Step 1</span>
                                    <h3 class="fs-5 fw-normal">Register</h3><br>
                                    <p class="description">
                                        Create your profile on our platform to access all features and listings. Whether
                                        you're a tenant looking for a home or an owner listing a property, start by
                                        registering your account.
                                    </p>
                                    <div class="icon"><span></span></div>
                                </div>
                            </div>
                        </div>
                        <div class="timeline">
                            <div class="timeline-content">
                                <div class="circle"><span class="homebox"><img
                                            src="{{ asset('assets/images/photos/howItWorksTenant2.png') }}" loading="lazy"
                                            alt="img" class="img"></span></div>
                                <div class="content">
                                    <span class="year">Step 2</span>
                                    <h3 class="fs-5 fw-normal">Search for Institutes/ Hostels</h3><br>
                                    <p class="description"><span class="fw-bold">Institutes : </span>
                                        List your property by providing detailed information, high-quality images, and other
                                        relevant details to attract potential tenants.</p>

                                    <p class="description"><span class="fw-bold">Hostels : </span>
                                        Use our advanced search filters to browse through a wide range of rental properties
                                        and find the one that best suits your needs.</p>
                                    <div class="icon"><span></span></div>
                                </div>
                            </div>
                        </div>
                        <div class="timeline">
                            <div class="timeline-content">
                                <div class="circle"><span class="homebox">
                                        <img src="{{ asset('assets/images/photos/howItWorksTenant3.png') }}" loading="lazy"
                                            alt="img" class="img">
                                    </span></div>
                                <div class="content">
                                    <span class="year">Step 3</span>
                                    <h3 class="fs-5 fw-normal">Submit Verification Form</h3><br>
                                    <p class="description"><span class="fw-bold">Institutes : </span>
                                        Review verification forms submitted by potential tenants to ensure they meet your
                                        criteria.</p>

                                    <p class="description"><span class="fw-bold">Hostels : </span>
                                        Submit a verification form for properties you’re interested in to confirm your
                                        eligibility and seriousness.
                                    </p>

                                    <div class="icon"><span></span></div>
                                </div>
                            </div>
                        </div>
                        <div class="timeline">
                            <div class="timeline-content">
                                <div class="circle"><span class="homebox">
                                        <img src="{{ asset('assets/images/photos/howItWorksTenant4.png') }}" loading="lazy"
                                            alt="img" class="img">
                                    </span></div>
                                <div class="content">
                                    <span class="year">Step 5</span>
                                    <h3 class="fs-5 fw-normal">Enquire and Finalize Enrolment</h3><br>
                                    <p class="description"><span class="fw-bold">Institutes : </span>
                                        Communicate with interested tenants to address queries, finalize terms, and agree on
                                        rental conditions. Finalize the tenant's enrollment and prepare your property for
                                        their move-in.</p>

                                    <p class="description"><span class="fw-bold">Hostels : </span>
                                        Contact property owners to discuss details, ask questions, and finalize rental
                                        terms. Complete the enrollment process and move into your new home once everything
                                        is agreed upon.</p>
                                    <div class="icon"><span></span></div>
                                </div>
                            </div>
                        </div>
                        <div class="timeline">
                            <div class="timeline-content">
                                <div class="circle"><span class="homebox"><img
                                            src="{{ asset('assets/images/photos/howItWorksTenant5.png') }}" loading="lazy"
                                            alt="img" class="img"></span></div>
                                <div class="content">
                                    <span class="year">Step 6</span>
                                    <h3 class=" fs-5 fw-normal">Know Your Rating</h3><br>
                                    <p class="description">
                                        Every quarter, both tenants and owners have the opportunity to rate each other,
                                        considering all factors of the rental terms.
                                    </p>
                                    <p class="description"><span class="fw-bold">Institutes : </span>
                                        They can rate tenants based on their adherence to the rental agreement and care for
                                        the property. This mutual rating system helps build a trustworthy and transparent
                                        rental community.</p>

                                    <p class="description"><span class="fw-bold">Hostels : </span>
                                        They can rate the property and the owner's responsiveness and support.</p>
                                    <div class="icon"><span></span></div>
                                </div>
                            </div>
                        </div>
                        <div class="timeline">
                            <div class="timeline-content">
                                <div class="circle"><span class="homebox"><img
                                            src="{{ asset('assets/images/photos/howItWorksTenant5.png') }}" loading="lazy"
                                            alt="img" class="img"></span></div>
                                <div class="content">
                                    <span class="year">Step 6</span>
                                    <h3 class="fs-5 fw-normal">Subscription plans</h3><br>
                                    <p class="description">
                                        Choose from our subscription plans to enjoy additional benefits. All users are
                                        initially placed in the Bronze tier by default:
                                    </p>
                                    <p class="description"><span class="fw-bold">Bronze : </span>
                                        Default plan with basic access to all standard features.</p>
                                    <p class="description"><span class="fw-bold">Silver : </span>
                                        Includes premium support, early access to new listings, and additional resources.
                                    </p>
                                    <p class="description"><span class="fw-bold">Gold : </span>
                                        Offers all Silver benefits plus featured listings, exclusive discounts, and priority
                                        support.</p>
                                    <div class="icon"><span></span></div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection


@push('scripts')
@endpush
