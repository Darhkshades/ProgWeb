<?php
	include("connexionBD.php ");
	

	function CreationCompte($nom,$prenom,$tel,$adresse,$pseudo,$motdepasse){
		$connexion=connexion();

		$info_presta=$connexion->prepare("INSERT INTO prestataire values(NULL,?,?,?,?)");
		$info_presta->execute(array($nom,$prenom,$tel,$adresse));
		$id_presta=$connexion->lastInsertId();

		$compte_presta=$connexion->prepare("INSERT INTO compteprestataire values(NULL,$id_presta,?,?)");
		$compte_presta->execute(array($pseudo,$motdepasse));

		return $id_presta;
	}


	
		?>