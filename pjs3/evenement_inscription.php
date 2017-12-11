<!--menu 	-->
<?php require "haut.tpl";?>

<!--fin menu 	-->
	
		<main>
		
			<form action="email_envoyer.html">
		<div id = "conteneur-inscription">
		
				<div id="conteneur-form">
					<div id="ident">
						<div id="nom">
							Nom:
							<input type="text" name="Nom" value="">
								 
						</div>
						<div id="prenom">
							Prenom:
							<input type="text" name="Prenom" value="">
						</div>
					</div>
					<div id="email">
						E-mail:
						<input type="text" name="mail" value="">
					 <br><br>
						<input class="bt-form" type="submit" value="Ok">
					</div>
				</div>
				
			<div id = "infos">
			<p> Croisière aux Antilles</p>
			<hr>
			<p> 22 décembre - 30 décembres 2017</p>
			<p> 14:00 - 19:00 </p>
			<p> Point-à-Pitre</p>
			</div>
	</div>
		</form> 
						
						 
		

<!-- metre ini le contenu -->

	<?php require "bas.tpl";?>