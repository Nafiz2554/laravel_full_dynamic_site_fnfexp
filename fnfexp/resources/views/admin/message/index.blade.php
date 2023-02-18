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
                <h2><i class="halflings-icon user"></i><span class="break"></span>Messages</h2>
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
                            <th style="width: 5%;">Id</th>
                            <th style="width: 10%;">Sender Name</th>
                            <th style="width: 20%;">Email</th>
                            <th style="width: 20%;">Phone</th>
                            <th style="width: 40%;">Probelms/Issues</th> 
                            <th style="width: 5%;">Action</th> 
                             
                        </tr>
                    </thead>

                    @foreach ($messages as $messages)

                        <tbody>
                            <tr>
                                <td>{{ $messages->id }}</td>
                                <td class="center">{{ $messages->sender }}</td>
                                 
                                <td class="center">{{ $messages->email }}</td>
                                <td class="center">{{ $messages->phone }}</td>
                                <td class="center">{{ $messages->issue }}</td>
                                 
                                
                                 
                                <td class="row">
                                     
                                     
                                     
                                    <div class="span2">
                                        <form action="{{url('/messagedelete/'.$messages->id)}}" method="post">
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
