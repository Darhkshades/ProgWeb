<?php
	include("connexionBD.php ");


function changerstatutmoment($statut,$pseudo){
	$connexion=connexion();
	$reponse=$connexion->query("select fk_idpresta from compteprestataire where pseudo='$pseudo'");
	$donnees = $reponse->fetch();
	$donnee=(int)($donnees['fk_idpresta']);
	echo $statut;
	$changer=$connexion->query("UPDATE renseignement SET disponibilite='$statut' WHERE id_presta=$donnee");

}


?>