@extends('backend.master')
@section('content')

<div id="page-wrapper">
    <div class="container-fluid">
        <div class="row">
            <div class="col-lg-12">
                <div class="panel-body">
                    <div class="row">
                        <div class="col-lg-10">
                            {!! Form::open(['url' => 'service-store', 'method' => 'POST','enctype' => 'multipart/form-data']) !!}
                            <!--<form method="post" action="store" role="form" enctype="multipart/form-data">-->

                            <!--<div class="form-group">
                                <label>Short Description</label>
                                <textarea name="short_description" class="form-control">
                                </textarea> 
                            </div>-->

                            <!--<div class="form-group {{ $errors->has('short_description') ? ' has-error' : '' }}">
                               <label>Short Description</label>
                               <input name="short_description" class="form-control">
                           </div>-->


                            <div class="form-group {{ $errors->has('title') ? ' has-error' : '' }}">
                                <label>Service Title</label>
                                <input name="title" class="form-control">
                            </div>

                            @if ($errors->has('title'))
                            <span class="text-danger">
                                <strong>{{ $errors->first('title') }}</strong>
                            </span>
                            @endif
                            
                            <div class="form-group {{ $errors->has('icon') ? ' has-error' : '' }}">
                                <label>Icon</label>
                                <input name="icon" class="form-control">
                            </div>

                            @if ($errors->has('icon'))
                            <span class="text-danger">
                                <strong>{{ $errors->first('icon') }}</strong>
                            </span>
                            @endif

                            <div class="form-group">
                                <label>Description</label>
                                <textarea name="description" class="form-control">
                                </textarea> 
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






