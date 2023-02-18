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
                <h2><i class="halflings-icon edit"></i><span class="break"></span>Add Blog's Information</h2>

            </div>
            
            
            <div class="box-content">
                <form class="form-horizontal" action="{{url('/blogs/')}}" method="post" enctype="multipart/form-data">
                     @csrf
                    <fieldset>
                        <div class="control-group">
                            <label class="control-label" for="date01">Tag 1</label>
                            <div class="controls">
                                <input type="text" class="input-xlarge" name="tag1" required>
                            </div>
                        </div>
                        <div class="control-group">
                            <label class="control-label" for="date01"> Tag 2</label>
                            <div class="controls">
                                <input type="text" class="input-xlarge" name="tag2" required>
                            </div>
                        </div>

                        <div class="control-group">
                            <label class="control-label" for="date01">Title</label>
                            <div class="controls">
                                <input type="text" class="input-xlarge" name="title" required>
                            </div>
                        </div> 


                        <div class="control-group hidden-phone">
                            <label class="control-label" for="textarea2">Subtitle</label>
                            <div class="controls">
                                <textarea class="cleditor" name="subtitle" rows="3" required></textarea>
                            </div>

                        </div>

                        <div class="control-group">
                            <label class="control-label" for="date01">Date</label>
                            <div class="controls">
                                <input type="datetime-local" id="Test_DatetimeLocal" class="input-xlarge" name="date" required>
                            </div>
                        </div> 
                       
                        

                        <div class="control-group">
                            <label class="control-label">File Upload</label>
                            <div class="controls">
                                <input type="file" name="image" required>
                            </div>
                        </div>


                        <div class="form-actions">
                            <button type="submit" class="btn btn-primary">Add Blog's Informations</button>
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
