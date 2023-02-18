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
                <h2><i class="halflings-icon user"></i><span class="break"></span>All Informations</h2>
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
                            <th style="width: 5%;">Who We Are</th>
                            <th style="width: 15%;">About fnf express</th>
                            <th style="width: 10%;">Mission</th>
                            <th style="width: 10%;">Vission</th>
                            <th style="width: 5%;">Customers</th>
                            <th style="width: 5%;">Experience</th>
                            <th style="width: 5%;">Percel_delivery</th>
                            <th style="width: 15%;">Image</th>
                            <th style="width: 5%;">Status</th>
                            <th style="width: 20%;">Actions</th>
                        </tr>
                        
                    </thead>

                    @foreach ($company_profiles as $company_profile)

                        <tbody>
                            <tr>
                                <td>{{ $company_profile->id }}</td>
                                <td class="center">{{ $company_profile->who_we_are }}</td>
                                <td class="center">{{ $company_profile->fn_express }}</td>
                                <td class="center">{{ $company_profile->mission }}</td>
                                <td class="center">{{ $company_profile->vission }}</td>
                                <td class="center">{{ $company_profile->customers }}</td>
                                <td class="center">{{ $company_profile->experience }}</td>
                                <td class="center">{{ $company_profile->percel_delivery }}</td>
                                 
                                <td>
                                    <img src="{{ asset('/storage/' . $company_profile->image) }}"
                                        style="width: 105px; height:105px;">
                                </td>
                                <td class="center">
                                    @if ($company_profile->status==1)              
                                    <span class="label label-success">Active</span>
                                    @else
                                    <span class="label label-danger">Deactive</span>
                                    @endif
                                </td>
                                <td class="center">
                                     
                                    <div class="span2">
                                        @if ($company_profile->status==1)                              
                                        <a href="{{url('/profile-status'.$company_profile->id)}}" class="btn btn-success">
                                            <i class="halflings-icon white thumbs-down"></i>
                                        </a>
                                        @else
                                        <a href="{{url('/profile-status'.$company_profile->id)}}" class="btn btn-danger">
                                            <i class="halflings-icon white thumbs-up"></i>
                                        </a>
                                        @endif 
                                    </div>
                                    <div class="span2">
                                        <a class="btn btn-info" href="{{url('/profile-edit/'.$company_profile->id)}}">
                                            <i class="halflings-icon white edit"></i>
                                        </a>
                                    </div>
                                    <div class="span2">
                                        <form action="{{url('/profile-delete/'.$company_profile->id)}}" method="post">
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
    <!--/row-->nafiz

@endsection
