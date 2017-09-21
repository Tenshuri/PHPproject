<?php
/*
Navigation pour le site
Auteur ISOARD Axel

*/
?> <!-- Navbar -->
<nav class="navbar navbar-default">

    <div class="navbar-header">
      <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#myNavbar">
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>                        
      </button>
    </div>
    <div class="collapse navbar-collapse" id="myNavbar">
      <ul class="nav navbar-nav navbar-left">
        <li><a href="#">Diaporama</a></li>
        <li><a href="#">ModifierDiapo</a></li>
        <li><a href="#">Contact</a></li>
      </ul>
      <ul class ="nav navbar-nav navbar-right">
      <?php 
        
        if(isset($_SESSION['logged']) && $_SESSION['logged']==false ||!isset($_SESSION['logged']) ){ 
             require_once(PATH_VUE.'connexion.php');
         }else{
           echo 'Bienvenue '.$user.'  ';
           require_once(PATH_VUE.'deconnexion.php');
         }       
        ?>
      </ul>
    </div>
  </nav>
  