<?php
if( $_SESSION['logged']==true){
  require_once(PATH_VUE.'etatconnecte.php');
}else{
      require_once(PATH_VUE.'erreur.php');
}