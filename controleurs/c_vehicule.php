<?php
$action = $_REQUEST['action'];
include("vues/v_sommaire.php");
echo "<br>";
switch($action){
                  case"ajouterVehic":{
                      include("vues/v_AjoutVehic.php");
                      break;
                  }
                  case"actionModifVehic":{
                      $tache="modif";
                      include("vues/v_ActionChoixVehic.php");
                      break;
                  }
                  case"modifierVehic":{
                      $infosVehic= $actionVehic->getInfosVehic($_POST["numVehic"],$pdo);
                      include("vues/v_ModifVehic.php");
                      break;
                  }
                  case"actionSupprVehic":{
                      $tache="suppr";
                      include("vues/v_ActionChoixVehic.php");
                      break;
                  }
                  case"supprimerVehic":{
                      $infosVehic= $actionVehic->getInfosVehic($_POST["numVehic"],$pdo);
                      include("vues/v_SupprVehic.php");
                      break;
                  }
}
?>