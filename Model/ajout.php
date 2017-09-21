<?php

require_once(PATH_LIB.PATH_BDD.BDD);

$bdd=new bdd($MYSQL_host,$MYSQL_user,$MYSQL_password,$MYSQL_dbname);

$requete = "INSERT INTO p1501174.Image
(nomFichier) values (?)";
$req=array($nameImg);
$bdd->queryBdd($requete,$req);

$requete = "commit";
$bdd->queryCommit($requete);

$requete = "INSERT INTO p1501174.image_description
(id_image) values ((Select id from p1501174.Image where nomFichier = ?))";
$req=array($nameImg);
$bdd->queryBdd($requete,$req);

$requete = "commit";
$bdd->queryCommit($requete);
