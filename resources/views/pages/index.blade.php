@include('layouts.master')

@section('mainContent')



<div class="col-md-8">

    <?php foreach ($allArticles as $anArticle) { ?>
        <!--Post-->
        <div class="post-wrapper wow fadeIn" data-wow-delay="0.2s">
            <!--Post data-->
            <h1 class="h1-responsive dark-grey-text font-bold">{{$anArticle->article_title}}
                <!--<small class="text-muted">{{$anArticle->category->category_name}}</small>-->
            </h1>
            <h6>Written by
                <a href="">
                    <strong>Admin</strong>
                </a> in 
                <a href="{{url('/blog/'.$anArticle->category_id)}}">
                    <strong>{{$anArticle->category->category_name}}</strong>
                </a>, {{$anArticle->created_at}}</h6>

            <br>

            <!--Featured image -->
            <div class="view overlay hm-white-light z-depth-1-half rounded">
                <img src="{{asset('public/img/76.jpg')}}" class="img-fluid" alt="">
                <div class="mask">
                </div>
            </div>

            <br>

            <!--Post excerpt-->
            <p>{{ substr(strip_tags($anArticle->article_body),0,300) }}</p>

            <!--"Read more" button-->
            <a href="{{url('post/').'/'.$anArticle->article_id.'/'.$anArticle->article_slug}}" class="btn btn-blue btn-md">Read more</a>
        </div>
        <!--/.Post-->

        <hr class="mt-5">
    <?php } ?>


<!--    Post
    <div class="post-wrapper wow fadeIn" data-wow-delay="0.4s">
        Post data
        <h1 class="h1-responsive dark-grey-text font-bold mt-5">Post title
            <small class="text-muted">Secondary text</small>
        </h1>
        <h6>Written by
            <a href="">
                <strong>John Doe</strong>
            </a>, 30.04.2016</h6>

        <br>

        Featured image 
        <div class="view overlay hm-white-light z-depth-1-half rounded">
            <img src="{{asset('public/img/77.jpg')}}" class="img-fluid " alt="">
            <div class="mask">
            </div>
        </div>

        <br>

        Post excerpt
        <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Eos, officia omnis. Vero nihil neque dignissimos
            hic voluptas quisquam amet porro, similique libero ullam veritatis tempora cumque voluptates
            harum. Repellendus, impedit.</p>

        "Read more" button
        <a href="blog_single.html" class="btn btn-blue btn-md">Read more</a>
    </div>
    /.Post

    <hr class="mt-5">    -->

    <!--Pagination-->
    <nav>
        <ul class="pagination flex-center pg-primary  wow fadeIn" data-wow-delay="0.2s">
            <!--Arrow left-->
            <li class="page-item">
                <a class="page-link" aria-label="Previous">
                    <span aria-hidden="true">&laquo;</span>
                    <span class="sr-only">Previous</span>
                </a>
            </li>

            <!--Numbers-->
            <li class="page-item active">
                <a class="page-link">1</a>
            </li>
            <li class="page-item">
                <a class="page-link">2</a>
            </li>
            <li class="page-item">
                <a class="page-link">3</a>
            </li>
            <li class="page-item">
                <a class="page-link">4</a>
            </li>
            <li class="page-item">
                <a class="page-link">5</a>
            </li>

            <!--Arrow right-->
            <li class="page-item">
                <a class="page-link" aria-label="Next">
                    <span aria-hidden="true">&raquo;</span>
                    <span class="sr-only">Next</span>
                </a>
            </li>
        </ul>
    </nav>
    <!--/.Pagination-->

</div>

@endsection