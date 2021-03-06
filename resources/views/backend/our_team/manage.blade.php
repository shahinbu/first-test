@extends('backend.master')
@section('content')
<div id="page-wrapper">
    <div class="row">
        <div class="col-lg-12">
            <h2 class="page-header">Manage</h2>
        </div>
    </div>
    <!-- /.row -->
    <div class="row">
        <div class="col-lg-12">
            <div class="panel-body">
                <h3 class="text-success">{{ Session::get('success')}}</h3>
                <div class="table-responsive">
                    <table class="table table-striped table-bordered table-hover">
                        <thead>
                            <tr>
                                <th>Title</th>
                                <th>Designation</th>
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
                                <td>{{$object->designation ? $object->designation :'N/A' }}</td>
                                <td>{!! $object->description ? $object->description :'N/A' !!}</td>
                                <td>
                                    <img src="{{url($object->image)}}" width="100px">
                                </td>
                                <td>{{$object->status?'Published':'Unpublished'}}</td>
                                <td>
                                    <a href="{{url('ourteam/edit')}}/{{$object->id}}"><button class="btn btn-sm btn-success">Edit</button></a> 
                                    | 
                                    <a onclick="return confirm('Are you sure you want to delete this item?')" href="{{url('ourteam/delete')}}/{{$object->id}}">
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