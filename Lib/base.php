<?php

class base {
    function __construct() {
        session_name('p1501174');
        session_start();
        require(PATH_MODEL.'secureKey.php') ;

$secureKey = new secureKey() ;  //instanciation de la classe
$erreur = 'Aucune erreur' ;

//est-ce qu’une requête POST est passée ?

if($_SERVER['REQUEST_METHOD'] == 'post')

{

//on valide la clé

if(!isset($_POST['secure_key']) || !$secureKey->validate())

{

//la clé est invalide

$erreur = 'clé invalide!';

}

else

{

//suite de la validation

$erreur = 'clé valide';

}

}

    }

    public function __destruct(){

    }

    // fonction pour transformer les caracteres speciaux en caractere html 
	public static function isAlpha($string){
		if(isset($string)&& $string != '' && is_string($string) && !preg_match('/[#|\@]/',$string)){
			 return htmlspecialchars($string);
		}else{
		  return false;
	 	}
	 }

     public static function notLogged(){
        $_SESSION['user']='';
        $_SESSION['logged']=false;
     }
     public static function login($user){
         $_SESSION['user']=$user;
         $_SESSION['logged']=true;
     }

     public static function disconnect($user){
         unset($_SESSION['user']);
         unset($_SESSION['logged']);
     }

     public static function alerteMessage($class, $message){
            echo '<div class="alert '.$class.'">'.$message.'</div>';
     }
}
