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
                <h2><i class="halflings-icon user"></i><span class="break"></span>All Blogs's Informations</h2>
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
                            <th style="width: 10%;">Tag1</th>
                            <th style="width: 10%;">Tag2</th>
                            <th style="width: 10%;">Title</th>
                            <th style="width: 10%;">Subtitle</th>
                            <th style="width: 10%;">Date</th> 
                            <th style="width: 15%;">Image</th>
                            <th style="width: 10%;">Status</th>
                            <th style="width: 20%;">Actions</th>
                        </tr>
                        
                    </thead>

                    @foreach ($blogs as $blog)

                        <tbody>
                            <tr>
                                <td>{{ $blog->id }}</td>
                                <td class="center">{{ $blog->tag1 }}</td>
                                <td class="center">{{ $blog->tag2 }}</td>
                                <td class="center">{{ $blog->title }}</td>
                                <td class="center">{{ $blog->subtitle }}</td>
                                <td class="center">{{ $blog->date }}</td>
                                <td>
                                    <img src="{{ asset('/storage/' . $blog->image) }}"
                                        style="width: 105px; height:105px;">
                                </td>
                                <td class="center">
                                    @if ($blog->status==1)              
                                    <span class="label label-success">Active</span>
                                    @else
                                    <span class="label label-danger">Deactive</span>
                                    @endif
                                </td>
                                <td class="center">
                                     
                                    <div class="span2">
                                        @if ($blog->status==1)                              
                                        <a href="{{url('/blog-status'.$blog->id)}}" class="btn btn-success">
                                            <i class="halflings-icon white thumbs-down"></i>
                                        </a>
                                        @else
                                        <a href="{{url('/blog-status'.$blog->id)}}" class="btn btn-danger">
                                            <i class="halflings-icon white thumbs-up"></i>
                                        </a>
                                        @endif 
                                    </div>
                                    <div class="span2">
                                        <a class="btn btn-info" href="{{url('/blog-edit/'.$blog->id)}}">
                                            <i class="halflings-icon white edit"></i>
                                        </a>
                                    </div>
                                    <div class="span2">
                                        <form action="{{url('/blog-delete/'.$blog->id)}}" method="post">
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
