<!DOCTYPE html>
<html lang="en">

<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>ADM</title>

	<!-- Bootstrap CSS -->
	<link rel="stylesheet" href="<?= base_url('css/bootstrap.min.css') ?>" />
</head>

<body>

	<nav class="navbar navbar-expand-lg navbar-dark bg-primary">
		<div class="container">
			<a class="navbar-brand" href="<?= base_url() ?>">Home</a>
			<button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
				<span class="navbar-toggler-icon"></span>
			</button>
			<div class="collapse navbar-collapse" id="navbarNav">
				<ul class="navbar-nav">
					<li class="nav-item">
						<a class="nav-link" href="<?= base_url('about') ?>">About</a>
					</li>
					<li class="nav-item">
						<a class="nav-link" href="<?= base_url('product_page') ?>">Product</a>
					</li>
					<li class="nav-item">
						<a class="nav-link" href="<?= base_url('driver_page') ?>">Driver</a>
					</li>
					<li class="nav-item">
						<a class="nav-link" href="<?= base_url('technologies_page') ?>">Technologies</a>
					</li>
					<li class="nav-item">
						<a class="nav-link" href="<?= base_url('contact_page') ?>">Contact</a>
					</li>
				</ul>
			</div>
		</div>
	</nav>

	<header class="jumbotron jumbotron-fluid">
		<div class="container">
			<div class="row">
				<div class="col-md-12">
					<h1 class="h1">ADM Lebih Canggih</h1>
				</div>
			</div>
		</div>
	</header>

	<div class="container">
		<div class="row">
			<div class="col-md-12 my-2 card">
				<div class="card-body">
					<h5 class="h5">The World’s Fastest PC Gaming Processor</h5>
					<p>Get an average of 15% more performance with ADM Ryzen™ 7 5800X3D, the only processor with ADM 3D V-Cache™ technology.1</p>
				</div>
			</div>
			<div class="col-md-12 my-2 card">
				<div class="card-body">
					<h5 class="h5">The Fastest in the Game</h5>
					<p>Introducing the ADM Ryzen™ 5000 Series Desktop Processors.</p>
				</div>
			</div>
			<div class="col-md-12 my-2 card">
				<div class="card-body">
					<h5 class="h5">Play It All with Ryzen™ and Radeon™</h5>
					<p>Browse preconfigured systems from our partners.</p>
				</div>
			</div>
			<div class="col-md-12 my-2 card">
				<div class="card-body">
					<h5 class="h5">Meet the world’s highest-performing server processors for technical computing</h5>
					<p>AMD EPYC™ 7003 Series processors with AMD 3D V-Cache™ technology accelerate simulations, boost engineering productivity, and speed the product development process.</p>
				</div>
			</div>
			<div class="col-md-12 my-2 card">
				<div class="card-body">
					<h5 class="h5">AMD Radeon™ ProRender</h5>
					<p>AMD Radeon™ ProRender is the AMD high-performance, physically-based rendering engine.</p>
				</div>
			</div>
		</div>
	</div>

	<footer class="jumbotron jumbotron-fluid mt-5 mb-0">
		<div class="container text-center">Copyright &copy <?= Date('Y') ?> AMD Radeon™ ProRender is the AMD high-performance, physically-based rendering engine. </div>
	</footer>

	<!-- Jquery dan Bootsrap JS -->
	<script src="<?= base_url('js/jquery.min.js') ?>"></script>
	<script src="<?= base_url('js/bootstrap.min.js') ?>"></script>

</body>

</html>