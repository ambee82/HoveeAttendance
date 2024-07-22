<div class="col-xl-3 col-lg-12 col-md-12">
    <div class="card overflow-hidden">
        <div class="card-header bg-secondary ">
            <h3 class="card-title fw-bold fs-5 py-1">My Profile</h3>
        </div>
        <div class="card-body text-center item-user">
            <div class="profile-pic">
                <div class="profile-pic-img">
                    <span class="bg-success dots" data-bs-toggle="tooltip" data-bs-placement="top" title="online"></span>
                    <img src="{{ asset('assets/images/faces/male/1.jpg') }}" class="brround" alt="user">
                </div>
                <div class="user-wrap wideget-user-info mt-5">
                    <a href="#" class="text-dark">
                        <h4 class="font-weight-semibold">{{ $user->first_name }}</h4>
                    </a>
                    <a href="#" class="text-dark">
                        <h4 class="fs-6">Role : Individual Tutor</h4>
                    </a>
                    <span class="text-dark">Member Since {{ $user->created_at->format('M Y') }}</span>
                    <div class="wideget-user-rating">
                        <a href="#"><i class="fa fa-star text-warning"></i></a>
                        <a href="#"><i class="fa fa-star text-warning"></i></a>
                        <a href="#"><i class="fa fa-star text-warning"></i></a>
                        <a href="#"><i class="fa fa-star text-warning"></i></a>
                        <a href="#"><i class="fa fa-star-o text-warning me-1"></i></a>
                        <span class="text-dark">5 (3876 Reviews)</span>
                    </div>
                </div>
            </div>
        </div>
        <div class="accordion " id="accordionExample">
            <div class="accordion-item ">
                <h2 class="accordion-header " id="headingtwo">
                    <button class="accordion-button bg-primary text-white fs-5" type="button" data-bs-toggle="collapse"
                        data-bs-target="#collapsetwo" aria-expanded="true" aria-controls="collapseOne">
                        Management
                    </button>
                </h2>
                <div id="collapsetwo" class="accordion-collapse collapse show" aria-labelledby="headingtwo"
                    data-bs-parent="#accordionExample">
                    <div class="accordion-body">
                        <aside class="doc-sidebar my-dash">
                            <div class="app-sidebar__user clearfix">
                                <ul class="side-menu">
                                    <li>
                                        <a class="side-menu__item" href="{{route('tutor.dashboard')}}"><img
                                                src="{{ asset('assets/images/media/9.png') }}" alt="Course icon"
                                                width="18"><span class="side-menu__label ms-2">
                                                Dashboard</span></a>
                                    </li>
                                    <li>
                                        <a class="side-menu__item" href="{{route('tutor.courses.index')}}"><img
                                                src="{{ asset('assets/images/media/9.png') }}" alt="Course icon"
                                                width="18"><span class="side-menu__label ms-2">
                                                Courses</span></a>
                                    </li>
                                    <li>
                                        <a class="side-menu__item" href="tutor-batchlist.php"><img
                                                src="{{ asset('assets/images/media/10.png') }}" alt="Course icon"
                                                width="18"><span class="side-menu__label ms-2">Batches</span></a>
                                    </li>
                                    <li>
                                        <a class="side-menu__item" href="tutor-leavelist.php"><img
                                                src="{{ asset('assets/images/media/4.png') }}" alt="Course icon"
                                                width="18"><span class="side-menu__label ms-2">Leave</span></a>
                                    </li>
                                    <li>
                                        <a class="side-menu__item" href="tutor-msplist.php"><img
                                                src="{{ asset('assets/images/media/8.png') }}" alt="Course icon"
                                                width="18"><span class="side-menu__label ms-2">Miss Punch</span></a>
                                    </li>
                                    <li>
                                        <a class="side-menu__item" href="tutor-holidaylist.php"><img
                                                src="{{ asset('assets/images/media/7.png') }}" alt="Course icon"
                                                width="18"><span class="side-menu__label ms-2">Holiday
                                            </span></a>
                                    </li>
                                    <li>
                                        <a class="side-menu__item" href="tutor-tutionclasses.php"><img
                                                src="{{ asset('assets/images/media/11.png') }}" alt="Course icon"
                                                width="18"><span class="side-menu__label ms-2">Tution
                                                Classes</span></a>
                                    </li>
                                </ul>
                            </div>
                        </aside>
                    </div>
                </div>
            </div>
        </div>
    </div>

</div>
