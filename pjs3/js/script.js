

$(function(){
    $("#monBouton").click(function(){
        $("html, body").animate({scrollTop: 0},"slow");
    });
});


//  selectioner des elements
var map = document.querySelector('#map')
//selections des elements dans map et que sont de lien
var paths = map.querySelectorAll('.map_image a')
//selections des elements dans liste et que sont de lien
var liens = map.querySelectorAll('.map_list a')

/* Selectioner tous les chemins */
/* rendre forech accessible pour tous les navigateurs */
// pour chaque lien


/** --------------------------- MAP -----------------------**/
var activeArea = function(id)
{
	// enlever la classe is-active dans tous les element qui ont la classe active
	map.querySelectorAll('.is-active').forEach(function(item)
	{
		item.classList.remove('is-active')
	})
	
	// activer dans list l'id que a la partie recupere precedement
	document.querySelector('#nom-' + id).classList.add('is-active') //
	// activer dans list l'id que a la partie recupere precedement
	document.querySelector('#carte-' + id).classList.add('is-active') //
}

paths.forEach(function (path)
{
	//ajouter un evenement
	path.addEventListener('mouseenter', function(){ // ecouter le mouse center
	//recuperer la patie droite de l'id
	var id = this.id.replace('carte-','') 
	//activer sur la carte l'id associer a ce nom
	activeArea(id);

	}) 
})

liens.forEach(function (liens)
{
	//ajouter un evenement
	liens.addEventListener('mouseenter', function(){
		//recuperer la patie droite de l'id
		var id = this.id.replace('nom-','')
		//activer sur la carte l'id associer a ce nom
		activeArea(id);
	})
})
