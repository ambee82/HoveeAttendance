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
                        <h1 class=""> Courses</h1>
                        <ol class="breadcrumb text-center">
                            <li class="breadcrumb-item"><a href="tutor-dashboard.php">Home</a></li>
                            <li class="breadcrumb-item  text-white">Course list</li>
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
                        <div class="card-header bg-primary py-1">
                            <h3 class="card-title text-white fs-5 ">My courses</h3>
                            <div class="ms-auto">
                                <h3 class="card-title fw-bold">
                                    <ul class="nav item2-gl-menu ms-auto ">
                                       
                                        <li class="mx-2 my-2">
                                            <a href="{{ route('tutor.courses.create') }}"
                                                class="text-white fw-bold  fs-6  ">+ Add
                                            </a>
                                        </li>
                                    </ul>
                                </h3>
                            </div>
                        </div>
                    </div>
                    <div class="row ">
                        <div class="col-xl-12 col-lg-12 col-md-12">
                            <div class="card overflow-hidden bg-dash shadow-lg">
                                <div class="row no-gutters blog-list">
                                    <div class="col-xl-4 col-lg-12 col-md-12">
                                        <div class="item7-card-img">
                                            <a href="blog-details.html"></a>
                                            <img src="{{ asset('assets/images/media/media3.jpg') }}" alt="img"
                                                class="cover-image">
                                        </div>
                                    </div>
                                    <div class="col-xl-8 col-lg-12 col-md-12">
                                        <div class="card-body">
                                            <div class="item7-card-desc d-flex mb-1">
                                                <a href="#" class="fw-bold">6th-8th-CBSE</a>
                                                <a href="#" class="fw-bold">BM133</a>
                                                <div class="ms-auto">
                                                    <a href="#" class=" btn btn-primary  text-white"
                                                        data-bs-toggle="modal" data-bs-target="#edit"><i
                                                            class="fa fa-pencil"></i></a>
                                                    <a href="#" class=" btn bg-secondary  text-white"><i
                                                            class="fa fa-trash-o"></i></a>
                                                </div>
                                            </div>
                                            <a href="#"> Batch name :</a>
                                            <a href="#" class="text-dark mx-5 ">Happy Learning</a><br>
                                            <a href="#">Categories :</a>
                                            <a href="#" class="text-dark mx-5 ">Acadamics</a><br>
                                            <a href="#"> Class :</a>
                                            <a href="#" class="text-dark mx-5 ">CBSE</a> <br>
                                            <a href="#">Subject : </a>
                                            <a href="#" class="text-dark mx-5 ">Maths</a><br>
                                            <a href="#"> Course Code : </a>
                                            <a href="#" class="text-dark mx-5 ">BM133</a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-xl-12 col-lg-12 col-md-12">
                            <div class="card overflow-hidden bg-dash shadow-lg">
                                <div class="row no-gutters blog-list">
                                    <div class="col-xl-4 col-lg-12 col-md-12">
                                        <div class="item7-card-img">
                                            <a href="blog-details.html"></a>
                                            <img src="{{ asset('assets/images/media/media3.jpg') }}" alt="img"
                                                class="cover-image">
                                        </div>
                                    </div>
                                    <div class="col-xl-8 col-lg-12 col-md-12">
                                        <div class="card-body">
                                            <div class="item7-card-desc d-flex mb-1">
                                                <a href="#" class="fw-bold">6th-8th-CBSE</a>
                                                <a href="#" class="fw-bold">BM133</a>
                                                <div class="ms-auto">
                                                    <a href="#" class=" btn btn-primary  text-white"
                                                        data-bs-toggle="modal" data-bs-target="#edit"><i
                                                            class="fa fa-pencil"></i></a>
                                                    <a href="#" class=" btn bg-secondary  text-white"><i
                                                            class="fa fa-trash-o"></i></a>
                                                </div>
                                            </div>
                                            <a href="#"> Batch name :</a>
                                            <a href="#" class="text-dark mx-5 ">Happy Learning</a><br>
                                            <a href="#">Categories :</a>
                                            <a href="#" class="text-dark mx-5 ">Acadamics</a><br>
                                            <a href="#"> Class :</a>
                                            <a href="#" class="text-dark mx-5 ">CBSE</a> <br>
                                            <a href="#">Subject : </a>
                                            <a href="#" class="text-dark mx-5 ">Maths</a><br>
                                            <a href="#"> Course Code : </a>
                                            <a href="#" class="text-dark mx-5 ">BM133</a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-xl-12 col-lg-12 col-md-12">
                            <div class="card overflow-hidden bg-dash shadow-lg">
                                <div class="row no-gutters blog-list">
                                    <div class="col-xl-4 col-lg-12 col-md-12">
                                        <div class="item7-card-img">
                                            <a href="blog-details.html"></a>
                                            <img src="{{ asset('assets/images/media/media3.jpg') }}" alt="img"
                                                class="cover-image">
                                        </div>
                                    </div>
                                    <div class="col-xl-8 col-lg-12 col-md-12">
                                        <div class="card-body">
                                            <div class="item7-card-desc d-flex mb-1">
                                                <a href="#" class="fw-bold">

                                                    5th-6th-CBSE</a>
                                                <a href="#" class="fw-bold">BM133</a>
                                                <div class="ms-auto">
                                                    <a href="#" class=" btn btn-primary  text-white"
                                                        data-bs-toggle="modal" data-bs-target="#edit"><i
                                                            class="fa fa-pencil"></i></a>
                                                    <a href="#" class=" btn bg-secondary  text-white"><i
                                                            class="fa fa-trash-o"></i></a>
                                                </div>
                                            </div>

                                            <a href="#">

                                                Batch name :</a>
                                            <a href=" #" class="text-dark mx-5 ">Happy Learning</a><br>
                                            <a href="#">

                                                Categories :</a>
                                            <a href="#" class="text-dark mx-5 ">Acadamics</a><br>
                                            <a href="#">

                                                Class :</a>
                                            <a href="#" class="text-dark mx-5 ">CBSE</a> <br>
                                            <a href="#">

                                                Subject : </a>
                                            <a href="#" class="text-dark mx-5 ">Maths</a><br>
                                            <a href="#">

                                                Course Code : </a>
                                            <a href="#" class="text-dark mx-5 ">BM133</a>

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
