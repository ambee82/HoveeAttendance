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
                                        <a class="nav-link active pers-link fs-6 px-5 py-2  text-white" id="tab-11-tab"
                                            data-bs-toggle="tab" href="#tab-11" role="tab" aria-controls="tab-11"
                                            aria-selected="true">Personal Information</a>
                                    </li>
                                    <li class="nav-item" role="presentation">
                                        <a class="nav-link pers-link fs-6 px-5 py-2  text-white" id="tab-12-tab"
                                            href="{{ route('user.profile.address') }}" role="tab"> Tuition
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
                        <!-- /Add lists -->

                        <div class="tab-content">
                            <div class="tab-pane active" id="tab-11">
                                <div class="row ">
                                    <div class="col-md-12 ">
                                        <div class="card ">
                                            <form method="POST" action="{{ route('user.forms.profile.info') }}"
                                                class="card-body">
                                                @csrf
                                                <div class="form-group">
                                                    <div class="row">
                                                        <div class="col-md-6">
                                                            <x-forms.input label="First name" name="first_name"
                                                                type="text" placeholder="Enter your name"
                                                                value="{{ $user->first_name }}"></x-forms.input>
                                                        </div>
                                                        <div class="col-md-6">

                                                            <x-forms.input label="Last name" name="last_name" type="text"
                                                                placeholder="Enter your name"
                                                                value="{{ $user->last_name }}"></x-forms.input>
                                                        </div>

                                                    </div>
                                                </div>
                                                <div class="form-group">
                                                    <div class="row">
                                                        <div class="col-md-6">
                                                            <x-forms.input label="Email" name="email" type="email"
                                                                placeholder="Enter your email"
                                                                value="{{ $user->email }}"></x-forms.input>
                                                        </div>
                                                        <div class="col-md-6">
                                                            <x-forms.input label="Date of birth" name="dob"
                                                                type="date" placeholder="Date of birth"
                                                                value="{{ $user->dob }}"></x-forms.input>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="form-group ">
                                                    <div class="row">
                                                        <div class="col-md-12">
                                                            <div class="form-group">
                                                                <label class="form-label">Phone number</label>
                                                                <div class="input-group">
                                                                    <input type="tel" readonly class="form-control py-5 "
                                                                        placeholder="your phone number"
                                                                        value="{{ $user->mobile_no }}">
                                                                    <a href="#" class=" btn btn-secondary pt-3"
                                                                        data-bs-toggle="modal"
                                                                        data-bs-target="#otppopup"><span class="">
                                                                            <i class="fa fa-pencil"></i>
                                                                        </span></a>

                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="form-group">
                                                    <div class=" card-footer d-flex justify-content-end">
                                                        <button type="submit" class="btn btn-secondary">Save</button>
                                                    </div>

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
        </div>
    </section>
@endsection


@push('scripts')
@endpush
