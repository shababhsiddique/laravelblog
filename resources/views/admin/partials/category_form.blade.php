@extends('admin.master')

@section('adminContent')
<div class="row">
    <div class="col-md-8">
        <div class="card">
            <div class="card-header" data-background-color="purple">
                <h4 class="title">Add Category</h4>
                <p class="category">create new category for blog posts</p>
            </div>
            <div class="card-content">
                {!! Form::open(['url' => 'save-category','method' => 'post']) !!}
                <div class="row form-group">
                    <div class="col-md-3">
                        <label class="custom-form-label">Category Name</label>
                    </div>
                    <div class="col-md-9">
                        <input name="category_name" type="text" class="form-control form-input-custom">
                    </div>
                </div>
                <div class="row form-group">
                    <div class="col-sm-3">
                        <label class="custom-form-label">Category Description</label>
                    </div>
                    <div class="col-sm-9">
                        <textarea name="category_description" class="form-control form-input-custom" rows="5"></textarea>
                    </div>
                </div>
                <div class="row form-group">
                    <div class="col-sm-3">
                        <label class="custom-form-label">Publication Status</label>
                    </div>
                    <div class="col-sm-5">
                        <select name="publication_status" class="form-control form-input-custom">
                            <option value="1">Visible</option>
                            <option value="2">Hidden</option>
                            <option value="3"></option>
                        </select>
                    </div>
                </div>
                <div class="row">
                    <div class="col-sm9 col-md-offset-3">
                        <button type="submit" class="btn btn-primary"><i class="fa fa-floppy-o"></i>&nbsp;&nbsp;Create</button>                        
                    </div>
                </div>


                <div class="clearfix"></div>
                </form>
            </div>
        </div>
    </div>

</div>

@endsection