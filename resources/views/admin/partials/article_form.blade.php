@extends('admin.master')

@section('adminContent')
<div class="row">
    <div class=" col-lg-9">
        <div class="card">
            <div class="card-header" data-background-color="green">
                @if(isset($oldArticleData))
                <h4 class="title">Edit Article</h4>
                <p class="category">Change old article data</p>
                @else
                <h4 class="title">New Article</h4>
                <p class="category">Write an article for the blog</p>
                @endif
            </div>
            <div class="card-content">
                @if(isset($oldArticleData))
                {!! Form::model($oldArticleData,['url' => 'save-article','method' => 'post']) !!}
                <input type="hidden" name="article_id" value="{{$oldArticleData->article_id}}" />
                @else
                {!! Form::open(['url' => 'save-article','method' => 'post']) !!}
                @endif
                <div class="row form-group is-focused">
                    <div class="col-sm-3">
                        {!! Form::label('article_title', 'Article Title',['class' => 'custom-form-label']) !!}
                    </div>
                    <div class="col-sm-9">
                        {!! Form::text('article_title', null, ['class' => 'form-control form-input-custom','placeholder'=>"Someday I will master Laravel"]) !!}
                        <strong>Human readable name</strong>
                    </div>
                </div>
                <div class="row form-group">
                    <div class="col-sm-3">
                        {!! Form::label('article_slug', 'Article URL friendly name',['class' => 'custom-form-label']) !!}
                    </div>
                    <div class="col-sm-6">
                        {!! Form::text('article_slug', null, ['class' => 'form-control form-input-custom','placeholder'=>"someday-i-will-master-laravel"]) !!}
                        <strong>No space or special characters, e.g: your-post-title</strong>
                    </div>
                </div>
                <div class="row form-group">

                    <div class="col-sm-3">
                        <label class="custom-form-label"></label>
                    </div>
                    <div class="col-sm-9">
                        {!! Form::textarea('article_body', null, ['class' => 'form-control form-input-custom','rows'=>'10']) !!}

                        <script src="{{asset('public/admin_assets/js/nicEdit-latest.js')}}" type="text/javascript"></script>
                        <script type="text/javascript">bkLib.onDomLoaded(nicEditors.allTextAreas);</script>
                    </div>
                </div>
                <div class="row form-group">
                    <div class="col-sm-3">
                        {!! Form::label('category_id', 'Article Category',['class' => 'custom-form-label']) !!}
                    </div>
                    <div class="col-sm-3">
                        <?php
                        $cat = [];
                        foreach ($listCategories as $aCategory) {
                            $cat[$aCategory->category_id] = $aCategory->category_name;
                        }
                        ?>
                        @if(isset($oldArticleData))
                        {{ Form::select('category_id', $cat, $oldArticleData->category_id, ['class' => 'form-control form-input-custom']) }}
                        @else
                        {{ Form::select('category_id', $cat, null, ['class' => 'form-control form-input-custom']) }}
                        @endif
                    </div>
                </div>

                <div class="row form-group">
                    <div class="col-sm-3">
                        {!! Form::label('publication_status', 'Status',['class' => 'custom-form-label']) !!}
                    </div>
                    <div class="col-sm-3">
                        <?php
                        $publicationOptions = [
                            0 => "Unpublished",
                            1 => "Published"
                        ];                        
                        ?>
                        @if(isset($oldArticleData))
                        {{ Form::select('publication_status', $publicationOptions, $oldArticleData->publication_status, ['class' => 'form-control form-input-custom']) }}
                        @else
                        {{ Form::select('publication_status', $publicationOptions, 1, ['class' => 'form-control form-input-custom']) }}
                        @endif
                    </div>
                </div>
                <div class="row form-group">
                    <div class="col-sm-9 col-sm-offset-3">
                        <button type="submit" class="btn btn-primary"><i class="fa fa-floppy-o"></i>&nbsp;&nbsp;Create</button>                        
                    </div>
                </div>


                {!! Form::close() !!}

                <div class="clearfix"></div>

            </div>
        </div>
    </div>

    <div class="col-lg-3">
        <div class="card">
            <div class="card-header" data-background-color="purple">
                <h4 class="title">Tips</h4>
                <p class="category">Here is a list of current categories</p>
            </div>

            <div class="card-content table-responsive">
                <table class="table">
                    <thead class="text-primary">
                        <tr><th>#ID</th>
                            <th>Name</th>
                            <th>Status</th>
                        </tr></thead>
                    <tbody>
                        <tr>
                            <td>1</td>
                            <td>Technology</td>
                            <td class="text-primary"><i class="fa fa-check text-success"></i></td>
                        </tr>
                        <tr>
                            <td>2</td>
                            <td>Education</td>
                            <td class="text-primary"><i class="fa fa-check text-success"></i></td>
                        </tr>
                        <tr>
                            <td>3</td>
                            <td>Services</td>
                            <td class="text-primary"><i class="fa fa-ban text-danger"></i></td>
                        </tr>
                    </tbody>
                </table>
            </div>
        </div>
    </div>

</div>

@endsection