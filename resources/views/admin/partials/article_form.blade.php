@extends('admin.master')

@section('adminContent')
<div class="row">
    <div class=" col-lg-12">
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
                {!! Form::model($oldArticleData,['url' => 'save-article','method' => 'post','enctype'=> 'multipart/form-data']) !!}
                <input type="hidden" name="article_id" value="{{$oldArticleData->article_id}}" />
                @else
                {!! Form::open(['url' => 'save-article','method' => 'post','enctype'=> 'multipart/form-data']) !!}
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

                <div class="form-group">
                    
                    <div class="col-sm-9 col-sm-offset-3">
                        <img src="<?php if(isset($oldArticleData)){ echo asset($oldArticleData->article_image);}?>" class="img-responsive img-fluid" style="width: 150px"/>
                    </div>
                </div>

                <div class="form-group">
                    <div class="col-sm-3">
                        {!! Form::label('article_image', 'Article Image',['class' => 'custom-form-label']) !!}
                    </div>
                    <div class="col-sm-9 custom-file-input">
                        <input type="file" name="article_image" id="inputFile4"> 
                        <div class="input-group"> 
                            <div class="input-group-btn input-group-sm"> 
                                <button type="button" class="btn btn-primary"> 
                                    <i class="material-icons">attach_file</i> 
                                </button>
                            </div> 
                            
                            <input type="text" readonly="" class="form-control form-input-custom" placeholder="Select image file ..." value="<?php if(isset($oldArticleData)){ echo $oldArticleData->article_image;}?>"> 
                            
                            <input type="hidden" name="article_image_previous" value="<?php if(isset($oldArticleData)){ echo $oldArticleData->article_image;}?>"> 
                            
                        </div>
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
                        {!! Form::label('article_preface', 'Article Preface',['class' => 'custom-form-label']) !!}
                    </div>
                    <div class="col-sm-9">
                        {!! Form::textarea('article_preface', null, ['class' => 'ckeditor','rows'=>'10']) !!}
                    </div>
                </div>

                <div class="row form-group">

                    <div class="col-sm-3">
                        {!! Form::label('article_body', 'Full Article',['class' => 'custom-form-label']) !!}
                    </div>
                    <div class="col-sm-9">
                        {!! Form::textarea('article_body', null, ['class' => 'ckeditor ','rows'=>'10']) !!}
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
                        <button type="submit" class="btn btn-primary"><i class="fa fa-floppy-o"></i>&nbsp;&nbsp;Save</button>
                    </div>
                </div>

                {!! Form::close() !!}

                <div class="clearfix"></div>

            </div>
        </div>
    </div>    

</div>

@endsection