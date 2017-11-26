<!doctype html>
<html lang="fr">
	<head>
		<meta http-equiv="Content-Type" content="text/html;charset=utf8" />
		<title><?= $titre?> </title>
		<link rel="stylesheet" href="css/style.css">
		<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>	
		<script src="js/script.js"></script>
	</head>
	<body>
		<div class="entete">
			<header class="header">
				<a href="#"><img src="img/logo.png" alt="logo" class="logo"></a>
				<a href="#"><img src="img/visitadept.png" alt="logo" class="nomlogo"></a>
			</header>
			<nav>
				<input type="checkbox" id="checkbox1" />
				<label for="checkbox1">
					<ul class="menu demo">
						<li><a href="accueil.php">Accueil</a></li>
						<li><a href="iles.php">Les îles</a></li>
						<li><a href="evenements.php">Evénements</a></li>
						<li><a href="#" class="pas-active">F.A.Q.</a></li>
						<li><a href="#" class="pas-active">Contact</a></li>
					</ul>
					<span class="toggle">☰</span>
				</label>
			</nav>
		</div>
	
	
