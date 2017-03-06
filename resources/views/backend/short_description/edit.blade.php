@extends('backend.master')
@section('content')
<div id="page-wrapper">
    <div class="container-fluid">
        <div class="row">
            <div class="col-lg-12">
                <div class="panel-body">
                    <div class="row">
                        <div class="col-lg-10">
                            {!! Form::open(['url' => 'shortdescription-update','name'=>'edit_category', 'method' => 'POST']) !!}
                            <!--<form method="post" action="store" role="form" enctype="multipart/form-data">-->
                            <div class="form-group {{ $errors->has('title') ? ' has-error' : '' }}">
                                <label>Title</label>
                                <input name="title" value="{{$result->title }}" class="form-control">
                                <input type="hidden" name="id" value="{{$result->id }}">
                            </div>

                            @if ($errors->has('title'))
                            <span class="text-danger">
                                <strong>{{ $errors->first('title') }}</strong>
                            </span>
                            @endif

                            <div class="form-group">
                                <label>Short Description</label>
                                <textarea name="short_description"  class="form-control">
                                      {!! $result->short_description !!}
                                </textarea> 
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
    document.forms['edit_category'].elements['status'].value = {{$result-> status}};
</script>
@stop






