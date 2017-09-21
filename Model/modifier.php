<?php

require_once(PATH_LIB.PATH_BDD.BDD);

$bdd=new bdd($MYSQL_host,$MYSQL_user,$MYSQL_password,$MYSQL_dbname);

$requete = "UPDATE p1501174.Image
SET ordre = ?, nomFichier = ? Where id=?;";
$req=array( $ordre,$nomFichier,$id);
$bdd->queryBdd($requete,$req);

$requete = "UPDATE p1501174.image_description 
SET titre = ? , description = ? Where id_image=?;";
$req=array($titre,$description,$id);
$bdd->queryBdd($requete,$req);
