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
                <h2><i class="halflings-icon edit"></i><span class="break"></span>Add Company Introduction</h2>

            </div>

            
            <div class="box-content">
                <form class="form-horizontal" action="{{url('/company_intros/')}}" method="post" enctype="multipart/form-data">
                     @csrf
                    <fieldset>
                        <div class="control-group">
                            <label class="control-label" for="date01">Add Title</label>
                            <div class="controls">
                                <input type="text" class="input-xlarge" name="title" required>
                            </div>
                        </div>


                        <div class="control-group hidden-phone">
                            <label class="control-label" for="textarea2">Add A Subtitle</label>
                            <div class="controls">
                                <textarea class="cleditor" name="subtitle1" rows="3" required></textarea>
                            </div>

                        </div>
                        <div class="control-group">
                            <label class="control-label" for="date01">Add Another Subtitle</label>
                            <div class="controls">
                                <input type="text" class="input-xlarge" name="subtitle2" required>
                            </div>
                        </div>
                        <div class="control-group">
                            <label class="control-label" for="date01">Present Year</label>
                            <div class="controls">
                                <input type="text" class="input-xlarge" name="year" required>
                            </div>
                        </div>
                        <div class="control-group">
                            <label class="control-label" for="date01">Total No. of delivery</label>
                            <div class="controls">
                                <input type="text" class="input-xlarge" name="total_delivery" required>
                            </div>
                        </div>
                        <div class="control-group">
                            <label class="control-label" for="date01">Total Employee</label>
                            <div class="controls">
                                <input type="text" class="input-xlarge" name="employee" required>
                            </div>
                        </div>
                        <div class="control-group">
                            <label class="control-label" for="date01">Your Total Experience</label>
                            <div class="controls">
                                <input type="text" class="input-xlarge" name="experience" required>
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
