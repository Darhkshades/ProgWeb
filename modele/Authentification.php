<?php 
	include("connexionBD.php ");
	function Authentification($pseudo,$mdp){
		{
			$connexion=connexion();
			$Auth=$connexion->prepare ('SELECT COUNT(*) AS nb FROM compteprestataire where pseudo=? AND motdepasse=?');
			$Auth->execute(array($pseudo,$mdp));
			$tab=$Auth->fetch();
			if($tab['nb']==1)
				return true;
			else
				return false;
		}
}