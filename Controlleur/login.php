<?php
// Connexion de l'user 

if(isset($_POST['identifiant']) && $base->isAlpha($_POST['identifiant']) != false && $_POST['identifiant']==$user){

    if(isset($_POST['password']) && $base->isAlpha($_POST['password']) != false && crypt($_POST['password'],'lavieestbleu')==$password){
        $base::login($user);
        header('Location:index.php?page=etatconnecte');
        exit();

    }else 
        $base::notLogged();
        header('Location:index.php?page=index&message=password_invalide');
        exit();

}else
        $base::notLogged();
        header('Location:index.php?page=index&message=identifiant_invalide');
        exit();
