<?php 
function connexion(){
	try
		{
			$Connect=new PDO ('mysql:host=localhost;dbname=goorgorlu','root','');
		}
		catch(Exception $e)
		{
			die('Erreur'.$e->getMessage());
		}
		return $Connect;
}


?>