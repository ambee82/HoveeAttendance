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
                        <h1 class=""> Course Form</h1>
                        <ol class="breadcrumb text-center">
                            <li class="breadcrumb-item"><a href="tutor-dashboard.php">Home</a></li>
                            <li class="breadcrumb-item  text-white"> Course Form</li>
                        </ol>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <section class="sptb  bg-white">
        <div class="container ">
            <div class="row ">
                @include('layouts.rolebar.main')

                <div class="col-xl-9 col-lg-12 col-md-12">
                    <div class="card ">
                        <div class="card-header bg-primary ">
                            <h3 class="card-title text-white fs-5 py-1">Course form</h3>
                        </div>
                    </div>
                    <div class="card mb-0 ">
                        <div class="container">
                            <div class="row">
                                <div class="single-page ">
                                    <div class="col-lg-12 col-xl-12 col-md-6 d-block mx-auto kmky ">
                                        <div class="wrapper2 bg-white">
                                            <form action="" method="POST" id="Register" class="card-body"
                                                tabindex="500">
                                                <div class="form-group">
                                                    <label class="form-label text-dark">Batch name</label>
                                                    <select class="form-control  select2 form-select bg-light">
                                                        <option value="0">Hunter</option>
                                                        <option value="1">Happy learnig</option>
                                                    </select>
                                                </div>
                                                <div class="form-group">
                                                    <label class="form-label text-dark">Select categories</label>
                                                    <select class="form-control  select2 form-select bg-light">
                                                        <option value="0">Online</option>
                                                        <option value="1">Offline</option>
                                                    </select>
                                                </div>
                                                <div class="form-group">
                                                    <label class="form-label text-dark">Select board</label>
                                                    <select class="form-control  select2 form-select bg-light">
                                                        <option value="0">CBSE</option>
                                                    </select>
                                                </div>
                                                <div class="form-group">
                                                    <div class="row">
                                                        <div class="col-md-6">
                                                            <label class="form-label text-dark">Select class</label>
                                                            <select class="form-control  select2 form-select bg-light">
                                                                <option value="0">10th</option>
                                                                <option value="1">12th</option>
                                                            </select>
                                                        </div>
                                                        <div class="col-md-6">
                                                            <label class="form-label text-dark">Select subject</label>
                                                            <select class="form-control  select2 form-select bg-light">
                                                                <option value="0">English</option>
                                                                <option value="1">Maths</option>
                                                            </select>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="form-group">
                                                    <div class="row">
                                                        <div class="col-md-6">
                                                            <label class="form-label">Course code</label>
                                                            <input type="text" class="form-control "
                                                                placeholder="Course code">
                                                        </div>
                                                        <div class="col-md-6">
                                                            <label class="form-label">Remarks</label>
                                                            <input type="text" class="form-control "
                                                                placeholder="Remarks ">
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="submit text-end mt-5">
                                                    <a href="#" class=" btn btn-secondary fs-6 px-5"
                                                        data-bs-toggle="modal" data-bs-target="#thankyou"><span
                                                            class="">save</span></a>
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
