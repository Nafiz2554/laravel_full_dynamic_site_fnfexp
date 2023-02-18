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
        <h2><i class="halflings-icon edit"></i><span class="break"></span>Edit Team's Information</h2>

    </div>

    <div class="box-content">
        <form class="form-horizontal" action="{{url('/team-update/'.$team->id)}}" method="post" enctype="multipart/form-data">
             @csrf
             {{-- @method('PUT') --}}
            <fieldset>
                <div class="control-group">
                    <label class="control-label" for="date01">Name</label>
                    <div class="controls">
                        <input type="text" class="input-xlarge" name="name" value="{{$team->name}}">
                    </div>
                </div>

  
                <div class="control-group hidden-phone">
                    <label class="control-label" for="textarea2">Designation</label>
                    <div class="controls">
                        <input type="text" class="input-xlarge" name="designation" value="{{$team->designation}}">
                         
                    </div>

                </div>

                <div class="control-group">
                    <label class="control-label" for="date01">Facebook Address</label>
                    <div class="controls">
                        <textarea class="cleditor" name="fb_url" rows="3" required>{{$team->fb_url}}</textarea>
                         
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