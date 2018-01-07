
<?php

    switch ($_GET['nom'])
    {
    	case 'Guadeloupe'   : header("Location: map_guadeloupe.php", true, 301) ;exit(); break;
    	case 'France'       : header("Location: cartes.php",         true, 301) ;exit(); break;
    	case 'Regions'      : header("Location: cartes.php",         true, 301) ;exit(); break;
    	case 'croisière'    : header("Location: evenement_description.php", true, 301) ;exit();break;
    	case 'événements'   : header("Location: evenements.php",     true, 301) ;exit(); break;
    	case 'météo'        : header("Location: evenements.php",     true, 301) ;exit(); break;
    	case 'inscription'  : header("Location: evenement_inscription.php",     true, 301) ;exit(); break;
    	
    	default: header("Location: erreur.php", true, 301) ;exit(); break;
    }
?>