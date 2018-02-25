@include('layouts.master')

@section('sidebarContent')

<div class="col-md-4 z-depth-1" style="padding-top: 20px">
    <div class="widget-wrapper wow fadeIn" data-wow-delay="0.4s">

        <h5>Categories</h5>
        <hr/>
        <div class="row">
            <div class="list-group list-group-flush col-md-12">
                <?php foreach ($categories as $aCategory) { ?>

                    <a href="{{url('/blog/'.$aCategory->category_id.'/'.$aCategory->category_name)}}" class="list-group-item border-0 waves-effect waves-classic">{{$aCategory->category_name}} </a>
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
        <h5>Favourites</h5>
        <div class="list-group">
            <?php foreach ($favourites as $aFavourite) { ?>
                <a href="{{url('post/').'/'.$aFavourite->article_id.'/'.$aFavourite->article_slug}}" class="list-group-item list-group-item-action flex-column align-items-start">
                    <div class="d-flex w-100 justify-content-between">
                        <h5 class="mb-1">{{$aFavourite->article_title}}</h5>
                        <small>{{$aFavourite->created_at}}</small>
                    </div>
                    <p class="mb-1">{{mb_substr(strip_tags($aFavourite->article_preface),0,100)}}....</p>
                    <small>by Admin in <strong>{{$aFavourite->category->category_name}}</strong></small>
                </a>
            <?php } ?>
            
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