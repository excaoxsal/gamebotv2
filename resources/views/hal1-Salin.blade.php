<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width,
	initial-scale=1, shrink-to-fit=no">
	<meta name="description" content="">
	<meta name="author" content="Exca">
	<style type="text/css">
		/*Gambarnya Gerak"*/
		.carousel-inner img{
			width: 100%;
			height: 100%;
			body {
  background-image: url("img_tree.gif"), url("paper.gif");
  background-color: #cccccc;
}
		}
	</style>
	<link rel="stylesheet" type="text/css" href="content.css">
	<title>Build</title>
	<!--Bootstrap CSS-->
	<link href="styles/css/bootstrap.css" rel="stylesheet" type="text/css">
</head>
<body>
	<!-- navbar abu" yang horizontal bakal jadi vertikal di layar kecil -->
	<nav class="navbar navbar-dark bg-dark">
  <span class="navbar-brand mb-0 h1"></span>
</nav>
	<nav class="navbar navbar-expand-lg navbar-dark bg-dark">
  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
  </button>
  <div class="collapse navbar-collapse" id="navbarNav">
<img src="gamebot.png"  height="70" width="100">
    <ul class="navbar-nav">
      <li class="nav-item">
        <a class="nav-link active" href="index.html">Beranda</a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="politik.html">PC Games</a>  
      </li>
      <li class="nav-item">
        <a class="nav-link" href="olahraga.html">Mobile Games</a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="kesehatan.html">About Us</a> 
      </li>
      
      
    </ul>
    
		<!--Search Bar-->
		<form style="float: right;padding: 10px;padding-left:  12cm;" class="form-inline" action="#">
			<input class="form-control" type="text" placeholder="Masukan Pencarian">
			<button class="btn btn-primary" type="submit">Cari</button>
		</form>
		<button class="btn btn-primary" type="submit">Login</button>
	</div>	
	</nav>
	<!--Headernya coy-->
	<header>
<div id="demo" class="carousel slide" data-ride="carousel">
<!-- Indicators -->
<ul class="carousel-indicators">
<li data-target="#demo"data-slide-to="0" class="active"></li>
<li data-target="#demo" data-slide-to="1"></li>
<li data-target="#demo" data-slide-to="2"></li>
</ul>
<!-- Gambar Film -->
<div class="carousel-inner">
<div class="carousel-item active">
<a href="#">
<img src="images/nature.jpg" alt="Abstract"
width="1100" height="500">
<h3></h3>
</a>
</div>
<div class="carousel-item">
<img src="images/nature.jpg" alt="Nature" width="1100"
height="500">
<div class="carousel-caption d-none d-md-block">
<h3>2nd Slide</h3>
<p>This is a description for the third slide.</p>
</div>
</div>
<div class="carousel-item">
<img src="images/nature.jpg" alt="Plane" width="1100"
height="500">
<div class="carousel-caption d-none d-md-block">
<h3>Third Slide</h3>
<p>This is a description for the third slide.</p>
</div>
</div>
</div>
<!-- Left and right controls -->
<a class="carousel-control-prev"href="#demo" data-slide="prev">
<span class="carousel-control-prev-icon"></span>
</a>
<a class="carousel-control-next"href="#demo" data-slide="next">
<span class="carousel-control-next-icon"></span>
</a>
</div>
</header>
<!-- Content -->
<!-- Page Content -->
<div class="container">
<h1 class="display-4" style="padding-top: 0.3em;
padding-bottom: 0.3em">Berita Utama Tiap Kategori</h1>
<!-- content -->
<div class="content">
<h4 class="card-title">Berita 1</h4>
<img src="london.png">
<p class="card-text">Lorem ipsum dolor sit amet, consectetur
adipisicing elit, sed do eiusmod tempor incididunt ut labore et
dolore magna aliqua. Ut enim ad minim veniam,quis nostrud
exercitation ullamco laboris nisi ut aliquip ex ea commodo
consequat. Duis aute irure dolor in reprehenderit in voluptate
velit essecillum dolore eu fugiat nulla pariatur. Excepteur sint
occaecat cupidatat non proident, sunt in culpa qui officia
deserunt mollit anim id est laborum.</p>
<a href="#" class="btn btn-primary">Selengkapnya >></a>
</div>
<br>
<div class="content">
<h4 class="card-title">Berita 2</h4>
<p class="card-text">Lorem ipsum dolor sit amet, consectetur
adipisicing elit, sed do eiusmod tempor incididunt ut labore et
dolore magna aliqua. Ut enim ad minim veniam,quis nostrud
exercitation ullamco laboris nisi ut aliquip ex ea commodo
consequat. Duis aute irure dolor in reprehenderit in voluptate
velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint
occaecat cupidatat non proident, sunt in culpa qui officia
deserunt mollit anim id est laborum.</p>
<a href="#" class="btn btn-primary">Selengkapnya >></a>
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
</body>
</html>