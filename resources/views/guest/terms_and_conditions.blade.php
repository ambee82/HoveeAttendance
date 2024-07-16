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
                        <h1 class="">Terms and Conditions </h1>
                        <ol class="breadcrumb text-center">
                            <li class="breadcrumb-item"><a href="javascript:void(0);">Home</a></li>
                            <li class="breadcrumb-item active text-white" aria-current="page"> Terms and Conditions</li>
                        </ol>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!--Breadcrumb-->
    <section class="sptb">
        <div class=" bg-white ">
            <div class="header-text mb-0">
                <div class="container">
                    <div class="text-justify">
                        <h2 class="mb-5 fw-bold text-primary">hovee Terms and Conditions</h2>
                        <p class="leading-normal fs-6  mb-5">Welcome to our hovee platform. By accessing or using our app,
                            you agree to comply with and
                            be bound by the following terms and conditions:</p>



                        <h4 class="mb-3 fw-bold text-primary">1. Attendance Agreement</h4>
                        <p class="leading-normal fs-6 ">Your use of this platform implies that you agree to enter into a
                            attendance agreement with the property owner under the following terms:</p>



                        <h4 class="mb-3 fw-bold text-primary">2. Payment and Security Deposit</h4>
                        <p class="leading-normal mb-5 fs-6 ">The tenant agrees to pay attendance on a periodic basis, as
                            agreed upon
                            with the property owner. Additionally, the tenant may be required to pay a security deposit,
                            which will be refunded upon the termination of the attendance agreement, subject to deductions
                            for damages or unpaid attendance.</p>



                        <h4 class="mb-3 fw-bold text-primary">3. Responsibilities of the Parties</h4>
                        <p class="leading-normal mb-5 fs-6 ">The property owner is responsible for maintaining the property
                            in a habitable
                            condition and addressing any repair issues promptly. The tenant is responsible for keeping the
                            property clean
                            and notifying the property owner of any maintenance issues.</p>


                        <h4 class="mb-3 fw-bold text-primary">4. Termination of Agreement</h4>
                        <p class="leading-normal mb-5 fs-6 ">The attendance agreement may be terminated by either party with
                            proper notice as specified
                            in the agreement. Upon termination, the tenant agrees to vacate the premises and return the
                            property to the owner in the same
                            condition as received, subject to reasonable wear and tear.</p>

                        <h4 class="mb-3 fw-bold text-primary">5. Changes to Terms</h4>
                        <p class="leading-normal mb-5 fs-6 ">We reserve the right to modify these terms at any time. You
                            agree to review these terms periodically to be aware of such modifications, and your continued
                            use of the platform shall be deemed your conclusive acceptance of the modified terms.</p>
                    </div>
                </div>
            </div>
        </div>
    </section>

@endsection


@push('scripts')
@endpush
