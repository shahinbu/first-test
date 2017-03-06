@extends('backend.master')
@section('content')
<div id="page-wrapper">
    <div class="row">
        <div class="col-lg-12">
            <h3 class="page-header">Manage</h3>
        </div>
    </div>
    <!-- /.row -->
    <div class="row">
        <div class="col-lg-12">
            <!-- /.panel-heading -->
            <div class="panel-body">
                <h4 class="text-success">{{ Session::get('success')}}</h4>
                <div class="table-responsive">
                    <table class="table table-striped table-bordered table-hover">
                        <thead>
                            <tr>

                                <th>Title</th>
                                <th>Description</th>
                                <th>Image</th>
                                <th>Status</th>
                                <th>Action</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach($result as $object)
                            <tr>
                                <td>{{$object->title}}</td>
                                <td>{!!$object->description ? $object->description :'N/A'!!}</td>
                                <td>
                                    <img src="{{url($object->image)}}" width="100px">
                                </td>
                                <td>{{$object->status?'Published':'Unpublished'}}</td>
                                <td>
                                    <a href="{{url('portfolio/edit')}}/{{$object->id}}"><button class="btn btn-sm btn-success">Edit</button></a> 
                                    | 
                                    <a onclick="return confirm('Are you sure you want to delete this item?')" href="{{url('portfolio/delete')}}/{{$object->id}}">
                                        <button class="btn btn-sm btn-success">Delete</button>
                                    </a>
                                </td>
                            </tr> 
                            @endforeach
                        </tbody>
                    </table>
                </div>
                <!-- /.table-responsive -->
            </div>
            <!-- /.panel-body -->
            <!-- /.panel -->
        </div>
        <!-- /.col-lg-6 -->
        <!-- /.col-lg-6 -->
    </div>
    <!-- /.row -->
    <!-- /.row -->
    <!-- /.row -->
</div>
<!-- /#page-wrapper -->
@stop