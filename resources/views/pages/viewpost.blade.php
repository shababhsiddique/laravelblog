@include('layouts.master')

@section('mainContent')

<div class="col-md-8">
    <!--Post-->
    <div class="post-wrapper ">
        <!--Post data-->
        <h1 class="h1-responsive dark-grey-text font-bold">{{$article->article_title}}            
        </h1>
        <h6>Written by
                <a href="">
                    <strong>Admin</strong>
                </a> in 
                <a href="{{url('/blog/'.$article->category_id)}}">
                    <strong>{{$article->category->category_name}}</strong>
                </a>, {{$article->created_at}}</h6>

        <br>

        <!--Featured image -->
        <div class="view overlay hm-white-light z-depth-1-half rounded">
            <img src="{{asset($article->article_image)}}" width="100%" class="img-responsive" alt="">
            <div class="mask">
            </div>
        </div>

        <br>

        <!--Post Full-->
        <p>{!!$article->article_body!!}</p>

        <hr/>

        <h4>Comments</h4>

        <section class="wow fadeIn" data-wow-delay="0.2s">
            <div class="media d-block d-md-flex mt-4">
                <img class="d-flex mb-3 mx-auto avatar" src="https://mdbootstrap.com/img/Photos/Avatars/img (20).jpg" alt="Generic placeholder image">
                <div class="media-body text-center text-md-left ml-md-3 ml-0">
                    <h5 class="mt-0">Miley Steward</h5>
                    Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.

                    <div class="media d-block d-md-flex mt-3">
                        <img class="d-flex mb-3 mx-auto avatar" src="https://mdbootstrap.com/img/Photos/Avatars/img (27).jpg" alt="Generic placeholder image">
                        <div class="media-body text-center text-md-left ml-md-3 ml-0">
                            <h5 class="mt-0">Tommy Smith</h5>
                            Sed ut perspiciatis unde omnis iste natus error sit voluptatem accusantium doloremque laudantium, totam rem aperiam, eaque ipsa quae ab illo inventore veritatis et quasi architecto beatae vitae dicta sunt explicabo.

                            <div class="media d-block d-md-flex mt-3">
                                <img class="d-flex mb-3 mx-auto avatar" src="https://mdbootstrap.com/img/Photos/Avatars/img (31).jpg" alt="Generic placeholder image">
                                <div class="media-body text-center text-md-left ml-md-3 ml-0">
                                    <h5 class="mt-0">Alexandra Moon</h5>
                                    Nemo enim ipsam voluptatem quia voluptas sit aspernatur aut odit aut fugit, sed quia consequuntur magni dolores eos qui ratione voluptatem sequi nesciunt.
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="media d-block d-md-flex mt-3">
                        <img class="d-flex mb-3 mx-auto avatar" src="https://mdbootstrap.com/img/Photos/Avatars/img (21).jpg" alt="Generic placeholder image">
                        <div class="media-body text-center text-md-left ml-md-3 ml-0">
                            <h5 class="mt-0">Sylvester the Cat</h5>
                            Neque porro quisquam est, qui dolorem ipsum quia dolor sit amet, consectetur, adipisci velit, sed quia non numquam eius modi tempora incidunt ut labore et dolore magnam aliquam quaerat voluptatem.
                        </div>
                    </div>
                </div>
            </div>
            <div class="media d-block d-md-flex mt-3">
                <img class="d-flex mb-3 mx-auto avatar" src="https://mdbootstrap.com/img/Photos/Avatars/img (30).jpg" alt="Generic placeholder image">
                <div class="media-body text-center text-md-left ml-md-3 ml-0">
                    <h5 class="mt-0">Caroline Horwitz</h5>
                    At vero eos et accusamus et iusto odio dignissimos ducimus qui blanditiis praesentium voluptatum deleniti atque corrupti quos dolores et quas molestias excepturi sint occaecati cupiditate non provident, similique sunt in culpa qui officia deserunt mollitia animi, id est laborum et dolorum fuga.
                </div>
            </div>

        </section>

        <hr/>

        <!-- Comments Form -->
        <section class="wow fadeIn" data-wow-delay="0.2s">
            <h5>Leave a Comment:</h5>
            <div>
                <form>
                    <div class="form-group">
                        <textarea class="form-control" rows="3"></textarea>
                    </div>
                    <button type="submit" class="btn btn-primary">Submit</button>
                </form>
            </div>
        </section>

        <!--Comment end-->

    </div>
    <!--/.Post-->
</div>


@endsection