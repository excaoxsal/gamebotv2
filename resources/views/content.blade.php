<html lang="en">

<head>
    <meta charset=utf-8>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Gamebot - All About Game</title>
    <!-- Load Roboto font -->
    <link href='http://fonts.googleapis.com/css?family=Roboto:400,300,700&amp;subset=latin,latin-ext' rel='stylesheet' type='text/css'>
    <!-- Load css styles -->
    <link rel="stylesheet" type="text/css" href="/css/bootstrap.css" />
    <link rel="stylesheet" type="text/css" href="/css/bootstrap-responsive.css" />
    <link rel="stylesheet" type="text/css" href="/css/style.css" />
    <link rel="stylesheet" type="text/css" href="/css/pluton.css" />
        <!--[if IE 7]>
            <link rel="stylesheet" type="text/css" href="css/pluton-ie7.css" />
        <![endif]-->
        <link rel="stylesheet" type="text/css" href="/css/jquery.cslider.css" />
        <link rel="stylesheet" type="text/css" href="/css/jquery.bxslider.css" />
        <link rel="stylesheet" type="text/css" href="/css/animate.css" />
        <!-- icon web -->
        <link rel="icon" href="/images/logo.png" sizes="16x16">
        <!--style tulisan dan gambar-->
        <style type="text/css">
            p {
               color: black;
           }
           .card-title{
               color: black;
           }
           .content img{
             float: left;
             width: 100px;
             height:100px;
             margin: 10px;
         }
         h1{
            color: black;
         }
         .asw{
            background: black;
         }
     </style>

 </head>

 <body>
    <div class="navbar">
        <div class="navbar-inner">
            <div class="container">
                <a href="index.php" class="brand">
                    <img src="/gamebot.png" width="150" height="50" alt="Logo" />
                    <!-- This is website logo -->
                </a>
                <!-- Navigation button, visible on small resolution -->
                <button type="button" class="btn btn-navbar" data-toggle="collapse" data-target=".nav-collapse">
                    <i class="icon-menu"></i>
                </button>
                <!-- Main navigation -->
                <div class="nav-collapse collapse pull-right">
                    <ul class="nav" id="top-navigation">
                        <li><a href="/">Beranda</a></li>
                        <li><a href="/pc">PC Games</a></li>
                        <li><a href="/mobile">Mobile Games</a></li>
                        <li><a href="/aboutus">About Us</a></li>
                        
                    </ul>
                    <ul class="nav navbar-nav navbar-right">
                        <!-- Authentication Links -->
                        @if (Auth::guest())
                        <li><a href="{{ url('/login') }}">Login</a></li>
                        <li><a href="{{ url('/register') }}">Register</a></li>
                        @else
                        <li class="dropdown">
                            <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-expanded="false">
                                {{ Auth::user()->name }} <span class="caret"></span>
                            </a>

                            <ul class="dropdown-menu" role="menu">
                                <li><a href="{{ url('/home') }}"><i class="fa fa-btn fa-sign-out"></i>Dashboard</a></li>
                                <li><a href="{{ url('/logout') }}"><i class="fa fa-btn fa-sign-out"></i>Logout</a></li>
                            </ul>
                        </li>
                        @endif
                    </ul>
                </div>
                <!-- End main navigation -->
                </div>
            </div>
        </div>

	<!--Headernya coy-->

<!-- Start home section -->
      

<!-- Database -->

<!-- Page Content -->

<div class="container">
<center>
    <!-- judul -->
    <h1>{{$berita->judul_berita}}</h1>
    <!-- gambar -->
    <td>@foreach($berita->gambar as $g)
        
        <img width="500px" src="{{ url('/gambar_header/'.$g->file) }}">@endforeach</td>
</center>



<!-- isi berita -->
<p>{{$berita->pembuka}}</p>


{{$berita->$gambar_isi}}

@foreach($berita->berita_isi as $berita_isi)
    <p>{{$berita_isi->berita_isi}}</p>
@foreach($berita->gambar_isi as $isi)

    <center>
<img width="500px" src="{{ url('/gambar_content/'.$isi->filecontent) }}"></center>
@endforeach

@endforeach





</div>
<!-- akhird dari isi berita -->
<!-- /.container -->
<!-- Footer-->
<footer class="py-5 bg-dark" style="margin-top: 2em">
	<div class="container">
		<p class="m-0 text-center text-white">Copyright &copy; 2019 - Gamebot</p>
	</div>
</footer>
<!-- Bootstrap core JavaScript -->
	<script src="styles/js/jquery-3.3.1.min.js"></script>
	<script src="styles/js/bootstrap.bundle.min.js"></script>
	<!-- Include javascript -->
        <script src="js/jquery.js"></script>
        <script type="text/javascript" src="/js/jquery.mixitup.js"></script>
        <script type="text/javascript" src="/js/bootstrap.js"></script>
        <script type="text/javascript" src="/js/modernizr.custom.js"></script>
        <script type="text/javascript" src="/js/jquery.bxslider.js"></script>
        <script type="text/javascript" src="/js/jquery.cslider.js"></script>
        <script type="text/javascript" src="/js/jquery.placeholder.js"></script>
        <script type="text/javascript" src="/js/jquery.inview.js"></script>
        <!-- Load google maps api and call initializeMap function defined in app.js -->
        <script async="" defer="" type="text/javascript" src="https://maps.googleapis.com/maps/api/js?sensor=false&callback=initializeMap"></script>
        <!-- css3-mediaqueries.js for IE8 or older -->
        <!--[if lt IE 9]>
            <script src="js/respond.min.js"></script>
        <![endif]-->
        <script type="text/javascript" src="js/app.js"></script>
</body>
</html>