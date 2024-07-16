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
                        <h1 class="">Subscription Plan</h1>
                        <ol class="breadcrumb text-center">
                            <li class="breadcrumb-item"><a href="index.php">Home</a></li>
                            <li class="breadcrumb-item  text-white">Subscription</li>
                        </ol>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section class="sptb ">
        <div class="card mb-0 shadow-none">
            <div class="container">
                <div class="row">
                    <div class="col-md-12 mx-auto ">
                        <!-- Add lists -->
                        <ul class="nav nav-tabs justify-content-center bg-tranparent mb-3" role="tablist"
                            style="height: 65px; color: #fff !important;">
                            <li class="nav-item" role="presentation">
                                <a class="nav-link active text-white pers-link px-5 py-2 fs-6 bg-primary mx-5"
                                    id="tab-11-tab" data-bs-toggle="tab" href="#tab-11" role="tab"
                                    aria-controls="tab-11" aria-selected="true">Monthly </a>
                            </li>
                            <li class="nav-item" role="presentation">
                                <a class="nav-link text-white pers-link px-5 py-2 fs-6 bg-primary" id="tab-12-tab"
                                    data-bs-toggle="tab" href="#tab-12" role="tab" aria-controls="tab-12"
                                    aria-selected="false">Yearly </a>
                            </li>
                        </ul>
                        <!-- /Add lists -->

                        <div class="tab-content">
                            <div class="tab-pane active" id="tab-11">
                                <div class="row">
                                    <div class="col-xl-4 col-md-6 col-sm-12 col-lg-4">
                                        <div class="pricingTable2 pink mb-4 mb-xl-0  shadow-lg ">
                                            <div class="pricingContent2">
                                                <div class="text-center mt-5 mb-5">
                                                    <h3 class=" mb-5">Bronze</h3>
                                                    <span class="price-value1 text-dark fs-1  mb-3 mt-5">₹1000</span>
                                                    <span class="month fs-4  mb-5">/month</span>
                                                    <h4 class=" mb-5">Bronze level package</h4>
                                                </div>
                                                <ul>
                                                    <li>
                                                        <p class="text-start"><i class="fa fa-circle fs-12 mx-2"></i>Plan
                                                            duration 12 month.</p>

                                                    </li>
                                                    <li>
                                                        <p class="text-start"><i class="fa fa-circle fs-12 mx-2"></i>Post
                                                            any four property
                                                            (Course / Hostel). </p>

                                                    </li>
                                                    <li>
                                                        <p class="text-start"><i class="fa fa-circle fs-12 mx-2"></i>Up to
                                                            eight verifications
                                                            are allowed per property.</p>

                                                    </li>
                                                    <li>
                                                        <p class="text-start text-gray"><i
                                                                class="fa fa-circle fs-12 mx-2"></i>Chat option not
                                                            available. </p>

                                                    </li>
                                                    <li>
                                                        <p class="text-start text-gray"><i
                                                                class="fa fa-circle fs-12 mx-2"></i>Property
                                                            Promotion not available now.</p>

                                                    </li>
                                                </ul>
                                            </div><!-- CONTENT BOX-->
                                            <div class="pricingTable2-sign-up">
                                                <a href="login.php"
                                                    class="btn btn-block btn-secondary fw-bold text-white  fs-6">Pay
                                                    Now</a>
                                            </div><!-- BUTTON BOX-->
                                        </div>
                                    </div>
                                    <div class="col-xl-4 col-md-6 col-sm-12 col-lg-4">
                                        <div class="pricingTable2 pink mb-4 mb-xl-0  shadow-lg ">
                                            <div class="pricingContent2">
                                                <div class="text-center mt-5 mb-5">
                                                    <h3 class=" mb-5">Silver</h3>
                                                    <span class="price-value1 text-dark fs-1  mb-3 mt-5">₹2000</span>
                                                    <span class="month fs-4  mb-5">/month</span>
                                                    <h4 class=" mb-5">Silver package</h4>
                                                </div>
                                                <ul>
                                                    <li>
                                                        <p class="text-start"><i class="fa fa-circle fs-12 mx-2"></i>Plan
                                                            duration 12 month.</p>

                                                    </li>
                                                    <li>
                                                        <p class="text-start"><i class="fa fa-circle fs-12 mx-2"></i>Post
                                                            any four property
                                                            (Course / Hostel). </p>

                                                    </li>
                                                    <li>
                                                        <p class="text-start"><i class="fa fa-circle fs-12 mx-2"></i>Up to
                                                            eight verifications
                                                            are allowed per property.</p>

                                                    </li>
                                                    <li>
                                                        <p class="text-start text-gray"><i
                                                                class="fa fa-circle fs-12 mx-2"></i>Chat option not
                                                            available. </p>

                                                    </li>
                                                    <li>
                                                        <p class="text-start text-gray"><i
                                                                class="fa fa-circle fs-12 mx-2"></i>Property
                                                            Promotion not available now.</p>

                                                    </li>
                                                </ul>
                                            </div><!-- CONTENT BOX-->
                                            <div class="pricingTable2-sign-up">
                                                <a href="login.php"
                                                    class="btn btn-block btn-secondary fw-bold text-white  fs-6">Pay
                                                    Now</a>
                                            </div><!-- BUTTON BOX-->
                                        </div>
                                    </div>
                                    <div class="col-xl-4 col-md-6 col-sm-12 col-lg-4">
                                        <div class="pricingTable2 pink mb-4 mb-xl-0  shadow-lg ">
                                            <div class="pricingContent2">
                                                <div class="text-center mt-5 mb-5">
                                                    <h3 class=" mb-5">Gold </h3>
                                                    <span class="price-value1 text-dark fs-1  mb-3 mt-5">₹3000</span>
                                                    <span class="month fs-4  mb-5">/month</span>
                                                    <h4 class=" mb-5">Gold subscription plan</h4>
                                                </div>
                                                <ul>
                                                    <li>
                                                        <p class="text-start"><i class="fa fa-circle fs-12 mx-2"></i>Plan
                                                            duration 12 month.</p>

                                                    </li>
                                                    <li>
                                                        <p class="text-start"><i class="fa fa-circle fs-12 mx-2"></i>Post
                                                            any four property
                                                            (Course / Hostel). </p>

                                                    </li>
                                                    <li>
                                                        <p class="text-start"><i class="fa fa-circle fs-12 mx-2"></i>Up to
                                                            eight verifications
                                                            are allowed per property.</p>

                                                    </li>
                                                    <li>
                                                        <p class="text-start text-gray"><i
                                                                class="fa fa-circle fs-12 mx-2"></i>Chat option not
                                                            available. </p>

                                                    </li>
                                                    <li>
                                                        <p class="text-start text-gray"><i
                                                                class="fa fa-circle fs-12 mx-2"></i>Property
                                                            Promotion not available now.</p>

                                                    </li>
                                                </ul>
                                            </div><!-- CONTENT BOX-->
                                            <div class="pricingTable2-sign-up">
                                                <a href="login.php"
                                                    class="btn btn-block btn-secondary fw-bold text-white  fs-6">Pay
                                                    Now</a>
                                            </div><!-- BUTTON BOX-->
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <div class="tab-pane " id="tab-12">
                                <div class="row">
                                    <div class="col-xl-4 col-md-6 col-sm-12 col-lg-4">
                                        <div class="pricingTable2 pink mb-4 mb-xl-0  shadow-lg bg-light-sub">
                                            <div class="pricingContent2">
                                                <div class="text-center mt-5 mb-5">
                                                    <h3 class=" mb-5">Bronze</h3>
                                                    <span class="price-value1 text-dark fs-1  mb-3 mt-5">₹1000</span>
                                                    <span class="month fs-4  mb-5">/year</span>
                                                    <h4 class=" mb-5">Bronze level package</h4>
                                                </div>
                                                <ul>
                                                    <li>
                                                        <p class="text-start"><i class="fa fa-circle fs-12 mx-2"></i>Plan
                                                            duration 12 month.</p>

                                                    </li>
                                                    <li>
                                                        <p class="text-start"><i class="fa fa-circle fs-12 mx-2"></i>Post
                                                            any four property
                                                            (Course / Hostel). </p>

                                                    </li>
                                                    <li>
                                                        <p class="text-start"><i class="fa fa-circle fs-12 mx-2"></i>Up to
                                                            eight verifications
                                                            are allowed per property.</p>

                                                    </li>
                                                    <li>
                                                        <p class="text-start text-gray"><i
                                                                class="fa fa-circle fs-12 mx-2"></i>Chat option not
                                                            available. </p>

                                                    </li>
                                                    <li>
                                                        <p class="text-start text-gray"><i
                                                                class="fa fa-circle fs-12 mx-2"></i>Property
                                                            Promotion not available now.</p>

                                                    </li>
                                                </ul>
                                            </div><!-- CONTENT BOX-->
                                            <div class="pricingTable2-sign-up">
                                                <a href="login.php"
                                                    class="btn btn-block btn-secondary fw-bold text-white  fs-6">Pay
                                                    Now</a>
                                            </div><!-- BUTTON BOX-->
                                        </div>
                                    </div>
                                    <div class="col-xl-4 col-md-6 col-sm-12 col-lg-4">
                                        <div class="pricingTable2 pink mb-4 mb-xl-0  shadow-lg bg-light-sub">
                                            <div class="pricingContent2">
                                                <div class="text-center mt-5 mb-5">
                                                    <h3 class=" mb-5">Silver</h3>
                                                    <span class="price-value1 text-dark fs-1  mb-3 mt-5">₹2000</span>
                                                    <span class="month fs-4  mb-5">/year</span>
                                                    <h4 class=" mb-5">Silver package</h4>
                                                </div>
                                                <ul>
                                                    <li>
                                                        <p class="text-start"><i class="fa fa-circle fs-12 mx-2"></i>Plan
                                                            duration 12 month.</p>

                                                    </li>
                                                    <li>
                                                        <p class="text-start"><i class="fa fa-circle fs-12 mx-2"></i>Post
                                                            any four property
                                                            (Course / Hostel). </p>

                                                    </li>
                                                    <li>
                                                        <p class="text-start"><i class="fa fa-circle fs-12 mx-2"></i>Up to
                                                            eight verifications
                                                            are allowed per property.</p>

                                                    </li>
                                                    <li>
                                                        <p class="text-start text-gray"><i
                                                                class="fa fa-circle fs-12 mx-2"></i>Chat option not
                                                            available. </p>

                                                    </li>
                                                    <li>
                                                        <p class="text-start text-gray"><i
                                                                class="fa fa-circle fs-12 mx-2"></i>Property
                                                            Promotion not available now.</p>

                                                    </li>
                                                </ul>
                                            </div><!-- CONTENT BOX-->
                                            <div class="pricingTable2-sign-up">
                                                <a href="login.php"
                                                    class="btn btn-block btn-secondary fw-bold text-white  fs-6">Pay
                                                    Now</a>
                                            </div><!-- BUTTON BOX-->
                                        </div>
                                    </div>
                                    <div class="col-xl-4 col-md-6 col-sm-12 col-lg-4">
                                        <div class="pricingTable2 pink mb-4 mb-xl-0  shadow-lg bg-light-sub">
                                            <div class="pricingContent2">
                                                <div class="text-center mt-5 mb-5">
                                                    <h3 class=" mb-5">Gold </h3>
                                                    <span class="price-value1 text-dark fs-1  mb-3 mt-5">₹3000</span>
                                                    <span class="month fs-4  mb-5">/year</span>
                                                    <h4 class=" mb-5">Gold subscription plan</h4>
                                                </div>
                                                <ul>
                                                    <li>
                                                        <p class="text-start"><i class="fa fa-circle fs-12 mx-2"></i>Plan
                                                            duration 12 month.</p>

                                                    </li>
                                                    <li>
                                                        <p class="text-start"><i class="fa fa-circle fs-12 mx-2"></i>Post
                                                            any four property
                                                            (Course / Hostel). </p>

                                                    </li>
                                                    <li>
                                                        <p class="text-start"><i class="fa fa-circle fs-12 mx-2"></i>Up to
                                                            eight verifications
                                                            are allowed per property.</p>

                                                    </li>
                                                    <li>
                                                        <p class="text-start text-gray"><i
                                                                class="fa fa-circle fs-12 mx-2"></i>Chat option not
                                                            available. </p>

                                                    </li>
                                                    <li>
                                                        <p class="text-start text-gray"><i
                                                                class="fa fa-circle fs-12 mx-2"></i>Property
                                                            Promotion not available now.</p>

                                                    </li>
                                                </ul>
                                            </div><!-- CONTENT BOX-->
                                            <div class="pricingTable2-sign-up">
                                                <a href="login.php"
                                                    class="btn btn-block btn-secondary fw-bold text-white  fs-6">Pay
                                                    Now</a>
                                            </div><!-- BUTTON BOX-->
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
@endsection


@push('scripts')
@endpush
