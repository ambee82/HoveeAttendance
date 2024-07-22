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
                        <h1 class=""> Dashboard</h1>
                        <ol class="breadcrumb text-center">
                            <li class="breadcrumb-item"><a href="{{ route('tutor.dashboard') }}">Home</a></li>
                            <li class="breadcrumb-item active text-white" aria-current="page">My Dashboard</li>
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
                            <h3 class="card-title text-white fs-5 py-1">My Dashboard</h3>
                        </div>
                    </div>
                    <div class="row ">
                        <div class="col-md-6">
                            <div class="card indiv-card">
                                <div class="card-header bg-secondary  ">
                                    <h3 class="card-title">Attendance Monitoring</h3>
                                </div>
                                <div class="card-body">

                                </div>
                            </div>

                        </div>
                        <div class="col-md-6">
                            <div class="card card indiv-card">
                                <div class="card-header bg-secondary  ">
                                    <h3 class="card-title fw-bold">Attendance Chart</h3>
                                </div>
                                <div class="card-body">
                                    <div class="row">
                                        <div class="col-md-6">
                                            <div class="form-group month">
                                                <label class="form-label">From Month</label>
                                                <input type="month" class="form-control " name="bdaymonth">
                                            </div>

                                        </div>
                                        <div class="col-md-6">
                                            <div class="form-group month">
                                                <label class="form-label">End Month</label>
                                                <input type="month" class="form-control " name="bdaymonth">
                                            </div>
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="col-md-4">
                                            <figure class="pie-chart">
                                                <div class="inner">

                                                </div>
                                            </figure>
                                        </div>
                                        <div class="col-md-8">
                                            <div class="index-chart mt-5">
                                                <div class="option">
                                                    <div class="colour-box c1"></div>
                                                    <div>Present (35%)</div>
                                                </div>
                                                <div class="option">
                                                    <div class="colour-box c2"></div>
                                                    <div>Leave (15%)</div>
                                                </div>


                                                <div class="option">
                                                    <div class="colour-box c3"></div>
                                                    <div>Absent(14%)</div>
                                                </div>
                                                <div class="option">
                                                    <div class="colour-box c4"></div>
                                                    <div>Holiday(14%)</div>
                                                </div>
                                                <div class="option">
                                                    <div class="colour-box c5"></div>
                                                    <div class="miss-punch">Miss Punch(14%)</div>
                                                </div>
                                                <div class="option">
                                                    <div class="colour-box c6"></div>
                                                    <div>Modified</div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="manged-ad table-responsive userprof-tab shadow-lg card indiv-card">
                                <div class="card-header bg-secondary">
                                    <h3 class="card-title fw-bold">June-2024</h3>
                                    <div class="ms-auto">
                                        <h3 class="card-title fw-bold">Total Days-30</h3>
                                    </div>

                                </div>
                                <table class="table table-bordered table-hover mb-0 text-nowrap">

                                    <tbody>
                                        <tr class="text-start">
                                            <td>
                                                <div class="media mt-0 mb-0">
                                                    <div class="media-body">
                                                        <div class="card-item-desc  p-0 ">
                                                            <a href="#" class="text-dark">
                                                                <h4 class="font-weight-semibold">Present
                                                                </h4>
                                                            </a>
                                                        </div>
                                                    </div>
                                                </div>
                                            </td>
                                            <td>
                                                <div class="media mt-0 mb-0">
                                                    <div class="media-body">
                                                        <div class="card-item-desc  p-0 ">
                                                            <a href="#" class="text-dark">
                                                                <h4 class="font-weight-semibold">20</h4>
                                                            </a>
                                                        </div>
                                                    </div>
                                                </div>
                                            </td>
                                        </tr>
                                        <tr class="text-start">
                                            <td>
                                                <div class="media mt-0 mb-0">
                                                    <div class="media-body">
                                                        <div class="card-item-desc  p-0 ">
                                                            <a href="#" class="text-dark">
                                                                <h4 class="font-weight-semibold">Leave
                                                                </h4>
                                                            </a>
                                                        </div>
                                                    </div>
                                                </div>
                                            </td>
                                            <td>
                                                <div class="media mt-0 mb-0">
                                                    <div class="media-body">
                                                        <div class="card-item-desc  p-0 ">
                                                            <a href="#" class="text-dark">
                                                                <h4 class="font-weight-semibold">1</h4>
                                                            </a>
                                                        </div>
                                                    </div>
                                                </div>
                                            </td>
                                        </tr>
                                        <tr class="text-start">
                                            <td>
                                                <div class="media mt-0 mb-0">
                                                    <div class="media-body">
                                                        <div class="card-item-desc  p-0 ">
                                                            <a href="#" class="text-dark">
                                                                <h4 class="font-weight-semibold">Absent
                                                                </h4>
                                                            </a>
                                                        </div>
                                                    </div>
                                                </div>
                                            </td>
                                            <td>
                                                <div class="media mt-0 mb-0">
                                                    <div class="media-body">
                                                        <div class="card-item-desc  p-0 ">
                                                            <a href="#" class="text-dark">
                                                                <h4 class="font-weight-semibold">1</h4>
                                                            </a>
                                                        </div>
                                                    </div>
                                                </div>
                                            </td>
                                        </tr>
                                        <tr class="text-start">
                                            <td>
                                                <div class="media mt-0 mb-0">
                                                    <div class="media-body">
                                                        <div class="card-item-desc  p-0 ">
                                                            <a href="#" class="text-dark">
                                                                <h4 class="font-weight-semibold">Holiday
                                                                </h4>
                                                            </a>
                                                        </div>
                                                    </div>
                                                </div>
                                            </td>
                                            <td>
                                                <div class="media mt-0 mb-0">
                                                    <div class="media-body">
                                                        <div class="card-item-desc  p-0 ">
                                                            <a href="#" class="text-dark">
                                                                <h4 class="font-weight-semibold">6</h4>
                                                            </a>
                                                        </div>
                                                    </div>
                                                </div>
                                            </td>
                                        </tr>
                                        <tr class="text-start">
                                            <td>
                                                <div class="media mt-0 mb-0">
                                                    <div class="media-body">
                                                        <div class="card-item-desc  p-0 ">
                                                            <a href="#" class="text-dark">
                                                                <h4 class="font-weight-semibold">Miss Punch
                                                                </h4>
                                                            </a>
                                                        </div>
                                                    </div>
                                                </div>
                                            </td>
                                            <td>
                                                <div class="media mt-0 mb-0">
                                                    <div class="media-body">
                                                        <div class="card-item-desc  p-0 ">
                                                            <a href="#" class="text-dark">
                                                                <h4 class="font-weight-semibold">2</h4>
                                                            </a>
                                                        </div>
                                                    </div>
                                                </div>
                                            </td>
                                        </tr>
                                        <tr class="text-start">
                                            <td>
                                                <div class="media mt-0 mb-0">
                                                    <div class="media-body">
                                                        <div class="card-item-desc  p-0 ">
                                                            <a href="#" class="text-dark">
                                                                <h4 class="font-weight-semibold">Leave Approved
                                                                    Pending</h4>
                                                            </a>
                                                        </div>
                                                    </div>
                                                </div>
                                            </td>
                                            <td>
                                                <div class="media mt-0 mb-0">
                                                    <div class="media-body">
                                                        <div class="card-item-desc  p-0 ">
                                                            <a href="#" class="text-dark">
                                                                <h4 class="font-weight-semibold">0</h4>
                                                            </a>
                                                        </div>
                                                    </div>
                                                </div>
                                            </td>
                                        </tr>
                                        <tr class="text-start">
                                            <td>
                                                <div class="media mt-0 mb-0">
                                                    <div class="media-body">
                                                        <div class="card-item-desc  p-0 ">
                                                            <a href="#" class="text-dark">
                                                                <h4 class="font-weight-semibold">Modified</h4>
                                                            </a>
                                                        </div>
                                                    </div>
                                                </div>
                                            </td>
                                            <td>
                                                <div class="media mt-0 mb-0">
                                                    <div class="media-body">
                                                        <div class="card-item-desc  p-0 ">
                                                            <a href="#" class="text-dark">
                                                                <h4 class="font-weight-semibold">0</h4>
                                                            </a>
                                                        </div>
                                                    </div>
                                                </div>
                                            </td>
                                        </tr>
                                    </tbody>
                                </table>
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="card card indiv-card">
                                <div class="card-header bg-secondary ">
                                    <h3 class="card-title fw-bold ">Notifications</h3>
                                </div>
                                <div class="card-body p-0">
                                    <ul class="vertical-scroll">
                                        <li class="item2">
                                            <div class="footerimg d-flex mt-0 mb-0">
                                                <div class="d-flex footerimg-l mb-0">
                                                    <img src="{{ asset('assets/images/faces/female/1.jpg') }}"
                                                        alt="image" class="avatar brround  me-2" loading="lazy">
                                                    <a href="#" class="time-title p-0 leading-normal mt-2">Boris
                                                        Nash <i class="icon icon-check text-success fs-12 ms-1"
                                                            data-bs-toggle="tooltip" data-bs-placement="top" title
                                                            data-bs-original-title="verified"></i></a>
                                                </div>
                                                <div class="mt-2 footerimg-r ms-auto">
                                                    <a href="#" data-bs-toggle="tooltip" data-bs-placement="top"
                                                        title data-bs-original-title="Articles"><span
                                                            class="text-muted me-2"><i class="fa fa-comment-o"></i>
                                                            16</span></a>
                                                    <a href="#" data-bs-toggle="tooltip" data-bs-placement="top"
                                                        title data-bs-original-title="Likes"><span class="text-muted"><i
                                                                class="fa fa-thumbs-o-up"></i>
                                                            36</span></a>
                                                </div>
                                            </div>
                                        </li>
                                        <li class="item2">
                                            <div class="footerimg d-flex mt-0 mb-0">
                                                <div class="d-flex footerimg-l mb-0">
                                                    <img src="{{ asset('assets/images/faces/female/2.jpg') }}"
                                                        alt="image" class="avatar brround  me-2" loading="lazy">
                                                    <a href="#" class="time-title p-0 leading-normal mt-2">Lorean
                                                        Mccants <i class="icon icon-check text-success fs-12 ms-1"
                                                            data-bs-toggle="tooltip" data-bs-placement="top" title
                                                            data-bs-original-title="verified"></i></a>
                                                </div>
                                                <div class="mt-2 footerimg-r ms-auto">
                                                    <a href="#" data-bs-toggle="tooltip" data-bs-placement="top"
                                                        title data-bs-original-title="Articles"><span
                                                            class="text-muted me-2"><i class="fa fa-comment-o"></i>
                                                            43</span></a>
                                                    <a href="#" data-bs-toggle="tooltip" data-bs-placement="top"
                                                        title data-bs-original-title="Likes"><span class="text-muted"><i
                                                                class="fa fa-thumbs-o-up"></i>
                                                            23</span></a>
                                                </div>
                                            </div>
                                        </li>
                                        <li class="item2">
                                            <div class="footerimg d-flex mt-0 mb-0">
                                                <div class="d-flex footerimg-l mb-0">
                                                    <img src="{{ asset('assets/images/faces/male/3.jpg') }}"
                                                        alt="image" class="avatar brround  me-2" loading="lazy">
                                                    <a href="#" class="time-title p-0 leading-normal mt-2">Dewitt
                                                        Hennessey <i class="icon icon-check text-success fs-12 ms-1"
                                                            data-bs-toggle="tooltip" data-bs-placement="top" title
                                                            data-bs-original-title="verified"></i></a>
                                                </div>
                                                <div class="mt-2 footerimg-r ms-auto">
                                                    <a href="#" data-bs-toggle="tooltip" data-bs-placement="top"
                                                        title data-bs-original-title="Articles"><span
                                                            class="text-muted me-2"><i class="fa fa-comment-o"></i>
                                                            34</span></a>
                                                    <a href="#" data-bs-toggle="tooltip" data-bs-placement="top"
                                                        title data-bs-original-title="Likes"><span class="text-muted"><i
                                                                class="fa fa-thumbs-o-up"></i>
                                                            12</span></a>
                                                </div>
                                            </div>
                                        </li>
                                        <li class="item2">
                                            <div class="footerimg d-flex mt-0 mb-0">
                                                <div class="d-flex footerimg-l mb-0">
                                                    <img src="{{ asset('assets/images/faces/male/1.jpg') }}"
                                                        alt="image" class="avatar brround  me-2" loading="lazy">
                                                    <a href="#" class="time-title p-0 leading-normal mt-2">Archie
                                                        Overturf <i class="icon icon-check text-success fs-12 ms-1"
                                                            data-bs-toggle="tooltip" data-bs-placement="top" title
                                                            data-bs-original-title="verified"></i></a>
                                                </div>
                                                <div class="mt-2 footerimg-r ms-auto">
                                                    <a href="#" data-bs-toggle="tooltip" data-bs-placement="top"
                                                        title data-bs-original-title="Articles"><span
                                                            class="text-muted me-2"><i class="fa fa-comment-o"></i>
                                                            12</span></a>
                                                    <a href="#" data-bs-toggle="tooltip" data-bs-placement="top"
                                                        title data-bs-original-title="Likes"><span class="text-muted"><i
                                                                class="fa fa-thumbs-o-up"></i>
                                                            32</span></a>
                                                </div>
                                            </div>
                                        </li>
                                        <li class="item2">
                                            <div class="footerimg d-flex mt-0 mb-0">
                                                <div class="d-flex footerimg-l mb-0">
                                                    <img src="{{ asset('assets/images/faces/female/1.jpg') }}"
                                                        alt="image" class="avatar brround  me-2" loading="lazy">
                                                    <a href="#" class="time-title p-0 leading-normal mt-2">Barbra
                                                        Flegle
                                                        <i class="icon icon-check text-success fs-12 ms-1"
                                                            data-bs-toggle="tooltip" data-bs-placement="top" title
                                                            data-bs-original-title="verified"></i></a>
                                                </div>
                                                <div class="mt-2 footerimg-r ms-auto">
                                                    <a href="#" data-bs-toggle="tooltip" data-bs-placement="top"
                                                        title data-bs-original-title="Articles"><span
                                                            class="text-muted me-2"><i class="fa fa-comment-o"></i>
                                                            21</span></a>
                                                    <a href="#" data-bs-toggle="tooltip" data-bs-placement="top"
                                                        title data-bs-original-title="Likes"><span class="text-muted"><i
                                                                class="fa fa-thumbs-o-up"></i>
                                                            32</span></a>
                                                </div>
                                            </div>
                                        </li>

                                    </ul>
                                    <ul class="vertical-scroll">
                                        <li class="item2">
                                            <div class="footerimg d-flex mt-0 mb-0">
                                                <div class="d-flex footerimg-l mb-0">
                                                    <img src="{{ asset('assets/images/faces/female/1.jpg') }}"
                                                        alt="image" class="avatar brround  me-2" loading="lazy">
                                                    <a href="#" class="time-title p-0 leading-normal mt-2">Boris
                                                        Nash <i class="icon icon-check text-success fs-12 ms-1"
                                                            data-bs-toggle="tooltip" data-bs-placement="top" title
                                                            data-bs-original-title="verified"></i></a>
                                                </div>
                                                <div class="mt-2 footerimg-r ms-auto">
                                                    <a href="#" data-bs-toggle="tooltip" data-bs-placement="top"
                                                        title data-bs-original-title="Articles"><span
                                                            class="text-muted me-2"><i class="fa fa-comment-o"></i>
                                                            16</span></a>
                                                    <a href="#" data-bs-toggle="tooltip" data-bs-placement="top"
                                                        title data-bs-original-title="Likes"><span class="text-muted"><i
                                                                class="fa fa-thumbs-o-up"></i>
                                                            36</span></a>
                                                </div>
                                            </div>
                                        </li>
                                        <li class="item2">
                                            <div class="footerimg d-flex mt-0 mb-0">
                                                <div class="d-flex footerimg-l mb-0">
                                                    <img src="{{ asset('assets/images/faces/female/2.jpg') }}"
                                                        alt="image" class="avatar brround  me-2" loading="lazy">
                                                    <a href="#" class="time-title p-0 leading-normal mt-2">Lorean
                                                        Mccants <i class="icon icon-check text-success fs-12 ms-1"
                                                            data-bs-toggle="tooltip" data-bs-placement="top" title
                                                            data-bs-original-title="verified"></i></a>
                                                </div>
                                                <div class="mt-2 footerimg-r ms-auto">
                                                    <a href="#" data-bs-toggle="tooltip" data-bs-placement="top"
                                                        title data-bs-original-title="Articles"><span
                                                            class="text-muted me-2"><i class="fa fa-comment-o"></i>
                                                            43</span></a>
                                                    <a href="#" data-bs-toggle="tooltip" data-bs-placement="top"
                                                        title data-bs-original-title="Likes"><span class="text-muted"><i
                                                                class="fa fa-thumbs-o-up"></i>
                                                            23</span></a>
                                                </div>
                                            </div>
                                        </li>
                                        <li class="item2">
                                            <div class="footerimg d-flex mt-0 mb-0">
                                                <div class="d-flex footerimg-l mb-0">
                                                    <img src="{{ asset('assets/images/faces/male/3.jpg') }}"
                                                        alt="image" class="avatar brround  me-2" loading="lazy">
                                                    <a href="#" class="time-title p-0 leading-normal mt-2">Dewitt
                                                        Hennessey <i class="icon icon-check text-success fs-12 ms-1"
                                                            data-bs-toggle="tooltip" data-bs-placement="top" title
                                                            data-bs-original-title="verified"></i></a>
                                                </div>
                                                <div class="mt-2 footerimg-r ms-auto">
                                                    <a href="#" data-bs-toggle="tooltip" data-bs-placement="top"
                                                        title data-bs-original-title="Articles"><span
                                                            class="text-muted me-2"><i class="fa fa-comment-o"></i>
                                                            34</span></a>
                                                    <a href="#" data-bs-toggle="tooltip" data-bs-placement="top"
                                                        title data-bs-original-title="Likes"><span class="text-muted"><i
                                                                class="fa fa-thumbs-o-up"></i>
                                                            12</span></a>
                                                </div>
                                            </div>
                                        </li>
                                        <li class="item2">
                                            <div class="footerimg d-flex mt-0 mb-0">
                                                <div class="d-flex footerimg-l mb-0">
                                                    <img src="{{ asset('assets/images/faces/male/1.jpg') }}"
                                                        alt="image" class="avatar brround  me-2" loading="lazy">
                                                    <a href="#" class="time-title p-0 leading-normal mt-2">Archie
                                                        Overturf <i class="icon icon-check text-success fs-12 ms-1"
                                                            data-bs-toggle="tooltip" data-bs-placement="top" title
                                                            data-bs-original-title="verified"></i></a>
                                                </div>
                                                <div class="mt-2 footerimg-r ms-auto">
                                                    <a href="#" data-bs-toggle="tooltip" data-bs-placement="top"
                                                        title data-bs-original-title="Articles"><span
                                                            class="text-muted me-2"><i class="fa fa-comment-o"></i>
                                                            12</span></a>
                                                    <a href="#" data-bs-toggle="tooltip" data-bs-placement="top"
                                                        title data-bs-original-title="Likes"><span class="text-muted"><i
                                                                class="fa fa-thumbs-o-up"></i>
                                                            32</span></a>
                                                </div>
                                            </div>
                                        </li>
                                        <li class="item2">
                                            <div class="footerimg d-flex mt-0 mb-0">
                                                <div class="d-flex footerimg-l mb-0">
                                                    <img src="{{ asset('assets/images/faces/female/1.jpg') }}"
                                                        alt="image" class="avatar brround  me-2" loading="lazy">
                                                    <a href="#" class="time-title p-0 leading-normal mt-2">Barbra
                                                        Flegle
                                                        <i class="icon icon-check text-success fs-12 ms-1"
                                                            data-bs-toggle="tooltip" data-bs-placement="top" title
                                                            data-bs-original-title="verified"></i></a>
                                                </div>
                                                <div class="mt-2 footerimg-r ms-auto">
                                                    <a href="#" data-bs-toggle="tooltip" data-bs-placement="top"
                                                        title data-bs-original-title="Articles"><span
                                                            class="text-muted me-2"><i class="fa fa-comment-o"></i>
                                                            21</span></a>
                                                    <a href="#" data-bs-toggle="tooltip" data-bs-placement="top"
                                                        title data-bs-original-title="Likes"><span class="text-muted"><i
                                                                class="fa fa-thumbs-o-up"></i>
                                                            32</span></a>
                                                </div>
                                            </div>
                                        </li>

                                    </ul>
                                </div>
                            </div>

                        </div>

                        <div class="col-lg-4 col-md-4 item-all-cat  ">
                            <div class="item-all-card text-dark text-center card mb-5 bg-dash shadow">
                                <a href="tutor-courselist.php"></a>
                                <div class="iteam-all-icon">
                                    <img src="{{ asset('assets/images/icons/course-svgrepo-com (1).svg') }}"
                                        class="imag-service" alt="Sales">
                                    <h4 class="text-body font-weight-bold mb-2 mt-2">Course</h4>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-4 col-md-4 item-all-cat  ">
                            <div class="item-all-card text-dark text-center card mb-5 bg-dash shadow">
                                <a href="tutor-batchlist.php"></a>
                                <div class="iteam-all-icon">
                                    <img src="{{ asset('assets/images/icons/batches.svg') }}" class="imag-service"
                                        alt="Sales">
                                    <h4 class="text-body font-weight-bold mb-2 mt-2">Batches
                                    </h4>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-4 col-md-4 item-all-cat  ">
                            <div class="item-all-card text-dark text-center card mb-5 bg-dash shadow">
                                <a href="tutor-tutionclasses.php"></a>
                                <div class="iteam-all-icon">
                                    <img src="{{ asset('assets/images/icons/class.svg') }}" class="imag-service"
                                        alt="Sales">
                                    <h4 class="text-body font-weight-bold mb-2 mt-2">Tution Class</h4>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-4 col-md-4 item-all-cat  ">
                            <div class="item-all-card text-dark text-center card mb-5 bg-dash shadow">
                                <a href="tutor-enquirylist.php"></a>
                                <div class="iteam-all-icon">
                                    <img src="{{ asset('assets/images/icons/enquiry.svg') }}" class="imag-service"
                                        alt="Sales">
                                    <h4 class="text-body font-weight-bold mb-2 mt-2">Enquries</h4>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-4 col-md-4 item-all-cat  ">
                            <div class="item-all-card text-dark text-center card mb-5 bg-dash shadow">
                                <a href="tutor-enrollmentlist.php"></a>
                                <div class="iteam-all-icon">
                                    <img src="{{ asset('assets/images/icons/enrollment.svg') }}" class="imag-service"
                                        alt="Sales">
                                    <h4 class="text-body font-weight-bold mb-2 mt-2">Enrollments</h4>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-4 col-md-4 item-all-cat  ">
                            <div class="item-all-card text-dark text-center card mb-5 bg-dash shadow">
                                <a href="tutor-attendancelist.php"></a>
                                <div class="iteam-all-icon">
                                    <img src="{{ asset('assets/images/icons/attendance.svg') }}" class="imag-service"
                                        alt="Sales">
                                    <h4 class="text-body font-weight-bold mb-2 mt-2">Attendance
                                    </h4>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-4 col-md-4 item-all-cat  ">
                            <div class="item-all-card text-dark text-center card mb-5 bg-dash shadow">
                                <a href="tutor-leavelist.php"></a>
                                <div class="iteam-all-icon">
                                    <img src="{{ asset('assets/images/icons/leave.svg') }}" class="imag-service"
                                        alt="Sales">
                                    <h4 class="text-body font-weight-bold mb-2 mt-2">Leave</h4>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-4 col-md-4 item-all-cat  ">
                            <div class="item-all-card text-dark text-center card mb-5 bg-dash shadow">
                                <a href="tutor-msplist.php"></a>
                                <div class="iteam-all-icon">
                                    <img src="{{ asset('assets/images/icons/Miss Punch.svg') }}" class="imag-service"
                                        alt="Sales">
                                    <h4 class="text-body font-weight-bold mb-2 mt-2">Miss Punch</h4>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-4 col-md-4 item-all-cat  ">
                            <div class="item-all-card text-dark text-center card mb-5 bg-dash shadow">
                                <a href="tutor-holidaylist.php"></a>
                                <div class="iteam-all-icon">
                                    <img src="{{ asset('assets/images/icons/holiday.svg') }}" class="imag-service"
                                        alt="Sales">
                                    <h4 class="text-body font-weight-bold mb-2 mt-2">Holiday</h4>
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
