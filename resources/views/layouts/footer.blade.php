<section class="main-footer ">
    <footer class="">
        <div class="footer-main footer-main1">
            <div class="container">
                <div class="row">
                    <div class="col-lg-4 col-md-12">
                        <h6 class="text-white">About</h6>
                        <p class="text-white">At hovee Attendance, our mission is to revolutionize
                            attendance management by providing
                            innovative and efficient solutions. We aim to empower organizations
                            to effortlessly track attendance, enhance accountability, and improve overall
                            productivity.
                            Our intuitive interface makes it simple for administrators and instructors to manage
                            attendance records.</p>
                        <p class="text-white">Our intuitive interface makes it simple for administrators and
                            instructors
                            to manage attendance records.</p>
                    </div>
                    <div class="col-lg-2 col-sm-6">
                        <h6 class="text-white">Our Quick Links</h6>
                        <ul class="list-unstyled mb-0 text-white">
                            <li><a href="{{ route('contact-us') }}" class="text-white">Contact us</a></li>
                            <li><a href="{{ route('about-us') }}" class="text-white">About Us</a></li>
                            <li><a href="{{ route('services') }}" class="text-white">Service</a></li>
                            <li><a href="{{ route('blogs') }}" class="text-white">News</a></li>
                            <li><a href="{{ route('terms-and-conditions') }}" class="text-white">Terms & conditions</a></li>
                            <li><a href="{{ route('sitemap') }}" class="text-white">Site map</a></li>
                            <li><a href="{{ route('help-and-support') }}" class="text-white">Help and support</a></li>
                        </ul>
                    </div>

                    <div class="col-lg-3 col-sm-6">
                        <h6 class="text-white">Contact</h6>
                        <ul class="list-unstyled mb-0">
                            <li>
                                <a href="#" class="text-white "><i
                                        class="fa fa-home me-3 text-secondary"></i>
                                    {{ env('APP_ADDRESS') }}</a>
                            </li>
                            <li>
                                <a href="mailto:{{ env('APP_MAIL') }}" class="text-white"><i
                                        class="fa fa-envelope me-3 text-secondary"></i>
                                        {{ env('APP_MAIL') }} </a>
                            </li>
                            <li>
                                <a href="#" class="text-white"><i
                                        class="fa fa-phone me-3 text-secondary"></i>
                                        {{ env('APP_TELEPHONE_PRIMARY') }} </a>
                            </li>
                            <li>
                                <a href="#" class="text-white"><i
                                        class="fa fa-print me-3 text-secondary"></i>
                                        {{ env('APP_TELEPHONE_SECONDARY') }} </a>
                            </li>
                        </ul>
                        <ul class="list-unstyled list-inline mt-3">
                            <li class="list-inline-item">
                                <a class="btn-floating btn-sm rgba-white-slight mx-1 waves-effect waves-light">
                                    <i class="fa fa-facebook bg-facebook"></i>
                                </a>
                            </li>
                            <li class="list-inline-item">
                                <a class="btn-floating btn-sm rgba-white-slight mx-1 waves-effect waves-light">
                                    <i class="fa fa-twitter bg-info"></i>
                                </a>
                            </li>
                            <li class="list-inline-item">
                                <a class="btn-floating btn-sm rgba-white-slight mx-1 waves-effect waves-light">
                                    <i class="fa fa-google-plus bg-danger"></i>
                                </a>
                            </li>
                            <li class="list-inline-item">
                                <a class="btn-floating btn-sm rgba-white-slight mx-1 waves-effect waves-light">
                                    <i class="fa fa-linkedin bg-linkedin"></i>
                                </a>
                            </li>
                        </ul>
                    </div>
                    <div class="col-lg-3 col-md-12">
                        <h6 class="text-white">Experience hovee Attendance App</h6>

                        <ul class="list-unstyled mb-0">

                            <li><span><a href="#"> <img class=""
                                            src="{{ asset('assets/images/categories/downloadapp.png') }}"
                                            alt=""></a></span>

                                <span><a href="#"> &nbsp; &nbsp;
                                        <img class=""
                                            src="{{ asset('assets/images/categories/download.png') }}"
                                            alt=""></a></span>
                            </li>


                        </ul>
                        <div class="row mt-3">
                            <div class="col-md-12 col-lg-6">
                                <span><a href="#"> <img
                                            src="http://hovee.in/beta/public/assets/images/barcode.png"
                                            alt="" class="appstore "></a></span>
                            </div>
                            <div class="col-md-12 col-lg-6">
                                <span>
                                    <p class="barcode-sub ">Open camera & scan the QR code to Download the App</p>
                                </span>
                            </div>
                        </div>




                        <h6 class="mb-0 mt-5 text-white">Payments</h6>
                        <hr class="deep-purple  text-primary accent-2 mb-2 mt-3 d-inline-block mx-auto">
                        <div class="clearfix"></div>
                        <ul class="footer-payments">
                            <li class="ps-0"><a href="#"><i class="fa fa-cc-amex text-light"
                                        aria-hidden="true"></i></a></li>
                            <li><a href="#"><i class="fa fa-cc-visa text-light" aria-hidden="true"></i></a>
                            </li>
                            <li><a href="#"><i class="fa fa-credit-card-alt text-light"
                                        aria-hidden="true"></i></a>
                            </li>
                            <li><a href="#"><i class="fa fa-cc-mastercard text-light"
                                        aria-hidden="true"></i></a>
                            </li>
                            <li><a href="#"><i class="fa fa-cc-paypal text-light"
                                        aria-hidden="true"></i></a>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
        <div class="p-0 ">
            <div class="container">
                <div class="row d-flex">
                    <div class="col-lg-12 col-sm-12  mt-2 mb-2 text-center text-white">
                        Copyright © 2024 <a href="#" class="fs-14 text-secondary"> hovee Shersi
                            Communication Private
                            Limited</a>
                    </div>
                </div>
            </div>
        </div>
    </footer>
</section>