@extends('layouts.main')
@section('title', $title)
@push('css')
    <style>
        .sptp-roll {
            margin-top: 100px !important;
        }

        .form-role .form .form-input input {
            display: none !important;
        }

        .form-role .form .form-input label {
            display: block !important;
            background: #fdfdfd !important;
            border: 1px solid #eee !important;
            text-align: center !important;
            padding: 15px !important;
            box-shadow: 2px 2px 5px 2px #ddd !important;
        }

        .form-role .form .form-input label .title-img {
            width: 10% !important;
        }

        .form-role .form .form-input label .select-role {
            font-size: 25px !important;
            font-weight: 600 !important;
            color: #ffa012 !important;
        }

        .form-role .form .form-input label:hover {
            border: 1px solid rgb(202, 0, 104) !important;
        }

        .form-role .form .form-input input:checked+label {
            background: var(--primary-bg-color) !important;
        }

        .form-role .form .form-input input:checked+label .select-role {
            color: #fff !important;
        }
    </style>
@endpush

@section('content')
    <section class="sptb bg-white sptp-roll">
        <div class="container">
            <div class="section-title center-block text-center">
                <h2>Select Role</h2>
            </div>
            <form action="<?= route('user.forms.switch-role') ?>" method="POST" class="form-role">
                @csrf
                <div class="form">
                    <div class="row">
                        <div class="col-md-4">
                            <div class="form-input">
                                <input type="radio" name="role" id="select-indiv" value="1">
                                <label for="select-indiv">
                                    <div>
                                        <img src="{{ asset('assets/images/categories/5.png') }}" alt="img"
                                            class="title-img">
                                        <div class="select-role">Indiviual Tutor</div>
                                    </div>
                                </label>

                            </div>
                        </div>
                        <div class="col-md-4">
                            <div class="form-input">
                                <input type="radio" name="role" id="select-institute" value="2">
                                <label for="select-institute">
                                    <div>
                                        <img src="{{ asset('assets/images/categories/5.png') }}" alt="img"
                                            class="title-img">
                                        <div class="select-role">Institute</div>
                                    </div>
                                </label>

                            </div>
                        </div>
                        <div class="col-md-4">
                            <div class="form-input">
                                <input type="radio" name="role" id="select-parent" value="4">
                                <label for="select-parent">
                                    <div>
                                        <img src="{{ asset('assets/images/categories/5.png') }}" alt="img"
                                            class="title-img">
                                        <div class="select-role">Parent</div>
                                    </div>
                                </label>

                            </div>
                        </div>
                        <div class="col-md-4">
                            <div class="form-input">
                                <input type="radio" name="role" id="select-student" value="5">
                                <label for="select-student">
                                    <div>
                                        <img src="{{ asset('assets/images/categories/5.png') }}" alt="img"
                                            class="title-img">
                                        <div class="select-role">Student</div>
                                    </div>
                                </label>
                            </div>
                        </div>
                        <div class="col-md-4">
                            <div class="form-input">
                                <input type="radio" name="role" id="select-hostel" value="3">
                                <label for="select-hostel">
                                    <div>
                                        <img src="{{ asset('assets/images/categories/5.png') }}" alt="img"
                                            class="title-img">
                                        <div class="select-role">Hostel</div>
                                    </div>
                                </label>

                            </div>
                        </div>
                        <div class="col-md-4">
                            <div class="form-input">
                                <input type="radio" name="role" id="select-hosteller" value="6">
                                <label for="select-hosteller">
                                    <div>
                                        <img src="{{ asset('assets/images/categories/5.png') }}" alt="img"
                                            class="title-img">
                                        <div class="select-role">Hosteller</div>
                                    </div>
                                </label>
                            </div>
                        </div>
                    </div>
                </div>
            </form>

        </div>
    </section>
@endsection


@push('scripts')
    <script>
        $('input[name=role]').change(function() {

            $(this).closest("form").submit();

        })
    </script>
@endpush
