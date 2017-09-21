<?php

require_once(PATH_LIB.PATH_BDD.BDD);

$bdd=new bdd($MYSQL_host,$MYSQL_user,$MYSQL_password,$MYSQL_dbname);
$monquery='Select * from p1501174.Image i,p1501174.image_description d where i.id=d.id_image';
$bdd-> queryArray($monquery);
$diapo = $bdd->_donnees;
