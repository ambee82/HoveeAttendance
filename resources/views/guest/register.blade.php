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
                        <h1 class="">Register</h1>
                        <ol class="breadcrumb text-center">
                            <li class="breadcrumb-item"><a href="index.php">Home</a></li>
                            <li class="breadcrumb-item  text-white">Register</li>
                        </ol>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section class="sptb bg-light">
        <div class="container ">
            <div class="row">
                <div class="single-page ">
                    <div class="col-lg-5 col-xl-6 col-md-6 d-block mx-auto  ">
                        <div class="wrapper2 bg-white shadow-lg">
                            <form action="{{ route('auth.register') }}" method="POST" id="Register" class="card-body"
                                tabindex="500">
                                @csrf
                                <div class="text-center">
                                    <img src="{{ asset('assets/images/photos/main-1 (2).png') }}" alt="logo"
                                        width="40">
                                </div>
                                <h5 class="text-dark pt-4 pb-3 fs-6 text-center">Your presence not your absence</h5>

                                <div class="form-group mt-5">


                                    <x-forms.input label="First name" name="first_name" type="text"
                                        placeholder="Enter here"></x-forms.input>
                                </div>
                                <div class="form-group">
                                    <x-forms.input label="Last name" name="last_name" type="text"
                                        placeholder="Enter here"></x-forms.input>
                                </div>
                                <div class="form-group">

                                    <x-forms.input label="Email" name="email" type="email"
                                        placeholder="Enter here"></x-forms.input>
                                </div>
                                <div class="form-group">
                                    <x-forms.input label="Date of birth" name="dob" type="date"
                                        placeholder=""></x-forms.input>
                                </div>
                                <div class="form-group">


                                    <x-forms.input label="Phone Number" name="mobile_no" type="tel"
                                        placeholder="Phone number"></x-forms.input>
                                </div>
                                <div class="form-group">
                                    <x-forms.input label="Pin code" name="pincode" type="text"
                                        placeholder="Pin code"></x-forms.input>
                                </div>
                                <div class="form-group">


                                    <x-forms.select name="governmentproof" label="Select proof" :options="[1 => 'Passport', 2 => 'Aadhar', 3 => 'Driving lisence', 4 => 'Pancard']"
                                        selected="{{ old('governmentproof') }}" />




                                </div>
                                <div class="terms mb-3">
                                    <label>
                                        <input type="checkbox" name="proof_accepted" @checked(old('proof_accepted'))
                                            value="1" required>
                                        I allow to submit ID proof to edit profile info
                                    </label>
                                </div>
                                <div class="terms mb-3">
                                    <label>
                                        <input type="checkbox" name="terms_accepted" @checked(old('terms_accepted'))
                                            value="1" required>
                                        I accept the terms and conditions
                                    </label>
                                </div>



                                <div class="submit text-center mt-2">

                                    <button type="submit" class="btn btn-secondary px-5">Submit</button>

                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection


@push('scripts')
@endpush
