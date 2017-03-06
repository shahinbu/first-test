<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <meta name="description" content="">
        <meta name="author" content="">
        <title>NuevotechBD</title>
        <link href="{{asset('public/template/css/bootstrap.min.css')}}" rel="stylesheet">
        <link href="{{asset('public/template/css/animate.min.css')}}" rel="stylesheet"> 
        <link href="{{asset('public/template/css/font-awesome.min.css')}}" rel="stylesheet">
        <link href="{{asset('public/template/css/lightbox.css')}}" rel="stylesheet">
        <link href="{{asset('public/template/css/main.css')}}" rel="stylesheet">
        <link id="css-preset" href="{{asset('public/template/css/presets/preset1.css')}}" rel="stylesheet">
        <link href="{{asset('public/template/css/responsive.css')}}" rel="stylesheet">

        <!--[if lt IE 9]>
          <script src="js/html5shiv.js"></script>
          <script src="js/respond.min.js"></script>
        <![endif]-->

        <link href='http://fonts.googleapis.com/css?family=Open+Sans:300,400,600,700' rel='stylesheet' type='text/css'>
        <link rel="shortcut icon" href="{{asset('public/template/images/favicon.ico')}}">
    </head><!--/head-->
    <body>
        <!--.preloader-->
        <div class="preloader"> <i class="fa fa-circle-o-notch fa-spin"></i></div>
        <!--/.preloader-->
        <header id="home">
            <div id="home-slider" class="carousel slide carousel-fade" data-ride="carousel">

                <div class="carousel-inner">
                    @foreach($slider as $key=>$obj)
                    @if($key == 0)
                    <div class="item active" style="background-image: url({{url($obj->image)}})">
                        <div class="caption">
                            <h1 class="animated fadeInLeftBig">{{$obj->title }}</h1>
                            <p class="animated fadeInRightBig">{{$obj->description }}</p>
                            <a data-scroll class="btn btn-start animated fadeInUpBig" href="#services">Start now</a>
                        </div>
                    </div>
                    @else
                    <div class="item" style="background-image: url({{url($obj->image)}})">
                        <div class="caption">
                            <h1 class="animated fadeInLeftBig">{{$obj->title }}</h1>
                            <p class="animated fadeInRightBig">{{$obj->description }}</p>
                            <a data-scroll class="btn btn-start animated fadeInUpBig" href="#services">Start now</a>
                        </div>
                    </div>
                    @endif
                    @endforeach
                </div>
                <a class="left-control" href="#home-slider" data-slide="prev"><i class="fa fa-angle-left"></i></a>
                <a class="right-control" href="#home-slider" data-slide="next"><i class="fa fa-angle-right"></i></a>
                <a id="tohash" href="#services"><i class="fa fa-angle-down"></i></a>
            </div><!--/#home-slider-->
            <div class="main-nav">
                <div class="container">
                    <div class="navbar-header">
                        <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
                            <span class="sr-only">Toggle navigation</span>
                            <span class="icon-bar"></span>
                            <span class="icon-bar"></span>
                            <span class="icon-bar"></span>
                        </button>
                        <a class="navbar-brand" href="{{url('/')}}">
                            <h1><img class="img-responsive" src="{{asset('public/template/images/logo.png')}}" alt="logo"></h1>
                        </a>                    
                    </div>
                    <div class="collapse navbar-collapse">
                        <ul class="nav navbar-nav navbar-right">                 
                            <li class="scroll active"><a href="#home">Home</a></li>
                            <li class="scroll"><a href="#services">Service</a></li> 
                            <li class="scroll"><a href="#about-us">About Us</a></li>                     
                            <li class="scroll"><a href="#portfolio">Portfolio</a></li>
                            <li class="scroll"><a href="#team">Team</a></li>
                            <!--<li class="scroll"><a href="#blog">Blog</a></li>-->
                            <li class="scroll"><a href="#contact">Contact</a></li>       
                        </ul>
                    </div>
                </div>
            </div><!--/#main-nav-->
        </header><!--/#home-->
        <section id="services">
            <div class="container">
                <div class="heading wow fadeInUp" data-wow-duration="1000ms" data-wow-delay="300ms">
                    <div class="row">
                        <div class="text-center col-sm-8 col-sm-offset-2">
                            <h2>Our Services</h2>
                            <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua ut enim ad minim veniam</p>
                        </div>
                    </div> 
                </div>
                <div class="text-center our-services">
                    <div class="row">

                        @foreach($service as $key=>$obj)
                        <div class="col-sm-4 wow fadeInDown" data-wow-duration="1000ms" data-wow-delay="300ms">
                            <div class="service-icon">
                                <i class="{{$obj->icon ? $obj->icon : '' }}"></i>
                            </div>
                            <div class="service-info">
                                <h3>{{$obj->title}}</h3>
                                <p>{!!$obj->description!!}</p>
                            </div>
                        </div>
                        @endforeach

                    </div>
                </div>
            </div>
        </section><!--/#services-->
        <section id="about-us" class="parallax">
            <div class="container">
                <div class="row">
                    <div class="col-sm-6">
                        <div class="about-info wow fadeInUp" data-wow-duration="1000ms" data-wow-delay="300ms">
                            <h2>About us</h2>
                            {!! $about_us->description !!}
<!--<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation.Ullamco laboris nisi ut aliquip ex ea commodo consequat. </p>-->
<!--<p>Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum. Sed ut perspiciatis unde omnis iste. Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.</p>-->
                        </div>
                    </div>
                    <div class="col-sm-6">
                        <div class="our-skills wow fadeInDown" data-wow-duration="1000ms" data-wow-delay="300ms">
                            <div class="single-skill wow fadeInDown" data-wow-duration="1000ms" data-wow-delay="300ms">
                                <p class="lead">User Experiances</p>
                                <div class="progress">
                                    <div class="progress-bar progress-bar-primary six-sec-ease-in-out" role="progressbar"  aria-valuetransitiongoal="95">95%</div>
                                </div>
                            </div>
                            <div class="single-skill wow fadeInDown" data-wow-duration="1000ms" data-wow-delay="400ms">
                                <p class="lead">Web Design</p>
                                <div class="progress">
                                    <div class="progress-bar progress-bar-primary six-sec-ease-in-out" role="progressbar"  aria-valuetransitiongoal="75">75%</div>
                                </div>
                            </div>
                            <div class="single-skill wow fadeInDown" data-wow-duration="1000ms" data-wow-delay="500ms">
                                <p class="lead">Programming</p>
                                <div class="progress">
                                    <div class="progress-bar progress-bar-primary six-sec-ease-in-out" role="progressbar"  aria-valuetransitiongoal="60">60%</div>
                                </div>
                            </div>
                            <div class="single-skill wow fadeInDown" data-wow-duration="1000ms" data-wow-delay="600ms">
                                <p class="lead">Fun</p>
                                <div class="progress">
                                    <div class="progress-bar progress-bar-primary six-sec-ease-in-out" role="progressbar"  aria-valuetransitiongoal="85">85%</div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section><!--/#about-us-->
        <section id="portfolio">
            <div class="container">
                <div class="row">
                    <div class="heading text-center col-sm-8 col-sm-offset-2 wow fadeInUp" data-wow-duration="1000ms" data-wow-delay="300ms">
                        <h2>Our Portfolio</h2>
                        <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua ut enim ad minim veniam</p>
                    </div>
                </div> 
            </div>
            <div class="container-fluid">
                <div class="row">
                    @foreach($portfolio as $obj)
                    <div class="col-sm-3">
                        <div class="folio-item wow fadeInRightBig" data-wow-duration="1000ms" data-wow-delay="300ms">
                            <!--<div class="folio-image" style="width:280px; height:350px">-->
                            <div class="folio-image">
                                <!--<img class="img-responsive" src="{{asset('public/template/images/portfolio/1.jpg')}}" alt="">-->
                                <!--<img class="img-responsive" style="width:100%; height:100%" src="{{url($obj->image)}}" alt="">-->
                                <img class="img-responsive"  src="{{url($obj->image)}}" alt="">
                            </div>
                            <div class="overlay">
                                <div class="overlay-content">
                                    <div class="overlay-text">
                                        <div class="folio-info">
                                            <h3>{{$obj->title}}</h3>
                                            <p>{!!$obj->description !!}</p>
                                        </div>
                                        <div class="folio-overview">
                                            <span class="folio-link"><a class="folio-read-more" href="#" data-single_url="portfolio-single.html" ><i class="fa fa-link"></i></a></span>
                                            <span class="folio-expand"><a href="{{url($obj->image)}}" data-lightbox="portfolio"><i class="fa fa-search-plus"></i></a></span>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    @endforeach
                </div>
            </div>
        </section><!--/#portfolio-->
        <section id="team">
            <div class="container">
                <div class="row">
                    <div class="heading text-center col-sm-8 col-sm-offset-2 wow fadeInUp" data-wow-duration="1200ms" data-wow-delay="300ms">
                        <h2>The Team</h2>
                        <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua ut enim ad minim veniam</p>
                    </div>
                </div>
                <div class="team-members">
                    <div class="row">

                        @foreach($our_team as $obj)

                        <div class="col-sm-3">
                            <div class="team-member wow flipInY" data-wow-duration="1000ms" data-wow-delay="300ms">
                                <div class="member-image">
                                    <img class="img-responsive" src="{{url($obj->image)}}" alt="">
                                </div>
                                <div class="member-info">
                                    <h3>{{$obj->title}}</h3>
                                    <h4>{{$obj->designation}}</h4>
                                    <p>{!!$obj->description !!}</p>
                                </div>
                                <div class="social-icons">
                                    <ul>
                                        <li><a class="facebook" href="#"><i class="fa fa-facebook"></i></a></li>
                                        <li><a class="twitter" href="#"><i class="fa fa-twitter"></i></a></li>
                                        <li><a class="linkedin" href="#"><i class="fa fa-linkedin"></i></a></li>
                                        <li><a class="dribbble" href="#"><i class="fa fa-dribbble"></i></a></li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                        @endforeach
                    </div>
                </div>            
            </div>
        </section><!--/#team-->


        <section id="contact">
            <div id="google-map" class="wow fadeIn" data-latitude="23.753436" data-longitude="90.386353" data-wow-duration="1000ms" data-wow-delay="400ms"></div>
            <div id="contact-us" class="parallax">
                <div class="container">
                    <div class="row">
                        <div class="heading text-center col-sm-8 col-sm-offset-2 wow fadeInUp" data-wow-duration="1000ms" data-wow-delay="300ms">
                            <h2>Contact Us</h2>
                            <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua ut enim ad minim veniam</p>
                        </div>
                    </div>
                    <div class="contact-form wow fadeIn" data-wow-duration="1000ms" data-wow-delay="600ms">
                        <div class="row">
                            <div class="col-sm-6">
                                {!! Form::open(['url' => 'sendMail', 'method' => 'POST']) !!}
                                <!--<form id="main-contact-form" name="contact-form" method="post" action="#">-->
                                <div class="row  wow fadeInUp" data-wow-duration="1000ms" data-wow-delay="300ms">
                                    <div class="col-sm-6">
                                        <div class="form-group">
                                            <input type="text" name="name" class="form-control" placeholder="Name" required="required">
                                        </div>
                                    </div>
                                    <div class="col-sm-6">
                                        <div class="form-group">
                                            <input type="email" name="email" class="form-control" placeholder="Email Address" required="required">
                                        </div>
                                    </div>
                                </div>
                                <div class="form-group">
                                    <input type="text" name="subject" class="form-control" placeholder="Subject" required="required">
                                </div>
                                <div class="form-group">
                                    <textarea name="message" id="message" class="form-control" rows="4" placeholder="Enter your message" required="required"></textarea>
                                </div>  

                                <div class="form-group">
                                    <input type="submit" name="btn"  value="Send" class="btn btn-success">
                                </div>
                                <!--</form>-->   
                                {!! Form::close() !!}
                            </div>
                            <div class="col-sm-6">
                                <div class="contact-info wow fadeInUp" data-wow-duration="1000ms" data-wow-delay="300ms">
                                    <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation.</p>
                                    <ul class="address">
                                        <li><i class="fa fa-map-marker"></i> <span> Address:</span> 2400 South Avenue A </li>
                                        <li><i class="fa fa-phone"></i> <span> Phone:</span> +928 336 2000  </li>
                                        <li><i class="fa fa-envelope"></i> <span> Email:</span><a href="mailto:someone@yoursite.com"> support@oxygen.com</a></li>
                                        <li><i class="fa fa-globe"></i> <span> Website:</span> <a href="#">www.sitename.com</a></li>
                                    </ul>
                                </div>                            
                            </div>
                        </div>
                    </div>
                </div>
            </div>        
        </section><!--/#contact-->
        <footer id="footer">
            <div class="footer-top wow fadeInUp" data-wow-duration="1000ms" data-wow-delay="300ms">
                <div class="container text-center">
                    <div class="footer-logo">
                        <a href="index.html"><img class="img-responsive" src="images/logo.png" alt=""></a>
                    </div>
                    <div class="social-icons">
                        <ul>
                            <li><a class="envelope" href="#"><i class="fa fa-envelope"></i></a></li>
                            <li><a class="twitter" href="#"><i class="fa fa-twitter"></i></a></li> 
                            <li><a class="dribbble" href="#"><i class="fa fa-dribbble"></i></a></li>
                            <li><a class="facebook" href="#"><i class="fa fa-facebook"></i></a></li>
                            <li><a class="linkedin" href="#"><i class="fa fa-linkedin"></i></a></li>
                            <li><a class="tumblr" href="#"><i class="fa fa-tumblr-square"></i></a></li>
                        </ul>
                    </div>
                </div>
            </div>
            <div class="footer-bottom">
                <div class="container">
                    <div class="row">
                        <div class="col-sm-6">
                            <p>&copy; 2017 NuevotechBD.</p>
                        </div>
                        <div class="col-sm-6">
                            <p class="pull-right">Designed by <a href="http://nuevotechbd.com/">NuevotechBD</a></p>
                        </div>
                    </div>
                </div>
            </div>
        </footer>
        <script type="text/javascript" src="{{asset('public/template/js/jquery.js')}}"></script>
        <script type="text/javascript" src="{{asset('public/template/js/bootstrap.min.js')}}"></script>
        <!--<script type="text/javascript" src="http://maps.google.com/maps/api/js?sensor=true"></script>-->
        <script async defer src="https://maps.googleapis.com/maps/api/js?key=AIzaSyBj6aes6oxCqs8V0L_M2bSR6iS8BvvwhcY&callback=initMap" type="text/javascript"></script>
        <script type="text/javascript" src="{{asset('public/template/js/jquery.inview.min.js')}}"></script>
        <script type="text/javascript" src="{{asset('public/template/js/wow.min.js')}}"></script>
        <script type="text/javascript" src="{{asset('public/template/js/mousescroll.js')}}"></script>
        <script type="text/javascript" src="{{asset('public/template/js/smoothscroll.js')}}"></script>
        <script type="text/javascript" src="{{asset('public/template/js/jquery.countTo.js')}}"></script>
        <script type="text/javascript" src="{{asset('public/template/js/lightbox.min.js')}}"></script>
        <script type="text/javascript" src="{{asset('public/template/js/main.js')}}"></script>
    </body>
</html>