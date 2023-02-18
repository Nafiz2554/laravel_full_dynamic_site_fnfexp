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
        <h2><i class="halflings-icon edit"></i><span class="break"></span>Edit service Plan</h2>

    </div>

    <div class="box-content">
        <form class="form-horizontal" action="{{url('/plan-update/'.$plan->id)}}" method="post" enctype="multipart/form-data">
             @csrf
             {{-- @method('PUT') --}}
            <fieldset>
                <div class="control-group">
                    <label class="control-label" for="date01">Edit Plan's Title</label>
                    <div class="controls">
                        <input type="text" class="input-xlarge" name="title" value="{{$plan->title}}">
                    </div>
                </div>


                <div class="control-group hidden-phone">
                    <label class="control-label" for="textarea2">Edit Subtitle</label>
                    <div class="controls">
                        <textarea class="cleditor" name="subtitle" rows="3" required>{{$plan->subtitle}}</textarea>
                    </div>

                </div>

                <div class="control-group">
                    <label class="control-label" for="date01">Edit Price</label>
                    <div class="controls">
                        <input type="text" class="input-xlarge" name="price" value="{{$plan->price}}">
                    </div>
                </div>
                <div class="control-group">
                    <label class="control-label" for="date01">Edit Unit</label>
                    <div class="controls">
                        <input type="text" class="input-xlarge" name="unit" value="{{$plan->unit}}">
                    </div>
                </div>
                <div class="control-group">
                    <label class="control-label" for="date01">Edit Input Information</label>
                    <div class="controls">
                        <input type="text" class="input-xlarge" name="input1" value="{{$plan->input1}}">
                    </div>
                </div>
                <div class="control-group">
                    <label class="control-label" for="date01">Edit Input Information</label>
                    <div class="controls">
                        <input type="text" class="input-xlarge" name="input2" value="{{$plan->input2}}">
                    </div>
                </div>
                <div class="control-group">
                    <label class="control-label" for="date01">Edit Input Information</label>
                    <div class="controls">
                        <input type="text" class="input-xlarge" name="input3" value="{{$plan->input3}}">
                    </div>
                </div>
                <div class="control-group">
                    <label class="control-label" for="date01">Edit Input Information</label>
                    <div class="controls">
                        <input type="text" class="input-xlarge" name="input4" value="{{$plan->input4}}">
                    </div>
                </div>
                <div class="control-group">
                    <label class="control-label" for="date01">Edit Contact Number</label>
                    <div class="controls">
                        <input type="text" class="input-xlarge" name="mobile_no" value="{{$plan->mobile_no}}">
                    </div>
                </div>

                 


                <div class="form-actions">
                    <button type="submit" class="btn btn-primary">Update Plan</button>
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