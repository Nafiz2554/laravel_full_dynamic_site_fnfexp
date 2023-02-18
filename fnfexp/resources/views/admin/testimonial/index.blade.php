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
                <h2><i class="halflings-icon user"></i><span class="break"></span>All Testimonial's Informations</h2>
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
                            <th style="width: 10%;">Heading</th>
                            <th style="width: 20%;">Description</th>
                            <th style="width: 10%;">Client Name</th>
                            <th style="width: 10%;">Client Address</th> 
                            <th style="width: 15%;">Image</th>
                            <th style="width: 10%;">Status</th>
                            <th style="width: 20%;">Actions</th>
                        </tr>
                        
                    </thead>

                    @foreach ($testimonials as $testimonial)

                        <tbody>
                            <tr>
                                <td>{{ $testimonial->id }}</td>
                                <td class="center">{{ $testimonial->heading }}</td>
                                <td class="center">{{ $testimonial->description }}</td>
                                <td class="center">{{ $testimonial->client_name }}</td>
                                <td class="center">{{ $testimonial->client_address }}</td>
                                <td>
                                    <img src="{{ asset('/storage/' . $testimonial->image) }}"
                                        style="width: 105px; height:105px;">
                                </td>
                                <td class="center">
                                    @if ($testimonial->status==1)              
                                    <span class="label label-success">Active</span>
                                    @else
                                    <span class="label label-danger">Deactive</span>
                                    @endif
                                </td>
                                <td class="center">
                                     
                                    <div class="span2">
                                        @if ($testimonial->status==1)                              
                                        <a href="{{url('/testimonial-status'.$testimonial->id)}}" class="btn btn-success">
                                            <i class="halflings-icon white thumbs-down"></i>
                                        </a>
                                        @else
                                        <a href="{{url('/testimonial-status'.$testimonial->id)}}" class="btn btn-danger">
                                            <i class="halflings-icon white thumbs-up"></i>
                                        </a>
                                        @endif 
                                    </div>
                                    <div class="span2">
                                        <a class="btn btn-info" href="{{url('/testimonial-edit/'.$testimonial->id)}}">
                                            <i class="halflings-icon white edit"></i>
                                        </a>
                                    </div>
                                    <div class="span2">
                                        <form action="{{url('/testimonial-delete/'.$testimonial->id)}}" method="post">
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
