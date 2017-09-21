<?php

require_once(PATH_LIB.PATH_BDD.BDD);

$bdd=new bdd($MYSQL_host,$MYSQL_user,$MYSQL_password,$MYSQL_dbname);

$requete = "DELETE FROM p1501174.image_description Where id_image=?;";
$req=array($id);
$bdd->queryBdd($requete,$req);

$requete = "DELETE from p1501174.Image Where id=?;";
$req=array($id);
$bdd->queryBdd($requete,$req);

unlink(PATH_IMAGES.$nomFichier);

