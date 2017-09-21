<?php

Class SecureKey

{

private $secureKey ;  //variable qui permettra de stocker la clé générée

private $old_secureKey ; //varible qui stocke l’anciene valeur de la clé, vous comprendrez plus tard

function __construct()
{
if(isset($_SESSION['secure_key']))
{
$this->old_secureKey = $_SESSION['secure_key'];
}

}

public function validate()

{

if($_POST['secure_key'] == $this->old_secureKey)

{

return true; //notre clé est valide, on retourne vrai

}

else

{

return false; //notre clé n’est pas valide

}

}

//fonction pour générer la clé
private function generateKey()

{

$ip = $_SERVER['REMOTE_ADDR'] ;  // récupération de l’adresse IP

//on utlilise mt_rand() pour avoir une valeur plus aléatoire qu’avec la fonction rand(),

//et on passe true en paramètre à uniqid() pour lui dire qu’on veut une longue chaine de caractère

$uniqid = uniqid(mt_rand(),true) ;

return md5($ip . $uniqid); // on retourn le hash

}
public function outputKey()

{

//on génère la clé et on l’enregistre dans la classe

$this->secureKey = $this->generateKey() ;

//enregistrement de la clé dans la session

$_SESSION['secure_key'] = $this->secureKey ;

//envoi de la clé dans le formulaire

return "<input type= 'hidden' name='secure_key' id='secure_id' value='" .$this->secureKey."' />";

}
}