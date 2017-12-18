<!--menu 	-->
<?php require "haut.tpl";?>
		<main>
			
			<div class="conteneur_event">
				<div class="meteo1">

					<iframe src="https://www.meteoblue.com/fr/meteo/widget/three/guadeloupe_guadeloupe_3579144?geoloc=fixed&nocurrent=0&noforecast=0&days=4&tempunit=CELSIUS&windunit=KILOMETER_PER_HOUR&layout=image"></iframe>
				</div>

				<div class="meteo2">

					<iframe src="https://www.meteoblue.com/fr/meteo/widget/daily/guadeloupe_guadeloupe_3579144?geoloc=fixed&days=4&tempunit=CELSIUS&windunit=KILOMETER_PER_HOUR&precipunit=MILLIMETER&coloured=coloured&pictoicon=0&pictoicon=1&maxtemperature=0&maxtemperature=1&mintemperature=0&mintemperature=1&windspeed=0&windspeed=1&windgust=0&winddirection=0&winddirection=1&uv=0&humidity=0&precipitation=0&precipitation=1&precipitationprobability=0&precipitationprobability=1&spot=0&spot=1&pressure=0&layout=light"></iframe>
			
				</div>

				<div class="contenu_event">
					<div class="titre">
						<h1> &Eacute;V&Eacute;NEMENTS A VENIR
							</h1>
					</div>
					<div class="d_event">
						<div class="d2_event">
							<img src="img/boat.jpg" class="imgevent" alt="event">
							<div class="transi">
								<h2>Croisi&egrave;re aux Antilles</h2>
								<h5>
									ven. 22 d&eacute;c. |  Pointe-&agrave;-Pitre
									
	                            </h5>
								<div class="details">
									<div class="details_1">
										22 d&eacute;cembre - 30 d&eacute;c. 2017 &agrave; 14:00 - 19:00 -04
	                                	Pointe-&agrave;-Pitre, Pointe-&agrave;-Pitre, Guadeloupe
									</div>
									
									<p>
										Partez en croisi&egrave;re au d&eacute;part de Pointe-&agrave;-Pitre pour huit jours de voyage paradisiaque, &agrave; la d&eacute;couverte de l’archipel Guadeloup&eacute;en.
									</p>
								</div>
							</div>

							<div class="btn-event">
								<form action="evenement_description.php">
									<input class="bt-form" type="submit" value="S'inscrire">
								</form>
							</div>
							
						</div>
						
						<div class="d2_event">
							<img src="img/festival.jpg" class="imgevent" alt="event">
							<div class="transi">
								<h2>Festival FEMI</h2>
								<h5>
									sam.  27 janv. 2018  |  Lamentin
									
	                            </h5>
								<div class="details">
									<div class="details_1">
									27 janvier - 3 f&eacute;vrier, 2018 &agrave; 10:00 - 22:00 -04 Lamentin, Lamentin, Guadeloupe
								</div>
									<p>
										Le FEMI, festival francophone de cin&eacute;ma de la Grande Caraïbe, se donne pour mission de promouvoir les œuvres cin&eacute;matographiques et les cin&eacute;astes des Antilles-Guyane et plus largement de la Caraïbe.
									</p>
								</div>
							</div>
							<div class="btn-event">
								<form action="#">
									<input class="bt-form pas-active" type="submit" value="S'inscrire">
								</form>
							</div>
						</div>
			
						<div class="d2_event">
							<img src="img/randonee.jpg" class="imgevent" alt="event">
							<div class="transi">
								<h2>Randonn&eacute;e des Trois Cornes</h2>
								<h5>
									ven. 10 nov , 2017  |  Sainte Rose
	                            </h5>
	                            
								<div class="details">
									<div class="details_1"> 10 novembre, 2017 &agrave; 10:00 - 12:00 -04 Sainte Rose, Ste Rose, Guadeloupe </div>
									<p>
										Partez en randonn&eacute;e &agrave; la Boucle de Sofaïa / Trois cornes. Balade facile et accessible &agrave; tous. Venez d&eacute;couvrir toute la beaut&eacute; de la Guadeloupe en deux heures.
									</p>
								</div>
							</div>
							<div class="btn-event">
								<form action="#">
									<input class="bt-form pas-active" type="submit" value="S'inscrire">
								</form>
							</div>
						</div>
					</div>
				</div>
			</div>

<!--fin menu 	-->
	<?php require "bas.tpl";?>