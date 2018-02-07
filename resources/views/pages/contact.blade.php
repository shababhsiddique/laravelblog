@include('layouts.master')

@section('mainContent')

<!--Contact-->
<div class="col-lg-12 wow fadeIn" data-wow-delay="0.2s">

    <!--Section: Contact v.1-->
    <section class="py-3 contact-form-wr">

        <!--Section heading-->
        <h2 class="font-bold text-center h1 py-5">Contact us</h2>
        <!--Section description-->
        <p class="section-description pb-4">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Fugit, error amet numquam iure provident voluptate esse quasi,
            veritatis totam voluptas nostrum quisquam eum porro a pariatur accusamus veniam.</p>

        <div class="row">

            <!--Grid column-->
            <div class="col-lg-5 mb-4">

                <!--Form with header-->
                <div class="card">

                    <div class="card-body">
                        <!--Header-->
                        <div class="form-header blue z-depth-1-half">
                            <h3>
                                <i class="fa fa-envelope"></i> Write to us:</h3>
                        </div>

                        <p>We'll write rarely, but only the best content.</p>
                        <br>

                        <!--Body-->
                        <div class="md-form">
                            <i class="fa fa-user prefix grey-text"></i>
                            <input type="text" id="form-name" class="form-control">
                            <label for="form-name">Your name</label>
                        </div>

                        <div class="md-form">
                            <i class="fa fa-envelope prefix grey-text"></i>
                            <input type="text" id="form-email" class="form-control">
                            <label for="form-email">Your email</label>
                        </div>

                        <div class="md-form">
                            <i class="fa fa-tag prefix grey-text"></i>
                            <input type="text" id="form-Subject" class="form-control">
                            <label for="form-Subject">Subject</label>
                        </div>

                        <div class="md-form">
                            <i class="fa fa-pencil prefix grey-text"></i>
                            <textarea id="form-text" class="md-textarea"></textarea>
                            <label for="form-text">Your Message</label>
                        </div>

                        <div class="text-center">
                            <button class="btn btn-blue">Send <i class="fa fa-paper-plane-o ml-1"></i></button>
                        </div>

                    </div>

                </div>
                <!--Form with header-->

            </div>
            <!--Grid column-->

            <!--Grid column-->
            <div class="col-lg-7">

                <!--Google map-->
                <div id="map-container" class="rounded z-depth-1-half map-container">

                    <img class="img-fluid" src="http://via.placeholder.com/800x550" alt="map"/>

                </div>

                <br>
                <!--Buttons-->
                <div class="row text-center">
                    <div class="col-md-4">
                        <a class="btn-floating blue z-depth-1-half">
                            <i class="fa fa-map-marker"></i>
                        </a>
                        <p>San Francisco, CA 94126</p>
                        <p>United States</p>
                    </div>

                    <div class="col-md-4">
                        <a class="btn-floating blue z-depth-1-half">
                            <i class="fa fa-phone"></i>
                        </a>
                        <p>+ 01 234 567 89</p>
                        <p>Mon - Fri, 8:00-22:00</p>
                    </div>

                    <div class="col-md-4">
                        <a class="btn-floating blue z-depth-1-half">
                            <i class="fa fa-envelope"></i>
                        </a>
                        <p>info@gmail.com</p>
                        <p>sale@gmail.com</p>
                    </div>
                </div>

            </div>
            <!--Grid column-->

        </div>

    </section>
    <!--Section: Contact v.1-->
</div>
<!--/.Contact-->


@endsection