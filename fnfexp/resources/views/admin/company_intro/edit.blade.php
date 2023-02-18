@extends('admin.admin_master')
@section('admin_content')

@if ($errors->any())
<div class="alert alert-danger">
    <ul>
        @foreach ($errors->all() as $error)
            <li>{{ $error }}</li>
        @endforeach
    </ul>
</div>
@endif


<div class="row-fluid sortable">
<div class="box span12">
    <div class="box-header" data-original-title>
        <p class="alert-success">
            <?php
            $message= Session()->get('message');
            if($message){
                echo $message;
                Session()->put('message',null);
            }
            ?>
        </p>
        <h2><i class="halflings-icon edit"></i><span class="break"></span>Edit Company's Introduction</h2>

    </div>

    <div class="box-content">
        <form class="form-horizontal" action="{{url('/intro-update/'.$company_intro->id)}}" method="post" enctype="multipart/form-data">
             @csrf
             {{-- @method('PUT') --}}
            <fieldset>
                <div class="control-group">
                    <label class="control-label" for="date01">Edit Title</label>
                    <div class="controls">
                        <input type="text" class="input-xlarge" name="title" value="{{$company_intro->title}}">
                    </div>
                </div>


                <div class="control-group hidden-phone">
                    <label class="control-label" for="textarea2">Edit This Subtitle</label>
                    <div class="controls">
                        <textarea class="cleditor" name="subtitle1" rows="3" required>{{$company_intro->subtitle1}}</textarea>
                    </div>

                </div>

                <div class="control-group">
                    <label class="control-label" for="date01">Edit This Subtitle</label>
                    <div class="controls">
                        <input type="text" class="input-xlarge" name="subtitle2" value="{{$company_intro->subtitle2}}">
                    </div>
                </div>
                <div class="control-group">
                    <label class="control-label" for="date01">Current Year</label>
                    <div class="controls">
                        <input type="text" class="input-xlarge" name="year" value="{{$company_intro->year}}">
                    </div>
                </div>
                <div class="control-group">
                    <label class="control-label" for="date01">Total Delivery</label>
                    <div class="controls">
                        <input type="text" class="input-xlarge" name="total_delivery" value="{{$company_intro->total_delivery}}">
                    </div>
                </div>
                <div class="control-group">
                    <label class="control-label" for="date01">Total Employee</label>
                    <div class="controls">
                        <input type="text" class="input-xlarge" name="employee" value="{{$company_intro->employee}}">
                    </div>
                </div>
                <div class="control-group">
                    <label class="control-label" for="date01">Total Experience</label>
                    <div class="controls">
                        <input type="text" class="input-xlarge" name="experience" value="{{$company_intro->experience}}">
                    </div>
                </div>

                <div class="control-group">
                    <label class="control-label">File Upload</label>
                    <div class="controls">
                        <input type="file" name="image">
                    </div>
                </div>


                <div class="form-actions">
                    <button type="submit" class="btn btn-primary">Update</button>
                </div>
            </fieldset>
        </form>

    </div>
</div>
<!--/span-->
</div>
<!--/row-->
</div>
<!--/row-->
    
@endsection