<?php
$action = $_REQUEST['action'];
include("vues/v_sommaire.php");
echo "<br>";
switch($action){
                  case"ajouterClient":{
                      $tab2=$uneAction->getMinAdmin($pdo);
                      include("vues/v_AjoutClient.php");
                      break;
                  }
                  case"actionModifClient":{
                      $tache="modif";
                      include("vues/v_ActionChoixClient.php");
                      break;
                  }
                  case"modifierClient":{
                      $infosClient= $actionClient->getInfosClient($_POST["idClient"],$pdo);
                      include("vues/v_ModifClient.php");
                      break;
                  }
                  case"actionSupprClient":{
                      $tache="suppr";
                      include("vues/v_ActionChoixClient.php");
                      break;
                  }
                  case"supprimerClient":{
                      $infosClient= $actionClient->getInfosClient($_POST["idClient"],$pdo);
                      include("vues/v_SupprClient.php");
                      break;
                  }
                  case"listeRev":{
                      include("vues/v_listeaReviser.php");
                      break;
                  }
                  case"listeClients":{
                      include("vues/v_listeClients.php");
                      break;
                  }
}
?>