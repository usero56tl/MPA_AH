<!--menu 	-->

<?php require "haut.tpl";?>

<!--fin menu 	-->

		<main>

			<div class="map" id="map">
				
				<div class="map_conteneur">
					
					<div class="map_list">
			  			<ul>
			  				<li> <a href="#" id="nom-ARA">  Auvergne-Rhône-Alpes       </a> </li>
			  				<li> <a href="#" id="nom-BFC">  Bourgogne-Franche-Comt&eacute;    </a> </li>
			  				<li> <a href="#" id="nom-BRE">  Bretagne                   </a> </li>
			  				<li> <a href="#" id="nom-CVL">  Centre-Val de Loire        </a> </li>
			  				<li> <a href="#" id="nom-COR">  Corse                      </a> </li>
			  				<li> <a href="#" id="nom-GES">  Grand Est                  </a> </li>
			  				<li class="list_guad"> <a href="#map_guad" id="nom-GP">   Guadeloupe    </a> </li>
			  				<li> <a href="#" id="nom-GUY">  Guyannne                   </a> </li>
			  				<li> <a href="#" id="nom-HDF">  Hauts-de-France            </a> </li>
			  				<li> <a href="#" id="nom-IDF">  Île-de-France              </a> </li>
			  				<li> <a href="#" id="nom-MQ">   Martinique                 </a> </li>
			  				<li> <a href="#" id="nom-NOR">  Normandie                  </a> </li>
			  				<li> <a href="#" id="nom-NAQ">  Nouvelle-Aquitaine         </a> </li>
			  				<li> <a href="#" id="nom-NO">   Nouvelle-Caledonie         </a> </li>
			  				<li> <a href="#" id="nom-OCC">  Occitanie                  </a> </li>
			  				<li> <a href="#" id="nom-PDL">  Pays de la Loire           </a> </li>
			  				<li> <a href="#" id="nom-PAC">  Provence-Alpes-Côte d'Azur </a> </li>
			  				<li> <a href="#" id="nom-RE">   R&eacute;union                    </a> </li>
			  			</ul>
			  		</div>
					<!-- ajout de la carte de regions de France -->
<?php require "map_france.tpl";?>
<?php require "map_guadeloupe.tpl";?>

		  		</div>
  			</div>
		<!--fin main 	-->
<?php require "bas.tpl";?>
