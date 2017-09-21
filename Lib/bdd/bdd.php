<?php

class bdd {
    private $bdd;
    public $_donnees;
   function __construct($MYSQL_host,$MYSQL_user,$MYSQL_password,$MYSQL_dbname){
        try{

            $this->bdd = new PDO('mysql:host='.$MYSQL_host.';dbname ='.$MYSQL_dbname,$MYSQL_user,$MYSQL_password);
            $this->bdd->exec('SET NAMES utf8');
            $this->bdd->setAttribute(PDO::ATTR_ERRMODE,PDO::ERRMODE_EXCEPTION);
        }catch(Exception $e){
            die('Erreur : '.$e->getMessage());
        }

   }
     public function queryRow($monquery,$mesdonnees=array()){
        try{
            
       $req=$this->bdd -> prepare ($monquery);
       $req->execute($mesdonnees);
       $this->_donnees = $req->fetch();

        }catch(Exception $e){
            die('Erreur : '.$e->getMessage());
        }
   }

   public function queryArray($monquery,$mesdonnees=array()){
        try{
            
       $req=$this->bdd -> prepare ($monquery);
       $req->execute($mesdonnees);
       $this->_donnees = $req->fetchAll();

        }catch(Exception $e){
            die('Erreur : '.$e->getMessage());
        }
   }
      public function queryBdd($monquery,$mesdonnees){
        try{
            
       $req=$this->bdd -> prepare ($monquery);
       $req->execute($mesdonnees);
        }catch(Exception $e){
            die('Erreur : '.$e->getMessage());
        }
   }
     public function queryCommit($monquery){
        try{
            
       $req=$this->bdd -> prepare ($monquery);
       $req->execute();
        }catch(Exception $e){
            die('Erreur : '.$e->getMessage());
        }
   }
}
