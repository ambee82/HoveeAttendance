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
                        <h1 class="">OTP</h1>
                        <ol class="breadcrumb text-center">
                            <li class="breadcrumb-item"><a href="index.php">Home</a></li>
                            <li class="breadcrumb-item  text-white">OTP</li>
                        </ol>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section class="sptb bg-light">
        <div class="container">
            <div class="row">
                <div class="col-lg-5 col-xl-4 col-md-6 d-block mx-auto">
                    <div class="single-page w-100 p-0">
                        <div class="wrapper wrapper2">
                            <form method="POST" action="{{ route('auth.verify-otp') }}" class="card-body">
                                <h3 class="pb-2">Enter the OTP</h3>
                                <p class="text-gray pb-5">An OTP has been sent to **** ****{{ substr($otp_telephone, -2) }}
                                </p>


                                <div class="mt-3">
                                    @csrf
                                    <x-forms.input label="Enter OTP" name="otp" type="text"
                                        placeholder="Enter 5 digit OTP"></x-forms.input>
                                    <input type="hidden" name="user_id" value="{{ $otp_user_id }}">
                                </div>

                                <div class="text-center mt-3 text-black">{{ $otp_digits }}</div>


                                <div class="submit">
                                    <button type="submit" class="btn btn-secondary btn-block">
                                        <span class="">Verify</span>
                                    </button>
                                </div>

                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

   

    <div class="modal fade " id="register" tabindex="-1" role="dialog" aria-hidden="true">
        <div class="modal-dialog" role="document">
            <div class="modal-content  ">
                <div class="modal-body">
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close">
                    </button>
                    <h5 class="text-primary pt-4 pb-5 fs-3 fw-bold text-center">Select Your Role</h5>
                    <div class="row mt-5">
                        <div class="col-lg-4 col-md-6">
                            <div class="card shadow-lg">
                                <div class="card-body">
                                    <div class="cat-item text-center">
                                        <a href="#" data-bs-toggle="modal" data-bs-target="#teacher"></a>
                                        <div class="cat-img">
                                            <img src="{{ asset('assets/images/categories/apr-white.png') }}" alt="img">
                                        </div>
                                        <div class="cat-desc">
                                            <h3 class="font-weight-semibold mb-0 fs-6">Teacher</h3>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-4 col-md-6">
                            <div class="card shadow-lg">
                                <div class="card-body">
                                    <div class="cat-item text-center">
                                        <a href="#" data-bs-toggle="modal" data-bs-target="#student"></a>
                                        <div class="cat-img">
                                            <img src="{{ asset('assets/images/categories/6.png') }}" alt="img">
                                        </div>
                                        <div class="cat-desc">
                                            <h3 class="font-weight-semibold mb-0 fs-6">Student</h3>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-4 col-md-6">
                            <div class="card shadow-lg">
                                <div class="card-body">
                                    <div class="cat-item text-center">
                                        <a href="#" data-bs-toggle="modal" data-bs-target="#hostel"></a>
                                        <div class="cat-img">
                                            <img src="{{ asset('assets/images/categories/apr.png') }}" alt="img">
                                        </div>
                                        <div class="cat-desc">
                                            <h3 class="font-weight-semibold mb-0 fs-6">Hostel</h3>
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

    <div class="modal fade " id="teacher" tabindex="-1" role="dialog" aria-hidden="true">
        <div class="modal-dialog" role="document">
            <div class="modal-content ">
                <div class="modal-body">
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close">
                    </button>
                    <h5 class="text-primary pt-4 pb-5 fs-3 fw-bold text-center">Select your role</h5>
                    <div class="row mt-5">
                        <div class="col-md-6">
                            <div class="card shadow-lg">
                                <div class="card-body">
                                    <div class="cat-item text-center">
                                        <a href="tutor-details-form.php"></a>
                                        <div class="cat-img">
                                            <img src="{{ asset('assets/images/categories/5.png') }}" alt="img">
                                        </div>
                                        <div class="cat-desc">
                                            <h3 class="font-weight-semibold mb-0 fs-6"> Individual tutor</h3>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="card shadow-lg">
                                <div class="card-body">
                                    <div class="cat-item text-center">
                                        <a href="institute-details-form.php"></a>
                                        <div class="cat-img">
                                            <img src="{{ asset('assets/images/categories/apartment.png') }}"
                                                alt="img">
                                        </div>
                                        <div class="cat-desc">
                                            <h3 class="font-weight-semibold mb-0 fs-6"> Institute</h3>
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

    <div class="modal fade " id="student" tabindex="-1" role="dialog" aria-hidden="true">
        <div class="modal-dialog" role="document">
            <div class="modal-content ">
                <div class="modal-body">
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close">
                    </button>
                    <h5 class="text-primary pt-4 pb-5 fs-3 fw-bold text-center">Age Group Eligibility</h5>
                    <div class="row mt-5">
                        <div class="col-md-6">
                            <div class="card shadow-lg">
                                <div class="card-body">
                                    <div class="cat-item text-center">
                                        <a href="parent-detailform.php"></a>
                                        <div class="cat-img">
                                            <img src="{{ asset('assets/images/categories/duplex.png') }}" alt="img">
                                        </div>
                                        <div class="cat-desc">
                                            <h3 class="font-weight-semibold mb-0 fs-6">Parent </h3>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="card shadow-lg">
                                <div class="card-body">
                                    <div class="cat-item text-center">
                                        <a href="student-detail-form.php"></a>
                                        <div class="cat-img">
                                            <img src="{{ asset('assets/images/categories/10.jpg') }}" alt="img">
                                        </div>
                                        <div class="cat-desc">
                                            <h3 class="font-weight-semibold mb-0 fs-6">Student</h3>
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

    <div class="modal fade " id="hostel" tabindex="-1" role="dialog" aria-hidden="true">
        <div class="modal-dialog" role="document">
            <div class="modal-content ">
                <div class="modal-body">
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close">
                    </button>
                    <h5 class="text-primary pt-4 pb-5 fs-3 fw-bold text-center">Select Your role</h5>
                    <div class="row mt-5">
                        <div class="col-md-6">
                            <div class="card shadow-lg">
                                <div class="card-body">
                                    <div class="cat-item text-center">
                                        <a href="hostel-detailform.php"></a>
                                        <div class="cat-img">
                                            <img src="{{ asset('assets/images/categories/5.png') }}" alt="img">
                                        </div>
                                        <div class="cat-desc">
                                            <h3 class="font-weight-semibold mb-0 fs-6">Hostel proprietor </h3>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="card shadow-lg">
                                <div class="card-body">
                                    <div class="cat-item text-center">
                                        <a href="hosteller-detailform.php"></a>
                                        <div class="cat-img">
                                            <img src="{{ asset('assets/images/categories/apartment.png') }}"
                                                alt="img">
                                        </div>
                                        <div class="cat-desc">
                                            <h3 class="font-weight-semibold mb-0 fs-6">Hosteller</h3>
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

@endsection


@push('scripts')
@endpush
