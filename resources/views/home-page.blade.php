
<!doctype html>
<!--[if IE 9]> <html class="no-js ie9 fixed-layout" lang="en"> <![endif]-->
<!--[if gt IE 9]><!--> <html class="no-js " lang="en"> <!--<![endif]-->
<head>

    <!-- Basic -->
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    
    <!-- Mobile Meta -->
    <meta name="viewport" content="width=device-width, minimum-scale=1.0, maximum-scale=1.0, user-scalable=no">
    
    <!-- Site Meta -->
    <title>Edulogy</title>
    <meta name="keywords" content="">
    <meta name="description" content="">
    <meta name="author" content="">
    
    <!-- Site Icons -->
    <link rel="shortcut icon" href="{{asset('vendor')}}/images/favicon.ico" type="image/x-icon" />
    <link rel="apple-touch-icon" href="{{asset('vendor')}}/images/apple-touch-icon.png">

	<!-- Google Fonts -->
    <link href="https://fonts.googleapis.com/css?family=Roboto:300,400,400i,500,700,900" rel="stylesheet"> 
    <link href="https://fonts.googleapis.com/css?family=Droid+Serif:400,400i,700,700i" rel="stylesheet"> 
	
    <!-- Custom & Default Styles -->
	<link rel="stylesheet" href="{{asset('vendor')}}/css/bootstrap.min.css">
    <link rel="stylesheet" href="{{asset('vendor')}}/css/font-awesome.min.css">
    <link rel="stylesheet" href="{{asset('vendor')}}/css/carousel.css">
    <link rel="stylesheet" href="{{asset('vendor')}}/css/animate.css">
    <link rel="stylesheet" href="{{asset('vendor')}}/style.css">

	<!--[if lt IE 9]>
		<script src="js/vendor/html5shiv.min.js"></script>
		<script src="js/vendor/respond.min.js"></script>
	<![endif]-->

</head>
<body>  

    <!-- LOADER -->
    <div id="preloader">
        <img class="preloader" src="{{asset('vendor')}}/images/loader.gif" alt="">
    </div><!-- end loader -->
    <!-- END LOADER -->

    <div id="wrapper">
        <!-- BEGIN # MODAL LOGIN -->
        <div class="modal fade" id="login-modal" tabindex="-1" role="dialog" aria-hidden="true" style="display: none;">
            <div class="modal-dialog">
                <div class="modal-content">
                    <!-- Begin # DIV Form -->
                    <div id="div-forms">
                        <form id="login-form">
                            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                <span class="flaticon-add" aria-hidden="true"></span>
                            </button>
                            <div class="modal-body">
                                <input class="form-control" type="text" placeholder="What you are looking for?" required>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>

        <header class="header">
            <div class="topbar clearfix">
                <div class="container">
                    <div class="row-fluid">
                        <div class="col-md-6 col-sm-6 text-left">
                            <p>
                                <strong><i class="fa fa-phone"></i></strong> +88 66 77 91 &nbsp;&nbsp;
                                <strong><i class="fa fa-envelope"></i></strong> <a href="mailto:#">info@donate.com</a>
                            </p>
                        </div>
                    </div>
                </div>
            </div>

            <div class="container ">
                <nav class="navbar navbar-default yamm">
                    <div class="navbar-header">
                        <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar" aria-expanded="false" aria-controls="navbar">
                            <span class="sr-only">Toggle navigation</span>
                            <span class="icon-bar"></span>
                            <span class="icon-bar"></span>
                            <span class="icon-bar"></span>
                        </button>
                        <div class="logo-normal">
                            <a class="navbar-brand" href="#"><img src="{{asset('vendor')}}/images/logo.png" alt=""></a>
                        </div>
                    </div>

                    <div id="navbar" class="navbar-collapse collapse">
                        <ul class="nav navbar-nav navbar-right">
                            <li><a href="{{route('home-page')}}">Beranda</a></li>
                            <li><a href="{{route('donasi')}}">Donasi</a></li>
                            <li><a href="{{route('login')}}">
                                 Login <i class="fa fa-sign-in"></i></a></li>
                            {{-- <li style="margin-top: -5%">
                                <a href="{{route('login')}}">
                                    <button class="btn btn-default" >Login</button>
                                </a>
                            </li> --}}
                        </ul>
                    </div>
                </nav>
            </div>
        </header>

        <section id="home" class="video-section js-height-full">
            <div class="overlay"></div>
            <div class="home-text-wrapper relative container">
                <div class="home-message">
                    <p>Edulogy Charity</p>
                    <small>Donasi kemanusiaan melalui lembaga terpercaya Edulogy Charity tersalurkan cepat dan aman. Jangan tunda kebaikan. Salurkan donasimu secara online dengan mudah dan terpercaya.</small>
                    <div class="btn-wrapper">
                        <div class="text-center">
                            <a href="{{route('donasi')}}" class="btn btn-primary wow slideInLeft">Donasi Sekarang</a>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <section class="section gb">
            <div class="container">
                <div class="section-title text-center">
                    <h3>Program Donasi</h3>
                    <p>Program donasi direalisasikan melalui empat rumpun utama yaitu Senyum Juara (pendidikan), Senyum Sehat (kesehatan), Senyum Mandiri (pemberdayaan ekonomi), serta Senyum Lestari (inisiatif kelestarian lingkungan).</p>
                </div>

                <div id="owl-01" class="owl-carousel owl-theme owl-theme-01">
                    @foreach ($total as $item)
                        
                    <div class="caro-item">
                        <div class="course-box">
                            <div class="image-wrap entry">
                                <img src="{{asset('vendor')}}/upload/course_01.jpg" alt="" class="img-responsive">
                            </div>
                            <div class="course-details">
                                <h4>
                                    <small>{{$item->kategori}}</small>
                                    <a href="{{route('donasi.detail',$item->nama_program)}}" title="">{{$item->nama_program}}</a>
                                </h4>
                                <p>{{$item->deskripsi}}</p>
                                <br>
                                <small style="color:rgb(27, 27, 27)"><b>Dibutuhkan : Rp {{number_format($item->total_target,0,",",".")}}</b></small>
                                <small style="margin-top: -5%; color:#82b440">Terkumpul : Rp {{number_format($item->total_donasi_program,0,",",".")}}</b></small>
                            </div>
                            <div class="course-footer clearfix">
                                <center>
                                <a href="{{route('donasi.proses',$item->nama_program)}}" class="btn btn-default">Donasi</a>
                            </center>
                            </div>
                        </div>
                    </div>
                    @endforeach
                </div>
                <hr class="invis">
                <div class="section-button text-center">
                    <a href="{{route('donasi')}}" class="btn btn-primary">Donasi Lainnya</a>
                </div>
            </div>
        </section>
        <section class="section">
            <div class="container">
                <div class="section-title text-center">
                    <h3>Doa Orang Baik</h3>
                    <p>Jadilah bagian dari mereka yang meringankan beban saudaranya. Sungguh, DIA-lah sebaik-baik pemberi pahala, dan sebaik-baik pemberi balasan kepada siapa yang berbuat kebajikan.</p>
                </div>
                <div class="row">
                    @foreach ($komen as $item)
                        <div class="col-md-4" style="margin-top: 2%">
                            <div class="box testimonial">
                                <p class="testiname"><strong><img src="{{asset('vendor')}}/upload/testimonial_01.png" alt="" class="img-circle"> {{$item->nama }}</strong></p>
                               <p>{{ $item->komentar }}</p>
                            </div>
                        </div>
                    @endforeach
                </div>
            </div>
        </section>
        <footer class="section footer noover">
            <div class="container">
                <div class="row">
                    <div class="col-lg-4 col-md-4">
                        <div class="widget clearfix">
                            <h3 class="widget-title">Subscribe Our Newsletter</h3>
                            <div class="newsletter-widget">
                                <p>You can opt out of our newsletters at any time.<br> See our <a href="#">privacy policy</a>.</p>
                                <form class="form-inline" role="search">
                                    <div class="form-1">
                                        <input type="text" class="form-control" placeholder="Enter email here..">
                                        <button type="submit" class="btn btn-primary"><i class="fa fa-paper-plane-o"></i></button>
                                    </div>
                                </form>
                                <img src="images/payments.png" alt="" class="img-responsive">
                            </div><!-- end newsletter -->
                        </div><!-- end widget -->
                    </div><!-- end col -->

                    <div class="col-lg-3 col-md-3">
                        <div class="widget clearfix">
                            <h3 class="widget-title">Join us today</h3>
                            <p>Would you like to earn your profits by joining our team? Join us without losing time.</p>
                            <a href="#" class="readmore">Became a Teacher</a>
                        </div><!-- end widget -->
                    </div><!-- end col -->

                    <div class="col-lg-3 col-md-3">
                        <div class="widget clearfix">
                            <h3 class="widget-title">Popular Tags</h3>
                            <div class="tags-widget">   
                                <ul class="list-inline">
                                    <li><a href="#">course</a></li>
                                    <li><a href="#">web design</a></li>
                                    <li><a href="#">development</a></li>
                                    <li><a href="#">language</a></li>
                                    <li><a href="#">teacher</a></li>
                                    <li><a href="#">speaking</a></li>
                                    <li><a href="#">material</a></li>
                                    <li><a href="#">css3</a></li>
                                    <li><a href="#">html</a></li>
                                    <li><a href="#">learning</a></li>
                                </ul>
                            </div><!-- end list-widget -->
                        </div><!-- end widget -->
                    </div><!-- end col -->

                    <div class="col-lg-2 col-md-2">
                        <div class="widget clearfix">
                            <h3 class="widget-title">Support</h3>
                            <div class="list-widget">   
                                <ul>
                                    <li><a href="#">Terms of Use</a></li>
                                    <li><a href="#">Copyrights</a></li>
                                    <li><a href="#">Create a Ticket</a></li>
                                    <li><a href="#">Pricing & Plans</a></li>
                                    <li><a href="#">Carrier</a></li>
                                    <li><a href="#">Trademark</a></li>
                                </ul>
                            </div><!-- end list-widget -->
                        </div><!-- end widget -->
                    </div><!-- end col -->
                </div><!-- end row -->
            </div><!-- end container -->
        </footer>

        <div class="copyrights">
            <div class="container">
                <div class="clearfix">
                    <div class="pull-left">
                        <div class="cop-logo">
                            <a href="#"><img src="images/logo.png" alt=""></a>
                        </div>
                    </div>

                    <div class="pull-right">
                        <div class="footer-links">
                            <ul class="list-inline">
                                <li>Design : <a href="https://html.design">HTML.Design</a></li>
                                <li>Distributed by : <a href="https://themewagon.com/" target="_blank">ThemeWagon</a></li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div><!-- end container -->
        </div>
    </div>

    <!-- jQuery Files -->
    <script src="{{asset('vendor')}}/js/jquery.min.js"></script>
    <script src="{{asset('vendor')}}/js/bootstrap.min.js"></script>
    <script src="{{asset('vendor')}}/js/carousel.js"></script>
    <script src="{{asset('vendor')}}/js/animate.js"></script>
    <script src="{{asset('vendor')}}/js/custom.js"></script>
    <!-- VIDEO BG PLUGINS -->
    <script src="{{asset('vendor')}}/js/videobg.js"></script>

</body>
</html>