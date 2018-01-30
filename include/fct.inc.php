<?php

function connecterServeurBD() {
    $bdd = new PDO('mysql:host=localhost;dbname=appVehic', 'root', '');
    return $bdd;
}

 /**
 * Teste si un quelconque visiteur est connecté
 * @return vrai ou faux 
 */
function estConnecte(){
  return isset($_SESSION['idVisiteur']);
}
/**
 * Enregistre dans une variable session les infos d'un visiteur
 
 * @param $id 
 * @param $nom
 * @param $prenom
 */
function connecter($unUser){
	$_SESSION['idVisiteur']= $unUser->getId();
	$_SESSION['nom']= $unUser->getNom();
	$_SESSION['prenom']= $unUser->getPrenom();
                  $_SESSION['type']= $unUser->getType();
}
/**
 * Détruit la session active
 */
function deconnecter(){
	session_destroy();
}
/**
 * Transforme une date au format français jj/mm/aaaa vers le format anglais aaaa-mm-jj
 
 * @param $madate au format  jj/mm/aaaa
 * @return la date au format anglais aaaa-mm-jj
*/

?>