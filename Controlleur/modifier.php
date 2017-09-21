<?php
$ordre = $_POST['ordre'];
$nomFichier=$_POST['nomFichier'];
$titre=$_POST['titre'];
$description=$_POST['description'];
$id=$_POST['id'];


if(isset($_POST['modifier']))
{
require_once(PATH_MODEL.'modifier.php');
require_once(PATH_VUE.'etatconnecte.php');
}
else if(isset($_POST['supprimer']))
{
require_once(PATH_MODEL.'supprimer.php');
require_once(PATH_VUE.'etatconnecte.php');
}
?>


