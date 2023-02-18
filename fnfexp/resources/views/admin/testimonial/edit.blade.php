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
        <h2><i class="halflings-icon edit"></i><span class="break"></span>Edit Testimonial's Information</h2>

    </div>

    <div class="box-content">
        <form class="form-horizontal" action="{{url('/testimonial-update/'.$testimonial->id)}}" method="post" enctype="multipart/form-data">
             @csrf
             {{-- @method('PUT') --}}
            <fieldset>
                <div class="control-group">
                    <label class="control-label" for="date01">Heading</label>
                    <div class="controls">
                        <input type="text" class="input-xlarge" name="heading" value="{{$testimonial->heading}}">
                    </div>
                </div>

 {{-- protected $fillable=['id','heading','description','client_name','client_address','image','status']; --}}
                <div class="control-group hidden-phone">
                    <label class="control-label" for="textarea2">Description</label>
                    <div class="controls">
                        <textarea class="cleditor" name="description" rows="3" required>{{$testimonial->description}}</textarea>
                    </div>

                </div>

                <div class="control-group">
                    <label class="control-label" for="date01">Client Name</label>
                    <div class="controls">
                        <input type="text" class="input-xlarge" name="client_name" value="{{$testimonial->client_name}}">
                    </div>
                </div>
                <div class="control-group">
                    <label class="control-label" for="date01">Client Address</label>
                    <div class="controls">
                        <input type="text" class="input-xlarge" name="client_address" value="{{$testimonial->client_address}}">
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