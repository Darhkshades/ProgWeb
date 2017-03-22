<?php
	include("connexionBD.php ");
	

	function CreationCompte($nom,$prenom,$tel,$adresse,$pseudo,$motdepasse){
		$connexion=connexion();

		$info_presta=$connexion->prepare("INSERT INTO prestataire values(NULL,?,?,?,?)");
		$info_presta->execute(array($nom,$prenom,$tel,$adresse));
	
		$compte_presta=$connexion->prepare("INSERT INTO compteprestataire values(NULL,?,?)");
		$compte_presta->execute(array($pseudo,$motdepasse));

	}
		?>