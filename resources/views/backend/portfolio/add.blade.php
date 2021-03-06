@extends('backend.master')
@section('content')

<div id="page-wrapper">
    <div class="container-fluid">
        <div class="row">
            <div class="col-lg-12">
                <div class="panel-body">
                    <div class="row">
                        <div class="col-lg-10">
                            {!! Form::open(['url' => 'portfolio-store', 'method' => 'POST','enctype' => 'multipart/form-data']) !!}
                            <!--<form method="post" action="store" role="form" enctype="multipart/form-data">-->
                            <!--<div class="form-group {{ $errors->has('short_description') ? ' has-error' : '' }}">
                                <label>Short Description</label>
                                <input name="short_description" class="form-control">
                            </div>

                            @if ($errors->has('short_description'))
                            <span class="text-danger">
                                <strong>{{ $errors->first('short_description') }}</strong>
                            </span>
                            @endif-->

                            <div class="form-group {{ $errors->has('title') ? ' has-error' : '' }}">
                                <label>Title</label>
                                <input name="title" class="form-control">
                            </div>

                            @if ($errors->has('title'))
                            <span class="text-danger">
                                <strong>{{ $errors->first('title') }}</strong>
                            </span>
                            @endif

                            <div class="form-group">
                                <label>Short Description</label>
                                <input name="description" class="form-control">
                            </div>

                            <div class="form-group">
                                <label>URL</label>
                                <input name="url" class="form-control">
                            </div>

                            <div class="form-group {{ $errors->has('image') ? ' has-error' : '' }}">
                                <label>File input</label>
                                <input type="file" name="image">
                            </div>

                            @if ($errors->has('image'))
                            <span class="text-danger">
                                <strong>{{ $errors->first('image') }}</strong>
                            </span>
                            @endif

                            <div class="form-group">
                                <input name="btn" type="submit" value="Submit"  class="btn btn-success">
                            </div>
                            <!--<button type="submit" class="btn btn-success">Submit</button>-->
                            {!! Form::close() !!}
                        </div>
                    </div>
                </div>
            </div>
            <!-- /.col-lg-12 -->
        </div>
        <!-- /.row -->
    </div>
    <!-- /.container-fluid -->
</div>
@stop






