@extends('admin.master')

@section('adminContent')
<div class="row">
    <div class=" col-lg-9">
        <div class="card">
            <div class="card-header" data-background-color="green">
                <h4 class="title">Post New Article</h4>
                <p class="category">create new article for blog</p>
            </div>
            <div class="card-content">
                {!! Form::open(['url' => 'save-post','method' => 'post']) !!}
                <div class="row form-group is-focused">
                    <div class="col-sm-3">
                        <label class="custom-form-label">Article Name</label>
                    </div>
                    <div class="col-sm-9">
                        <input placeholder="Someday I will master Laravel" autofocus="" name="article_title" type="text" class="form-control form-input-custom">
                        <strong>Human readable name</strong>
                    </div>
                </div>
                <div class="row form-group">
                    <div class="col-sm-3">
                        <label class="custom-form-label">Article URL friendly Name</label>
                    </div>
                    <div class="col-sm-6">
                        <input placeholder="someday-i-will-master-laravel" name="article_slug" type="text" class="form-control form-input-custom">
                        <strong>No space or special characters, e.g: your-post-title</strong>
                    </div>
                </div>
                <div class="row form-group">

                    <div class="col-sm-3">
                        <label class="custom-form-label"></label>
                    </div>
                    <div class="col-sm-9">
                        <textarea style="min-height: 200px" name="article_body" class="form-control form-input-custom" rows="10"></textarea>
                        
                        <script src="{{asset('public/admin_assets/js/nicEdit-latest.js')}}" type="text/javascript"></script>
                        <script type="text/javascript">bkLib.onDomLoaded(nicEditors.allTextAreas);</script>

                    </div>
                </div>
                <div class="row form-group">
                    <div class="col-sm-3">
                        <label class="custom-form-label">Article Category</label>
                    </div>
                    <div class="col-sm-3">
                        <select name="category_id" class="form-control form-input-custom">
                            <?php foreach($listCategories as $aCategory) { ?>
                            <option value="{{$aCategory->category_id}}">{{$aCategory->category_name}}</option>
                            <?php } ?>
                        </select>
                    </div>
                </div>

                <div class="row form-group">
                    <div class="col-sm-3">
                        <label class="custom-form-label">Publication Status</label>
                    </div>
                    <div class="col-sm-3">
                        <select name="publication_status" class="form-control form-input-custom">
                            <option value="1">Published</option>
                            <option value="0">Unpublished</option>
                        </select>
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