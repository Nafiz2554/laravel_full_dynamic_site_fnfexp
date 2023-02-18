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
        <h2><i class="halflings-icon edit"></i><span class="break"></span>Edit Blog's Information</h2>

    </div>

    <div class="box-content">
        <form class="form-horizontal" action="{{url('/blog-update/'.$blog->id)}}" method="post" enctype="multipart/form-data">
             @csrf
             {{-- @method('PUT') --}}
            <fieldset>
                <div class="control-group">
                    <label class="control-label" for="date01">Tag1</label>
                    <div class="controls">
                        <input type="text" class="input-xlarge" name="tag1" value="{{$blog->tag1}}">
                    </div>
                </div>
                <div class="control-group">
                    <label class="control-label" for="date01">Tag2</label>
                    <div class="controls">
                        <input type="text" class="input-xlarge" name="tag2" value="{{$blog->tag2}}">
                    </div>
                </div>

                <div class="control-group">
                    <label class="control-label" for="date01">Title</label>
                    <div class="controls">
                        <input type="text" class="input-xlarge" name="title" value="{{$blog->title}}">
                    </div>
                </div>

 {{-- protected $fillable=['id','heading','description','client_name','client_address','image','status']; --}}
                <div class="control-group hidden-phone">
                    <label class="control-label" for="textarea2">Subtitle</label>
                    <div class="controls">
                        <textarea class="cleditor" name="subtitle" rows="3" required>{{$blog->subtitle}}</textarea>
                    </div>

                </div>

                <div class="control-group">
                    <label class="control-label" for="date01">Date</label>
                    <div class="controls">
                        <input type="datetime-local" id="Test_DatetimeLocal"  class="input-xlarge" name="date" value="{{$blog->date}}">
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