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
                        <h1 class="">Edit Profile</h1>
                        <ol class="breadcrumb text-center">
                            <li class="breadcrumb-item"><a href="index.php">Home</a></li>
                            <li class="breadcrumb-item  text-white">Edit Profile</li>
                        </ol>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section class="sptb">
        <div class="container">
            <div class="row">
                @include('layouts.rolebar.main')


                <div class="col-xl-9 col-lg-12 col-md-12">
                    <div class="col-md-12">
                        <!-- Add lists -->
                        <div class="mb-0 ">
                            <div class="card">
                                <ul class="nav nav-tabs justify-content-center bg-primary   py-1" role="tablist">
                                    <li class="nav-item" role="presentation">
                                        <a href="{{ route('user.profile.info') }}"
                                            class="nav-link  pers-link fs-6 px-5 py-2  text-white"
                                            aria-selected="false">Personal Information</a>
                                    </li>
                                    <li class="nav-item" role="presentation">
                                        <a class="nav-link active pers-link fs-6 px-5 py-2  text-white" id="tab-12-tab"
                                            data-bs-toggle="tab" href="#tab-12" role="tab" aria-controls="tab-12"
                                            aria-selected="true"> Tuition
                                            Address
                                        </a>
                                    </li>
                                    @if ($userinfo->role_id == 1)
                                        <li class="nav-item" role="presentation">
                                            <a class="nav-link pers-link fs-6 px-5 py-2  text-white"
                                                href="{{ route('tutor.profile.qualification') }}">
                                                Qualification
                                            </a>
                                        </li>
                                    @endif
                                </ul>
                            </div>
                        </div>


                        <div class="tab-content">

                            <div class="tab-pane active" id="tab-12">
                                <div class="row ">
                                    <div class="col-md-12 ">
                                        <form method="POST" action="{{ route('user.forms.profile.address') }}"
                                            class="card ">
                                            <div class="card-body">
                                                @csrf
                                                <div class="form-group">
                                                    <div class="row">
                                                        <div class="col-md-6">
                                                            <x-forms.input label="Address 1" name="primary_address"
                                                                type="text" placeholder="Enter Permanent address"
                                                                value="{{ $userinfo->primary_address }}"></x-forms.input>
                                                        </div>
                                                        <div class="col-md-6">
                                                            <x-forms.input label="Address 2" name="secondary_address"
                                                                type="text" placeholder="Enter Additional address"
                                                                value="{{ $userinfo->secondary_address }}"></x-forms.input>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="form-group">
                                                    <div class="row">
                                                        <div class="col-md-6">
                                                            <x-forms.input label="City Name" name="city" type="text"
                                                                placeholder="Enter your city Name"
                                                                value="{{ $userinfo->city }}"></x-forms.input>
                                                        </div>
                                                        <div class="col-md-6">

                                                            <x-forms.input label="State" name="state" type="text"
                                                                placeholder="Enter your state"
                                                                value="{{ $userinfo->state }}"></x-forms.input>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="form-group">
                                                    <div class="row">
                                                        <div class="col-md-6">

                                                            <x-forms.input label="Country" name="country" type="text"
                                                                placeholder="Enter your Country"
                                                                value="{{ $userinfo->country }}"></x-forms.input>
                                                        </div>
                                                        <div class="col-md-6">

                                                            <x-forms.input label="Zipcode" name="zipcode" type="text"
                                                                placeholder="Enter your zipcode"
                                                                value="{{ $userinfo->zipcode }}"></x-forms.input>
                                                        </div>
                                                    </div>
                                                </div>

                                            </div>
                                            <div class="card-footer d-flex justify-content-end ">

                                                <button type="submit" class="btn btn-secondary">Save</button>
                                            </div>

                                        </form>
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
