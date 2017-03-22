<?php
include("connexionBD.php ");
function rechercher_service($service){
	$connexion=connexion();
	$reponse="select * from prestataire,renseignement where id=id_presta and service='$service'";
	return $reponse;

}
function rechercher_lieu($lieu){
	$connexion=connexion();
	$reponse="select * from prestataire,renseignement where id=id_presta and adresse='$lieu'";
	return $reponse;

}
function rechercher_service_lieu($service,$lieu){
	$connexion=connexion();
	$reponse="select * from prestataire,renseignement where id=id_presta and service='$service' and adresse='$lieu'";
	return $reponse;


}


?>