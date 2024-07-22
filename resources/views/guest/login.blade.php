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
                        <h1 class="">Login</h1>
                        <ol class="breadcrumb text-center">
                            <li class="breadcrumb-item"><a href="{{ route('index') }}">Home</a></li>
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
                                            href="{{ route('login') }}" aria-selected="true">Login </a>
                                    </li>
                                    <li class="nav-item" role="presentation">
                                        <a class="nav-link text-white pers-link px-5 py-2 fs-6" id="tab-12-tab"
                                            href="{{ route('register') }}">Sign Up </a>
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
                                            <form method="POST" action="{{ route('auth.login') }}" class="card-body">
                                                @csrf
                                                <div class="form-group">
                                                    <div class="text-start">
                                                        <h2 class="text-primary ">welcome to hovee !!</h2>
                                                        <h5 class="text-dark pb-5 fs-6">Your presence not your absence</h5>
                                                    </div>


                                                    <x-forms.input label="Email / hov id" name="identifier" type="text"
                                                        placeholder="Enter email / hov id"></x-forms.input>



                                                    <div class="text-center mt-5">
                                                        <button type="submit" class=" btn btn-secondary ">
                                                            <span class="">Login</span>
                                                        </button>
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
