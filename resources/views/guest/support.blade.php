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
                        <h1 class="">Help & Support</h1>
                        <ol class="breadcrumb text-center">
                            <li class="breadcrumb-item"><a href="index.php">Home</a></li>
                            <li class="breadcrumb-item  text-white">Help & Support</li>
                        </ol>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section class="sptb bg-light">
        <div class="container">
            <div class="row ">
                <div class="col-lg-6 col-md-6 col-sm-6 features">
                    <div class="card rounded-3">
                        <div class="card-body text-center">
                            <div class="feature p-5">
                                <div class="fa-stack fa-lg  fea-icon bg-success  mb-3 ">
                                    <i class="fa fa-university  text-white"></i>
                                </div>
                                <h3>hovee Edge</h3>
                                <p>our being able to do what we like best, every pleasure is to be welcomed and every pain.
                                </p>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-6 col-md-6 col-sm-6 features">
                    <div class="card rounded-3">
                        <div class="card-body text-center">
                            <div class="feature p-5">
                                <div class="fa-stack fa-lg  fea-icon bg-primary mb-3">
                                    <i class="fa fa-pencil-square-o  text-white"></i>
                                </div>
                                <h3>Home Seekers</h3>
                                <p>our being able to do what we like best, every pleasure is to be welcomed and every pain.
                                </p>
                            </div>
                        </div>
                    </div>
                </div>

            </div>
        </div>
    </section>

    <section class="sptb bg-light">
        <div class="container">
            <div class="section-title center-block text-center">
                <h2 class="fw-bold">Knowledge Base</h2>
            </div>
            <div class="row ">
                <div class="col-sm-6 col-lg-4 features">
                    <div class="card">
                        <div class="card-body text-center">
                            <div class="feature p-5">
                                <div class="fa-stack fa-lg  fea-icon bg-success  mb-3 ">
                                    <i class="fa fa-university  text-white"></i>
                                </div>
                                <h3>hovee Edge</h3>
                                <p>our being able to do what we like best, every pleasure is to be welcomed and every pain.
                                </p>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-sm-6 col-lg-4 features">
                    <div class="card">
                        <div class="card-body text-center">
                            <div class="feature p-5">
                                <div class="fa-stack fa-lg  fea-icon bg-primary mb-3">
                                    <i class="fa fa-pencil-square-o  text-white"></i>
                                </div>
                                <h3>Home Seekers</h3>
                                <p>our being able to do what we like best, every pleasure is to be welcomed and every pain.
                                </p>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-sm-6 col-lg-4 features">
                    <div class="card">
                        <div class="card-body text-center">
                            <div class="feature p-5">
                                <div class="fa-stack fa-lg  fea-icon bg-secondary mb-3">
                                    <i class="fa fa-handshake-o  text-white"></i>
                                </div>
                                <h3>Home Owner / Landlord</h3>
                                <p>our being able to do what we like best, every pleasure is to be welcomed and every pain.
                                </p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="pricingTable2-sign-up text-center mt-5">
                <a href="chat.php" class="btn  btn-primary rounded-pill px-5 fs-6">Chat Here</a>
            </div>
        </div>
    </section>


    <section class="sptb bg-white">
        <div class="container">
            <div class="section-title center-block text-start">
                <h2>Frequently Asked Questions</h2>
                <p class="text-start">Sed do eiusmod tempor incididunt ut labore et dolore
                    magna aliqua</p>
            </div>
            <div class="panel-group1" id="accordion2">
                <div class="panel panel-default mb-4 p-0">
                    <div class="panel-heading1 bg-light">
                        <h4 class="panel-title1">
                            <a class="accordion-toggle collapsed" data-bs-toggle="collapse" data-parent="#accordion2"
                                href="#collapseone" aria-expanded="false">1. What the first step of the Class buying
                                process? </a>
                        </h4>
                    </div>
                    <div id="collapseone" class="panel-collapse collapse active" role="tabpanel" aria-expanded="false">
                        <div class="panel-body bg-white">
                            <p>All the Lorem Ipsum generators on the Internet tend to repeat predefined chunks as necessary,
                                making this the first true generator on the Internet. It uses a dictionary of over 200 Latin
                                words </p>
                            <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has
                                been the industry's standard dummy text ever since the 1500s, when an unknown printer took a
                                galley of type and scrambled.Nor again is there anyone who loves or pursues or desires to
                                obtain pain of itself, because it is pain, but because occasionally circumstances occur in
                                which toil and pain can procure him some great pleasure. To take a trivial example, which of
                                us ever undertakes laborious physical exercise</p>
                        </div>
                    </div>
                </div>
                <div class="panel panel-default mb-4 p-0">
                    <div class="panel-heading1">
                        <h4 class="panel-title1">
                            <a class="accordion-toggle collapsed" data-bs-toggle="collapse" data-parent="#accordion2"
                                href="#collapsetwo" aria-expanded="false">2. How long does it take to buy a Class? </a>
                        </h4>
                    </div>
                    <div id="collapsetwo" class="panel-collapse collapse active" role="tabpanel" aria-expanded="false">
                        <div class="panel-body bg-white">
                            <p>All the Lorem Ipsum generators on the Internet tend to repeat predefined chunks as necessary,
                                making this the first true generator on the Internet. It uses a dictionary of over 200 Latin
                                words </p>
                            <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has
                                been the industry's standard dummy text ever since the 1500s, when an unknown printer took a
                                galley of type and scrambled.Nor again is there anyone who loves or pursues or desires to
                                obtain pain of itself, because it is pain, but because occasionally circumstances occur in
                                which toil and pain can procure him some great pleasure. To take a trivial example, which of
                                us ever undertakes laborious physical exercise</p>
                        </div>
                    </div>
                </div>
                <div class="panel panel-default mb-4 p-0">
                    <div class="panel-heading1 bg-light">
                        <h4 class="panel-title1">
                            <a class="accordion-toggle collapsed" data-bs-toggle="collapse" data-parent="#accordion2"
                                href="#collapsethree" aria-expanded="false">3. What is a seller's market?</a>
                        </h4>
                    </div>
                    <div id="collapsethree" class="panel-collapse collapse active" role="tabpanel" aria-expanded="false">
                        <div class="panel-body bg-white">
                            <p>All the Lorem Ipsum generators on the Internet tend to repeat predefined chunks as necessary,
                                making this the first true generator on the Internet. It uses a dictionary of over 200 Latin
                                words </p>
                            <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has
                                been the industry's standard dummy text ever since the 1500s, when an unknown printer took a
                                galley of type and scrambled.Nor again is there anyone who loves or pursues or desires to
                                obtain pain of itself, because it is pain, but because occasionally circumstances occur in
                                which toil and pain can procure him some great pleasure. To take a trivial example, which of
                                us ever undertakes laborious physical exercise</p>
                        </div>
                    </div>
                </div>
                <div class="panel panel-default mb-4 p-0">
                    <div class="panel-heading1">
                        <h4 class="panel-title1">
                            <a class="accordion-toggle collapsed" data-bs-toggle="collapse" data-parent="#accordion2"
                                href="#collapseFour" aria-expanded="false">4. What is a buyer's market?</a>
                        </h4>
                    </div>
                    <div id="collapseFour" class="panel-collapse collapse active" role="tabpanel" aria-expanded="false">
                        <div class="panel-body bg-white">
                            <p>All the Lorem Ipsum generators on the Internet tend to repeat predefined chunks as necessary,
                                making this the first true generator on the Internet. It uses a dictionary of over 200 Latin
                                words </p>
                            <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has
                                been the industry's standard dummy text ever since the 1500s, when an unknown printer took a
                                galley of type and scrambled.Nor again is there anyone who loves or pursues or desires to
                                obtain pain of itself, because it is pain, but because occasionally circumstances occur in
                                which toil and pain can procure him some great pleasure. To take a trivial example, which of
                                us ever undertakes laborious physical exercise</p>
                        </div>
                    </div>
                </div>
                <div class="panel panel-default mb-4 p-0">
                    <div class="panel-heading1 bg-light">
                        <h4 class="panel-title1">
                            <a class="accordion-toggle collapsed" data-bs-toggle="collapse" data-parent="#accordion2"
                                href="#collapseFive" aria-expanded="false">5. What is a stratified market?</a>
                        </h4>
                    </div>
                    <div id="collapseFive" class="panel-collapse collapse active" role="tabpanel" aria-expanded="false">
                        <div class="panel-body bg-white">
                            <p>All the Lorem Ipsum generators on the Internet tend to repeat predefined chunks as necessary,
                                making this the first true generator on the Internet. It uses a dictionary of over 200 Latin
                                words </p>
                            <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has
                                been the industry's standard dummy text ever since the 1500s, when an unknown printer took a
                                galley of type and scrambled.Nor again is there anyone who loves or pursues or desires to
                                obtain pain of itself, because it is pain, but because occasionally circumstances occur in
                                which toil and pain can procure him some great pleasure. To take a trivial example, which of
                                us ever undertakes laborious physical exercise</p>
                        </div>
                    </div>
                </div>
                <div class="panel panel-default mb-4 p-0">
                    <div class="panel-heading1">
                        <h4 class="panel-title1">
                            <a class="accordion-toggle collapsed" data-bs-toggle="collapse" data-parent="#accordion2"
                                href="#collapsesix" aria-expanded="false">6. How much do I have to pay an agent to help me
                                buy a house?</a>
                        </h4>
                    </div>
                    <div id="collapsesix" class="panel-collapse collapse" role="tabpanel" aria-expanded="false">
                        <div class="panel-body bg-white">
                            <p>All the Lorem Ipsum generators on the Internet tend to repeat predefined chunks as necessary,
                                making this the first true generator on the Internet. It uses a dictionary of over 200 Latin
                                words </p>
                            <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has
                                been the industry's standard dummy text ever since the 1500s, when an unknown printer took a
                                galley of type and scrambled.Nor again is there anyone who loves or pursues or desires to
                                obtain pain of itself, because it is pain, but because occasionally circumstances occur in
                                which toil and pain can procure him some great pleasure. To take a trivial example, which of
                                us ever undertakes laborious physical exercise</p>
                        </div>
                    </div>
                </div>
                <div class="panel panel-default p-0 mb-4">
                    <div class="panel-heading1 bg-light">
                        <h4 class="panel-title1">
                            <a class="accordion-toggle collapsed" data-bs-toggle="collapse" data-parent="#accordion2"
                                href="#collapseseven" aria-expanded="false">7. What kind of credit score do I need to buy
                                a Class?</a>
                        </h4>
                    </div>
                    <div id="collapseseven" class="panel-collapse collapse" role="tabpanel" aria-expanded="false">
                        <div class="panel-body bg-white">
                            <p>All the Lorem Ipsum generators on the Internet tend to repeat predefined chunks as necessary,
                                making this the first true generator on the Internet. It uses a dictionary of over 200 Latin
                                words </p>
                            <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has
                                been the industry's standard dummy text ever since the 1500s, when an unknown printer took a
                                galley of type and scrambled.Nor again is there anyone who loves or pursues or desires to
                                obtain pain of itself, because it is pain, but because occasionally circumstances occur in
                                which toil and pain can procure him some great pleasure. To take a trivial example, which of
                                us ever undertakes laborious physical exercise</p>
                        </div>
                    </div>
                </div>
                <div class="panel panel-default p-0">
                    <div class="panel-heading1">
                        <h4 class="panel-title1">
                            <a class="accordion-toggle collapsed" data-bs-toggle="collapse" data-parent="#accordion2"
                                href="#collapseight" aria-expanded="false">8. How much do I need for a down payment?</a>
                        </h4>
                    </div>
                    <div id="collapseight" class="panel-collapse collapse" role="tabpanel" aria-expanded="false">
                        <div class="panel-body bg-white">
                            <p>All the Lorem Ipsum generators on the Internet tend to repeat predefined chunks as necessary,
                                making this the first true generator on the Internet. It uses a dictionary of over 200 Latin
                                words </p>
                            <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has
                                been the industry's standard dummy text ever since the 1500s, when an unknown printer took a
                                galley of type and scrambled.Nor again is there anyone who loves or pursues or desires to
                                obtain pain of itself, because it is pain, but because occasionally circumstances occur in
                                which toil and pain can procure him some great pleasure. To take a trivial example, which of
                                us ever undertakes laborious physical exercise</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection


@push('scripts')
@endpush
