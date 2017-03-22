<?php 
function connexion(){
	try
		{
			$Connect=new PDO ('mysql:host=localhost;dbname=goorgorlu','root','s');
		}
		catch(Exception $e)
		{
			die('Erreur'.$e->getMessage());
		}
		return $Connect;
}


?>