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
                <h2><i class="halflings-icon edit"></i><span class="break"></span>Add Service Plan</h2>

            </div>

            
            <div class="box-content">
                <form class="form-horizontal" action="{{url('/plans/')}}" method="post" enctype="multipart/form-data">
                     @csrf
                    <fieldset>
                        <div class="control-group">
                            <label class="control-label" for="date01">Add Service Title</label>
                            <div class="controls">
                                <input type="text" class="input-xlarge" name="title" required>
                            </div>
                        </div>


                        <div class="control-group hidden-phone">
                            <label class="control-label" for="textarea2">Add Subtitle</label>
                            <div class="controls">
                                <textarea class="cleditor" name="subtitle" rows="3" required></textarea>
                            </div>

                        </div>
                        <div class="control-group">
                            <label class="control-label" for="date01">Price</label>
                            <div class="controls">
                                <input type="text" class="input-xlarge" name="price" required>
                            </div>
                        </div>
                        <div class="control-group">
                            <label class="control-label" for="date01">Unit</label>
                            <div class="controls">
                                <input type="text" class="input-xlarge" name="unit" required>
                            </div>
                        </div>
                        <div class="control-group">
                            <label class="control-label" for="date01">Input Information</label>
                            <div class="controls">
                                <input type="text" class="input-xlarge" name="input1" required>
                            </div>
                        </div>
                        <div class="control-group">
                            <label class="control-label" for="date01">Input Information</label>
                            <div class="controls">
                                <input type="text" class="input-xlarge" name="input2" required>
                            </div>
                        </div>
                        <div class="control-group">
                            <label class="control-label" for="date01">Input Information</label>
                            <div class="controls">
                                <input type="text" class="input-xlarge" name="input3" required>
                            </div>
                        </div>
                        <div class="control-group">
                            <label class="control-label" for="date01">Input Information</label>
                            <div class="controls">
                                <input type="text" class="input-xlarge" name="input4" required>
                            </div>
                        </div>
                        <div class="control-group">
                            <label class="control-label" for="date01">Add Contact Number</label>
                            <div class="controls">
                                <input type="text" class="input-xlarge" name="mobile_no" required>
                            </div>
                        </div>

                         


                        <div class="form-actions">
                            <button type="submit" class="btn btn-primary">Add This Service Plan</button>
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
