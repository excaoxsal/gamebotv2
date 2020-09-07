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
  <link rel="stylesheet" type="text/css" href="/css/bootstrap.min.css" />
 
  
  <!-- <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous"> -->
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
         
           .card-title{
             color: black;
           }
           .content img{
             float: left;
             width: 100px;
             height:100px;
             margin: 10px;

          }
          .media {
  display: -ms-flexbox;
  display: flex;
  -ms-flex-align: start;
  align-items: flex-start;
}

.media-body {
  -ms-flex: 1;
  flex: 1;
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
              <a href="/" class="brand">
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
                  <li class="active"><a href="/">Beranda</a></li>
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
        <header>
          <!-- Start home section -->
          <div id="home">
            <!-- Start cSlider -->
            <div id="da-slider" class="da-slider">
              <div class="triangle"></div>
              <!-- mask elemet use for masking background image -->
              <div class="mask"></div>
              <!-- All slides centred in container element -->
              <div class="container">
                <!-- Start first slide -->
                @foreach($berita as $b) 
                <div class="da-slide">
                  <h2>{{$b->judul_berita}}</h2>
                  <h4>Mobile Games</h4>
                  <p>Pro Evolution Soccer 2019 Full Version merupakan salah satu game olahraga sepak bola paling populer di dunia saat ini. Game ini dirilis oleh KONAMI pada bulan September 2018. Game PES 2019 ini memiliki kualitas gameplay yang tidak perlu diragukan lagi kualitasnya. Gerakan pemain, tendangan pemain, pantulan bola, dan yang lainnya sangatlah realistis seperti permainan sepak bola pada aslinya.</p>
                  <a href="/berita/{{ $b->id_berita }}" class="da-link button">Read more</a>
                  <div class="da-img">@foreach($b->gambar as $g)
                    <img src="{{ url('/gambar_header/'.$g->file) }}" width="320" alt="image02">@endforeach
                  </div>
                </div>
                @endforeach
                <!-- End first slide -->
                <!-- Start second slide -->
                <!-- <div class="da-slide">
                  <h2 class="fittext2">PlayerUnknown’s Battleground</h2>
                  <h4>Mobile Games</h4>
                  <p>Apakah kamu tahu ada Game Battle Royale baru untuk mobile di Play Store? Pernah denger gak tentang game terkenal PlayerUnknown’s Battleground (PUBG) di PC? Sekarang ada versi mobilenya loh!</p>
                  <a href="#" class="da-link button">Read more</a>
                  <div class="da-img">
                    <img src="images/pubg2.png" alt="image01" width="320">
                  </div>
                </div> -->
                <!-- End second slide -->
                <!-- Start third slide -->
                <!-- <div class="da-slide">
                  <h2>Mobile Legends Bang Bang</h2>
                  <h4>Mobile Games</h4>
                  <p>Mobile Legends adalah game mobile bergenre MOBA (Massive Online Battle Arena) yang dimainkan secara tim dengan gameplay 5 vs 5. Halaman ini mengulas semua info terkait Mobile Legends: guide, hero build, tips dan strategi Mobile Legends.</p>
                  <a href="http://localhost/test_asdod/asw/ml.php?berita_id=10" class="da-link button">Read more</a>
                  <div class="da-img">
                    <img src="images/mobilelegends.png" width="320" alt="image02">
                  </div>
                </div> -->
                <!-- End third slide -->
                <!-- Start fourth slide -->
                <!-- <div class="da-slide">
                  <h2>DOTA 2</h2>
                  <h4>PC Games</h4>
                  <p>DOTA 2 merupakan game yang sudah tidak asing di telinga kita. Game yang sudah tidak diragukan ketenarannya sekrangaawalnya bahkan bukanlah sebuah game yang berdiri sendiri? Lebih lanjutnya simak ulasan sejarah Dota 2 dari Gamebot</p>
                  <a href="http://localhost/test_asdod/asw/ml.php?berita_id=12" class="da-link button">Read more</a>
                  <div class="da-img">
                    <img src="images/dota2.png" width="320" alt="image03">
                  </div>
                </div> -->
                <!-- End fourth slide -->
                <!-- Start cSlide navigation arrows -->
                <div class="da-arrows">
                  <span class="da-arrows-prev"></span>
                  <span class="da-arrows-next"></span>
                </div>
                <!-- End cSlide navigation arrows -->
              </div>
            </div>
          </div>
          <div class="asw">
          <!-- Coba -->
          <!-- <div class="navbar"> -->
          <div class="navbar-inner">
            <div class="container">
              
                <!-- This is website logo -->
              </a>
              <!-- Navigation button, visible on small resolution -->
             <!--  <button type="button" class="btn btn-navbar" data-toggle="collapse" data-target=".nav-collapse">
                <i class="icon-menu"></i>
              </button> -->
              <!-- Main navigation -->
               
          <!-- Akhir coba -->
          <!-- Database -->
          <div class="container">
            <h1 class="display-4" style="padding-top: 0.3em;
            padding-bottom: 0.3em" style="color: black;">Berita Utama Tiap Kategori</h1>
            <!-- content -->
            <ul class="list-unstyled">
              <!-- <li class="media">
                <img src="..." class="mr-3" alt="...">
                <div class="media-body">
                  <h5 class="mt-0 mb-1">List-based media object</h5>
                  Cras sit amet nibh libero, in gravida nulla. Nulla vel metus scelerisque ante sollicitudin. Cras purus odio, vestibulum in vulputate at, tempus viverra turpis. Fusce condimentum nunc ac nisi vulputate fringilla. Donec lacinia congue felis in faucibus.
                </div>
              </li> -->
              @foreach($berita as $b) 
              <!-- <li class="media"> -->
                <table>
                <!-- <li class="list-group-item"> -->
                  <!-- <span class="border border-primary"></span> -->
                  
                  <tr>@foreach($b->gambar as $g)<td rowspan="3">

                  <img src="{{ url('/gambar_header/'.$g->file) }}" width="150" class="mr-3">@endforeach</td>
                  <div class="media-body">
                    <td><h3 class="mt-0 mb-1">{{$b->judul_berita}}</h3></td></tr>
                    <tr><td><p>{{$b['isi_berita']}}</p></td></tr>
                    <tr><td>
                    <a href="/berita/{{ $b->id_berita }}" class="btn btn-primary">Selengkapnya >></a></td></tr>
                  </div>
                  <!-- </li> -->
                  </table>
                
                <br>
                @endforeach
              </ul>
            </div>

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
          <script type="text/javascript" src="js/jquery.mixitup.js"></script>
          <script type="text/javascript" src="js/bootstrap.js"></script>
          <script type="text/javascript" src="js/modernizr.custom.js"></script>
          <script type="text/javascript" src="js/jquery.bxslider.js"></script>
          <script type="text/javascript" src="js/jquery.cslider.js"></script>
          <script type="text/javascript" src="js/jquery.placeholder.js"></script>
          <script type="text/javascript" src="js/jquery.inview.js"></script>
          <!-- Load google maps api and call initializeMap function defined in app.js -->
          <script async="" defer="" type="text/javascript" src="https://maps.googleapis.com/maps/api/js?sensor=false&callback=initializeMap"></script>
          <!-- css3-mediaqueries.js for IE8 or older -->
        <!--[if lt IE 9]>
            <script src="js/respond.min.js"></script>
          <![endif]-->
          <script type="text/javascript" src="js/app.js"></script>
        </body>
        </html>