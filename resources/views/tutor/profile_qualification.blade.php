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
                                        <a class="nav-link  pers-link fs-6 px-5 py-2  text-white"
                                            href="{{ route('user.profile.info') }}">Personal Information</a>
                                    </li>
                                    <li class="nav-item" role="presentation">
                                        <a class="nav-link pers-link fs-6 px-5 py-2  text-white" id="tab-12-tab"
                                            href="{{ route('user.profile.address') }}" role="tab"> Tuition
                                            Address
                                        </a>
                                    </li>

                                    @if ($userinfo->role_id == 1)
                                        <li class="nav-item" role="presentation">
                                            <a class="nav-link active pers-link fs-6 px-5 py-2  text-white"
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
                            <div class="tab-pane active" id="tab-13">
                                <div class="row ">
                                    <div class="col-md-12 ">
                                        <form method="POST" action="{{ route('tutor.forms.update.qualification') }}"
                                            class="card ">
                                            @csrf
                                            <div class="card-body">
                                                <div class="form-group">
                                                    <div class="row">
                                                        <div class="col-md-6">

                                                            <x-forms.select-input name="qualification"
                                                                label="Highest qualification" :options="$options['qualification']"
                                                                selected="{{ $tutorinfo->qualification ?? '' }}" />
                                                        </div>
                                                        <div class="col-md-6">

                                                            <x-forms.select-input name="skills" label="Teaching skillset"
                                                                :options="$options['skills']" selected="{{ $tutorinfo->skills ?? '' }}" />
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="form-group">
                                                    <div class="row">
                                                        <div class="col-md-6">
                                                            <x-forms.select-input name="experience"
                                                                label="Working / Teaching Experience" :options="$options['experience']"
                                                                selected="{{ $tutorinfo->experience ?? '' }}" />
                                                        </div>
                                                        <div class="col-md-6">
                                                            <x-forms.select-input name="teaching" label="Teaching"
                                                                :options="$options['teach']" selected="{{ $tutorinfo->teaching ?? '' }}" />
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="form-group">
                                                    <div class="row">
                                                        <div class="col-md-6">
                                                            <label class="form-label text-dark">Attach Your
                                                                resume</label>
                                                            <div class="form-file">
                                                                <input type="file"
                                                                    class="form-control  example-file-input-custom "
                                                                    name="example-file-input-custom">
                                                            </div>
                                                        </div>
                                                        <div class="col-md-6">
                                                            <label class="form-label text-dark">Attach
                                                                educational
                                                                certificate</label>
                                                            <div class="form-file">
                                                                <input type="file"
                                                                    class="form-control example-file-input-custom "
                                                                    name="example-file-input-custom">
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="form-group mt-5">
                                                    <label class="form-label text-dark">Attach Experience
                                                        certificate</label>
                                                    <div class="form-file">
                                                        <input type="file"
                                                            class="form-control  example-file-input-custom "
                                                            name="example-file-input-custom">
                                                    </div>
                                                </div>


                                                <x-forms.textarea name="info" label="Additional Info"
                                                    placeholder="Message" rows="6"
                                                    value="{{ $tutorinfo->info ?? '' }}" />

                                            </div>
                                            <div class=" card-footer d-flex justify-content-end">
                                                <button type="submit" class="btn btn-secondary">Submit</button>
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
    </section>
@endsection


@push('scripts')
@endpush
