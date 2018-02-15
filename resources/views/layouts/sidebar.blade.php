@include('layouts.master')

@section('sidebarContent')

<div class="col-lg-4 z-depth-1" style="padding-top: 20px">
    <div class="widget-wrapper wow fadeIn" data-wow-delay="0.4s">

        <h5>Categories</h5>
        <hr/>
        <div class="row">
            <div class="list-group list-group-flush col-md-12">
                <?php foreach ($categories as $aCategory) { ?>
                    <a href="{{url('category').'/'.$aCategory->category_id}}" class="list-group-item border-0 waves-effect waves-classic">{{$aCategory->category_name}} </a>
                <?php } ?>
            </div>
        </div>
    </div>

    <div class="widget-wrapper wow fadeIn" data-wow-delay="0.5s">
        <h5>Tags</h5>
        <div id="tegcloud">
            <a href="#" class="badge badge-pill light-blue">Primary</a>
            <a href="#" class="badge badge-pill green">Primary</a>
            <a href="#" class="badge badge-pill blue">Primary</a>
            <a href="#" class="badge badge-pill yellow">Primary</a>
            <a href="#" class="badge badge-pill red">Primary</a>
            <a href="#" class="badge badge-pill blue">Primary</a>
            <a href="#" class="badge badge-pill red">Primary</a>
            <a href="#" class="badge badge-pill light-blue">Primary</a>
            <a href="#" class="badge badge-pill green">Primary</a>
        </div>
    </div>

    <div class="widget-wrapper wow fadeIn" data-wow-delay="0.5s">
        <h5>Recent</h5>
        <div class="list-group">
            <a href="#" class="list-group-item list-group-item-action flex-column align-items-start">
                <div class="d-flex w-100 justify-content-between">
                    <h5 class="mb-1">List group item heading</h5>
                    <small>3 days ago</small>
                </div>
                <p class="mb-1">Donec id elit non mi porta gravida at eget metus. Maecenas sed diam eget risus varius blandit.</p>
                <small>Donec id elit non mi porta.</small>
            </a>
            <a href="#" class="list-group-item list-group-item-action flex-column align-items-start">
                <div class="d-flex w-100 justify-content-between">
                    <h5 class="mb-1">List group item heading</h5>
                    <small class="text-muted">3 days ago</small>
                </div>
                <p class="mb-1">Donec id elit non mi porta gravida at eget metus. Maecenas sed diam eget risus varius blandit.</p>
                <small class="text-muted">Donec id elit non mi porta.</small>
            </a>
            <a href="#" class="list-group-item list-group-item-action flex-column align-items-start">
                <div class="d-flex w-100 justify-content-between">
                    <h5 class="mb-1">List group item heading</h5>
                    <small class="text-muted">3 days ago</small>
                </div>
                <p class="mb-1">Donec id elit non mi porta gravida at eget metus. Maecenas sed diam eget risus varius blandit.</p>
                <small class="text-muted">Donec id elit non mi porta.</small>
            </a>
        </div>

    </div>

    <div class="widget-wrapper wow fadeIn" data-wow-delay="0.6s">
        <div class="card z-depth-0">
            <div class="card-body">
                <h5>Subscribe to our Newsletter</h5>
                <p>Once a week we will send you a summary of the most useful news</p>
                <div class="md-form">
                    <i class="fa fa-user prefix grey-text"></i>
                    <input type="text" id="form1" class="form-control">
                    <label for="form1">Your name</label>
                </div>
                <div class="md-form">
                    <i class="fa fa-envelope prefix grey-text"></i>
                    <input type="text" id="form2" class="form-control">
                    <label for="form2">Your email</label>
                </div>
                <button class="btn btn-blue btn-md">Submit</button>

            </div>
        </div>
    </div>

    <!-- Archieve -->
    <section class="wow fadeIn" data-wow-delay="0.4s">
        <h5>Archive</h5>
        <!--List-->
        <ul class="list mt-3">
            <li>
                <h6 class="">
                    <a href="#!" class="grey-text">August 2016</a>
                </h6>
            </li>
            <li>
                <h6 class="">
                    <a href="#!" class="grey-text">July 2016</a>
                </h6>
            </li>
            <li>
                <h6 class="">
                    <a href="#!" class="grey-text">June 2016</a>
                </h6>
            </li>
            <li>
                <h6 class="">
                    <a href="#!" class="grey-text">May 2016</a>
                </h6>
            </li>
            <li>
                <h6 class="">
                    <a href="#!" class="grey-text">April 2016</a>
                </h6>
            </li>
            <li>
                <h6 class="">
                    <a href="#!" class="grey-text">March 2016</a>
                </h6>
            </li>
            <li>
                <h6 class="mb-4">
                    <a href="#!" class="grey-text">Febuary 2016</a>
                </h6>
            </li>
        </ul>
        <!--List-->

        <hr>

    </section>
</div>
<!-- Archieve -->


@endsection