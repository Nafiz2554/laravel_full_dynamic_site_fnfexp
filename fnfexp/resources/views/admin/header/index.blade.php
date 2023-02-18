@extends('admin.admin_master')
@section('admin_content')
    <div class="row-fluid sortable">
        <div class="box span12">
            <div class="box-header" data-original-title>
                <p class="alert-success">
                    <?php
                    $message = Session()->get('message');
                    if ($message) {
                        echo $message;
                        Session()->put('message', null);
                    }
                    ?>
                </p>
                <h2><i class="halflings-icon user"></i><span class="break"></span><b>Phone numbers and Partners</b></h2>
                <div class="box-icon">
                    <a href="#" class="btn-setting"><i class="halflings-icon wrench"></i></a>
                    <a href="#" class="btn-minimize"><i class="halflings-icon chevron-up"></i></a>
                    <a href="#" class="btn-close"><i class="halflings-icon remove"></i></a>
                </div>
            </div>
            <div class="box-content">
                <table class="table table-striped table-bordered bootstrap-datatable datatable">
                    <thead>
                        <tr>
                            <th style="width: 20%;">Id</th>
                            <th style="width: 20%;"> Our Phone</th> 
                            <th style="width: 20%;"> Our Email</th> 
                            <th style="width: 20%;">Our Logo/Image</th> 
                            <th style="width: 20%;">Actions</th>
                        </tr>
                        
                    </thead>

                    @foreach ($header as $header)

                        <tbody>
                            <tr>
                                <td>{{ $header->id }}</td>
                                <td class="center">{{ $header->phone }}</td>
                                <td class="center">{{ $header->email }}</td>
                                <td>
                                    <img src="{{ asset('/storage/' . $header->image) }}"
                                        style="width: 105px; height:105px;">
                                </td>
                                
                                <td class="center">
                                     
                                     
                                    <div class="span2">
                                        <form action="{{url('/header-delete/'.$header->id)}}" method="post">
                                        @csrf
                                        @method('DELETE')
                                          <button class="btn btn-danger" type="submit">
                                            <i class="halflings-icon white trash"></i>
                                        </button>
                                    </form>
                                    </div>
                                     
                                </td>
                            </tr>

                        </tbody>
                    @endforeach
                </table>
            </div>
        </div>
        <!--/span-->

    </div>
    <!--/row--> 

@endsection
