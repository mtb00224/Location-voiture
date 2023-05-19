<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/css/bootstrap.min.css">
	<link rel="stylesheet" href="/css/index.css">
	<title>@yield("titre")</title>
</head>
<body>
	<header>
		<nav class="navbar navbar-expand-lg bg-body-tertiary">
			<div class="container-fluid">
			  <a class="navbar-brand" href="/">
				<img src="/img_voitures/logo.jpg" alt="Logo here" width="30" height="24">
			  </a>
			  <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNavDropdown" aria-controls="navbarNavDropdown" aria-expanded="false" aria-label="Toggle navigation">
				<span class="navbar-toggler-icon"></span>
			  </button>
			  	<div class="collapse navbar-collapse" id="navbarNavDropdown">
					<ul class="navbar-nav">
						<li class="nav-item">
							<a class="nav-link active" aria-current="page" href="/">Home</a>
						</li>
						<li class="nav-item">
							<a class="nav-link" href="{{ route('voitures.index') }}">Nos-Models-de-voitures</a>
						</li>											
						<li class="nav-item dropdown">
							<a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
							Voir+
							</a>
							<ul class="dropdown-menu">
								<li><a class="dropdown-item" href="#">Nos services</a></li>								
								<li><a class="dropdown-item" href="#">Offres spécial</a></li>
							</ul>
						</li>												
					</ul>
					<span class="login">						
						<a class="apropos btn" href="#">About US</a> &nbsp;&nbsp;&nbsp;
						<a class="btn" href="{{ route('login.connexion') }}" id="login">Sign In/Up</a>
					</span>
			  	</div>			  	
			</div>
		</nav>								
	</header>
	<main class="container">
		@yield("contenu")
	</main>
	<footer class="text-bg-dark p-3">
		<div class="row container-fluid">
			<div class="col-3">
				<h3>Nos réseaux</h3>
				<ul>
					<li>Facebook</li>
					<li>Instagrame</li>
					<li>Twitter</li>					
				</ul>
			</div>
			<div class="col-3">
				<h3>Nos services</h3>
				<ul>
					<li><a href="http://">Vente de voitures</a></li>
					<li><a href="">Location de voiture</a></li>
					<li><a href="">Bla bla bla bla</a></li>
				</ul>
			</div>
			<div class="col-3">
				<h3>Laissez un mot</h3>
				<textarea name="mot" id="" cols="30" rows="1"></textarea>
				<button type="submit">Envoyer</button>
			</div>
		</div>
	</footer>
	<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>