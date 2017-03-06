@extends('backend.master')
@section('content')
<div id="page-wrapper">
    <div class="container-fluid">
        <div class="row">
            <div class="col-lg-12">
                <div class="panel-body">
                    <div class="row">
                        <div class="col-lg-10">
                            {!! Form::open(['url' => 'shortdescription-store', 'method' => 'POST']) !!}
                            <div class="form-group">
                                <label>Title</label>
                                <select name="title" class="form-control">
                                    <option value=""> -- Select -- </option>
                                    <option value="service">Service</option>
                                    <option value="portfolio">Portfolio</option>
                                    <option value="our_team">Our Team</option>
                                    <option value="contact_us">Contact Us</option>
                                </select>
                            </div>

                            <div class="form-group">
                                <label>Short Description</label>
                                <textarea name="short_description" class="form-control">
                                </textarea> 
                            </div>

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






