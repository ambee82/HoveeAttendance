@extends('layouts.main')
@section('title', $title)
@push('css')
@endpush

@section('content')
    <section>
        <div class="bannerimg cover-image bg-background3 sptb-2 bg-white"
            data-bs-image-src="assets/images/banners/banner2.jpg">
            <div class="header-text mb-0">
                <div class="container">
                    <div class="text-center text-white ">
                        <h1 class="">Login</h1>
                        <ol class="breadcrumb text-center">
                            <li class="breadcrumb-item"><a href="index.php">Home</a></li>
                            <li class="breadcrumb-item  text-white">Login</li>
                        </ol>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section class="sptb ">
        <div class="card mb-0 bg-light">
            <div class="container">
                <div class="row">
                    <div class="col-md-5 mx-auto ">
                        <!-- Add lists -->
                        <div class="mb-0 mt-5 ">
                            <div class="card card-login">
                                <ul class="nav nav-tabs justify-content-center bg-primary" role="tablist"
                                    style="height: 65px; color: #fff !important;">
                                    <li class="nav-item" role="presentation">
                                        <a class="nav-link active text-white pers-link px-5 py-2 fs-6" id="tab-11-tab"
                                            data-bs-toggle="tab" href="#tab-11" role="tab" aria-controls="tab-11"
                                            aria-selected="true">Login </a>
                                    </li>
                                    <li class="nav-item" role="presentation">
                                        <a class="nav-link text-white pers-link px-5 py-2 fs-6" id="tab-12-tab"
                                            data-bs-toggle="tab" href="#tab-12" role="tab" aria-controls="tab-12"
                                            aria-selected="false">Sign Up </a>
                                    </li>
                                </ul>
                            </div>
                        </div>
                        <!-- /Add lists -->

                        <div class="tab-content">
                            <div class="tab-pane active" id="tab-11">
                                <div class="row ">
                                    <div class="col-md-12 mx-auto ">
                                        <div class="card ">
                                            <div class="card-body">
                                                <div class="form-group">
                                                    <div class="text-start">
                                                        <h2 class="text-primary ">welcome to hovee !!</h2>
                                                        <h5 class="text-dark pb-5 fs-6">Your presence not your absence</h5>
                                                    </div>
                                                    <label class="form-label text-dark">Email / hov id</label>
                                                    <input type="text" class="form-control ps bg-light"
                                                        placeholder="Enter email / hov id">
                                                    <div class="text-center mt-5">
                                                        <a href="otp.php" class=" btn btn-secondary "><span
                                                                class="">Login</span></a>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <div class="tab-pane " id="tab-12">
                                <div class="row ">
                                    <div class="col-md-12 ">
                                        <div class="card ">
                                            <div class="card-body">
                                                <div class="form-group">
                                                    <div class="text-start">
                                                        <h2 class="text-primary ">welcome to hovee !!</h2>
                                                        <h5 class="text-dark pb-5 fs-6">Your presence not your absence</h5>
                                                    </div>
                                                    <div class="row">
                                                        <div class="col-md-6">
                                                            <label class="form-label text-dark">First name</label>
                                                            <input type="text" class="form-control ps bg-light"
                                                                placeholder="Enter here">
                                                        </div>
                                                        <div class="col-md-6">
                                                            <label class="form-label text-dark">Last name</label>
                                                            <input type="text" class="form-control ps bg-light"
                                                                placeholder="Enter here">
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="form-group">
                                                    <label class="form-label">Email</label>
                                                    <input type="email" class="form-control bg-light"
                                                        placeholder="Enter email">
                                                </div>
                                                <div class="form-group">
                                                    <label class="form-label">Date of birth</label>
                                                    <input type="date" class="form-control bg-light">
                                                </div>
                                                <div class="form-group">
                                                    <label class="form-label">Phone number</label>
                                                    <input type="phone number" class="form-control bg-light"
                                                        placeholder="Phone number">
                                                </div>
                                                <div class="form-group">
                                                    <label class="form-label">Pin code</label>
                                                    <input type="zipcode" class="form-control bg-light"
                                                        placeholder="Pin code">
                                                </div>
                                                <div class="terms mb-3">
                                                    <label>
                                                        <input type="checkbox" name="terms_accepted" value="1">
                                                        I accept the terms and conditions
                                                    </label>

                                                </div>
                                                <div class="form-group">
                                                    <label class="form-label">Select Id </label>
                                                    <select class="form-control  select2 form-select bg-light">
                                                        <option value="0">Passport</option>
                                                        <option value="1">Aadhar</option>
                                                        <option value="0">Driving lisence</option>
                                                        <option value="1">Pan Card</option>
                                                    </select>
                                                    <div class="terms mb-5 mt-2">
                                                        <label>
                                                            <input type="checkbox" name="terms_accepted" value="1">
                                                            I allow to submit ID proof to edit profile info
                                                        </label>

                                                    </div>
                                                </div>
                                                <div class="submit text-center mt-2">
                                                    <a href="otp.php" class=" btn btn-secondary "><span
                                                            class="">Submit</span></a>
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
@endsection


@push('scripts')
@endpush
