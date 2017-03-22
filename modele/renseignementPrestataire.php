<?php
	include("connexionBD.php ");
	function Renseign($id,$service,$disponibilite,$tarifs,$rayon){	
		$connexion=connexion();
		$rens_presta=$connexion->prepare("INSERT INTO renseignement values(NULL,?,?,?,?,?)");
		$rens_presta->execute(array($id,$service,$disponibilite,$tarifs,$rayon));
	
	}	
?>