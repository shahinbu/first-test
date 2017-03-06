@extends('backend.master')
@section('content')
<div id="page-wrapper">
    <div class="container-fluid">
        <div class="row">
            <div class="col-lg-12">
                <div class="panel-body">
                    <div class="row">
                        <div class="col-lg-10">
                            {!! Form::open(['url' => 'clients-update','name'=>'edit_category', 'method' => 'POST','enctype' => 'multipart/form-data']) !!}
                            <!--<form method="post" action="store" role="form" enctype="multipart/form-data">-->
                            <div class="form-group {{ $errors->has('title') ? ' has-error' : '' }}">
                                <label>Title</label>
                                <input name="title" value="{{$sliderInfo->title }}" class="form-control">
                                <input type="hidden" name="id" value="{{$sliderInfo->id }}">
                            </div>

                            @if ($errors->has('title'))
                            <span class="text-danger">
                                <strong>{{ $errors->first('title') }}</strong>
                            </span>
                            @endif

                            <div class="form-group">
                                <label>Short Description</label>
                                <textarea name="short_description" class="form-control">
                                {!!  $sliderInfo->short_description !!}
                                </textarea> 
                            </div>

                            <div class="form-group">
                                <label>Description</label>
                                <textarea name="description" class="form-control">
                                {!!  $sliderInfo->description !!}
                                </textarea> 
                            </div>

                            <div class="form-group">
                                <label>URL</label>
                                <input name="url" value="{{$sliderInfo->url }}" class="form-control">
                            </div>

                            <div class="form-group">
                                <label>Uploaded Image</label>
                                <img  src="{{ asset($sliderInfo->image)}}"  width="100px"/>
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
                                <label>Status</label>
                                <select name="status"  class="form-control">
                                    <option value="1">Published</option>
                                    <option value="0">Unpublished</option>
                                </select>
                            </div>

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

<script>
    document.forms['edit_category'].elements['status'].value = {{$sliderInfo - > status}};
</script>
@stop






