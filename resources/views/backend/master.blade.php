<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <meta name="description" content="">
        <meta name="author" content="">
        <title>{{$title}}</title>
        <!-- Bootstrap Core CSS -->
        <link href="{{ URL::asset('public/backend/vendor/bootstrap/css/bootstrap.min.css') }}" rel="stylesheet">
        <!-- MetisMenu CSS -->
        <link href="{{ URL::asset('public/backend/vendor/metisMenu/metisMenu.min.css') }}" rel="stylesheet">
        <!-- DataTables CSS -->
        <link href="{{ URL::asset('public/backend/vendor/datatables-plugins/dataTables.bootstrap.css') }}" rel="stylesheet">
        <!-- DataTables Responsive CSS -->
        <link href="{{ URL::asset('public/backend/vendor/datatables-responsive/dataTables.responsive.css') }}" rel="stylesheet">
        <!-- Custom CSS -->
        <link href="{{ URL::asset('public/backend/dist/css/sb-admin-2.css') }}" rel="stylesheet">
        <!-- Custom Fonts -->
        <link href="{{ URL::asset('public/backend/vendor/font-awesome/css/font-awesome.min.css') }}" rel="stylesheet" type="text/css">
        <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
        <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
        <!--[if lt IE 9]>
            <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
            <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
        <![endif]-->
    </head>
    <body>
        <div id="wrapper">
            <!-- Navigation -->
            <nav class="navbar navbar-default navbar-static-top" role="navigation" style="margin-bottom: 0">
                <div class="navbar-header">
                    <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
                        <span class="sr-only">Toggle navigation</span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                    </button>
                    <a class="navbar-brand" href="{{url('/dashboard')}}">{{$title}}</a>
                </div>
                <!-- /.navbar-header -->

                <ul class="nav navbar-top-links navbar-right">
                    <!-- /.dropdown -->
                    <li class="dropdown">
                        <a class="dropdown-toggle" data-toggle="dropdown" href="#">
                            <i class="fa fa-user fa-fw"></i> <i class="fa fa-caret-down"></i>
                        </a>
                        <ul class                                        ="dropdown-menu dropdown-user">
                            <li><a href="#"><i class="fa fa-user fa-fw"></i> User Profile</a>
                            </li>
                            <li><a href="#"><i class="fa fa-gear fa-fw"></i> Settings</a>
                            </li>
                            <!--<li class="divider"></li>-->
                            <li>
                                <a href="{{ route('logout') }}"
                                   onclick="event.preventDefault();
                                           document.getElementById('logout-form').submit();">
                                    <i class="fa fa-sign-out fa-fw"></i>  Logout
                                </a>

                                <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                                    {{ csrf_field() }}
                                </form>
                            </li>
                            <!--<li><a href="login.html"><i class="fa fa-sign-out fa-fw"></i> Logout</a>-->
                    </li>
                </ul>
                <!-- /.dropdown-user -->
                </li>
                <!-- /.dropdown -->
                </ul>
                <!-- /.navbar-top-links -->

                <div class="navbar-default sidebar" role="navigation">
                    <div class="sidebar-nav navbar-collapse">
                        <ul class="nav" id="side-menu">
                            <li class="sidebar-search">
                                <div class="input-group custom-search-form">
                                    <input type="text" class="form-control" placeholder="Search...">
                                    <span class="input-group-btn">
                                        <button class="btn btn-default" type="button">
                                            <i class="fa fa-search"></i>
                                        </button>
                                    </span>
                                </div>
                                <!-- /input-group -->
                            </li>

                            <li>
                                <a href="{{url('/dashboard')}}"><i class="fa fa-dashboard fa-fw"></i> Dashboard </a>
                            </li>

                            <li>
                                <a href="#"><i class="fa fa-bar-chart-o fa-fw"></i> Slider<span class="fa arrow"></span></a>
                                <ul class="nav nav-second-level">
                                    <li>
                                        <a href="{{ URL::to('slider-add') }}">Add</a>
                                    </li>
                                    <li>
                                        <a href="{{ URL::to('slider') }}">Manage</a>
                                    </li>
                                </ul>
                            </li>

                            <li>
                                <a href="#"><i class="fa fa-bar-chart-o fa-fw"></i> About Us<span class="fa arrow"></span></a>
                                <ul class="nav nav-second-level">
                                    <li>
                                        <a href="{{ url('aboutus-add') }}">Add</a>
                                    </li>
                                    <li>
                                        <a href="{{ url('aboutus') }}">Manage</a>
                                    </li>
                                </ul>
                            </li>

                            <li>
                                <a href="#"><i class="fa fa-bar-chart-o fa-fw"></i> Service<span class="fa arrow"></span></a>
                                <ul class="nav nav-second-level">
                                    <li>
                                        <a href="{{ url('service-add') }}">Add</a>
                                    </li>
                                    <li>
                                        <a href="{{ url('service') }}">Manage</a>
                                    </li>
                                </ul>
                            </li>

                            <li>
                                <a href="#"><i class="fa fa-bar-chart-o fa-fw"></i> Our Team<span class="fa arrow"></span></a>
                                <ul class="nav nav-second-level">
                                    <li>
                                        <a href="{{ url('ourteam-add') }}">Add</a>
                                    </li>
                                    <li>
                                        <a href="{{ url('ourteam') }}">Manage</a>
                                    </li>
                                </ul>
                            </li>

                            <li>
                                <a href="#"><i class="fa fa-bar-chart-o fa-fw"></i> Portfolio<span class="fa arrow"></span></a>
                                <ul class="nav nav-second-level">
                                    <li>
                                        <a href="{{ url('portfolio-add') }}">Add</a>
                                    </li>
                                    <li>
                                        <a href="{{ url('portfolio') }}">Manage</a>
                                    </li>
                                </ul>
                            </li>

                            <!--<li>
                                <a href="#"><i class="fa fa-bar-chart-o fa-fw"></i> Clients<span class="fa arrow"></span></a>
                                <ul class="nav nav-second-level">
                                    <li>
                                        <a href="{{ url('clients-add') }}">Add</a>
                                    </li>
                                    <li>
                                        <a href="{{ url('clients') }}">Manage</a>
                                    </li>
                                </ul>
                            </li>-->

                            <!--<li>
                                  <a href="#"><i class="fa fa-bar-chart-o fa-fw"></i> Contact Us<span class="fa arrow"></span></a>
                                  <ul class="nav nav-second-level">
                                      <li>
                                          <a href="{{ url('aboutus-add') }}">Add</a>
                                      </li>
                                      <li>
                                          <a href="{{ url('aboutus-add') }}">Manage</a>
                                      </li>
                                  </ul>
                              </li>-->

                            <li class="active">
                                <a href="#"><i class="fa fa-files-o fa-fw"></i> Sample Pages<span class="fa arrow"></span></a>
                                <ul class="nav nav-second-level">
                                    <li>
                                        <a class="active" href="blank.html">Blank Page</a>
                                    </li>
                                    <li>
                                        <a href="login.html">Login Page</a>
                                    </li>
                                </ul>
                                <!-- /.nav-second-level -->
                            </li>
                        </ul>
                    </div>
                    <!-- /.sidebar-collapse -->
                </div>
                <!-- /.navbar-static-side -->
            </nav>
            <!-- Page Content -->
            @yield('content')
            <!-- /#page-wrapper -->
        </div>
        <!-- /#wrapper -->
        <!-- jQuery -->
        <script src="{{ URL::asset('public/backend/vendor/jquery/jquery.min.js') }}"></script>
        <!-- Bootstrap Core JavaScript -->
        <script src="{{ URL::asset('public/backend/vendor/bootstrap/js/bootstrap.min.js') }}"></script>
        <!-- Metis Menu Plugin JavaScript -->
        <script src="{{ URL::asset('public/backend/vendor/metisMenu/metisMenu.min.js') }}"></script>

        <!-- DataTables JavaScript -->
        <script src="{{ URL::asset('public/backend/vendor/datatables/js/jquery.dataTables.min.js"') }}"></script>
        <script src="{{ URL::asset('public/backend/vendor/datatables-plugins/dataTables.bootstrap.min.js') }}"></script>
        <script src="{{ URL::asset('public/backend/vendor/datatables-responsive/dataTables.responsive.js') }}"></script>
        <!-- Custom Theme JavaScript -->
        <script src="{{ URL::asset('public/backend/dist/js/sb-admin-2.js') }}"></script>
        <script src="//cloud.tinymce.com/stable/tinymce.min.js"></script>
        <script>tinymce.init({selector: 'textarea'});</script>
        <!-- Page-Level Demo Scripts - Tables - Use for reference -->
        <script>
            $(document).ready(function () {
                $('#dataTables-example').DataTable({
                    responsive: true
                });
            });
        </script>
    </body>
</html>
