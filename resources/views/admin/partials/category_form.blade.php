@extends('admin.master')

@section('adminContent')
<div class="row">
    <div class=" col-lg-8">
        <div class="card">
            <div class="card-header" data-background-color="green">
                <h4 class="title">Add Category</h4>
                <p class="category">create new category for blog posts</p>
            </div>
            <div class="card-content">
                {!! Form::open(['url' => 'save-category','method' => 'post']) !!}
                <div class="row form-group is-focused">
                    <div class="col-sm-3">
                        <label class="custom-form-label">Category Name</label>
                    </div>
                    <div class="col-sm-9">
                        <input autofocus="" name="category_name" type="text" class="form-control form-input-custom">
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

    <div class="col-lg-4">
        <div class="card">
            <div class="card-header" data-background-color="purple">
                <h4 class="title">Categories</h4>
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