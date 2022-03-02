@extends('layouts.app')


@section('content')
	<title>Educa Studio</title>
	<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.1/dist/css/bootstrap.min.css">
  <script src="https://cdn.jsdelivr.net/npm/jquery@3.5.1/dist/jquery.slim.min.js"></script>
  <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js"></script>
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.1/dist/js/bootstrap.bundle.min.js"></script>
  <link rel="stylesheet" type="text/css" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
	

<div class="container">	
		
		<!-- membuat jumbotron -->
		<div class="jumbotron" style="background-color: lightblue;">
			<center>			
				<h2>welcome To Educa Studio!</h2>
				<p>Ini adalah halaman home Educa Studio...</p><br/><br/>
				<!-- <p><a class="btn btn-primary btn-lg" href="#" role="button">Mulai Belajar !</a></p> -->
			</center>
		</div>
	
	<div class="clearfix"></div>
		
	<!-- <nav class="navbar navbar-default" style="bottom: 0;margin: 0">
		<div class="container">		
		</div>
	</nav> -->
	<br>
	<!-- --Isi1 -->
	<div class="card" style="width: 30rem; float: left; margin: 30px">
			<div class="thumbnail">
				<img src="https://www.educastudio.com/uploads/brand/12_20201228_095009.png?v=1.0">
				<div class="caption">
					<h3>Marbel Premium</h3>
					<p>Marble is a brand for all educational games produced by Educa Studio. Until now, 
						there have been more than a hundred applications developed in various platforms.</p>
					<p><a href="/category/marbel-edu-games" class="btn btn-primary" role="button">Lihat</a></p>
				</div>
			</div>
		</div>

	<!-- --Isi2 -->
	<div class="card" style="width: 30rem; float: left; margin: 30px">
			<div class="thumbnail">
				<img src="https://www.educastudio.com/uploads/brand/55_20201228_094818.png?v=1.0">
				<div class="caption">
					<h3>Marbel & Friends - Kids Games</h3>
					<p>Find digital toys that safe for your kids? Now, we have Marbel & Friends. 
						Kids Game series like Marbel Supermarket, Marbel Fishing, Marbel Robots and The others</p>
					<p><a href="/category/marbel-and-friends-kind-games" class="btn btn-primary" role="button">Lihat</a></p>
				</div>
			</div>
		</div>

	<!-- --Isi3 -->
	<div class="card" style="width: 30rem; float: left; margin: 30px">
			<div class="thumbnail">
				<img src="https://www.educastudio.com/uploads/brand/4_20201228_094944.png?v=1.0">
				<div class="caption">
					<h3>Riri - Story Books</h3>
					<p>Riri is a brand for the digital story book for kids. 
					Equipped with cool animations and interesting illustrations, Riri are developed in various platforms.</p>
					<p><a href="/category/riri-story-books" class="btn btn-primary" role="button">Lihat</a></p>
				</div>
			</div>
		</div>
@endsection