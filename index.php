<?php

/*
Page de routage
*/
	// initialisation des parametres du site
	require_once('Defines/structure.php');
	require_once(PATH_LANGUES.PATH_FR.'textes.php');
	require_once(PATH_DEFINES.'configuration.php');

	//demarrage de la classe base
	require_once(PATH_LIB.'base.php');
	$base= new base();

	 // Decision de la route a prendre
	 if(isset($_GET['page']) && $base->isAlpha($_GET['page']) != false && is_file(PATH_CONTROLLEUR.$_GET['page'].".php")) {

		$page=$base->isAlpha($_GET['page']);
	 }
	 elseif(!isset($_GET['page'])) {

		$page='index';   // index du controlleur
	 }
	 else {
		$page='erreur'; // direction vers la page d'erreur
	}
	// recuperation de la variable page pour poursuivre dans la vue.
			require_once(PATH_CONTROLLEUR.$page.'.php');
	$base ->__destruct();


?>

