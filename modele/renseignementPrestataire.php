<?php
	include("connexionBD.php ");
	function Renseign($service,$disponibilite,$tarifs,$rayon){	
		$connexion=connexion();
		$rens_presta=$connexion->prepare("INSERT INTO renseignement values(NULL,?,?,?,?)");
		$rens_presta->execute(array($service,$disponibilite,$tarifs,$rayon));
	
	}
	?>