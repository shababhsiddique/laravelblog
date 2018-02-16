@extends('admin.master')

@section('adminContent')


<div class="row">
    <div class="col-lg-12">
        <div class="card">
            <div class="card-header" data-background-color="purple">
                <h4 class="title">Articles</h4>
                <p class="category">List of All Articles</p>
            </div>
            <div class="card-content table-responsive">
                <table class="table">
                    <thead class="text-primary">
                        <tr>
                            <th>Name</th>
                            <th>slug</th>
                            <th></th>
                            <th>Category</th>
                            <th style="width: 200px">Status</th>
                            <th style="width: 130px"></th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php foreach ($allArticles as $anArticle) { ?>
                        
                            <tr>
                                <td>{{$anArticle->article_title}}</td>
                                <td>{{$anArticle->article_slug}}</td>
                                <td>{{substr(strip_tags($anArticle->article_body),0,100)}}...</td>
                                <td>{{$anArticle->category->category_name}}</td>
                                <td>
                                    @if ($anArticle->publication_status == 0)
                                    <i class="fa fa-eye-slash text-warning"></i> Unpublished
                                    @else
                                    <i class="fa fa-eye text-success"></i> Published
                                    @endif
                                </td>
                                <td class="td-actions text-right">

                                    <a href="{{url('/admin/edit-article/'.$anArticle->article_id)}}" type="button" rel="tooltip" title="" class="btn btn-primary btn-sm" data-original-title="Edit">
                                        <i class="fa fa-pencil"></i>
                                    </a>

                                    <a href="{{url('/admin/edit-article/'.$anArticle->article_id)}}" type="button" rel="tooltip" title="" class="btn btn-success btn-sm" data-original-title="Show On Favourite">
                                        <i class="fa fa-star"></i>
                                    </a>

                                    <!--Show thumbs up button if unpublished,--> 
                                    @if ($anArticle->publication_status == 0)
                                    <a href="{{url('/admin/changestatus-article/pub/'.$anArticle->article_id)}}" type="button" rel="tooltip" title="" class="btn btn-success btn-sm" data-original-title="Publish">
                                        <i class="fa fa-thumbs-up"></i>
                                    </a>
                                    @else
                                    <a href="{{url('/admin/changestatus-article/unp/'.$anArticle->article_id)}}" type="button" rel="tooltip" title="" class="btn btn-warning btn-sm" data-original-title="Unpublish">
                                        <i class="fa fa-thumbs-down"></i>
                                    </a>
                                    @endif

                                    <a href="{{url('/admin/changestatus-article/del/'.$anArticle->article_id)}}" type="button" rel="tooltip" title="" class="btn btn-danger btn-sm confirmDelete" data-original-title="Delete">
                                        <i class="fa fa-times"></i>
                                    </a>
                                </td>
                            </tr>
                        <?php } ?>                        
                    </tbody>
                </table>
            </div>
        </div>
    </div>
</div>

<div class="row">
    <div class="col-md-6">
        <div class="card card-stats">
            <div class="card-header" data-background-color="red">                
                <h4 class="title">Recycle Bin</h4>
            </div>
            <div class="card-content table-responsive">
                <table class="table">
                    <thead class="text-primary">
                        <tr>
                            <th>Name</th>
                            <th>slug</th>
                            <th>Category</th>
                            <th>Last Updated</th>
                            <th style="width: 30px"></th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php foreach ($deletedArticles as $anArticle) { ?>
                            <tr>
                                <td class="text-left">{{$anArticle->article_title}}</td>
                                <td class="text-left">{{$anArticle->article_slug}}</td>
                                <td class="text-left">{{$anArticle->category_id}}</td>
                                <td class="text-left">

                                </td>
                                <td class="td-actions text-right">
                                    <a href="{{url('/admin/changestatus-article/rec/'.$anArticle->article_id)}}" type="button" rel="tooltip" title="" class="btn btn-primary btn-sm" data-original-title="Undo Delete">
                                        <i class="fa fa-undo"></i>
                                    </a>
                                </td>
                            </tr>
                        <?php } ?>                        
                    </tbody>
                </table>
            </div>
        </div>
    </div>
    <div class="col-md-6">
        <div class="card card-stats">
            <div class="card-header" data-background-color="green">
                <h4 class="title">Featured Articles</h4>
            </div>
            <div class="card-content ">               

                <?php foreach ($allArticles as $anArticle) { ?>
                    <hr/>
                    <h4 class="text-left"><strong>{{$anArticle->article_title}}</strong></h4>
                    <p class="text-left">{{substr(strip_tags($anArticle->article_body),0,100)}}...</p>
                <?php } ?>  
            </div>
        </div>
    </div>
</div>

@endsection