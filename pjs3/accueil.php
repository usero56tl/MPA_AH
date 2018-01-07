<!--menu 	-->

<?php require "haut.tpl";?>

<!--fin menu 	-->

		<main>

			<!-- Le slider -->
			  	<div class="container_slider">
					<div id="slider">
						<figure>
							<img src="img/img1.jpg" alt="img1">
							<img src="img/img2.jpg" alt="img2">
							<img src="img/img3.jpg" alt="img3">
							<img src="img/img4.jpg" alt="img4">
						</figure>

						
						<div class="centree">
							<h1> GUADELOUPE </h1>
							
							<form action="rediriger.php">
							  <input class="centree2" type="text" name="nom" value="Recherche...">
							</form>							
						
							<div class="btn-vers-bas espace_gauche">
								<img class="espace_gauche" src="img/vers_bas.png" alt id="monBoutonB">
							</div>
						</div>
							
					</div>
					
				</div>

				<div class="info">
					<h2 class="bold">A propos</h2>
					<h2 class="apropos"> VisitAdept est une startup informatique en partenariat avec différentes agences de tourisme en </h2>
					<h2 class="apropos"> Guadeloupe. Elle a été fondée en 2017 par un groupe d'étudiants soucieux de vous faire voyager. </h2>
					<h2 class="apropos"> Vous trouverez ici les meilleurs conseils pour visiter l’île au Papillon. </h2>
					
					<h2 class="bold">Nous contacter</h2>
					<a href="mailto:contact@visitadept.com"><h2 class="contact">	contact@visitadept.com</h2>
					</a>
					<a href="https://fr-fr.facebook.com"><img class="part" src="img/fb.png" alt="bouton haut"><img class="part" src="img/tw.jpg" alt="bouton haut"></a>
				</div>
		<!--fin main 	-->
<?php require "bas.tpl";?>
