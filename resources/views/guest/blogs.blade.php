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
                        <h1 class="">News</h1>
                        <ol class="breadcrumb text-center">
                            <li class="breadcrumb-item"><a href="{{ route('index') }}">Home</a></li>
                            <li class="breadcrumb-item  text-white">News</li>
                        </ol>
                    </div>
                </div>
            </div>
        </div>
    </section>


    <section class="sptb bg-white">
        <div class="container">
            <div class="section-title center-block text-start">
                <h2 class="fw-bold fs-1">Recent Updates</h2>
                <p class="text-start">Sed do eiusmod tempor incididunt ut labore et dolore
                    magna aliqua</p>
            </div>
            <div class="row">
                <div class="col-md-12 bg-dash pt-5">
                    <div id="owl-demo2" class="owl-carousel owl-carousel-icons2">
                        <div class="item ">
                            <div class="card card-aside">
                                <div class="card-body ">
                                    <div class="card-item d-flex">
                                        <img src="{{ asset('assets/images/products/f1.jpg') }}" alt="img"
                                            class="w-8 h-8 br-3">
                                        <div class="ms-4">
                                            <h6 class="font-weight-bold mt-2 mb-3">Duplex House Model</h6>
                                            <a href="blog-detail.php" class="btn btn-primary btn-sm">Read More</a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="item ">
                            <div class="card card-aside">
                                <div class="card-body ">
                                    <div class="card-item d-flex">
                                        <img src="{{ asset('assets/images/products/f2.jpg') }}" alt="img"
                                            class="w-8 h-8 br-3">
                                        <div class="ms-4">
                                            <h6 class="font-weight-bold mt-2 mb-3">Duplex House Model</h6>
                                            <a href="blog-detail.php" class="btn btn-primary btn-sm">Read More</a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="item ">
                            <div class="card card-aside">
                                <div class="card-body ">
                                    <div class="card-item d-flex">
                                        <img src="{{ asset('assets/images/products/f3.jpg') }}" alt="img"
                                            class="w-8 h-8 br-3">
                                        <div class="ms-4">
                                            <h6 class="font-weight-bold mt-2 mb-3">Duplex House Model</h6>
                                            <a href="blog-detail.php" class="btn btn-primary btn-sm">Read More</a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="item ">
                            <div class="card card-aside">
                                <div class="card-body ">
                                    <div class="card-item d-flex">
                                        <img src="{{ asset('assets/images/products/f4.jpg') }}" alt="img"
                                            class="w-8 h-8 br-3">
                                        <div class="ms-4">
                                            <h6 class="font-weight-bold mt-2 mb-3">Duplex House Model</h6>
                                            <a href="blog-detail.php" class="btn btn-primary btn-sm">Read More</a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="item ">
                            <div class="card card-aside">
                                <div class="card-body ">
                                    <div class="card-item d-flex">
                                        <img src="{{ asset('assets/images/products/h1.jpg') }}" alt="img"
                                            class="w-8 h-8 br-3">
                                        <div class="ms-4">
                                            <h6 class="font-weight-bold mt-2 mb-3">Duplex House Model</h6>
                                            <a href="blog-detail.php" class="btn btn-primary btn-sm">Read More</a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="item ">
                            <div class="card card-aside">
                                <div class="card-body ">
                                    <div class="card-item d-flex">
                                        <img src="{{ asset('assets/images/products/h2.jpg') }}" alt="img"
                                            class="w-8 h-8 br-3">
                                        <div class="ms-4">
                                            <h6 class="font-weight-bold mt-2 mb-3">Duplex House Model</h6>
                                            <a href="blog-detail.php" class="btn btn-primary btn-sm">Read More</a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="item ">
                            <div class="card card-aside">
                                <div class="card-body ">
                                    <div class="card-item d-flex">
                                        <img src="{{ asset('assets/images/products/h3.jpg') }}" alt="img"
                                            class="w-8 h-8 br-3">
                                        <div class="ms-4">
                                            <h6 class="font-weight-bold mt-2 mb-3">Duplex House Model</h6>
                                            <a href="blog-detail.php" class="btn btn-primary btn-sm">Read More</a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="item ">
                            <div class="card card-aside">
                                <div class="card-body ">
                                    <div class="card-item d-flex">
                                        <img src="{{ asset('assets/images/products/h4.jpg') }}" alt="img"
                                            class="w-8 h-8 br-3">
                                        <div class="ms-4">
                                            <h6 class="font-weight-bold mt-2 mb-3">Duplex House Model</h6>
                                            <a href="blog-detail.php" class="btn btn-primary btn-sm">Read More</a>
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

    <section class="sptb bg-white">
        <div class="container">
            <div class="section-title center-block text-start">
                <h2 class="fw-bold fs-1">News World</h2>
                <p class="text-start">Sed do eiusmod tempor incididunt ut labore et dolore
                    magna aliqua</p>
            </div>
            <div class="row">
                <div class="col-xl-12 col-lg-12 col-md-12">
                    <div class="row">
                        <div class="col-xl-3 col-lg-4 col-md-6">
                            <div class="card">
                                <div class="item7-card-img">
                                    <a href="blog-detail.php"></a>
                                    <img src="{{ asset('assets/images/products/products/b1.jpg') }}" alt="img"
                                        class="cover-image">
                                </div>
                                <div class="card-body">
                                    <a href="blog-detail.php" class="text-dark">
                                        <h4 class="font-weight-semibold">Luxury House For Sale</h4>
                                    </a>
                                    <p class="text-justify">Ut enim ad minima veniam, quis exercitationem into enim ad
                                        minima veniam, quis nostrum itationem </p>
                                    <a href="blog-detail.php" class="btn btn-primary btn-sm">Read More</a>
                                </div>
                            </div>
                        </div>
                        <div class="col-xl-3 col-lg-4 col-md-6">
                            <div class="card">
                                <div class="item7-card-img">
                                    <a href="blog-detail.php"></a>
                                    <img src="{{ asset('assets/images/products/products/ed2.jpg') }}" alt="img"
                                        class="cover-image">
                                </div>
                                <div class="card-body">
                                    <a href="blog-detail.php" class="text-dark">
                                        <h4 class="font-weight-semibold">Duplex Flat For Sale</h4>
                                    </a>
                                    <p class="text-justify">Ut enim ad minima veniam, quis exercitationem into enim ad
                                        minima veniam, quis nostrum itationem </p>
                                    <a href="blog-detail.php" class="btn btn-primary btn-sm">Read More</a>
                                </div>
                            </div>
                        </div>
                        <div class="col-xl-3 col-lg-4 col-md-6">
                            <div class="card">
                                <div class="item7-card-img">
                                    <a href="blog-detail.php"></a>
                                    <img src="{{ asset('assets/images/products/products/b3.jpg') }}" alt="img"
                                        class="cover-image">
                                </div>
                                <div class="card-body">
                                    <a href="blog-detail.php" class="text-dark">
                                        <h4 class="font-weight-semibold">Luxury House For Sale</h4>
                                    </a>
                                    <p class="text-justify">Ut enim ad minima veniam, quis exercitationem into enim ad
                                        minima veniam, quis nostrum itationem </p>
                                    <a href="blog-detail.php" class="btn btn-primary btn-sm">Read More</a>
                                </div>
                            </div>
                        </div>
                        <div class="col-xl-3 col-lg-4 col-md-6">
                            <div class="card">
                                <div class="item7-card-img">
                                    <a href="blog-detail.php"></a>
                                    <img src="{{ asset('assets/images/products/products/b4.jpg') }}" alt="img"
                                        class="cover-image">
                                </div>
                                <div class="card-body">
                                    <a href="blog-detail.php" class="text-dark">
                                        <h4 class="font-weight-semibold">Luxury Flat For Rent</h4>
                                    </a>
                                    <p class="text-justify">Ut enim ad minima veniam, quis exercitationem into enim ad
                                        minima veniam, quis nostrum itationem </p>
                                    <a href="blog-detail.php" class="btn btn-primary btn-sm">Read More</a>
                                </div>
                            </div>
                        </div>
                        <div class="col-xl-3 col-lg-4 col-md-6">
                            <div class="card">
                                <div class="item7-card-img">
                                    <a href="blog-detail.php"></a>
                                    <img src="{{ asset('assets/images/products/products/b5.jpg') }}" alt="img"
                                        class="cover-image">
                                </div>
                                <div class="card-body">
                                    <a href="blog-detail.php" class="text-dark">
                                        <h4 class="font-weight-semibold">Deluxe House For Rent</h4>
                                    </a>
                                    <p class="text-justify">Ut enim ad minima veniam, quis exercitationem into enim ad
                                        minima veniam, quis nostrum itationem </p>
                                    <a href="blog-detail.php" class="btn btn-primary btn-sm">Read More</a>
                                </div>
                            </div>
                        </div>
                        <div class="col-xl-3 col-lg-4 col-md-6">
                            <div class="card">
                                <div class="item7-card-img">
                                    <a href="blog-detail.php"></a>
                                    <img src="{{ asset('assets/images/products/products/ed1.jpg') }}" alt="img"
                                        class="cover-image">
                                </div>
                                <div class="card-body">
                                    <a href="blog-detail.php" class="text-dark">
                                        <h4 class="font-weight-semibold">Apartment For Sale</h4>
                                    </a>
                                    <p class="text-justify">Ut enim ad minima veniam, quis exercitationem into enim ad
                                        minima veniam, quis nostrum itationem </p>
                                    <a href="blog-detail.php" class="btn btn-primary btn-sm">Read More</a>
                                </div>
                            </div>
                        </div>
                        <div class="col-xl-3 col-lg-4 col-md-6">
                            <div class="card">
                                <div class="item7-card-img">
                                    <a href="blog-detail.php"></a>
                                    <img src="{{ asset('assets/images/products/products/ed2.jpg') }}" alt="img"
                                        class="cover-image">
                                </div>
                                <div class="card-body">
                                    <a href="blog-detail.php" class="text-dark">
                                        <h4 class="font-weight-semibold">Deluxe House For Rent</h4>
                                    </a>
                                    <p class="text-justify">Ut enim ad minima veniam, quis exercitationem into enim ad
                                        minima veniam, quis nostrum itationem </p>
                                    <a href="blog-detail.php" class="btn btn-primary btn-sm">Read More</a>
                                </div>
                            </div>
                        </div>
                        <div class="col-xl-3 col-lg-4 col-md-6">
                            <div class="card">
                                <div class="item7-card-img">
                                    <a href="blog-detail.php"></a>
                                    <img src="{{ asset('assets/images/products/products/ed3.jpg') }}" alt="img"
                                        class="cover-image">
                                </div>
                                <div class="card-body">
                                    <a href="blog-detail.php" class="text-dark">
                                        <h4 class="font-weight-semibold">Apartment For Sale</h4>
                                    </a>
                                    <p class="text-justify">Ut enim ad minima veniam, quis exercitationem into enim ad
                                        minima veniam, quis nostrum itationem </p>
                                    <a href="blog-detail.php" class="btn btn-primary btn-sm">Read More</a>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="center-block text-center">
                        <ul class="pagination mb-0">
                            <li class="page-item page-prev disabled">
                                <a class="page-link" href="blog-detail.php" tabindex="-1">Prev</a>
                            </li>
                            <li class="page-item active"><a class="page-link" href="blog-detail.php">1</a></li>
                            <li class="page-item"><a class="page-link" href="blog-detail.php">2</a></li>
                            <li class="page-item"><a class="page-link" href="blog-detail.php">3</a></li>
                            <li class="page-item page-next">
                                <a class="page-link" href="blog-detail.php">Next</a>
                            </li>
                        </ul>
                    </div>

                </div>
            </div>

        </div>
    </section>


@endsection


@push('scripts')
@endpush
