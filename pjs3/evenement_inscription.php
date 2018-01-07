<!--menu 	-->
<?php require "haut.tpl";?>

<!--fin menu 	-->
	
		<main>
			<div id ="conteneur-inscription">

				<div class="form">

					<p class="form_titre">Ajoutez vos coordonn&eacute;es</p>
					
					<form action="email_envoyer.html">
						<div id="ident">
							
							<div class="form_event ">
								*Nom:
								<input type="text" name="Nom" value="">
							</div>

							<div class="form_event">
								*Pr&eacute;nom:
								<input type="text" name="Prenom" value="">
							</div>
						</div>	

						<div class="form_event">
								*E-mail:
								<input type="text" name="mail" value="">
								<input id="btn_event_inscr" class="bt-form" type="submit" value="OK">
						</div>

						
					</form> 
				</div>
				
				<div id="infos">
					<div>
						<p class="infos_titre"> Croisière aux Antilles</p>
						<hr>
					</div>
					<p> 22 d&eacute;cembre - 30 d&eacute;cembres 2017</p>
					<p> 14:00 - 19:00 </p>
					<p> Point-à-Pitre</p>
				</div>

			</div>
<!-- metre ini le contenu -->

	<?php require "bas.tpl";?>