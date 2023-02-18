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
                <h2><i class="halflings-icon user"></i><span class="break"></span>All Service Plan</h2>
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
                            <th style="width: 5%;">Title</th>
                            <th style="width: 15%;">Subtitle</th>
                            <th style="width: 5%;">Price</th>
                            <th style="width: 10%;">Unit</th>
                            <th style="width: 5%;">Input Information</th>
                            <th style="width: 5%;">Input Information</th>
                            <th style="width: 5%;">Input Information</th>
                            <th style="width: 5%;">Input Information</th>
                            <th style="width: 15%;">Contact Number</th>
                            <th style="width: 5%;">Status</th>
                            <th style="width: 20%;">Actions</th>
                        </tr>
                        
                    </thead>

                    @foreach ($plans as $plan)

                        <tbody>
                            <tr>
                                <td>{{ $plan->id }}</td>
                                <td class="center">{{ $plan->title }}</td>
                                <td class="center">{{ $plan->subtitle }}</td>
                                <td class="center">{{ $plan->price }}</td>
                                <td class="center">{{ $plan->unit }}</td>
                                <td class="center">{{ $plan->input1 }}</td>
                                <td class="center">{{ $plan->input2 }}</td>
                                <td class="center">{{ $plan->input3 }}</td>
                                <td class="center">{{ $plan->input4 }}</td>
                                <td class="center">{{ $plan->mobile_no }}</td>
                                 
                                 
                                <td class="center">
                                    @if ($plan->status==1)              
                                    <span class="label label-success">Active</span>
                                    @else
                                    <span class="label label-danger">Deactive</span>
                                    @endif
                                </td>
                                <td class="center">
                                     
                                    <div class="span2">
                                        @if ($plan->status==1)                              
                                        <a href="{{url('/plan-status'.$plan->id)}}" class="btn btn-success">
                                            <i class="halflings-icon white thumbs-down"></i>
                                        </a>
                                        @else
                                        <a href="{{url('/plan-status'.$plan->id)}}" class="btn btn-danger">
                                            <i class="halflings-icon white thumbs-up"></i>
                                        </a>
                                        @endif 
                                    </div>
                                    <div class="span2">
                                        <a class="btn btn-info" href="{{url('/plan-edit/'.$plan->id)}}">
                                            <i class="halflings-icon white edit"></i>
                                        </a>
                                    </div>
                                    <div class="span2">
                                        <form action="{{url('/plan-delete/'.$plan->id)}}" method="post">
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
