{{-- protected $fillable=['id','who_we_are','fn_express','mission','vission','customers','experience','percel_delivery','image','status']; --}}
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
        <h2><i class="halflings-icon edit"></i><span class="break"></span>Edit Company's Information</h2>

    </div>

    <div class="box-content">
        <form class="form-horizontal" action="{{url('/profile-update/'.$company_profile->id)}}" method="post" enctype="multipart/form-data">
             @csrf
             {{-- @method('PUT') --}}
            <fieldset>
                <div class="control-group">
                    <label class="control-label" for="date01">Who We Are</label>
                    <div class="controls">
                        <input type="text" class="input-xlarge" name="who_we_are" value="{{$company_profile->who_we_are}}">
                    </div>
                </div>


                <div class="control-group hidden-phone">
                    <label class="control-label" for="textarea2">What's about fnf express</label>
                    <div class="controls">
                        <textarea class="cleditor" name="fn_express" rows="3" required>{{$company_profile->fn_express}}</textarea>
                    </div>

                </div>

                <div class="control-group">
                    <label class="control-label" for="date01">Mission</label>
                    <div class="controls">
                        <input type="text" class="input-xlarge" name="mission" value="{{$company_profile->mission}}">
                    </div>
                </div>
                <div class="control-group">
                    <label class="control-label" for="date01">Vission</label>
                    <div class="controls">
                        <input type="text" class="input-xlarge" name="vission" value="{{$company_profile->vission}}">
                    </div>
                </div>
                <div class="control-group">
                    <label class="control-label" for="date01">Total Customers</label>
                    <div class="controls">
                        <input type="text" class="input-xlarge" name="customers" value="{{$company_profile->customers}}">
                    </div>
                </div>
                <div class="control-group">
                    <label class="control-label" for="date01">Total Experience</label>
                    <div class="controls">
                        <input type="text" class="input-xlarge" name="experience" value="{{$company_profile->experience}}">
                    </div>
                </div>
                <div class="control-group">
                    <label class="control-label" for="date01">Total Percel Delivery</label>
                    <div class="controls">
                        <input type="text" class="input-xlarge" name="percel_delivery" value="{{$company_profile->percel_delivery}}">
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