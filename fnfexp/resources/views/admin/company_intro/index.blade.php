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
                <h2><i class="halflings-icon user"></i><span class="break"></span>Our Company Introduction</h2>
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
                            <th style="width: 15%;">Subtitle 1</th>
                            <th style="width: 10%;">Subtitle 2</th>
                            <th style="width: 10%;">Current year</th>
                            <th style="width: 5%;">Total Delivery</th>
                            <th style="width: 5%;">Employee</th>
                            <th style="width: 5%;">Experience</th>
                            <th style="width: 15%;">Image</th>
                            <th style="width: 5%;">Status</th>
                            <th style="width: 20%;">Actions</th>
                        </tr>
                        
                    </thead>

                    @foreach ($company_intros as $company_intro)

                        <tbody>
                            <tr>
                                <td>{{ $company_intro->id }}</td>
                                <td class="center">{{ $company_intro->title }}</td>
                                <td class="center">{{ $company_intro->subtitle1 }}</td>
                                <td class="center">{{ $company_intro->subtitle2 }}</td>
                                <td class="center">{{ $company_intro->year }}</td>
                                <td class="center">{{ $company_intro->total_delivery }}</td>
                                <td class="center">{{ $company_intro->employee }}</td>
                                <td class="center">{{ $company_intro->experience }}</td>
                                 
                                <td>
                                    <img src="{{ asset('/storage/' . $company_intro->image) }}"
                                        style="width: 105px; height:105px;">
                                </td>
                                <td class="center">
                                    @if ($company_intro->status==1)              
                                    <span class="label label-success">Active</span>
                                    @else
                                    <span class="label label-danger">Deactive</span>
                                    @endif
                                </td>
                                <td class="center">
                                     
                                    <div class="span2">
                                        @if ($company_intro->status==1)                              
                                        <a href="{{url('/intro-status'.$company_intro->id)}}" class="btn btn-success">
                                            <i class="halflings-icon white thumbs-down"></i>
                                        </a>
                                        @else
                                        <a href="{{url('/intro-status'.$company_intro->id)}}" class="btn btn-danger">
                                            <i class="halflings-icon white thumbs-up"></i>
                                        </a>
                                        @endif 
                                    </div>
                                    <div class="span2">
                                        <a class="btn btn-info" href="{{url('/intro-edit/'.$company_intro->id)}}">
                                            <i class="halflings-icon white edit"></i>
                                        </a>
                                    </div>
                                    <div class="span2">
                                        <form action="{{url('/intro-delete/'.$company_intro->id)}}" method="post">
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
