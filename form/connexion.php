<?php
	
	function connect(){
		$base="Just4You";
		$user="root";
		$pass="root";
		$host="localhost";
		try{
			$bdconnect=new PDO('mysql:host='.$host.';dbname='.$base, $user, $pass, array(PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION));
			return $bdconnect;
		}catch(PDOException $e){
			exit('erreur de connection ou requete invalide'.$e->getMessage());
		}
	}
?>