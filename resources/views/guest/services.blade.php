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
                        <h1 class="">Services</h1>
                        <ol class="breadcrumb text-center">
                            <li class="breadcrumb-item"><a href="{{ route('index') }}">Home</a></li>
                            <li class="breadcrumb-item  text-white">Services</li>
                        </ol>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section class="services-1 bg-white">
        <div class="container ">
            <div class="row">

                <div class="col-md-6">
                    <h1 class="fw-bold fs-3 pb-3">RENT</h1>
                    <P>It is a long established fact that a reader will be distracted by the readable content of a page when
                        looking at its layout. The point of using Lorem Ipsum is that it has a more-or-less normal
                        distribution of letters, as opposed to using 'Content here, content here', making it look like
                        readable English. Many desktop publishing packages and web page editors now use Lorem Ipsum as their
                        default model text, and a search for 'lorem ipsum' will uncover many web sites still in their
                        infancy. Various versions have evolved over the years, sometimes by accident, sometimes on purpose
                    </P>
                    <P>There are many variations of passages of Lorem Ipsum available, but the majority have suffered
                        alteration in some form, by injected humour, or randomised words which don't look even slightly
                        believable. If you are going to use a passage of Lorem Ipsum, you need to be sure there isn't
                        anything embarrassing hidden in the middle of text.</P>

                </div>
                <div class="col-md-6">
                    <img src="{{ asset('assets/images/categories/ed2.jpg') }}" alt="">
                </div>
            </div>
        </div>
    </section>
    <section class="services attend bg-white">
        <div class="container ">
            <div class="row">
                <div class="col-md-6">
                    <img src="{{ asset('assets/images/categories/flats.png') }}" alt="">
                </div>
                <div class="col-md-6">
                    <h1 class="fw-bold fs-3 pb-3 pt-xs-2 attend2">ATTENDANCE</h1>
                    <P>It is a long established fact that a reader will be distracted by the readable content of a page when
                        looking at its layout. The point of using Lorem Ipsum is that it has a more-or-less normal
                        distribution of letters, as opposed to using 'Content here, content here', making it look like
                        readable English. Many desktop publishing packages and web page editors now use Lorem Ipsum as their
                        default model text, and a search for 'lorem ipsum' will uncover many web sites still in their
                        infancy. Various versions have evolved over the years, sometimes by accident, sometimes on purpose
                    </P>
                    <P>There are many variations of passages of Lorem Ipsum available, but the majority have suffered
                        alteration in some form, by injected humour, or randomised words which don't look even slightly
                        believable. If you are going to use a passage of Lorem Ipsum, you need to be sure there isn't
                        anything embarrassing hidden in the middle of text.</P>

                </div>
            </div>
        </div>
    </section>
    <section class="services-1 bg-white">
        <div class="container ">
            <div class="row">

                <div class="col-md-6">
                    <h1 class="fw-bold fs-3 pb-3 attend3">TAXI</h1>
                    <P>It is a long established fact that a reader will be distracted by the readable content of a page when
                        looking at its layout. The point of using Lorem Ipsum is that it has a more-or-less normal
                        distribution of letters, as opposed to using 'Content here, content here', making it look like
                        readable English. Many desktop publishing packages and web page editors now use Lorem Ipsum as their
                        default model text, and a search for 'lorem ipsum' will uncover many web sites still in their
                        infancy. Various versions have evolved over the years, sometimes by accident, sometimes on purpose
                    </P>
                    <P>There are many variations of passages of Lorem Ipsum available, but the majority have suffered
                        alteration in some form, by injected humour, or randomised words which don't look even slightly
                        believable. If you are going to use a passage of Lorem Ipsum, you need to be sure there isn't
                        anything embarrassing hidden in the middle of text.</P>

                </div>
                <div class="col-md-6">
                    <img src="{{ asset('assets/images/categories/hand.png') }}" alt="">
                </div>
            </div>
        </div>
    </section>

   
@endsection


@push('scripts')
@endpush
