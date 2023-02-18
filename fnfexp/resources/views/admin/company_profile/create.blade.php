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
                <h2><i class="halflings-icon edit"></i><span class="break"></span>Add Company Information</h2>

            </div>

            
            <div class="box-content">
                <form class="form-horizontal" action="{{url('/company_profiles/')}}" method="post" enctype="multipart/form-data">
                     @csrf
                    <fieldset>
                        <div class="control-group">
                            <label class="control-label" for="date01">who We Are</label>
                            <div class="controls">
                                <input type="text" class="input-xlarge" name="who_we_are" required>
                            </div>
                        </div>


                        <div class="control-group hidden-phone">
                            <label class="control-label" for="textarea2">What's about fnf express</label>
                            <div class="controls">
                                <textarea class="cleditor" name="fn_express" rows="3" required></textarea>
                            </div>

                        </div>
                        <div class="control-group">
                            <label class="control-label" for="date01">Mission</label>
                            <div class="controls">
                                <input type="text" class="input-xlarge" name="mission" required>
                            </div>
                        </div>
                        <div class="control-group">
                            <label class="control-label" for="date01">Vission</label>
                            <div class="controls">
                                <input type="text" class="input-xlarge" name="vission" required>
                            </div>
                        </div>
                        <div class="control-group">
                            <label class="control-label" for="date01">Total Customer</label>
                            <div class="controls">
                                <input type="text" class="input-xlarge" name="customers" required>
                            </div>
                        </div>
                        <div class="control-group">
                            <label class="control-label" for="date01">Total Experience</label>
                            <div class="controls">
                                <input type="text" class="input-xlarge" name="experience" required>
                            </div>
                        </div>
                        <div class="control-group">
                            <label class="control-label" for="date01">Total Percel Delivery</label>
                            <div class="controls">
                                <input type="text" class="input-xlarge" name="percel_delivery" required>
                            </div>
                        </div>

                        <div class="control-group">
                            <label class="control-label">File Upload</label>
                            <div class="controls">
                                <input type="file" name="image" required>
                            </div>
                        </div>


                        <div class="form-actions">
                            <button type="submit" class="btn btn-primary">Add Informations</button>
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
