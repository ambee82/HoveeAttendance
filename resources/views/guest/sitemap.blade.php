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
                        <h1 class="">Site Map</h1>
                        <ol class="breadcrumb text-center">
                            <li class="breadcrumb-item"><a href="index.php">Home</a></li>
                            <li class="breadcrumb-item text-white">Site Map</li>
                        </ol>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section class="sptb">
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <div class="card mb-0">
                        <div class="card-body">
                            <div class="row">
                                <div class="col-lg-4 col-md-6">
                                    <div class="card mb-5">
                                        <div class="card-header">
                                            <a href="#" class="text-dark">
                                                <h3 class="card-title">
                                                    General
                                                </h3>
                                            </a>
                                        </div>
                                        <div class="card-body">
                                            <ul class="list-unstyled widget-spec  p-1 mb-0">
                                                <li class="">
                                                    <a href="index.php" class="text-dark"><i
                                                            class="icon icon-arrow-right-circle text-primary"></i> Home
                                                        Page</a>
                                                </li>
                                                <li class="">
                                                    <a href="about.php" class="text-dark"><i
                                                            class="icon icon-arrow-right-circle text-primary"></i> About
                                                        Page</a>
                                                </li>
                                                <li class="">
                                                    <a href="contact.php" class="text-dark"><i
                                                            class="icon icon-arrow-right-circle text-primary"></i> Contact
                                                        Us</a>
                                                </li>
                                                <li class="">
                                                    <a href="how-it-works.php" class="text-dark"><i
                                                            class="icon icon-arrow-right-circle text-primary"></i> How it
                                                        works</a>
                                                </li>
                                                <li class="">
                                                    <a href="blog.php" class="text-dark"><i
                                                            class="icon icon-arrow-right-circle text-primary"></i> News</a>
                                                </li>
                                                <li class="">
                                                    <a href="blog-detail.php" class="text-dark"><i
                                                            class="icon icon-arrow-right-circle text-primary"></i> News
                                                        Deatils</a>
                                                </li>
                                                <li class="">
                                                    <a href="subscription.php" class="text-dark"><i
                                                            class="icon icon-arrow-right-circle text-primary"></i>
                                                        Subscription</a>
                                                </li>
                                                <li class="">
                                                    <a href="thank-you.php" class="text-dark"><i
                                                            class="icon icon-arrow-right-circle text-primary"></i>
                                                        Thank You</a>
                                                </li>
                                            </ul>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-lg-4 col-md-6">
                                    <div class="card mb-5">
                                        <div class="card-header">
                                            <a href="#" class="text-dark">
                                                <h3 class="card-title">
                                                    Individual Tutor
                                                </h3>
                                            </a>
                                        </div>
                                        <div class="card-body">
                                            <ul class="list-unstyled widget-spec p-1">
                                                <li class="">
                                                    <a href="tutor-dashboard.php" class="text-dark"><i
                                                            class="icon icon-arrow-right-circle text-primary"></i>
                                                        Dashboard</a>
                                                </li>
                                                <li class="">
                                                    <a href="tutor-courselist.php" class="text-dark"><i
                                                            class="icon icon-arrow-right-circle text-primary"></i> Course
                                                        list</a>
                                                </li>
                                                <li class="">
                                                    <a href="tutor-batchlist.php" class="text-dark"><i
                                                            class="icon icon-arrow-right-circle text-primary"></i> Batch
                                                        list</a>
                                                </li>
                                                <li class="">
                                                    <a href="tutor-tutionclasses.php" class="text-dark"><i
                                                            class="icon icon-arrow-right-circle text-primary"></i> Tution
                                                        Classes</a>
                                                </li>
                                                <li class="">
                                                    <a href="tutor-enquirylist.php" class="text-dark"><i
                                                            class="icon icon-arrow-right-circle text-primary"></i> Enquiry
                                                        list</a>
                                                </li>
                                                <li class="">
                                                    <a href="tutor-enrollmentlist.php" class="text-dark"><i
                                                            class="icon icon-arrow-right-circle text-primary"></i>
                                                        Enrollment list</a>
                                                </li>
                                                <li class="">
                                                    <a href="indiv-tutor-attendancelist.php" class="text-dark"><i
                                                            class="icon icon-arrow-right-circle text-primary"></i>
                                                        attendance list</a>
                                                </li>
                                                <li class="">
                                                    <a href="tutor-leavelist.php" class="text-dark"><i
                                                            class="icon icon-arrow-right-circle text-primary"></i> Leave
                                                        list</a>
                                                </li>
                                            </ul>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-lg-4 col-md-6">
                                    <div class="card mb-5">
                                        <div class="card-header">
                                            <a href="#" class="text-dark">
                                                <h3 class="card-title">
                                                    Individual Tutor
                                                </h3>
                                            </a>
                                        </div>
                                        <div class="card-body">
                                            <ul class="list-unstyled widget-spec p-1">
                                                <li class="">
                                                    <a href="tutor-msplist.php" class="text-dark"><i
                                                            class="icon icon-arrow-right-circle text-primary"></i> Miss
                                                        Punch
                                                        list</a>
                                                </li>
                                                <li class="">
                                                    <a href="tutor-holidaylist.php" class="text-dark"><i
                                                            class="icon icon-arrow-right-circle text-primary"></i> Holiday
                                                        list</a>
                                                </li>
                                                <li class="">
                                                    <a href="tutor-ratings.php" class="text-dark"><i
                                                            class="icon icon-arrow-right-circle text-primary"></i> Ratings
                                                    </a>
                                                </li>
                                                <li class="">
                                                    <a href="tutor-edit-profile.php" class="text-dark"><i
                                                            class="icon icon-arrow-right-circle text-primary"></i> View
                                                        profile</a>
                                                </li>
                                                <li class="">
                                                    <a href="tutor-payments.php" class="text-dark"><i
                                                            class="icon icon-arrow-right-circle text-primary"></i>
                                                        Payments</a>
                                                </li>
                                                <li class="">
                                                    <a href="tutor-notification.php" class="text-dark"><i
                                                            class="icon icon-arrow-right-circle text-primary"></i>
                                                        Notifications</a>
                                                </li>
                                                <li class="">
                                                    <a href="tutor-subscription.php" class="text-dark"><i
                                                            class="icon icon-arrow-right-circle text-primary"></i>
                                                        Subscription</a>
                                                </li>
                                                <li class="">
                                                    <a href="tutor-enroll-form.php" class="text-dark"><i
                                                            class="icon icon-arrow-right-circle text-primary"></i>
                                                        Enrollment form
                                                    </a>
                                                </li>
                                            </ul>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-lg-4 col-md-6">
                                    <div class="card mb-5">
                                        <div class="card-header">
                                            <a href="#" class="text-dark">
                                                <h3 class="card-title">
                                                    Institute Tutor
                                                </h3>
                                            </a>
                                        </div>
                                        <div class="card-body">
                                            <ul class="list-unstyled widget-spec p-1">
                                                <li class="">
                                                    <a href="institute-dashboard.php" class="text-dark"><i
                                                            class="icon icon-arrow-right-circle text-primary"></i>
                                                        Dashboard</a>
                                                </li>
                                                <li class="">
                                                    <a href="institute-courselist.php" class="text-dark"><i
                                                            class="icon icon-arrow-right-circle text-primary"></i> Course
                                                        list</a>
                                                </li>
                                                <li class="">
                                                    <a href="institute-batchlist.php" class="text-dark"><i
                                                            class="icon icon-arrow-right-circle text-primary"></i> Batch
                                                        list</a>
                                                </li>
                                                <li class="">
                                                    <a href="institute-attendancelist.php" class="text-dark"><i
                                                            class="icon icon-arrow-right-circle text-primary"></i>
                                                        attendance list</a>
                                                </li>
                                                <li class="">
                                                    <a href="institute-enquirylist.php" class="text-dark"><i
                                                            class="icon icon-arrow-right-circle text-primary"></i> Enquires
                                                        list</a>
                                                </li>
                                                <li class="">
                                                    <a href="institute-enrollmentlist.php" class="text-dark"><i
                                                            class="icon icon-arrow-right-circle text-primary"></i>
                                                        Enrollments list</a>
                                                </li>
                                                <li class="">
                                                    <a href="institute-teacher-list.php" class="text-dark"><i
                                                            class="icon icon-arrow-right-circle text-primary"></i> Teacher
                                                        list</a>
                                                </li>
                                                <li class="">
                                                    <a href="institute-leavelist.php" class="text-dark"><i
                                                            class="icon icon-arrow-right-circle text-primary"></i> Leave
                                                        list</a>
                                                </li>
                                            </ul>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-lg-4 col-md-6 ">
                                    <div class="card mb-5">
                                        <div class="card-header">
                                            <a href="#" class="text-dark">
                                                <h3 class="card-title">
                                                    Institute Tutor
                                                </h3>
                                            </a>
                                        </div>
                                        <div class="card-body">
                                            <ul class="list-unstyled widget-spec p-1">
                                                <li class="">
                                                    <a href="institute-holidaylist.php" class="text-dark"><i
                                                            class="icon icon-arrow-right-circle text-primary"></i> Holiday
                                                        list</a>
                                                </li>
                                                <li class="">
                                                    <a href="institute-msplist.php" class="text-dark"><i
                                                            class="icon icon-arrow-right-circle text-primary"></i> MSP
                                                        list</a>
                                                </li>
                                                <li class="">
                                                    <a href="institute-list.php" class="text-dark"><i
                                                            class="icon icon-arrow-right-circle text-primary"></i>
                                                        Institute
                                                        list</a>
                                                </li>
                                                <li class="">
                                                    <a href="institute-edit-profile.php" class="text-dark"><i
                                                            class="icon icon-arrow-right-circle text-primary"></i> Edit
                                                        profile</a>
                                                </li>
                                                <li class="">
                                                    <a href="institute-subscription.php" class="text-dark"><i
                                                            class="icon icon-arrow-right-circle text-primary"></i>
                                                        Subscription
                                                    </a>
                                                </li>
                                                <li class="">
                                                    <a href="institute-ratings.php" class="text-dark"><i
                                                            class="icon icon-arrow-right-circle text-primary"></i>
                                                        Ratings</a>
                                                </li>
                                                <li class="">
                                                    <a href="institute-payments.php" class="text-dark"><i
                                                            class="icon icon-arrow-right-circle text-primary"></i>
                                                        Payments</a>
                                                </li>
                                                <li class="">
                                                    <a href="institute-notification.php" class="text-dark"><i
                                                            class="icon icon-arrow-right-circle text-primary"></i>
                                                        Notifications</a>
                                                </li>
                                            </ul>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-lg-4 col-md-6">
                                    <div class="card mb-5">
                                        <div class="card-header">
                                            <a href="#" class="text-dark">
                                                <h3 class="card-title">
                                                    Student Profile
                                                </h3>
                                            </a>
                                        </div>
                                        <div class="card-body">
                                            <ul class="list-unstyled widget-spec p-1">
                                                <li class="">
                                                    <a href="student-dashboard.php" class="text-dark"><i
                                                            class="icon icon-arrow-right-circle text-primary"></i>
                                                        Dashboard
                                                    </a>
                                                </li>
                                                <li class="">
                                                    <a href="student-enqurireslist.php" class="text-dark"><i
                                                            class="icon icon-arrow-right-circle text-primary"></i>
                                                        Enquires list</a>
                                                </li>
                                                <li class="">
                                                    <a href="student-fees-form.php" class="text-dark"><i
                                                            class="icon icon-arrow-right-circle text-primary"></i> Fees
                                                    </a>
                                                </li>
                                                <li class="">
                                                    <a href="student-attendancelist.php" class="text-dark"><i
                                                            class="icon icon-arrow-right-circle text-primary"></i>
                                                        attendance
                                                        list</a>
                                                </li>
                                                <li class="">
                                                    <a href="student-leavelist.php" class="text-dark"><i
                                                            class="icon icon-arrow-right-circle text-primary"></i> Leave
                                                        list
                                                    </a>
                                                </li>
                                                <li class="">
                                                    <a href="student-msplist.php" class="text-dark"><i
                                                            class="icon icon-arrow-right-circle text-primary"></i> MSP
                                                        list</a>
                                                </li>
                                                <li class="">
                                                    <a href="student-enrollmentlist.php" class="text-dark"><i
                                                            class="icon icon-arrow-right-circle text-primary"></i>
                                                        Enrollment list</a>
                                                </li>
                                                <li class="">
                                                    <a href="student-chatbox.php" class="text-dark"><i
                                                            class="icon icon-arrow-right-circle text-primary"></i> Chat</a>
                                                </li>
                                            </ul>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-lg-4 col-md-6">
                                    <div class="card mb-5">
                                        <div class="card-header">
                                            <a href="#" class="text-dark">
                                                <h3 class="card-title">
                                                    Student Profile
                                                </h3>
                                            </a>
                                        </div>
                                        <div class="card-body">
                                            <ul class="list-unstyled widget-spec p-1">
                                                <li class="">
                                                    <a href="student-notifications.php" class="text-dark"><i
                                                            class="icon icon-arrow-right-circle text-primary"></i>
                                                        Notifications</a>
                                                </li>
                                                <li class="">
                                                    <a href="student-course-list.php" class="text-dark"><i
                                                            class="icon icon-arrow-right-circle text-primary"></i> Course
                                                        list
                                                    </a>
                                                </li>
                                                <li class="">
                                                    <a href="student-Course-detailpage.php" class="text-dark"><i
                                                            class="icon icon-arrow-right-circle text-primary"></i> Course
                                                        Detail
                                                    </a>
                                                </li>
                                                <li class="">
                                                    <a href="student-rating.php" class="text-dark"><i
                                                            class="icon icon-arrow-right-circle text-primary"></i>
                                                        Ratings</a>
                                                </li>
                                                <li class="">
                                                    <a href="student-subscription.php" class="text-dark"><i
                                                            class="icon icon-arrow-right-circle text-primary"></i>
                                                        Subscription
                                                    </a>
                                                </li>
                                                <li class="">
                                                    <a href="student-edit-profile.php" class="text-dark"><i
                                                            class="icon icon-arrow-right-circle text-primary"></i>
                                                        Edit profile</a>
                                                </li>
                                                <li class="">
                                                    <a href="student-payments.php" class="text-dark"><i
                                                            class="icon icon-arrow-right-circle text-primary"></i> payments
                                                    </a>
                                                </li>
                                                <li class="">
                                                    <a href="student-leavelist.php" class="text-dark"><i
                                                            class="icon icon-arrow-right-circle text-primary"></i> Leave
                                                        list</a>
                                                </li>
                                            </ul>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-lg-4 col-md-6 ">
                                    <div class="card mb-5">
                                        <div class="card-header">
                                            <a href="#" class="text-dark">
                                                <h3 class="card-title">
                                                    Parent Profile
                                                </h3>
                                            </a>
                                        </div>
                                        <div class="card-body">
                                            <ul class="list-unstyled widget-spec p-1">
                                                <li class="">
                                                    <a href="parent-dashboard.php" class="text-dark"><i
                                                            class="icon icon-arrow-right-circle text-primary"></i>
                                                        Dashboard
                                                    </a>
                                                </li>
                                                <li class="">
                                                    <a href="#" class="text-dark"><i
                                                            class="icon icon-arrow-right-circle text-primary"></i> GPS
                                                        Tracker
                                                    </a>
                                                </li>
                                                <li class="">
                                                    <a href="parent-attendance.php" class="text-dark"><i
                                                            class="icon icon-arrow-right-circle text-primary"></i>
                                                        attendance list
                                                    </a>
                                                </li>
                                                <li class="">
                                                    <a href="parent-feesform.php" class="text-dark"><i
                                                            class="icon icon-arrow-right-circle text-primary"></i> Fees
                                                    </a>
                                                </li>
                                                <li class="">
                                                    <a href="parent-leavelist.php" class="text-dark"><i
                                                            class="icon icon-arrow-right-circle text-primary"></i> Leave
                                                        list
                                                    </a>
                                                </li>
                                                <li class="">
                                                    <a href="parent-msplist.php" class="text-dark"><i
                                                            class="icon icon-arrow-right-circle text-primary"></i>
                                                        MSP list</a>
                                                </li>
                                                <li class="">
                                                    <a href="parent-enrollmentlist.php" class="text-dark"><i
                                                            class="icon icon-arrow-right-circle text-primary"></i>
                                                        Enrollment list</a>
                                                </li>
                                                <li class="">
                                                    <a href="parent-courselist.php" class="text-dark"><i
                                                            class="icon icon-arrow-right-circle text-primary"></i>
                                                        Course list</a>
                                                </li>
                                            </ul>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-lg-4 col-md-6">
                                    <div class="card mb-5">
                                        <div class="card-header">
                                            <a href="#" class="text-dark">
                                                <h3 class="card-title">
                                                    Hotel Profile
                                                </h3>
                                            </a>
                                        </div>
                                        <div class="card-body">
                                            <ul class="list-unstyled widget-spec p-1">
                                                <li class="">
                                                    <a href="hostel-dashboard.php" class="text-dark"><i
                                                            class="icon icon-arrow-right-circle text-primary"></i>
                                                        Dashboard
                                                    </a>
                                                </li>
                                                <li class="">
                                                    <a href="hostel-hostellist.php" class="text-dark"><i
                                                            class="icon icon-arrow-right-circle text-primary"></i>
                                                        Enquires list</a>
                                                </li>
                                                <li class="">
                                                    <a href="hostel-leavelist.php" class="text-dark"><i
                                                            class="icon icon-arrow-right-circle text-primary"></i> Leave
                                                        List
                                                    </a>
                                                </li>
                                                <li class="">
                                                    <a href="hostel-studentlist.php" class="text-dark"><i
                                                            class="icon icon-arrow-right-circle text-primary"></i>
                                                        Student
                                                        list</a>
                                                </li>
                                                <li class="">
                                                    <a href="hostel-attendlist.php" class="text-dark"><i
                                                            class="icon icon-arrow-right-circle text-primary"></i>
                                                        Attendance
                                                        list
                                                    </a>
                                                </li>
                                                <li class="">
                                                    <a href="hostel-msplist.php" class="text-dark"><i
                                                            class="icon icon-arrow-right-circle text-primary"></i> Miss
                                                        Punch
                                                        list</a>
                                                </li>
                                                <li class="">
                                                    <a href="hostel-verification.php" class="text-dark"><i
                                                            class="icon icon-arrow-right-circle text-primary"></i>
                                                        Verification list</a>
                                                </li>
                                                <li class="">
                                                    <a href="hostel-ratings.php" class="text-dark"><i
                                                            class="icon icon-arrow-right-circle text-primary"></i>
                                                        Ratings</a>
                                                </li>
                                            </ul>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-lg-4 col-md-6">
                                    <div class="card mb-5">
                                        <div class="card-header">
                                            <a href="#" class="text-dark">
                                                <h3 class="card-title">
                                                    Hostel Profile
                                                </h3>
                                            </a>
                                        </div>
                                        <div class="card-body">
                                            <ul class="list-unstyled widget-spec p-1">
                                                <li class="">
                                                    <a href="hostel-notification.php" class="text-dark"><i
                                                            class="icon icon-arrow-right-circle text-primary"></i>
                                                        Notifications</a>
                                                </li>
                                                <li class="">
                                                    <a href="hostel-edit-profile.php" class="text-dark"><i
                                                            class="icon icon-arrow-right-circle text-primary"></i> Edit
                                                        Profile
                                                    </a>
                                                </li>
                                                <li class="">
                                                    <a href="hostel-payments.php" class="text-dark"><i
                                                            class="icon icon-arrow-right-circle text-primary"></i> Payments
                                                    </a>
                                                </li>
                                                <li class="">
                                                    <a href="hostel-subscription.php" class="text-dark"><i
                                                            class="icon icon-arrow-right-circle text-primary"></i>
                                                        Subscription</a>
                                                </li>
                                                <li class="">
                                                    <a href="hostel-add-hostellist.php" class="text-dark"><i
                                                            class="icon icon-arrow-right-circle text-primary"></i> Add
                                                        Hostel
                                                    </a>
                                                </li>
                                                <li class="">
                                                    <a href="hostel-addform.php" class="text-dark"><i
                                                            class="icon icon-arrow-right-circle text-primary"></i>
                                                        Add Hostel Form</a>
                                                </li>
                                                <li class="">
                                                    <a href="hostel-studentlist.php" class="text-dark"><i
                                                            class="icon icon-arrow-right-circle text-primary"></i> Add
                                                        Hosteller
                                                    </a>
                                                </li>
                                                <li class="">
                                                    <a href="hostel-detailform.php" class="text-dark"><i
                                                            class="icon icon-arrow-right-circle text-primary"></i> Hostel
                                                        Deatil Form
                                                    </a>
                                                </li>
                                            </ul>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-lg-4 col-md-6 ">
                                    <div class="card mb-5">
                                        <div class="card-header">
                                            <a href="#" class="text-dark">
                                                <h3 class="card-title">
                                                    Hosteller
                                                </h3>
                                            </a>
                                        </div>
                                        <div class="card-body">
                                            <ul class="list-unstyled widget-spec p-1">
                                                <li class="">
                                                    <a href="hosteller-dashboard.php" class="text-dark"><i
                                                            class="icon icon-arrow-right-circle text-primary"></i>
                                                        Dashboard
                                                    </a>
                                                </li>
                                                <li class="">
                                                    <a href="hosteller-msplist.php" class="text-dark"><i
                                                            class="icon icon-arrow-right-circle text-primary"></i> Msp List
                                                    </a>
                                                </li>
                                                <li class="">
                                                    <a href="hosteller-leavelist.php" class="text-dark"><i
                                                            class="icon icon-arrow-right-circle text-primary"></i> Leave
                                                        list
                                                    </a>
                                                </li>
                                                <li class="">
                                                    <a href="hosteller-fees.php" class="text-dark"><i
                                                            class="icon icon-arrow-right-circle text-primary"></i> Fees
                                                    </a>
                                                </li>
                                                <li class="">
                                                    <a href="hosteller-attendlist.php" class="text-dark"><i
                                                            class="icon icon-arrow-right-circle text-primary"></i>
                                                        Atendance list
                                                    </a>
                                                </li>
                                                <li class="">
                                                    <a href="hosteller-editprofile.php" class="text-dark"><i
                                                            class="icon icon-arrow-right-circle text-primary"></i>
                                                        View Profile</a>
                                                </li>
                                                <li class="">
                                                    <a href="hostellerpayments.php" class="text-dark"><i
                                                            class="icon icon-arrow-right-circle text-primary"></i>
                                                        Payments</a>
                                                </li>
                                                <li class="">
                                                    <a href="hosteller-ratings.php" class="text-dark"><i
                                                            class="icon icon-arrow-right-circle text-primary"></i>
                                                        Ratings</a>
                                                </li>
                                            </ul>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-lg-4 col-md-6">
                                    <div class="card mb-5">
                                        <div class="card-header">
                                            <a href="#" class="text-dark">
                                                <h3 class="card-title">
                                                    Quick links
                                                </h3>
                                            </a>
                                        </div>
                                        <div class="card-body">
                                            <ul class="list-unstyled widget-spec p-1">
                                                <li class="">
                                                    <a href="site-map.php" class="text-dark"><i
                                                            class="icon icon-arrow-right-circle text-primary"></i> Sitemap
                                                    </a>
                                                </li>
                                                <li class="">
                                                    <a href="register.php" class="text-dark"><i
                                                            class="icon icon-arrow-right-circle text-primary"></i>
                                                        Register</a>
                                                </li>
                                                <li class="">
                                                    <a href="login.php" class="text-dark"><i
                                                            class="icon icon-arrow-right-circle text-primary"></i> Login
                                                    </a>
                                                </li>
                                                <li class="">
                                                    <a href="otp.php" class="text-dark"><i
                                                            class="icon icon-arrow-right-circle text-primary"></i>
                                                        Otp Page</a>
                                                </li>
                                                <li class="">
                                                    <a href="services.php" class="text-dark"><i
                                                            class="icon icon-arrow-right-circle text-primary"></i>
                                                        Services
                                                    </a>
                                                </li>
                                                <li class="">
                                                    <a href="faq.php" class="text-dark"><i
                                                            class="icon icon-arrow-right-circle text-primary"></i> Faq
                                                    </a>
                                                </li>
                                                <li class="">
                                                    <a href="privacy-policy.php" class="text-dark"><i
                                                            class="icon icon-arrow-right-circle text-primary"></i>
                                                        Privacy Policy</a>
                                                </li>
                                                <li class="">
                                                    <a href="terms-conditions.php" class="text-dark"><i
                                                            class="icon icon-arrow-right-circle text-primary"></i>
                                                        Terms-conditions</a>
                                                </li>
                                            </ul>
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
